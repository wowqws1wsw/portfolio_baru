<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Muhammad Arfan Naqi | Portfolio</title>
  <link rel="stylesheet" href="css/project2.css">
  <script src="https://kit.fontawesome.com/4ff41ebcaa.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
  <!-- Header Section -->
  <header class="header">
    <div class="container">
      <nav aria-label="Main navigation">
        <h2>Portfolio</h2>
        <ul>
          <li><a href="#Home">Home</a></li>
          <li><a href="#competence">Competence</a></li>
          <li><a href="#contacts">Contacts</a></li>
        </ul>
      </nav>
      <div class="header-text" id="Home">
        <p>Student of Wikrama</p>
        <h1>Hello, my name is Muhammad Arfan Naqi</h1>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="about" id="competence">
    <div class="container">
      <div class="row">
        <figure class="alpha">
          <img src="img/ed1e83c4-adcc-46b2-832c-d72fc7b35ff8.jpeg" alt="Muhammad Arfan Naqi">
        </figure>
        <article class="bravo">
          <h1 class="sub-title">About Me</h1>
          <p>
            Hello, Nama saya Muhammad Arfan Naqi. Saya berumur 15 tahun, Saya lahir di kota BOGOR tanggal 12-5-08. Saya anak pertama dari 2 bersaudara, dan hobi saya adalah bermain bola dan sejarah.
          </p>
          <div class="tabs">
            <button class="tab-links active" onclick="opentab('Competence')">Competence</button>
            <button class="tab-links" onclick="opentab('Pendidikan')">Education</button>
          </div>
          <div class="tab-contents active" id="Competence">
            <ul>
              <li><span onclick="scrollToElement('htmlContent')">HTML</span></li>
              <li><span onclick="scrollToElement('phpContent')">PHP</span></li>
              <li><span onclick="scrollToElement('cssContent')">CSS</span></li>
              <li><span onclick="scrollToElement('jsContent')">JS</span></li>
            </ul>
          </div>   
          <div class="tab-contents" id="Pendidikan">
            <ul>
              <li><a href="https://smkwikrama.sch.id" target="_blank" rel="noopener">SMK Wikrama Bogor</a></li>
              <li><a href="https://sekolah.data.kemdikbud.go.id/index.php/chome/profil/F0B12214-2CF5-E011-9D90-5FE3F9A6BD79" target="_blank" rel="noopener">SMP 1 Cigombong</a></li>
              <li><a href="https://sekolahloka.com/data/sd-negeri-srogol-01/">SDN 1 Cigombong</a></li>
            </ul>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="Portfolio">
    <div class="container">
      <h1 class="sub-title">What is HTML, PHP, CSS and JS?</h1>
      <div class="work-list">
        <!-- Work Items -->
        <article class="work-item" id="htmlContent">
          <img src="img/images.png" alt="HTML icon">
          <div class="layer">
            <h3>HTML</h3>
            <p>HTML stands for HyperText Markup Language. It is the standard markup language for creating web pages.</p>
          </div>
        </article>
        <article class="work-item" id="phpContent">
          <img src="img/phpimages.png" alt="PHP icon">
          <div class="layer">
            <h3>PHP</h3>
            <p>PHP is a server-side scripting language embedded in HTML for creating dynamic content and interacting with databases.</p>
          </div>
        </article>
        <article class="work-item" id="cssContent">
          <img src="img/gambar-CSS.jpg" alt="CSS icon">
          <div class="layer">
            <h3>CSS</h3>
            <p>CSS (Cascading Style Sheets) is used to style the presentation of web pages written in HTML or XML.</p>
          </div>
        </article>
        <article class="work-item" id="jsContent">
          <img src="img/js.png" alt="JavaScript icon" height="225px">
          <div class="layer">
            <h3>JS</h3>
            <p>JavaScript is a versatile programming language for making interactive and dynamic web pages.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact" id="contacts">
    <h2>Contact Me</h2>
    <p>Feel free to reach out via the following social media link:</p>
    <div class="socials">
      <a href="https://www.instagram.com/east_indies_trading_company/" target="_blank" aria-label="Instagram">
        <i data-feather="instagram"></i>
      </a>
    </div>
  </section>

  <script src="js/script.js"></script>
</body>
</html>
