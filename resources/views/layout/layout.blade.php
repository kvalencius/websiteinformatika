<!doctype html>
<html lang="en">
<head>
  <title>Prodi Informatika</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>
<body>
<div class="main">
    <header>
    @include('lainnya.header')
    </header>
    <div class="container mt-4">
        <div class="row">
        <div id="site_content">
            <div id="content_header">
            <main class="col-md-8">
                @include('lainnya.content')
            <aside class="col-md-4">
                @include('lainnya.sidebar')
            </aside>
            </main>
            </div>
        </div>
    </div>
</div>
</div>
<footer>
    @include('lainnya.footer')
</footer>
</body>

</html>