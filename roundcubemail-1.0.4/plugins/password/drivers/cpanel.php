<?php

/**
 * cPanel Password Driver
 *
 * Driver that adds functionality to change the users cPanel password.
 * The cPanel PHP API code has been taken from: http://www.phpclasses.org/browse/package/3534.html
 *
 * This driver has been tested with Hostmonster hosting and seems to work fine.

 *
 * @version 1.0
 * @author Fulvio Venturelli <fulvio@venturelli.org>
 */

class HTTP
{
    function HTTP($host, $username, $password, $port, $ssl, $theme)
    {
        $this->ssl = $ssl ? 'ssl://' : '';
        $this->username = $username;
        $this->password = $password;
        $this->theme = $theme;
        $this->auth = base64_encode($username . ':' . $password);
        $this->port = $port;
        $this->host = $host;
        $this->path = '/webmail/' . $theme . '/';
    }
    function getData($url, $data = '')
    {
        $url = $this->path . $url;
        if(is_array($data))
        {
            $url = $url . '?';
            foreach($data as $key=>$value)
            {
                $dataurl .= urlencode($key) . '=' . urlencode($value) . '&';
            }
            $dataurl = substr($dataurl, 0, -1);
        }
        $response = '';
        $fp = fsockopen($this->ssl . $this->host, $this->port);
        if(!$fp)
        {
            return false;
        }
        $out = "POST " . $url . "  HTTP/1.1\r\n";
        $out .= 'Authorization: Basic ' . $this->auth . "\r\n";
        $out .= "Content-Type: application/x-www-form-urlencoded\r\n";
        $out .= "Content-Length: ".strlen($dataurl)."\r\n";
        $out .= "Connection: close\r\n\r\n";
        $out .= $dataurl;
        
        
        fwrite($fp, $out);
        while (!feof($fp))
        {
            $response .= @fgets($fp);
        }
        fclose($fp);
        return $response;
    }
}


class emailAccount
{          
    function emailAccount($host, $port, $ssl, $theme, $address, $curpass)
    {
        if(strpos($address, '@'))
        {
            list($this->email, $this->domain) = explode('@', $address);
        }
        else
        {
            list($this->email, $this->domain) = array($address, '');
        }
    $this->HTTP = new HTTP($host, $address, $curpass, $port, $ssl, $theme);
    }

 /*
  * Change email account password
  *
  * Returns true on success or false on failure.
  * @param string $password email account password
  * @return bool
  */
    function setPassword($password)
    {
        $data['email'] = $this->email;
        $data['domain'] = $this->domain;
        $data['password'] = $password;
        $data['password2'] = $password;
        $response = $this->HTTP->getData('mail/dopasswdpop.html', $data);
        if(strpos($response, 'success') && !strpos($response, 'failure'))
        {
            return true;
        }
        return false;
    }
}


function password_save($curpas, $newpass)
{
    $rcmail = rcmail::get_instance();

    // Create a cPanel email object
    $cPanel = new emailAccount($rcmail->config->get('password_cpanel_host'),
    $rcmail->config->get('password_cpanel_port'),
    $rcmail->config->get('password_cpanel_ssl'),
    $rcmail->config->get('password_cpanel_theme'),
    $_SESSION['username'],
    $rcmail->decrypt($_SESSION['password']));

    if ($cPanel->setPassword($newpass)){
        return PASSWORD_SUCCESS;
    }
    else
    {
       return PASSWORD_ERROR;
    }
}

?>
