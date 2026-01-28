@extends('layout.master')

@section('konten')
<style>
  /* ===== About Page Styling ===== */
  .about-hero {
    background: linear-gradient(135deg, rgba(13, 27, 42, 0.92), rgba(13, 27, 42, 0.65)),
      url("https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1400&q=80");
    background-size: cover;
    background-position: center;
    border-radius: 18px;
    overflow: hidden;
    padding: 70px 30px;
    position: relative;
  }

  .about-hero::after {
    content: "";
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top left, rgba(255, 193, 7, 0.25), transparent 55%);
    pointer-events: none;
  }

  .about-hero-content {
    position: relative;
    z-index: 2;
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
    font-size: 2.6rem;
    font-weight: 800;
    letter-spacing: -0.5px;
    color: #fff;
    margin-top: 12px;
    margin-bottom: 10px;
  }

  .hero-subtitle {
    color: rgba(255, 255, 255, 0.85);
    max-width: 650px;
    font-size: 1.05rem;
    line-height: 1.7;
  }

  .about-card {
    border: none;
    border-radius: 18px;
    box-shadow: 0 18px 45px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    background: #fff;
  }

  .icon-circle {
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

  .feature-item {
    transition: transform .25s ease, box-shadow .25s ease;
    border-radius: 16px;
    padding: 16px;
    background: #fff;
    border: 1px solid rgba(0,0,0,0.06);
  }

  .feature-item:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 40px rgba(0, 0, 0, 0.08);
  }

  .stat-box {
    border-radius: 18px;
    padding: 18px;
    background: linear-gradient(180deg, #ffffff, #fbfbfb);
    border: 1px solid rgba(0,0,0,0.06);
    transition: transform .25s ease;
  }

  .stat-box:hover {
    transform: translateY(-4px);
  }

  .stat-number {
    font-size: 1.8rem;
    font-weight: 800;
    margin: 0;
  }

  .stat-label {
    margin: 0;
    color: #6c757d;
    font-size: 0.95rem;
  }

  .btn-pill {
    border-radius: 999px;
    padding: 12px 22px;
    font-weight: 700;
  }

  /* Animations */
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

<!-- HERO SECTION -->
<div class="about-hero mb-5 fade-up">
  <div class="about-hero-content">
    <span class="badge-soft">✨ Trusted Travel Partner sejak 2020</span>

    <h1 class="hero-title">Tentang TravelGo</h1>

    <p class="hero-subtitle">
      <strong>TravelGo</strong> adalah travel agency profesional yang fokus pada pengalaman liburan
      yang nyaman, aman, dan berkelas. Kami bantu kamu mulai dari itinerary, transport,
      hotel, sampai tour guide — semuanya dibuat simple & transparan.
    </p>

    <div class="d-flex flex-wrap gap-2 mt-4">
      <a href="/booking" class="btn btn-warning btn-pill shadow-sm">
        🚀 Mulai Booking
      </a>
      <a href="/contact" class="btn btn-outline-light btn-pill">
        💬 Konsultasi Gratis
      </a>
    </div>
  </div>
</div>

<!-- MAIN CONTENT -->
<div class="row g-4 align-items-stretch">
  <!-- Left: About Card -->
  <div class="col-lg-7 fade-up">
    <div class="about-card p-4 p-md-5 h-100">
      <h3 class="fw-bold mb-3">Kenapa TravelGo?</h3>
      <p class="text-muted mb-4" style="line-height: 1.8;">
        Kami percaya liburan terbaik itu bukan yang mahal, tapi yang <b>berkesan</b>.
        TravelGo hadir untuk bikin perjalanan kamu lebih mudah, lebih aman, dan lebih terencana.
        Dari solo trip, honeymoon, sampai group tour — semua bisa!
      </p>

      <div class="row g-3">
        <div class="col-md-6">
          <div class="feature-item d-flex gap-3">
            <div class="icon-circle">✔</div>
            <div>
              <h6 class="fw-bold mb-1">Legal & Terdaftar</h6>
              <p class="text-muted mb-0">Transaksi aman, terpercaya, dan jelas.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="feature-item d-flex gap-3">
            <div class="icon-circle">🧭</div>
            <div>
              <h6 class="fw-bold mb-1">Tour Guide Profesional</h6>
              <p class="text-muted mb-0">Ramah, informatif, dan siap bantu.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="feature-item d-flex gap-3">
            <div class="icon-circle">🏨</div>
            <div>
              <h6 class="fw-bold mb-1">Hotel & Transport Premium</h6>
              <p class="text-muted mb-0">Nyaman untuk perjalanan jauh.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="feature-item d-flex gap-3">
            <div class="icon-circle">📞</div>
            <div>
              <h6 class="fw-bold mb-1">Support 24 Jam</h6>
              <p class="text-muted mb-0">Siap bantu kapanpun kamu butuh.</p>
            </div>
          </div>
        </div>
      </div>

      <hr class="my-4">

      <div class="d-flex flex-wrap gap-2">
        <a href="/booking" class="btn btn-warning btn-pill shadow-sm">
          🎫 Lihat Paket Wisata
        </a>
        <a href="/contact" class="btn btn-outline-dark btn-pill">
          📩 Hubungi Admin
        </a>
      </div>
    </div>
  </div>

  <!-- Right: Stats + Image -->
  <div class="col-lg-5 fade-up">
    <div class="about-card p-4 h-100">
      <h5 class="fw-bold mb-3">TravelGo dalam Angka</h5>

      <div class="row g-3 mb-4">
        <div class="col-6">
          <div class="stat-box text-center">
            <p class="stat-number text-warning">500+</p>
            <p class="stat-label">Trip Sukses</p>
          </div>
        </div>

        <div class="col-6">
          <div class="stat-box text-center">
            <p class="stat-number text-warning">120+</p>
            <p class="stat-label">Destinasi</p>
          </div>
        </div>

        <div class="col-6">
          <div class="stat-box text-center">
            <p class="stat-number text-warning">4.9★</p>
            <p class="stat-label">Rating Pelanggan</p>
          </div>
        </div>

        <div class="col-6">
          <div class="stat-box text-center">
            <p class="stat-number text-warning">24/7</p>
            <p class="stat-label">Customer Support</p>
          </div>
        </div>
      </div>

      <div class="rounded-4 overflow-hidden shadow-sm">
        <img
          src="https://images.unsplash.com/photo-1528127269322-539801943592?auto=format&fit=crop&w=1200&q=80"
          class="img-fluid"
          alt="TravelGo"
        >
      </div>

      <div class="alert alert-warning mt-4 mb-0 rounded-4">
        <b>Promo!</b> Diskon hingga <b>20%</b> untuk booking pertama kamu 🎉
      </div>
    </div>
  </div>
</div>

<!-- Simple FAQ -->
<div class="mt-5 fade-up">
  <div class="about-card p-4 p-md-5">
    <h3 class="fw-bold mb-4">Pertanyaan yang Sering Ditanya</h3>

    <div class="accordion" id="faqTravelGo">
      <div class="accordion-item rounded-4 overflow-hidden mb-3">
        <h2 class="accordion-header" id="q1">
          <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#a1">
            Apakah TravelGo menyediakan paket custom itinerary?
          </button>
        </h2>
        <div id="a1" class="accordion-collapse collapse show" data-bs-parent="#faqTravelGo">
          <div class="accordion-body text-muted">
            Ya! Kamu bisa request itinerary sesuai budget dan durasi perjalanan kamu.
          </div>
        </div>
      </div>

      <div class="accordion-item rounded-4 overflow-hidden mb-3">
        <h2 class="accordion-header" id="q2">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#a2">
            Bisa booking untuk group atau kantor?
          </button>
        </h2>
        <div id="a2" class="accordion-collapse collapse" data-bs-parent="#faqTravelGo">
          <div class="accordion-body text-muted">
            Bisa banget. Kami siap handle group tour, gathering, sampai corporate trip.
          </div>
        </div>
      </div>

      <div class="accordion-item rounded-4 overflow-hidden">
        <h2 class="accordion-header" id="q3">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#a3">
            Pembayaran bisa lewat apa saja?
          </button>
        </h2>
        <div id="a3" class="accordion-collapse collapse" data-bs-parent="#faqTravelGo">
          <div class="accordion-body text-muted">
            Transfer bank, e-wallet, dan pembayaran bertahap (sesuai paket tertentu).
          </div>
        </div>
      </div>
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
