
@extends('layoutsdash.master')

@section('pegawai')
<div class="content-wrapper" style="min-height: 671px;">

	<div class="content-header">
		<div class="container-fluid">
		  	<div class="row mb-2">
				<div class="col-sm-6">
			  		<h1 class="m-0">Form Edit</h1>
				</div>
				<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb nav-link"><a style="color: aliceblue" href="pegawai">Kembali</a></li>
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
							@foreach($pegawai as $p)
                            <form action="/pegawai/update" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="id_pegawai" value="{{ $p->id_pegawai }}"> <br/>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nik</label>
                                    <input name="nik" type="text" class="form-control" value="{{ $p->nik }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Lengkap</label>
                                    <input name="lengkap" type="text" class="form-control" value="{{ $p->nama_lengkap }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Panggilan</label>
                                    <input name="panggilan" type="text" class="form-control" value="{{ $p->nama_panggilan }}">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div col-4>
                                            <label for="exampleInputEmail1">Tempat Lahir</label>
                                            <input name="tempat" type="text" class="form-control" value="{{ $p->tempat_lahir }}">
                                        </div>
                                        <div col-5>
                                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                                            <input name="tanggal" type="date" class="form-control" value="{{ $p->tanggal }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
									<label for="exampleFormControlSelect1">Agama</label>
                                        <select name="agama" class="form-control" value="{{ $p->agama }}">
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Kong Hu Cu">Kong Hu Cu</option>
                                        </select>
                                
                                <div class="form-group">
                                        <label for="exampleFormControlSelect1">Golongan Darah</label>
                                        <select name="darah" class="form-control" value="{{ $p->golongan_darah }}">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="AB">AB</option>
                                            <option value="O">O</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="kelamin" class="form-control" value="{{ $p->jenis_kelamin }}" >
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control" value="{{ $p->status }}">
                                        <option value="Menikah">Menikah</option>
                                        <option value="Belum Menikah">Belum Menikah</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Anak</label>
                                    <input name="anak" type="text" class="form-control" value="{{ $p->jumlah_anak }}">
                                </div>
                                <div class="form-group">
                                    <label>Nik KTP</label>
                                    <input name="nik_ktp" type="text" class="form-control" value="{{ $p->nik_ktp }}">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div col-4>
                                            <label>Alamat NPWP</label>
                                            <input name="alamat_npwp" type="text" class="form-control" value="{{ $p->alamat_npwp }}">
                                        </div>
                                        <div col-5>
                                            <label>No NPWP</label>
                                            <input name="no_npwp" type="text" class="form-control" value="{{ $p->no_npwp }}">
                                        </div>
                                    </div>
                                </div>
                                <div col-4>
                                    <div class="form-group">
                                        <label>Pendidikan</label>
                                        <select name="pendidikan" class="form-control" value="{{ $p->pendidikan }}">
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
                                            <option value="SMK">SMK</option>
                                            <option value="D3">D3</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Divisi</label>
                                    <select name="divisi" class="form-control" value="{{ $p->divisi }}">
                                        <option value="VP Operation-Office Support">VP Operation-Office Support</option>
                                        <option value="General Manager">General Manager</option>
                                        <option value="Core Engine">Core Engine</option>
                                        <option value="Product Service - Bino Premium (Editor)">Product Service - Bino Premium (Editor)</option>
                                        <option value="Product Service - Analis Bino Premium">Product Service - Analis Bino Premium</option>
                                        <option value="Product Service - Uploader Online">Product Service - Uploader Online</option>
                                        <option value="Product Service - Uploader Cetak">Product Service - Uploader Cetak</option>
                                        <option value="Product Service - Uploader TV">Product Service - Uploader TV</option>
                                        <option value="Product Service - Socindex">Product Service - Socindex</option>
                                        <option value="Product Service - Newstensity">Product Service - Newstensity</option>
                                        <option value="Marketing Research">Marketing Research</option>
                                        <option value="Client Service">Client Service</option>
                                        <option value="Infogram Datalab">Infogram Datalab</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Office Support">Office Support</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Email Pribadi</label>
                                    <input name="email_pribadi" type="text" class="form-control" value="{{ $p->email_pribadi }}">
                                    <div class="from-group-prepend text-black">
                                        <span class="from-group-text text-sm fas fa-envelope"> Contoh: Bino@gmail.com</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email Kantor</label>
                                    <input name="email_kantor" type="text" class="form-control" value="{{ $p->email_kantor }}">
                                    <div class="from-group-prepend text-black">
                                        <span class="from-group-text text-sm fas fa-envelope"> Contoh: Bino@binokular.net</span>
                                    </div>
                                </div>
                                <label>Skype</label>
                                <div class="from grup">
                                    <input name="skype" type="text" class="form-control" value="{{ $p->skype }}">
                                </div>
                                <div col-4>
                                    <div class="form-group">
                                        <label>Lokasi Kantor</label>
                                        <select name="lokasi_kantor" class="form-control" value="{{ $p->lokasi_kantor }}">
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Jogja">Jogja</option>
                                        </select>
                                    </div>
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




