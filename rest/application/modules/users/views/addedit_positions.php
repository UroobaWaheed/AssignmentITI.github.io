  <div id="page-wrapper">


               <div class="row">

                <div class="col-md-12">

				<?php echo $this->session->flashdata('message'); ?>

                    <!-- Form Elements -->

                    <div class="panel panel-default">

						

                        <div class="panel-heading">

                            <?php if(isset($pagetitle)) echo $pagetitle;?>

							

							<!-- <a title="<?php echo get_languageword('go_to_list'); ?>" class="btn btn-primary btn-xs pull-right" href="<?php echo URL_USERS_INDEX; ?>"><i class="fa fa-list"></i>

							</a> -->

                        </div>

                        <div class="panel-body">

						 

                            <div class="row">

							<?php

						$attributes = array('name'=>'km_form','id'=>'km_form');

						echo form_open('users/addedit_positions',$attributes);?>

							

                       <div class="col-md-6">

                                 

						<div class="form-group">

						 <label><?php echo get_languageword('title').required_symbol();?></label>

						<?php

						$val='';

						if(isset($record) && !empty($record))

						{

							$val = $record->title;

						}

						else if(isset($_POST))

						{

							$val = set_value('title');

						}

						

						$element = array('name'=>'title',

						'value'=>$val,

						'class'=>'form-control');

						echo form_input($element).form_error('title');

						?>

					  </div>

					
					<div class="form-group">

						 <label><?php echo get_languageword('seats').required_symbol();?></label>

						<?php

						$val='';

						if(isset($record) && !empty($record))

						{

							$val = $record->seats;

						}

						else if(isset($_POST))

						{

							$val = set_value('seats');

						}

						

						$element = array('name'=>'seats',

						'value'=>$val,

						'class'=>'form-control');

						echo form_input($element).form_error('seats');

						?>

					  </div>
					  
					 
					  
					  status 
							<?php $check ='';
					  if(isset($record) && $record->status==1)

						{

							$check='checked';

						}?>
					  <input type='checkbox' value='1' name='status' <?=$check?>>
					  
					  
					<div class="form-group pull-right">

						<?php 

						$value='';

						if(isset($record))

						{

							$value = $record->id;

						}

						echo form_hidden('id',$value);?>

						

						<button type="submit" name="addedit_km" value="addedit_km" class="btn btn-primary"><?php echo get_languageword('save');?></button>

						

						<a class="btn btn-warning" href="<?php echo base_url().'users/positions';?>"><?php echo get_languageword('cancel');?></a>

					</div>

					

					

                        </div>

								<?php echo form_close();?>

                            </div>

                        </div>

                    </div>

                     <!-- End Form Elements -->

                </div>

            </div>


        <!-- /. PAGE INNER  -->

            </div>

        <!-- /. PAGE WRAPPER  -->

		

		

<!-- Form Validation Plugins /Start -->

<?php if(!empty($css_js_files) && in_array('form_validation', $css_js_files)) { ?>

<script type="text/javascript" src="<?php echo JS_VALIDATE_MIN;?>"></script>

<script type="text/javascript">

(function($,W,D)

{

      var JQUERY4U = {};

   

      JQUERY4U.UTIL =

      {

          setupFormValidation: function()

          {

              //Additional Methods

			//form validation rules

              $("#km_form").validate({

					ignore: "",

                  rules: {

					 first_name: {

						 required: true

					 },

                     last_name: {

						required: true

					 },

					 email: {

						 required: true,

						 email: true

						
					 },

					 phone: {

						 required: true

					 }

                  },

				 messages: {

					 first_name: {

						 required: "<?php echo get_languageword('first_name_required');?>"

					 },

                     last_name: {

						required: "<?php echo get_languageword('last_name_required');?>"

					 },

					 email: {

						 required: "<?php echo get_languageword('email_required');?>"

					 },

					 phone: {

						 required: "<?php echo get_languageword('phone_required');?>"

					 }

					
   			},

                  

                  submitHandler: function(form) {

                      form.submit();

                  }

              });

          }

      }

   

      //when the dom has loaded setup form validation rules

      $(D).ready(function($) {

          JQUERY4U.UTIL.setupFormValidation();

      });

   

   })(jQuery, window, document); 

</script>

<?php } ?>