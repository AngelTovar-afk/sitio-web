<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Demonología & Entidades - Ω Archivum Vetitum Ω</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Georgia&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/category_style.css') }}" />
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar">
    <div class="container flex items-center justify-between">
      <!-- Logo (izquierda) -->
      <a href="/" class="logo"> <span>Ω</span> Archivum Vetitum </a>

      <!-- Checkbox (oculto, controla el menú) -->
      <input type="checkbox" id="nav-toggle" class="nav-toggle" />

      <!-- Menú (escritorio y móvil) -->
      <ul class="nav-menu">
        <li><a href="/" class="nav-link">El Portal</a></li>
        <li><a href="/compendio" class="nav-link">El Archivo</a></li>
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

  <!-- HERO DE CATEGORÍA -->
  <section class="category-hero">
    <div class="container">
      <h1>Demonología & Entidades</h1>
      <p>72 demonios, jerarquías infernales, grimoires antiguos</p>
    </div>
  </section>

  <!-- ARTÍCULOS EN MASONRY -->
  <section class="category-articles" id="articles">
    <div class="container">
      <div class="masonry-grid">
        <!-- ARTÍCULO 1: Imagen izquierda -->
        <article class="masonry-item img-left">
          <div class="masonry-img">
            <img src="{{ asset('images/72_demons.jpeg') }}" alt="Sello de Bael" />
          </div>
          <div class="masonry-content">
            <h3>La Ars Goetia: Los 72 Demonios de Salomón</h3>
            <p>
              El grimoire medieval que detalla las 72 entidades que Salomón
              supuestamente controló. Descubre los sellos, rangos y rituales
              de invocación.
            </p>
            <a href="#" class="btn-outline">Learn More</a>
          </div>
        </article>

        <!-- ARTÍCULO 2: Imagen derecha -->
        <article class="masonry-item img-right">
          <div class="masonry-content">
            <h3>Lilith: La Primera Mujer Antes de Eva</h3>
            <p>
              De diosa sumeria a demonio de la noche. Su rebelión contra Adán
              y su transformación en madre de súcubos e íncubos.
            </p>
            <a href="#" class="btn-outline">Learn More</a>
          </div>
          <div class="masonry-img">
            <img src="{{ asset('images/lilith.jpg') }}" alt="Lilith" />
          </div>
        </article>

        <!-- ARTÍCULO 3: Imagen izquierda -->
        <article class="masonry-item img-left">
          <div class="masonry-img">
            <img src="{{ asset('images/Baphomet.webp') }}" alt="Baphomet" />
          </div>
          <div class="masonry-content">
            <h3>Baphomet: Historia de un Símbolo Malinterpretado</h3>
            <p>
              De ídolo templario a icono satánico moderno. La verdad detrás
              del "Sabbatic Goat" y su significado esotérico.
            </p>
            <a href="#" class="btn-outline">Learn More</a>
          </div>
        </article>

        <article class="masonry-item img-right">
          <div class="masonry-content">
            <h3>Jerarquías Infernales según la Demonología Cristiana</h3>
            <p>
              De Lucifer a los príncipes del infierno: la estructura del
              averno según grimoires medievales.
            </p>
            <a href="#" class="btn-outline">Learn More</a>
          </div>
          <div class="masonry-img">
            <img src="{{ asset('images/jerarquias.jpg') }}" alt="Jerarquía" />
          </div>
        </article>
      </div>
    </div>
  </section>
</body>

</html>