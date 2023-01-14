<div class="catalogue_card">
    <div class="catalogue_card_body">
        <div class="catalogue_card_logo">
            <img src="photos/E_TILES_LOGO_WHITE.png" alt="">
            <div>E-TILES</div>
        </div>
        
        <div class="catalogue_card_type">
            <h1><?php echo($catalogue->catalogue_type) ?></h1>
            <p>SERIES</p>
        </div>
        <div class="catalogue_card_size">
            <span>
                <?php echo($catalogue_card->catalogue_size) ?>
            </span>
        </div>
    </div>
    <div class="catalogue_card_action_option">
        <div class="catalogue_card_name"><?php echo($catalogue_card->catalogue_name) ?></div>

        <div class="catalogue_card_action_button">
            <div class="catalogue_card_download_button" onclick="download(<?php echo($catalogue_card->catalogue_link) ?>)">Download</div>
            <div onclick="window.open(<?php echo($catalogue_card->catalogue_link) ?>)">View</div>
        </div>
    </div>
</div>