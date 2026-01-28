@extends('layout.master')

@section('konten')

<style>
  /* CONTACT PAGE */
  .contact-hero{
    background: linear-gradient(120deg, rgba(33,37,41,0.92), rgba(0,0,0,0.55)),
      url("https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1600&q=80");
    background-size: cover;
    background-position: center;
    border-radius: 22px;
    padding: 55px 28px;
    color: #fff;
    position: relative;
    overflow: hidden;
    box-shadow: 0 18px 50px rgba(0,0,0,.18);
    margin-bottom: 25px;
    animation: fadeUp .6s ease;
  }

  .contact-hero::after{
    content:"";
    position:absolute;
    inset:0;
    background: radial-gradient(circle at top right, rgba(255,193,7,.18), transparent 55%);
    pointer-events:none;
  }

  .contact-title{
    font-size: clamp(1.6rem, 2.2vw, 2.4rem);
    font-weight: 900;
    margin-bottom: 8px;
  }

  .contact-sub{
    color: rgba(255,255,255,.85);
    max-width: 700px;
    margin: 0;
  }

  .glass-card{
    border-radius: 22px;
    border: 1px solid rgba(0,0,0,.06);
    box-shadow: 0 16px 40px rgba(0,0,0,.10);
    overflow: hidden;
    animation: fadeUp .7s ease;
  }

  @keyframes fadeUp{
    from{opacity:0; transform: translateY(12px);}
    to{opacity:1; transform: translateY(0);}
  }

  .glass-card .card-header{
    background: rgba(255,193,7,.12);
    border-bottom: 1px solid rgba(0,0,0,.06);
    padding: 16px 18px;
    font-weight: 900;
  }

  .form-control{
    border-radius: 14px;
    padding: 12px 14px;
    border: 1px solid rgba(0,0,0,.08);
    transition: all .2s ease;
  }

  .form-control:focus{
    border-color: rgba(255,193,7,.9);
    box-shadow: 0 0 0 0.25rem rgba(255,193,7,.18);
  }

  .soft-label{
    font-weight: 800;
    font-size: .85rem;
    color: #495057;
    margin-bottom: 6px;
  }

  .btn-wa{
    border-radius: 16px;
    padding: 14px 16px;
    font-weight: 900;
    box-shadow: 0 14px 30px rgba(255,193,7,.35);
    transition: transform .2s ease;
  }

  .btn-wa:hover{
    transform: translateY(-2px);
  }

  .info-box{
    display:flex;
    gap:12px;
    padding: 12px 14px;
    border-radius: 18px;
    border: 1px solid rgba(0,0,0,.06);
    background: #fff;
    align-items:flex-start;
    transition: transform .2s ease;
  }

  .info-box:hover{
    transform: translateY(-2px);
  }

  .info-icon{
    width: 42px;
    height: 42px;
    border-radius: 14px;
    display:grid;
    place-items:center;
    background: rgba(255,193,7,.18);
    font-size: 20px;
  }

  .info-text h6{
    margin: 0;
    font-weight: 900;
  }

  .info-text p{
    margin: 3px 0 0 0;
    color:#6c757d;
    font-weight: 600;
    font-size: .92rem;
  }

  .map-wrap{
    border-radius: 18px;
    overflow:hidden;
    border: 1px solid rgba(0,0,0,.06);
    box-shadow: 0 12px 30px rgba(0,0,0,.08);
  }

  .mini-note{
    font-size: .85rem;
    color:#6c757d;
    margin-top: 10px;
  }

  .badge-soft{
    display:inline-flex;
    align-items:center;
    gap:8px;
    padding: 10px 12px;
    border-radius: 999px;
    border: 1px solid rgba(25,135,84,.25);
    background: rgba(25,135,84,.08);
    color: #146c43;
    font-weight: 800;
    font-size: .85rem;
  }
</style>

