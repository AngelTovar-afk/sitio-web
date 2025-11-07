<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Galería 3D de los 72 Demonios - Ω Archivum Vetitum Ω</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/gallery_style.css') }}" />
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

      <label for="nav-toggle" class="nav-toggle-label">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </div>
  </nav>

  <h1 class="gallery-title">Galería 3D de los 72 Demonios</h1>

  <!-- CARRUSEL 3D -->
  <div class="carousel-container">
    <div id="carousel">
      <figure>
        <img src="{{ asset('images/Baal.webp') }}" alt="Bael - Rey del Este" />
      </figure>
      <figure>
        <img src="{{ asset('images/demon-agares.webp') }}" alt="Agares" />
      </figure>
      <figure>
        <img src="{{ asset('images/vassago.jpg') }}" alt="Vassago" />
      </figure>
      <figure>
        <img src="{{ asset('images/Samigina.webp') }}" alt="Gamigin" />
      </figure>
      <figure>
        <img src="{{ asset('images/marbas.jpg') }}" alt="Marbas" />
      </figure>
      <figure>
        <img src="{{ asset('images/Valefor.webp') }}" alt="Valefor" />
      </figure>
      <figure>
        <img src="{{ asset('images/amon.webp') }}" alt="Amon" />
      </figure>
      <figure>
        <img src="{{ asset('images/barbatos.jpg') }}" alt="Barbatos" />
      </figure>
      <figure>
        <img src="{{ asset('images/paimon.jpg') }}" alt="Paimon" />
      </figure>
      <figure>
        <img src="{{ asset('images/Andromalius.jpg') }}" alt="Andromalius" />
      </figure>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="gallery-footer">
    <p>Atrévete a Saber</p>
  </footer>
</body>

</html>