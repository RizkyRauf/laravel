@extends('layoutsdash.master')

@section('pegawai')

<div class="content-wrapper" style="min-height: 671px;">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pegawai</h1>
          </div>
          <div class="col-sm-6">
            <form action="/pegawai/cari" method="GET">
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
                <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">Tambah Pegawai</a>
              </div>
                
							  <!-- kontent -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <th>No</th>
                    <th>Nik</th>
                    <th>Nama Lengkap</th>
                    <th>Nama Panggilan</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Golongan Darah</th>
                    <th>Jenis Kelamin</th>
                    <th>Status</th>
                    <th>Jumlah Anak</th>
                    <th>Nik KTP</th>
                    <th>Nik NPW</th>
                    <th>Alamat NPWP</th>
                    <th>Pendidikan</th>
                    <th>Email Pribadi</th>
                    <th>Email Kantor</th>
                    <th>Skype</th>
                    <th>Lokasi Kantor</th>
                    <th>Aksi</th>
                                      
                  </tr>
                  <?php $i = 1; ?>
                  @foreach($pegawai as $p)
                  <tr>
                      <td><?= $i; ?></td>
                      <td>{{ $p->nik }}</td>
                      <td>{{ $p->nama_lengkap }}</td>
                      <td>{{ $p->nama_panggilan }}</td>
                      <td>{{ $p->tempat_lahir }}</td>
                      <td>{{ $p->tanggal }}</td>
                      <td>{{ $p->agama }}</td>
                      <td>{{ $p->golongan_darah }}</td>
                      <td>{{ $p->jenis_kelamin }}</td>
                      <td>{{ $p->status }}</td>
                      <td>{{ $p->jumlah_anak }}</td>
                      <td>{{ $p->nik_ktp }}</td>
                      <td>{{ $p->no_npwp }}</td>
                      <td>{{ $p->alamat_npwp }}</td>
                      <td>{{ $p->pendidikan }}</td>
                      <td>{{ $p->email_pribadi }}</td>
                      <td>{{ $p->email_kantor }}</td>
                      <td><a>@</a>{{ $p->skype }}</td>
                      <td>{{ $p->lokasi_kantor }}</td>
                                        
                      <td>
                        <a
                          href="/pegawai/edit/{{ $p->nama_lengkap }}" class="btn btn-warning btn-sm">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a 
                          href="/pegawai/hapus/{{ $p->nama_lengkap }}" onclick="return confirm('yakin mau di hapus?')" class="btn btn-danger btn-sm" >
                          <i class="fas fa-trash-alt"></i>
                        </a>
                        
                      </td>   
                  </tr>
                  <?php $i++; ?>
                  @endforeach
                  </table>
                  <br/>
	                Halaman : {{ $pegawai->currentPage() }} <br/>
	                Jumlah Data : {{ $pegawai->total() }} <br/>
                  {{ $pegawai->links() }}
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
				<h5 class="modal-title" id="exampleModalLabel">Tambah Pegawai</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<form action="/pegawai/store" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
        <input type="hidden" name="id_pegawai"> <br/>
        <div class="form-group">
            <label for="exampleInputEmail1">Nik</label>
            <input name="nik" type="text" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Lengkap</label>
            <input name="lengkap" type="text" class="form-control" autocomplete="off" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Panggilan</label>
            <input name="panggilan" type="text" class="form-control" autocomplete="off" >
        </div>
        <div class="form-group">
            <div class="row">
                <div col-4>
                    <label for="exampleInputEmail1">Tempat Lahir</label>
                    <input name="tempat" type="text" class="form-control" autocomplete="off">
                </div>
                <div col-5>
                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                    <input name="tanggal" type="date" class="form-control" autocomplete="off">
                </div>
            </div>
        </div>
        <div class="form-group">
                <label for="exampleFormControlSelect1">Agama</label>
                <select name="agama" class="form-control" autocomplete="off">
                    <option value=" "> </option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Kong Hu Cu">Kong Hu Cu</option>
                </select>
        
        <div class="form-group">
                <label for="exampleFormControlSelect1">Golongan Darah</label>
                <select name="darah" class="form-control" autocomplete="off">
                    <option value=" "> </option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                </select>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="kelamin" class="form-control" autocomplete="off">
                <option value=" "> </option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control" autocomplete="off">
                <option value=" "> </option>
                <option value="Menikah">Menikah</option>
                <option value="Belum Menikah">Belum Menikah</option>
            </select>
        </div>
        <div class="form-group">
            <label>Jumlah Anak</label>
            <input name="anak" type="number" class="form-control" autocomplete="off" >
            <div class="from-group-prepend text-black">
              <span class="from-group-text text-sm"> Isi kosong jika tidak memiliki</span>
          </div>
        </div>
        <div class="form-group">
            <label>Nik KTP</label>
            <input name="nik_ktp" type="text" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
            <div class="row">
                <div col-4>
                    <label>Alamat NPWP</label>
                    <input name="alamat_npwp" type="text" class="form-control" autocomplete="off">
                </div>
                <div col-5>
                    <label>No NPWP</label>
                    <input name="no_npwp" type="text" class="form-control" autocomplete="off">
                </div>
            </div>
        </div>
        <div col-4>
            <div class="form-group">
                <label>Pendidikan</label>
                <select name="pendidikan" class="form-control" autocomplete="off">
                    <option value=" "> </option>
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
            <select name="divisi" class="form-control" autocomplete="off">
                <option value=" "> </option>
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
            <input name="email_pribadi" type="text" class="form-control" autocomplete="off">
            <div class="from-group-prepend text-black">
                <span class="from-group-text text-sm fas fa-envelope"> Contoh: Bino@gmail.com</span>
            </div>
        </div>
        <div class="form-group">
            <label>Email Kantor</label>
            <input name="email_kantor" type="text" class="form-control" autocomplete="off">
            <div class="from-group-prepend text-black">
                <span class="from-group-text text-sm fas fa-envelope"> Contoh: Bino@binokular.net</span>
            </div>
        </div>
        <label>Skype</label>
        <div class="from grup">
            <input name="skype" type="text" class="form-control" autocomplete="off" >
        </div>
        <div col-4>
            <div class="form-group">
                <label>Lokasi Kantor</label>
                <select name="lokasi_kantor" class="form-control" >
                    <option value="Jakarta">Jakarta</option>
                    <option value="Jogja">Jogja</option>
                </select>
            </div>
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
