<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Hello, It's Me — King Josh Robles, a USTP student who enjoys music and gaming.">
  <meta name="theme-color" content="#17243A">
  <title>Hello, It's Me | King Josh Robles</title>
  <link rel="icon" href="assets/images/favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <a class="skip-link" href="#main">Skip to content</a>
  <!-- Shared outline icons: 24 x 24, 1.75 stroke, currentColor. -->
  <svg class="icon-definitions" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <defs>
      <symbol id="icon-person" viewBox="0 0 24 24">
        <circle cx="12" cy="8" r="4"/>
        <path d="M4 21v-2a8 8 0 0 1 16 0v2"/>
      </symbol>
      <symbol id="icon-education" viewBox="0 0 24 24">
        <path d="m2 9 10-5 10 5-10 5L2 9Z"/>
        <path d="M6 11v6c4 3 8 3 12 0v-6M22 9v7"/>
      </symbol>
      <symbol id="icon-music" viewBox="0 0 24 24">
        <path d="M9 18V5l12-2v13M9 9l12-2"/>
        <ellipse cx="6" cy="18" rx="3" ry="3"/>
        <ellipse cx="18" cy="16" rx="3" ry="3"/>
      </symbol>
      <symbol id="icon-game" viewBox="0 0 24 24">
        <path d="M7 6h10c3 0 4 3 5 10 .5 4-2 5-4 2l-2-2H8l-2 2c-2 3-4.5 2-4-2C3 9 4 6 7 6Z"/>
        <path d="M7 9v5M4.5 11.5h5M16 10h.01M19 13h.01"/>
      </symbol>
      <symbol id="icon-arrow" viewBox="0 0 24 24">
        <path d="M5 19 19 5M5 5h14v14"/>
      </symbol>
    </defs>
  </svg>

  <header class="site-header wrap" id="top">
    <a class="wordmark" href="#top" aria-label="Hello, It's Me — home">
      Hello, It's Me<span class="brand-dot">.</span>
    </a>
    <nav aria-label="Main navigation">
      <a href="#about">About</a>
      <a href="#songs">Music</a>
      <a href="#games">Games</a>
    </nav>
    <span class="header-note">A little about me</span>
  </header>

  <main id="main" class="wrap">
    <section class="hero" aria-labelledby="hero-title">
      <figure class="portrait">
        <div class="portrait-field" aria-hidden="true"></div>
        <div class="portrait-disc" aria-hidden="true"></div>
        <img src="assets/images/profile.png" width="1536" height="1024"
             alt="King Josh Robles wearing glasses and a cream embroidered barong"
             fetchpriority="high">
        <figcaption>King Josh Robles <span>Personal space / 01</span></figcaption>
      </figure>
      <div class="hero-copy">
        <p class="hello-label">Hello!!</p>
        <h1 id="hero-title">I'm <mark>King Josh</mark><br>Robles<span class="coral-period">.</span></h1>
        <h2 class="student-heading">I'm a <span>USTP Student.</span></h2>
        <p class="intro">Welcome to my personal space! I'm a student of the
          University of Science and Technology of Southern Philippines.
          This is where I share a little about myself, my favorite music,
          and the games I enjoy playing.</p>
        <a class="explore-link" href="#about">Get to know me
          <svg class="icon" aria-hidden="true"><use href="#icon-arrow"/></svg>
        </a>
      </div>
    </section>

    <div class="personal-panel">
      <aside class="identity-rail" aria-label="Student identity">
        <span class="rail-number" aria-hidden="true">01 /</span>
        <p>USTP STUDENT</p>
        <span class="rail-foot" aria-hidden="true">HELLO, IT'S ME</span>
      </aside>
      <div class="panel-content">
        <div class="profile-grid">
          <section id="about" aria-labelledby="about-title">
            <div class="section-heading">
              <svg class="icon" aria-hidden="true"><use href="#icon-person"/></svg>
              <h2 id="about-title">About Me</h2>
            </div>
            <p>I'm a USTP student who enjoys gaming and music. I like exploring
              different games, discovering new experiences, and listening to
              songs that match my mood.</p>
          </section>
          <section id="education" aria-labelledby="education-title">
            <div class="section-heading">
              <svg class="icon" aria-hidden="true"><use href="#icon-education"/></svg>
              <h2 id="education-title">Education</h2>
            </div>
            <p class="university">University of Science and Technology of
              Southern Philippines <span>(USTP)</span></p>
            <p class="student-label">College Student</p>
          </section>
        </div>

        <div class="interests-grid">
          <section class="interest songs" id="songs" aria-labelledby="songs-title">
            <p class="section-index">On my playlist</p>
            <div class="section-heading">
              <h2 id="songs-title">Favorite Songs</h2>
              <svg class="icon" aria-hidden="true"><use href="#icon-music"/></svg>
            </div>
            <ol class="interest-list">
              <li>Helena</li>
              <li>When You're Gone</li>
              <li>Viva La Vida</li>
              <li>Only Hope</li>
              <li>Would You Be So Kind</li>
            </ol>
          </section>
          <section class="interest games" id="games" aria-labelledby="games-title">
            <p class="section-index">Away from the books</p>
            <div class="section-heading">
              <h2 id="games-title">Games I Played</h2>
              <svg class="icon" aria-hidden="true"><use href="#icon-game"/></svg>
            </div>
            <ol class="interest-list">
              <li>Black Desert Online</li>
              <li>Mobile Legends: Bang Bang</li>
              <li>Lost Ark</li>
              <li>League of Legends</li>
              <li>Valorant</li>
            </ol>
          </section>
        </div>
      </div>
    </div>
  </main>

  <footer class="site-footer wrap">
    <p>Hello, It's Me<span>King Josh Robles · USTP Student</span></p>
    <div class="footer-links">
      <a href="https://github.com/kiiing025/hello-world">View source
        <svg class="icon" aria-hidden="true"><use href="#icon-arrow"/></svg>
      </a>
      <a href="#top">Back to top</a>
    </div>
  </footer>
</body>
</html>
