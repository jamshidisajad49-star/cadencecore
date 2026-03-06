<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadence Core | Music Technology & Heritage Platform</title>
  <meta name="description" content="Cadence Core provides a premier platform for artists and institutions to manage, preserve, and monetize their musical heritage through advanced digital archives, audio restoration, and sound engineering.">
  <link rel="icon" href="favicon.ico">

  
  <script src="https://cdn.tailwindcss.com?v=3.4.0"></script>
  <style>
    :root {
      --color-primary: #cf2f49;
      --color-primary-light: #db8997;
      --color-primary-dark: #912133;
      --color-secondary: #b66d48;
      --color-accent: #43d4bc;
      --color-surface-base: #f0f0f3;
      --color-surface-text: #2d3748;
      --color-neomorph-shadow-light: #ffffff;
      --color-neomorph-shadow-dark: #d1d1e0;
    }

    body {
      font-family: 'Work Sans', sans-serif;
      color: var(--color-surface-text);
      background-color: var(--color-surface-base);
      line-height: 1.6;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: 'Source Serif 4', serif;
      font-weight: 800;
      color: var(--color-primary-dark);
    }

    .btn-outline {
      border: 2px solid var(--color-primary);
      background: transparent;
      color: var(--color-primary);
      padding: 0.75rem 2rem;
      border-radius: 12px;
      transition: all 0.3s ease;
    }
    .btn-outline:hover {
      background: var(--color-primary);
      color: white;
    }

    .card-custom {
      border: 1px solid var(--color-primary-light);
      background: var(--color-surface-base);
      box-shadow: none;
      border-radius: 12px;
      transition: all 0.3s ease;
    }
    .card-custom:hover {
      box-shadow: 6px 6px 12px var(--color-neomorph-shadow-dark), -6px -6px 12px var(--color-neomorph-shadow-light);
    }

    .icon-circular-outline {
      border: 1px solid var(--color-primary);
      border-radius: 50%;
      fill: none;
      padding: 1rem;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.3s ease;
    }
    .icon-circular-outline svg {
      stroke: var(--color-primary);
      stroke-width: 2;
    }
    .icon-circular-outline:hover {
      transform: scale(1.05); /* Subtle hover effect */
    }

    .neomorph-bg {
      background-color: var(--color-surface-base);
      box-shadow: 6px 6px 12px var(--color-neomorph-shadow-dark), -6px -6px 12px var(--color-neomorph-shadow-light);
      border-radius: 12px;
    }

    /* Scroll animations */
    .fade-in-up {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }
    .fade-in-up.animate {
      opacity: 1;
      transform: translateY(0);
    }

    .image-zoom:hover img {
      transform: scale(1.05);
    }
    .image-zoom img {
      transition: transform 0.3s ease-in-out;
    }

    /* Sticky navigation solid background on scroll */
    .navbar-solid {
      background-color: rgba(var(--color-primary-dark-rgb), 0.95); /* Using a slightly transparent dark primary for effect */
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }
    .navbar-link-solid {
        color: white !important;
    }
    
    /* Neomorphism specific styles for footer - ensure contrast */
    footer.neomorph-bg {
      background-color: #212529; /* Dark background */
      box-shadow: none; /* Remove neomorphic shadow for footer for better contrast */
      color: #ffffff; /* Light text for contrast */
    }
    footer.neomorph-bg a {
      color: var(--color-accent); /* Accent color for links */
    }
    footer.neomorph-bg a:hover {
      color: var(--color-primary-light);
    }

    /* Additional custom styles */
    .section-spacing {
      padding-top: 80px;
      padding-bottom: 80px;
    }
  </style>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YTP08B4056"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YTP08B4056');
</script>

