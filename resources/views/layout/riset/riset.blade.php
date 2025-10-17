@extends('layout.layout')

@section ('header')
navbar Riset
@endsection

@section ('lainnya.content')
<div id="content">
<h2>Riset dan Inovasi di Bidang Informatika</h2>
<p>Program Studi Informatika aktif melakukan berbagai penelitian yang berfokus pada pengembangan teknologi informasi dan penerapannya dalam berbagai aspek kehidupan. Kegiatan riset ini bertujuan untuk menghasilkan solusi inovatif yang dapat menjawab tantangan era digital dan memberikan kontribusi nyata bagi masyarakat.</p>

<p>Bidang penelitian yang dikembangkan oleh dosen dan mahasiswa Informatika mencakup berbagai topik mutakhir, antara lain:</p>
<ul>
  <li><strong>Kecerdasan Buatan (Artificial Intelligence)</strong> – meliputi pembelajaran mesin, pengenalan pola, dan sistem cerdas untuk pengambilan keputusan otomatis.</li>
  <li><strong>Analisis Data dan Big Data</strong> – meneliti cara mengolah dan mengekstraksi informasi penting dari data dalam jumlah besar untuk mendukung kebijakan dan strategi bisnis.</li>
  <li><strong>Keamanan Siber (Cyber Security)</strong> – berfokus pada perlindungan data, jaringan, dan sistem dari ancaman digital serta pengembangan sistem keamanan berbasis enkripsi.</li>
  <li><strong>Internet of Things (IoT)</strong> – meneliti integrasi perangkat pintar yang saling terhubung untuk meningkatkan efisiensi di berbagai bidang seperti kesehatan, industri, dan pertanian.</li>
  <li><strong>Rekayasa Perangkat Lunak</strong> – mengembangkan metode dan teknologi untuk menciptakan aplikasi yang efisien, aman, dan mudah digunakan.</li>
  <li><strong>Teknologi Finansial (Financial Technology)</strong> – menerapkan prinsip informatika untuk menciptakan solusi digital dalam bidang keuangan, investasi, dan pasar modal.</li>
</ul>

<p>Melalui kegiatan riset tersebut, Program Studi Informatika berkomitmen untuk menciptakan ekosistem penelitian yang kolaboratif dan berorientasi pada kemajuan teknologi. Hasil penelitian diharapkan tidak hanya menjadi kontribusi akademik, tetapi juga bermanfaat bagi industri dan masyarakat luas.</p>
</div>
@endsection

@section('lainnya.sidebar')
<div id="content">
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
</div>
<!-- </div> -->
@endsection

@section ('footer')
footer Riset
@endsection