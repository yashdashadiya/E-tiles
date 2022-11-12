<ul class="about_us_info_flip">
    <li onmouseover="flip_icon(this)" onmouseout="flip_icon_back(this)">
        <div class="about_us_info_flip_icon ">
            <i class="fa-brands fa-whatsapp"></i>
        </div>

        <div class="about_us_info_flip_title">
            <h3>Hardwood Floor Care Center</h3>
        </div>
    </li>

    <li onmouseover="flip_icon(this)" onmouseout="flip_icon_back(this)">
        <div class="about_us_info_flip_icon ">
            <i class="fa-brands fa-whatsapp"></i>

        </div>

        <div class="about_us_info_flip_title ">
            <h3>High-Quality Floorings At Great Prices</h3>
        </div>
    </li>

    <li onmouseover="flip_icon(this)" onmouseout="flip_icon_back(this)">
        <div class="about_us_info_flip_icon">
            <i class="fa-brands fa-whatsapp"></i>

        </div>

        <div class="about_us_info_flip_title ">
            <h3>We solve complex flooring issues</h3>
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