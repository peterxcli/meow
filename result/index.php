<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Result</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="/result/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
</head>

<body id="page-top">

    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="slick">
                    <!-- <h1 class="text-white font-weight-bold">Your Favorite Place for Free Bootstrap Themes</h1>
                    <h1 class="text-white font-weight-bold">Your Favorite Place for Free Bootstrap Themes </h1> -->
                    <?php
                    $server = '';
                    $usr = '';
                    $pwd = '';
                    $db = '';
                    $conn = mysqli_connect($server, $usr, $pwd, $db);
                    $sql = "select * from stories ";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<h1 class=\"text-white font-weight-bold\">";
                        echo $row['story'];
                        echo "</h1>";
                    }
                    mysqli_close($conn);

                    ?>
                </div>
                <hr class="divider" />
            </div>
        </div>
    </header>
    <!-- About-->

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script>
        function equalheight() {
            $('.slick').each(function(index) {
                var maxHeight = 0;
                $(this).find('.slick-slide').height('auto');
                $(this).find('.slick-slide').each(function(index) {
                    if ($(this).height() > maxHeight)
                        maxHeight = $(this).height();
                });
                $(this).find('.slick-slide').height(maxHeight);
            });
        }
        $('.slick').on('init', function(event, slick) {
            equalheight();
        });
        $('.slick').slick({
            vertical: true, //垂直方向
            dots: false, //指示點
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: true, //左右箭頭
            onAfterChange: function(o) {
                console.log(o)
            }, //切換後的回調函數

            slidesToShow: 1, //幻燈片每屏顯示個數
            slidesToScroll: 1, //幻燈片每次滑動個數
        });
    </script>
</body>

</html>