{{-- HERO --}}
<div class="contact-hero">
  <span class="badge bg-warning text-dark fw-bold px-3 py-2 rounded-pill">📩 Contact Center</span>
  <h1 class="contact-title mt-3">Hubungi TravelGo</h1>
  <p class="contact-sub">
    Punya pertanyaan soal destinasi, harga paket, atau jadwal keberangkatan?
    Kirim pesan sekarang, admin kami akan balas via WhatsApp.
  </p>
</div>

<div class="row g-4">

  {{-- FORM CONTACT --}}
  <div class="col-lg-6">
    <div class="card glass-card">
      <div class="card-header">
        ✨ Kirim Pesan Cepat
      </div>

      <div class="card-body p-4">
        <form onsubmit="sendToWhatsApp(event)">

          <div class="mb-3">
            <label class="soft-label">Nama</label>
            <input type="text" id="nama" class="form-control" placeholder="Nama lengkap kamu" required>
          </div>

          <div class="mb-3">
            <label class="soft-label">Email</label>
            <input type="email" id="email" class="form-control" placeholder="email@example.com" required>
          </div>

          <div class="mb-3">
            <label class="soft-label">Pesan</label>
            <textarea id="pesan" class="form-control" rows="5"
              placeholder="Contoh: Halo admin, saya mau tanya paket Bali 3D2N untuk 2 orang..."
              required></textarea>
          </div>

          <div class="d-flex flex-wrap gap-2 align-items-center justify-content-between">
            <span class="badge-soft">✅ Respon cepat 24/7</span>

            <button type="submit" class="btn btn-warning btn-wa px-4">
              💬 Kirim ke WhatsApp
            </button>
          </div>

          <p class="mini-note">
            Data yang kamu kirim akan otomatis masuk ke WhatsApp admin TravelGo.
          </p>

        </form>
      </div>
    </div>
  </div>

  {{-- INFO + MAP --}}
  <div class="col-lg-6">
    <div class="card glass-card h-100">
      <div class="card-header">
        📍 Info TravelGo
      </div>

      <div class="card-body p-4">

        <div class="row g-3 mb-3">
          <div class="col-12">
            <div class="info-box">
              <div class="info-icon">🏢</div>
              <div class="info-text">
                <h6>Alamat Kantor</h6>
                <p>Jakarta, Indonesia</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-box">
              <div class="info-icon">📞</div>
              <div class="info-text">
                <h6>Telepon</h6>
                <p>0812-3456-7890</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-box">
              <div class="info-icon">✉️</div>
              <div class="info-text">
                <h6>Email</h6>
                <p>info@travelgo.id</p>
              </div>
            </div>
          </div>
        </div>

        <div class="map-wrap">
          <iframe
            src="https://maps.google.com/maps?q=jakarta&t=&z=13&ie=UTF8&iwloc=&output=embed"
            width="100%" height="260"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">
          </iframe>
        </div>

        <div class="d-grid mt-3">
          <a href="/booking" class="btn btn-dark rounded-4 py-3 fw-bold">
            🚀 Booking Sekarang
          </a>
        </div>

      </div>
    </div>
  </div>

</div>

<script>
function sendToWhatsApp(e) {
  e.preventDefault();

  const nama = document.getElementById("nama").value.trim();
  const email = document.getElementById("email").value.trim();
  const pesan = document.getElementById("pesan").value.trim();

  const noAdmin = "6285780255134";

  const text =
    `Halo Admin TravelGo,%0A%0A` +
    `Saya ingin menghubungi Anda:%0A` +
    `Nama: ${encodeURIComponent(nama)}%0A` +
    `Email: ${encodeURIComponent(email)}%0A` +
    `Pesan: ${encodeURIComponent(pesan)}`;

  const url = `https://wa.me/${noAdmin}?text=${text}`;

  window.open(url, "_blank");

  // redirect balik ke beranda setelah 1 detik
  setTimeout(() => {
    window.location.href = "/beranda";
  }, 1000);
}
</script>

@endsection
