<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Recording Sessions | Bathra Groups</title>

  <meta
    name="description"
    content="Watch Bathra Groups training recording sessions and practical learning videos."
  >

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet"
  >

</head>


<body>


<!-- HEADER -->

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

      <a href="{{ url('/') }}">
        Home
      </a>

      <a href="{{ url('/#about') }}">
        About Us
      </a>

      <a href="{{ url('/#classes') }}">
        Our Classes
      </a>

      <a href="{{ url('/#upcoming') }}">
        Upcoming Training
      </a>

      <a href="{{ url('/#register') }}">
        Register
      </a>

      <a href="{{ route('gallery') }}">
        Gallery
      </a>

      <a class="active" href="{{ route('recordings') }}">
        Recordings
      </a>

      <a href="{{ url('/#contact') }}">
        Contact
      </a>


      <!-- WHATSAPP -->

      <a
        class="nav-whatsapp"
        href="https://wa.me/91{{ $contact->whatsapp ?? '' }}"
        target="_blank"
      >

        <svg
          class="whatsapp-icon"
          viewBox="0 0 32 32"
          aria-hidden="true"
        >

          <path
            fill="currentColor"
            d="M19.11 17.39c-.29-.15-1.71-.84-1.98-.94-.27-.1-.46-.15-.66.15-.19.29-.75.94-.92 1.13-.17.19-.34.22-.63.07-.29-.15-1.22-.45-2.32-1.43-.86-.77-1.44-1.71-1.61-2-.17-.29-.02-.45.13-.6.13-.13.29-.34.44-.51.15-.17.19-.29.29-.49.1-.19.05-.37-.02-.51-.07-.15-.66-1.59-.9-2.18-.24-.57-.48-.49-.66-.5h-.56c-.19 0-.49.07-.75.37-.26.29-1 1-1 2.44s1.03 2.83 1.17 3.02c.15.19 2.03 3.1 4.92 4.35.69.3 1.23.48 1.65.61.69.22 1.32.19 1.81.12.55-.08 1.71-.7 1.95-1.37.24-.68.24-1.26.17-1.38-.07-.12-.26-.19-.55-.34z"
          />

          <path
            fill="currentColor"
            d="M16.03 3C8.84 3 3 8.84 3 16.03c0 2.3.6 4.46 1.65 6.34L3 29l6.83-1.59a12.96 12.96 0 0 0 6.2 1.58h.01C23.2 29 29 23.16 29 16.03 29 8.84 23.2 3 16.03 3zm0 23.74c-2.05 0-4.05-.55-5.8-1.59l-.41-.24-4.05.94.97-3.95-.27-.41a10.78 10.78 0 0 1-1.65-5.75c0-5.97 4.87-10.82 10.86-10.82 2.9 0 5.62 1.13 7.67 3.18a10.72 10.72 0 0 1 3.17 7.66c0 5.99-4.86 10.98-10.49 10.98z"
          />

        </svg>

        Join via WhatsApp

      </a>

    </nav>

  </div>

</header>



<main>


<!-- RECORDING HERO / INTRO -->

<section class="section recording-page">

  <div class="container">


    <div class="section-heading">

      <span class="small-label">
        RECORDING SESSIONS
      </span>

      <h1>
        Training Recordings
      </h1>

      <p>
        Watch our recorded training sessions and learn practical skills
        from anywhere, anytime.
      </p>

    </div>



    @if($recordings->count())


      <div class="recordings-grid">


        @foreach($recordings as $recording)


          <article class="recording-card">


            <!-- VIDEO -->

            <div class="recording-video">

  @php
      $youtubeUrl = $recording->video;

      if (str_contains($youtubeUrl, 'youtu.be/')) {
          $videoId = explode('?', explode('youtu.be/', $youtubeUrl)[1])[0];
      } elseif (str_contains($youtubeUrl, 'youtube.com/watch?v=')) {
          $videoId = explode('&', explode('v=', $youtubeUrl)[1])[0];
      } else {
          $videoId = '';
      }
  @endphp

  @if($videoId)

    <iframe
      src="https://www.youtube.com/embed/{{ $videoId }}"
      title="{{ $recording->title }}"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen
    ></iframe>

  @else

    <div style="height:100%; display:flex; align-items:center; justify-content:center; color:white;">
      Invalid YouTube video
    </div>

  @endif

