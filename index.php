<?php

define('BASEPATH', __DIR__ . '/include/');

$filename = preg_replace('/\?.*$/', '', $_SERVER['REQUEST_URI']);
$filename = trim($filename, '/');
$filemeta = preg_replace('/\?.*$/', '', $_SERVER['REQUEST_URI']);
$filemeta = trim($filemeta, '/');

if (empty($filename)) {
    $filename = BASEPATH . 'main.php';
} else {
    $filename = BASEPATH . $filename . '/index.php';
}

if (!file_exists($filename)) {
    $filename =  BASEPATH . '404.php';
}
if (empty($filemeta)) {
    $filemeta = BASEPATH . 'meta.php';
} else {
    $filemeta = BASEPATH . $filemeta . '/meta.php';
}
if (!file_exists($filemeta)) {
    $filemeta =  BASEPATH . 'meta.php';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<?php include $filemeta; ?>

    <!-- Bootstrap Core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="/css/clean-blog.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
     <script src="/vendor/jquery/jquery.min.js"></script>
         <script type="text/javascript">
    $(document).ready(function(){
        $('.showed-content').hide();
        $('.ho-show').click(function () {
             $(this).next(".showed-content").slideToggle("slow");
             $(this).toggleClass('down-ar down-up');
                  });

       });
 
</script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <div class="container">
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"></span>
                    <i class="fa fa-bars"></i>
                </button>
                <!-- <a class="navbar-brand" href="index.html">Start Bootstrap</a> -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/">Головна</a>
                    </li>
                    <li>
                        <a href="/uslugi">Послуги</a>
                    </li>
                    <li>
                        <a href="post.html">Ціни</a>
                    </li>
                    <li>
                        <a href="contact.html">Про нас</a>
                    </li>
                     <li>
                        <a href="contact.html">Контакти</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</div>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header>
        <div class="container header-main">
            <div class="row">
                <div class="col-md-4 col-sm-5 col-xs-12">
                    <div class="site-heading">
                        <p><img src="/img/logo.png"></p>
                        <div class="phone-header col-sm-offset-4">
                            <ul>
                            <li class="thone-1"><a href="tel:(099)656-97-70"><span class="phone-index">(099)</span> 656-97-70</a></li>
                            <li><a href="tel:(093)902-03-60"><span class="phone-index">(093)</span> 902-03-60</a></li>
                            <li><a href="tel:(096)747-99-95"><span class="phone-index">(096)</span> 747-99-95</a></li>
                            </ul>
                        </div>
                        <div class="order-header">
                        <a href="#"><div class="button-order"><p>Заказать онлайн</p></div></a>
                        </div>

                     </div>
                </div>
            </div>
            <div class="row"><div class="col-xs-12 fix-header"></div></div>
        </div>
    </header>

    <?php include $filename; ?>

    <!-- Footer -->
    <div class="container">
    <div class="row back-footer">
    <footer>
        
            <img src="/img/footer-logo.png" class="foot-img" />
                <div class="footer-cotent">
                
                   <p class="text center">© 2013-2017, alegro.com.ua, все права защищены, копирование любой информации без разрешения автора и обратной ссылки запрещено</p>
                </div>
            
     
    </footer>
    </div>
   </div>
    <!-- jQuery -->
    <script src="/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Important Owl stylesheet -->
<link rel="stylesheet" href="/owl-carousel/owl.carousel.css">
 
<!-- Default Theme -->
<link rel="stylesheet" href="/owl-carousel/owl.theme.css">
 
<!--  jQuery 1.7+  -->

<!-- Include js plugin -->
<script src="/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript">
$(document).ready(function() {
   $("#owl-example").owlCarousel();
     });
</script>
    <!-- Contact Form JavaScript -->
    <script src="/js/jqBootstrapValidation.js"></script>
    <script src="/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="/js/clean-blog.min.js"></script>

</body>

</html>
