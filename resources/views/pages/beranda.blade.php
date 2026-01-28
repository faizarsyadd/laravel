@extends('layout.master')

@section('konten')
<style>
  /* ===== Home Styling ===== */
  .home-hero {
    background: linear-gradient(135deg, rgba(13, 27, 42, 0.92), rgba(13, 27, 42, 0.55)),
      url("https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1600&q=80");
    background-size: cover;
    background-position: center;
    border-radius: 18px;
    overflow: hidden;
    padding: 85px 30px;
    position: relative;
  }

  .home-hero::after {
    content: "";
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top left, rgba(255, 193, 7, 0.25), transparent 55%);
    pointer-events: none;
  }

  .home-hero-content {
    position: relative;
    z-index: 2;
    max-width: 720px;
  }

  .badge-soft {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 14px;
    border-radius: 999px;
    background: rgba(255, 193, 7, 0.15);
    color: #ffc107;
    border: 1px solid rgba(255, 193, 7, 0.25);
    font-weight: 600;
    font-size: 0.95rem;
  }

  .hero-title {
    font-size: 2.8rem;
    font-weight: 800;
    letter-spacing: -0.5px;
    color: #fff;
    margin-top: 12px;
    margin-bottom: 10px;
  }


  .hero-subtitle {
    color: rgba(255, 255, 255, 0.88);
    font-size: 1.05rem;
    line-height: 1.7;
  }

  .btn-pill {
    border-radius: 999px;
    padding: 12px 22px;
    font-weight: 700;
  }

  .glass-card {
    border: 1px solid rgba(0,0,0,0.06);
    border-radius: 18px;
    background: rgba(255,255,255,0.95);
    box-shadow: 0 18px 45px rgba(0,0,0,0.08);
  }

  .mini-icon {
    width: 46px;
    height: 46px;
    border-radius: 14px;
    display: grid;
    place-items: center;
    background: rgba(255, 193, 7, 0.15);
    color: #ffc107;
    font-size: 1.2rem;
    flex: 0 0 auto;
  }

  /* Destination Cards */
  .destination-card {
    border: none;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 18px 45px rgba(0,0,0,0.08);
    transition: transform .25s ease, box-shadow .25s ease;
  }

  .destination-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 22px 55px rgba(0,0,0,0.14);
  }

  .destination-img {
    height: 210px;
    object-fit: cover;
    transition: transform .35s ease;
  }

  .destination-card:hover .destination-img {
    transform: scale(1.08);
  }

  .price-badge {
    position: absolute;
    top: 14px;
    left: 14px;
    background: rgba(13, 27, 42, 0.85);
    color: #fff;
    padding: 7px 12px;
    border-radius: 999px;
    font-weight: 700;
    font-size: 0.9rem;
    border: 1px solid rgba(255,255,255,0.18);
    backdrop-filter: blur(8px);
  }
  .rating-badge {
    position: absolute;
    top: 14px;
    right: 14px;
    background: rgba(255, 193, 7, 0.95);
    color: #111;
    padding: 7px 12px;
    border-radius: 999px;
    font-weight: 800;
    font-size: 0.9rem;
  }

  /* Sections */
  .section-title {
    font-weight: 800;
    letter-spacing: -0.3px;
  }

  .section-subtitle {
    color: #6c757d;
    max-width: 700px;
    margin: 0 auto;
  }

  /* Animation */
  .fade-up {
    opacity: 0;
    transform: translateY(18px);
    transition: all .6s ease;
  }

  .fade-up.show {
    opacity: 1;
    transform: translateY(0);
  }
</style>

<!-- HERO -->
<div class="home-hero mb-5 fade-up">
  <div class="home-hero-content">
    <span class="badge-soft">✨ Paket Wisata Premium • Aman • Nyaman</span>

    <h1 class="hero-title">Jelajahi Dunia Bersama TravelGo</h1>

    <p class="hero-subtitle">
      Booking liburan jadi lebih gampang. Pilih destinasi, tentukan tanggal,
      dan nikmati perjalanan dengan pelayanan terbaik dari <b>TravelGo</b>.
    </p>

    <div class="d-flex flex-wrap gap-2 mt-4">
      <a href="/booking" class="btn btn-warning btn-pill shadow-sm">
        🚀 Booking Sekarang
      </a>
      <a href="/about" class="btn btn-outline-light btn-pill">
        📌 Tentang Kami
      </a>
    </div>
  </div>
