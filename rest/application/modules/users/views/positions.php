<div id="page-wrapper">

           
            <div class="row">
			
                <div class="col-md-12">
				<a title="<?php echo get_languageword('add_record'); ?>" class="btn btn-primary btn-xs pull-right" href="<?php echo base_url().'users/addedit_positions'?>"><i class="fa fa-plus"></i>Add Available Positions</a>
				
					

					<!-- Advanced Tables -->

                    <div class="panel panel-default">

                        <div class="panel-heading">

                             <?php if(!empty($pagetitle)) echo $pagetitle;?>

                        </div>

                        <div class="panel-body">

                           

							

			<?php echo $this->session->flashdata('message'); ?>


			 <div class="table-responsive">
			<table id="example" class="display responsive nowrap" width="100%" cellspacing="0">

			  	<thead>

					<tr>

						<th><input type="checkbox" class="ip_check_all" name="check_all" id="check_all" onclick="toggle_check_all(this);"> </th>

						<th><?php echo get_languageword('title');?></th>

						<th><?php echo get_languageword('seats');?></th>

						<th><?php echo get_languageword('status');?></th>

						<th><?php echo get_languageword('actions');?></th>
	
						<th></th>

					</tr>

				</thead>



				<tfoot>

					<tr>

						<th><input type="checkbox" class="ip_check_all" name="check_all" id="check_all" onclick="toggle_check_all(this);"> </th>

						<th><?php echo get_languageword('name');?></th>

						<th><?php echo get_languageword('seats');?></th>

						<th><?php echo get_languageword('status');?></th>

						<th><?php echo get_languageword('actions');?></th>
						<th></th>
						

					</tr>

				</tfoot>



				<tbody>



				</tbody>

			</table>

			</div>

			</div>

			</div>

		 </div>

                        </div>
                   
                    <!--End Advanced Tables -->
                </div>

				<?php $this->load->view('modals/delete-modal'); ?>