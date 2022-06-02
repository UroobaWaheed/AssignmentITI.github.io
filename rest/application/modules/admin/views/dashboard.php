<div id="page-wrapper" class="bg-silver">

    <div>


        <div class="row">

            <?php echo $this->session->flashdata('message'); ?>

            <div class="col-md-4 col-lg-3">
                <a href="<?php echo URL_MENU_INDEX; ?>" title="<?php echo get_languageword('menu'); ?>">
                    <div class="media stats-media-white bg-white">
                        <div class="media-left">
                            <img src="<?php echo FRONT_IMAGES; ?>restaurant.svg" width="50" height="50" alt="Menu">
                        </div>
                        <div class="media-body text-right">
                            <p><?php echo get_languageword('menu'); ?></p>
                            <h4><?php if (isset($modules_count->menu_count)) echo $modules_count->menu_count; ?></h4>

                        </div>


                    </div>
                </a>
            </div>


            <div class="col-md-4 col-lg-3">
                <a href="<?php echo URL_ITEMS_INDEX; ?>" title="<?php echo get_languageword('items'); ?>">
                    <div class="media stats-media-white bg-white">
                        <div class="media-left">
                            <img src="<?php echo FRONT_IMAGES; ?>dashboard-fast-food.svg" width="50" height="50" alt="Items">
                        </div>
                        <div class="media-body text-right">
                            <p> <?php echo get_languageword('items'); ?></p>
                            <h4><?php if (isset($modules_count->items_count)) echo $modules_count->items_count; ?></h4>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-md-4 col-lg-3">
                <a href="<?php echo URL_ADDONS_INDEX; ?>" title="<?php echo get_languageword('addons'); ?>">
                    <div class="media stats-media-white bg-white">
                        <div class="media-left">
                            <img src="<?php echo FRONT_IMAGES; ?>dashboard-condiment.svg" width="40" height="40" alt="Addons">
                        </div>
                        <div class="media-body text-right">
                            <p><?php echo get_languageword('addons'); ?></p>
                            <h4><?php if (isset($modules_count->addons_count)) echo $modules_count->addons_count; ?> </h4>
                        </div>
                    </div>
                </a>
            </div>



            <!-- <div class="col-md-4 col-lg-3">
					<a href="<?php echo URL_OPTIONS_INDEX; ?>" title="<?php echo get_languageword('options'); ?>">
                        <div class="media stats-media-white bg-white">
                            <div class="media-left">
                                <img src="<?php echo FRONT_IMAGES; ?>dashboard-pizza.svg" width="50" height="50" alt="Options">
                            </div>
                            <div class="media-body text-right">
                                <p><?php echo get_languageword('options'); ?></p>
                                <h4><?php if (isset($modules_count->options_count)) echo $modules_count->options_count; ?></h4>
                            </div>
                        </div>
					</a>	
                    </div>
					 -->


            <!-- <div class="col-md-4 col-lg-3">
					<a href="<?php echo URL_OFFERS_INDEX; ?>" title="<?php echo get_languageword('offers'); ?>">
                        <div class="media stats-media-white bg-white">
                            <div class="media-left">
                                <img src="<?php echo FRONT_IMAGES; ?>dashbaoard-voucher.svg" width="50" height="50" alt="Offers">
                            </div>
                            <div class="media-body text-right">
                                <p><?php echo get_languageword('offers'); ?></p>
                                <h4><?php if (isset($modules_count->offers_count)) echo $modules_count->offers_count; ?></h4>
                            </div>
                        </div>
					</a>	
                    </div> -->




            <div class="col-md-4 col-lg-3">
                <a href="<?php echo URL_CUSTOMERS_INDEX; ?>" title="<?php echo get_languageword('customers'); ?>">
                    <div class="media stats-media-white bg-white">
                        <div class="media-left">
                            <img src="<?php echo FRONT_IMAGES; ?>dashboard-network.svg" width="50" height="50" alt="Customers">
                        </div>
                        <div class="media-body text-right">
                            <p><?php echo get_languageword('customers'); ?></p>
                            <h4><?php if (isset($modules_count->users_count)) echo $modules_count->users_count; ?></h4>
                        </div>
                    </div>
                </a>
            </div>


            <?php foreach ($modules_count->orders_count as $key => $value) {

                $key1 = $key;
                if ($key == 'total') {
                    $key1 = '';
                }

            ?>
                <div class="col-md-4 col-lg-3">
                    <a href="<?php echo URL_ORDERS_INDEX . $key1; ?>" title="<?php echo get_languageword('new_orders'); ?>">
                        <div class="media stats-media-white bg-white">
                            <div class="media-left">
                                <img src="<?php echo FRONT_IMAGES; ?>dashboard-list.svg" width="50" height="50" alt="Orders">
                            </div>
                            <div class="media-body text-right">
                                <p><?php echo get_languageword($key . '_orders'); ?></p>
                                <h4><?= $value ?></h4>
                            </div>
                        </div>
                    </a>
                </div>

            <?php } ?>





        </div>




        <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/loader.js"></script>