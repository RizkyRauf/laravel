<html>
<head>
	<title>Barang Masuk</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<a href="/barangmasuk"> Kembali</a>
	
    <header class="masthead d-flex align-items-center">
        <div class="container px-4 px-lg-5 text-center">
            <h1 class="mb-1 text-white">ZIS|Masjid Ar-riyadh</h1>
            <h3 class="mb-5 text-white"><em>Aplikasi Pengelolaan Zakat, Infaq Dan Shadaqah</em></h3>
            <a class="btn btn-warning btn-xl text-black" data-toggle="modal" data-target="#exampleModal">Mari Tunaikan Zakat</a>
        </div>
    </header>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Mari Zakat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="/barangmasuk/store" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Barang</label>
                        <input name="nama" type="text" class="form-control" placeholder="Nama Barang">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Barang</label>
                        <input name="tanggal" type="date" class="form-control" placeholder="Tanggal Barang">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Harga Barang</label>
                        <input name="harga" type="text" class="form-control" placeholder="Harga">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah Barang</label>
                        <input name="jumlah" type="text" class="form-control" placeholder="Jumlah">
                    </div>
                    <div class="form-group">
					<label for="exampleFormControlSelect1">Pilih Jenis</label>
                        <select name="jenis" class="form-control" id="exampleFormControlSelect1">
                            <option>Printer</option>
                            <option>CPU</option>
                            <option>Laptop</option>
                            <option>Monitor</option>
                            <option>Keyboard</option>
                            <option>Mouse</option>
                            <option>Headset</option>
                            <option>Speaker</option>
                            <option>Laptop</option>
                            <option>Komputer</option>
                            <option>ATK</option>
                        </select>
				    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Keterangan</label>
                        <input name="keterangan" type="text" class="form-control" placeholder="Keterangan">
                    </div>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">submit</button>
                </form>
            </div>
        </div>
    </div> 

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>