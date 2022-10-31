@extends('layoutsdash.master')

@section('barangmasuk')

    <div class="content-wrapper" style="min-height: 671px;">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Table Barang Masuk</h1>
                    </div>
                    <div class="col-sm-6">
                        <form action="/barangmasuk/cari" method="GET">
                            <div class="input-group input-group-sm">
                                <input type="text" name="cari" class="form-control form-control-lg"
                                    value="{{ request('cari') }}"
                                    placeholder="Cari berdasarkan nama barang atau jenis barang" autocomplete="off">
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

        @if (session('sukses'))
            <div class="alert alert-success" role="alert">
                {{ session('sukses') }}
            </div>
        @endif

        <div id="chartNilai"></div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                                <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">Tambah
                                    Barang</a>
                            </div>
                            <br>
                            <?php $i = 1; ?>
                            @foreach ($barangmasuk as $b)
                                <div class="card-body col-md-12">
                                    <div class="lines">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <?= $i ?>
                                            </div>
                                            <div class="col-md-3">
                                                @if ($b->foto)
                                                    <img src="{{ asset('/storage/fotobarang/' . $b->foto) }}"
                                                        style="width: 100px; height: 100px;">
                                                @else 
                                                    <img src="{{ asset('/storage/fotobarang/Untitled.png') }}"
                                                        style="width: 100px; height: 100px;">
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <a class="text-gray">
                                                    <i class="fas fa-clipboard"></i> {{ $b->nama_barang }}<br>
                                                    <i class="fa fa-calendar"></i> {{ $b->tanggal_barang }}<br>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <a href="/barangmasuk/edit/{{ $b->id_barang }}"
                                                    class="btn btn-warning btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="/barangmasuk/hapus/{{ $b->id_barang }}"
                                                    onclick="return confirm('yakin mau di hapus?')"
                                                    class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                                <div class="btn btn-primary btn-sm" data-toggle="modal"
                                                    data-target="#detailBarang-{{ $b->id_barang }}">
                                                    <i class="fas fa-eye"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++; ?>
                                <!-- Modal -->
                                <div class="modal fade" id="detailBarang-{{ $b->id_barang }}" tabindex="-1"
                                    role="dialog" aria-labelledby="detailBarangTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Detail Barang</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card card-widget widget-user-2">
                                                    <div class="widget-user-header bg-warning">
                                                        <div class="widget-user-image">
                                                            <img class="img-circle elevation-2"
                                                                src="{{ asset('storage/fotobarang/' . $b->foto) }}" alt="User Avatar">
                                                        </div>
                                                        <h3 class="widget-user-username">{{ $b->nama_barang }}</h3>
                                                        <h5 class="widget-user-desc"></h5>
                                                    </div>
                                                    <div class="card-footer p-0">
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item">
                                                                <a>
                                                                    <div class="p-3">
																		<i class="fa fa-calendar"></i> <span class="p-1"> {{ $b->tanggal_barang }} </span> 
																	</div>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a>
                                                                    <div class="p-3">
																		<i class="fas fa-dollar-sign"></i> <span class="p-1"> {{ $b->harga_barang }} </span> 
																	</div>
                                                                </a>
                                                            </li>
															<li class="nav-item">
                                                                <a>
																	<div class="p-3">
																		<i class="fas fa-archive"></i><span class="p-1"> {{ $b->jumlah_barang }} </span> 
																	</div>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a>
																	<div class="p-3">
																		<i class="fas fa-box"></i><span class="p-1"> {{ $b->jenis_barang }} </span> 
																	</div>
                                                                </a>
                                                            </li>
															<li class="nav-item">
                                                                <a>
																	<div class="p-3">
																		<i class="fas fa-comment"></i><span class="p-1"> {{ $b->keterangan_barang }} </span> 
																	</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary btn-sm"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Modal tambah -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Barang Masuk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/barangmasuk/store" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Foto Barang</label>
                            <input name="foto" type="file" class="form-control @error('foto') is-invalid @enderror"
                                placeholder="foto">
                            @error('foto')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
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
                    <button type="submit" class="btn btn-success">submit</button>
                    </form>
                </div>
            </div>
        </div>


    @stop