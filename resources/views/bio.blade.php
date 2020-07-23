<html>
<head>
	<title>Passing Data Controller Ke View</title>
</head>
<body>
 
	<h1>Biodata</h1>
	<p>Coba klik </p>
	<a href="https://www.malasngoding.com/category/laravel">LINK!</a>
	<br>
	<p>Nama: {{$nama}} </p>

	<ul>
		@foreach($matkul as $data)
		<li> {{$data}} </li>
		@endforeach
	</ul>
 
</body>
</html>