</head>
<body>
  <header class="fixed w-full z-50 transition-all duration-300 py-4" id="navbar">
    <nav class="container mx-auto flex justify-between items-center px-4 sm:px-6 lg:px-8">
      <a href="#" class="text-2xl font-bold text-white transition-colors duration-300" id="brand-text">Cadence Core</a>
      <button class="lg:hidden text-white focus:outline-none" id="mobile-menu-button">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
      </button>
      <div class="hidden lg:flex space-x-8" id="navbar-links">
        <a href="#platform" class="text-white hover:text-gray-200 transition duration-300 nav-link">Platform</a>
        <a href="#features" class="text-white hover:text-gray-200 transition duration-300 nav-link">Features</a>
        <a href="#consultancy" class="text-white hover:text-gray-200 transition duration-300 nav-link">Consultancy</a>
        <a href="#testimonials" class="text-white hover:text-gray-200 transition duration-300 nav-link">Testimonials</a>
        <a href="#contact" class="text-white hover:text-gray-200 transition duration-300 nav-link">Contact</a>
      </div>
    </nav>
    
    <div id="mobile-menu" class="lg:hidden hidden bg-gray-800 bg-opacity-95 py-4 mt-2">
      <div class="flex flex-col items-center space-y-4">
        <a href="#platform" class="text-white hover:text-gray-200 transition duration-300 block py-2 nav-link">Platform</a>
        <a href="#features" class="text-white hover:text-gray-200 transition duration-300 block py-2 nav-link">Features</a>
        <a href="#consultancy" class="text-white hover:text-gray-200 transition duration-300 block py-2 nav-link">Consultancy</a>
        <a href="#testimonials" class="text-white hover:text-gray-200 transition duration-300 block py-2 nav-link">Testimonials</a>
        <a href="#contact" class="text-white hover:text-gray-200 transition duration-300 block py-2 nav-link">Contact</a>
      </div>
    </div>
  </header>