</div>

<!-- QUICK SEARCH SECTION -->
<div class="glass-card p-4 p-md-5 mb-5 fade-up">
  <div class="row align-items-center g-4">
    <div class="col-lg-5">
      <h3 class="fw-bold mb-2">Cari Destinasi Favoritmu</h3>
      <p class="text-muted mb-0" style="line-height: 1.8;">
        Mau healing ke pantai, city tour, atau honeymoon? Isi form ini biar kami rekomendasikan paket terbaik.
      </p>
    </div>

    <div class="col-lg-7">
      <form class="row g-2">
        <div class="col-md-4">
          <input type="text" class="form-control rounded-pill" placeholder="📍 Destinasi">
        </div>
        <div class="col-md-3">
          <input type="date" class="form-control rounded-pill">
        </div>
        <div class="col-md-3">
          <input type="date" class="form-control rounded-pill">
        </div>
        <div class="col-md-2">
          <button class="btn btn-warning w-100 rounded-pill shadow-sm">
            🔍 Cari
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- DESTINATIONS -->
<div class="text-center mb-4 fade-up">
  <h2 class="section-title">Destinasi Populer</h2>
  <p class="section-subtitle mt-2">
    Pilihan favorit pelanggan TravelGo dengan pengalaman terbaik dan harga transparan.
  </p>
</div>

@php
  $destinations = [
    [
      "name" => "Bali",
      "desc" => "Liburan tropis terbaik di Indonesia.",
      "img" => "https://plus.unsplash.com/premium_photo-1677829177642-30def98b0963?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
      "price" => "Mulai 1.2jt",
      "rating" => "4.9★"
    ],
    [
      "name" => "Beechworth",
      "desc" => "Liburan dengan nuansa horor di Rumah Sakit Jiwa Beechworth, Australia.",
      "img" => "https://imgcdn.espos.id/@espos/images/2016/11/Rumah-sakit-jiwa-Beechworth-bordermails.com_.au_.jpg",
      "price" => "Mulai 500rb",
      "rating" => "4.9★"
    ],
    [
      "name" => "Tokyo",
      "desc" => "Perpaduan budaya modern & tradisional.",
      "img" => "https://images.unsplash.com/photo-1549693578-d683be217e58?q=80&w=1177&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
      "price" => "Mulai 8.5jt",
      "rating" => "4.8★"
    ],
    [
      "name" => "Paris",
      "desc" => "Kota romantis dengan sejarah megah.",
      "img" => "https://images.unsplash.com/photo-1505761671935-60b3a7427bad?auto=format&fit=crop&w=1200&q=80",
      "price" => "Mulai 10jt",
      "rating" => "4.9★"
    ],
    [
      "name" => "Singapore",
      "desc" => "City trip modern, bersih, dan nyaman.",
      "img" => "https://images.unsplash.com/photo-1525625293386-3f8f99389edd?auto=format&fit=crop&w=1200&q=80",
      "price" => "Mulai 4.3jt",
      "rating" => "4.7★"
    ],
    [
      "name" => "Bangkok",
      "desc" => "Surga kuliner & wisata belanja seru.",
      "img" => "https://images.unsplash.com/photo-1519451241324-20b4ea2c4220?auto=format&fit=crop&w=1200&q=80",
      "price" => "Mulai 3.6jt",
      "rating" => "4.8★"
    ],
    [
      "name" => "Lombok",
      "desc" => "Pantai eksotis & suasana tenang.",
      "img" => "https://images.unsplash.com/photo-1512100356356-de1b84283e18?auto=format&fit=crop&w=1200&q=80",
      "price" => "Mulai 1.6jt",
      "rating" => "4.9★"
    ],
  ];
@endphp

<div class="row g-4 mb-5">
  @foreach($destinations as $d)
    <div class="col-lg-4 col-md-6 fade-up">
      <div class="card destination-card h-100">
        <div class="position-relative">
          <img src="{{ $d['img'] }}" class="w-100 destination-img" alt="{{ $d['name'] }}">
          <span class="price-badge">{{ $d['price'] }}</span>
          <span class="rating-badge">{{ $d['rating'] }}</span>
        </div>

        <div class="card-body p-4">
          <h5 class="fw-bold mb-1">{{ $d['name'] }}</h5>
          <p class="text-muted mb-3">{{ $d['desc'] }}</p>

          <div class="d-flex gap-2">
            <a href="/booking" class="btn btn-warning rounded-pill px-4 shadow-sm">
              Booking
            </a>
            <a href="/about" class="btn btn-outline-dark rounded-pill px-4">
              Detail
            </a>
          </div>
        </div>
      </div>
    </div>
  @endforeach
