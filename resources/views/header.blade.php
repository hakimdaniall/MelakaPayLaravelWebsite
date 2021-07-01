<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!-- <h1><a href="index.html">Appland</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/"><img src="assets/img/favicon.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Home</a></li>
          <li class="dropdown"><a href="/agencies"><span>Agencies</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li class="dropdown"><a href="#"><span>Pejabat Tanah & Galian</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ url('agency/ptgnm') }}">Pejabat Tanah & Galian Melaka</a></li>
                  <li><a href="{{ url('agency/pdtag') }}">Pejabat Daerah & Tanah Alor Gajah</a></li>
                  <li><a href="{{ url('agency/pdtmt') }}">Pejabat Daerah & Tanah Melaka Tengah</a></li>
                  <li><a href="{{ url('agency/pdtj') }}">Pejabat Daerah & Tanah Jasin</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Pihak Berkuasa Tempatan</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ url('agency/mbmb') }}">Majlis Bandaraya Melaka Bersejarah </a></li>
                  <li><a href="{{ url('agency/mpag') }}">Majlis Perbandaran Alor Gajah</a></li>
                  <li><a href="{{ url('agency/mphtj') }}">Majlis Perbandaran Hang Tuah Jaya </a></li>
                  <li><a href="{{ url('agency/mpj') }}">Majlis Perbandaran Jasin</a></li>
                </ul>
              </li>
              <li><a href="{{ url('agency/tapnm') }}">Tabung Amanah Pendidikan Negeri Melaka</a></li>
              <li><a href="{{ url('agency/zakatmelaka') }}">Zakat Melaka</a></li>
              <li><a href="{{ url('agency/samb') }}">Syarikat Air Melaka Berhad</a></li>
              <li><a href="{{ url('agency/ukt') }}">Unit Kerajaan Tempatan  (UKT)</a></li>
              <li><a href="{{ url('agency/bksa') }}">Badan Kawal Selia Air (BKSA)</a></li>
              <li><a href="{{ url('agency/lpm') }}">Lembaga Perumahan Melaka (LPM)</a></li>
              <li><a href="{{ url('agency/maim') }}">Majlis Agama Islam Melaka (MAIM)</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>User Manual</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="./assets/manual/general.pdf" target="_blank">General</a></li>
              <li><a href="./assets/manual/quitrent.pdf" target="_blank">Quit Rent</a></li>
              <li><a href="./assets/manual/cukaipetak.pdf" target="_blank">Cukai Petak</a></li>
              <li><a href="./assets/manual/cajwarisan.pdf" target="_blank">Caj Warisan</a></li>
              <li><a href="./assets/manual/mpj.pdf" target="_blank">MPJ</a></li>
              <li><a href="./assets/manual/bksa.pdf" target="_blank">BKSA</a></li>
              <li><a href="./assets/manual/lpm.pdf" target="_blank">LPM</a></li>
            </ul>
          </li>
          <li><a href="/faqs"> FAQS </a></li>
        
          <li><a href="/contact">Contact</a></li>
          <li><a class="getstarted" href="/register">Register</a></li>
          <li><a class="login" href="/login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
