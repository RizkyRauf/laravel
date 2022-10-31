@extends('layoutsdash.master')

@section('barangkeluar')

<div class="content-wrapper" style="min-height: 671px;">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Table Barang Keluar</h1>
          </div>
          <div class="col-sm-6">
            <form action="/barangkeluar/cari" method="GET">
				<div class="input-group input-group-sm">
					<input type="text" name="cari" class="form-control form-control-lg" value="{{ request('cari') }}" placeholder="Cari berdasarkan nama barang atau penerima barang" autocomplete="off">
					<div class="input-group-append">
						<button type="submit" class="btn btn-lg btn-default">
							<i class="fa fa-search"></i>
						</button>
					</div>
				</div>
			</form>
          </div>
        </div>
      </div>
    </div>

	@if(session('sukses'))
	<div class="alert alert-success" role="alert">
		{{session('sukses')}}
	</div>
	@endif

    <!-- Main content -->
    <section class="content">
    	<div class="container-fluid">
    		<div class="row">
          		<div class="col-md-12">
            		<div class="card">
						<div class="card-header">
							<div class="card-tools">
							  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
								<i class="fas fa-minus"></i>
							  </button>
							</div>
							<a class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">Tambah Barang</a>
						</div>
						<br>
						<?php $i = 1; ?>
						@foreach($barangkeluar as $k)
							<div class="card-body col-md-12">
								<div class="lines">
									<div class="row">
										<div class="col-md-1">
											<?= $i; ?>
										</div>
										<div class="col-md-3">
											<img src="{{ asset('/storage/fotobarang/') }}" width="100px" height="100px">
										</div>
										<br>
										<div class="col-md-6">
											<a class="text-gray">
												<i class="fas fa-clipboard"></i> {{ $k->nama_barang }}<br>
												<i class="fa fa-calendar"></i> {{ $k->tanggal_barang }}<br>
											</a><br>
										</div>
										<div class="col-md-2">
											<a 
												href="/barangkeluar/edit/{{ $k->id_barang }}" class="btn btn-warning btn-sm">
												<i class="fas fa-edit"></i>
											</a>
											<a 
												href="/barangkeluar/hapus/{{ $k->id_barang }}" onclick="return confirm('yakin mau di hapus?')" class="btn btn-danger btn-sm">
												<i class="fas fa-trash-alt"></i>
											</a>
											<a 
												href="" class="btn btn-primary btn-sm">
												<i class="fas fa-eye"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						<?php $i++; ?>
						@endforeach
            		</div>
         		</div>
        	</div>
      	</div>
    </section>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Barang Keluar</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<form action="/barangkeluar/store" method="post">
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
					<label for="exampleInputEmail1">Jumlah Barang</label>
					<input name="jumlah" type="text" class="form-control" placeholder="Jumlah">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Penerima Barang</label>
					<input name="penerima" type="text" class="form-control" placeholder="Penerima">
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
@stop



		
		