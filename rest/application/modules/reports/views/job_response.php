<div id="page-wrapper">


	<div class="row">

		<div class="col-md-12">

			<?php echo $this->session->flashdata('message'); ?>



			<!-- Advanced Tables -->

			<div class="panel panel-default">
			<div class="panel-heading">
					<?php if (!empty($pagetitle)) echo $pagetitle; ?> <a title="Print" style="margin-left:10px" class="btn btn-info btn-xs pull-right" href="#" onclick="printit()"><i  class="fa fa-print"></i>
  					Print Report</a>

				</div>

				


				<div class="table-responsive">

					<div id="printableonly">
						<div class="row printscreen" style="padding:40px;" style="display:none">
							<center>
								<h1><?= $this->config->item('site_settings')->site_title . ' ' . $this->config->item('site_settings')->site_name ?></h1>
								<h5><?php if (!empty($pagetitle)) echo $pagetitle; ?> Report</h5>
							</center>
							<table class="display responsive nowrap" width="100%" cellspacing="0">

								<thead>

									<tr>
										<th><?php echo get_languageword('s_no'); ?></th>
										<th><?php echo get_languageword('Name of Applicant'); ?></th>
										<th><?php echo get_languageword('Title'); ?></th>
										<!-- <th><?php echo get_languageword('No of Applications'); ?></th> -->
									</tr>

								</thead>

								<?php if (isset($records) && !empty($records)) { ?>
										
									<tbody>

										<?php
											
										$i = 0;

										foreach ($records as $r) :
											
											$i++; ?>

											<tr>

												<td><?php echo $i; ?></td>
												<td><?php if (isset($r->applicant)) echo $r->applicant; ?></td>
												<td><?php if (isset($r->title)) echo $r->title; ?></td>
												<!-- <td><?php if (isset($r->totalcount)) echo $r->totalcount; ?></td> -->

											</tr>

										<?php endforeach; ?>

									</tbody>

								<?php } ?>





								<tbody>



								</tbody>

							</table>



						</div>
					</div>



					<table id="example" class="display responsive nowrap" width="100%" cellspacing="0">

						<thead>

							<tr>

								<th><?php echo get_languageword('s_no'); ?></th>
								
								<th><?php echo get_languageword('Name of Applicant'); ?></th>

								<th><?php echo get_languageword('Title'); ?></th>

								<!-- <th><?php echo get_languageword('No of Applications'); ?></th> -->









							</tr>

						</thead>

						<?php if (isset($records) && !empty($records)) { ?>

							<tbody>

								<?php

								$i = 0;

								foreach ($records as $r) :

									$i++; ?>

									<tr>

										<td><?php echo $i; ?></td>
										
										<td><?php if (isset($r->applicant)) echo $r->applicant; ?></td>

										<td><?php if (isset($r->title)) echo $r->title; ?></td>



										<!-- //<td><?php if (isset($r->totalcount)) echo $r->totalcount; ?></td> -->



									</tr>

								<?php endforeach; ?>

							</tbody>

						<?php } ?>





						<tbody>



						</tbody>

					</table>

				</div>

			</div>

		</div>

	</div>

</div>



<!--End Advanced Tables -->







<!-- Form Validation Plugins /Start -->

<?php if (!empty($css_js_files) && in_array('form_validation', $css_js_files)) { ?>



	<link href="<?php echo CSS_ADMIN_OR_BOOTSTRAP_VALIDATOR; ?>" rel="stylesheet">

	<script type="text/javascript" src="<?php echo JS_ADMIN_BOOTSTRAP_VALIDATOR; ?>"></script>

	<script type="text/javascript">
		$(document).ready(function() {



			$('#report_form').bootstrapValidator({

				// To use feedback icons, ensure that you use Bootstrap v3.1.0 or later

				/* feedbackIcons: {

				    valid: 'glyphicon glyphicon-ok',

				    invalid: 'glyphicon glyphicon-remove',

				    validating: 'glyphicon glyphicon-refresh'

				}, */

				framework: 'bootstrap',

				excluded: ':disabled',

				fields: {

					menu_id: {

						validators: {

							notEmpty: {

								message: '<?php echo get_languageword('menu_required'); ?>'

							}

						}

					},

					item_id: {

						validators: {

							notEmpty: {

								message: '<?php echo get_languageword('item_required'); ?>'

							}

						}

					}



				},

				submitHandler: function(validator, form, submitButton) {

					form.submit();

				}

			})

		});







		function get_items(menu_id)

		{

			$("#item_id").empty();

			$("#item_id").trigger('liszt:updated');

			if (menu_id > 0)

			{

				$.ajax({

					type: 'POST',

					async: true,

					cache: false,

					url: "<?php echo base_url(); ?>offers/get_items",

					data: '<?php echo $this->security->get_csrf_token_name(); ?>=<?php echo $this->security->get_csrf_hash(); ?>&menu_id=' + menu_id,

					success: function(data)

					{

						if (data != '' && data != 0)

						{

							$('#item_id').empty();

							$('#item_id').append(data);

						} else if (data == 999)

						{

							window.location = '<?php echo SITEURL; ?>';

						}

						<?php if (isset($_POST['item_wise_reports'])) { ?>

							var item_id = '<?php echo $_POST['item_id']; ?>';

							$("#item_id").val(item_id);

						<?php } ?>

						$("#item_id").trigger("liszt:updated");

					}

				});

			}

		}



		$(document).ready(function() {

			<?php if (isset($_POST['item_wise_reports'])) { ?>

				var menu_id = $("#menu_id option:selected").val();

				get_items(menu_id);

			<?php } ?>

		});
	</script>

<?php } ?>