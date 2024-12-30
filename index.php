<?php 

if(isset($_POST['sendmailbuttonname']))
{
    $name      = $_POST['txtname'];
    $email = $_POST['txtemail'];
    $email = stripslashes($email);
    $subject = $_POST['txtsubject'];
    $message = $_POST['txtmessage'];
    $headers = 'From: '$name;

    mail('dandemo.d2@gmail.com', $subject, $message, $headers);

    echo 'Email Sent.';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dan Demo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/DDlogoblack.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v4.2.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
</head>

<body id="body">
  <!-- ======= Header ======= -->
  <header id="subheader" class="d-flex flex-column justify-content-center">
      <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link header active" href="#header"><i class="bx bx-home"></i><span>Home</span></a></li>
            <li><a class="nav-link services" href="#services"><i class="bx bxs-dashboard"></i><span>Services</span></a></li> <!-- bx bx-book-content -->
            <li><a class="nav-link about" href="#about"><i class="bx bx-user"></i><span>About</span></a></li>
            <li><a class="nav-link portfolio" href="#portfolio"><i class="bx bx-photo-album"></i><span>Portfolio</span></a></li> <!-- bx bx-server -->
            <li><a class="nav-link contact" href="#contact"><i class="bx bx-mail-send"></i><span>Contact</span></a></li>
            <li><a class="nav-link resume" href="#resume"><i class="bx bx-file-blank"></i><span>Resume</span></a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
        </nav>
  </header>

  <header id="header">
    <div id="headercontainer" class="container">
      <!-- <div class="moveheader"> -->
        
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
        <div class="intro">
          <div class="secondholderdiv">
              <div class="hideonmobile" style="margin-top: 130px;"></div>
              <div id="spaceonheader" class="hideonpc" style="margin-top: 140px;"></div>
              <h1><a class="kaung1" id="kaung">Dan Demo</a></h1>
              <h2>I'm <span class="typed" data-typed-items="Web Developer, UI/UX Designer, Freelancer"></span></h2> <br>
              <!-- <h2>I'm a <span class="typed" data-typed-items="Developer, Graphic Designer, Freelancer"></span></h2> -->

              <div class="textarea">
              <h3 class="hideonmobile">You just don't need a website, you need a website that is also appealing to your clients.<br><br>
              I help create website for companies and associations to help them grow their businesses.</h3>
              
              <h3 id="firsttext" class="hideonpc">You just don't need a website.<br> You need a website<br>that is appealing to your clients.<br><br>
              I help create website for<br>companies and associations<br>to help them grow their businesses.</h3>
              </div>

              <div id="flexforglassbutton" class="flexforglassbutton">
              <a class="glassbutton" href="#services">
                <span></span>
                <span></span>
                <span></span>
                <span></span>How can I help</a>
              </div>
          </div>
        </div>


        <nav id="belowbar" class="belowbar">
          <ul>
            <li><a class="belowbar-link header active" href="#header">Home</a></li>
            <li><a class="belowbar-link services" href="#services">Services</a></li>
            <li><a class="belowbar-link about" href="#about">About</a></li>
            <li><a class="belowbar-link portfolio" href="#portfolio">Portfolio</a></li>
            <li><a class="belowbar-link contact" href="#contact">Contact</a></li>
            <li><a class="belowbar-link resume" href="#resume">Resume</a></li>
          </ul>
          
        </nav>
        
  <div class="hidefortopbar">
    <div class="previouslyworktext">Previously worked with</div>
  </div>

    <div id="hideonmobile" class="slickgroup">
      <div class="secondholderdiv">
        <div class="items">
           <div><a href="https://www.mpmdma.org/alidac-healthcare-zydus/" target="_blank"><img src="assets/img/Alidac.png"></a></div>
           <div><a href="https://www.facebook.com/CottonConcept-906257929418438/" target="_blank"><img src="assets/img/C2.png"></a></div>
           <div><a href="https://yorkyogacorner.com/" target="_blank"><img src="assets/img/YorkYoga.png"></a></div>
           <div><a href="https://www.facebook.com/lozengegalleria/" target="_blank"><img src="assets/img/LozengeGalleria.png"></a></div>
           <div><a href="https://avsstoreonline.com/" target="_blank"><img src="assets/img/avscircle.png"></a></div>
           <div><a href="https://essentialairsolution.com/" target="_blank"><img src="assets/img/EssentialAirSolution.png"></a></div>
           <div><a href="http://genesismyanmar.com/" target="_blank"><img src="assets/img/Genesis.png"></a></div>
           <div><a href="https://www.animemmsub.com/" target="_blank"><img src="assets/img/AnimeMMSub.png"></a></div>
           <div><a href="https://www.facebook.com/Hardwaretoolmyanmar/" target="_blank"><img src="assets/img/HWT.png"></a></div>
           <div><a href="https://myanprosolutions.com/" target="_blank"><img src="assets/img/mps.png"></a></div>
           <div><a href="http://vocaloidnationmm.com.pl/" target="_blank"><img src="assets/img/vmnsquare.png"></a></div>
        </div>
      </div>
    </div>

    <div id="hideonpc" class="items">
       <div><a href="https://www.zyduscadila.com/" target="_blank"><img src="assets/img/Alidac.png"></a></div>
       <div><a href="https://www.facebook.com/CottonConcept-906257929418438/" target="_blank"><img src="assets/img/C2.png"></a></div>
       <div><a href="https://yorkyogacorner.com/" target="_blank"><img src="assets/img/YorkYoga.png"></a></div>
       <div><a href="https://www.facebook.com/lozengegalleria/" target="_blank"><img src="assets/img/LozengeGalleria.png"></a></div>
       <div><a href="https://avsstoreonline.com/" target="_blank"><img src="assets/img/avscircle.png"></a></div>
       <div><a href="https://essentialairsolution.com/" target="_blank"><img src="assets/img/EssentialAirSolution.png"></a></div>
       <div><a href="http://genesismyanmar.com/" target="_blank"><img src="assets/img/Genesis.png"></a></div>
       <div><a href="https://www.animemmsub.com/" target="_blank"><img src="assets/img/AnimeMMSub.png"></a></div>
       <div><a href="https://www.facebook.com/Hardwaretoolmyanmar/" target="_blank"><img src="assets/img/HWT.png"></a></div>
       <div><a href="https://myanprosolutions.com/" target="_blank"><img src="assets/img/mps.png"></a></div>
       <div><a href="http://vocaloidnationmm.com.pl/" target="_blank"><img src="assets/img/vmnsquare.png"></a></div>
    </div>

    <div id="glass-border" class="glass1" style="">
      <div class="services-glass-card">
        <div class="service-card-info">
          <div class="sidetitle">Finding online clients doesn’t have to be so hard.</div>
          <h5>
            People do love working with you online. So, what is stopping you from owning an online business? <br><br>
            🔷 Nobody is booking a sales call? Having a website for your business might be a good option.<br><br>
            🔷 Not familiar with technology and hesitating to hop into online from manual system?<br><br>
            🔷 You're worried that your website might not feel like you and won't reflect your aura?</h5>
        </div>
      </div>
    </div>

<br>

  <div id="glass-border2" class="glass1" style="">
      <div class="services-glass-card-2nd">
        <div class="service-card-info2">
          <div class="sidetitle">Let's fix your website so that people can find you</div>

          <h5 id="hideonmobile">
            🔷 My websites provide unique appeal and can help your business to attract more clients for you.<br><br>
            🔷 If you have trouble understanding about online system and process, fear not. <br><br>
            <div class="tab">I would explain it to you until you can figure it out.</div><br>
            🔷 My websites do not use ready-made templates. If you prefer the website to be the real you<br><br>
            <div class="tab">and reflect your aura, you've come to the right place<br><br></h5>

          <h5 id="hideonpc">
            🔷 My websites provide unique appeal and can help your business to attract more clients for you.<br><br>
            🔷 If you have trouble understanding about online system and process, fear not.
            I would explain it to you until you can figure it out.<br><br>
            🔷 My websites do not use ready-made templates. If you prefer the website to be the real you
            and reflect your aura, you've come to the right place<br><br></h5>

          <div id="flexforglassbutton2nd" class="flexforglassbutton2nd">
            <a class="glassbutton2nd" href="#services">
              <span></span>
              <span></span>
              <span></span>
              <span></span>See Services</a>
          </div>
        </div>
      </div>
    </div>


<div class="letsfix">
  <h6>About me</h6>
  <div id="hideonmobile" class="sidetitle2">Hello Everyone, Nice to meet you I'm Dan.</div>
  <div id="hideonpc" class="sidetitle2">Hello Everyone,<br> Nice to meet you I'm Dan.</div>
  <table id="letsfixtable">
  <tr id="letsfixtr">
  <td id="letsfixtd" class="introduce"><h5 id="h5edit2" class="hideonmobile">
            I have supported small businesses and local retail shops<br><br>
            by creating websites which reflect unique aura of their products<br><br>
            to help them grow their businesses<br><br>
            using human-centered design approach.<br><br></h5>
            
            <h5 id="h5edit2" class="hideonpc">
            I have supported small businesses and local retail shops<br><br>
            by creating websites which reflect unique aura of their products<br><br>
            to help them grow their businesses, by using human-centered design approach.<br><br></h5>
             
            <div id="flexforglassbuttonaboutme" class="flexforglassbuttonaboutme">
            <a class="glassbuttonaboutme" href="#about">
              <span></span>
              <span></span>
              <span></span>
              <span></span>More about me</a>
            </div>

  </td>
  <td id="letsfixtd" class="tdhomeme"><img src="assets/img/me.jpg" class="homeme"></td>
  </tr>
  </table>
  </div>


  <div id="hideonmobile" class="hidefortopbar" style="margin-bottom: -10px;">
    <div class="previouslyworktextvid">Some of my projects during my career</div><br>
  </div>

  <div id="hideonpc" class="hidefortopbar" style="margin-bottom: -10px;">
    <div class="previouslyworktextvid">Some of my projects<br>during my career</div><br>
  </div>

<!-- 1898 916 sequence
960 404 motion 
1920 928 media-->

<!-- <h2 style="text-align: center;">|</h2> -->
<div id="hideonmobile" class="videogroup">
  <div class="secondholderdiv">
      <table class="homevideos">
      <!-- autoplay="" muted="" loop="" playsinline="" preload="auto" -->
      <tr>
        <td><a href="https://yorkyogacorner.com/" target="_blank"><img class="videologo1" src="assets/img/YorkYoga.png"></a>
          <a class="videoprojectlinks" href="https://yorkyogacorner.com/">York Yoga Corner</a>
        </td>
        <td><a href="https://essentialairsolution.com/" target="_blank"><img class="videologo2" src="assets/img/EssentialNoFrame.png"></a>
          <a class="videoprojectlinks" href="https://essentialairsolution.com/">Essential Air Solution</a>
        </td>
      </tr>
      <!-- ................ -->
      <tr>

      <td>
        <video class="yorkyoga" id="yorkyoga" autoplay muted loop playsinline preload>
        <source src="assets/video/yorkyoga.webm" type="video/webm">
        <source src="assets/video/yorkyoga.mp4" type="video/mp4">
         Your browser does not support the video tag.
        </video>
      </td>
      <td>
        <video class="essential" id="essential" autoplay muted loop playsinline preload>
        <source src="assets/video/essential.webm" type="video/webm">
        <source src="assets/video/essential.mp4" type="video/mp4">
         Your browser does not support the video tag.
        </video>
      </td>

      </tr>
      <!-- ................ -->


      <tr>
        <td><a href="http://genesismyanmar.com/" target="_blank"><img class="videologo3" src="assets/img/genesistopbottom.png"></a>
          <a class="videoprojectlinks" href="http://genesismyanmar.com/">Genesis</a>
        </td>
        <td><a href="https://myangate.com/" target="_blank"><img class="videologo4" src="assets/img/MyanGateLogo.png"></a>
          <a class="videoprojectlinks" href="https://myangate.com/">MyanGate</a>
        </td>
      </tr>
      <!-- ................ -->
      <tr>

      <td>
        <video class="genesis" id="genesis" autoplay muted loop playsinline preload>
        <source src="assets/video/genesis.webm" type="video/webm">
        <source src="assets/video/genesis.mp4" type="video/mp4">
         Your browser does not support the video tag.
        </video>
      </td>

      <td>
        <video class="myanbell" id="myanbell" autoplay muted loop playsinline preload>
        <source src="assets/video/myangate.webm" type="video/webm">
        <source src="assets/video/myangate.mp4" type="video/mp4">
         Your browser does not support the video tag.
        </video>
      </td>

      </tr>
      <!-- ................ -->
    </table>
  </div>

  <div class="d-flex justify-content-center">
    <div id="flexforglassbutton" class="flexforglassbutton" style="padding-right: 25px;">
    <a class="glassbutton" href="#portfolio">
      <span></span>
      <span></span>
      <span></span>
      <span></span>See more projects</a>
    </div>
  </div>

</div>

<div id="hideonpc" class="videogroup">
  <div class="secondholderdiv">
      <a href="https://yorkyogacorner.com/" target="_blank"><img class="videologo1" src="assets/img/YorkYoga.png"></a>
      <a class="videoprojectlinks" href="https://yorkyogacorner.com/">York Yoga Corner</a><br>

      <video muted="" class="yorkyoga" id="yorkyoga" autoplay muted loop playsinline preload>
        <!-- <source src="assets/video/yorkyogamobile.mp4" type="video/mp4"> -->
        <source src="assets/video/yorkyoga.mp4" type="video/mp4">
        <source src="assets/video/yorkyoga.webm" type="video/webm">
         Your browser does not support the video tag.
      </video><br>


      <a href="https://essentialairsolution.com/" target="_blank"><img class="videologo2" src="assets/img/EssentialNoFrame.png"></a>
      <a class="videoprojectlinks" href="https://essentialairsolution.com/">Essential Air Solution</a><br>

      <video playsinline muted="" class="essential" id="essential" autoplay muted loop playsinline preload>
        <!-- <source src="assets/video/essentialmobile.mp4" type="video/mp4"> -->
        <source src="assets/video/essential.mp4" type="video/mp4">
        <source src="assets/video/essential.webm" type="video/webm">
         Your browser does not support the video tag.
      </video><br>


      <a href="http://genesismyanmar.com/" target="_blank"><img class="videologo3" src="assets/img/genesistopbottom.png"></a>
      <a class="videoprojectlinks" href="http://genesismyanmar.com/">Genesis</a><br>

      <video muted="" class="genesis" id="genesis" autoplay muted loop playsinline preload>
        <!-- <source src="assets/video/genesismobile.mp4" type="video/mp4"> -->
        <source src="assets/video/genesis.mp4" type="video/mp4">
        <source src="assets/video/genesis.webm" type="video/webm">
         Your browser does not support the video tag.
      </video><br>


      <a href="https://myangate.com/" target="_blank"><img class="videologo4" src="assets/img/MyanGateLogo.png"></a>
      <a class="videoprojectlinks" href="https://myangate.com/">MyanGate</a><br>

      <video muted="" class="myanbell" id="myanbell" autoplay muted loop playsinline preload>
        <!-- <source src="assets/video/myangatemobile.mp4" type="video/mp4"> -->
        <source src="assets/video/myangate.mp4" type="video/mp4">
        <source src="assets/video/myangate.webm" type="video/webm">
         Your browser does not support the video tag.
      </video>

  </div>
    <div class="d-flex justify-content-center">
    <div id="flexforglassbutton" class="flexforglassbutton">
    <a class="glassbutton" href="#portfolio">
      <span></span>
      <span></span>
      <span></span>
      <span></span>See More</a>
    </div>
  </div>
</div>

<!-- ======= Testimonials ======= -->
    <div id="testimonials" class="testimonials container">
      <h6>Voices</h6>

      <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Dan is an Expert in UI/UX. He Literally do UI simple and Easy to Understand Interface.He also see the details and sizes of components in UI and Calculate it based on how many percent is needed to do. Working with Dan is Fun and you can leave everything about UI/UX to him. Thanks, Dan!
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <!-- <a href="https://keinpyisi.com/" target="_blank"> --><img id="keinphoto" src="https://keinpyisi.com/frontend/img/keinphotos/me.jpeg" class="testimonial-img" alt=""><!-- </a> -->
              <a href="https://keinpyisi.com/" target="_blank"><h4 class="kein">Kein Pyi Si</h4></a>
              <h5>Backend Developer &amp; Founder of Vocaloid Nation Myanmar</h5>
            </div>
          </div><!-- End testimonial item -->

          <!-- <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="https://media-exp1.licdn.com/dms/image/C5603AQEOjOwaA__pCQ/profile-displayphoto-shrink_200_200/0/1611112409060?e=1647475200&v=beta&t=9w46SdDPeY6nO4KbJselcMBQSSvLK-J-C5BHVbWNa48" class="testimonial-img" alt="">
              <h4>Thin Nandar Htek</h4>
              <h5>Senior Business Development Manager</h5>
            </div>
          </div> --><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Dan is one of those rare breeds of professional who is passionate about his work and will go to any length to complete an assignment on time.
                He is the one who is admired and envied. But it's not just his technical abilities that have me impressed. Dan was a joy to work with because of his incredible positive attitude, emotional intelligence, and commitment to meet deadlines.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/khin.jpg" class="testimonial-img" alt="">
              <h4>Khin Myat San</h4>
              <h5>Web Developer</h5>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Dan က အလုပ်လုပ်တဲ့နေရမှာကော ဘာသာစကားပိုင်းမှာကောအကုန် Balance ဖြစ်တယ်။
                Website လုပ်တာလည်း စိတ်ရှည်တယ်။ ဘယ်နေရာ၊ ဘယ်နားမှားနေလဲ ဆိုတာကိုလည်း ပြန်ရှာတက်တယ်။
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/WaiYan.jpg" class="testimonial-img" alt="">
              <h4>Wai Yan Naing</h4>
              <h5>Graphic Designer</h5>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

      <div class="owl-carousel testimonials-carousel">

      </div>

    </div><!-- End Testimonials  -->


  <div id="hideonmobile" class="letsfix2">
  <h6>Are you ready?</h6>
  <div class="sidetitle2">Let's create your beautiful website <br><br></div>
  <table>
  <tr>
  <td></td>
  <td><h5 id="h5edit2">
            Tell me about your project.<br><br>
            We can create something new together.<br><br>
            <!-- <div class="primary-content">
              <div class="resp-textbox">
                <input type="text" placeholder="Your first name" />
              </div>
            </div>

            <div class="primary-content">
              <div class="resp-textbox">
                <input type="text" placeholder="Your email address" />
              </div>
            </div>

            <div class="primary-content">
              <div class="resp-textbox">
                <input type="text" placeholder="Subject" />
              </div>
            </div> -->

            <div id="flexforglassbuttonaboutme" class="flexforglassbuttonaboutme">
            <a class="glassbuttonaboutme" href="#contact">
              <span></span>
              <span></span>
              <span></span>
              <span></span>Send Message</a>
            </div>
  </td>
  </tr>
  </table>

  </div>

<div id="hideonpc" class="pb-5 mobileletsfix2alignleft">
<div class="letsfix2">
  <h6>Are you ready?</h6>
  <div class="sidetitle2">Let's create your beautiful website <br><br></div>
  <table>
  <tr>
  <td></td>
  <td><h5 id="h5edit2">
            Tell me about your project.<br><br>
            We can create something new together.<br><br>
           <!--  <div class="primary-content">
              <div class="resp-textbox">
                <input type="text" placeholder="Your first name" />
              </div>
            </div>

            <div class="primary-content">
              <div class="resp-textbox">
                <input type="text" placeholder="Your email address" />
              </div>
            </div>

            <div class="primary-content">
              <div class="resp-textbox">
                <input type="text" placeholder="Subject" />
              </div>
            </div> -->

            <div id="flexforglassbuttonaboutme" class="flexforglassbuttonaboutme">
            <a class="glassbuttonaboutme" href="#contact">
              <span></span>
              <span></span>
              <span></span>
              <span></span>Send Message</a>
            </div>
  </td>
  </tr>
  </table>

  </div>
</div>


  <div class="footer">
      <table class="footertable">
        <tr>

        <td class="footer1">
            <div class="footercol1">
              <ul class="footerlist">
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#header">Home</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#services">Services</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#about">About</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#portfolio">Portfolio</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#contact">Contact</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#resume">Resume</a></li>
              </ul>
            </div>
        </td>

        <td class="footer2">
            <div class="footercol2">
              <div class="h1footer"><img class="footerlogo" src="assets/img/DDlogoblack.png"><a id="footerh1">Dan Demo</a></div> 
                
              <h6 id="hideonmobile" class="footertext">Building digital products, helping organizations with website and UI/UX,<br><br>
              and stepping towards production of Music and Dance videos,<br><br>
              using Artifical Intelligence.<br><br>
              </h6>

              <h6 id="hideonpc" class="footertext">Building digital products, helping organizations with website and UI/UX,<br><br>
              and stepping towards production of Music and Dance videos, using Artifical Intelligence.<br><br>
              </h6>

              <div class="social-links">
                <!-- <a href="" class="twitter"><i class="bi bi-twitter"></i></a> -->
                <!-- <a href="https://www.facebook.com/profile.php?id=100077521067704" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a> -->
                <a href="https://www.youtube.com/channel/UCOWXAE5cXMeVcAz6GiEZ6Qw" class="youtube"><i class="bi bi-youtube"></i></a>
                <a href="https://www.linkedin.com/in/kaung-mon-aba827218/" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>

            </div>
        </td>

        </tr>

        <tr>
        </tr>
      </table>

      <h6 class="copyrighttext">Copyright ©2022 Dan Demo</h6>
  </div>

  </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About me</h2>
        <p>Dan Demo</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/me.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 pe-4 pe-lg-0 content" data-aos="fade-left">
          <h3>Full Stack Developer</h3>
          <p class="fst-italic">
            Hello, everyone, I'm Dan Demo, you can just call me Dan.
          </p>
          <p class="fst-italic">
            I'm passionate developer who love programming, previously worked at <a href="https://myanprosolutions.com/">Myan Pro Solution</a>
          </p>
          <p class="fst-italic">
            I specialized in web development, as well as some UI/UX designs, focusing on user centered design principle.
          </p>
          <p class="fst-italic">
            
          </p>
          <p class="fst-italic">
            I love building things that are not yet created.
          </p>
          <p class="fst-italic">
            Let's make the world a better place by discovering new technologies together.
          </p>

          <div id="about-social-links" class="social-links">
            <!-- <a href="" class="twitter"><i class="bi bi-twitter"></i></a> -->
            <!-- <a href="https://www.facebook.com/profile.php?id=100077521067704" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a> -->
            <a href="https://www.youtube.com/channel/UCOWXAE5cXMeVcAz6GiEZ6Qw" class="youtube"><i class="bi bi-youtube"></i></a>
            <a href="https://www.linkedin.com/in/kaung-mon-aba827218/" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>

          <div class="gitbuttons">
              <div id="flexforglassbutton" class="flexforglassbutton">
                <a class="glassbutton" href="https://github.com/DanDemos" target="_blank">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>Git Hub</a>
              </div>

              <div id="flexforglassbutton" class="flexforglassbutton">
                <a class="glassbutton" href="https://gitlab.com/dandemo14613" target="_blank">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>Git Lab</a>
              </div>
          </div>
          
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= What I Do ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>What I Do</h2>
      </div>

      <div class="row">
        <div id="tooltip1" class="col-lg-3 col-md-4" 
        title="Coding is the most basic fundamental for creating computer softwares. 
        It is combined with problem-solving skill to solve problems in a logical as well as creative way">
          <div class="icon-box">
            <i class="ri-edit-line" style="color: #5578ff;"></i>
            <h3>Coding</h3>
          </div>
        </div>
        <div id="tooltip2" class="col-lg-3 col-md-4 mt-4 mt-lg-0" 
        title="Debugging is one of the process of detecting and resolving of existing of potential errors or bugs
        to prevent them from misbehaving or crashing the software system">
          <div class="icon-box">
            <i class="ri-macbook-line" style="color: #ffbb2c;"></i>
            <h3>Debugging</h3>
          </div>
        </div>
        <div id="tooltip3" class="col-lg-3 col-md-4 mt-4 mt-lg-0" 
        title="A profession with decent amount of experience willing to lend a hand to you to grow your business">
          <div class="icon-box">
            <i class="ri-service-line" style="color: #e361ff;"></i>
            <h3>Freelancing</h3>
          </div>
        </div>
        <div id="tooltip4" class="col-lg-3 col-md-4 mt-4 mt-md-0" 
        title="Experienced consultant who helps organizations by analyzing and providing technical solution 
        to improve operation and performance of their business">
          <div class="icon-box">
            <i class="ri-wechat-line" style="color: #ffa76e;"></i>
            <h3>Consulting</h3>
          </div>
        </div>

      </div>

    </div><!-- End What I Do  -->

    <!-- ======= Skills  ======= -->
    <!-- <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">
              <div class="skillleveltext">HTML <i class="valcenter"></i> <i class="val">Senior</i></div>
            </span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">
              <div class="skillleveltext">JavaScript <i class="valcenter"></i> <i class="val">Mid-level</i></div>
            </span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">
              <div class="skillleveltext">PHP <i class="valcenter"></i> <i class="val">Mid-level</i></div>
            </span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">
              <div class="skillleveltext">Graphic Design <i class="valcenter"></i> <i class="val">Mid-level</i></div>
            </span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">
              <div class="skillleveltext">CSS <i class="valcenter"></i> <i class="val">Mid-level</i></div>
            </span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">
              <div class="skillleveltext">Wordpress/CMS <i class="valcenter"></i> <i class="val">Mid-level</i></div>
            </span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">
              <div class="skillleveltext">UI/UX Design <i class="valcenter"></i> <i class="val">Mid-level</i></div>
            </span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">
              <div class="skillleveltext">Art Design <i class="valcenter"></i> <i class="val">Mid-level</i></div>
            </span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

      </div>

    </div> --><!-- End Skills -->

    <!-- ======= Counts ======= -->
    <div class="counts container">

      <div class="section-title">
        <h2>Fun Facts</h2>
      </div>

      <p>
        When I was young, my mom didn't allow me to play video games.
      </p>
      <p>
        That leads me to draw inspired, innovative games on paper and books at the age of 8.
      </p>
      <p>
        Tower defense games, puzzle adventurer games, Naruto role playing games, everything on paper.
      </p>
      <p>
        Video games are the reason I start learning programming and I will continue to strike for Game Development Industries and keep moving forward.
      </p><br>
      <p>
        <div class="section-title">
        <h2>What's my speciality?</h2>
      </div> ✨ Fearless of error ✨
      </p>
      <p >
        Of course that would be a lie if I claim that I never fell into despair upon facing errors.
      </p>
      <p>
        However, errors bring me happiness after I solved it.
      </p>
      <p>
         That joy is the most important for me and I want it to be part of my life.
      </p>
      <p>
        If anyone is willing to give me that joy, contact me and we will keep moving forward towards the better future, together.
      </p><br><br>

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>
            <p>Happy Clients</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="19" data-purecounter-duration="1" class="purecounter"></span>
            <p>Written Projects</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-headset"></i>
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Working Hours</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-award"></i>
            <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
            <p>How Many Times People View This Website</p>
          </div>
        </div>

      </div>

    </div><!-- End Counts -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Interests</h2>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="ri-macbook-line" style="color: #5578ff;"></i>
            <h3>Programming</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-gamepad-line" style="color: #ffbb2c;"></i>
            <h3>Game Developments</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="fas fa-brain" style="color: #e361ff; font-size: 32px; margin-right: 14px;"></i>
            <h3>Artificial Intelligence</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-palette-line" style="color: #ffa76e;"></i>
            <h3>Digital Art</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-fire-line" style="color: #ff5828;"></i>
            <h3>Virtual Effects (VFX)</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-quill-pen-line" style="color: #47aeff;"></i>
            <h3>Story Writing</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-movie-2-line" style="color: #e80368;"></i>
            <h3>Anime</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-user-heart-line" style="color: #11dbcf;"></i>
            <h3>V-Tuber</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="fas fa-compact-disc" style="color: #b20969; font-size: 32px; margin-right: 14px;"></i>
            <h3>Music Production</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <h4 style="color: #e361ff;">🎼</h4>
            <h3>Classical Music</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="" style="color: #ffa76e;  margin-left: -10px;"></i>
            <h4>🎹</h4>
            <h3>Piano</h3>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-user-voice-line" style="color: #29cc61;"></i>
            <h3>Beatbox</h3>
          </div>
        </div>
        <!-- <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
            <h3>Flavor Nivelanda</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
            <h3>Flavor Nivelanda</h3>
          </div>
        </div> -->

      </div>

    </div>

    <div class="sectionfooter">
      <table class="footertable">
        <tr>

        <td class="footer1">
            <div class="footercol1">
              <ul class="footerlist">
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#header">Home</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#services">Services</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#about">About</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#portfolio">Portfolio</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#contact">Contact</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#resume">Resume</a></li>
              </ul>
            </div>
        </td>

        <td class="footer2">
            <div class="footercol2">
              <div class="h1footer"><img class="footerlogo" src="assets/img/DDlogoblack.png"><a id="footerh1">Dan Demo</a></div> 
                
              <h6 id="hideonmobile" class="footertext">Building digital products, helping organizations with website and UI/UX,<br><br>
              and stepping towards production of Music and Dance videos,<br><br>
              using Artifical Intelligence.<br><br>
              </h6>

              <h6 id="hideonpc" class="footertext">Building digital products, helping organizations with website and UI/UX,<br><br>
              and stepping towards production of Music and Dance videos, using Artifical Intelligence.<br><br>
              </h6>

              <div class="social-links">
                <!-- <a href="" class="twitter"><i class="bi bi-twitter"></i></a> -->
                <!-- <a href="https://www.facebook.com/profile.php?id=100077521067704" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a> -->
                <a href="https://www.youtube.com/channel/UCOWXAE5cXMeVcAz6GiEZ6Qw" class="youtube"><i class="bi bi-youtube"></i></a>
                <a href="https://www.linkedin.com/in/kaung-mon-aba827218/" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>

            </div>
        </td>

        </tr>

        <tr>
        </tr>
      </table>

      <h6 class="copyrighttext">Copyright ©2022 Dan Demo</h6>
    </div>
  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <div class="d-flex">
        <h2 class="me-auto">Resume</h2>
        <p class="pt-2 " style="font-size: 14px;">2 Years of Experience</p>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">

          <h3 class="resume-title">Education</h3>
          <div class="resume-item">
            <h4>Business Computing, BSc Hons</h4>
            <div class="d-flex">
              <h5>2019 - 2020</h5>
              <p class="mx-2 fontblue"><em>University of Greenwich</em></p>
            </div>
            <p>Business models, strategy and problem solving, including one final project.</p>
          </div>
          <div class="resume-item">
            <h4>Higher National Diploma(HND) in Computing:Software Development</h4>
            <div class="d-flex">
              <h5>2017 - 2019</h5>
              <p class="mx-2 fontblue"><em>SQA International</em></p>
            </div>
            <p>Mostly about all basic programming languages but also detail about Development life circles and IT related laws and ethics</p>
          </div>
          <div class="resume-item">
            <h4>Business Computing & HND Courses</h4>
            <div class="d-flex">
              <h5>2017 - 2020</h5>
              <p class="mx-2 fontblue"><em>KMD Institute</em></p>
            </div>
            <p>This is where I had to attend in order to get Degree and Diploma from University of Greenwich and SQA International</p>
          </div>
          <div class="resume-item">
            <h4>High School</h4>
            <div class="d-flex">
              <h5>2006 - 2016</h5>
              <p class="mx-2 fontblue"><em>BEHS Thuwunna</em></p>
            </div>
            <p>Distinction in English</p>
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Professional Experience</h3>
          <div class="resume-item">
            <h4>System Administrator</h4>
            <div class="d-flex">
              <h5>2020 - 2021</h5>
              <p class="mx-2 fontblue"><em>Myan Pro Solutions</em></p>
            </div>
            <p>
            <ul>
              <li>Developed 6 website projects</li>
              <li>Participated in developing 3 cross-platform, React Native mobile projects</li>
              <li>Developed 2 facebook chatbots, one including database and able to perform as online shop</li>
              <li>Lead in System Analysing and able to find IT solution for one of the clients</li>
              <li>Hosted meeting with 3 potential clients and successfully earned their trust and able to draw their interest.</li>
              <li>Provided training to 4 clients who were not familier with our IT solution or any similar system</li>
              <li>Resolved the technical issues of 5 members of system team and 4 members accounting team efficiently</li>
            </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>Freelancing</h4>
            <div class="d-flex">
              <h5>2021 - 2022</h5>
              <p class="mx-2 fontblue"><em>Freelance Projects</em></p>
            </div>
            <p>Getting Project Requests from Clients.</p>
          </div>
        </div>
      </div>

    </div>

    <div class="sectionfooter">
      <table class="footertable">
        <tr>

        <td class="footer1">
            <div class="footercol1">
              <ul class="footerlist">
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#header">Home</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#services">Services</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#about">About</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#portfolio">Portfolio</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#contact">Contact</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#resume">Resume</a></li>
              </ul>
            </div>
        </td>

        <td class="footer2">
            <div class="footercol2">
              <div class="h1footer"><img class="footerlogo" src="assets/img/DDlogoblack.png"><a id="footerh1">Dan Demo</a></div> 
                
              <h6 id="hideonmobile" class="footertext">Building digital products, helping organizations with website and UI/UX,<br><br>
              and stepping towards production of Music and Dance videos,<br><br>
              using Artifical Intelligence.<br><br>
              </h6>

              <h6 id="hideonpc" class="footertext">Building digital products, helping organizations with website and UI/UX,<br><br>
              and stepping towards production of Music and Dance videos, using Artifical Intelligence.<br><br>
              </h6>

              <div class="social-links">
                <!-- <a href="" class="twitter"><i class="bi bi-twitter"></i></a> -->
                <!-- <a href="https://www.facebook.com/profile.php?id=100077521067704" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a> -->
                <a href="https://www.youtube.com/channel/UCOWXAE5cXMeVcAz6GiEZ6Qw" class="youtube"><i class="bi bi-youtube"></i></a>
                <a href="https://www.linkedin.com/in/kaung-mon-aba827218/" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>

            </div>
        </td>

        </tr>

        <tr>
        </tr>
      </table>

      <h6 class="copyrighttext">Copyright ©2022 Dan Demo</h6>
    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>What can I do for you?</p>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch limitheight">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-laptop"></i></div>
            <h4><a href="">Web Design<br> &amp; Content Writing</a></h4>
            <p>Information website that can reflect your aura and bring you more potential clients via online</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 limitheight">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-world"></i></div>
            <h4><a href="">E-commerce Website</a></h4>
            <p>Convenient and well-protected customer service web solution that allows people to buy and sell digital or physical product</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0 limitheight">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-mobile"></i></div>
            <h4><a href="">Android App Development</a></h4>
            <p>Native android apps with great performance to help your business</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0 limitheight">
          <div class="icon-box">
            <div class="icon"><i class="bx bxs-bot"></i></div>
            <h4><a href="">Chatbot Development</a></h4>
            <p>Smart Chatbots that can bring you the best possible messaging experience for your customers. Chatbots can also allow you to esteblish a mini E-commerce on your Messaging App</p>
          </div>
        </div>

      </div>

    </div>

    <div class="sectionfooter">
      <table class="footertable">
        <tr>

        <td class="footer1">
            <div class="footercol1">
              <ul class="footerlist">
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#header">Home</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#services">Services</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#about">About</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#portfolio">Portfolio</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#contact">Contact</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#resume">Resume</a></li>
              </ul>
            </div>
        </td>

        <td class="footer2">
            <div class="footercol2">
              <div class="h1footer"><img class="footerlogo" src="assets/img/DDlogoblack.png"><a id="footerh1">Dan Demo</a></div> 
                
              <h6 id="hideonmobile" class="footertext">Building digital products, helping organizations with website and UI/UX,<br><br>
              and stepping towards production of Music and Dance videos,<br><br>
              using Artifical Intelligence.<br><br>
              </h6>

              <h6 id="hideonpc" class="footertext">Building digital products, helping organizations with website and UI/UX,<br><br>
              and stepping towards production of Music and Dance videos, using Artifical Intelligence.<br><br>
              </h6>

              <div class="social-links">
                <!-- <a href="" class="twitter"><i class="bi bi-twitter"></i></a> -->
                <!-- <a href="https://www.facebook.com/profile.php?id=100077521067704" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a> -->
                <a href="https://www.youtube.com/channel/UCOWXAE5cXMeVcAz6GiEZ6Qw" class="youtube"><i class="bi bi-youtube"></i></a>
                <a href="https://www.linkedin.com/in/kaung-mon-aba827218/" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>

            </div>
        </td>

        </tr>

        <tr>
        </tr>
      </table>

      <h6 class="copyrighttext">Copyright ©2022 Dan Demo</h6>
    </div>
  </section><!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>Projects I've worked on</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-web">Web</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-chatbot">Chatbot</li>
            <li data-filter=".filter-design">Designs</li>
            <li data-filter=".filter-mmd">MMD</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/yorkyoga.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>York Yoga Corner</h4>
              <p>Website</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/yorkyoga.jpg" data-gallery="portfolioGallery"  class="portfolio-lightbox" title=""><i class="bx bx-search"></i></a>
                <a href="https://yorkyogacorner.com/" target="_blank" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" title="Portfolio Detail"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/essential.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Essential Air Solution</h4>
              <p>Website</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/essential.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-search"></i></a>
                <a href="https://essentialairsolution.com/" target="_blank" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" title="Portfolio Detail"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/genesis.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Genesis Myanmar</h4>
              <p>Website</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/genesis.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-search"></i></a>
                <a href="http://genesismyanmar.com/" target="_blank" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" title="Portfolio Detail"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/myangate.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>MyanGate</h4>
              <p>Website</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/myangate.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-search"></i></a>
                <a href="https://myangate.com/" target="_blank" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" title="Portfolio Detail"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/myanbell.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Myanbell</h4>
              <p>Website</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/myanbell.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-search"></i></a>
                <a href="https://myanbell.com/" target="_blank" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" title="Portfolio Detail"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/myanprosolutions.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Myan Pro Solutions</h4>
              <p>Website</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/myanprosolutions.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-search"></i></a>
                <a href="https://myanprosolutions.com/" target="_blank" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" title="Portfolio Detail"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/hwt.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>HWT Hardwares</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/hwt.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-search"></i></a>
                <a href="https://play.google.com/store/apps/details?id=com.myanshop.hwt" target="_blank" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" title="Portfolio Detail"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/c2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Cotton Concept</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/c2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-search"></i></a>
                <a href="https://play.google.com/store/apps/details?id=com.myanshop.c2onlineshoppingmall" target="_blank" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" title="Portfolio Detail"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/avs.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Av's Online Store</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/avs.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-search"></i></a>
                <a href="https://play.google.com/store/apps/details?id=com.myanshop.avsonlinestore" target="_blank" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" title="Portfolio Detail"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/animemmsub.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Anime MM Sub</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/animemmsub.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-search"></i></a>
                <a href="https://play.google.com/store/apps/details?id=com.krul.nwayoofansub" target="_blank" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" title="Portfolio Detail"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/kmd.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>KMD</h4>
              <p>Student Project (Final Year)</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/kmd.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-search"></i></a>
                
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-chatbot">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/myanbellchatbot.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Myanbell</h4>
              <p>Chatbot</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/myanbellchatbot.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-search"></i></a>
                <a href="https://www.facebook.com/Myanbellofficial/" target="_blank" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" title="Portfolio Detail"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/hnd project1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Seventh April Online Shop</h4>
              <p>Student Project (HND)</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/hnd project1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-search"></i></a>
                <a href="https://docs.google.com/document/d/1Ga7dvY4VtSAej1zeqmTaulGtjXxwedsq/edit?usp=sharing&ouid=103913041693913816097&rtpof=true&sd=true" target="_blank" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" title="Portfolio Detail"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/Tsukasa Tsukuyomi high.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Tsukasa Tsukuyomi</h4>
              <p>Design</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/Tsukasa Tsukuyomi high.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tsukasa Tsukuyomi"><i class="bx bx-search"></i></a>
                
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/Sei no glasses.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sei Takanashi</h4>
              <p>Design</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/Sei no glasses.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sei Takanashi"><i class="bx bx-search"></i></a>
                
              </div>
            </div>
          </div>
        </div>

         <div class="col-lg-4 col-md-6 portfolio-item filter-design">
          <div class="portfolio-wrap">
            <img id="portfolioimageslime1" src="assets/img/portfolio/slimeattack.gif" class="img-fluid" alt="">
            <img id="portfolioimageslime2" src="assets/img/portfolio/slime.gif" class="img-fluid" style="display: none;" alt="">
            <div class="portfolio-info">
              <h4>Slime</h4>
              <p>Design</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/slime.gif" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-search"></i></a>
                <a id="portfolioimagetoggleslime"><i class="bx bx-refresh"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
          <div class="portfolio-wrap">
            <img id="portfolioimagezeus1" src="assets/img/portfolio/zeusattack.gif" class="img-fluid" alt="">
            <img id="portfolioimagezeus2" src="assets/img/portfolio/zeus.gif" class="img-fluid" style="display: none;" alt="">
            <div class="portfolio-info">
              <h4>Zeus</h4>
              <p>Design</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/zeus.gif" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Zeus"><i class="bx bx-search"></i></a>
                <a id="portfolioimagetogglezeus"><i class="bx bx-refresh"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/blackwizard.gif" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Black Wizard</h4>
              <p>Design</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/wizard.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Black Wizard"><i class="bx bx-search"></i></a>
                
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/potion.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Lava Potion</h4>
              <p>Design</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/potion.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Lava Potion"><i class="bx bx-search"></i></a>
                
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/Rubik's Cube.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Rubik's Cube</h4>
              <p>Design</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/Rubik's Cube.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-search"></i></a>
                
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
          <div class="portfolio-wrap">
            <img id="portfolioimagesmartcar1" src="assets/img/portfolio/Final Prototype(Night mode).jpg" class="img-fluid" alt="">
            <img id="portfolioimagesmartcar2" src="assets/img/portfolio/Final Prototype(Day mode).jpg" class="img-fluid" style="display: none;" alt="">
            <div class="portfolio-info">
              <h4>Smart Car UI</h4>
              <p>Design</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/Final Prototype(Day mode).gif" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-search"></i></a>
                <a id="portfolioimagetogglesmartcar"><i class="bx bx-refresh"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-mmd">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/chikanero.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Chika Dance</h4>
              <p>MMD</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/chikanero.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-search"></i></a>
                <a href="https://youtu.be/lnps2LOVhkE" target="_blank" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" title="Portfolio Detail"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-mmd">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/ia-conqueror.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>IA - Conqueror</h4>
              <p>MMD</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/ia-conqueror.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-search"></i></a>
                <a href="https://youtu.be/rtrv5rbjF54" target="_blank" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" title="Portfolio Detail"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

    <div class="sectionfooter">
      <table class="footertable">
        <tr>

        <td class="footer1">
            <div class="footercol1">
              <ul class="footerlist">
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#header">Home</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#services">Services</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#about">About</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#portfolio">Portfolio</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#contact">Contact</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#resume">Resume</a></li>
              </ul>
            </div>
        </td>

        <td class="footer2">
            <div class="footercol2">
              <div class="h1footer"><img class="footerlogo" src="assets/img/DDlogoblack.png"><a id="footerh1">Dan Demo</a></div> 
                
              <h6 id="hideonmobile" class="footertext">Building digital products, helping organizations with website and UI/UX,<br><br>
              and stepping towards production of Music and Dance videos,<br><br>
              using Artifical Intelligence.<br><br>
              </h6>

              <h6 id="hideonpc" class="footertext">Building digital products, helping organizations with website and UI/UX,<br><br>
              and stepping towards production of Music and Dance videos, using Artifical Intelligence.<br><br>
              </h6>

              <div class="social-links">
                <!-- <a href="" class="twitter"><i class="bi bi-twitter"></i></a> -->
                <!-- <a href="https://www.facebook.com/profile.php?id=100077521067704" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a> -->
                <a href="https://www.youtube.com/channel/UCOWXAE5cXMeVcAz6GiEZ6Qw" class="youtube"><i class="bi bi-youtube"></i></a>
                <a href="https://www.linkedin.com/in/kaung-mon-aba827218/" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>

            </div>
        </td>

        </tr>

        <tr>
        </tr>
      </table>

      <h6 class="copyrighttext">Copyright ©2022 Dan Demo</h6>
    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>Yangon, Thingyangyun, Myanmar</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-linkscontact">
              <!-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> -->
              <!-- <a href="https://www.facebook.com/profile.php?id=100077521067704" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a> -->
              <a href="https://www.youtube.com/channel/UCOWXAE5cXMeVcAz6GiEZ6Qw" class="youtube"><i class="bi bi-youtube"></i></a>
              <a href="https://www.linkedin.com/in/kaung-mon-aba827218/" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>dandemo.d2@gmail.com</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>+95-9972040003</p>
          </div>
        </div>
      </div>

      <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="txtname" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="txtemail" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="txtsubject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="txtmessage" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button name="sendmailbuttonname" type="submit">Send Message</button></div>
      </form>

    </div>

    <div class="sectionfooter">
      <table class="footertable">
        <tr>

        <td class="footer1">
            <div class="footercol1">
              <ul class="footerlist">
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#header">Home</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#services">Services</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#about">About</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#portfolio">Portfolio</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#contact">Contact</a></li>
                    <li><a id="webpagelinksmultiuse" class="footerlink" href="#resume">Resume</a></li>
              </ul>
            </div>
        </td>

        <td class="footer2">
            <div class="footercol2">
              <div class="h1footer"><img class="footerlogo" src="assets/img/DDlogoblack.png"><a id="footerh1">Dan Demo</a></div> 
                
              <h6 id="hideonmobile" class="footertext">Building digital products, helping organizations with website and UI/UX,<br><br>
              and stepping towards production of Music and Dance videos,<br><br>
              using Artifical Intelligence.<br><br>
              </h6>

              <h6 id="hideonpc" class="footertext">Building digital products, helping organizations with website and UI/UX,<br><br>
              and stepping towards production of Music and Dance videos, using Artifical Intelligence.<br><br>
              </h6>

              <div class="social-links">
                <!-- <a href="" class="twitter"><i class="bi bi-twitter"></i></a> -->
                <!-- <a href="https://www.facebook.com/profile.php?id=100077521067704" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a> -->
                <a href="https://www.youtube.com/channel/UCOWXAE5cXMeVcAz6GiEZ6Qw" class="youtube"><i class="bi bi-youtube"></i></a>
                <a href="https://www.linkedin.com/in/kaung-mon-aba827218/" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>

            </div>
        </td>


        </tr>

        <tr>
        </tr>
      </table>

      <h6 class="copyrighttext">Copyright ©2022 Dan Demo</h6>
    </div>
  </section><!-- End Contact Section -->

<!--   <div id="credits" class="credits">
    Designed by <a href="https://dandemo14613.000webhostapp.com/">Dan Demo</a>
  </div> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.1/vanilla-tilt.min.js"></script>
  <script>
      VanillaTilt.init(document.querySelectorAll(".tilt"), {
          max: 25,
          speed: 400,
          glare: true,
          "max-glare": 1
      });
  </script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>