<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../../favicon_e.ico">
    <link rel="stylesheet" href="../home-page/home_style.css">
    <link rel="stylesheet" href="../work-page/work-page.css">
    <link rel="stylesheet" href="../skills-page/skills-page.css">

    <!-- font-awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" 
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" 
    referrerpolicy="no-referrer" />

    
    <!-- media query of skills page -->
    <link rel="stylesheet" href="../media-queries/mq-skills-page.css">


    <title>Emmanual | Skills</title>
    
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
        <li><a href="../skills-page/skills-page.html">Skills</a></li>
        <li><a href="../certificate-page/certificate-page.php">Cert.</a></li>
      </ul>

      <div id="heading">
        <span id="heading_text">Skills</span><br>
        <hr>
      </div>

      <!-- grid for skills -->
      <div class="grid-container"> 
            <div class="grid-card">
                <img src="../../../src/icons/vb.png" alt="Vb.net image">
                <h2>VB.net</h2>
            </div>
            <div class="grid-card">
                <img src="../../../src/icons/windows.png" alt="Windows image">
                <h2>Windows</h2>
            </div>
            <div class="grid-card">
                <img src="../../../src/icons/java.png" alt="Java icon">
                <h2>Java</h2>
            </div>
            <div class="grid-card">
                <img src="/src/icons/html5.png" alt="Html icon">
                <h2>HTML5</h2>
            </div>
            <div class="grid-card">
                <img src="../../../src/icons/css5.png" alt="CSS icon">
                <h2>CSS5</h2>
            </div>
            <div class="grid-card">
                <img src="../../../src/icons/javascript.png" alt="JavaScript icon">
                <h2>JavaScript</h2>
            </div>
            <div class="grid-card">
                <img src="../../../src/icons/angular.png" alt="Angular icon">
                <h2>Angular</h2>
            </div>
            <div class="grid-card">
                <img src="../../../src/icons/aspn_dotnet.png" alt=".Net icon">
                <h2>.net</h2>
            </div>
            <div class="grid-card">
                <img src="../../../src/icons/azure.png" alt="Azure icon">
                <h2>Azure</h2>
            </div>
            <div class="grid-card">
                <img src="../../../src/icons/boostrap.png" alt="boostrap icon">
                <h2>Boostrap</h2>
            </div>
            <div class="grid-card">
                <img src="../../../src/icons/csharp.png" alt="C# icon">
                <h2>C#</h2>
            </div>
            <div class="grid-card">
                <img src="../../../src/icons/Azure_devops.png" alt="Azure Devops icon">
                <h2>Azure DevOps</h2>
            </div>
            <div class="grid-card">
                <img src="../../../src/icons/firebase.png" alt="Firebase icon">
                <h2>firebase</h2>
            </div>
            <div class="grid-card">
                <img src="../../../src/icons/git.png" alt="git icon">
                <h2>git</h2>
            </div>
            <div class="grid-card">
                <img src="../../../src/icons/github.png" alt="gitHub icon">
                <h2>GitHub</h2>
            </div>
            <div class="grid-card">
                <img src="../../../src/icons/mssql_server.png" alt="MS SQL Server icon">
                <h2>Microsoft SQL Server</h2>
            </div>
            <div class="grid-card">
                <img src="../../../src/icons/Mysql.png" alt="My SQL icon">
                <h2>MySQL</h2>
            </div>
            <div class="grid-card">
                <img src="../../../src/icons/php.png" alt="Php icon">
                <h2>Php</h2>
            </div>
            <div class="grid-card">
                <img src="../../../src/icons/python.png" alt="Python icon">
                <h2>Python</h2>
            </div>
            <div class="grid-card">
                <img src="../../../src/icons/typescript.png" alt="Ts icon">
                <h2>typescript</h2>
            </div>
      </div>

       <!-- Footer -->
    <ul id="footer_skills">
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