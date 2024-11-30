<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../home-page/home_style.css">

    <!-- navbar media query -->
    <link rel="stylesheet" href="../media-queries/mq-home-page.css">


    <link rel="icon" type="image/x-icon" href="../../../favicon_e.ico">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" 
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" 
    referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    
    <title>Emmanual | Home</title>
    <script>
        // Function to get URL parameters
        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        // Function to check token validity

        function checkToken() {
            const token = getQueryParam('token');
            const expires = getQueryParam('expires');

            if (!token || !expires) {
                alert('Invalid session.');
                window.location.href = 'http:www.erjweb.site/App/token/home-page/home-page.php';
                return;
            }

            const currentTime = Date.now();
            if (currentTime <= parseInt(expires)) {
                // Token is valid and within the 1-hour limit
                document.getElementById('content').style.display = 'block';
            } else {
                // Token is invalid or expired
                alert('Session expired.');
                window.location.href = 'http:www.erjweb.site/App/token/home-page/home-page.php';
            }
        }

        window.onload = function() {
            checkToken();
        };
    </script>

</head>
<body id="content" style="display:none;">
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
   <!-- Creating navbar -->
   <ul id="home_nav">
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


  <div id="name">
   <span id="name_1">EMMANUAL JANUARIE</span><br>
   <span id="name_2">SOFTWARE DEVELOPER</span>
   <span id="extra_text">Why do programmers prefer dark mode?<br> Because light attracts bugs!</span>
   <span id="image">
    <img src="../../../src/angry-2498.gif" alt="Angry dog picture by u_mey4kjj5ww on pixbay">
   </span>
  </div>

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
