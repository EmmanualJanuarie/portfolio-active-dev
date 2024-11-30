<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../../favicon_e.ico">
    <link rel="stylesheet" href="../home-page/home_style.css">
    <link rel="stylesheet" href="../work-page/work-page.css">
    <link rel="stylesheet" href="../about-page/about-page.css">

    <!-- font-awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" 
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" 
    referrerpolicy="no-referrer" />

      <!-- media query of about page -->
      <link rel="stylesheet" href="../media-queries/mq-about-page.css">



    <title>Emmanual | About</title>
</head>
<body>
     <!-- Top Navigation Menu -->
<div class="topnav">
    <a href="../home-page/home-page.php" class="active">emmanual.dev</a>
    <div id="myLinks">
      <a href="../work-page/work-page.php">Work</a>
      <a href="../about-page/about-page.php">About</a>
      <a href="../skills-page/skills-page.php">Skills</a>
      <a href="../certificate-page/certificate-page.php">Cert.</a>
    </div>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
    <ul id="header">
        <li><a href="../work-page/work-page.php">Work</a></li>
        <li><a href="../about-page/about-page.php">About</a></li>
        <li><a href="../home-page/home-page.php" id="icon_text">
            <div id="icon_container">
                <span id="icon">emmanual.dev</span>
            </div>
        </a></li>
        <li><a href="../skills-page/skills-page.php">Skills</a></li>
        <li><a href="../certificate-page/certificate-page.php">Cert.</a></li>
      </ul>

      <div id="heading">
        <span id="heading_text">About</span><br>
        <hr>
      </div>
      
      <!-- Wrapper for centering -->
<div class="grid-wrapper" style="clear: both">
    <!-- grid for skills -->
    <div class="grid-container grid-container-2"> 
        <div class="grid-card grid-card-2 text-align" style=" box-shadow: none; transform: none; border: none; cursor:auto;">
            <div class="image-container">
                <img src="../../../src/formal-image.png" id="image_size">
                <span style="color: black;">
                    As a junior Software developer, I design <br> 
                and develop scalable, efficient, and <br>
                reliable software solutions using Angular,<br>
                 PHP, Python, HTML, CSS, JavaScript, <br>
                 Java, and C#. <br><br><br>
                
                I'm proficient in database design and 
                optimization, ensuring efficient <br> 
                data storage and retrieval. <br><br>
                
                I've honed my skills in crafting responsive web apps through coding <br>
                competitions and personal projects.I'm excited to collaborate with <br>
                like-minded professionals on projects that drive digital transformation <br>
                and innovation. I'm eager to learn and grow, expanding my skillset in <br> 
                emerging technologies like IoT, blockchain, and artificial intelligence.
                </span>
            </div>
        </div>
    </div>
</div>
      

      <!-- Timeline -->
<span id="timeline_header">Timeline</span>
<!-- Wrapper for centering -->
<div class="grid-wrapper">
    <!-- grid for skills -->
    <div class="grid-container"> 
        <div class="grid-card">
            <h2>2019</h2>
            <p style="text-align: left; margin-left:50px"><u>Institution:</u> Eastern Cape Midlands College</p>
            <p style="text-align: left; margin-left:50px"><u>Modules:</u> Electronics, Mathematics, Introduction to Systems Development, Multimedia-Basics</p>    
        </div>
        <div class="grid-card">
            <h2>2020</h2>
            <p style="text-align: left; margin-left:50px"><u>Institution:</u> Eastern Cape Midlands College</p>
            <p style="text-align: left; margin-left:50px"><u>Modules:</u> Mathematics, Multimedia, Principles of Computer Programming, 
                                                        System Analysis and Design, Computer Hardware and Software</p>
        </div>
        <div class="grid-card">
            <h2>2021</h2>
            <p style="text-align: left; margin-left:50px"><u>Institution:</u> Eastern Cape Midlands College</p>
            <p style="text-align: left; margin-left:50px"><u>Modules:</u> Computer Programming (HTML, CSS, JavaScript and .NET)</p>
        </div>
        <div class="grid-card">
            <h2>2022 - June</h2>
            <p style="text-align: left; margin-left:50px"><u>Coding Competition:</u> World Skills</p>
            <p style="text-align: left; margin-left:50px">Implemented Businesses solutions for user, utilizing vb.net and MySQL</p>
        </div>
        <div class="grid-card">
            <h2>2023</h2>
            <p style="text-align: left; margin-left:50px"><u>Institution:</u> CTU Training Solutions</p>
            <p style="text-align: left; margin-left:50px"><u>Modules:</u> Cloud Fundamentals, Computer Architecture, Web Development 
                ,Ethics and Network Architecture, Principles of Programming Design,
            Python, Robotic Development</p>
        </div>
        <div class="grid-card">
            <h2>2024</h2>
            <p style="text-align: left; margin-left:50px"><u>Coding Competition:</u> CTU Training Solutions</p>
            <p style="text-align: left; margin-left:50px"><u>Modules:</u>  Advanced Java, Business Programming (MySQL, SQLLite MSServer), 
                Developers and Operations Engineering (DevOps), Programming with C#, Solutions Development</p>
        </div>
    </div>
</div>



       <!-- Footer -->
       <ul id="footer_about">
        <li><a href="mailto:emmanual.dev@gmail.com">Email</a></li>
        <li><a href="https://github.com/EmmanualJanuarie">GitHub</a></li>
        <li><a href="https://www.linkedin.com/in/emmanual-januarie-9ba580205/">LinkedIn</a></li>
        <li><a href="../video-page/video-page.php" target="_blank">Videos</a></li>
      </ul>


    <script>
    function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
        x.style.display = "none";
        } else {
        x.style.display = "block";
        }
    }
    </script>
</body>
</html>