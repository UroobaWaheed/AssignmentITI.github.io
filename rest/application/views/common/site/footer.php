 <footer class="ct-footer" style="background-color:dark-gray">

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            
            <img class="img-responsive footer-logo" src="<?php echo get_second_site_logo();?>" alt="FoodCourt">
            <p class="text-light">
NEELI MIRCH
A taste of home where we prioritize what you need to get you on your way. We strive to keep you at your best, and we remain loyal to you, your tastes and your time.</p>
        </div>
        <?php $accepted_cards = get_accepted_cards(); 
                $clg = 3;
            if(!empty($accepted_cards)) {
                $clg = 2;
        ?>
        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
            <h4 class="footer-head"><?php echo get_languageword('Accepted_Payments');?></h4>
            <ul class="cs-footer-links">
               <?php 
                
               foreach($accepted_cards as $card) {?>
                <li class="dropdown ct-lang">
                        <img width="48px" height="24px" src="<?php echo  CARD_IMG_THUMB_PATH.$card->image_name; ?>">
                    </li>
                    <?php } ?>
            </ul>
        </div>
    <?php } ?>
        <div class="col-lg-<?php echo $clg; ?> col-md-<?php echo $clg; ?> col-sm-6 col-xs-6">
            <h4 class="footer-head text-light" style="font-size:24px;">We Got You</h4>
            <ul class="cs-footer-links">
                <li><a style="color: rgb(34, 165, 229);font-size:20px;" href="<?php echo URL_FAQS;?>"><strong>Help</strong></a>
                </li>
                <li><a style="color: rgb(34, 165, 229);font-size:20px;"  href="<?php echo base_url().'welcome/feedback';?>"><strong>Feeback</strong></a>
                </li>
                <li><a style="color: rgb(34, 165, 229);font-size:20px;" href=""><strong>Why Choose US</strong></a>
                </li>
                <li><a style="color: rgb(34, 165, 229);font-size:20px;" href="<?php echo URL_CONTACT_US;?>"><strong>Contact Us</strong></a>
                </li>
                
            </ul>
        </div>
        <div class="col-lg-<?php echo $clg; ?> col-md-<?php echo $clg; ?> col-sm-6 col-xs-6">

            <?php 
            $cms_pages = get_pages();
            if (!empty($cms_pages)) {
            ?>

            <h4 class="footer-head" style="font-size:24px;">Get to Know Us</h4>
            
            
            <ul class="cs-footer-links">
                
                <?php if (in_array('about-us', $cms_pages)) { ?>
                <!-- <li><a style="color: rgb(34, 165, 229);font-size:20px;" href="<?php echo URL_ABOUT_US;?>"><strong>Locate Us</strong></a>
                </li> -->
                <?php } if (in_array('how-it-works', $cms_pages)) { ?>

                <li><a style="color: rgb(34, 165, 229);font-size:20px;" href="<?php echo base_url().'welcome/join_us';?>"><strong>Join Us</strong></a>
                </li>
                <?php }  if (in_array('terms-conditions', $cms_pages)) { ?>

                <li><a style="color: rgb(34, 165, 229);font-size:20px;" href="#" onclick="show_popup('signup')"><strong>Sign Up</strong></a>
                </li>
                <?php } if (in_array('privacy-policy', $cms_pages)) { ?>

                <li><a style="color: rgb(34, 165, 229);font-size:20px;" href="<?php echo URL_PRIVACY_POLICY;?>"></a>
                </li>
                 <?php } ?>
                
            </ul>
            <?php } ?>

        </div>
        
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="media cs-media">
                <div class="media-left ct-icon-font">
                    <a href="<?php echo URL_CONTACT_US;?>"><i class="fa fa fa-clock-o" aria-hidden="true"></i></a>
                </div>
                <div class="media-body ct-media-bodys">
                    <h4 class="media-heading"><?php echo get_languageword('opening_time');?></h4>
                    <p style="font-size:25px"><strong> <?php if(isset($this->config->item('site_settings')->from_time)) echo $this->config->item('site_settings')->from_time;?> - <?php if(isset($this->config->item('site_settings')->to_time)) echo $this->config->item('site_settings')->to_time;?></strong></p>
                </div>
            </div>
            <div class="media cs-media">
                <div class="media-left ct-icon-font">
                    <a href="<?php echo URL_CONTACT_US;?>"><i class="fa fa-phone" aria-hidden="true"></i></a>
                </div>
                <div class="media-body ct-media-bodys">
                    <h1 class="media-heading"><?php echo get_languageword('call_us');?></h1>
                    <p style="font-size:25px"><strong><?php if(isset($this->config->item('site_settings')->land_line)) echo $this->config->item('site_settings')->land_line;?></strong></p>
                </div>
            </div>
            <div class="ct-social h4" style="margin-top:50px;margin-left:40px">
                <?php if(isset($this->config->item('social_networks')->facebook) && $this->config->item('social_networks')->facebook != '') { ?>
                <a  href="<?php echo $this->config->item('social_networks')->facebook;?>" target="_blank"><i style="color:white;font-size:30px;" class="fa fa-facebook" aria-hidden="true"></i></a>
                <?php } if(isset($this->config->item('social_networks')->twitter) && $this->config->item('social_networks')->twitter != '') { ?>
                <a href="<?php echo $this->config->item('social_networks')->twitter;?>" target="_blank"><i style="color:white;font-size:30px;" class="fa fa-twitter" aria-hidden="true"></i></a>
                <?php } if(isset($this->config->item('social_networks')->instagram) && $this->config->item('social_networks')->instagram != '') {?>
                <a href="<?php echo $this->config->item('social_networks')->instagram;?>" target="_blank"><i style="color:white;font-size:30px;" class="fa fa-instagram" aria-hidden="true"></i></a>
               
                <?php } ?>
            </div>
            
        </div>
    </div>

     </div>
  </footer>
        <section class="ct-subfoot" style="background-color:dark-gray;text-align:center;border:1px solid black;color:white;">
        <div class="">
            <div class="">
                <div class="">
                    <div class="text-light"><?php if(isset($this->config->item('site_settings')->rights_reserved_content)) echo $this->config->item('site_settings')->rights_reserved_content;?></div>
                </div>
                
				 <!-- <div class="col-sm-6 hidden-xs">
                    <ul class="copyright-links">
                        <?php if(!$this->ion_auth->logged_in()) {?>

                        <li class="dropdown ct-lang">
                            <a href="#" onclick="show_popup('login')" class="dropdown-toggle ct-toggle ct-padding"> <?php echo get_languageword('login');?> </a>
                        </li>
                        <li class="dropdown ct-lang">
                            <a href="#" onclick="show_popup('signup')" class="dropdown-toggle ct-toggle ct-padding"> <?php echo get_languageword('register');?> </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div> -->
				
            </div>
       </div>
    </section>
</div>

<!--  Bootstrap core JavaScript
    ============================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!--script src="<?php //echo JS_FRONT_JQUERY_MIN;?>"></script-->

<?php $this->load->view('common/popup_script');?>



<script src="<?php echo JS_FRONT_BOOTSTRAP_MIN;?>"></script>
<script src="<?php echo JS_FRONT_SEARCH_BOX;?>"></script>
<script src="<?php echo JS_FRONT_BOOTSTRAP_OFFCANVAS;?>"></script>


<!--CHOSEN JS-->
<script type="text/javascript" src="<?php echo JS_CHOSEN_JQUERY_MIN;?>"></script>

<!--PNOTIFY JS-->
<script type="text/javascript" src="<?php echo PNOTIFY_MIN_JS;?>"></script>
<script type="text/javascript" src="<?php echo PNOTIFY_ANIMATE_JS;?>"></script>
<script type="text/javascript" src="<?php echo PNOTIFY_BUTTON_JS;?>"></script>
<script type="text/javascript" src="<?php echo PNOTIFY_CALLBACK_JS;?>"></script>
<script type="text/javascript" src="<?php echo PNOTIFY_CONFIRM_JS;?>"></script>
<script type="text/javascript" src="<?php echo PNOTIFY_DESKTOP_JS;?>"></script>

<script src="<?php echo JS_FRONT;?>ResizeSensor.min.js" type="text/javascript"></script>
<script src="<?php echo JS_FRONT;?>theia-sticky-sidebar.min.js" type="text/javascript"></script>


<script>
jQuery(document).ready(function() {
    jQuery('#item-sidebar').theiaStickySidebar({
        additionalMarginTop: 30
    });

    
/*addEventListener(document, "touchstart", function(e) {
    console.log(e.defaultPrevented);  // will be false
    e.preventDefault();   // does nothing since the listener is passive
    console.log(e.defaultPrevented);  // still false
}, Modernizr.passiveeventlisteners ? {passive: true} : false);
*/

});
</script>

<script>
$(document).ready(function() {
    $(".chzn-select").chosen();
});


function photo(input,name)
{
	if (input.files && input.files[0]) 
	{
		var reader = new FileReader();
		reader.onload = function (e) 
		{
			input.style.width = '50%';
			$('#'+name+'').attr('src', e.target.result);
			$('#'+name+'').fadeIn();
		};
		reader.readAsDataURL(input.files[0]);
	}
}

function checkNotify(title,text,type)
{
    var notification = new PNotify({
        title: title,
        text: text,
        type: type
    });

    notification.open();
}
</script>




<script src="<?php echo JS_FUNCTIONS;?>"></script>
<script>
var add_cart_target_url = '<?php echo base_url();?>cart/add_cart_item';

var update_cart_target_url = '<?php echo base_url();?>cart/update_cart_item';

var remove_cart_target_url = '<?php echo base_url();?>cart/remove_cart_item';

var currency_symbol = '<?php echo $this->config->item('site_settings')->site_title;?>';
</script>

</body>
</html>
