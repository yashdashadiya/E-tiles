<div id="nav">
    <img src="photos/E_TILES_LOGO_WHITE.png" class="logo" alt="not">
    <div id="nav_button_container">
        <!-- close button of mobile nav  -->
        <i class="fa-solid fa-xmark icon mobile_nav_icon displaynone" id="nav_button_container_close_icon"  onclick="openNavButton()"></i>

        <!-- navigatore -->
        <div class="nav_button_name" id="index" onclick="return navigatePageUrl(this,'index.php')">
            <a href="index.php" >Home</a>
        </div>
        
        <div class="nav_button_name" id="about_us" onclick="return navigatePageUrl(this,'about_us.php')">
            <a href="about_us.php" >About Us</a>
        </div>
        
        <div class="nav_button_name dropdown">
            <div class="dropbtn">
                <span onclick="openNavButton()">Export</span>
                 <i class="fa fa-angle-right rightArrowIcon" onclick="expandDropdown(this)" aria-hidden="true"></i>
            </div>
            <div class="dropdown-content">
                <a href="tiles_calculator.php" onclick="return navigatePageUrl(this,'tiles_calculator.php')">Tiles Calculator</a>
                <a href="packing_list.php" onclick="return navigatePageUrl(this,'packing_list.php')">Packing List</a>
                <a href="service.php" onclick="return navigatePageUrl(this,'service.php')">Service</a>
            </div>
        </div>

        <div class="nav_button_name" id="catalogue" onclick="return navigatePageUrl(this,'catalogue.php')">
            <a href="catalogue.php" >Catalogue</a>
            
        </div>
        <div class="nav_button_name" id="contact_us" onclick="return navigatePageUrl(this,'contact_us.php')">
            <a href="contact_us.php" >Contact</a>
        </div>


    </div>

    <!-- button for open mobile nav bar -->
    
    <!-- for info drawer -->
    <div class="nav_icon_container openInfo">
        <i class="fa-solid fa-bars icon mobile_nav_icon openInfo" onclick="openInfo()"></i>
    </div>
    <!-- for nav button  -->
    <div class="nav_icon_container openNavButton">
        <i class="fa-solid fa-bars icon mobile_nav_icon openNavButton" onclick="openNavButton()"></i>
    </div>


    <?php include 'components/mobile_nav_content_container.php';?>
</div>