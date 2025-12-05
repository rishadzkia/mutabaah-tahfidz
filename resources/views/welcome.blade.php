<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mutabaah Tahfidz Internal</title> 
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> 
    <link  
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    /> 
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin /> 
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap"
      rel="stylesheet"
    /> 
    <style>  
      .font-satu {   
        font-family: "Lato", sans-serif;  
      } 
      .font-dua{  
        color: #216679; 
      }
    </style>
  </head>

  <body class="font-satu bg-[#bbe4e6]">
    <!-- NAV -->
    <nav class="bg-white/80 backdrop-blur-md shadow-md fixed w-full top-0 z-20">
      <div
        class="container mx-auto flex justify-between items-center py-4 px-6"
      >
        {{-- <img src="{{ asset('img/logo_mutabaah.png') }}" alt="" class="h-20" /> --}}
        <a href="#home" class="flex items-center space-x-2">
      <span class="text-2xl font-bold text-[#216679]">☪</span>
      <span class="text-xl font-semibold text-[#216679]">MutabaahQ</span>
    </a>
       

        <ul class="hidden md:flex space-x-6 font-semibold">
          <li>
            <a
              href="#beranda"
              class="hover:text-[#488d9f] text-[#216679] uppercase"
              >Beranda</a
            >
          </li>

          <li>
            <a
              href="{{ route('login') }}"
              class="uppercase border border-[#216679] text-[#216679] px-4 py-2 rounded-md hover:bg-[#216679] hover:text-white transition"
            >
              Masuk</a
            > 
          </li>
        </ul>
      </div>
    </nav>

    <!-- HERO -->
    <section
    id="home"
    class="relative h-screen bg-cover bg-center flex items-center justify-center text-white"
    style="background-image: url('{{ asset('img/quran-header.jpg') }}')"
