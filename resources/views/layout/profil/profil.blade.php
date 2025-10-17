@extends('layout.layout')

@section ('header')
navbar Profil
@endsection

@section ('lainnya.content')
<div id="content">
<h2>Profil Lulusan Informatika</h2>
<p>Seorang lulusan Informatika merupakan individu yang memiliki kemampuan analitis tinggi, berpikir logis, dan kreatif dalam memecahkan berbagai permasalahan berbasis teknologi. Mereka dibekali pemahaman mendalam mengenai sistem komputer, bahasa pemrograman, keamanan jaringan, serta pengelolaan data dan informasi.</p>

<p>Selain keahlian teknis, profil lulusan Informatika juga mencerminkan pribadi yang adaptif terhadap perkembangan teknologi, memiliki semangat belajar sepanjang hayat, serta mampu bekerja sama dalam tim lintas disiplin. Mereka tidak hanya fokus pada aspek teknis, tetapi juga memahami nilai etika, tanggung jawab sosial, dan pentingnya keamanan digital.</p>

<p>Dengan kombinasi kemampuan berpikir kritis, inovatif, dan komunikatif, seorang profesional Informatika mampu berperan sebagai pengembang perangkat lunak, analis sistem, peneliti, konsultan IT, hingga wirausahawan di bidang teknologi. Mereka menjadi garda terdepan dalam mendorong kemajuan digital dan menciptakan solusi cerdas bagi berbagai sektor kehidupan.</p>

<p>Secara keseluruhan, profil lulusan Informatika mencerminkan sosok yang visioner, berintegritas, dan siap menghadapi tantangan dunia kerja global yang semakin terhubung dengan teknologi.</p>
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
</div>
<!-- </div> -->
@endsection

@section ('footer')
footer Profil
@endsection
