    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ $title }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboards') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('transaksi') }}">Transaksi</a></div>
                    <div class="breadcrumb-item">Tambah Transaksi</div>
                </div>
            </div>

            <div class="section-body ">

                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tambah Stok</h4>
                            </div>
                            <div class="card-body">
                                {{-- form --}}
                                <form action="{{ route('transaksi.store') }}" enctype="multipart/form-data"
                                    method="POST">
                                    {{ csrf_field() }}
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="form-group col-md">
                                                <label>Nama Lengkap</label>
                                                <input type="text" name="nama" class="form-control"
                                                    required="" />
                                                <div class="invalid-feedback">
                                                    Masukkan Nama Lengkap
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>Golongan Darah</label>

                                                <div class="input-group">

                                                    <select class="form-control select1" required name="id_golongan">
                                                        <option>-- Golongan Darah --</option>
                                                        @foreach ($golongan as $gol)
                                                            <option value="{{ $gol->id }}">{{ $gol->golongan }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">


                                            <div class="form-group col-md-3">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" class="form-control" name="tgl_lahir" required>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label>Gender</label>

                                                <div class="input-group">

                                                    <select class="form-control select1" required name="jkl">
                                                        <option>-- Pilih Gender --</option>
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>

                                                </div>

                                            </div>

                                            <div class="form-group col-md">
                                                <label>Alamat</label>
                                                <input type="text" name="alamat" class="form-control"
                                                    required="" />
                                                <div class="invalid-feedback">
                                                    Masukkan Alamat Lengkap
                                                </div>
                                            </div>

                                        </div>
                                        <input type="hidden" name="status" value="Keluar">
                                        <input type="hidden" name="tgl_keluar" value="{{ $tgl_keluar }}">
                                    </div>
                                    <div class="card-footer text-right">
                                        <button type="submit" name="submit" class="btn btn-primary px-4 py-2">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </section>
    </div>
