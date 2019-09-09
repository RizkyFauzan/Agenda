<!DOCTYPE html>
<html>
<head>
	<title>belajar laravel</title>
</head>
<body>

	<header>

		<h2>QEEPOO</h2>
		<nav>
			<a href="/">HOME</a>
			|
			<a href="/Blog/tentang">TENTANG</a>
			|
			<a href="/Blog/pesan">PESAN</a>
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>

	<!-- bagian judul halaman blog -->
	<h3> @yield('ruang_guru') </h3>


	<!-- bagian konten blog -->
	@yield('konten')


	<br/>
	<br/>
	<hr/>
	<footer>
		<p> <a href="https://www.youtube.com/results?search_query=tutorial+laravel">tutorial laravel</a>. 2019 - 2020</p>
	</footer>

</body>
</html>