</div>

<!-- WHY CHOOSE US -->
<div class="glass-card p-4 p-md-5 mb-5 fade-up">
  <div class="text-center mb-4">
    <h2 class="section-title">Kenapa Pilih TravelGo?</h2>
    <p class="section-subtitle mt-2">
      Kami fokus bikin perjalanan kamu lebih simple, aman, dan nyaman dari awal sampai pulang.
    </p>
  </div>

  <div class="row g-3">
    <div class="col-md-4">
      <div class="p-3 p-md-4 border rounded-4 h-100">
        <div class="d-flex gap-3 align-items-start">
          <div class="mini-icon">🛡</div>
          <div>
            <h6 class="fw-bold mb-1">Aman & Terpercaya</h6>
            <p class="text-muted mb-0">Travel legal, transaksi jelas, itinerary rapi.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="p-3 p-md-4 border rounded-4 h-100">
        <div class="d-flex gap-3 align-items-start">
          <div class="mini-icon">💎</div>
          <div>
            <h6 class="fw-bold mb-1">Pelayanan Premium</h6>
            <p class="text-muted mb-0">Hotel nyaman, transport aman, guide profesional.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="p-3 p-md-4 border rounded-4 h-100">
        <div class="d-flex gap-3 align-items-start">
          <div class="mini-icon">⚡</div>
          <div>
            <h6 class="fw-bold mb-1">Cepat & Praktis</h6>
            <p class="text-muted mb-0">Booking gampang, konfirmasi cepat, support 24/7.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- TESTIMONIAL -->
<div class="text-center mb-4 fade-up">
  <h2 class="section-title">Testimoni Pelanggan</h2>
  <p class="section-subtitle mt-2">
    Banyak yang sudah liburan bareng TravelGo, sekarang giliran kamu!
  </p>
</div>

<div class="row g-4 mb-5">
  <div class="col-md-4 fade-up">
    <div class="glass-card p-4 h-100">
      <p class="mb-3">“Booking gampang banget, admin fast response. Trip Bali-nya keren!”</p>
      <div class="d-flex align-items-center gap-3">
        <div class="mini-icon">👤</div>
        <div>
          <div class="fw-bold">Ayu</div>
          <small class="text-muted">Bali Trip • 4.9★</small>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4 fade-up">
    <div class="glass-card p-4 h-100">
      <p class="mb-3">“Tokyo trip bener-bener rapi, itinerary jelas, hotel nyaman.”</p>
      <div class="d-flex align-items-center gap-3">
        <div class="mini-icon">👤</div>
        <div>
          <div class="fw-bold">Rizky</div>
          <small class="text-muted">Tokyo Trip • 4.8★</small>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4 fade-up">
    <div class="glass-card p-4 h-100">
      <p class="mb-3">“Worth it banget! Paris trip romantis, guide-nya baik banget.”</p>
      <div class="d-flex align-items-center gap-3">
        <div class="mini-icon">👤</div>
        <div>
          <div class="fw-bold">Nadia</div>
          <small class="text-muted">Paris Trip • 4.9★</small>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- CTA FINAL -->
<div class="home-hero mb-3 fade-up" style="padding: 60px 30px;">
  <div class="home-hero-content">
    <span class="badge-soft">🎉 Promo Terbatas!</span>
    <h2 class="hero-title" style="font-size: 2.1rem;">Siap Liburan? Booking Sekarang!</h2>
    <p class="hero-subtitle">
      Dapatkan promo spesial untuk booking pertama kamu.
      Klik tombol di bawah dan mulai perjalanan impianmu.
    </p>

    <div class="d-flex flex-wrap gap-2 mt-3">
      <a href="/booking" class="btn btn-warning btn-pill shadow-sm">
        🎫 Booking Sekarang
      </a>
      <a href="/contact" class="btn btn-outline-light btn-pill">
        💬 Chat Admin
      </a>
    </div>
  </div>
</div>

<!-- Animation Trigger -->
<script>
  const fadeUps = document.querySelectorAll(".fade-up");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
      }
    });
  }, { threshold: 0.15 });

  fadeUps.forEach((el) => observer.observe(el));
</script>
@endsection
