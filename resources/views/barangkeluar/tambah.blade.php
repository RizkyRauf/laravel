<html>
<head>
	<title>Barang Masuk</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
 
	<h3>Form Tambah Barang</h3>
 
	<a href="/barangkeluar"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/barangkeluar/store" method="post">
		{{ csrf_field() }}
		Nama Barang <input type="text" name="nama" required="required"> <br/>
		Tanggal Barang <input type="date" name="tanggal" required="required"> <br/>
		Jumlah Barang <input type="number" name="jumlah" required="required"> <br/>
        Penerima Barang <input type="text" name="penerima" required="required"> <br/>
        Jenis Barang <input type="text" name="jenis" required="required"> <br/>
		Keterangan <textarea name="keterangan" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>