>
    <!-- Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-b from-[#123c47]/80 via-[#144f5b]/70 to-[#216679]/80"></div>

    <!-- Content -->
    <div class="relative z-10 text-center px-6 max-w-3xl mx-auto animate-fadeIn">
        
        <!-- Logo (optional) -->
        {{-- <img src="{{ asset('img/logo_mutabaah.png') }}" alt="" class="w-28 mx-auto mb-6 drop-shadow-lg" /> --}}

        <h1 class="text-4xl md:text-6xl font-extrabold mb-4 tracking-wide drop-shadow-lg">
            ☪ Mutabaah<span class="text-[#a7e4ee]">Q</span>
        </h1>

        <p class="text-lg md:text-2xl mb-8 leading-relaxed text-gray-100 opacity-95">
            Solusi digital untuk pencatatan hafalan yang mudah, efisien,
            tanpa buku, dan mendukung digitalisasi tahfidz.
        </p>

        <a
            href="{{ route('register') }}"
            class="bg-[#7ab8c3] hover:bg-white hover:text-[#216679] transition-all duration-300 px-8 py-3 rounded-xl font-bold shadow-xl drop-shadow-lg hover:scale-105"
        >
            Ayo Bergabung!
        </a>
    </div>
</section>


    <!-- STOK -->
    <section
      id="stok"
      class="bg-gradient-to-b from-[#bbe4e6] to-[#f3f6f7] py-16"
    >
      <div class="px-4 max-w-6xl mx-auto">
        <h1
          class="text-[#216679] font-extrabold text-center text-3xl uppercase mb-10"
        >
          Fitur Unggulan
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- CARD TEMPLATE -->
          <div
            class="bg-white shadow-lg rounded-xl p-6 text-center border border-[#ceccc0]"
          >
            <img src="{{ asset('img/laporan_data.png') }}" class="mx-auto mb-4 rounded-lg w-44" />
            <h3 class="font-bold text-xl text-[#216679]">Export Laporan</h3>
            <p class="text-[#488d9f] mb-3">
              Unduh laporan hafalan dalam format PDF secara otomatis dan siap  
              dicetak 
            </p>
          </div>

          <div
            class="bg-white shadow-lg rounded-xl p-6 text-center border border-[#ceccc0]"
          >
            <img src="{{ asset('img/real-time.png') }}" class="mx-auto mb-4 rounded-lg w-44" />
            <h3 class="font-bold text-xl text-[#216679]">Jam Digital Real-Time</h3>
            <p class="text-[#488d9f] mb-3">Menampilkan waktu aktual secara live</p>
            
          </div>

          <div
            class="bg-white shadow-lg rounded-xl p-6 text-center border border-[#ceccc0]"
          >
            <img src="{{ asset('img/murottal_audio.png') }}" class="mx-auto mb-4 rounded-lg w-44" />
            <h3 class="font-bold text-xl text-[#216679]">Murottal Audio</h3>
            <p class="text-[#488d9f] mb-3">Murottal audio yang siap diputar kapan saja untuk mendukung hafalan siswa</p>
           
          </div>

       


       
        </div>
      </div>
    </section>

    <!-- UPDATE -->
   <section id="statistic" class="py-14 bg-gradient-to-b from-[#ffffff] to-[#ceccc0]">
  <div class="max-w-5xl mx-auto px-6">

    <!-- JUDUL & DESKRIPSI -->
    <div class="text-center mb-10">
      <h2 class="text-3xl font-bold text-[#216679]">Telah Digunakan di Berbagai Lembaga</h2>
      <p class="text-gray-700 mt-2 text-sm">
        Mutabaah Tahfidz membantu sekolah dan pesantren dalam mencatat, memantau, dan mengelola hafalan secara digital.
      </p>
    </div>

    <!-- STATISTIK -->
    <div class="grid grid-cols-1 sm:grid-cols-3 text-center gap-6">

      <div class="bg-white shadow-md rounded-xl py-6 border border-[#ffffff]">
        <p class="text-3xl font-bold text-[#216679]">3+</p>
        <small class="text-sm text-gray-600">SD</small>
      </div>

      <div class="bg-white shadow-md rounded-xl py-6 border border-[#ffffff]">
        <p class="text-3xl font-bold text-[#216679]">5+</p>
        <small class="text-sm text-gray-600">SMP/MTS/Pondok Pesantren</small>
      </div>

      <div class="bg-white shadow-md rounded-xl py-6 border border-[#ffffff]">
        <p class="text-3xl font-bold text-[#216679]">8+</p>
        <small class="text-sm text-gray-600">SMA/MA/Pondok Pesantren</small>
      </div>

    </div>

  </div>
</section>



     <section class="bg-[#ceccc0] p-24">
      <div class="bg-[#7ab8c3] rounded-md max-w-7xl mx-auto ">
        <div class="grid grid-cols-2 p-6 space-x-5">
          <div class="font-dua space-y-2">
            <h2 class="text-lg  font-semibold font-roboto fontOren">Butuh bantuan? Hubungi kami saja!</h2>
            <p class="font-roboto text-gray-600">Hubungi kami untuk informasi lain</p>
          </div>
          <div>
            <div class="font-dua items-center gap-3 space-y-2">
              <span class="fontOren font-semibold font-roboto"><i class=" fontIjo fa-solid fa-address-card"></i> Contact</span>
              <p class="text-gray-600">mutabaahQ@gmail.com</p>
            </div>
            <div class=" items-center gap-4 font-dua">
              <span class="fontOren font-semibold font-roboto"><i class="fontIjo fa-solid fa-location-dot"></i> Location</span>
              <p class="text-gray-600">Jatibening Baru, Pondok Gede, Bekasi, West Java, Indonesia</p>
            </div>
          </div>

        </div>
        <div>
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.937175279889!2d-74.0060150845933!3d40.7127759793307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQyJzQ2LjAiTiA3NMKwMDAnMjIuMCJX!5e0!3m2!1sen!2sus!4v1693649102340!5m2!1sen!2sus"
        width="80%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
        class="w-full p-10">
      </iframe>
    </div>
      </div>
     </section>
    <footer class="bg-gradient-to-b from-[#ceccc0] to-[#f3f6f7] font-dua font-satu  py-4">
      <div class="max-w-xl mx-auto px-4 text-center">
        <p>&copy; 2025 MutabaahQ. All rights reserved.</p>
      </div>

   
 


  </body>
</html>
