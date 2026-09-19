<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bathra Groups | Online Training</title>
  <meta name="description" content="Bathra Groups OPC. PVT. LTD - Online practical training, food training and business guidance.">
  <meta property="og:title" content="Bathra Groups | Online Training">
  <meta property="og:description" content="Practical online training in idli/dosa batter making, Kushboo idli and business marketing — live on Zoom.">
  <meta property="og:image" content="assets/images/hero1.jpg">
  <meta property="og:type" content="website">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>

<header class="site-header">
  <div class="container nav-wrap">
    <a href="#home" class="logo">
      <img src="{{ asset('assets/images/logo.png') }}" alt="Bathra Groups OPC PVT LTD">
    </a>

    <button class="menu-toggle" aria-label="Open menu" onclick="toggleMenu()">☰</button>

    <nav id="mainNav">
      <a class="active" href="#home">Home</a>
      <a href="#about">About Us</a>
      <a href="#classes">Our Classes</a>
      <a href="#upcoming">Upcoming Training</a>
      <a href="#register">Register</a>
      <a href="#gallery">Gallery</a>
      <a href="#contact">Contact</a>
<a class="nav-whatsapp"
   href="https://wa.me/91{{ $contact->whatsapp ?? '' }}"
   target="_blank">

  <svg class="whatsapp-icon" viewBox="0 0 32 32" aria-hidden="true">
    <path fill="currentColor" d="M19.11 17.39c-.29-.15-1.71-.84-1.98-.94-.27-.1-.46-.15-.66.15-.19.29-.75.94-.92 1.13-.17.19-.34.22-.63.07-.29-.15-1.22-.45-2.32-1.43-.86-.77-1.44-1.71-1.61-2-.17-.29-.02-.45.13-.6.13-.13.29-.34.44-.51.15-.17.19-.29.29-.49.1-.19.05-.37-.02-.51-.07-.15-.66-1.59-.9-2.18-.24-.57-.48-.49-.66-.5h-.56c-.19 0-.49.07-.75.37-.26.29-1 1-1 2.44s1.03 2.83 1.17 3.02c.15.19 2.03 3.1 4.92 4.35.69.3 1.23.48 1.65.61.69.22 1.32.19 1.81.12.55-.08 1.71-.7 1.95-1.37.24-.68.24-1.26.17-1.38-.07-.12-.26-.19-.55-.34z"/>
    <path fill="currentColor" d="M16.03 3C8.84 3 3 8.84 3 16.03c0 2.3.6 4.46 1.65 6.34L3 29l6.83-1.59a12.96 12.96 0 0 0 6.2 1.58h.01C23.2 29 29 23.16 29 16.03 29 8.84 23.2 3 16.03 3zm0 23.74c-2.05 0-4.05-.55-5.8-1.59l-.41-.24-4.05.94.97-3.95-.27-.41a10.78 10.78 0 0 1-1.65-5.75c0-5.97 4.87-10.82 10.86-10.82 2.9 0 5.62 1.13 7.67 3.18a10.72 10.72 0 0 1 3.17 7.66c0 5.99-4.86 10.98-10.49 10.98z"/>
  </svg>

  Join via WhatsApp
</a>
    </nav>
  </div>
</header>

<main>

<!-- HERO -->
<section class="hero" id="home">
  <div class="hero-overlay"></div>

  <div class="container hero-content">
    <div class="hero-copy">

      <div class="hero-buttons">
        <a href="#classes" class="btn btn-orange">
          View Classes →
        </a>

