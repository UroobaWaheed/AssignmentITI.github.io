
<style>
input[type=number]`::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
</style>

<div class="gray-bg pt-8">
<div class="container " style="text-align:center;">
  <div class="search-wrapper contact-overlay" style="margin-bottom:20px">


        <div class="row">
            <div class="col-sm-6 col-md-5 col-xs-12">
               <?php 
$site_adres='';
$site_adres .= $this->config->item('site_settings')->address.',';
$site_adres .= $this->config->item('site_settings')->city.',';
$site_adres .= $this->config->item('site_settings')->state.'-';
$site_adres .= $this->config->item('site_settings')->zip;
?>     
    <!--address details for contactus-->
      <div class="col-sm-12 col-md-1 col-xs-12 hidden-sm"></div>


      <div class="text-left">

            <?php echo $this->session->flashdata('message'); ?>

      <h4 class="w-head m-mt-3 "><?php echo get_languageword('This Form Is for Feed Back Purpose');?></h4>
      <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	                </div>
      <form method="post" action="<?php echo base_url().'welcome/feedback';?>" name="feedback_form" id="feedback_form" class="" >
      
        
        <!-- Text input-->
        <div class="form-group">
          
          <?php 
          $element=array('type'=>'text',
                   'name'=>'name',
                   'class'=>'form-control',
                   'placeholder'=>get_languageword('name'));
          echo form_input($element);
          echo form_error('name');          
          ?>
          
          
        </div>
        
        
        <div class="form-group">
          
          <?php 
          $element=array('type'=>'email',
                   'name'=>'email',
                   'class'=>'form-control',
                   'placeholder'=>get_languageword('email'));
          echo form_input($element);
          echo form_error('email'); 
          ?>
        </div>
        
        
        <div class="form-group">
          
          <?php 
          $element=array('type'=>'text',
                  'type' => 'number',
                  'oninput' => "javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);",
                  'maxlength' => "11",
                   'name'=>'phone',
                   'class'=>'form-control',
                   'placeholder'=>get_languageword('phone'));
          echo form_input($element);
          echo form_error('phone');
          ?>
          
        </div>
        
      
      <!-- Text area -->
      
        <div class="form-group">
          
          <?php 
          $element=array('type'=>'text',
           'name'=>'message',
           'class'=>'form-control',
           'placeholder'=>get_languageword('message'),
           'rows'=>4
           );
           
           
          echo form_textarea($element);
          echo form_error('message'); 
          ?>
          
        </div>
        
      <!-- Button -->
      <div class="form-group">
      
      <button type="submit" name="feedback" class="btn btn-primary"><?php echo get_languageword('Give Feedback');?> </button>
      
      </div>
      
      </form>

      </div>
      
  

            </div>
            <h4 class="w-head mt-5"><?php echo get_languageword('follow_us');?></h4>
       <ul class="ct-social ul">
          
       <?php if(isset($this->config->item('social_networks')->facebook) && $this->config->item('social_networks')->facebook != '') { ?>
          <a href="<?php echo $this->config->item('social_networks')->facebook;?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <?php } if(isset($this->config->item('social_networks')->twitter) && $this->config->item('social_networks')->twitter != '') { ?>
         <a href="<?php echo $this->config->item('social_networks')->twitter;?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <?php } if(isset($this->config->item('social_networks')->instagram) && $this->config->item('social_networks')->instagram != '') {?>
          <a href="<?php echo $this->config->item('social_networks')->instagram;?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          
           <?php } ?> 
           
           </ul> 
       </div>
        </div>
    </div>
    </div>
</div>


    
    






<script type="text/javascript" src="<?php echo JS_VALIDATE_MIN;?>"></script>
<script type="text/javascript">
function showalert(result)
        {

                try{
                    $('#success').removeClass('alert-danger');
                    $('#success').removeClass('alert-success');
                }catch(err)
                {

                }
                $('#success').addClass('alert-'+(result.statusCode==200 ? 'success': 'danger'));
                $('#success').html(result.message);
                $('#success').show();
        }
   $(document).ready(function() {
       
       $('#feedback_form').on('submit', function(e) {

             e.preventDefault();
         //$("#submit").attr("disabled", "disabled");
             var name = $('name').val();
             var email = $('email').val();
             var phone = $('phone').val();
             var message = $('message').val();
         if(name!="" && email!="" && phone!="" && message!=""){
                 //var data_value = unescape($(this).serialize());
                 $("#success").hide();	
           $.ajax({
             url: "<?= base_url()?>feedback/ajax_feedback",
             type: "POST",
             data:  new FormData(this),
                     dataType:'json',
                     contentType: false,
                     cache: false,
                     processData:false,
                     
             success: function(dataResult){
               // var dataResult = JSON.parse(dataResult);
                        showalert(dataResult);
                        $("#submit").removeAttr("disabled");
               if(dataResult.statusCode === 200){
                             
                 
                 $('#feedback_form').find('input:text').val('');
                 
                           
                             //alert(dataResult.message);
               }
               
             }
           });
         }
         else{
           alert('Please fill all the field !');
         }
       });
     });
</script>