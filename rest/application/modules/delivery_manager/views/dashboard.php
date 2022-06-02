<div id="page-wrapper" class="bg-silver">

	<div>

		<div class="row">

			<div class="col-md-4 col-lg-3">
				<a href="<?php echo URL_DM_ORDERS; ?>" title="<?php echo get_languageword('orders'); ?>">
					<div class="media stats-media-white bg-white">
						<div class="media-left">
							<img src="<?php echo FRONT_IMAGES; ?>dashboard-list.svg" width="50" height="50" alt="Orders">
						</div>
						<div class="media-body text-right">
							<p><?php echo get_languageword('orders'); ?></p>
							<h4><?php if (isset($orders_count)) echo $orders_count; ?></h4>
						</div>
					</div>
				</a>
			</div>

			<div class="col-md-4 col-lg-3">

				<div class="media stats-media-white bg-white">
					<div class="">
						<p>Set Status
							<img style="height:1.6rem;margin-left:3%;" src="<?php echo ($status == 1) ? 'https://www.pinclipart.com/picdir/big/528-5281634_glossy-red-icon-button-clip-art-at-clker.png' : 'https://www.pinclipart.com/picdir/middle/408-4089901_offline-stock-photography-clipart.png'; ?>" alt="">
						</p>
						<small class="font-weight-light">Set Your avilablity to pick order.</small>

					</div>
					<?php echo form_open('delivery_manager/change_available'); ?>
					<div class="">
						<select name="is_available" id="" style="width:100%">
							<option value="1" <?php if ($status == 1) echo 'selected'; ?>>Available</option>
							<option value="0" <?php if ($status == 0) echo 'selected'; ?>>Not Available</option>
						</select>
						<br>
						<br>
						<button class="btn btn-primary">Submit</button>
					</div>
					<?php echo form_close(); ?>
				</div>

			</div>

		</div>

	</div>

</div>