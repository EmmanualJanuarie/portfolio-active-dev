<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../home-page/home_style.css">
    <link rel="stylesheet" href="./work-page.css">

    <link rel="icon" type="image/x-icon" href="../../../favicon_e.ico">

    <!-- navbar media query -->
    <link rel="stylesheet" href="../media-queries/mq-work-page.css">

    <!-- font-awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" 
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" 
    referrerpolicy="no-referrer" />

    <title>Emmanual | Work</title>
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
        <li><a href="./work-page.php">Work</a></li>
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
        <span id="heading_text">Work</span><br>
        <hr>
      </div>
      
      <div id="heading_sub_text">
        <span id="sub_text">Projects are like individual components of a larger system architecture.</span><br>
      </div>

      <!-- Grid -->
       <!-- grid for skills -->
      <div class="grid-container">
          <a href="#ctubuddy" alt="takes user to ctu buddy"> 
            <div class="grid-card">
                <img src="../../../src/ctubuddy.PNG" alt="Vb.net image" class="fit-image custom-fit-image">
                <h2>ctubuddy.firebaseApp <i id="info" class="fa-solid fa-circle-info info-button" data-modal="modal1"></i> </h2>
            </div>
          </a>
          <a href="https://github.com/EmmanualJanuarie/swing-taskmanager-proj" alt="GitHub taskmanager project link"> 
            <div class="grid-card">
                <img src="../../../src/taskmanager.jpeg" alt="swing taskmanager" class="fit-image">
                <h2>swing taskmanager <i id="info" class="fa-solid fa-circle-info info-button" data-modal="modal2"></i> </h2>
            </div>
          </a>
          <a href="https://www.linkedin.com/in/emmanual-januarie-9ba580205/details/projects/" alt="GitHub student MVC Portal project link">
            <div class="grid-card">
                <img src="../../../src/student_portal.png" alt="mvc-student portal" class="fit-image custom-fit-image">
                <h2>mvc student portal  <i id="info" class="fa-solid fa-circle-info info-button" data-modal="modal3"></i></h2>
            </div>
          </a>
          <a href="https://github.com/EmmanualJanuarie/swing-sql-login-and-reg" alt="GitHub student SQL reg and login link">
            <div class="grid-card">
                <img src="../../../src/login_and_reg.jpeg" alt="mvc-student portal" class="fit-image">
                <h2>swing SQL login & register  <i id="info" class="fa-solid fa-circle-info info-button" data-modal="modal4"></i></h2>
            </div>
          </a>
          <a href="https://github.com/EmmanualJanuarie/java-basic-Library-management-system" alt="Basic Java Library management system">
            <div class="grid-card">
                <img src="../../../src/LMS-java.png" alt="image by Gyan Bahadur Basnet" class="fit-image">
                <h2>library management system - java  <i id="info" class="fa-solid fa-circle-info info-button" data-modal="modal5"></i></h2>
            </div>
          </a>
          <a href="https://github.com/EmmanualJanuarie/zoo-management-system-csharp" alt="ZMS LINK">
            <div class="grid-card">
                <img src="../../../src/ZMS.png" alt="Zoo Management System login image" class="fit-image">
                <h2>zoo management system - c#  <i id="info" class="fa-solid fa-circle-info info-button" data-modal="modal6"></i></h2>
            </div>
          </a>
          <a href="#ctubuddy" alt="CTUBUDDY LINK">
            <div class="grid-card">
                <img src="../../../src/under-construction-4011849.png" alt="image by Gyan Bahadur Basnet" class="fit-image">
                <h2>deals - mvc  <i id="info" class="fa-solid fa-circle-info info-button" data-modal="modal7"></i></h2>
            </div>
          </a>
          <a href="#ctubuddy" alt="CTUBUDDY LINK">
            <div class="grid-card">
                <img src="../../../src/under-construction-4011849.png" alt="image by Gyan Bahadur Basnet" class="fit-image">
                <h2>deals - mvc  <i id="info" class="fa-solid fa-circle-info info-button" data-modal="modal7"></i></h2>
            </div>
          </a>
      </div>
    <!-- Modal -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal1')">&times;</span>
            <h2 class="Impactfont">CTUBUDDY</h2>
            <h3 class="Impactfont">Role: Team Lead</h3>
        <p class="Impactfont">
            Led a team of 3 students in designing and developing a 
            comprehensive student website using cutting-edge technologies
             such as Angular, Bootstrap, CSS, and JavaScript. The website 
             featured a robust Chat Hub, built using Java for the backend,
            enabling seamless communication among students.
        </p>
        <h4 class="Impactfont">Key Skills:</h4>
        <ul style="background-color: white;" class="Impactfont">
            <li><strong>Angular</strong>: Utilized Angular to build a dynamic and responsive frontend</li>
            <li><strong>Bootstrap</strong>: Leveraged Bootstrap framework for a consistent and visually appealing design</li>
            <li><strong>CSS</strong>: Applied Cascading Style Sheets to enhance the website's layout and styling</li>
            <li><strong>JavaScript</strong>: Implemented JavaScript to create interactive and engaging user experiences</li>
            <li><strong>Java</strong>: Developed the backend using Java, ensuring a scalable and efficient Chat Hub</li>
        </ul>
        </div>
    </div>

    <div id="modal2" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal2')">&times;</span>
            <h2 class="Impactfont">Swing Task Manager Application</h2>
            <h3 class="Impactfont">Role: Developer</h3>
            <p class="Impactfont">
                The Task Manager Application project involves creating a user-friendly tool to manage tasks. It features a GUI to list tasks from an SQLite database, with options to save and read tasks from a text file, display file properties using NIO, and export tasks to a CSV file. 
                The project includes a task class using Generics, task management with ArrayList, and task categorization with HashMap. Inner classes handle GUI components and task categories. 
                The application integrates with an SQLite database using JDBC, allowing for task insertion, updating, and retrieval. Overall, it emphasizes intuitive design, error handling, and a smooth user experience.
            </p>
            <h4 class="Impactfont">Key Skills:</h4>
            <ul style="background-color: white;" class="Impactfont">
                <li><strong>Oracle SQL Developer</strong>: Proficient in using Oracle SQL Developer for database management.</li>
                <li><strong>SQL Database Administration</strong>: Experienced in managing and administering SQL databases.</li>
                <li><strong>Java</strong>: Developed the application using Java for robust functionality.</li>
                <li><strong>Java Database Connectivity (JDBC)</strong>: Utilized JDBC for seamless database integration and operations.</li>
            </ul>
        </div>
    </div>

    <div id="modal3" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal3')">&times;</span>
            <h2 class="Impactfont">MVC Student Portal</h2>
            <h3 class="Impactfont">Role: Developer</h3>
        <p class="Impactfont">
            I developed a Student Portal WebApp using the MVC design pattern, 
            focusing on modularity and maintainability. The app features a robust 
            authentication system with custom controllers for user registration and 
            login, integrating third-party options for Google, Facebook, and GitHub.
            I implemented a chat interface with SignalR for real-time student interaction
            and created a report issuing form that demonstrates client-server interaction
            through API integration. <br><br>
            
            This form uses GET and POST actions to serialize input
            data to JSON and communicate with an external API for immediate feedback. 
            The backend is powered by Microsoft SQL Server, and I configured secure 
            authentication in the Program.cs file. This project showcases my ability 
            to leverage modern web technologies to enhance the educational experience.
        </p>
        <h4 class="Impactfont">Key Skills:</h4>
        <ul style="background-color: white;" class="Impactfont">
            <li><strong>SignalR</strong>: Implemented real-time communication using SignalR.</li>
            <li><strong>Microsoft SQL Server</strong>: Utilized Microsoft SQL Server for reliable data storage.</li>
            <li><strong>ASP.NET MVC</strong>: Developed the application using ASP.NET MVC, emphasizing modularity and maintainability.</li>
            <li><strong>Secure Authentication</strong>: Implemented secure authentication using custom controllers and third-party authentication options.</li>
            <li><strong>C#</strong>: Used C# as the programming language for the application.</li>
        </ul>
        </div>
    </div>

    <div id="modal4" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal4')">&times;</span>
            <h2 class="Impactfont">Swing SQL Login % Register Application</h2>
            <h3 class="Impactfont">Role: Developer</h3>
        <p class="Impactfont">
            Built a comprehensive GUI-based registration and login application in Java and SQL, featuring strict username and password complexity checks, which decreased user error rates by 25% during account creation and login attempts.
        </p>
        <h4 class="Impactfont">Key Skills:</h4>
        <ul style="background-color: white;" class="Impactfont">
            <li><strong>Java</strong>: Developed the application using Java for robust functionality.</li>
            <li><strong>Java Swing</strong>: Utilized Java Swing for creating the graphical user interface.</li>
            <li><strong>MySQL</strong>: Implemented MySQL for database management and storage of user credentials.</li>
        </ul>
        </div>
    </div>

    <div id="modal5" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal5')">&times;</span>
            <h2 class="Impactfont">Library Management System (LMS) - JAVA</h2>
            <h3 class="Impactfont">Role: Developer</h3>

            <p class="Impactfont">
                The application is a Java-based terminal tool designed to streamline library operations, 
                providing comprehensive management capabilities for books and members, 
                as well as efficient book checkout functionality. Admin members can easily add books to 
                the library catalog, including essential details such as title, author, ISBN, and availability.<br> <br>
                They can also register new members by entering their names and email addresses. 
                The system allows admins to view a list of books currently borrowed by guest members, 
                helping them track availability and due dates. Additionally, admins can search for 
                books by title or author, simplifying management tasks, and they can check for penalties 
                on returned books while looking up members by email for efficient account management.<br> <br>

                For guest members, the application enables easy book checkout 
                by allowing them to borrow books using the book's ISBN and their email address. 
                Guests can search for specific titles conveniently and check return dates for borrowed books, 
                aiding them in managing their reading schedules. When returning books, guests can mark them as 
                returned in the system, which updates the availability and due dates accordingly.
            </p>
        </div>
    </div>

    <div id="modal6" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal6')">&times;</span>
            <h2 class="Impactfont">Zoo Management System  - C# (.Net)</h2>
            <h3 class="Impactfont">Role: Developer</h3>
            <p class="Impactfont">
                The Zoo Management System is a software application designed to streamline
                zoo operations and enhance visitor engagement through a user-friendly interface
                for both guests and members. Guests can explore various animal types and species,
                filling out interactive forms to specify interests related to animal care, such as
                food quantity. The system generates tailored outputs based on their selections,
                enriching their experience. New members can register through the application
                , providing essential information for access. <br><br>
                
                Members can manage animal welfare
                by checking on health, feeding schedules, and general care through dedicated forms. 
                Admin members have access to management tools for overseeing zoo operations and member 
                interactions, while member management features allow for account updates and inquiry handling. 
                The system differentiates between guest and member roles, ensuring appropriate access and functionalities. 
                Robust error handling addresses common issues like incorrect email formats and authentication errors. 
                Future enhancements may include a gift shop, video screenings of animal behavior, and potential mobile 
                or web application expansions. Overall, the system is designed to be intuitive and easy to navigate, 
                promoting a seamless experience for all users.
            </p>
        </div>
    </div>

    <div id="modal7" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal7')">&times;</span>
            <h2>CTUBUDDY</h2>
            <p>Some information about CTUBUDDY.</p>
        </div>
    </div>

    <div id="modal8" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal8')">&times;</span>
            <h2>CTUBUDDY</h2>
            <p>Some information about CTUBUDDY.</p>
        </div>
    </div>

    <!-- Footer -->
    <ul id="footer">
        <li><a href="mailto:emmanual.dev@gmail.com">Email</a></li>
        <li><a href="https://github.com/EmmanualJanuarie">GitHub</a></li>
        <li><a href="https://www.linkedin.com/in/emmanual-januarie-9ba580205/">LinkedIn</a></li>
        <li><a href="../video-page/video-page.php" target="_blank">Videos</a></li>
      </ul>

      <!-- SCRIPTS -->
      <script>
       function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.style.display = "none";
}

document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.info-button');

    buttons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default anchor behavior
            const modalId = this.getAttribute('data-modal');
            const modal = document.getElementById(modalId);
            modal.style.display = "block"; // Show the corresponding modal
        });
    });

    // Close modal when clicking on the close button
    const closeButtons = document.querySelectorAll('.close');
    closeButtons.forEach(closeButton => {
        closeButton.addEventListener('click', function() {
            const modalId = this.closest('.modal').id;
            closeModal(modalId);
        });
    });

    // Close modal when clicking outside of modal content
    window.addEventListener('click', function(event) {
        const modals = document.querySelectorAll('.modal');
        modals.forEach(modal => {
            if (event.target === modal) {
                closeModal(modal.id);
            }
        });
    });
});
    </script>

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