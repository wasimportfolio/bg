<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Gallery | Bathra Groups</title>
  <meta name="description" content="Explore moments from Bathra Groups training sessions and events.">

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

  <style>
    /* =========================
       GALLERY PAGE
    ========================= */

    .gallery-page {
      padding: 120px 0 80px;
      background: #f8fafc;
      min-height: 70vh;
    }

    .gallery-page-header {
      text-align: center;
      margin-bottom: 45px;
    }

    .gallery-page-header .small-label {
      display: inline-block;
      margin-bottom: 10px;
    }

    .gallery-page-header h1 {
      margin: 0 0 12px;
      font-size: 42px;
      font-weight: 800;
    }

    .gallery-page-header p {
      margin: 0 auto;
      max-width: 650px;
      color: #64748b;
      line-height: 1.7;
    }

    .gallery-page-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }

    .gallery-page-card {
      background: #fff;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.07);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .gallery-page-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.10);
    }

    .gallery-page-card-image {
      width: 100%;
      height: 280px;
      overflow: hidden;
    }

    .gallery-page-card-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.4s ease;
    }

    .gallery-page-card:hover img {
      transform: scale(1.05);
    }

    .gallery-page-card-content {
      padding: 18px 20px;
    }

    .gallery-page-card-content h3 {
      margin: 0;
      font-size: 18px;
      font-weight: 700;
    }

    .gallery-empty {
      text-align: center;
      padding: 60px 20px;
      background: #fff;
      border-radius: 16px;
      color: #64748b;
    }

    /* =========================
       MOBILE
    ========================= */

    @media (max-width: 900px) {
      .gallery-page-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 600px) {

      .gallery-page {
        padding: 100px 0 60px;
      }

      .gallery-page-header {
        margin-bottom: 30px;
      }

      .gallery-page-header h1 {
        font-size: 32px;
      }

      .gallery-page-grid {
        grid-template-columns: 1fr;
        gap: 18px;
      }

      .gallery-page-card-image {
        height: 240px;
      }

      .gallery-page-card-content {
        padding: 15px 18px;
      }
    }
  </style>
</head>

<body>

<!-- =========================
     HEADER
========================= -->

<header class="site-header">
  <div class="container nav-wrap">

    <a href="{{ url('/') }}" class="logo">
      <img
        src="{{ asset('assets/images/logo.png') }}"
        alt="Bathra Groups OPC PVT LTD"
      >
    </a>

    <button
      class="menu-toggle"
      aria-label="Open menu"
      onclick="toggleMenu()"
    >
      ☰
    </button>

    <nav id="mainNav">

      <a href="{{ url('/') }}">Home</a>

      <a href="{{ url('/#about') }}">About Us</a>

      <a href="{{ url('/#classes') }}">Our Classes</a>

      <a href="{{ url('/#upcoming') }}">Upcoming Training</a>

      <a href="{{ url('/#register') }}">Register</a>

      <a class="active" href="{{ route('gallery') }}">Gallery</a>

      <a href="{{ url('/#contact') }}">Contact</a>

      <a
        class="nav-whatsapp"
        href="https://wa.me/91{{ $contact->whatsapp ?? '' }}"
        target="_blank"
      >

        <svg class="whatsapp-icon" viewBox="0 0 32 32" aria-hidden="true">
          <path fill="currentColor" d="M19.11 17.39c-.29-.15-1.71-.84-1.98-.94-.27-.1-.46-.15-.66.15-.19.29-.75.94-.92 1.13-.17.19-.34.22-.63.07-.29-.15-1.22-.45-2.32-1.43-.86-.77-1.44-1.71-1.61-2-.17-.29-.02-.45.13-.6.13-.13.29-.34.44-.51.15-.17.19-.29.29-.49.1-.19.05-.37-.02-.51-.07-.15-.66-1.59-.9-2.18-.24-.57-.48-.49-.66-.5h-.56c-.19 0-.49.07-.75.37-.26.29-1 1-1 2.44s1.03 2.83 1.17 3.02c.15.19 2.03 3.1 4.92 4.35.69.3 1.23.48 1.65.61.69.22 1.32.19 1.81.12.55-.08 1.71-.7 1.95-1.37.24-.68.24-1.26.17-1.38-.07-.12-.26-.19-.55-.34z"/>
          <path fill="currentColor" d="M16.03 3C8.84 3 3 8.84 3 16.03c0 2.3.6 4.46 1.65 6.34L3 29l6.83-1.59a12.96 12.96 0 0 0 6.2 1.58h.01C23.2 29 29 23.16 29 16.03 29 8.84 23.2 3 16.03 3zm0 23.74c-2.05 0-4.05-.55-5.8-1.59l-.41-.24-4.05.94.97-3.95-.27-.41a10.78 10.78 0 0 1-1.65-5.75c0-5.97 4.87-10.82 10.86-10.82 2.9 0 5.62 1.13 7.67 3.18a10.72 10.72 0 0 1 3.17 7.66c0 5.99-4.86 10.98-10.49 10.98z"/>
        </svg>

        Join via WhatsApp

      </a>

    </nav>
  </div>
