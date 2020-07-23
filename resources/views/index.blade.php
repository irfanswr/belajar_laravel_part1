<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Tutorial Membuat Pagination Pada Laravel - www.malasngoding.com</title>
</head>
	<body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
					<h3>Data Pegawai</h3>
				</div>
				<div class="card-body">
					<form action="/pegawai/cari" method="GET">
						<input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
						<input type="submit" value="CARI">
					</form>
					<br>
					<table class="table table-bordered table-hover table-striped">
					<tr>
						<th>Nama</th>
						<th>Jabatan</th>
						<th>Umur</th>
						<th>Alamat</th>
						<th>Opsi</th>
					</tr>
					<tbody>
						@foreach($pegawai as $p)
						<tr>
							<td>{{ $p->pegawai_nama }}</td>
							<td>{{ $p->pegawai_jabatan }}</td>
							<td>{{ $p->pegawai_umur }}</td>
							<td>{{ $p->pegawai_alamat }}</td>
							<td>
								<a class="btn btn-warning btn-sm" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
								<a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
							</td>
						</tr>
						@endforeach
					</tbody>
					</table>
					<a href="/pegawai/tambah" class="btn btn-primary">Input Pegawai Baru</a>
					<br/>
					<br/>
					Halaman : {{ $pegawai->currentPage() }} <br/>
					Jumlah Data : {{ $pegawai->total() }} <br/>
					Data Per Halaman : {{ $pegawai->perPage() }} <br/>
				
				
					{{ $pegawai->links() }}
					</div>
            </div>
        </div>
	</body>
</html>