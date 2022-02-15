<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEmal RPL</title>
</head>
<body>
    <header>

    <h2>WELLCOME TO WEB RPL </h2>
    <nav>

    <a href="/rpl">home</a>
    |
    <a href="/rpl/tentang">tentang</a>
    |
    <a href="/rpl/kontak">kontak</a>

    </nav>

    </header>
    <hr/>
    <br/>
    <br/>
  <h3> @yield('judul_halaman')</h3>
  @yield('konten')
  <br/>
  <br/>
  <hr/>
    <footer>
        <p>&copy Kemal </p>
    </footer>
</body>
</html>
