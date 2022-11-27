<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="{{ asset('image/golongan/PMI-logo.png') }}" alt="logo" width="100"
                            class="shadow-light rounded-circle" />
                    </div>

                    <div class="card card-danger">
                        <div class="card-header">
                            <h4 class="text-danger">Forgot Password</h4>
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

                            <form method="POST" action="{{ route('forget_password.action') }}">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="email">Password Lama</label>
                                    <input id="email" type="password" class="form-control" name="old_password"
                                        tabindex="1" autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="email">Password Baru</label>
                                    <input id="email" type="password" class="form-control" name="new_password"
                                        tabindex="1">
                                </div>
                                <div class="form-group">
                                    <label for="email">Konfirmasi Password Baru</label>
                                    <input id="email" type="password" class="form-control" name="password_confirm"
                                        tabindex="1">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-danger btn-lg btn-block" tabindex="4">
                                        Ubah Password
                                    </button>
                                </div>

                            </form>

                            <div class="text-center mt-4 mb-3">
                                <div class="text-job text-muted">
                                    Sudah ingat password ?
                                    <a href="{{ route('login') }}" class="text-danger">Login kembali</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; Stisla 2018
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
