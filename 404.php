<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cleveland Web Design Company | Web Development Consultant</title>

    <!-- Bootstrap -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
 <link rel="shortcut icon" href="https://www.brianalonzo.com/img/cleveland-web-design-fav.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<div id="wrapper">
    <div id="sidebar">
        <header>
           <div class="container">
               <div class="row">
                      <div class="logo">
                          <a href="index.php#home" class="js-scroll-trigger"><img src="img/brian-alonzo-web-design-logo-med.png" alt=""></a>
                      </div>
                      <div class="tagline">
                          <h1 class="top">Web Design</h1>
                         <div class="line"></div>
                          <h1 class="bottom">Web Development</h1>
                      </div>
                       <nav class="navbar" id="mainNav">
     
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#web-design-services">Web Design Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#web-design-projects">Recent Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#about">About Me</a>
            </li>
              <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#web-design-clients">Client Testimonials</a>
            </li>
          </ul>   
   
    </nav>
               <a class="sign-btn js-scroll-trigger" href="index.php#connect">Let's Connect</a> 
               </div>
           </div>
        </header>
    </div>
    <div id="main">
       
       <section id="home">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 mx-auto">
                  <span class="main-title">Hmmmm... something's missing. <br>Let me know what you were looking for <br>and I'll help you find it.</span>
                    <a class="view js-scroll-trigger" href="index.php#connect">Help Me Help You.</a>
                
              </div>
              </div>
            </div>
        </section>
       
        
        
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
     <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
<link rel="stylesheet"   src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <script>
    $(document).ready(function() {
    $('#umbrella-bg').animate({opacity: 0}, 0).css({'background-image': 'url(/img/web-design-services-umbrella.png)'}).animate({opacity: 1}, 2500);
});

$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});

$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });


    </script>
  </body>
</html>