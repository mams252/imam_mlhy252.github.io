<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IMAM - Personal Portfolio</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/LOGO.png" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="./assets/images/new profil.jpg" alt="Imam" width="85">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Imam">Imam</h1>

          <p class="title">Web developer</p>
          <p class="title">Marketing</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a class="contact-link">irasta252@gmsil.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="tel:+6285714942554" class="contact-link">085714952554</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="10,05,2000">10 may, 2000

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>jln,raibowhils, kp pasirkaret, Cijayanti, Kec. Babakan Madang, Kabupaten Bogor, Jawa Barat 16810, indonesia</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          <li class="social-item">
            <a href="https://web.facebook.com/mam.imammlhy" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://www.instagram.com/mlhy_imam/" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </aside>





    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <nav class="navbar">

        <ul class="navbar-list">

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>About</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Resume</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Portfolio</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Contact</button>
          </li>

        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="about">

        <header>
          <h2 class="h2 article-title">About me</h2>
        </header>
        <section class="about-text">

            <p>
                  Kehidupan membawa saya pada situasi di mana saya terpaksa berhenti sekolah di kelas dua SMK.
                  Meski begitu, saya tidak menyerah dengan keadaan. Saya memutuskan untuk bekerja di industri sistem operasi selama satu tahun,
                  namun pada tahun 2017, saya merasa perlu mengubah arah karier saya dan mengeksplorasi bidang lain.
            </p>
            <p>
                  Kemudian, kesempatan membawa saya ke dunia hotel. Saya memulai karier sebagai housekeeping,
                  di mana saya tidak hanya belajar banyak hal tetapi juga berinteraksi dengan berbagai orang. Pada tahun 2019,
                  saya memutuskan untuk bergabung dengan industri pemasaran jaringan. Selama dua tahun,
                  saya mengabdikan diri saya dalam bidang ini dan mencapai beberapa pencapaian yang membanggakan.
            </p>
            <p>
              Namun, hasrat saya terus berkembang dan pada tahun 2022, saya tertarik untuk terlibat dalam pengembangan web dan situs web.
              Saya mulai mengikuti seminar dan pelatihan yang diadakan oleh teman-teman saya sendiri. Dari sinilah,
              saya mendapatkan pemahaman yang lebih dalam tentang bahasa pemrograman seperti PHP, JavaScript, dan CSS.
            </p>
            <p>
              Saya sangat antusias untuk terus belajar dan mengembangkan keterampilan saya di bidang pengembangan web.
              Saya berkomitmen untuk memberikan layanan yang berkualitas dan menciptakan pengalaman yang menakjubkan bagi klien saya.
            </p>
            <p>
              Saya percaya bahwa meskipun perjalanan saya tidak konvensional,
              semangat dan keinginan saya untuk berkembang akan membantu saya mencapai tujuan saya.
              Saya dengan tulus berharap dapat berkolaborasi dengan Anda dalam proyek-proyek masa depan yang menarik dan memberikan kontribusi positif bagi bisnis Anda.
            </p>
        </section> 
      


        <!--
          - service
        -->

        <section class="service">

          <h3 class="h3 service-title">What i'm doing</h3>

          <ul class="service-list">

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-design.svg
                " alt="design icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web design</h4>

                <p class="service-item-text">
                  Desain paling modern dan berkualitas tinggi dibuat pada tingkat profesional.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-dev.svg" alt="Web development icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web development</h4>

                <p class="service-item-text">
                  Pengembangan situs berkualitas tinggi di tingkat profesional.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon marketing.png" alt=" marketing" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">markrting</h4>

                <p class="service-item-text">
                  Pengembangan profesional marketing
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon freelanser.png" alt="freelancer" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">freelancer</h4>

                <p class="service-item-text">
                  Siap menerima tugas apapun itu
                </p>
              </div>

            </li>

          </ul>

        </section>


        <!--
          - testimonials
        -->

        <section class="testimonials">

          <h3 class="h3 testimonials-title">Testimonials</h3>

          <ul class="testimonials-list has-scrollbar">

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/testimoni1.png" alt="Daniel lewis" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Tiensi</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Imam dipekerjakan untuk menciptakan identitas perusahaan. Kami sangat senang dengan pekerjaan yang dilakukan.
                     Dia memiliki banyak pengalaman dan sangat memperhatikan kebutuhan klien.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/logo tips dokter sehat.jpg" alt="Jessica miller" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>tipsdoktersehst,id</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Hasilnya luar biasa! Situs web saya sekarang memiliki tampilan yang menarik, navigasi yang mudah, dan pengalaman pengguna yang baik.
                    Saya melihat peningkatan yang signifikan dalam lalu lintas situs web dan konversi penjualan sejak bekerja sama dengan Imam
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/testi deppes.png" alt="Emily evans" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Desa pelangi sentul</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Saya sangat terkesan dengan hasil yang dicapai. Melalui strategi pemasaran yang efektif yang
                     diterapkan oleh beliau, saya telah melihat peningkatan lalu lintas dan perhatian terhadap bisnis saya.
                      Mereka memiliki pemahaman yang mendalam tentang berbagai saluran pemasaran, termasuk media sosial, kampanye email, iklan online, dan SEO.
                     Mereka telah mengoptimalkan kehadiran online bisnis saya dan membantu meningkatkan brand awareness.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/f1.jpg" alt="Henry william" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Turben</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Selain itu, layanan pelanggan mereka sangat baik. Mereka sangat 
                    responsif dan siap membantu setiap kali saya memiliki pertanyaan atau membutuhkan bantuan teknis. 
                    Saya merasa didukung sepenuhnya oleh tim mereka dalam perjalanan saya untuk mengembangkan toko online saya
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </section>


        <!--
          - testimonials modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="80" data-modal-img>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>Imam</h4>

              <time datetime="2021-06-14">14 June, 2021</time>

              <div data-modal-text>
                <p>
                  Saya dengan tulus merekomendasikan WebDevelopment kepada siapa pun yang mencari jasa pengembangan web untuk toko online mereka.
                   Mereka adalah mitra yang andal dan terpercaya dalam menciptakan situs web yang mengesankan dan sukses dalam dunia bisnis online.
                </p>
              </div>

            </div>

          </section>

        </div>
      </article>


      <article class="resume" data-page="resume">

        <header>
          <h2 class="h2 article-title">Resume</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Education</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">PESRTA SEMINAR DAN PELATIHAN UNTUK MENINGKATKAN KETERAMPILAN DALAM BAHASA PEMROGRAMAN SEPERTI PHP, JAVASCRIPT, DAN CSS</h4>

              <span>2022-sekarang</span>

              <p class="timeline-text">
                Mengikuti seminar dan pelatihan pemrograman untuk meningkatkan keterampilan dalam bahasa pemrograman seperti PHP, JavaScript, dan CSS. 
                Aktif menciptakan karya-karya HTML dan mengembangkan proyek sebagai freelancer yang berhasil menghasilkan penghasilan tambahan.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Menjadi peserta workshop/seminar atau pelatihan tentang bisnis marketing</h4>

              <span>2021-2022</span>

              <p class="timeline-text">
                Mengikuti workshop intensif tentang pemasaran digital, 
                termasuk strategi media sosial, optimisasi mesin pencari, kampanye iklan online, dan analisis data. Belajar tentang alat dan teknik terbaru 
                dalam pemasaran digital dan memperoleh pemahaman praktis dalam mengimplementasikan strategi pemasaran digital yang efektif.
              </p>

            </li>

          </ol>

        </section>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">NOVOTEL JAKARTA GAJAH MADA - HOUSEKEEPING</h4>

              <span>2018-2019</span>

              <p class="timeline-text">
                Mampu membangun kerjasama yang baik antar tim, menunjukkan keahlian dalam berinteraksi dengan orang lain,
                 dan memiliki komitmen yang tinggi dalam menyelesaikan setiap tugas yang diberikan.
              </p>

              <li class="timeline-item">

                <h4 class="h4 timeline-item-title">Web designer-platfrom kesehatan</h4>
  
                <span>2020-2021</span>
  
                <p class="timeline-text">
                  Seorang profesional pemasaran dengan 
                  pengalaman dalam peran ganda sebagai Marketing dan Web Department di sebuah platform kesehatan, TipsDokterSehat.id.
                </p>
  
              </li>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">TIENS & NETWORK MARKETING</h4>

              <span>2021-2022</span>

              <p class="timeline-text">
                Berperan dalam meningkatkan omset perusahaan dengan membangun tim yang kuat dan efektif.
                 Mampu menawarkan produk Tiens secara offline,onlie
                memanfaatkan strategi pemasaran yang efisien untuk mencapai hasil yang memuaskan.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">WebDevelopment & Marketing</h4>

              <span>2022-2023</span>

              <p class="timeline-text">
                Seorang profesional pemasaran dengan pengalaman dalam peran ganda sebagai Marketing dan Web 
                Developer di sebuah platform toko komputer online,
                 Memiliki pengetahuan luas tentang strategi pemasaran, pengembangan situs web.
                  Mampu mengelola kampanye pemasaran secara efektif
              </p>

            </li>

          </ol>

        </section>

        <section class="skill">

          <h3 class="h3 skills-title">My skills</h3>

          <ul class="skills-list content-card">

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Web design</h5>
                <data value="70">70%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 80%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Graphic design</h5>
                <data value="70">70%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 70%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Marketing seo</h5>
                <data value="90">90%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 90%;"></div>
              </div>


            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">WebDevelopment</h5>
                <data value="80">80%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 50%;"></div>
              </div>

            </li>

          </ul>

        </section>

      </article>

      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="portfolio">

        <header>
          <h2 class="h2 article-title">Portfolio</h2>
        </header>

        <section class="projects">

          <ul class="filter-list">

            <li class="filter-item">
              <button class="active" data-filter-btn>All</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web design</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web development</button>
            </li>

          </ul>

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>All</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web design</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web development</button>
              </li>

            </ul>

          </div>

          <ul class="project-list">

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="./assets/web_demo/freng/index.html">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/prang.png" alt="finance" loading="lazy">
                </figure>

                <h3 class="project-title">portafoio jhon</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="./assets/web_demo/honey/index.html">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/honey.png" alt="orizon" loading="lazy">
                </figure>

                <h3 class="project-title">honey natural</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/tips_dokter.png" alt="fundo" loading="lazy">
                </figure>

                <h3 class="project-title">TipsDokterSehat</h3>

                <p class="project-category">Web Development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-5.png" alt="dsm." loading="lazy">
                </figure>

                <h3 class="project-title">DSM.</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-6.png" alt="metaspark" loading="lazy">
                </figure>

                <h3 class="project-title">MetaSpark</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-7.png" alt="summary" loading="lazy">
                </figure>

                <h3 class="project-title">Summary</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-8.jpg" alt="task manager" loading="lazy">
                </figure>

                <h3 class="project-title">Task Manager</h3>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-9.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Arrival</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

          </ul>

        </section>

      </article>

      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="contact">
        <header>
          <h2 class="h2 article-title">Contact</h2>
        </header>
        <section class="mapbox" data-mapbox>
          <figure>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.2954800516372!2d106.87767867437982!3d-6.610159893383817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c7c475385c2b%3A0xa6b049ff35d4cd41!2sJl.%20Pasir%20Karet%2C%20Cijayanti%2C%20Kec.%20Babakan%20Madang%2C%20Kabupaten%20Bogor%2C%20Jawa%20Barat%2016810!5e0!3m2!1sid!2sid!4v1689611557630!5m2!1sid!2sid"
              width="400" height="300" loading="lazy"></iframe>
          </figure>
        </section>

        <section class="contact-form">
          <h3 class="h3 form-title">Contact Form</h3>
          <form method="post" action="send email.php">
            <div class="row">
              <input type="text" name="name" class="form-input" placeholder="Full name" required data-form-input>
              <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
            </div>
            <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>
            <button class="form-btn" type="submit" data-form-btn>
              <ion-icon name="paper-plane"></ion-icon>
              <span>Send Message</span>
            </button>
          </form>
        </section>
        <section class="whatsapp-link">
          <h3 class="h3 whatsapp-title">Atau hubungi melalui : </h3>
          <a href="https://wa.me/6285714942554?" target="_blank" rel="noopener noreferrer">
              <img src="./assets/images/wa.png"class="whatsapp-icon" width="500">
          </a>
        </section>


      </article>
    </div>
  
    </main>
    <!--
      - custom js link
    -->
    <script src="./assets/js/script.js"></script>
  
    <!--
      - ionicon link
    -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  
  </body>
  
  </html>
        

     




      




