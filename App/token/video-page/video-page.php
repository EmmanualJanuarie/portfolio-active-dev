<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- video page css -->
    <link rel="stylesheet" href="../video-page/video-page.css">
    
    <link rel="icon" type="image/x-icon" href="../../../favicon_e.ico">
    <title>Emmanual | Video</title>
</head>
<body>
    <section>
        <video id="slider" autoplay  loop>
            <source src="../../../src/videos/FizzBuzz.mp4" type="video/mp4">
        </video>
        <ul class="navigation">
            <li onclick="VideoUrl('../../../src/videos/AZ 400 - Con figuring Git Hub Projects.mp4')"><img src="../../../src/videos/thumbnails/Configuring Github Projects.png"></li>
            <li onclick="VideoUrl('../../../src/videos/AZ400- Integrating DevOps with GitHub.mp4')"><img src="../../../src/videos/thumbnails/devops_with_github.png"></li>
            <li onclick="VideoUrl('../../../src/videos/AZ400- DevOps(Azure Boards).mp4')"><img src="../../../src/videos/thumbnails/devops.png"></li>
            <li onclick="VideoUrl('../../../src/videos/FizzBuzz.mp4')"><img src="../../../src/videos/thumbnails/fizz_buzz.png"></li>
            <li onclick="VideoUrl('../../../src/videos/GetFileName.mp4')"><img src="../../../src//videos/thumbnails/getFileName.png"></li>
        </ul>
    </section>
    
    <script src="../video-page/video-page.js"></script>
</body>
</html>