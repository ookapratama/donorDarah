    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ $title }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboards') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('stok') }}">Stok</a></div>
                    <div class="breadcrumb-item">Tambah Stok</div>
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
                                <form action="{{ route('stok.store') }}" enctype="multipart/form-data" method="POST">
                                    {{ csrf_field() }}
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="form-group col-md-6">
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
                                            <div class="col-md-6">
                                                <label> Jumlah Darah</label>
                                                <input type="number" name="jumlah" class="form-control"> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            

                                        </div>

                                        <input type="hidden" name="tgl_masuk" value="{{ $tgl_masuk }}">
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
