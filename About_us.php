<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="css.css">
    <script src="javascript.js"></script>
    <script src="https://kit.fontawesome.com/ad57e5ca9d.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'components/nav.php'; ?>
    <?php include 'components/about_us_header.php'; ?>
    <div id="about_us_web_page_body">
        <div id="about_us_body">
            <div id="about_us_img_container">
                <?php include 'components/about_us_photo.php' ?>
            </div>
            <div id="about_us_info_container">
            <?php include 'components/about_us_info.php'; ?>
            </div>
        </div>
    </div>



    <?php include 'components/footer.php'; ?>

</body>

</html>