    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ $title }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboards') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('petugas') }}">Akun</a></div>
                    <div class="breadcrumb-item">Tambah Akun</div>
                </div>
            </div>

            <div class="section-body ">

                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tambah Akun Petugas</h4>
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
                                <form action="{{ route('account_petugas.store') }}" enctype="multipart/form-data"
                                    method="POST" >
                                    {{ csrf_field() }}
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" name="nama" class="form-control"  />
                                            
                                        </div>
                                        <div class="row">

                                            <div class="form-group col-md">
                                                <label>Username</label>

                                                <div class="input-group">

                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <input type="text" name="username" class="form-control"
                                                         />
                                                    
                                                </div>

                                            </div>
                                            <div class="form-group col-md">
                                                <label>Password</label>

                                                <div class="input-group">

                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-key"></i>
                                                        </div>
                                                    </div>
                                                    <input type="password" name="password" class="form-control"
                                                         />
                                                    
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="form-group col-md">
                                                <label>Upload Profil Petugas</label>
                                                <div class="input-group">
                                                    <input type="file" name="profile" class="custom-file-input"
                                                        id="customFile">
                                                    <label class="custom-file-label" for="customFile">Choose
                                                        file</label>
                                                </div>

                                            </div>

                                            <div class="form-group col-md-5">
                                                <input type="hidden" value="Petugas" name="role">
                                                <label>Gender</label>

                                                <div class="input-group">

                                                    <select class="form-control select1" name="jkl">
                                                        <option value="error">-- Silahkan Pilih Gender --</option>
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>


                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md">
                                                <label>Alamat</label>

                                                <div class="input-group">

                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="ion ion-ios-home  "></i>
                                                        </div>
                                                    </div>
                                                    <input type="text" name="alamat" class="form-control"
                                                         />
                                                    
                                                </div>

                                            </div>

                                            <div class="form-group col-md-5">
                                                <input type="hidden" value="Petugas" name="role">
                                                <label>Tanggal Lahir</label>

                                                <input type="date" name="tgl_lahir" class="form-control">
                                            </div>

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
