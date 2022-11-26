    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ $title }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboards') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('transaksi') }}">Transaksi</a></div>
                    <div class="breadcrumb-item">Edit Transaksi</div>
                </div>
            </div>

            <div class="section-body ">

                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Transaksi</h4>
                            </div>
                            <div class="card-body">

                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible show fade">
                                        <div class="alert-body">
                                            <button class="close" data-dismiss="alert">
                                                <span>&times;</span>
                                            </button>
                                            Mohon diperiksa kembali form anda.
                                        </div>
                                    </div>
                                    @foreach ($errors->all() as $v)
                                        <li class="list-group-item list-group-item-danger">{{ $v }}</li>
                                    @endforeach
                                @endif

                                {{-- form --}}
                                <form action="{{ route('transaksi.update') }}" enctype="multipart/form-data" method="POST">
                                    {{ csrf_field() }}
                                    @method('put')
                                    <div class="card-body">
                                        <input type="hidden" value="{{ $dt->id }}" name="id">
                                        <div class="row">

                                            <div class="form-group col-md">
                                                <label>Nama Lengkap</label>
                                                <input type="text" name="nama" class="form-control" 
                                                    value="{{ $dt->nama }}" />
                                                
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>Golongan Darah</label>

                                                <div class="input-group">
                                                    {{-- {{ $golongan }} --}}
                                                    <select class="form-control select1"  name="id_golongan">
                                                        <option>-- Golongan Darah --</option>
                                                        @foreach ($golongan as $gol)
                                                            <option value="{{ $gol->id }}" {{ $dt->id_golongan == $gol->id ? 'Selected' : '' }}>
                                                                {{ $gol->golongan }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">


                                            <div class="form-group col-md-3">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" class="form-control" name="tgl_lahir"
                                                    value="{{ $dt->tgl_lahir }}" >
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label>Gender</label>

                                                <div class="input-group">

                                                    <select class="form-control select1"  name="jkl">
                                                        <option>-- Pilih Gender --</option>
                                                            <option value="Laki-laki" {{ $dt->jkl == 'Laki-laki' ?  'Selected' : '' }} >Laki-laki</option>
                                                            <option value="Perempuan" {{ $dt->jkl == 'Perempuan' ? 'Selected' : '' }} >Perempuan</option>
                                                            
                                                    </select>

                                                </div>

                                            </div>

                                            <div class="form-group col-md">
                                                <label>Alamat</label>
                                                <input type="text" name="alamat" class="form-control"
                                                    value="{{ $dt->alamat }}" />
                                                
                                            </div>

                                        </div>

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
