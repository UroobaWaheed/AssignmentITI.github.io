<!-- /. NAV SIDE  -->
<section class="navbar-side">
   <ul class="nav crunchy-navigation sidebar-menu">

      <!--DASHBOARD-->
      <li>
         <a <?php if (isset($activemenu) && $activemenu == 'km_dashboard') echo 'class="active-menu"'; ?> href="<?php echo SITEURL; ?>"><i class="fa fa-dashboard fa-3x"></i> <?php echo get_languageword('dashboard'); ?> </a>
      </li>


      <!--ORDERS-->
      <li style="display: none;">
         <a <?php if (isset($activemenu) && $activemenu == ACTIVE_ORDERS) echo 'class="active-menu"'; ?> href="<?php echo URL_KM_ORDERS; ?>"><i class="fa fa-list fa-3x"></i> <?php echo get_languageword('orders'); ?> </a>
      </li>
      <!--ORDERS-->

      <!--ORDERS-->
      <li>
         <a <?php if (isset($activemenu) && $activemenu == ACTIVE_ORDERS) echo 'class="active-menu"'; ?> href="#"><i class="fa fa-list fa-3x"></i> <?php echo get_languageword('orders'); ?> </a>
         <ul class="sidebar-submenu">
            <li><a <?php if (isset($actv_submenu) && $actv_submenu == 'new') echo 'class="active-menu"'; ?> href="<?php echo URL_ORDERS_INDEX . 'new'; ?>"> <?php echo get_languageword('new_orders'); ?> </a></li>

            <li><a <?php if (isset($actv_submenu) && $actv_submenu == 'process') echo 'class="active-menu"'; ?> href="<?php echo URL_ORDERS_INDEX . 'process'; ?>"> <?php echo get_languageword('under_process_orders'); ?> </a></li>

            <li><a <?php if (isset($actv_submenu) && $actv_submenu == 'out_to_deliver') echo 'class="active-menu"'; ?> href="<?php echo URL_ORDERS_INDEX . 'out_to_deliver'; ?>"> <?php echo get_languageword('out_to_deliver_orders'); ?> </a></li>

            <li><a <?php if (isset($actv_submenu) && $actv_submenu == 'delivered') echo 'class="active-menu"'; ?> href="<?php echo URL_ORDERS_INDEX . 'delivered'; ?>"> <?php echo get_languageword('delivered_orders'); ?> </a></li>

            <li><a <?php if (isset($actv_submenu) && $actv_submenu == 'cancelled') echo 'class="active-menu"'; ?> href="<?php echo URL_ORDERS_INDEX . 'cancelled'; ?>"> <?php echo get_languageword('cancelled_orders'); ?> </a></li>
         </ul>
      </li>
      <!--ORDERS-->
   </ul>
</section>
<script src="<?php echo JS_ADMIN_SIDEBAR_MENU; ?>"></script>
<script>
   $.sidebarMenu($('.sidebar-menu'))
</script>