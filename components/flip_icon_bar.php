<ul class="about_us_info_flip">
    <li onmouseover="flip_icon(this)" onmouseout="flip_icon_back(this)">
        <div class="about_us_info_flip_icon ">
            <img src="icons/checklist.png" class="icon">
        </div>

        <div class="about_us_info_flip_title">
            <h3>Working with standard Batch Mark.</h3>
            <!-- <h3>Quality Guaranteed</h3> -->
            <!-- <h3>Hardwood Floor Care Center</h3> -->
        </div>
    </li>

    <li onmouseover="flip_icon(this)" onmouseout="flip_icon_back(this)">
        <div class="about_us_info_flip_icon ">
            <img src="icons/project-management.png" class="icon">
        </div>

        <div class="about_us_info_flip_title ">
            <h3>Latest Technology with Market Forecasting.</h3>
            <!-- <h3>Latest Technologies</h3> -->
            <!-- <h3>High-Quality Floorings At Great Prices</h3> -->
        </div>
    </li>

    <li onmouseover="flip_icon(this)" onmouseout="flip_icon_back(this)">
        <div class="about_us_info_flip_icon">
            <img src="icons/delivery-time.png" class="icon">
        </div>

        <div class="about_us_info_flip_title ">
            <h3>On-Time Delivery</h3>
            <!-- <h3>We solve complex flooring issues</h3> -->
        </div>
    </li>
</ul>

<script>
    function flip_icon(about_us_info_flip)
    {
        let icon = about_us_info_flip.children[0].children[0];
        icon.style.transform = 'rotateY(180deg)';
        icon.style.transition = "0.5s";
    }

    function flip_icon_back(about_us_info_flip) 
    {
        let icon = about_us_info_flip.children[0].children[0];
        icon.style.transform = '';
        icon.style.transition = "0.5s";
    }
</script>