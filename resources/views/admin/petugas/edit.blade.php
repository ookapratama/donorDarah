    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ $title }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboards') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('petugas') }}">Akun</a></div>
                    <div class="breadcrumb-item">Edit Akun</div>
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
                                {{-- form --}}
                                <form action="{{ route('account_petugas.update') }}" enctype="multipart/form-data"
                                    method="POST" class="needs-validation" novalidate="">
                                    {{ method_field('put') }}
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $dt->id }}">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" name="nama" class="form-control" required=""
                                                value="{{ $dt->nama }}" />
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
                                                        required="" value="{{ $dt->username }}" />
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
                                                        required="" value="{{ $dt->password }}" />
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
                                                    <input type="file" class="custom-file-input" name="profile"
                                                        value="{{ $dt->profile }}" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Choose
                                                        file</label>
                                                </div>

                                            </div>

                                            <div class="form-group col-md-3">
                                                <div class="input-group">
                                                    <image class="img-thumbnail" name="profile"
                                                        src="{{ asset('image/' . $dt->profile) }}" width="80" />
                                                </div>
    
                                            </div>

                                            <div class="form-group col-md-5">
                                                <input type="hidden" value="Petugas" name="role">
                                                <label>Gender</label>

                                                <div class="input-group">

                                                    <select class="form-control select1" required name="jkl">
                                                        <option>-- Pilih Gender --</option>
                                                        <option value="Laki-laki"
                                                            {{ $dt->jkl == 'Laki-laki' ? 'Selected' : '' }}>Laki-laki
                                                        </option>
                                                        <option value="Perempuan"
                                                            {{ $dt->jkl == 'Perempuan' ? 'Selected' : '' }}>Perempuan
                                                        </option>

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
                                                        required="" value="{{ $dt->alamat }}" />
                                                    <div class="invalid-feedback">
                                                        Masukkan Alamat
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-group col-md-5">
                                                <input type="hidden" value="Petugas" name="role">
                                                <label>Tanggal Lahir</label>

                                                <div class="input-group">

                                                    <input name="tgl_lahir" class="form-control datepicker"
                                                        placeholder="YYYY/MM/DD" value="{{ $dt->tgl_lahir }}" />


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
