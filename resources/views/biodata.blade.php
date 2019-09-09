<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #4 : Passing Data Controller Ke View Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h1>Tutorial Laravel</h1>
	<a href="https://www.youtube.com/results?search_query=tutorial+laravel">klik here</a>

	<br>

	<p>nama : {{ $nama }}</p>

	<p>Mata Pelajaran</p>
	<ul>
 
		@foreach($mapel as $m)
 
		<li>{{ $m }}</li>
 
		@endforeach
		
	</ul>
 
</body>
</html>