<main>
    
    <section id="hero" class="relative overflow-hidden section-spacing" style="background: linear-gradient(135deg, var(--color-primary), var(--color-secondary));">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between py-20 lg:py-32">
        <div class="lg:w-3/5 text-center lg:text-left mb-10 lg:mb-0 fade-in-up">
          <h1 class="text-5xl lg:text-6xl font-extrabold leading-tight text-white mb-6">Preserve & Monetize Your Musical Legacy with Cadence Core</h1>
          <p class="text-xl lg:text-2xl text-gray-100 mb-8 opacity-90">The premier digital music archive and audio restoration platform designed for artists and cultural institutions.</p>
          <a href="#features" class="btn-outline text-white border-white hover:bg-white hover:text-primary-dark">Explore Our Archives</a>
        </div>
        <div class="lg:w-2/5 flex justify-center lg:justify-end -mr-0 lg:-mr-16 fade-in-up md:mt-10 lg:mt-0">
          <div class="neomorph-bg rounded-full p-4 lg:p-6 shadow-xl aspect-square flex items-center justify-center">
            <img decoding="async" loading="lazy" src="images/hero-music-studio-tech.jpeg" alt="Modern sound engineering studio equipment highlighting heritage preservation" width="512" height="512" class="rounded-full object-cover">
          </div>
        </div>
      </div>
    </section>

    
    <section id="platform" class="section-spacing bg-white">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl lg:text-5xl text-center mb-6 font-extrabold text-primary-dark fade-in-up">Comprehensive Music Heritage Management</h2>
        <p class="text-lg text-center text-gray-700 mb-16 max-w-3xl mx-auto fade-in-up">Cadence Core provides an end-to-end ecosystem. Discover how we protect your audio assets and unlock their value.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-8 fade-in-up">
          
          <div class="card-custom p-6 flex flex-col items-center text-center">
            <div class="icon-circular-outline mb-4 w-20 h-20 text-primary">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path d="M5 2c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v20c0 .55.45 1 1 1h1c.55 0 1-.45 1-1V2zm16 0c0-.55-.45-1-1-1h-1c-.55 0-1 .45-1 1v20c0 .55.45 1 1 1h1c.55 0 1-.45 1-1V2zm-7 0c0-.55-.45-1-1-1H9c-.55 0-1 .45-1 1v20c0 .55.45 1 1 1h1c.55 0 1-.45 1-1V2zM7 2v20h10V2H7z" /></svg>
            </div>
            <h3 class="text-xl font-semibold mb-3 text-gray-800">Digital Music Archives</h3>
            <p class="text-gray-600">Secure, high-fidelity cloud storage tailored for uncompressed audio stems and master recordings.</p>
            <div class="mt-4 image-zoom">
              <img decoding="async" loading="lazy" src="images/feature-digital-vault.jpeg" alt="Abstract digital vault representing cloud storage for music" width="256" height="256" class="rounded-lg">
            </div>
          </div>
          
          <div class="card-custom p-6 flex flex-col items-center text-center">
            <div class="icon-circular-outline mb-4 w-20 h-20">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path d="M12 3a9 9 0 100 18A9 9 0 0012 3zm0 16a7 7 0 110-14 7 7 0 010 14zm-1-3h2v-4h-2v4zm0-6h2V7h-2v2z"/></svg>
            </div>
            <h3 class="text-xl font-semibold mb-3 text-gray-800">Audio Restoration</h3>
            <p class="text-gray-600">Advanced AI and specialist sound engineering tools to restore vintage tracks and degraded physical media.</p>
            <div class="mt-4 image-zoom">
              <img decoding="async" loading="lazy" src="images/feature-audio-restoration.jpeg" alt="Audio waveforms showing restoration process" width="256" height="256" class="rounded-lg">
            </div>
          </div>
          
          <div class="card-custom p-6 flex flex-col items-center text-center">
            <div class="icon-circular-outline mb-4 w-20 h-20">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path d="M16.5 6.5l-3.33 3.33c-.45.45-.45 1.18 0 1.63L16.5 14.5c.45.45 1.18.45 1.63 0l3.33-3.33c.45-.45.45-1.18 0-1.63l-3.33-3.33c-.45-.45-1.18-.45-1.63 0zM10.17 12.17L6.83 8.83c-.45-.45-1.18-.45-1.63 0l-3.33 3.33c-.45.45-.45 1.18 0 1.63l3.33 3.33c.45.45 1.18.45 1.63 0l3.33-3.33c.45-.45.45-1.18 0-1.63z"/></svg>
            </div>
            <h3 class="text-xl font-semibold mb-3 text-gray-800">Licensing Support</h3>
            <p class="text-gray-600">Automated clearance workflows and synchronization pitches for film, TV, and commercial usage.</p>
            <div class="mt-4 image-zoom">
              <img decoding="async" loading="lazy" src="images/feature-licensing.jpeg" alt="Music licensing contract and handshake concept" width="256" height="256" class="rounded-lg">
            </div>
          </div>
        </div>
        
        
        <div class="card-custom p-8 text-center fade-in-up">
          <h3 class="text-2xl lg:text-3xl font-semibold mb-4 text-primary-dark">Artists Analytics & Monetization Dashboard</h3>
          <p class="text-gray-700 mb-6 max-w-4xl mx-auto">Gain real-time insights into your catalog's performance globally. Cadence Core leverages cross-platform API integrations to trace plays, royalties, and heritage reach in a single, beautiful interface.</p>
          <div class="relative overflow-hidden rounded-lg image-zoom">
            <img decoding="async" loading="lazy" src="images/analytics-dashboard-interface.jpeg" alt="Wide dashboard interface showing colorful artist analytics charts" width="1024" height="384" class="w-full h-auto object-cover rounded-lg">
          </div>
        </div>
      </div>
    </section>

    
    <section id="consultancy" class="section-spacing bg-surface-base">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div class="fade-in-up">
          <h2 class="text-4xl lg:text-5xl mb-6 font-extrabold text-primary-dark">Sound Engineering Consultancy by Cadence Core</h2>
          <p class="text-lg text-gray-700 mb-8">Beyond digital platforms, our master engineers provide bespoke consultancy for institutions migrating vast physical archives. From workflow mapping to tape-baking protocols, we guide your heritage preservation.</p>
          <ul class="list-disc list-inside text-gray-700 text-lg space-y-3">
            <li>Needs Assessment & Archive Auditing</li>
            <li>Acoustic Calibration & Equipment Procurement</li>
            <li>Analog-to-Digital Pipeline Design</li>
          </ul>
        </div>
        <div class="flex justify-center fade-in-up">
          <div class="neomorph-bg rounded-2xl p-4 shadow-xl image-zoom">
            <img decoding="async" loading="lazy" src="images/consultancy-session-studio.jpeg" alt="Sound engineer analyzing analog tape in a professional studio" width="640" height="640" class="rounded-xl object-cover">
          </div>
        </div>
      </div>
    </section>

    
    <section id="testimonials" class="section-spacing bg-white overflow-hidden">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl lg:text-5xl text-center mb-16 font-extrabold text-primary-dark fade-in-up">Trusted by Voices the World Remembers</h2>
        <div class="relative">
          
          <div class="flex flex-col items-center justify-center space-y-8 md:space-y-0 md:flex-row md:space-x-8 px-4" id="testimonial-carousel">
            
            <div class="w-full md:w-1/2 card-custom p-8 text-center neomorph-bg shadow-lg flex flex-col items-center fade-in-up">
              <div class="w-24 h-24 rounded-full overflow-hidden mb-6 neomorph-bg p-2 shadow-inner">
                <img decoding="async" loading="lazy" src="images/testimonial-archivist.jpeg" alt="Director of National Audio Archives profile, Elena Petrova" width="128" height="128" class="w-full h-full object-cover rounded-full">
              </div>
              <p class="text-lg text-gray-700 italic mb-6">"The platform provided by Cadence Core radically shifted how we manage our century-old recordings. Their audio restoration tools are nothing short of magical."</p>
              <p class="font-semibold text-primary-dark">- Elena Petrova, Director of National Audio Archives</p>
            </div>
            
            <div class="w-full md:w-1/2 card-custom p-8 text-center neomorph-bg shadow-lg flex flex-col items-center fade-in-up" style="animation-delay: 0.2s;">
              <div class="w-24 h-24 rounded-full overflow-hidden mb-6 neomorph-bg p-2 shadow-inner">
                <img decoding="async" loading="lazy" src="images/testimonial-artist.jpeg" alt="Independent Heritage Artist, Javier Rodriguez" width="128" height="128" class="w-full h-full object-cover rounded-full">
              </div>
              <p class="text-lg text-gray-700 italic mb-6">"Licensing my back-catalog used to be a nightmare. Cadence Core’s intuitive analytics and support turned my dormant tracks into active revenue."</p>
              <p class="font-semibold text-primary-dark">- Javier Rodriguez, Independent Heritage Artist</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section id="contact" class="section-spacing bg-surface-base">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl lg:text-5xl text-center mb-6 font-extrabold text-primary-dark fade-in-up">Connect with Cadence Core</h2>
        <p class="text-lg text-center text-gray-700 mb-12 max-w-3xl mx-auto fade-in-up">Ready to digitize, restore, or license your catalog? Reach out to our New York team.</p>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
          
          <div class="neomorph-bg p-8 rounded-xl shadow-xl fade-in-up">
            <h3 class="text-2xl font-semibold mb-6 text-gray-800">Send Us an Inquiry</h3>
            <form action="#" method="POST" class="space-y-6">
              <div>
                <label for="name" class="sr-only">Your Name / Institution</label>
                <input type="text" id="name" name="name" placeholder="Your Name / Institution" class="w-full p-3 rounded-lg neomorph-bg focus:outline-none focus:ring-2 focus:ring-primary-light transition-colors duration-200" required>
              </div>
              <div>
                <label for="email" class="sr-only">Contact Email</label>
                <input type="email" id="email" name="email" placeholder="Contact Email" class="w-full p-3 rounded-lg neomorph-bg focus:outline-none focus:ring-2 focus:ring-primary-light transition-colors duration-200" required>
              </div>
              <div>
                <label for="interest" class="sr-only">Area of Interest</label>
                <select id="interest" name="interest" class="w-full p-3 rounded-lg neomorph-bg focus:outline-none focus:ring-2 focus:ring-primary-light transition-colors duration-200" required>
                  <option value="">Select Area of Interest</option>
                  <option value="Digital Archives">Digital Archives</option>
                  <option value="Audio Restoration">Audio Restoration</option>
                  <option value="Licensing">Licensing</option>
                  <option value="Consultancy">Consultancy</option>
                </select>
              </div>
              <div>
                <label for="message" class="sr-only">Tell us about your audio catalog...</label>
                <textarea id="message" name="message" rows="5" placeholder="Tell us about your audio catalog..." class="w-full p-3 rounded-lg neomorph-bg focus:outline-none focus:ring-2 focus:ring-primary-light transition-colors duration-200" required></textarea>
              </div>
              <button type="submit" class="btn-outline w-full hover:!bg-primary-dark hover:!text-white">Send Inquiry</button>
            </form>
          </div>

          
          <div class="neomorph-bg p-8 rounded-xl shadow-xl flex flex-col justify-between fade-in-up" style="animation-delay: 0.2s;">
            <div>
              <h3 class="text-2xl font-semibold mb-6 text-gray-800">Our Details</h3>
              <p class="text-gray-700 mb-3"><strong>Cadence Core</strong></p>
              <p class="text-gray-700 mb-3">51-11 74th Street</p>
              <p class="text-gray-700 mb-3">New York, New York, 11373, USA</p>
              <p class="text-gray-700 mb-3">Phone: <a href="tel:+12796648121" class="text-primary hover:underline">+1 (279) 664-8121</a></p>
              <p class="text-gray-700 mb-6">Email: <a href="mailto:info@<?php echo $_SERVER['HTTP_HOST']; ?>" class="text-primary hover:underline">info@<?php echo $_SERVER['HTTP_HOST']; ?></a></p>
            </div>
            <div class="mt-8 rounded-lg overflow-hidden neomorph-bg p-2 shadow-inner">
              <iframe decoding="async" loading="lazy" width="100%" height="300" frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?q=New%20York%2CUSA&zoom=10&key=YOUR_GOOGLE_MAPS_API_KEY" allowfullscreen>
              </iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<footer class="neomorph-bg py-10 lg:py-16 text-white text-center">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <p class="mb-4 text-lg">&copy; 2024 Cadence Core. Preserving musical heritage.</p>
      <div class="flex flex-wrap justify-center space-x-4">
        <a href="./privacy.html" class="text-accent hover:text-primary-light transition duration-300">Privacy Policy</a>
        <a href="./tos.html" class="text-accent hover:text-primary-light transition duration-300">Terms of Service</a>
      </div>
    </div>
  </footer>

  
  <div id="cookie-consent-banner" class="fixed bottom-0 left-0 right-0 bg-gray-800 text-white p-4 flex flex-col md:flex-row items-center justify-between text-sm z-50 shadow-lg">
    <p class="mb-2 md:mb-0 text-center md:text-left">We use cookies to improve your experience on our site. By continuing to use our site, you agree to our <a href="./privacy.html" class="text-accent underline">Privacy Policy</a>.</p>
    <button id="accept-cookies" class="btn-outline !text-white !border-white !hover:bg-white !hover:text-gray-800 transition duration-300">Accept</button>
  </div>

  <script>
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
      const navbar = document.getElementById('navbar');
      const brandText = document.getElementById('brand-text');
      const navLinks = document.querySelectorAll('#navbar-links .nav-link, #mobile-menu .nav-link');
      if (window.scrollY > 50) {
        navbar.classList.add('navbar-solid');
        brandText.classList.remove('text-white');
        brandText.classList.add('text-primary');
        navLinks.forEach(link => link.classList.add('navbar-link-solid'));
      } else {
        navbar.classList.remove('navbar-solid');
        brandText.classList.remove('text-primary');
        brandText.classList.add('text-white');
        navLinks.forEach(link => link.classList.remove('navbar-link-solid'));
      }
    });

    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
      const mobileMenu = document.getElementById('mobile-menu');
      mobileMenu.classList.toggle('hidden');
    });
    
    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
          e.preventDefault();

          document.querySelector(this.getAttribute('href')).scrollIntoView({
              behavior: 'smooth'
          });

          // Close mobile menu if open
          const mobileMenu = document.getElementById('mobile-menu');
          if (!mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.add('hidden');
          }
      });
    });

    // Fade-in-up animation on scroll
    const faders = document.querySelectorAll('.fade-in-up');
    const appearOptions = {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px"
    };

    const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                return;
            } else {
                entry.target.classList.add('animate');
                appearOnScroll.unobserve(entry.target);
            }
        });
    }, appearOptions);

    faders.forEach(fader => {
        appearOnScroll.observe(fader);
    });

    // Cookie Consent Logic
    const consentBanner = document.getElementById('cookie-consent-banner');
    const acceptButton = document.getElementById('accept-cookies');
    const cookieName = 'consent_e3d9f_tracking'; // Unique cookie name prefix

    function setCookie(name, value, days) {
        let expires = "";
        if (days) {
            let date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "")  + expires + "; path=/";
    }

    function getCookie(name) {
        let nameEQ = name + "=";
        let ca = document.cookie.split(';');
        for(let i=0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    window.onload = function() {
        if (!getCookie(cookieName)) {
            consentBanner.classList.remove('hidden');
            consentBanner.classList.add('flex');
        } else {
            consentBanner.classList.add('hidden');
        }
    };

    acceptButton.addEventListener('click', function() {
        setCookie(cookieName, 'true', 365); // Consent for 1 year
        consentBanner.classList.add('hidden');
    });
  </script>
</body>
</html>
