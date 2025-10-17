@extends('layout.layout')

@section('header')
navbar Pendidikan
@endsection

@section ('lainnya.content')
<div id="content">
<h1>Selamat Datang di Halaman Pendidikan</h1>
<h2>Program Pendidikan Informatika</h2>
<p>Program Studi Informatika dirancang untuk membekali mahasiswa dengan pengetahuan, keterampilan, dan sikap profesional dalam menghadapi tantangan dunia teknologi yang terus berkembang. Kurikulum disusun secara komprehensif, mencakup dasar-dasar ilmu komputer, pengembangan perangkat lunak, kecerdasan buatan, keamanan siber, serta analisis data.</p>

<p>Selama masa perkuliahan, mahasiswa tidak hanya mempelajari teori, tetapi juga terlibat dalam berbagai proyek praktikum, riset, dan kerja sama industri. Hal ini bertujuan agar mahasiswa mampu mengintegrasikan kemampuan teknis dengan kreativitas dan etika kerja yang tinggi.</p>

<p><strong>Lulusan Informatika</strong> diharapkan menjadi profesional yang adaptif, inovatif, dan siap bersaing di era digital. Mereka dapat berkarier sebagai <em>Software Engineer</em>, <em>Data Analyst</em>, <em>Cyber Security Specialist</em>, <em>AI Developer</em>, maupun <em>IT Consultant</em>. Selain itu, lulusan juga memiliki kemampuan untuk menjadi wirausaha di bidang teknologi dengan menciptakan solusi digital yang bermanfaat bagi masyarakat.</p>

<p>Dengan kombinasi pengetahuan akademik dan keterampilan praktis, lulusan Informatika akan menjadi individu yang mampu berkontribusi secara nyata dalam pengembangan teknologi informasi dan transformasi digital di berbagai sektor.</p>
</div>
@endsection

@section('lainnya.sidebar')
<div id="content">
    <!-- <div class="sidebar"> -->
    <aside class="col-md-4">
    <h3>Latest News</h3>
        <h4>New Website Launched</h4>
        <h5>January 1st, 2010</h5>
        <p>2010 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        <h3>Useful Links</h3>
        <ul>
          <li><a href="#">link 1</a></li>
          <li><a href="#">link 2</a></li>
          <li><a href="#">link 3</a></li>
          <li><a href="#">link 4</a></li>
        </ul>
        <h3>Search</h3>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
    </aside>
<!-- </div> -->
</div>
@endsection

@section ('footer')
footer Pendidikan
@endsection