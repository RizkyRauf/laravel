@extends('layoutsdash.master')

@section('barangrusak')
<div class="content-wrapper" style="min-height: 671px;">

	<div class="content-header">
		<div class="container-fluid">
		  	<div class="row mb-2">
				<div class="col-sm-6">
			  		<h1 class="m-0">Form Edit</h1>
				</div>
				<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item btn"><a href="/barangrusak">Kembali</a></li>
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
							@foreach($barangrusak as $r)
							<form action="/barangrusak/update" method="post">
								{{ csrf_field() }}
								<input type="hidden" name="id" value="{{ $r->id_barang }}"> <br/>
								<div class="form-group">
									<label for="exampleInputEmail1">Nama Barang</label>
									<input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="{{ $r->nama_barang }}">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Tanggal</label>
									<input name="tanggal" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="{{ $r->tanggal_barang }}">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Jumlah</label>
									<input name="jumlah" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="{{ $r->jumlah_barang }}">
								</div>
								<div class="form-group">
									<label for="exampleFormControlSelect1">Pilih Jenis</label>
										<select name="status" class="form-control" value="{{ $r->status_barang}}">
											<option>Tidak Dapat Diperbaiki</option>
											<option>Dapat Diperbaiki</option>
										</select>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Keterangan</label>
									<input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="{{ $r->keterangan_barang }}">
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

