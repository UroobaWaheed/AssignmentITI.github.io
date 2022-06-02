<div id="page-wrapper" class="bg-silver">

	<div>

		<div class="row">
			<!-- row start here --->



			<?php foreach ($orders_count as $key => $count) { ?>
				<div class="col-md-4 col-lg-3">
					<?php
					$url = URL_ORDERS_INDEX . $key;
					if ($key == 'total') {
						$url = '#';
					} ?>
					<a href="<?php echo $url; ?>" title="<?php echo get_languageword('orders'); ?>">
						<div class="media stats-media-white bg-white">
							<div class="media-left">
								<img src="<?php echo FRONT_IMAGES; ?>dashboard-list.svg" width="50" height="50" alt="Orders">
							</div>
							<div class="media-body text-right">
								<p><?php echo get_languageword($key . '_orders'); ?></p>
								<h4><?= $count; ?></h4>
							</div>


						</div>
					</a>
				</div>
			<?php } ?>




			<!-- end row here  --->
		</div>



	</div>

</div>