<a href="https://wa.me/91{{ $contact->whatsapp ?? '' }}"
   target="_blank"
   class="btn btn-green">

  <svg class="whatsapp-icon" viewBox="0 0 32 32" aria-hidden="true">
    <path fill="currentColor" d="M19.11 17.39c-.29-.15-1.71-.84-1.98-.94-.27-.1-.46-.15-.66.15-.19.29-.75.94-.92 1.13-.17.19-.34.22-.63.07-.29-.15-1.22-.45-2.32-1.43-.86-.77-1.44-1.71-1.61-2-.17-.29-.02-.45.13-.6.13-.13.29-.34.44-.51.15-.17.19-.29.29-.49.1-.19.05-.37-.02-.51-.07-.15-.66-1.59-.9-2.18-.24-.57-.48-.49-.66-.5h-.56c-.19 0-.49.07-.75.37-.26.29-1 1-1 2.44s1.03 2.83 1.17 3.02c.15.19 2.03 3.1 4.92 4.35.69.3 1.23.48 1.65.61.69.22 1.32.19 1.81.12.55-.08 1.71-.7 1.95-1.37.24-.68.24-1.26.17-1.38-.07-.12-.26-.19-.55-.34z"/>
    <path fill="currentColor" d="M16.03 3C8.84 3 3 8.84 3 16.03c0 2.3.6 4.46 1.65 6.34L3 29l6.83-1.59a12.96 12.96 0 0 0 6.2 1.58h.01C23.2 29 29 23.16 29 16.03 29 8.84 23.2 3 16.03 3zm0 23.74c-2.05 0-4.05-.55-5.8-1.59l-.41-.24-4.05.94.97-3.95-.27-.41a10.78 10.78 0 0 1-1.65-5.75c0-5.97 4.87-10.82 10.86-10.82 2.9 0 5.62 1.13 7.67 3.18a10.72 10.72 0 0 1 3.17 7.66c0 5.99-4.86 10.98-10.49 10.98z"/>
  </svg>

  Join via WhatsApp
</a>

      </div>

    </div>
  </div>
</section>

<!-- CLASSES -->
<section class="section classes-section" id="classes">
  <div class="container">
    <div class="section-heading">
      <h2>Our Training Programs</h2>
      <p>Choose your course and start your learning journey today!</p>
    </div>

    <div class="class-grid">

@foreach($courses as $course)

    <article class="class-card">

        <div class="card-image">
            <img
                src="{{ asset('uploads/courses/' . $course->image) }}"
                alt="{{ $course->title }}"
                loading="lazy"
            >
        </div>

        <div class="card-content">

            <h3>{{ $course->title }}</h3>

            @if($course->features)
                <ul>
                    @foreach(explode("\n", $course->features) as $feature)
                        @if(trim($feature))
                            <li>{{ trim($feature) }}</li>
                        @endif
                    @endforeach
                </ul>
            @endif

            @if($course->price)
                <div class="single-price">
                    ₹{{ number_format($course->price, 0) }}/-
                </div>
            @endif

            <a
                class="class-whatsapp go-register"
                href="#register"
                data-course="{{ $course->title }} (₹{{ number_format($course->price, 0) }})"
            >
                <span class="register-icon">✓</span>
                <span>Register Now</span>
            </a>

        </div>

    </article>

@endforeach

    </div>
  </div>
</section>

<!-- UPCOMING -->
<section class="upcoming section" id="upcoming">
  <div class="container">
    <div class="section-heading">
      <h2>Upcoming Training</h2>
    </div>

    <div class="upcoming-card">
      
     @if($upcoming && $upcoming->image)
    <img
        src="{{ asset('uploads/upcoming/' . $upcoming->image) }}"
    >
@endif
      <div class="upcoming-info">
@if($upcoming)
    <h2>{{ $upcoming->title }}</h2>
    <p>{{ $upcoming->description }}</p>
@endif
      </div>
      <div class="upcoming-price">
        @if($upcoming && $upcoming->price)
    <strong>₹{{ number_format($upcoming->price, 0) }}/-</strong>
@endif
        <span>Today Registration</span>
       <a href="#register"
   class="class-whatsapp go-register"
   data-course="{{ $upcoming->title ?? 'Upcoming Training' }}">
  <span class="register-icon">✓</span>
  <span>Register Now</span>
</a>
      </div>
    </div>
  </div>
</section>

