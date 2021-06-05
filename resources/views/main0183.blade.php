<!DOCTYPE html>
<html lang="en">
<head>
	<title>Praktikum</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css.css') }}">

	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>

<div class="content">
	<header>
		<h1 class="judul">Pertemuan 3</h1>
		<h3 class="deskripsi">Muhammad Fahmi Izahr</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="/">hotel</a></li>
			<li><a href="/kamar">Kamar</a></li>
			<li><a href="/pengunjung">Pengunjung</a></li>
			<li><a href="/user">User</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	@yield('badan')
 
	</div>
</div>
</body>
</html>