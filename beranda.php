<?php
  include "inc/koneksi.php";
   
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda</title>
    <link href="dist/css/final.css" rel="stylesheet" />
    <script>
      if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
      } else {
        document.documentElement.classList.remove('dark');
      }
    </script>
  </head>
  <body>
    <!-- Header Start -->
    <header class="absolute top-0 left-0 z-10 flex w-full items-center bg-transparent">
      <div class="container">
        <div class="relative flex items-center justify-between">
          <div class="px-4">
            <a href="#home" class="mt-1 block py-6 text-lg font-bold text-dark dark:text-white">Sitabal</a>
          </div>
          <div class="flex items-center px-4">
            <button id="hamburger" name="hamburger" type="button" class="absolute right-4 block lg:hidden">
              <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
              <span class="hamburger-line transition duration-300 ease-in-out"></span>
              <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
            </button>

            <nav
              id="nav-menu"
              class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg dark:bg-dark dark:shadow-slate-500 lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none lg:dark:bg-transparent"
            >
              <ul class="block lg:flex">
                <li class="group">
                  <a href="#home" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Beranda</a>
                </li>
                <li class="group">
                  <a href="#about" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Profil Desa</a>
                </li>
                <li class="group">
                  <a href="#persyaratan" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Persyaratan</a>
                </li>
                  <a href="#contact" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Kontak</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Start -->
    <section id="home" class="pt-36 dark:bg-dark">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full self-center px-4 lg:w-1/2">
            <h1 class="text-base font-semibold text-secondary md:text-xl">Halo 👋, Selamat Datang di <span class="mt-1 block text-4xl font-bold text-dark dark:text-white lg:text-4xl">SITABAL</span></h1>
            <h2 class="mb-5 text-lg font-medium text-secondary lg:text-2xl">Sistem Informasi Talang Bakung</h2>
            <a href="login.php" class="rounded-full bg-primary py-3 px-8 text-base font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg">Login</a>
          </div>
          <div class="w-full self-end px-4 lg:w-1/2">
            <div class="relative mt-10 lg:right-0 lg:mt-9">
              <img src="dist/img/jambi.png" alt="Logo Cinema" class="relative z-10 mx-auto" />
              <span class="absolute bottom-0 left-1/2 -translate-x-1/2 md:scale-125">
                <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                  <path
                    fill="#14b8a6"
                    d="M47.4,-51C59.2,-35.6,65.1,-17.8,63.4,-1.7C61.7,14.5,52.6,28.9,40.8,36.6C28.9,44.2,14.5,45,-2,47C-18.4,49,-36.8,52.1,-45.4,44.5C-53.9,36.8,-52.5,18.4,-51.2,1.3C-49.9,-15.8,-48.7,-31.7,-40.2,-47.1C-31.7,-62.4,-15.8,-77.3,1,-78.3C17.8,-79.2,35.6,-66.3,47.4,-51Z"
                    transform="translate(100 100) scale(1.0.8)"
                  />
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section id="about" class="bg-slate-100 pt-36 pb-16 dark:bg-slate-800">
      <div class="container">
        <div class="w-full px-4">
          <div class="mx-auto mb-16 max-w-xl text-center">
            <h4 class="mb-2 text-lg font-semibold text-primary">Profil Desa</h4>
             <p class="text-md font-medium text-secondary md:text-lg">
            Kelurahan talang bakung ini berdiri pada tahun 1970 talang bakung pecahan dari kelurahan pasir putih dan kenapa di sebut kelurahan talang bakung karena dahulu sebelum menjadi kelurahan talang bakung masih menjadi kampung paal merah dimana kampung tersebut banyak pohon bakung maka di saat sekarang ini menjadi nama kelurahan talang bakung.</p>
          </div>
        </div>
    <section id="about" class="pt-36 pb-32 dark:bg-dark">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="mb-10 w-full px-4 lg:w-1/2">
            <h4 class="mb-2 text-lg font-semibold text-primary">.</h4>
            <h2 class="mb-5 max-w-md text-3xl font-bold text-dark dark:text-white lg:text-4xl">Visi</h2>
            <p class="max-w-xl text-base font-medium text-secondary lg:text-lg">Menjadikan pemerintahan Kelurahan Talang Bakung dapat mengayomi dan memberikan pelayanan prima, efektif dan efisien kepada masyarakat.</div>
          <div class="w-full px-4 lg:w-1/2">
            <h3 class="mb-4 text-2xl font-semibold text-dark dark:text-white lg:pt-10 lg:text-3xl">Misi</h3>
            <p class="mb-6 text-base font-medium text-secondary lg:text-lg">1.	Meningkatkan profesionalisme dan kualitas Aparatur Kelurahan dalam memberikan pelayanan prima kepada masyarakat sesuai dengan prosedur dan Peraturan perUndang-Undang yang berlaku.</p>