<!-- REGISTER -->
<section class="section register" id="register">
  <div class="container">
    <div class="section-heading">
      <span class="small-label">REGISTER NOW</span>
      <h2>Book Your Seat</h2>
      <p>Fill your details below — we'll get your registration on WhatsApp instantly.</p>
    </div>

    <div class="register-box">
      <form id="registerForm" class="register-form">
        <div class="field">
          <label for="regName">Full Name</label>
          <input type="text" id="regName" name="name" placeholder="Enter your name" required>
        </div>

        <div class="field">
          <label for="regPhone">WhatsApp Number</label>
          <input type="tel" id="regPhone" name="phone" placeholder="10-digit mobile number" pattern="[0-9]{10}" required>
        </div>

        <div class="field">
          <label for="regCourse">Select Course</label>
          <select id="regCourse" name="course" required>
            <option value="" disabled selected>Choose a course</option>
           @foreach($courses as $course)
    <option value="{{ $course->title }} (₹{{ number_format($course->price, 0) }})">
        {{ $course->title }}
    </option>
@endforeach
          </select>
        </div>

        <div class="field">
          <label for="regCity">City / Town</label>
          <input type="text" id="regCity" name="city" placeholder="Your city">
        </div>

        <div class="field field-full">
          <label for="regMessage">Message (optional)</label>
          <textarea id="regMessage" name="message" rows="3" placeholder="Any question before you join?"></textarea>
        </div>

        <button type="submit" class="btn btn-green field-full">
  <svg class="whatsapp-icon" viewBox="0 0 32 32" aria-hidden="true">
    <path fill="currentColor" d="M19.11 17.39c-.29-.15-1.71-.84-1.98-.94-.27-.1-.46-.15-.66.15-.19.29-.75.94-.92 1.13-.17.19-.34.22-.63.07-.29-.15-1.22-.45-2.32-1.43-.86-.77-1.44-1.71-1.61-2-.17-.29-.02-.45.13-.6.13-.13.29-.34.44-.51.15-.17.19-.29.29-.49.1-.19.05-.37-.02-.51-.07-.15-.66-1.59-.9-2.18-.24-.57-.48-.49-.66-.5h-.56c-.19 0-.49.07-.75.37-.26.29-1 1-1 2.44s1.03 2.83 1.17 3.02c.15.19 2.03 3.1 4.92 4.35.69.3 1.23.48 1.65.61.69.22 1.32.19 1.81.12.55-.08 1.71-.7 1.95-1.37.24-.68.24-1.26.17-1.38-.07-.12-.26-.19-.55-.34z"/>
    <path fill="currentColor" d="M16.03 3C8.84 3 3 8.84 3 16.03c0 2.3.6 4.46 1.65 6.34L3 29l6.83-1.59a12.96 12.96 0 0 0 6.2 1.58h.01C23.2 29 29 23.16 29 16.03 29 8.84 23.2 3 16.03 3zm0 23.74c-2.05 0-4.05-.55-5.8-1.59l-.41-.24-4.05.94.97-3.95-.27-.41a10.78 10.78 0 0 1-1.65-5.75c0-5.97 4.87-10.82 10.86-10.82 2.9 0 5.62 1.13 7.67 3.18a10.72 10.72 0 0 1 3.17 7.66c0 5.99-4.86 10.98-10.49 10.98z"/>
  </svg>

  Send Details on WhatsApp
</button>
      </form>
    </div>
  </div>
</section>

<!-- BENEFITS -->
<section class="benefits">
  <div class="container benefits-inner">

    <div class="benefit-intro">
      <h2>What You Get</h2>
      <p>Everything you need to learn, practice and grow.</p>
    </div>

    @foreach($benefits as $benefit)
      <div class="benefit">
        <span>{{ $benefit->icon }}</span>

        <h3>{{ $benefit->title }}</h3>

        <p>{{ $benefit->description }}</p>
      </div>
    @endforeach

  </div>
</section>

<!-- ABOUT -->
<section class="section about" id="about">
  <div class="container about-grid">
    <div>
      <span class="small-label">ABOUT US</span>
      @if($about)
    <h2>{{ $about->title }}</h2>
@endif
      @if($about)
    <p>{{ $about->description }}</p>
@endif
      <a href="#classes" class="btn btn-dark">Explore Classes →</a>
    </div>
    <div class="about-image">


@if($about && $about->image)

    <img
       src="{{ asset('uploads/about/' . $about->image) }}"
    >

@endif
    </div>
    <div class="about-tag">Real Training<br><strong>Real Skills</strong><br><em>Real Growth</em></div>
  </div>
