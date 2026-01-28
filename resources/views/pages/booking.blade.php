@extends('layout.master')

@section('konten')

<style>
  /* Booking Page Styling */
  .booking-hero{
    background: linear-gradient(120deg, rgba(33,37,41,0.92), rgba(0,0,0,0.55)),
      url("https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?auto=format&fit=crop&w=1600&q=80");
    background-size: cover;
    background-position: center;
    border-radius: 22px;
    padding: 55px 28px;
    color: #fff;
    position: relative;
    overflow: hidden;
    box-shadow: 0 18px 50px rgba(0,0,0,.18);
  }

  .booking-hero::after{
    content:"";
    position:absolute;
    inset:0;
    background: radial-gradient(circle at top right, rgba(255,193,7,.18), transparent 55%);
    pointer-events:none;
  }

  .hero-badge{
    display:inline-flex;
    align-items:center;
    gap:10px;
    padding:10px 14px;
    border-radius:999px;
    background: rgba(255,255,255,.12);
    border: 1px solid rgba(255,255,255,.18);
    backdrop-filter: blur(10px);
    font-weight: 700;
    font-size: .9rem;
  }

  .hero-title{
    font-size: clamp(1.6rem, 2.2vw, 2.4rem);
    font-weight: 900;
    margin-top: 14px;
    margin-bottom: 10px;
  }

  .hero-sub{
    color: rgba(255,255,255,.85);
    max-width: 650px;
    margin-bottom: 0;
  }

  .booking-card{
    border: 1px solid rgba(0,0,0,.06);
    border-radius: 22px;
    overflow: hidden;
    box-shadow: 0 16px 40px rgba(0,0,0,.10);
    animation: fadeUp .6s ease;
  }

  @keyframes fadeUp{
    from{opacity:0; transform: translateY(12px);}
    to{opacity:1; transform: translateY(0);}
  }

  .booking-card .card-header{
    background: rgba(255,193,7,.12);
    border-bottom: 1px solid rgba(0,0,0,.06);
    padding: 16px 18px;
  }

  .stepper{
    display:flex;
    gap:12px;
    flex-wrap: wrap;
  }

  .step{
    display:flex;
    align-items:center;
    gap:10px;
    padding:10px 14px;
    border-radius: 16px;
    background: #fff;
    border: 1px solid rgba(0,0,0,.06);
    font-weight: 800;
    font-size: .9rem;
  }

  .step .dot{
    width: 30px;
    height: 30px;
    border-radius: 999px;
    display:grid;
    place-items:center;
    background: rgba(255,193,7,.18);
    color: #856404;
    font-weight: 900;
  }

  .form-control, .form-select{
    border-radius: 14px;
    padding: 12px 14px;
    border: 1px solid rgba(0,0,0,.08);
    transition: all .2s ease;
  }

  .form-control:focus, .form-select:focus{
    border-color: rgba(255,193,7,.9);
    box-shadow: 0 0 0 0.25rem rgba(255,193,7,.18);
  }

  .soft-label{
    font-weight: 800;
    font-size: .85rem;
    color: #495057;
    margin-bottom: 6px;
  }

  .summary-card{
    border-radius: 22px;
    border: 1px solid rgba(0,0,0,.06);
    box-shadow: 0 14px 35px rgba(0,0,0,.08);
    position: sticky;
    top: 120px; /* aman buat navbar fixed */
    animation: fadeUp .6s ease;
  }

  .summary-top{
    background: linear-gradient(120deg, rgba(255,193,7,.25), rgba(255,255,255,.7));
    border-bottom: 1px solid rgba(0,0,0,.06);
    padding: 18px;
  }

  .summary-title{
    font-weight: 900;
    margin: 0;
  }

  .summary-sub{
    color:#6c757d;
    margin: 6px 0 0 0;
    font-size: .9rem;
  }

  .summary-body{
    padding: 18px;
  }

  .summary-item{
    display:flex;
    justify-content: space-between;
    align-items:center;
    padding: 10px 0;
    border-bottom: 1px dashed rgba(0,0,0,.12);
    font-weight: 700;
    color:#343a40;
  }

  .summary-item:last-child{
    border-bottom: none;
  }

  .summary-item span{
    color:#6c757d;
    font-weight: 700;
  }

  .btn-book{
    border-radius: 16px;
    padding: 14px 16px;
    font-weight: 900;
    box-shadow: 0 14px 30px rgba(255,193,7,.35);
    transition: transform .2s ease;
  }

  .btn-book:hover{
    transform: translateY(-2px);
  }

  .mini-note{
    font-size: .85rem;
    color:#6c757d;
    margin-top: 10px;
  }

  .promo-pill{
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
<div class="booking-hero mb-4">
  <div class="hero-badge">
    ✨ TravelGo Premium Booking
    <span class="badge bg-warning text-dark">Fast</span>
    <span class="badge bg-success">Secure</span>
  </div>

  <h1 class="hero-title">Booking Paket Tour Sekarang</h1>
  <p class="hero-sub">
    Isi data kamu, pilih destinasi & tanggal, lalu konfirmasi.
    Proses cepat dan rapi — cocok buat user yang mau booking tanpa ribet.
  </p>
</div>

<div class="row g-4">
  {{-- FORM --}}
  <div class="col-lg-8">

    <div class="card booking-card">
      <div class="card-header">
        <div class="stepper">
          <div class="step"><div class="dot">1</div> Data Pemesan</div>
          <div class="step"><div class="dot">2</div> Detail Trip</div>
          <div class="step"><div class="dot">3</div> Konfirmasi</div>
        </div>
      </div>

      <div class="card-body p-4">

        <form id="bookingForm" action="#" method="POST">
          @csrf

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="soft-label">Nama Lengkap</label>
              <input id="nama" name="nama" type="text" class="form-control" placeholder="Contoh: Budi Santoso" required>
            </div>

            <div class="col-md-6 mb-3">
              <label class="soft-label">Email</label>
              <input id="email" name="email" type="email" class="form-control" placeholder="contoh@email.com" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="soft-label">No. Telepon / WhatsApp</label>
              <input id="telp" name="telp" type="tel" class="form-control" placeholder="08xxxxxxxxxx" required>
            </div>

            <div class="col-md-6 mb-3">
              <label class="soft-label">Destinasi</label>
              <input id="destinasi" name="destinasi" type="text" class="form-control"
              placeholder="Contoh: Bali / Tokyo / Singapore / Korea Selatan" required>

            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="soft-label">Tanggal Berangkat (Check-in)</label>
              <input id="checkin" name="checkin" type="date" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
              <label class="soft-label">Tanggal Pulang (Check-out)</label>
              <input id="checkout" name="checkout" type="date" class="form-control" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="soft-label">Jumlah Orang</label>
              <input id="orang" name="orang" type="number" class="form-control" min="1" value="1" required>
            </div>

            <div class="col-md-6 mb-3">
              <label class="soft-label">Tipe Paket</label>
              <select id="paket" name="paket" class="form-select" required>
                <option value="Standard" selected>Standard</option>
                <option value="Premium">Premium</option>
                <option value="Honeymoon">Honeymoon</option>
                <option value="Family Trip">Family Trip</option>
              </select>
            </div>
          </div>

          <div class="mb-3">
            <label class="soft-label">Catatan Tambahan</label>
            <textarea id="catatan" name="catatan" class="form-control" rows="3"
              placeholder="Contoh: Request hotel dekat pantai, vegetarian, dll..."></textarea>
          </div>

                  {{-- MAP SATELLITE --}}
        <div class="mt-4">
          <label class="soft-label">Preview Lokasi (Satelit)</label>

          <div class="card border-0 shadow-sm" style="border-radius: 18px; overflow:hidden;">
            <iframe
              id="mapFrame"
              width="100%"
              height="320"
              style="border:0;"
              loading="lazy"
              allowfullscreen
              src="https://maps.google.com/maps?q=Bali&t=k&z=13&ie=UTF8&iwloc=&output=embed">
            </iframe>
          </div>

          <small class="mini-note">
            Map akan otomatis mengikuti destinasi yang kamu isi.
          </small>
        </div>
        {{-- end --}}

          {{-- <script>
            // Update map berdasarkan destinasi
            document.getElementById("destinasi").addEventListener("input", function(){
              const dest = this.value || "Bali";
              const mapSrc = `https://maps.google.com/maps?q=${encodeURIComponent(dest)}&t=k&z=13&ie=UTF8&iwloc=&output=embed`;
              document.getElementById("mapFrame").src = mapSrc;
            }); --}}

          <div class="d-flex flex-wrap gap-2 align-items-center justify-content-between mt-4">
            <div class="promo-pill">
              ✅ Gratis Konsultasi & Rekomendasi Itinerary
            </div>

            <button type="submit" class="btn btn-warning btn-book px-4">
              🚀 Submit Booking
            </button>
          </div>

          <p class="mini-note">
            Dengan klik <b>Submit Booking</b>, kamu setuju data digunakan untuk proses booking & konfirmasi admin.
          </p>
        </form>

      </div>
    </div>

  </div>

  {{-- SUMMARY --}}
  <div class="col-lg-4">
    <div class="card summary-card">
      <div class="summary-top">
        <h5 class="summary-title">Ringkasan Booking</h5>
        <p class="summary-sub">Cek detail sebelum submit</p>
      </div>

      <div class="summary-body">
        <div class="summary-item">
          <div>Destinasi</div>
          <span id="sumDestinasi">-</span>
        </div>

        <div class="summary-item">
          <div>Check-in</div>
          <span id="sumCheckin">-</span>
        </div>

        <div class="summary-item">
          <div>Check-out</div>
          <span id="sumCheckout">-</span>
        </div>

        <div class="summary-item">
          <div>Orang</div>
          <span id="sumOrang">1</span>
        </div>

        <div class="summary-item">
          <div>Paket</div>
          <span id="sumPaket">Standard</span>
        </div>

        <hr>

        <div class="d-grid gap-2">
          <a href="/beranda" class="btn btn-outline-dark rounded-4">
            ⬅ Kembali
          </a>

          <button type="button" class="btn btn-dark rounded-4" onclick="scrollToForm()">
            ✍️ Edit Data
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // ====== Auto Fill dari Query Params (/booking?destinasi=...&checkin=...&checkout=...&orang=...)
  const params = new URLSearchParams(window.location.search);

  const qDestinasi = params.get("destinasi");
  const qCheckin = params.get("checkin");
  const qCheckout = params.get("checkout");
  const qOrang = params.get("orang");

  if(qDestinasi) document.getElementById("destinasi").value = qDestinasi;
  if(qCheckin) document.getElementById("checkin").value = qCheckin;
  if(qCheckout) document.getElementById("checkout").value = qCheckout;
  if(qOrang) document.getElementById("orang").value = qOrang;

  // ====== Summary Live Update
  const elDestinasi = document.getElementById("destinasi");
  const elCheckin = document.getElementById("checkin");
  const elCheckout = document.getElementById("checkout");
  const elOrang = document.getElementById("orang");
  const elPaket = document.getElementById("paket");

  function updateSummary(){
    document.getElementById("sumDestinasi").innerText = elDestinasi.value || "-";
    document.getElementById("sumCheckin").innerText = elCheckin.value || "-";
    document.getElementById("sumCheckout").innerText = elCheckout.value || "-";
    document.getElementById("sumOrang").innerText = elOrang.value || "1";
    document.getElementById("sumPaket").innerText = elPaket.value || "Standard";
  }

  [elDestinasi, elCheckin, elCheckout, elOrang, elPaket].forEach(el=>{
    el.addEventListener("input", updateSummary);
    el.addEventListener("change", updateSummary);
  });

  updateSummary();

  // ====== Validasi tanggal (checkout tidak boleh sebelum checkin)
  elCheckin.addEventListener("change", ()=>{
    if(elCheckout.value && elCheckout.value < elCheckin.value){
      elCheckout.value = "";
    }
    elCheckout.min = elCheckin.value;
    updateSummary();
  });

  function scrollToForm(){
    window.scrollTo({ top: 0, behavior: "smooth" });
  }

  // ====== Google Maps Satellite Auto Update
  const mapFrame = document.getElementById("mapFrame");

  function updateMap(){
    const destinasi = elDestinasi.value.trim();

    if(destinasi.length < 2){
      mapFrame.src = "https://maps.google.com/maps?q=Bali&t=k&z=13&ie=UTF8&iwloc=&output=embed";
      return;
    }

    const url = `https://maps.google.com/maps?q=${encodeURIComponent(destinasi)}&t=k&z=13&ie=UTF8&iwloc=&output=embed`;
    mapFrame.src = url;
  }

  elDestinasi.addEventListener("input", ()=>{
    clearTimeout(window.mapTimer);
    window.mapTimer = setTimeout(updateMap, 600);
  });

  window.addEventListener("load", ()=>{
    updateMap();
  });

  // ====== Demo submit (nanti bisa kamu sambung ke WhatsApp/admin)
  document.getElementById("bookingForm").addEventListener("submit", function(e){
    e.preventDefault();
    alert("Booking kamu berhasil dikirim! Admin akan menghubungi kamu via WhatsApp 😊");
  });
</script>


@endsection
