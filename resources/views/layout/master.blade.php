<!doctype html>
<html lang="id">
<head>
  <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>TravelGo</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <style>
    body { font-family: 'Poppins', sans-serif; }

     /* Navbar */
  .travel-navbar {
  background: rgba(8, 28, 45, 0.15); /* lebih transparan */
  backdrop-filter: blur(8px);
  transition: all 0.3s ease;
  padding: 14px 0;
  z-index: 9999;
}


  /* Scroll Effect */
  .travel-navbar.scrolled {
  background: rgba(8, 28, 45, 0.90);
  backdrop-filter: blur(12px);
  box-shadow: 0 10px 30px rgba(0,0,0,0.35);
  padding: 10px 0;
}


  /* Logo */
  .brand-logo {
    width: 60px;
    height: 60px;
    object-fit: contain;
    border-radius: 10px;
  }

  .brand-name {
    font-size: 20px;
    letter-spacing: 0.2px;
  }

  /* Nav Link */
  .nav-anim {
    color: rgba(255,255,255,0.9) !important;
    font-weight: 500;
    padding: 10px 14px !important;
    border-radius: 12px;
    transition: all 0.25s ease;
  }

  .nav-anim:hover {
    background: rgba(255,255,255,0.08);
    color: #fff !important;
    transform: translateY(-1px);
  }

  .nav-link.active {
    background: rgba(255,193,7,0.18);
    color: #ffc107 !important;
    font-weight: 700;
  }

  /* Dropdown Modern */
  .dropdown-modern {
    border-radius: 16px;
    padding: 10px;
    min-width: 220px;
  }

  .dropdown-modern .dropdown-item {
    border-radius: 12px;
    padding: 10px 12px;
    font-weight: 500;
    transition: 0.2s ease;
  }

  .dropdown-modern .dropdown-item:hover {
    background: rgba(255,193,7,0.2);
    color: #ffc107;
  }

  /* Buttons */
  .nav-btn {
    transition: 0.25s ease;
    font-weight: 600;
  }

  .nav-btn:hover {
    transform: translateY(-2px);
  }

  .register-btn {
    background: #0d6efd;
    border: none;
  }

  .register-btn:hover {
    box-shadow: 0 12px 25px rgba(13,110,253,0.35);
  }
  /* navbar end */

/* GoLiveChat Widget */
.glc-widget{
  position: fixed;
  right: 22px;
  bottom: 22px;
  z-index: 9999;
}

/* Floating button */
.glc-btn{
  width: 64px;
  height: 64px;
  border: none;
  border-radius: 50%;
  background: #111827;
  box-shadow: 0 12px 35px rgba(0,0,0,.25);
  display: grid;
  place-items: center;
  cursor: pointer;
  position: relative;
  transition: transform .2s ease;
}

.glc-btn:hover{
  transform: translateY(-3px);
}

.glc-avatar{
  width: 52px;
  height: 52px;
  border-radius: 50%;
  object-fit: cover;
}

/* Online blinking dot */
.glc-online-dot{
  position: absolute;
  right: 6px;
  bottom: 6px;
  width: 14px;
  height: 14px;
  border-radius: 50%;
  background: #22c55e;
  border: 2px solid #111827;
  animation: glcPulse 1.2s infinite;
}

@keyframes glcPulse{
  0%{ box-shadow: 0 0 0 0 rgba(34,197,94,.7); }
  70%{ box-shadow: 0 0 0 12px rgba(34,197,94,0); }
  100%{ box-shadow: 0 0 0 0 rgba(34,197,94,0); }
}

/* Chat box */
.glc-box{
  position: absolute;
  right: 0;
  bottom: 80px;
  width: 340px;
  max-width: 90vw;
  background: rgba(255,255,255,.95);
  backdrop-filter: blur(10px);
  border-radius: 18px;
  box-shadow: 0 18px 50px rgba(0,0,0,.18);
  overflow: hidden;

  transform: translateY(10px);
  opacity: 0;
  pointer-events: none;
  transition: all .25s ease;
}

.glc-box.show{
  transform: translateY(0);
  opacity: 1;
  pointer-events: auto;
}