</section>

<!-- GALLERY -->
<section class="section gallery" id="gallery">
  <div class="container">
    <div class="section-heading gallery-heading">
      <div>
        <h2>Gallery</h2>
        <p>Moments from our training sessions and food preparation.</p>
      </div>
      <a href="{{ route('gallery') }}">View All →</a>
    </div>
    <div class="gallery-grid">
      
@foreach($galleries as $gallery)
    <img 
        src="{{ asset('uploads/gallery/' . $gallery->image) }}" 
        alt="{{ $gallery->title ?? 'Bathra Groups Gallery' }}" 
        loading="lazy"
    >
@endforeach
    </div>
  </div>
</section>


<!-- RECORDING SESSIONS -->
<section class="section recording-preview">
  <div class="container">

    <div class="section-heading gallery-heading">
      <div>
        <span class="small-label">RECORDINGS</span>
        <h2>Recording Sessions</h2>
        <p>Watch our training sessions and learn from our practical classes.</p>
      </div>

      <a href="{{ route('recordings') }}">View All →</a>
    </div>

    <div class="recordings-grid">

      @forelse($recordings as $recording)

        <article class="recording-card">

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

          <div class="recording-content">

            <h3>{{ $recording->title }}</h3>

            @if($recording->description)
              <p>{{ $recording->description }}</p>
            @endif

          </div>

        </article>

      @empty

        <div class="recordings-empty">
          <p>No recording sessions available yet.</p>
        </div>

      @endforelse

    </div>

  </div>
</section>

<!-- TESTIMONIALS -->
<section class="section testimonials">
  <div class="container">
    <div class="section-heading">
      <h2>What Our Learners Say</h2>
      <p>Real feedback from our happy students.</p>
    </div>
   <div class="testimonial-grid">

    @foreach($reviews as $review)

        <div class="testimonial">

            <div class="avatar">

                @if($review->image)
                    <img
                        src="{{ asset('uploads/reviews/' . $review->image) }}"
                        alt="{{ $review->name }}"
                    >
                @else
                    {{ strtoupper(substr($review->name, 0, 1)) }}
                @endif

            </div>

            <div>

                <div class="stars">
                    {{ str_repeat('★', $review->rating) }}
                </div>

                <p>{{ $review->review }}</p>

                <small>— {{ $review->name }}</small>

            </div>

        </div>

    @endforeach

</div>
  </div>
</section>

<!-- FAQ -->
<section class="section faq">
  <div class="container">
    <div class="section-heading">
      <span class="small-label">FAQ</span>
      <h2>Common Questions</h2>
    </div>

   <div class="faq-list">

  @foreach($faqs as $faq)

    <div class="faq-item">

      <button class="faq-q">
        {{ $faq->question }}
        <span>+</span>
      </button>

      <div class="faq-a">
        <p>{{ $faq->answer }}</p>
      </div>

    </div>

  @endforeach

</div>
  </div>
</section>

</main>

<!-- FOOTER -->
<footer id="contact">
  <div class="container footer-grid">
    <div class="footer-brand">
      <img src="{{ asset('assets/images/logo.png') }}" alt="Bathra Groups">
    </div>
    <div>
      <h4>Quick Links</h4>
      <a href="#home">Home</a>
      <a href="#about">About Us</a>
      <a href="#classes">Our Classes</a>
      <a href="#gallery">Gallery</a>
      <a href="#contact">Contact</a>
    </div>
    <div>
    <h4>Get In Touch</h4>

<p>📞 {{ $contact->phone ?? '' }}</p>

<p>
  GPay: <strong>{{ $contact->gpay ?? '' }}</strong>