</div>


            <!-- CONTENT -->

            <div class="recording-content">

              <h2>
                {{ $recording->title }}
              </h2>


              @if($recording->description)

                <p>
                  {{ $recording->description }}
                </p>

              @endif

            </div>


          </article>


        @endforeach


      </div>


    @else


      <!-- EMPTY -->

      <div class="recordings-empty">

        <div class="empty-icon">
          ▶
        </div>

        <h2>
          Recording Sessions Coming Soon
        </h2>

        <p>
          Our training recordings will be available here soon.
        </p>

      </div>


    @endif


  </div>

</section>



</main>



<!-- FOOTER -->

<footer id="contact">

  <div class="container footer-grid">


    <!-- BRAND -->

    <div class="footer-brand">

      <img
        src="{{ asset('assets/images/logo.png') }}"
        alt="Bathra Groups"
      >

    </div>



    <!-- QUICK LINKS -->

    <div>

      <h4>
        Quick Links
      </h4>

      <a href="{{ url('/') }}">
        Home
      </a>

      <a href="{{ url('/#about') }}">
        About Us
      </a>

      <a href="{{ url('/#classes') }}">
        Our Classes
      </a>

      <a href="{{ route('gallery') }}">
        Gallery
      </a>

      <a href="{{ route('recordings') }}">
        Recordings
      </a>

      <a href="{{ url('/#contact') }}">
        Contact
      </a>

    </div>



    <!-- CONTACT -->

    <div>

      <h4>
        Get In Touch
      </h4>

      <p>
        📞 {{ $contact->phone ?? '' }}
      </p>

      <p>
        GPay:
        <strong>
          {{ $contact->gpay ?? '' }}
        </strong>
      </p>

    </div>



    <!-- SOCIAL -->

    <div>

      <h4>
        Follow Us
      </h4>


      <div class="socials">


        <!-- FACEBOOK -->

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



        <!-- YOUTUBE -->

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



        <!-- INSTAGRAM -->

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

<!-- FLOATING WHATSAPP -->

<a
  class="floating-whatsapp"
  href="https://wa.me/91{{ $contact->whatsapp ?? '' }}"
  target="_blank"
  aria-label="WhatsApp"
>

  <svg
    class="whatsapp-icon"
    viewBox="0 0 32 32"
    aria-hidden="true"
  >

    <path
      fill="currentColor"
      d="M19.11 17.39c-.29-.15-1.71-.84-1.98-.94-.27-.1-.46-.15-.66.15-.19.29-.75.94-.92 1.13-.17.19-.34.22-.63.07-.29-.15-1.22-.45-2.32-1.43-.86-.77-1.44-1.71-1.61-2-.17-.29-.02-.45.13-.6.13-.13.29-.34.44-.51.15-.17.19-.29.29-.49.1-.19.05-.37-.02-.51-.07-.15-.66-1.59-.9-2.18-.24-.57-.48-.49-.66-.5h-.56c-.19 0-.49.07-.75.37-.26.29-1 1-1 2.44s1.03 2.83 1.17 3.02c.15.19 2.03 3.1 4.92 4.35.69.3 1.23.48 1.65.61.69.22 1.32.19 1.81.12.55-.08 1.71-.7 1.95-1.37.24-.68.24-1.26.17-1.38-.07-.12-.26-.19-.55-.34z"
    />

    <path
      fill="currentColor"
      d="M16.03 3C8.84 3 3 8.84 3 16.03c0 2.3.6 4.46 1.65 6.34L3 29l6.83-1.59a12.96 12.96 0 0 0 6.2 1.58h.01C23.2 29 29 23.16 29 16.03 29 8.84 23.2 3 16.03 3zm0 23.74c-2.05 0-4.05-.55-5.8-1.59l-.41-.24-4.05.94.97-3.95-.27-.41a10.78 10.78 0 0 1-1.65-5.75c0-5.97 4.87-10.82 10.86-10.82 2.9 0 5.62 1.13 7.67 3.18a10.72 10.72 0 0 1 3.17 7.66c0 5.99-4.86 10.98-10.49 10.98z"
    />

  </svg>

</a>



<script>

function toggleMenu() {

  document
    .getElementById("mainNav")
    .classList
    .toggle("show");

}


document
  .querySelectorAll("#mainNav a")
  .forEach(a => {

    a.addEventListener("click", () => {

      document
        .getElementById("mainNav")
        .classList
        .remove("show");

    });

  });

</script>


</body>

</html>