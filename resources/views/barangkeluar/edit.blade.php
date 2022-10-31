@extends('layoutsdash.master')

@section('barangkeluar')
<div class="content-wrapper" style="min-height: 671px;">

	<div class="content-header">
		<div class="container-fluid">
		  	<div class="row mb-2">
				<div class="col-sm-6">
			  		<h1 class="m-0">Form Edit</h1>
				</div>
				<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb nav-link"><a style="color: aliceblue" href="/barangkeluar">Kembali</a></li>
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
							@foreach($barangkeluar as $k)
							<form action="/barangkeluar/update" method="post">
								{{ csrf_field() }}
								<input type="hidden" name="id" value="{{ $k->id_barang }}"> <br/>
								<div class="form-group">
									<label for="exampleInputEmail1">Nama Barang</label>
									<input name="nama" type="text" class="form-control" value="{{ $k->nama_barang }}">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Tanggal</label>
									<input name="tanggal" type="date" class="form-control"  value="{{ $k->tanggal_barang }}">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Jumlah</label>
									<input name="jumlah" type="number" class="form-control" value="{{ $k->jumlah_barang }}">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Penerima</label>
									<input name="penerima" type="text" class="form-control"  value="{{ $k->penerima_barang }}">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Jenis</label>
									<input name="jenis" type="text" class="form-control"  value="{{ $k->jenis_barang }}">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Keterangan</label>
									<input name="keterangan" type="text" class="form-control"  value="{{ $k->keterangan_barang }}">
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
