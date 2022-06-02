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
<a href="<?=base_url()?>users/resumes" class="btn btn-danger">< Back</a>

			 <div class="table-responsive" style="margin:auto;text-align:center;margin-left:150px">
			 <div class="text-center" style="display:flex;">
				 <h5 style="margin: right 12px;"><strong>Position Applied For:</strong></h5>
				 <h5> <?=$resume_user->jobapply?></h5> 
				 </div>
			 	<div class="text-center" style="display:flex;">
				 <h5 style="margin-right:20px;"><strong>FullName:</strong></h5>
				 <h5 > <?=$resume_user->fullname?></h5> 
				 </div>
				
				 <div class="text-center" style="display:flex;">
				 <h5 style="margin-right:20px;"><strong>Date of Birth:</strong></h5>
				 <h5> <?=$resume_user->dob?></h5> 
				 </div>
				 <div class="text-center" style="display:flex;">
				 <h5 style="margin-right:20px;"><strong>Birth Country</strong></h5>
				 <h5> <?=$resume_user->birthcountry?></h5> 
				 </div>
				 <div class="text-center" style="display:flex;">
				 <h5 style="margin-right:20px;"><strong>Birth City:</strong></h5>
				 <h5> <?=$resume_user->birthcity?></h5> 
				 </div>
				 <div class="text-center" style="display:flex;">
				 <h5 style="margin-right:20px;"><strong>Martial Status:</strong></h5>
				 <h5> <?=$resume_user->martial?></h5> 
				 </div>
				 <div class="text-center" style="display:flex;">
				 <h5 style="margin-right:20px;"><strong>Gender:</strong></h5>
				 <h5> <?=$resume_user->gender?></h5> 
				 </div>
				 <div class="text-center" style="display:flex;">
				 <h5 style="margin-right:20px;"><strong> Email:</strong></h5>
				 <h5> <?=$resume_user->email?></h5> 
				 </div>
				 <div class="text-center" style="display:flex;">
				 <h5 style="margin-right:20px;"><strong>Phone :</strong></h5>
				 <h5> <?=$resume_user->phone?></h5> 
				 </div>
				 <div class="text-center" style="display:flex;">
				 <h5 style="margin-right:20px;"><strong>Address :</strong></h5>
				 <h5> <?=$resume_user->address?></h5> 
				 </div>
				 <div class="text-center" style="display:flex;">
				 <h5 style="margin-right:20px;"><strong>Qualification:</strong></h5>
				 <h5> <?=$resume_user->qualification?></h5> 
				 </div>
				 <div class="text-center" style="display:flex;">
				 <h5 style="margin-right:20px;"><strong>Experience:</strong></h5>
				 <h5> <?=$resume_user->experience?></h5> 
				 </div>
				 <div class="text-center" style="display:flex;">
				 <h5 style="margin-right:20px;"><strong>Terms:</strong></h5>
				 <h5> <?=$resume_user->terms?></h5> 
				 </div>


			
			</div>

			</div>

			</div>

		 </div>

                        </div>
                   
                    <!--End Advanced Tables -->
                </div>

				<?php $this->load->view('modals/delete-modal'); ?>