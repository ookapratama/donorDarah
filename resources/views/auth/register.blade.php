<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="login-brand">
                        <img src="{{ asset('image/golongan/PMI-logo.png') }}" alt="logo" width="100"
                            class="shadow-light rounded-circle" />
                    </div>

                    <div class="card card-danger">
                        <div class="card-header">
                            <h4 class="text-danger">Register</h4>
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
                                {{-- <div class="col-12 col-sm-6 col-lg-3">
                                        <div class="card">
                                          <div class="card-body text-center" id="swal-5">
                                            <div class="mb-2">Error Message</div>
                                          </div>
                                        </div>
                                      </div> --}}
                                @foreach ($errors->all() as $v)
                                    <li class="list-group-item list-group-item-danger">{{ $v }}</li>
                                @endforeach
                            @endif

                            <form method="post" action="{{ route('register.action') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="first_name">Nama Depan</label>
                                        <input id="first_name" type="text" class="form-control" name="nama_depan"
                                            autofocus>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="last_name">Nama Belakang</label>
                                        <input id="last_name" type="text" class="form-control" name="nama_belakang">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input id="username" type="username" class="form-control" name="username">

                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="password" class="d-block">Password</label>
                                        <input id="password" type="password" class="form-control" name="password">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password2" class="d-block">Re-type Password</label>
                                        <input id="password2" type="password" class="form-control"
                                            name="password-confirm">
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="form-group col-6">
                                        <label>Gender</label>
                                        <select class="form-control selectric" name="jkl">
                                            <option value="-- Pilih Gender --">-- Pilih Gender --</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" class="form-control">

                                    </div>
                                </div>

                                

                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label>Upload Profil</label>
                                        <div class="input-group">
                                            <input type="file" name="profile" class="custom-file-input"
                                                id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose
                                                file</label>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
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

                                </div>

                                <input type="hidden" name="role" value="Petugas">

                                <div class="form-group">
                                    <button type="submit" class="btn btn-danger btn-lg btn-block">
                                        Register
                                    </button>
                                </div>

                            </form>

                            <div class="text-center mt-4 mb-3">
                                <div class="text-job text-muted">
                                    Sudah punya akun ?
                                    <a href="{{ route('login') }}" class="text-danger">Silahkan Login</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; UNDIPA 2022
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
