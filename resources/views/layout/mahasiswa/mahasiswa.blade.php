@extends('layout.layout')

@section('header')
navbar Mahasiswa
@endsection

@section ('lainnya.content')
<div id="content">
<h2>Halaman Mahasiswa</h2>
<p>Halaman ini dibuat khusus untuk para mahasiswa sebagai pusat informasi akademik dan kegiatan kampus. Melalui halaman ini, mahasiswa dapat mengakses berbagai fitur seperti jadwal kuliah, pengumuman terbaru, materi pembelajaran, serta informasi mengenai kegiatan organisasi dan lomba kampus.</p>

<p>Website ini dirancang agar mudah digunakan dan responsif di berbagai perangkat, sehingga mahasiswa dapat tetap terhubung kapan pun dan di mana pun. Selain itu, seluruh data mahasiswa dijaga kerahasiaannya sesuai dengan kebijakan privasi kampus.</p>

<p>Halaman Mahasiswa juga menjadi sarana interaktif antara dosen dan mahasiswa, memungkinkan komunikasi dua arah melalui forum diskusi dan sistem pesan internal. Dengan adanya fitur ini, diharapkan proses belajar mengajar menjadi lebih efisien dan kolaboratif.</p>

<p>Untuk informasi lebih lanjut mengenai layanan kampus dan kegiatan akademik lainnya, silakan kunjungi bagian <a href="kontak.html">Kontak</a> atau hubungi pihak administrasi melalui email resmi kampus.</p>
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
</div>
<!-- </div> -->
@endsection

@section ('footer')
footer Mahasiswa
@endsection
