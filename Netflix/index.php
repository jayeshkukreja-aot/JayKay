<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "a90151b4-0609-4d07-9d49-750d10d57a86",
    });
  });
</script>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>JayKay's || App For All The Latest Movies and WebSeries </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/jquery-ui.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">
    <link rel="stylesheet" href="../assets/css/magnificpopup.css">
    <link rel="stylesheet" href="../assets/css/jquery.mb.YTPlayer.min.css">
    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../assets/img/logo.png">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <![endif]-->
</head>

<body>
    <?php include"header.php"?>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <!-- preloader area end -->
    <div class="container">
        <br>
    <h2>JayKay's</h2>
                        <ul>
                            <!--<li><a href="index.html">Developer's Profile</a></li>-->
                            <li><span>Latest NetFlix Orignals</span></li>
                        </ul>
                    
                        </div>
    <!-- blog post area start -->
    <div class="blog-post-area bp-with-sidebar pb--100">
        <div class="container">
            <div class="row">
                <!-- blog list area start -->
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="row" id="dynamicproductpage3">
                        <!--<div class="blog-list">-->
                        <!--    <div class="col-md-6 col-sm-12 col-xs-12">-->
                                <!--<div class="list-item">-->
                                <!--    <div class="blog-thumbnail">-->
                                <!--        <a href="blog-details.html"><img src="assets/img/ddpd.jpg" alt="De De Pyar De"></a>-->
                                <!--    </div>-->
                                <!--    <h2 class="blog-title"><a href="#">De De Pyar De</a></h2>-->
                                <!--    <div class="blog-meta">-->
                                <!--        <ul>-->
                                <!--            <li><i class="fa fa-calendar"></i>17 May 2019</li>-->
                                <!--            <li><i class="fa fa-comment"></i>About</li>-->
                                <!--        </ul>-->
                                <!--    </div>-->
                                <!--    <div class="blog-summery">-->
                                <!--        <p>A 50-year-old single father faces disapproval from his family and his ex-wife when he falls in love with a 26-year-old woman.</p>-->
                                <!--    </div>-->
                                <!--    <a href="https://drive.google.com/uc?id=0B5a4h0JxHNetOFIxa2JnWGlJYjQ&export=download" class="read-more">Download</a>-->
                                <!--</div>-->
                                <!--<div class="list-item">-->
                                <!--    <div class="blog-thumbnail">-->
                                <!--        <a href="blog-details.html"><img src="assets/img/aladin.png" alt="De De Pyar De"></a>-->
                                <!--    </div>-->
                                <!--    <h2 class="blog-title"><a href="#">Aladin</a></h2>-->
                                <!--    <div class="blog-meta">-->
                                <!--        <ul>-->
                                <!--            <li><i class="fa fa-calendar"></i>17 May 2019</li>-->
                                <!--            <li><i class="fa fa-comment"></i>About</li>-->
                                <!--        </ul>-->
                                <!--    </div>-->
                                <!--    <div class="blog-summery">-->
                                <!--        <p>A 50-year-old single father faces disapproval from his family and his ex-wife when he falls in love with a 26-year-old woman.</p>-->
                                <!--    </div>-->
                                <!--    <a href="https://drive.google.com/uc?id=0B5a4h0JxHNetOFIxa2JnWGlJYjQ&export=download" class="read-more">Download</a>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                    
                    
                                    </div>
                
            </div>
        </div>
    </div>
    <!-- blog post area end -->
    <!-- footer area start -->
    <footer>
        <div class="footer-area">
            <div class="container">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script>  |    Developed By <a href="https://instagram.com/kukreja_jazz"><h5>JayKay</h5></a>
</p>
        
<a href="#" target="_blank" title="JayKay's">
<img src="https://smallseotools.com/counterDisplay?code=f6941f4391e7075733e1e1e30a78088c&style=0006&pad=5&type=page&initCount=100" title="JayKay's" Alt="JayKay's" border="0">
</a>

<!--<a href="https://smallseotools.com/visitor-hit-counter/" target="_blank" title="Visitor Hit Counter">-->
<!--<img src="https://smallseotools.com/counterDisplay?code=f6941f4391e7075733e1e1e30a78088c&style=0006&pad=5&type=page&initCount=100"  title="Visitor Hit Counter" Alt="Visitor Hit Counter" border="0">-->
<!--</a>-->

            </div>
        </div>

    </footer>
    <!-- footer area end -->

    <!-- Scripts -->
    <script src="../assets/js/jquery-3.2.0.min.js"></script>
    <script src="../assets/js/jquery-ui.js"></script>
    <script>

    
 var result1;

 $.ajax({
     
        url: "../apanel/netflix.php",
        
     async:false,
        success: function(result)
        {
    
        
     result1=JSON.parse(result);
result1.forEach(function(element){

    $("#dynamicproductpage3").append('<div class="blog-list">'+
                            '<div class="col-md-6 col-sm-6 col-xs-12">'+
        '<div class="list-item">'+
                                    '<div class="blog-thumbnail">'+
                                        '<a href="#"><img  src="../assets/img/'+element.image+'"></a>'+
                                    '</div>'+
                                    '<h2 class="blog-title"><a href="#">'+element.name+'</a></h2>'+
                                    '<div class="blog-meta">'+
                                        '<ul>'+
                                            '<li><i class="fa fa-comment"></i>About</li>'+
                                        '</ul>'+
                                    '</div>'+
                                    '<div class="blog-summery">'+
                                        '<p>'+element.about+'</p>'+
                                    '</div>'+
                                    '<a href="'+element.link+'" target="_blank" class="read-more">Download</a>'+
                                '</div>');
});
}
}); 
</script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/magnific-popup.min.js"></script>
    <script src="../assets/js/counterup.js"></script>
    <script src="../assets/js/jquery.waypoints.min.js"></script>
    <script src="../assets/js/jquery.mb.YTPlayer.min.js"></script>
    <script src="../assets/js/theme.js"></script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5cf16782267b2e5785305e5c/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>