.glc-header{
  background: #111827;
  color: white;
  padding: 12px 14px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.glc-header-avatar{
  width: 38px;
  height: 38px;
  border-radius: 50%;
  object-fit: cover;
}

.glc-title{
  font-weight: 700;
  line-height: 1.1;
}

.glc-subtitle{
  font-size: 12px;
  opacity: .85;
  display: flex;
  align-items: center;
  gap: 6px;
}

.glc-dot-mini{
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #22c55e;
}

.glc-close{
  background: transparent;
  border: none;
  color: white;
  font-size: 18px;
  cursor: pointer;
  opacity: .8;
}

.glc-close:hover{ opacity: 1; }

.glc-body{
  padding: 12px;
  height: 260px;
  overflow-y: auto;
  background: linear-gradient(180deg, rgba(249,250,251,1), rgba(255,255,255,1));
}

.glc-bubble{
  padding: 10px 12px;
  border-radius: 14px;
  margin-bottom: 10px;
  max-width: 85%;
  font-size: 14px;
  line-height: 1.3;
}

.glc-bubble.bot{
  background: #f3f4f6;
  color: #111827;
}

.glc-bubble.user{
  background: #ffc107;
  color: #111827;
  margin-left: auto;
}

.glc-footer{
  display: flex;
  gap: 8px;
  padding: 10px;
  border-top: 1px solid rgba(0,0,0,.06);
  background: white;
}

.glc-input{
  flex: 1;
  border: 1px solid rgba(0,0,0,.15);
  border-radius: 999px;
  padding: 10px 12px;
  outline: none;
}

.glc-input:focus{
  border-color: #ffc107;
  box-shadow: 0 0 0 .2rem rgba(255,193,7,.25);
}

.glc-send{
  border: none;
  border-radius: 999px;
  padding: 10px 14px;
  background: #111827;
  color: white;
  font-weight: 600;
  cursor: pointer;
}

.glc-send:hover{
  opacity: .92;
}

/* live chat bot end */

#mainNavbar{
  z-index: 1100;
}

/* searchbar floating */
#searchBar{
  position: fixed;
  top: 50px; /* ini jarak aman dari navbar */
  left: 0;
  width: 100%;
  z-index: 1090;
}

/* biar konten halaman ga ketutup navbar+searchbar */
.page-content{
  padding-top: 160px;
}

/* Shrink navbar on scroll */
#mainNavbar.shrink {
  padding-top: 6px;
  padding-bottom: 6px;
  background: rgba(13, 27, 42, 0.88);
  backdrop-filter: blur(12px);
}


/* Floating search bar container */
.search-bar{
  position: fixed;
  left: 0;
  width: 100%;
  z-index: 1020;
  padding: 10px 0;

  /* animasi hide/show */
  transform: translateY(-120%);
  opacity: 0;
  transition: all 0.45s ease;
}

/* show state */
.search-bar.show{
  transform: translateY(0);
  opacity: 1;
}

/* search wrap card */
.search-wrap{
  background: rgba(255, 255, 255, 0.92);
  backdrop-filter: blur(12px);
  border: 1px solid rgba(0,0,0,0.06);
  border-radius: 18px;
  padding: 14px;
  box-shadow: 0 18px 45px rgba(0,0,0,0.10);
}

/* each input block */
.search-field{
  background: #fff;
  border: 1px solid rgba(0,0,0,0.06);
  border-radius: 14px;
  padding: 10px 10px;
  transition: all .25s ease;
}

.search-field:focus-within{
  border-color: rgba(255,193,7,0.9);
  box-shadow: 0 0 0 0.25rem rgba(255,193,7,.18);
}

.search-label{
  display: block;
  font-weight: 800;
  font-size: 0.75rem;
  color: #6c757d;
  margin-bottom: 6px;
  padding-left: 8px;
}

.search-field .form-control{
  background: transparent;
  box-shadow: none !important;
  outline: none !important;
}

.search-btn{
  border-radius: 10px;
  padding: 14px 16px;
  font-weight: 900;
  box-shadow: 0 12px 25px rgba(255,193,7,.35);
  transition: transform .2s ease;
}

