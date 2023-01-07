<section>
    <?php

    class catalogue_model
    {
        public $catalogue_type;
        public $catalogue_list;
        function __construct($catalogue_type, $catalogue_list)
        {
            $this->catalogue_type = $catalogue_type;
            $this->catalogue_list = $catalogue_list;
        }
    }
    class catalogue_card_model
    {
        public $catalogue_size;
        public $catalogue_name;
        public $catalogue_link;
        function __construct($catalogue_size, $catalogue_name, $catalogue_link)
        {
            $this->catalogue_size = $catalogue_size;
            $this->catalogue_name = $catalogue_name;
            $this->catalogue_link = $catalogue_link;
        }
    }
    ?>

    <?php

    $catalogues = array(
        new catalogue_model(
            "MATT",
            array(
                new catalogue_card_model("600x1200MM", "matt series (1)", "'catalogues/MattSeries 600x1200mmNo1.pdf'"),
                new catalogue_card_model("600x1200MM", "matt series (2)", "'catalogues/MattSeries 600x1200mmNo1.pdf'"),
                new catalogue_card_model("600x1200MM", "matt series (3)", "'catalogues/MattSeries 600x1200mmNo1.pdf'"),
            )
        ),

        new catalogue_model(
            "GLOSSY",
            array(
                new catalogue_card_model("600x1200MM", "glossy series (1)", "'catalogues/GlossySeries 600x1200mmNo1.pdf'"),
            )
        ),

        new catalogue_model(
            "HIGH GLOSSY",
            array(
                new catalogue_card_model("600x1200MM", "high glossy series (1)", "'catalogues/HighGlossy 600x1200mmNo1.pdf'"),
            )
        ),

        new catalogue_model(
            "OUT DOOR",
            array(
                new catalogue_card_model("400x400MM", "out door series (1)", "'catalogues/OutDoorSeries 400x400No1.pdf'"),
            )
        ),
    );

    ?>
    <div class="cataloue_section">
        <div class="cataloue_container">
            <div class="section_heading_title">Want to Explore??</div>
            <h2 class="section_heading">OUR DOWNLOAD SECTION</h2>
            <?php
            foreach ($catalogues as $catalogue) {
                include 'components\catalogue_type_container.php';
            }
            ?>
        </div>
    </div>
</section>