</p>
    </div>
   <div>
  <h4>Follow Us</h4>

  <div class="socials">

    <!-- Facebook -->
    <a href="{{ $contact->facebook ?? '#' }}"
   target="_blank"
   aria-label="Facebook">
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path fill="currentColor"
          d="M14 8h3V4h-3c-3.31 0-5 1.69-5 5v3H6v4h3v8h4v-8h3.5l.5-4H13V9c0-.67.33-1 1-1z"/>
      </svg>
    </a>

    <!-- YouTube -->
    <a href="{{ $contact->youtube ?? '#' }}"
   target="_blank"
   aria-label="YouTube">
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path fill="currentColor"
          d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 0 0 .5 6.2 31 31 0 0 0 0 12a31 31 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 0 0 2.1-2.1A31 31 0 0 0 24 12a31 31 0 0 0-.5-5.8zM9.6 15.5v-7l6.2 3.5-6.2 3.5z"/>
      </svg>
    </a>

    <!-- Instagram -->
    <a href="{{ $contact->instagram ?? '#' }}"
   target="_blank"
   aria-label="Instagram">
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <rect x="3" y="3" width="18" height="18" rx="5"
          fill="none" stroke="currentColor" stroke-width="2"/>
        <circle cx="12" cy="12" r="4"
          fill="none" stroke="currentColor" stroke-width="2"/>
        <circle cx="17.5" cy="6.5" r="1.2" fill="currentColor"/>
      </svg>
    </a>

  </div>
</div>
  </div>
  <div class="copyright">© 2026 Bathra Groups OPC. PVT. LTD. All Rights Reserved.</div>
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

<a class="floating-whatsapp"
   href="https://wa.me/91{{ $contact->whatsapp ?? '' }}"
   target="_blank"
   aria-label="WhatsApp">

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
  a.addEventListener("click", () => document.getElementById("mainNav").classList.remove("show"));
});

/* Course CTA -> pre-fill and jump to the registration form */
const regCourseField = document.getElementById("regCourse");
document.querySelectorAll(".go-register").forEach(btn => {
  btn.addEventListener("click", (e) => {
    e.preventDefault();
    const course = btn.getAttribute("data-course");
    if (course && regCourseField) {
      regCourseField.value = course;
    }
    document.getElementById("register").scrollIntoView({ behavior: "smooth" });
    setTimeout(() => document.getElementById("regName")?.focus(), 500);
  });
});

/* Registration form -> WhatsApp */
const registerForm = document.getElementById("registerForm");
registerForm?.addEventListener("submit", (e) => {
  e.preventDefault();
  const name = document.getElementById("regName").value.trim();
  const phone = document.getElementById("regPhone").value.trim();
  const course = document.getElementById("regCourse").value;
  const city = document.getElementById("regCity").value.trim();
  const message = document.getElementById("regMessage").value.trim();

let text = `🌟 *BATHRA GROUPS* 🌟

👋 Hello Bathra Groups!

🎓 *I would like to register for your training program.*

━━━━━━━━━━━━━━━━━━
👤 *Name:* ${name}
📱 *WhatsApp Number:* ${phone}
📚 *Course:* ${course}${city ? `\n📍 *City / Town:* ${city}` : ""}${message ? `\n💬 *Message:* ${message}` : ""}
━━━━━━━━━━━━━━━━━━

✅ Please share the payment details and confirm my seat.

🙏 Thank you, Bathra Groups! 🌸`;

  const url = `https://wa.me/91{{ $contact->whatsapp ?? '' }}?text=${encodeURIComponent(text)}`;
  window.open(url, "_blank");
});

/* FAQ accordion */
document.querySelectorAll(".faq-q").forEach(q => {
  q.addEventListener("click", () => {
    const item = q.closest(".faq-item");
    document.querySelectorAll(".faq-item").forEach(i => {
      if (i !== item) i.classList.remove("open");
    });
    item.classList.toggle("open");
  });
});

/* Scrollspy: highlight the current section in nav */
const sections = document.querySelectorAll("main section[id], header + main section[id]");
const navLinks = document.querySelectorAll('#mainNav a[href^="#"]');
const spySections = ["home","about","classes","upcoming","register","gallery"]
  .map(id => document.getElementById(id)).filter(Boolean);

window.addEventListener("scroll", () => {
  let current = spySections[0]?.id;
  spySections.forEach(sec => {
    if (window.scrollY >= sec.offsetTop - 90) current = sec.id;
  });
  navLinks.forEach(a => {
    a.classList.toggle("active", a.getAttribute("href") === `#${current}`);
  });
}, { passive: true });
</script>

</body>
</html>
