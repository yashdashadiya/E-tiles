<section>
    <style>
        .div_300_600 {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .tiles_div {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-end;
            justify-content: center;
        }

        .div_200_1200 {
            text-align: center;
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .all_tiles {
            background-color: transparent;
        }

        /* height and width of tiles */

        .div_300_600 div {
            width: 60px;
            height: 120px;
            background: url("photos/tiles/300x600.jpg");
        }

        .div_600_600 div {
            width: 120px;
            height: 120px;
            background: url("photos/tiles/600x600.jpg");
        }

        .div_600_1200 div {
            width: 120px;
            height: 200px;
            background: url("photos/tiles/600x1200.jpg");
        }

        .div_800_800 div {
            width: 130px;
            height: 130px;
            background: url("photos/tiles/800x800.jpg");
        }

        .div_800_1600 div {
            width: 130px;
            height: 235px;
            background: url("photos/tiles/800x1600.jpg");
        }

        .div_1200_1200 div {
            width: 175px;
            height: 175px;
            background: url("photos/tiles/1200x1200.jpg");
        }

        .div_1200_2400 div {
            width: 175px;
            height: 330px;
            background: url("photos/tiles/1200x2400.jpg");
        }

        .div_200_1200 div {
            width: 50px;
            height: 200px;
            background: url("photos/tiles/200x1200.jpg");
        }

        /* -------------------- */

        .div_300_600,
        .div_600_600,
        .div_200_1200,
        .div_600_1200,
        .div_800_800,
        .div_800_1600,
        .div_1200_1200,
        .div_1200_2400 {
            margin: 10px;
        }

        .tiles_div>div>div {

            background-size: cover;
        }

        .tiles_div>div>p {
            font-size: 16px;
            color: var(--etiles-primary-color);
            line-height: 27px;
            text-align: center;
            font-family: Dosis, Arial, Helvetica, sans-serif;
        }

        /* for mobile */
        @media screen and (max-width: 375px) {
            .tiles_div {
                justify-content: space-between !important;
            }

            .div_300_600 div {
                width: 80px;
                height: 60px;
            }

            .div_600_600 div {
                width: 110px;
                height: 85px;
            }

            .div_600_1200 div {
                width: 110px;
                height: 155px;
            }

            .div_800_800 div {
                width: 120px;
                height: 120px;
            }

            .div_800_1600 div {
                width: 110px;
                height: 205px;
            }

            .div_1200_1200 div {
                width: 135px;
                height: 135px;
            }

            .div_1200_2400 div {
                width: 145px;
                height: 270px;
            }

            .div_200_1200 div {
                width: 40px;
                height: 155px;
            }

            .div_300_600 {
                order: 1;
                margin-left: 20px;
            }

            .div_600_600 {
                order: 2;
                margin-right: 20px;
            }

            .div_200_1200 {
                order: 4;
                margin-right: 20px;
            }

            .div_600_1200 {
                order: 3;
                margin-left: 20px;
            }

            .div_800_800 {
                order: 6;
                margin-right: 20px;
            }

            .div_800_1600 {
                order: 5;
                margin-left: 20px;
            }

            .div_1200_1200 {
                order: 7;
                margin-left: 20px;
            }

            .div_1200_2400 {
                order: 8;
                margin-right: 20px;
            }
        }

        @media screen and (min-width:376px) and (max-width: 425px) {
            .tiles_div {
                justify-content: space-between !important;
            }

            .div_1200_1200 div {
                width: 135px;
                height: 135px;
            }

            .div_300_600 {
                order: 1;
                margin-left: 40px;
            }

            .div_600_600 {
                order: 2;
                margin-right: 40px;
            }

            .div_200_1200 {
                order: 4;
                margin-right: 40px;
            }

            .div_600_1200 {
                order: 3;
                margin-left: 40px;
            }

            .div_800_800 {
                order: 6;
                margin-right: 40px;
            }

            .div_800_1600 {
                order: 5;
                margin-left: 40px;
            }

            .div_1200_1200 {
                order: 7;
                margin-left: 40px;
            }

            .div_1200_2400 {
                order: 8;
                margin-right: 40px;
            }
        }
    </style>
    <div class="all_tiles">
        <div class="section_heading_title" style="text-align:center">Get a Size That Suits Your Space</div>
        <h2 class="section_heading" style="text-align:center">Our Products</h2>
        <div class="tiles_div">
            <div class="div_300_600">
                <div></div>
                <p>300 x 600 mm</p>
            </div>
            <div class="div_600_600">
                <div></div>
                <p>600 x 600 mm</p>
            </div>
            <div class="div_200_1200">
                <div></div>
                <p>200 x 1200 mm</p>
            </div>
            <div class="div_600_1200">
                <div></div>
                <p>600 x 1200 mm</p>
            </div>

            <div class="div_800_800">
                <div></div>
                <p>800 x 800 mm</p>
            </div>
            <div class="div_800_1600">
                <div></div>
                <p>800 x 1600 mm</p>
            </div>
            <div class="div_1200_1200">
                <div></div>
                <p>1200 x 1200 mm</p>
            </div>

            <div class="div_1200_2400">
                <div></div>
                <p>1200 x 2400 mm</p>
            </div>

        </div>
    </div>
</section>