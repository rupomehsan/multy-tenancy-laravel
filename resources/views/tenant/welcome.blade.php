<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rupom Ehsan | Full‑Stack Web Developer</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --clr-bg: #0f172a;
      --clr-surface: #1e293b;
      --clr-accent: #06b6d4;
      --clr-text: #e2e8f0;
      --clr-muted: #94a3b8;
      --radius: 0.75rem;
      --spacing: 1rem;
    }

    *,
    *::before,
    *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: "Inter", sans-serif;
      line-height: 1.6;
      color: var(--clr-text);
      background: var(--clr-bg);
    }

    img {
      max-width: 100%;
      display: block;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    .container {
      width: min(90%, 65rem);
      margin-inline: auto;
    }

    /* Header */
    header {
      padding: var(--spacing) 0;
      background: var(--clr-bg);
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .nav-links {
      display: flex;
      gap: 1.5rem;
    }

    .nav-links a {
      font-weight: 500;
      color: var(--clr-muted);
      transition: color 0.3s;
    }

    .nav-links a:hover {
      color: var(--clr-accent);
    }

    /* Hero */
    .hero {
      display: grid;
      place-items: center;
      padding-block: 6rem 4rem;
      background: linear-gradient(135deg, #0f172a 0%, #0e7490 100%);
    }

    .hero h1 {
      font-size: clamp(2.5rem, 6vw, 4rem);
      font-weight: 700;
      text-align: center;
      margin-bottom: 1rem;
    }

    .hero p {
      font-size: 1.125rem;
      text-align: center;
      max-width: 40rem;
      margin-inline: auto;
    }

    .btn {
      display: inline-block;
      margin-top: 2rem;
      padding: 0.75rem 2rem;
      background: var(--clr-accent);
      color: var(--clr-bg);
      font-weight: 500;
      border-radius: var(--radius);
      transition: transform 0.2s;
    }

    .btn:hover {
      transform: translateY(-2px);
    }

    /* Sections */
    .section {
      padding-block: 4rem;
    }

    .section-title {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 2rem;
      color: var(--clr-accent);
    }

    /* About */
    .about-content {
      display: grid;
      gap: 2rem;
    }

    @media (min-width: 768px) {
      .about-content {
        grid-template-columns: 1fr 1fr;
        align-items: center;
      }
    }

    /* Projects */
    .projects-grid {
      display: grid;
      gap: 2rem;
    }

    @media (min-width: 600px) {
      .projects-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (min-width: 992px) {
      .projects-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    .card {
      background: var(--clr-surface);
      border-radius: var(--radius);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      box-shadow: 0 8px 16px rgb(0 0 0 / 0.15);
    }

    .card img {
      aspect-ratio: 4 / 3;
      object-fit: cover;
    }

    .card-body {
      padding: 1.25rem;
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    .card-body h3 {
      margin-bottom: 0.5rem;
    }

    .card-body p {
      flex: 1;
      margin-bottom: 1rem;
      color: var(--clr-muted);
    }

    .chip-group {
      display: flex;
      gap: 0.5rem;
      margin-block: 1rem;
    }

    .chip {
      background: var(--clr-muted);
      color: var(--clr-bg);
      padding: 0.25rem 0.75rem;
      border-radius: 999px;
      font-size: 0.75rem;
    }

    /* Skills */
    .skills-list {
      display: flex;
      flex-wrap: wrap;
      gap: 0.75rem;
    }

    .skills-list li {
      background: var(--clr-surface);
      padding: 0.5rem 1rem;
      border-radius: 999px;
      font-size: 0.875rem;
    }

    /* Contact */
    .contact-form {
      display: grid;
      gap: 1rem;
      max-width: 32rem;
      margin-inline: auto;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 0.75rem;
      background: var(--clr-surface);
      border: none;
      border-radius: var(--radius);
      color: var(--clr-text);
    }

    .contact-form textarea {
      min-height: 8rem;
      resize: vertical;
    }

    .contact-form button {
      cursor: pointer;
    }

    /* Footer */
    footer {
      background: var(--clr-surface);
      padding: 1.5rem;
      text-align: center;
      color: var(--clr-muted);
    }
  </style>
</head>
<body>
  <!-- Header -->

  <header>
    <div class="container">
      <nav>
        <a href="#" class="logo"><strong>Rupom</strong>Ehsan.</a>
        <div class="nav-links">
          <a href="#about">About</a>
          <a href="#projects">Projects</a>
          <a href="#skills">Skills</a>
          <a href="#contact">Contact</a>
        </div>
      </nav>
    </div>
  </header>

  <!-- Hero -->
  <main>
    <section class="hero">
      <div class="container">
        <h1>{{  $tenant->domain_name }}</h1>
        <p>{{ $tenant->tenancy_db_name  }}</p>
        <h1>Hello, I'm Rupom<br>Full‑Stack Web Developer</h1>
        <p>I build fast, modern, and scalable web applications using PHP, Laravel, Vue.js, and more. Let's turn your idea into a reality.</p>
        <a href="#contact" class="btn">Hire Me</a>
      </div>
    </section>

    <!-- About -->
    <section id="about" class="section">
      <div class="container">
        <h2 class="section-title">About Me</h2>
        <div class="about-content">
          <img src="https://source.unsplash.com/400x400/?developer" alt="Portrait">
          <p>With over 5 years of professional experience, I specialize in crafting full‑stack solutions that are both visually appealing and highly performant. From building multi‑tenant SaaS platforms in Laravel to creating rich, real‑time experiences with Vue.js, I focus on delivering measurable business value.</p>
        </div>
      </div>
    </section>

    <!-- Projects -->
    <section id="projects" class="section">
      <div class="container">
        <h2 class="section-title">Featured Projects</h2>
        <div class="projects-grid">
          <article class="card">
            <img src="https://source.unsplash.com/600x400/?dashboard" alt="Project 1">
            <div class="card-body">
              <h3>Project Management SaaS</h3>
              <p>A multi‑tenant project management system built with Laravel 10 and Vue.js, featuring Kanban boards, real‑time chat, and role‑based access control.</p>
              <div class="chip-group">
                <span class="chip">Laravel</span>
                <span class="chip">Vue</span>
                <span class="chip">MySQL</span>
              </div>
              <a href="#" class="btn">View Case Study</a>
            </div>
          </article>

          <article class="card">
            <img src="https://source.unsplash.com/600x400/?portfolio,website" alt="Project 2">
            <div class="card-body">
              <h3>Portfolio Builder</h3>
              <p>A SaaS platform allowing creatives to generate custom portfolio sites with drag‑and‑drop blocks and custom domains, powered by Laravel's stancl/tenancy package.</p>
              <div class="chip-group">
                <span class="chip">Laravel</span>
                <span class="chip">Tailwind</span>
                <span class="chip">Tenancy</span>
              </div>
              <a href="#" class="btn">View Case Study</a>
            </div>
          </article>

          <article class="card">
            <img src="https://source.unsplash.com/600x400/?ecommerce" alt="Project 3">
            <div class="card-body">
              <h3>E‑commerce API</h3>
              <p>A headless e‑commerce API with JWT authentication, secure payments, and seamless integration with Nuxt storefronts.</p>
              <div class="chip-group">
                <span class="chip">PHP</span>
                <span class="chip">Laravel</span>
                <span class="chip">Stripe</span>
              </div>
              <a href="#" class="btn">View Case Study</a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- Skills -->
    <section id="skills" class="section">
      <div class="container">
        <h2 class="section-title">My Tech Stack</h2>
        <ul class="skills-list">
          <li>Laravel</li>
          <li>PHP</li>
          <li>Vue.js</li>
          <li>Pinia</li>
          <li>Tailwind CSS</li>
          <li>Node.js</li>
          <li>MySQL</li>
          <li>Docker</li>
          <li>AWS</li>
        </ul>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="section">
      <div class="container">
        <h2 class="section-title">Get In Touch</h2>
        <form class="contact-form">
          <input type="text" name="name" placeholder="Name" required>
          <input type="email" name="email" placeholder="Email" required>
          <textarea name="message" placeholder="Your message" required></textarea>
          <button class="btn" type="submit">Send Message</button>
        </form>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Rupom Ehsan — All rights reserved.</p>
  </footer>
</body>
</html>
