<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KSontag Portfolio</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body id="top">
  <header>
    <nav>
      <div id="logo">
        <a href="#top">
          <img src="images/Portfolio.svg" alt="KS Logo">
        </a>
      </div>
      <div id="links">
        <a href="#about">About</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
      </div>
    </nav>
  </header>

  <main>
    <div>
      <h1>Kyle Sontag</h1>
      <p>Full Stack Web Developer</p>
    </div>
    <img src="images/placeholder.png" alt="Picture of me">

    <section id="about">
      <h2>About Me</h2>
      <div id="background">
        <p class="aboutHeader">Background</p>
        <p>My name is Kyle Sontag, and I am currently a student at Red River College in their
          Full Stack Web Development program set to graduate in May 2026. I have previous work
          experience in sales and various other customer service jobs, but I found myself drawn
          towards coding and digital creation.</p>
      </div>
      <div id="objective">
        <p class="aboutHeader">Objective</p>
        <p>Currently I am looking for a co-op placement to finish my last term which will start
          at the beginning of January 2026 and go until May 2026. Ideally, I hope to find a co-op
          where I can contribute my skills while continuing to learn from more experienced developers,
          potentially transitioning into long-term employment.</p>
      </div>
      <div id="personal">
        <p class="aboutHeader">Personal</p>
        <p>Outside of school and work, I am a big gamer, I also love getting outside of the city to
          go for hikes (especially in the mountains when possible), and love spending time with my cats,
          dogs, or snake.</p>
      </div>
      <div id="coding">
        <p class="aboutHeader">Coding</p>
        <ul>
          <li>
            <p>HTML5</p>
            <img src="images/HTML5.png" alt="HTML5 icon">
          </li>
          <li>
            <p>CSS3</p>
            <img src="images/CSS3.png" alt="CSS3 icon">
          </li>
          <li>
            <p>JavaScript</p>
            <img src="images/Javascript.png" alt="JavaScript icon">
          </li>
          <li>
            <p>PHP</p>
            <img src="images/php.png" alt="PHP icon">
          </li>
          <li>
            <p>Ruby on Rails</p>
            <img src="images/rubyonrails.png" alt="Ruby on Rails icon">
          </li>
          <li>
            <p>Java</p>
            <img src="images/java.png" alt="Java Icon">
          </li>
          <li>
            <p>Python</p>
            <img src="images/Python.png" alt="Python Icon">
          </li>
          <li>
            <p>PostgreSQL</p>
            <img src="images/postgresql.png" alt="PostgreSQL icon">
          </li>
          <li>
            <p>MySQL</p>
            <img src="images/mysql.png" alt="MySQL icon">
          </li>
        </ul>
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
</body>