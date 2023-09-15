<div class="hrm-wrapper">
<div class="wrapper-inside">

<?php if ($roledata != 1)
     { ?>
<div class="hrm-col-top-left">
	<div class="hrm-col-half">
    <a href="" class="hrm-button left nomargin-bottom apply "></a>
    
	</div>
    <div class="hrm-col-half"> <h4 class="btn-label left">Apply Leave</h4>
    </div>
    <div class="hrm-col-half">
    <img class="round-image top-left-round" src="images/round-img-1.png"/>    
    </div>   
</div>
<?php } elseif($roledata == 1){ ?>
    <div class="hrm-col-top-left">
	<div class="hrm-col-half">
    <a href="" class="hrm-button left nomargin-bottom assign"></a>
    
	</div> 
    <div class="hrm-col-half"> <h4 class="btn-label left">Assign Leave</h4>
    </div>
    <div class="hrm-col-half">
    <img class="round-image top-left-round" src="images/round-img-2.png"/>    
    </div>   
    </div>
    
    <?php } ?>
   
    <?php if ($roledata != 1 or $roledata != 2)
          {  ?>
<div class="hrm-col-top-right">
    <div class="hrm-col-half">
    <img class="round-image bottom-right-round" src="images/round-img-3.png"/>    
    </div> 
    <div class="hrm-col-half"> <h4 class="btn-label right">My Leave Status</h4>
    </div>
	<div class="hrm-col-half">    
            <a href="" class="hrm-button right nomargin-top status"></a>
	</div>    
</div>

 <?php } elseif ($roledata == 1){ ?>   
<div class="hrm-col-bottom-right">
    <div class="hrm-col-half">
    <img class="round-image bottom-right-round" src="images/round-img-3.png"/>    
    </div> 
    <div class="hrm-col-half"> <h4 class="btn-label right">Employee Leave Status</h4>
    </div>
	<div class="hrm-col-half">
    
	<a href="" class="hrm-button right nomargin-top status"></a>
	</div>
    
</div>
 <?php } elseif ($roledata == 2){?> 
    
<div class="hrm-col-bottom-right">
    <div class="hrm-col-half">
    <img class="round-image bottom-right-round" src="images/round-img-3.png"/>    
    </div> 
    <div class="hrm-col-half"> <h4 class="btn-label right">Employee Leave Status</h4>
    </div>
	<div class="hrm-col-half">
    
	<a href="" class="hrm-button right nomargin-top status"></a>
	</div>
    
</div>
 <?php } ?> 
    <?php if ($roledata == 1){?>
    <div class="hrm-col-bottom-left">
	<div class="hrm-col-half">
    <img class="round-image bottom-left-round" src="images/round-img-4.png"/>    
    </div> 
    
	<div class="hrm-col-half">
    
	<a href="" class="hrm-button nomargin-bottom left  balance"></a>
	</div>
    <div class="hrm-col-half"> <h4 class="btn-label margin-bottom left">Leave Balance</h4>
    </div>
    </div>
    
    <div class="hrm-col-bottom-right">
	<div class="hrm-col-half">
    <img class="round-image bottom-right-round" src="images/round-img-4.png"/>    
    </div> 
    
	<div class="hrm-col-half">
    
	<a href="" class="hrm-button nomargin-bottom right  balance"></a>
	</div>
    <div class="hrm-col-half"> <h4 class="btn-label margin-bottom right">Profile</h4>
    </div>
    </div>
    <?php } elseif ($roledata == 2){?>
    
        <div class="hrm-col-bottom-left">
            <div class="hrm-col-half">
            <img class="round-image bottom-left-round" src="images/round-img-3.png"/> 
            </div> 

            <div class="hrm-col-half">

            <a href="" class="hrm-button nomargin-bottom left status"></a>
            </div>
            <div class="hrm-col-half"> <h4 class="btn-label left">My Leave Status</h4>
            </div>
        </div>
    
        <div class="hrm-col-bottom-right">
        <div class="hrm-col-half">
        <img class="round-image bottom-right-round" src="images/round-img-3.png"/>    
        </div> 
        <div class="hrm-col-half"> <h4 class="btn-label right">Employee Leave Status</h4>
        </div>
            <div class="hrm-col-half">

            <a href="" class="hrm-button right nomargin-top status"></a>
            </div>
    
        </div>
    
    <?php } elseif($superfooter != NULL){ ?>
        <div class="hrm-col-bottom-left">
        <div class="hrm-col-half">
        <img class="round-image bottom-left-round" src="images/round-img-3.png"/>    
        </div> 
        <div class="hrm-col-half"> <h4 class="btn-label right">Employee Leave Status</h4>
        </div>
            <div class="hrm-col-half">

            <a href="" class="hrm-button nomargin-bottom left status"></a>
            </div>
    
        </div>
    
        <div class="hrm-col-bottom-right">
            <div class="hrm-col-half">
        <img class="round-image bottom-right-round" src="images/round-img-4.png"/>    
        </div> 

            <div class="hrm-col-half">

            <a href="" class="hrm-button nomargin-bottom right balance"></a>
            </div>
        <div class="hrm-col-half"> <h4 class="btn-label margin-bottom right">Leave Balance</h4>
        </div>
        </div>
    <?php } else{?>
        <div class="hrm-col-bottom-left">
	<div class="hrm-col-half">
    <img class="round-image bottom-left-round" src="images/round-img-4.png"/>    
    </div> 
    
	<div class="hrm-col-half">
    
	<a href="" class="hrm-button nomargin-bottom left balance"></a>
	</div>
    <div class="hrm-col-half"> <h4 class="btn-label margin-bottom left">Leave Balance</h4>
    </div>
    </div>
    
    <div class="hrm-col-bottom-right">
	<div class="hrm-col-half">
    <img class="round-image bottom-right-round" src="images/round-img-4.png"/>    
    </div> 
    
	<div class="hrm-col-half">
    
	<a href="" class="hrm-button nomargin-bottom right balance"></a>
	</div>
    <div class="hrm-col-half"> <h4 class="btn-label margin-bottom right">Profile</h4>
    </div>
    </div>
    <?php }?>
    
    
</div>

</div>