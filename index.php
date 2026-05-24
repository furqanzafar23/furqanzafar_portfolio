<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furqan-Zafar-Portfolio</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<header>
    <div class="logo">Furqan Zafar</div>

    <nav>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#skills">Skills</a>
        <a href="#contact">Contact</a>
    </nav>
    <!-- social -->
<span class="socialbody">
  <div class="social-container">
    <a href="https://www.linkedin.com/in/furqanzafar15/" class="social-icon" aria-label="LinkedIn" target="_blank">
       <i class="fab fa-linkedin-in"></i>
    </a>
    
    <a href="#" class="social-icon" aria-label="Facebook" target="_blank">
       <i class="fab fa-facebook-f"></i>
    </a>
    
    <a href="#" class="social-icon" aria-label="GitHub" target="_blank">
       <i class="fab fa-github"></i>
    </a>
    
    <a href="#" class="social-icon" aria-label="WhatsApp" target="_blank">
       <i class="fab fa-whatsapp"></i>
    </a>
  </div>
</span>

</header>

<!-- HOME -->

<section class="home" id="home">

    <div class="home-text">
        <h1>Hello, I'm <span>Furqan Zafar</span></h1>

        <p>
            
        </p>

        <a href="#contact" class="btn">Hire Me</a>
    </div>

    <div class="home-img">
        <img src="./pic.jfif" alt="Profile">
    </div>

</section>

<!-- ABOUT -->

<section id="about">

    <h2>About Me</h2>

    <p>
        I am a BBA HRM graduate with strong communication, management, and computer skills.
        I have knowledge of web development using HTML, CSS, PHP, and MySQL, along with experience in Microsoft Office tools including Word, Excel, and PowerPoint.
        I enjoy creating professional and user-friendly websites and continuously learning new technologies. 
        I am a hardworking, motivated, and quick learner who can work well individually and as part of a team. 
        My goal is to build a successful career by combining my business education with technical and problem-solving skills.

    </p>

</section>

<!-- SERVICES -->

<section id="services">

    <h2>My Services</h2>

    <div class="services-container">

        <div class="card">
            <h3>Web Development</h3>
            <p>Responsive and modern websites using latest technologies.</p>
        </div>

        <div class="card">
            <h3>Microsoft Office</h3>
            <p></p>
        </div>

        <div class="card">
            <h3> Adminstrative</h3>
            <p></p>
        </div>

    </div>

</section>

<!-- SKILLS -->

<section id="skills">

    <h2>My Skills</h2>

    <div class="skills-container">

        <div class="card">
            <h3>HTML</h3>
        </div>

        <div class="card">
            <h3>CSS</h3>
        </div>

        <div class="card">
            <h3>JavaScript</h3>
        </div>

        <div class="card">
            <h3>PHP</h3>
        </div>
        <div class="card">
            <h3>MS Office</h3>
        </div>
        

    </div>

</section>

<!-- CONTACT -->

<section class="contact" id="contact">

    <h2>Contact Me</h2>

    <form action="./contact.php" method="post">

        <input type="text" name="name" placeholder="Your Name" required>

        <input type="email" name="email" placeholder="Your Email" required>

        <textarea name="message" rows="5" placeholder="Your Message"></textarea>

        <button type="submit">Send Message</button>

    </form>

</section>

<footer>
    <p>© 2026 Furqan Zafar Portfolio | All Rights Reserved</p>
</footer>

</body>
</html>