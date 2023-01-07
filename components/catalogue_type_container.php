<div style="margin:30px 0px">
    <div class="section_heading_title underline"><?php echo ($catalogue->catalogue_type);echo (" SERIES")?> </div>
    <div>
        <div class="catalogues_container">
            <?php
            foreach ($catalogue->catalogue_list as $catalogue_card) {
                include 'components/catalogue_card.php';
            }
            ?>
        </div>
    </div>
</div>