<p class="mb-6 text-base font-medium text-secondary lg:text-lg">2.	Meningkatkan peran aktif masyarakat untuk memajukan pembangunan wilayah Kelurahan Talang Bakung dalam segala bidang.
</p>
            


            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Persyaratan Section Start -->
    <section id="persyaratan" class="bg-slate-100 pt-36 pb-16 dark:bg-slate-800">
      <div class="container">
        <div class="w-full px-4">
          <div class="mx-auto mb-16 max-w-xl text-center">
            <h4 class="mb-2 text-lg font-semibold text-primary">Persyaratan Pembuatan Surat</h4>
            
          </div>
        </div>

        <div class="flex w-full flex-wrap justify-center px-4 xl:mx-auto xl:w-10/12">
          <div class="mb-12 p-4 md:w-1/2">
            <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Pembuatan Kartu Keluarga</h3>
            <div class="overflow-hidden rounded-md shadow-md">
              <img src="dist/img/pembuatan kk.png" alt="Landing Page" width="w-full" />
            </div>
          </div>

          <div class="mb-12 p-4 md:w-1/2">
            <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Pembuatan KTP</h3>
            <div class="overflow-hidden rounded-md shadow-md">
              <img src="dist/img/pembuatan ktp.png" alt="E-Commerce" width="w-full" />
            </div>
          </div>
          
          <div class="mb-12 p-4 md:w-1/2">
            <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Pembuatan Surat Pindah</h3>
            <div class="overflow-hidden rounded-md shadow-md">
              <img src="dist/img/surat pindah.png" alt="Landing Page" width="w-full" />
            </div>
          </div>

          <div class="mb-12 p-4 md:w-1/2">
            <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Pembuatan Surat Keterangan Tidak Mampu</h3>
            <div class="overflow-hidden rounded-md shadow-md">
              <img src="dist/img/sktm.png" alt="E-Commerce" width="w-full" />
            </div>
          </div>

          <div class="mb-12 p-4 md:w-1/2">
            <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Pembuatan Surat Keterangan Nikah / N1</h3>
            <div class="overflow-hidden rounded-md shadow-md">
              <img src="dist/img/n1.png" alt="Landing Page" width="w-full" />
            </div>
          </div>

          <div class="mb-12 p-4 md:w-1/2">
            <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Pembuatan Surat Keterangan Izin Usaha / IUMK</h3>
            <div class="overflow-hidden rounded-md shadow-md">
              <img src="dist/img/umk.png" alt="E-Commerce" width="w-full" />
            </div>
          </div>

          </div>
        </div>
      </div>
    </section>
    <!-- Persyaratan Section End -->

  

    
    <!-- Contact Section Start -->
    <section id="contact" class="pt-36 pb-32 dark:bg-slate-800">
      <div class="container">
        <div class="w-full px-4">
          <div class="mx-auto mb-16 max-w-xl text-center">
            <h4 class="mb-2 text-lg font-semibold text-primary">Kontak</h4>
            <h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-5xl">Hubungi Kami</h2>
            <p class="text-md font-medium text-secondary md:text-lg"> </p>
          </div>
        </div>

        <form>
          <div class="w-full lg:mx-auto lg:w-2/3">
            <div class="mb-8 w-full px-4">
              <label for="name" class="text-base font-bold text-primary">Nama</label>
              <input type="text" id="name" class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" />
            </div>
            <div class="mb-8 w-full px-4">
              <label for="email" class="text-base font-bold text-primary">Email</label>
              <input type="email" id="email" class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" />
            </div>
            <div class="mb-8 w-full px-4">
              <label for="message" class="text-base font-bold text-primary">Pesan</label>
              <textarea type="email" id="email" class="h-32 w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary"></textarea>
            </div>
            <div class="w-full px-4">
              <button class="w-full rounded-full bg-primary py-3 px-8 text-base font-semibold text-white transition duration-500 hover:opacity-80 hover:shadow-lg">Kirim</button>
            </div>
          </div>
        </form>
      </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Start -->
    <footer class="bg-dark pt-24 pb-12">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="mb-12 w-full px-4 font-medium text-slate-300 md:w-1/3">
            <h3 class="mb-2 text-2xl font-bold">Hubungi Kami</h3>
            <p>sitalangbakung@gmail.com</p>
            <p>Whatsapp : 085764345234</p>
            <p>Alamat : Jl. Sultan Syahrir No. 84, Talang Bakung, Kecamatan Jambi Selatan, Kota Jambi, Jambi 36136</p>
          </div>

          <div class="mb-12 w-full px-4 md:w-1/3">
            <h3 class="mb-5 text-xl font-semibold text-white">Tautan</h3>
            <ul class="text-slate-300">
              <li>
                <a href="#home" class="mb-3 inline-block text-base hover:text-primary">Beranda</a>
              </li>
              <li>
                <a href="#about" class="mb-3 inline-block text-base hover:text-primary">Profil Desa</a>
              </li>
                <a href="#portfolio" class="mb-3 inline-block text-base hover:text-primary">Persyaratan Pembuatan Surat</a>
              </li>
              <li>
                <a href="#contact" class="mb-3 inline-block text-base hover:text-primary">Kontak</a>
              </li>
            </ul>
          </div>
        </div>

        
    </footer>
    <!-- Footer End -->

    <!-- Back to top Start -->
    <a href="#home" class="fixed bottom-4 right-4 z-[9999] hidden h-14 w-14 items-center justify-center rounded-full bg-primary p-4 hover:animate-pulse" id="to-top">
      <span class="mt-2 block h-5 w-5 rotate-45 border-t-2 border-l-2"></span>
    </a>
    <!-- Back to top End -->

    <script src="dist/js/script.js"></script>
  </body>
</html>
