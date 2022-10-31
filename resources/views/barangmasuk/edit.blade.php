@extends('layoutsdash.master')

@section('barangmasuk')
<div class="content-wrapper" style="min-height: 671px;">

	<div class="content-header">
		<div class="container-fluid">
		  	<div class="row mb-2">
				<div class="col-sm-6">
			  		<h1 class="m-0">Form Edit</h1>
				</div>
				<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item btn"><a href="/barangmasuk">Kembali</a></li>
				</ol>
				</div>
		  	</div>
		</div>
	</div>

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							
							<!-- kontent -->
							@foreach($barangmasuk as $b)
							<form action="/barangmasuk/update" method="post">
								{{ csrf_field() }}
								<input type="hidden" name="id" value="{{ $b->id_barang }}"> <br/>
								<div class="form-group">
									<label for="exampleInputEmail1">Nama Barang</label>
									<input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="{{ $b->nama_barang }}">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Tanggal</label>
									<input name="tanggal" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="{{ $b->tanggal_barang }}">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Harga</label>
									<input name="harga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="{{ $b->harga_barang }}">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">jumlah</label>
									<input name="jumlah" type="number" class="form-control" value="{{ $b->jumlah_barang }}">
								</div>
								<div class="form-group">
									<label for="exampleFormControlSelect1">Pilih Jenis</label>
										<select name="jenis" class="form-control" value="{{ $b->jenis_barang}}">
											<option>Tidak Dapat Diperbaiki</option>
											<option>Dapat Diperbaiki</option>
										</select>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Keterangan</label>
									<input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="{{ $b->keterangan_barang }}">
								</div>
								
								<button type="submit" class="btn btn-success btn-sm">submit</button>
							</form>
							@endforeach
							<!--end konten-->
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@stop