.search-btn:hover{
  transform: translateY(-2px);
}

/* search bar end */

/* Nav link hover animation */
.navbar-nav .nav-link {
  position: relative;
  font-weight: 500;
}

.navbar-nav .nav-link::after {
  content: "";
  position: absolute;
  bottom: -4px;
  left: 50%;
  width: 0;
  height: 2px;
  background: #ffc107;
  transition: all 0.3s ease;
  transform: translateX(-50%);
}

.navbar-nav .nav-link:hover::after {
  width: 60%;
}

/* Input focus */
.search-bar input:focus {
  box-shadow: 0 0 0 0.2rem rgba(255,193,7,.25);
  border-color: #ffc107;
}
    .hero {
      background: linear-gradient(rgba(0,0,0,.4), rgba(0,0,0,.4)),
        url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1600&q=80')
        center/cover no-repeat;
      min-height: 70vh;
      color: white;
      display: flex;
      align-items: center;
    }

    .section-title { font-weight: 600; margin-bottom: 1.5rem; }

    .destination-card img {
      height: 220px;
      object-fit: cover;
    }

    footer {
      background: #0d1b2a;
      color: #ccc;
    }

    footer a { color: #ccc; text-decoration: none; }
    footer a:hover { color: #fff; }

    /* Hilangkan segitiga/garis dekorasi kuning di bawah menu */
.navbar .nav-link::before,
.navbar .nav-link::after,
.navbar .dropdown-toggle::before,
.navbar .dropdown-toggle::after {
  content: none !important;
  display: none !important;
}
/* end */
  </style>
</head>
<body>

<!-- Elegant Main Navbar -->
<!-- TravelGo Navbar (Traveloka Style) -->
<nav id="mainNavbar" class="navbar navbar-expand-lg navbar-dark fixed-top travel-navbar">
  <div class="container">

    <!-- Brand / Logo -->
    <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="/beranda">
      <img src="{{ asset('images/logo.png') }}" alt="TravelGo Logo" class="brand-logo">
      <span class="brand-name">TravelGo</span>
    </a>

    <!-- Toggle Mobile -->
    <button class="navbar-toggler border-0 shadow-none" type="button"
      data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse" id="navbarNav">

      <!-- LEFT MENU -->
      <ul class="navbar-nav me-auto align-items-lg-center gap-lg-1 mt-3 mt-lg-0">

        <li class="nav-item">
          <a class="nav-link nav-anim {{ request()->is('beranda') ? 'active' : '' }}" href="/beranda">
            Beranda
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link nav-anim {{ request()->is('about') ? 'active' : '' }}" href="/about">
            Tentang
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link nav-anim {{ request()->is('contact') ? 'active' : '' }}" href="/contact">
            Kontak
          </a>
        </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle nav-anim" href="#" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Layanan
          </a>

          <ul class="dropdown-menu dropdown-menu-dark dropdown-modern shadow-lg border-0">
            <li><a class="dropdown-item" href="#">🏨 Hotel</a></li>
            <li><a class="dropdown-item" href="#">✈️ Flight</a></li>
            <li><a class="dropdown-item" href="#">🚆 Kereta</a></li>
            <li><a class="dropdown-item" href="#">🚌 Bus & Travel</a></li>
            <li><a class="dropdown-item" href="#">🚗 Rental Mobil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">✨ Lihat Semua</a></li>
          </ul>
        </li>

      </ul>

      <!-- RIGHT MENU -->
      <div class="d-flex align-items-lg-center gap-2 ms-lg-auto mt-3 mt-lg-0">

        <a href="/booking" class="btn btn-outline-light rounded-pill px-3 nav-btn">
          Booking
        </a>

        <a href="#" class="btn btn-outline-light rounded-pill px-3 nav-btn">
          Log In
        </a>

        <a href="#" class="btn btn-primary rounded-pill px-3 nav-btn register-btn">
          Register
        </a>
      </div>

    </div>
  </div>
</nav>


<!-- Floating Search Bar (Redirect to Booking) -->
<div id="searchBar" class="search-bar">
  <div class="container">
    <div class="search-wrap">
      <form id="searchForm" action="/booking" method="GET" class="row g-2 align-items-center">
        <div class="col-lg-4 col-md-6">
          <div class="search-field">
            <small class="search-label">Destinasi</small>
            <input name="destinasi" type="text" class="form-control border-0 px-3"
              placeholder="Mau kemana? (contoh: Bali)" required>
          </div>
        </div>

        <div class="col-lg-2 col-md-3">
          <div class="search-field">
            <small class="search-label">Check-in</small>
            <input name="checkin" type="date" class="form-control border-0 px-3" required>
          </div>
        </div>

        <div class="col-lg-2 col-md-3">
          <div class="search-field">
            <small class="search-label">Check-out</small>
            <input name="checkout" type="date" class="form-control border-0 px-3" required>
          </div>
        </div>

        <div class="col-lg-2 col-md-3">
          <div class="search-field">
            <small class="search-label">Orang</small>
            <input name="orang" type="number" min="1" value="1"
              class="form-control border-0 px-3" required>
          </div>
        </div>

        <div class="col-lg-2 col-md-3">
          <button class="btn btn-warning w-100 search-btn" type="submit">
            🔍 Cari Paket
          </button>
        </div>

      </form>
    </div>
  </div>
</div>

<!-- search bar end -->


{{-- Hero hanya di halaman beranda --}}
@if (Request::is('beranda'))
<section class="hero">
  <div class="container text-center">
    <h1 class="display-4 fw-bold">Jelajahi Dunia Bersama Kami</h1>
    <p class="lead">Paket liburan terbaik, harga terjangkau, pelayanan profesional</p>
    <a href="/booking" class="btn btn-warning btn-lg mt-3">Booking Sekarang</a>
  </div>
</section>
@endif

<!-- Main Content -->
<main class="container my-5 pt-5" style="padding-top:120px;">
  @yield('konten')
</main>

<!-- GoLiveChat Floating Widget -->
<div class="glc-widget">
  <!-- Chat Button -->
  <button id="glcBtn" class="glc-btn" aria-label="Open Live Chat">
    <img src="/images/operator.png" alt="Operator" class="glc-avatar">

    <!-- Online dot -->
    <span class="glc-online-dot"></span>
  </button>

  <!-- Chat Box -->
  <div id="glcBox" class="glc-box">
    <div class="glc-header">
      <div class="d-flex align-items-center gap-2">
        <img src="/images/operator.png" alt="Operator" class="glc-header-avatar">
        <div>
          <div class="glc-title">GoLiveChat</div>
          <div class="glc-subtitle">
            <span class="glc-dot-mini"></span> Online • Balas cepat
          </div>
        </div>
      </div>

      <button id="glcClose" class="glc-close" aria-label="Close Chat">✕</button>
    </div>

    <div class="glc-body" id="glcBody">
      <div class="glc-bubble bot">
        Halo 👋 Selamat datang di TravelGo!<br>
        Mau tanya paket wisata atau booking?
      </div>
    </div>

    <div class="glc-footer">
      <input id="glcInput" type="text" class="glc-input" placeholder="Ketik pesan..." />
      <button id="glcSend" class="glc-send">Kirim</button>
    </div>
  </div>
</div>

{{-- go live chat end --}}

<!-- Footer -->
<footer class="pt-5 pb-3 mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-3">
        <h5 class="fw-bold">TravelGo</h5>
        <p>Travel agency profesional untuk liburan domestik & internasional.</p>
      </div>

      <div class="col-md-4 mb-3">
        <h6 class="fw-bold">Menu</h6>
        <ul class="list-unstyled">
          <li><a href="/beranda">Beranda</a></li>
          <li><a href="/about">Tentang</a></li>
          <li><a href="/contact">Kontak</a></li>
        </ul>
      </div>

      <div class="col-md-4 mb-3">
        <h6 class="fw-bold">Kontak</h6>
        <p>Email: info@travelgo.id<br>
           Telp: 0812-3456-7890<br>
           Jakarta, Indonesia</p>
      </div>
    </div>

    <hr class="border-secondary">
    <div class="text-center small">© {{ date('Y') }} TravelGo. All rights reserved.</div>
  </div>
</footer>

{{-- javascript --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
const searchBar = document.getElementById("searchBar");
const mainNavbar = document.getElementById("mainNavbar");

window.addEventListener("scroll", () => {
  if (window.scrollY > 250) {
    searchBar.classList.add("show");
    mainNavbar.classList.add("shrink");
  } else {
    searchBar.classList.remove("show");
    mainNavbar.classList.remove("shrink");
  }
});
</script>

{{-- bot chat --}}
<script>
  const glcBtn = document.getElementById("glcBtn");
  const glcBox = document.getElementById("glcBox");
  const glcClose = document.getElementById("glcClose");

  const glcBody = document.getElementById("glcBody");
  const glcInput = document.getElementById("glcInput");
  const glcSend = document.getElementById("glcSend");

  // Toggle chat
  glcBtn.addEventListener("click", () => {
    glcBox.classList.toggle("show");
  });

  glcClose.addEventListener("click", () => {
    glcBox.classList.remove("show");
  });

  // Send message
  function addBubble(text, type) {
    const div = document.createElement("div");
    div.className = `glc-bubble ${type}`;
    div.innerText = text;
    glcBody.appendChild(div);
    glcBody.scrollTop = glcBody.scrollHeight;
  }

  function botReply(userText) {
    let reply = "Terima kasih 🙌 Admin akan membalas secepatnya ya!";

    const t = userText.toLowerCase();

    if (t.includes("bali")) reply = "Untuk Bali ada paket 3D2N & 4D3N 🌴 Mau tanggal berapa?";
    if (t.includes("harga")) reply = "Harga tergantung destinasi & jumlah orang 😊 Mau destinasi mana?";
    if (t.includes("booking")) reply = "Siap! Kamu bisa booking lewat menu Booking ✈️ atau tulis destinasi + tanggal di sini.";

    setTimeout(() => addBubble(reply, "bot"), 600);
  }

  function sendMessage() {
    const text = glcInput.value.trim();
    if (!text) return;

    addBubble(text, "user");
    glcInput.value = "";
    botReply(text);
  }

  glcSend.addEventListener("click", sendMessage);
  glcInput.addEventListener("keypress", (e) => {
    if (e.key === "Enter") sendMessage();
  });
</script>
{{-- chat bot end --}}

{{-- search bar --}}
<script>
  const searchBar = document.getElementById("searchBar");
  const mainNavbar = document.getElementById("mainNavbar");
  const searchForm = document.getElementById("searchForm");

  function updateSearchBarTop() {
    if (!mainNavbar || !searchBar) return;
    const navbarHeight = mainNavbar.offsetHeight;
    searchBar.style.top = navbarHeight + "px";
  }

  // Show/hide search bar on scroll
  window.addEventListener("scroll", () => {
    if (window.scrollY > 250) {
      searchBar.classList.add("show");
      mainNavbar.classList.add("shrink");
      updateSearchBarTop();
    } else {
      searchBar.classList.remove("show");
      mainNavbar.classList.remove("shrink");
    }
  });

  // Update top on resize
  window.addEventListener("resize", updateSearchBarTop);

  // Redirect to booking with query params
  if(searchForm){
    searchForm.addEventListener("submit", function(e){
      e.preventDefault();

      const destinasi = this.destinasi.value;
      const checkin = this.checkin.value;
      const checkout = this.checkout.value;
      const orang = this.orang.value;

      const url = `/booking?destinasi=${encodeURIComponent(destinasi)}&checkin=${encodeURIComponent(checkin)}&checkout=${encodeURIComponent(checkout)}&orang=${encodeURIComponent(orang)}`;

      window.location.href = url;
    });
  }

  // initial
  updateSearchBarTop();
</script>
{{-- search bar end --}}

{{-- navbar --}}
<script>
  window.addEventListener("scroll", function () {
    const navbar = document.getElementById("mainNavbar");
    if (window.scrollY > 30) navbar.classList.add("scrolled");
    else navbar.classList.remove("scrolled");
  });
</script>

{{-- navbar end --}}
</body>
</html>
