
@extends('layoutsdash.master')

@section('barangrusak')

<div class="content-wrapper" style="min-height: 671px;">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Table Barang Rusak</h1>
          </div>
          <div class="col-sm-6">
            <form action="/barangrusak/cari" method="GET">
				<div class="input-group input-group-sm">
					<input type="text" name="cari" class="form-control form-control-lg" value="{{ request('cari') }}" placeholder="Cari nama pegawai" autocomplete="off">
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
							<!-- kontent -->
							<div class="card-body table-responsive p-0">
								<table id="example1" class="table table-hover text-nowrap" aria-describedby="example1_info">
									<thead>
										<tr>
											<th class="th-sm">No</th>
											<th class="th-sm">Nama</th>
											<th class="th-sm">Tanggal</th>
											<th class="th-sm">Jumlah</th>
											<th class="th-sm">Status</th>
											<th class="th-sm">Keterangan</th>
											<th class="th-sm">Aksi</th>
										</tr>
									</thead>
									
									<?php $i = 1; ?>		
									@foreach($barangrusak as $r)
									<tr>
										<td><?= $i; ?></td>
										<td>{{ $r->nama_barang }}</td>
										<td>{{ $r->tanggal_barang }}</td>
										<td>{{ $r->jumlah_barang }}</td>
										<td>{{ $r->status_barang }}</td>
										<td>{{ $r->keterangan_barang }}</td>
										<td>
											<a 
												href="/barangrusak/edit/{{ $r->id_barang }}" class="btn btn-warning btn-sm">
												<i class="fas fa-edit"></i>
											</a>
											<a 
												href="/barangrusak/hapus/{{ $r->id_barang }}" onclick="return confirm('yakin mau di hapus?')" class="btn btn-danger btn-sm">
												<i class="fas fa-trash-alt"></i>
											</a>
										</td>	
									</tr>
									<?php $i++; ?>
									@endforeach
								</table>
						  	</div>
							<!--end konten-->

							
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
				<h5 class="modal-title" id="exampleModalLabel">Tambah Barang Rusak</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<form action="/barangrusak/store" method="post">
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
					<label for="exampleInputEmail1">Jumlah Barang Barang</label>
					<input name="jumlah" type="text" class="form-control" placeholder="Harga">
				</div>
				<div class="form-group">
				<label for="exampleFormControlSelect1">Status Barang</label>
					<select name="status" class="form-control" id="exampleFormControlSelect1">
						<option>Bisa Diperbaiki</option>
						<option>Tidak Bisa Diperbaiki</option>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Keterangan</label>
					<input name="keterangan" type="text" class="form-control" placeholder="Keterangan">
				</div>
			
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-success">submit</button>
			</form>
		</div>
	</div>
</div> 
@stop
