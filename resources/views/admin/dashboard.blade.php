<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="ion ion-waterdrop"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Golongan A</h4>
                        </div>
                        <div class="card-body"> {{ $gol_a }} </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="ion ion-waterdrop"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Golongan B</h4>
                        </div>
                        <div class="card-body"> {{ $gol_b }} </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="ion ion-waterdrop"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Golongan AB</h4>
                        </div>
                        <div class="card-body"> {{ $gol_ab }} </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="ion ion-waterdrop"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Golongan O</h4>
                        </div>
                        <div class="card-body"> {{ $gol_o }} </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Petugas</h4>
                        </div>
                        <div class="card-body">{{ $petugas }}</div>
                    </div>
                </div>
            </div>
            
            
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="ion ion-arrow-swap"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Transaksi</h4>
                        </div>
                        <div class="card-body">{{ $transaksi }}</div>
                    </div>
                </div>
            </div>
            
        </div>
       


    </section>
</div>
