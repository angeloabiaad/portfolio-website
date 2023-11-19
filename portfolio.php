<!doctype html>
<html lang="en">
  <head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"content="width=device-width , initial-scale=1.0">
    <title>Responsive personnal Portfolio</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="stylee.css">
  </head>
  <body>

  <?php
    session_start();
    if (isset($_GET["logout"])) {
        session_destroy();
        header("location:Login.php");
    }
    ?>

    <header class="header">
        <a href="#" class="logo">Portfolio</a>

        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about" >About</a>
            <a href="#internships" >Internships</a>
            <a href="#projects" >Projects</a>
            <a href="#contact" >Contact</a>
            <a href="cv.html">Resume </a>


        </nav>

        <div class="welcome-message">
            <span>Welcome</span>
            <span><?php echo $_SESSION["username"]; ?></span>
        </div>

        <a href="?logout=true" class="logout-link">Logout</a>
    
    </header>
   <section class="home" id="home">
    <div class="home-content">
        <h3>Hello ,It's me</h3>
        <h1>Angelo Abi Aad</h1>
        <h3>And I'm a <span>Third Year Cs Student</span></h3>
        <p>I am still a student so I have not done that mush already but I am always curious to learn new things ,I am a hard worker and try everything to get where I want</p>
        <div class="social-meadia">
            <a href=""><i class='bx bxl-facebook'></i></a>
            <a href=""><i class='bx bxl-twitter'></i></a>
            <a href=""><i class='bx bxl-instagram'></i></a>
            <a href=""><i class='bx bxl-linkedin'></i></a>
        </div>
        <a href="" class="btn">Download CV</a>
    </div>

    <div class="home-img">
        <img src="images/home.png" alt="">
    </div>
   </section>

   <section class="about" id="about">
    <div class="about-img">
        <img src="images/about.png" alt="">
    </div>
    <div class="about-content">
        <h2 class="heading">About <span>Me</span></h2>
        <h3>Thrid Year Cs Student</h3>
        <p>Educated at College Notre Dame De Jamhour and currently pursuing a Bachelor of Science in Computer Science at the Lebanese American University, I have a notable academic record with a distinction listing in Fall 2021. My work experience includes internships at NetVariant and Beytek, where he gained skills in SQL, Java, object-oriented programming, and C#. Angelo is proficient in languages such as Java, SQL, Dart, C/C#, and HTML/CSS, with additional expertise in mobile development using the Flutter framework, database management with Oracle SQL, and multilingual capabilities in Arabic, English, and French. My project work demonstrates practical applications of his skills, such as mobile app development and database design for a gas company.</p>
        <a href="#" class="btn">Read more</a>
    </div>

   </section>

   <section class="internships" id="internships">
    <h2 class="heading">My <span>Internships</span></h2>
    <div class="internships-container">
        <div class="internships-box">
            <i class='bx bx-been-here' ></i>
            <h3>NetVariant , Hazmieh</h3>
            <p>Learned different skills in data base SQL</p>
            <p>Learned how to connect from data base to java</p>
            
            <a href="#" class="btn">Read more</a>

        </div>

        <div class="internships-box">
            <i class='bx bx-been-here' ></i>
            <h3>BEYTEK , Jal El Dib</h3>
            <p>Learned the fundementals of C#</p>
            <p>Learned LINQ in C#</p>
            <p>Learned how to connect C# to sql and build queries</p>           
            <a href="#" class="btn">Read more</a>

        </div>

        <div class="internships-box">
            <i class='bx bx-been-here' ></i>
            <h3>NetVariant , Hazmieh</h3>
            <p>Learned Object Oriented Programming</p>
            <p>Learned some java swing</p>
            <a href="#" class="btn">Read more</a>

        </div>
    </div>
   </section>

   <section class="projects" id="projects">
    <h2 class="heading">Latest <span>Projects</span></h2>
    <div class="projects-container" id="projects-container">
        <?php include 'projects.php'; ?>
    </div>
</section>



   <section class="contact" id="contact">
    <h2 class="heading">Contact <span>Me!</span></h2>

    <form action="#">
        <div class="input-box">
            <input type="text" placeholder="Full Name">
            <input type="email" placeholder="Email Address">
        </div>

        <div class="input-box">
            <input type="number" placeholder="Mobile Number">
            <input type="text" placeholder="Email Subject">
        </div>
        <textarea name="" id="" cols="30" rows="10" placeholder="Your message"></textarea>
        <input type="submit" value="Send Message" class="btn">
    </form>

   </section>



  </body>
</html>