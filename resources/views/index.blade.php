<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>El Portal - Ω Archivum Vetitum Ω</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar">
    <div class="container flex items-center justify-between">
      <!-- Logo (izquierda) -->
      <a href="/" class="logo"> <span>Ω</span> Archivum Vetitum </a>

      <input type="checkbox" id="nav-toggle" class="nav-toggle" />

      <!-- Menú (escritorio y móvil) -->
      <ul class="nav-menu">
        <li><a href="/" class="nav-link">El Portal</a></li>
        <li><a href="/category" class="nav-link">El Archivo</a></li>
        <li>
          <a href="/gallery" class="nav-link">Galería de Demonios</a>
        </li>
      </ul>

      <!-- Label hamburguesa (solo visible en móvil) -->
      <label for="nav-toggle" class="nav-toggle-label">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </div>
  </nav>

  <!-- HERO -->
  <header class="hero">
    <h1>Ω Archivum Vetitum Ω</h1>
    <h2>Donde convergen las sombras del pensamiento humano</h2>
    <p>
      Un compendio de conocimiento oculto, filosofía esotérica y los misterios
      que la historia prefirió olvidar
    </p>
    <a href="/category" class="cta">Iniciar el Descenso</a>
  </header>

  <h2>Categorías</h2>
  <div class="carousel" mask>
    <article>
      <img src="{{ asset('images/cat_demonologia.png') }}" alt="" />
      <h2>Demonología & Entidades</h2>
      <div>
        <p>72 demonios, jerarquías infernales, grimoires antiguos</p>

        <a href="#">Read more</a>
      </div>
    </article>

    <article>
      <img src="{{ asset('images/cat_religiones.png') }}" />
      <h2>Religiones & Herejías</h2>
      <div>
        <p>Gnosticismo, cátaros, doctrinas prohibidas</p>

        <a href="#">Read more</a>
      </div>
    </article>

    <article>
      <img src="{{ asset('images/cat_sociedades.png') }}" />
      <h2>Sociedades Secretas</h2>
      <div>
        <p>Templarios, masones, Illuminati, Skull & Bones</p>

        <a href="#">Read more</a>
      </div>
    </article>

    <article>
      <img src="{{ asset('images/cat_filosofía.png') }}" alt="easter chick" />
      <h2>Filosofía Oscura</h2>
      <div>
        <p>Nihilismo, existencialismo, filosofía hermética</p>

        <a href="#">Read more</a>
      </div>
    </article>

    <article>
      <img src="{{ asset('images/cat_conspiraciones.png') }}" alt="easter bunny" />
      <h2>Conspiraciones & Control</h2>
      <div>
        <p>MK-Ultra, Nuevo Orden Mundial, manipulación masiva</p>

        <a href="#">Read more</a>
      </div>
    </article>

    <article>
      <img src="{{ asset('images/cat_ocultismo.png') }}" alt="crown of thorms" />
      <h2>Ocultismo & Magia</h2>
      <div>
        <p>Alquimia, tarot, cábala, rituales ceremoniales</p>

        <a href="#">Read more</a>
      </div>
    </article>
  </div>

  <section class="featured-articles">
    <h2>Artículos Destacados</h2>
    <div class="article-grid">
      <div class="article-card">
        <img src="{{ asset('images/pop_bael.webp') }}" alt="Sello de Bael" />
        <!-- Placeholder -->
        <span class="tag">Demonología</span>
        <h3>La Ars Goetia: Los 72 Demonios de Salomón</h3>
        <p>
          El grimoire medieval que detalla las 72 entidades que Salomón
          supuestamente controló...
        </p>
        <a href="/gallery" class="btn">Explorar</a>
      </div>
      <div class="article-card">
        <img src="{{ asset('images/pop_ojo.jpg') }}" alt="Ojo de Horus/Providencia" />
        <span class="tag">Sociedades Secretas</span>
        <h3>
          El Ojo que Todo lo Ve: Del Antiguo Egipto a tu billete de dólar
        </h3>
        <p>Un símbolo que atraviesa 5,000 años de historia oculta...</p>
        <a href="#" class="btn">Explorar</a>
      </div>
      <div class="article-card">
        <img src="{{ asset('images/pop_gnosticismo.jpg') }}" alt="Ouroboros" />
        <span class="tag">Religiones & Herejías</span>
        <h3>Gnosticismo: La Religión que el Cristianismo Enterró</h3>
        <p>
          Los textos de Nag Hammadi revelaron una cosmología donde el creador
          es el villano...
        </p>
        <a href="#" class="btn">Explorar</a>
      </div>
    </div>
  </section>

  <footer class="footer-full">
    <div class="container">
      <div class="footer-content">
        <h3 class="footer-title">Únete al Círculo Interno</h3>

        <form class="footer-form">
          <div class="form-grid">
            <div class="form-col">
              <input
                type="text"
                placeholder="Nombre"
                required
                class="input-field" />
              <input
                type="email"
                placeholder="Correo"
                required
                class="input-field" />
              <input
                type="password"
                placeholder="Contraseña"
                required
                class="input-field" />
            </div>

            <div class="form-col">
              <textarea
                placeholder="Aporte: artículo, opinión, teoría conspirativa, etc."
                rows="5"
                required
                class="textarea-field"></textarea>
            </div>
          </div>

          <button type="submit" class="submit-btn">
            <span>Inscribir en el Grimorio</span>
            <div class="btn-glow"></div>
          </button>
        </form>

        <p class="footer-quote">Atrévete a Saber</p>
      </div>
    </div>
  </footer>
</body>

</html>