</header>


<!-- =========================
     GALLERY
========================= -->

<main>

<section class="gallery-page">

  <div class="container">

    <div class="gallery-page-header">

      <span class="small-label">OUR GALLERY</span>

      <h1>Moments From Bathra Groups</h1>

      <p>
        Explore moments, events and memories from our training sessions
        and practical learning programs.
      </p>

    </div>


    @if($galleries->count())

      <div class="gallery-page-grid">

        @foreach($galleries as $gallery)

          <div class="gallery-page-card">

            <div class="gallery-page-card-image">

              <img
                src="{{ asset('uploads/gallery/' . $gallery->image) }}"
                alt="{{ $gallery->title ?? 'Bathra Groups Gallery' }}"
                loading="lazy"
              >

            </div>

            @if($gallery->title)

              <div class="gallery-page-card-content">

                <h3>
                  {{ $gallery->title }}
                </h3>

              </div>

            @endif

          </div>

        @endforeach

      </div>

    @else

      <div class="gallery-empty">

        <p>
          No gallery images available yet.
        </p>

      </div>

    @endif

  </div>

</section>

</main>


<!-- =========================
     FOOTER
========================= -->

<footer id="contact">

  <div class="container footer-grid">

    <div class="footer-brand">

      <img
        src="{{ asset('assets/images/logo.png') }}"
        alt="Bathra Groups"
      >

    </div>


    <div>

      <h4>Quick Links</h4>

      <a href="{{ url('/') }}">Home</a>

      <a href="{{ url('/#about') }}">About Us</a>

      <a href="{{ url('/#classes') }}">Our Classes</a>

      <a href="{{ route('gallery') }}">Gallery</a>

      <a href="{{ url('/#contact') }}">Contact</a>

    </div>


    <div>

      <h4>Get In Touch</h4>

      <p>
        📞 {{ $contact->phone ?? '' }}
      </p>

      <p>
        GPay:
        <strong>{{ $contact->gpay ?? '' }}</strong>
      </p>

    </div>


    <div>

      <h4>Follow Us</h4>

      <div class="socials">

        <!-- Facebook -->
        <a
          href="{{ $contact->facebook ?? '#' }}"
          target="_blank"
          aria-label="Facebook"
        >
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path
              fill="currentColor"
              d="M14 8h3V4h-3c-3.31 0-5 1.69-5 5v3H6v4h3v8h4v-8h3.5l.5-4H13V9c0-.67.33-1 1-1z"
            />
          </svg>
        </a>


        <!-- YouTube -->
        <a
          href="{{ $contact->youtube ?? '#' }}"
          target="_blank"
          aria-label="YouTube"
        >
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path
              fill="currentColor"
              d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 0 0 .5 6.2 31 31 0 0 0 0 12a31 31 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 0 0 2.1-2.1A31 31 0 0 0 24 12a31 31 0 0 0-.5-5.8zM9.6 15.5v-7l6.2 3.5-6.2 3.5z"
            />
          </svg>
        </a>


        <!-- Instagram -->
        <a
          href="{{ $contact->instagram ?? '#' }}"
          target="_blank"
          aria-label="Instagram"
        >
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <rect
              x="3"
              y="3"
              width="18"
              height="18"
              rx="5"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
            />

            <circle
              cx="12"
              cy="12"
              r="4"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
            />

            <circle
              cx="17.5"
              cy="6.5"
              r="1.2"
              fill="currentColor"
            />
          </svg>
        </a>

      </div>

    </div>

  </div>


  <div class="copyright">
    © 2026 Bathra Groups OPC. PVT. LTD. All Rights Reserved.
  </div>

