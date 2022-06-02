<div id="page-wrapper">

           
            <div class="row">

                <div class="col-md-12">

				
					<?php $this->load->view('common_sections/multi_action_section',array('delete'=>true)); ?>



					<!-- Advanced Tables -->

                    <div class="panel panel-default">

                        <div class="panel-heading">

                             <?php if(!empty($pagetitle)) echo $pagetitle;?>

                        </div>

                        <div class="panel-body">

                           

							

			<?php echo $this->session->flashdata('message'); ?>
<a href="<?=base_url()?>users/feedbacks" class="btn btn-danger">< Back</a>

	<div class="table-responsive" style="margin:auto;text-align:center;margin-left:150px">
			 <div class="text-center" style="display:flex;">
				 <h5 style="margin: right 12px;"><strong>Name:</strong></h5>
				 <h5> <?=$feedback_users->name?></h5> 
				 </div>
			 	<div class="text-center" style="display:flex;">
				 <h5 style="margin-right:20px;"><strong>Email:</strong></h5>
				 <h5 > <?=$feedback_users->email?></h5> 
				 </div>
				
				 <div class="text-center" style="display:flex;">
				 <h5 style="margin-right:20px;"><strong>Phone:</strong></h5>
				 <h5> <?=$feedback_users->phone?></h5> 
				 </div>
				 <div class="text-center" style="display:flex;">
				 <h5 style="margin-right:20px;"><strong>Message</strong></h5>
				 <h5> <?=$feedback_users->message?></h5> 
				 </div>
				 </div>			
			</div>

			</div>

			</div>

		 </div>

                        </div>
                   
                    <!--End Advanced Tables -->
                </div>

				<?php $this->load->view('modals/delete-modal'); ?>