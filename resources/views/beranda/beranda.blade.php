@extends('layout.layout')

@section ('header')
navbar Beranda
@endsection

@section ('lainnya.content')
<div id="content">
    <main class="col-md-8">
<h2>Selamat Datang di Program Studi Informatika</h2>
<p>Program Studi Informatika merupakan salah satu bidang unggulan yang berfokus pada penguasaan teknologi informasi dan pengembangan solusi digital untuk menjawab kebutuhan masyarakat modern. Melalui pendidikan yang terarah dan inovatif, program ini bertujuan mencetak generasi muda yang cerdas, kreatif, serta siap bersaing di era transformasi digital.</p>

<p>Mahasiswa Informatika akan mempelajari berbagai disiplin ilmu, mulai dari pemrograman, basis data, jaringan komputer, keamanan siber, hingga kecerdasan buatan dan analisis data. Selain itu, mahasiswa juga dilatih untuk berpikir kritis, bekerja kolaboratif, dan mengembangkan inovasi berbasis teknologi yang memiliki dampak nyata.</p>

<p>Dengan dukungan tenaga pengajar profesional dan fasilitas laboratorium modern, Program Studi Informatika terus berkomitmen menciptakan lingkungan belajar yang interaktif dan relevan dengan perkembangan industri. Kami percaya bahwa teknologi bukan hanya alat, tetapi juga jembatan menuju masa depan yang lebih baik.</p>

<p>Bergabunglah bersama kami dan jadilah bagian dari generasi Informatika yang berperan aktif dalam membangun masyarakat digital yang cerdas, aman, dan berkelanjutan.</p>
    </main>
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
footer
@endsection