</footer>

<a class="floating-instagram"
   href="{{ $contact->instagram ?? '#' }}"
   target="_blank"
   aria-label="Instagram">

  <svg viewBox="0 0 24 24" aria-hidden="true">
    <rect x="3" y="3" width="18" height="18" rx="5"
      fill="none"
      stroke="currentColor"
      stroke-width="2"/>

    <circle cx="12" cy="12" r="4"
      fill="none"
      stroke="currentColor"
      stroke-width="2"/>

    <circle cx="17.5" cy="6.5" r="1.2"
      fill="currentColor"/>
  </svg>

</a>

<!-- =========================
     FLOATING WHATSAPP
========================= -->

<a
  class="floating-whatsapp"
  href="https://wa.me/91{{ $contact->whatsapp ?? '' }}"
  target="_blank"
  aria-label="WhatsApp"
>

  <svg class="whatsapp-icon" viewBox="0 0 32 32" aria-hidden="true">

    <path fill="currentColor" d="M19.11 17.39c-.29-.15-1.71-.84-1.98-.94-.27-.1-.46-.15-.66.15-.19.29-.75.94-.92 1.13-.17.19-.34.22-.63.07-.29-.15-1.22-.45-2.32-1.43-.86-.77-1.44-1.71-1.61-2-.17-.29-.02-.45.13-.6.13-.13.29-.34.44-.51.15-.17.19-.29.29-.49.1-.19.05-.37-.02-.51-.07-.15-.66-1.59-.9-2.18-.24-.57-.48-.49-.66-.5h-.56c-.19 0-.49.07-.75.37-.26.29-1 1-1 2.44s1.03 2.83 1.17 3.02c.15.19 2.03 3.1 4.92 4.35.69.3 1.23.48 1.65.61.69.22 1.32.19 1.81.12.55-.08 1.71-.7 1.95-1.37.24-.68.24-1.26.17-1.38-.07-.12-.26-.19-.55-.34z"/>

    <path fill="currentColor" d="M16.03 3C8.84 3 3 8.84 3 16.03c0 2.3.6 4.46 1.65 6.34L3 29l6.83-1.59a12.96 12.96 0 0 0 6.2 1.58h.01C23.2 29 29 23.16 29 16.03 29 8.84 23.2 3 16.03 3zm0 23.74c-2.05 0-4.05-.55-5.8-1.59l-.41-.24-4.05.94.97-3.95-.27-.41a10.78 10.78 0 0 1-1.65-5.75c0-5.97 4.87-10.82 10.86-10.82 2.9 0 5.62 1.13 7.67 3.18a10.72 10.72 0 0 1 3.17 7.66c0 5.99-4.86 10.98-10.49 10.98z"/>

  </svg>

</a>


<script>

function toggleMenu() {
  document.getElementById("mainNav").classList.toggle("show");
}

document.querySelectorAll("#mainNav a").forEach(a => {

  a.addEventListener("click", () => {

    document
      .getElementById("mainNav")
      .classList.remove("show");

  });

});

</script>

</body>
</html>
