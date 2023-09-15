/***************************************************************************
@$providername$
  @author: (c) http://myroundcube.googlecode.com
****************************************************************************/
var name="$providername$";
var ver="2010-05-25";
var weburl = "$providerurl$";

function init() {
  this.dataURL=weburl + "/?_action=plugin.webmail_notifier";
  this.loginData=[weburl,"_user","_pass","&_task="+encodeURIComponent("mail")+"&_action="+encodeURIComponent("login")+"&_webmail_notifier="+encodeURIComponent("1")+"&_timezone="+encodeURIComponent(new Date().getTimezoneOffset() / -60)];
  this.mailURL=weburl;
}

function getCount(aData) {
  var fnd=aData.match(/<b>(\d+?)<.b>/);
  if(fnd) {
    var num = fnd[1];
    return num;
  }else {
    return -1;
  }
}