    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ $title }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboards') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('akun') }}">Akun</a></div>
                    <div class="breadcrumb-item">Tambah Akun</div>
                </div>
            </div>

            <div class="section-body ">

                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tambah Akun Admin</h4>
                            </div>
                            <div class="card-body">
                                {{-- form --}}
                                <form action="{{ route('account_admin.store') }}" enctype="multipart/form-data"
                                    method="POST" class="needs-validation" novalidate="">
                                    {{ csrf_field() }}
                                    <div class="card-body">
                                        <input type="hidden" value="Admin" name="role">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" name="nama" class="form-control" required="" />
                                            <div class="invalid-feedback">
                                                Masukkan Nama Lengkap
                                            </div>
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
                                                        required="" />
                                                    <div class="invalid-feedback">
                                                        Masukkan Username
                                                    </div>
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
                                                        required="" />
                                                    <div class="invalid-feedback">
                                                        Masukkan Password
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="form-group col-md">
                                                <label>Upload Profil Admin</label>
                                                <div class="input-group">
                                                    <input type="file" name="profile" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Choose
                                                        file</label>
                                                </div>

                                            </div>


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
