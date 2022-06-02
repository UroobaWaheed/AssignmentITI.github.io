<section class="ct-slide-banner" >
    <div class="container">
        <div class="ct-home-slider">
            <div class="row text-center">
                <div  class="col-sm-12">
                    <div  class="header-content">
					
                        <h1 class="text-center text-light" style="color:white;font-size:50px; padding-top:20%;">
                        <strong>WELCOME TO NEELI MIRCH RESTUARANT</strong>
                        </h1>
						
                        <p class="text-center text-light" style="color:white;font-size:40px;padding-top:1.5%;"><strong>&nbsp;A TASTE OF HOME</strong></p>
                <div class="text-center text-light" style="color:white; padding-top:3%;">
                <a style="height:50px;width:200px;" class="btn btn-lg btn-primary display-4 " href="<?php echo URL_MENU;?>"><strong>ORDER NOW</strong></a></div>
						
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<section class="content1 cid-s48udlf8KU m-auto"id="content1-8">
    
    <div class="" style="border:0px solid black; text-align:center;">
        <div class=""  >
            <div class="" style="border:0px solid black; text-align:left; margin-left: auto;margin-right: auto;width:60%;">
                <h2 class="" style="margin-bottom:30px;margin-top:30px;"><strong>MENU</strong></h2>
                <h3 class="" style="line-height:4rem;margin-bottom:30px;margin-top:30px;">Food as it should be. Food should taste good. It should feel good. It should do good things for you and the world around you.And keeping that in mind,our restaurant offers a variety of dishes.We prepare and serve high quality, simple food, at a great value in affordable prices.If you want to try,you can just order now and our food will be at your doorstep.</h3>
            </div>
        </div>
    </div>
</section>
<section class="image3 cid-s48upRUlSD m-auto" id="image3-9">
    <div class="">
        <div class="">
            <div class="">
                <div class="" style="border:0px solid black; text-align:left; margin-left: auto;margin-right: auto;width:60%;">
                    <img src='<?php echo FRONT_IMAGES;?>mbr-1646x1093.jpg' alt="Mobirise">
                    
                </div>
            </div>
        </div>
    </div>
</section>
<section class="features4 cid-spRaoxfHia" id="features4-n" style="height:auto;">
    
    <div class=""></div>
    <div class="">
        <div class=""  style="border:0px solid black; text-align:center;width:100%;">
        <h1 class="" style="margin-bottom:30px;margin-top:30px;"><strong>OUR VARIETY</strong></h1>
            
        </div>
        <div id='menu-variety' class="row flex-sm-column" style="display:flex;justify-content:space-evenly;flex-wrap: wrap;">
        <?php
			$n=0;
			if (isset($menus) && !empty($menus)) {
				
				$element=array('type'=>'hidden',
								'id'=>'first_menu',
								'value'=>$menus[0]->menu_id.'='.$menus[0]->menu_name);
				echo form_input($element);	
				
			foreach ($menus as $menu) {
            
			$clas='';
			$n++;
			if ($n==1)
				$clas='active';
				
			?>
			<div class="card" style="width: 40rem;padding:1%;box-sizzing:border-box;">
                
                <div class="" style="background-color:white; box-shadow:10px 12px 12px black;height: auto;">
                    <img  class="card-img-top" src="<?php echo MENU_IMG_PATH.$record->menu_image_name;?><?php echo $menu->menu_image_name;?>" alt="" title="" style="">
                    <div class="card-body" style="text-align:left; padding:2%;box-sizzing:border-box;">
                    <a href="<?php echo URL_MENU;?>"> <h1 style="font-size:25px;color:black;" class="card-title"><strong><?php echo $menu->menu_name;?></strong></h1></a>
                        <h4 style="margin-top:15px;" class="card-text"><?php echo $menu->description;?></h4>    
                    </div>
                </div>
            </div>
			   
			<?php } } ?>   
            
</section>

<!-- <div class="cs-header">
<div class="container text-center">
    <div class="search-wrapper">
	
	<!-- <?php echo form_open(URL_MENU);?> -->

        <!-- <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-sm-12">
                <div class="cs-searchbar">
                    <div class="input-group">
					
                        <input type="text" name="search_item" class="form-control" placeholder="Search for dishes or cuisines" aria-describedby="basic-addon2" required>
						
						<span class="input-group-addon cs-search-input-group">
						<button type="submit" class=" cs-search-btn" id="basic-addon2">
						
						<span class="hidden-xs"><?php echo get_languageword('search');?></span>
						<span class="pe-7s-search visible-xs"></span>
						
						</button>
						</span>
                    </div>
                </div>
            </div>
        </div>
		<?php echo form_close();?>
        <img src="<?php echo FRONT_IMAGES;?>pizza.png" alt="FoodCourt" class="img-responsive pizza-fixed-img">
    </div>
</div>
</div> -->
