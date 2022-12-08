    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ $title }}</h1>
                <div class="section-header-breadcrumb">
                    <!-- <div class="breadcrumb-item active"><a href="{{ route('dashboards') }}">Dashboard</a></div> -->
                    <!-- <div class="breadcrumb-item"><a href="{{ route('petugas') }}">Akun</a></div> -->
                    <div class="breadcrumb-item">Edit Mid</div>
                </div>
            </div>

            <div class="section-body ">

                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Mid</h4>
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
                                <form action="{{ route('mid.update') }}" enctype="multipart/form-data"
                                    method="POST" >
                                    {{ method_field('put') }}
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $dt->id }}">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" name="nama" class="form-control" 
                                                value="{{ $dt->nama }}" />
                                        </div>
                                        <div class="form-group">
                                            <label>No_hp</label>
                                            <input type="text" name="no_hp" class="form-control" 
                                                value="{{ $dt->no_hp }}" />
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
                                                         value="{{ $dt->alamat }}" />
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
