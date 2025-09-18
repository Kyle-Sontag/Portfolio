<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KSontag Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body id="top">

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="main-nav">
      <div class="container">
        <a class="navbar-brand" href="#top">
          <img src="images/Portfolio.svg" alt="KS Logo" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section id="intro" class="bg-dark text-light min-vh-100 d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
        <div>
          <h1 class="display-2 fw-bold mb-3">Kyle Sontag</h1>
          <p class="text-danger fs-4 mb-4">Full Stack Web Developer</p>
        </div>
        <img src="images/placeholder.png" alt="Picture of me"
             class="rounded-circle shadow-lg profile-photo">
      </div>
    </section>

    <section id="about" class="bg-dark text-light py-5">
      <div class="container">
        <!--Header-->
        <div class="text-center mb-5">
          <h2 class="display-4 fw-bold mb-2">About Me</h2>
        </div>
        <!--Main Content-->
        <div class="row mb-5">
          <div class="col-lg-8">
            <div id="background" class="mb-4">
              <p class="aboutHeader text-primary fw-bold mb-2">Background</p>
              <p>Hi, I'm Kyle. I am currently a student at Red River College in their
                Full Stack Web Development program set to graduate in May 2026. I have previous work
                experience in sales and various other customer service jobs, but I found myself drawn
                towards coding and digital creation.</p>
            </div>
            <div id="objective" class="mb-4">
              <p class="aboutHeader text-primary fw-bold mb-2">Objective</p>
              <p>Currently I am looking for a co-op placement to finish my last term which will start
                at the beginning of January 2026 and go until May 2026. Ideally, I hope to find a co-op
                where I can contribute my skills while continuing to learn from more experienced developers,
                potentially transitioning into long-term employment.</p>
            </div>
            <div id="personal" class="mb-4">
              <p class="aboutHeader text-primary fw-bold mb-2">Personal</p>
              <p>Outside of school and work, I am a big gamer, I also love getting outside of the city to
                go for hikes (especially in the mountains when possible), and love spending time with my cats,
                dogs, or snake.</p>
            </div>
          </div>
        </div>
        <!--Skills-->
        <div id="coding" class="mb-4">
          <p class="aboutHeader text-primary fw-bold mb-2">Coding</p>
          <div class="skills-grid">
            <div class="skill-item">
              <span>HTML5</span>
              <img src="images/HTML5.png" alt="HTML5 icon">
            </div>
            <div class="skill-item">
              <span>CSS3</span>
              <img src="images/CSS3.png" alt="CSS3 icon">
            </div>
            <div class="skill-item">
              <span>JavaScript</span>
              <img src="images/Javascript.png" alt="JavaScript icon">
            </div>
            <div class="skill-item">
              <span>PHP</span>
              <img src="images/php.png" alt="PHP icon">
            </div>
            <div class="skill-item">
              <span>Ruby on Rails</span>
              <img src="images/rubyonrails.png" alt="Ruby on Rails icon">
            </div>
            <div class="skill-item">
              <span>Java</span>
              <img src="images/java.png" alt="Java Icon">
            </div>
            <div class="skill-item">
              <span>Python</span>
              <img src="images/Python.png" alt="Python Icon">
            </div>
            <div class="skill-item">
              <span>PostgreSQL</span>
              <img src="images/postgresql.png" alt="PostgreSQL icon">
            </div>
            <div class="skill-item">
              <span>MySQL</span>
              <img src="images/mysql.png" alt="MySQL icon">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="projects">
      <h2>My Projects</h2>
      <div id="project1" class="projects">
        <p class="projectTitle">My First Website</p>
        <img src="images/placeholder.png" alt="Preview of my first website">
        <p>This is the first website I launched utilizing the skills I learned in my first term
          (don’t judge it too hard)!</p>
        <a href="Need to fill">Git</a>
      </div>
      <div id="project2" class="projects">
        <p class="projectTitle">Pokémon Team Builder</p>
        <img src="images/placeholder.png" alt="Preview of my Pokémon team builder">
        <p>This was a website I created where people can create Pokemon teams and view teams other
          people have created.</p>
        <a href="Need to fill">Git</a>
      </div>
    </section>

    <section id="contact">
      <h2>Contact Me</h2>
      <p>If you are interested in contacting me, feel free to fill out the form below!</p>
      <form id="contactForm" action="process_contact.php" method="post">
        <fieldset>
          <legend>Contact Form</legend>
          <ul>
            <li>
              <label for="name">Name: </label>
              <input id="name" type="text" name="name" placeholder="John Doe" required>
              <p class="error">**Required Field </p>
            </li>
            <li>
              <label for="email">Email: </label>
              <input id="email" type="email" name="email" placeholder="jdoe123@gmail.com" required>
              <p class="error">**Required Field</p>
              <p class="invalidEntry">**Invalid Email</p>
            </li>
            <li>
              <label for="subject">Subject: </label>
              <input id="subject" type="text" name="subject" placeholder="Message subject" required>
              <p class="error">**Required Field </p>
            </li>
            <li>
              <label for="message">Message: </label>
              <textarea name="message" id="message" placeholder="Explain your reason for contacting" required></textarea>
              <p class="error">**Required Field </p>
            </li>
            <li id="buttons">
              <button type="submit">Submit</button>
              <button type="reset">Clear</button>
            </li>
          </ul>
        </fieldset>
      </form>
    </section>
  </main>

  <footer>
      <div id="links">
        <a href="#top">Home</a>
        <a href="#about">About</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
      </div>
  </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/portfolio.js"></script>
<!---->
</body>