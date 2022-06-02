  <!-- Slide Banner Section -->
   <?php $this->load->view('slider');?>
   <!-- Slide Banner Section -->




    <!--services section-->
    <?php $this->load->view('our_services');?>
    <!--services section-->


    
	
	
	
	
	
	
	
	
	
	
	
<script>

// A $( document ).ready() block.
$( document ).ready(function() {
	
	<?php if (!empty($menus)) { ?>
	var hm_menu = $("#fc_hme_first_menu").val();
	
	
	if (hm_menu>0) {
		
		get_home_menu_items_block(hm_menu);
	}
	<?php } ?>
});

//get menu-items-block
function get_home_menu_items_block(menu_id) {
	
	
	//attribute class need to change
	$('.home-itms').removeClass("active");
    $('#'+menu_id+'').addClass('active');
	
	
	$(".fc-home-items-block").html('<img class="abs-loader pt-1" src="<?php echo LOADER_IMG;?>" alt="Loader" align="middle">');
	
	if (menu_id>0) {
	$.ajax({
		url:'<?php echo base_url();?>welcome/get_home_menu_items_block',
		type:'POST',
		data: '<?php echo $this->security->get_csrf_token_name();?>=<?php echo $this->security->get_csrf_hash();?>&menu_id='+menu_id,
		success :function(response){
			
			$(".fc-home-items-block").empty();	
			$(".fc-home-items-block").html(response);
			
		}
	});
	
	}
}	
</script>