<div class="container-fluid">

    <div class="row align-items-center mt-5 mb-5">
        <div class="col-md-6">
            <h1 class="text-left fs-1 ms-5 ps-5 fw-bold mt-5 me-5">Donor Darah Indonesia - Universitas Dipa Makassar
            </h1>
            <p class="text-left ms-5 ps-5 text-secondary ">Alamat Jl. Perintis Kemerdekaan 7, Blok A2/28</p>
        </div>

        <div class="col-md-6 mt-5 text-center">

            <img src="{{ asset('image/home/giveme.png') }} " class="img-fluid p-5" alt="">

        </div>
    </div>

    <div class="container-sm mt-5 mb-5 pt-5">
        <div class="row">
            @foreach ($golongan as $gol)
                <div class="col-12 col-md-6 col-lg-3 ">
                    <div class="card card-danger mb-5" style="background-color: #e8e8e8;">
                        <div class="text-center">

                            <img src="{{ asset('image/golongan/' . $gol->gambar) }} " class="mt-5" width="200"
                                alt="">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="text-center fw-bold">{{ $gol->stok }} </h4>
                            <p class="fs-5 ">Golongan Darah {{ $gol->golongan }} </p>
                            {{-- <a href="" class="btn btn-danger px-5 py-2 fs-4">Pesan</a> --}}
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <div class="container-sm my-5">
        <div class="header text-center">

            <h1 class="fw-bold mb-3">Tentang Donor Darah</h1>
            <p class="text-secondary">Salah satu kegiatan PMI yang paling dikenal masyarakat adalah donor darah.
                Menyumbangkan sebagian <br> darah untuk kemudian disalurkan kepada yang membutuhkan menjadi suatu
                sumbangan berarti dalam <br> kehidupan sosial bermasyarakat. Tidak membutuhkan persyaratan sulit untuk
                menjadi calon donor.
            </p>
        </div>

        <div class="row my-5">
            <div class="col-md-6 mt-5">
                <h1 class="fw-bold">Syarat Donor Darah</h1>
                <h6 class="fw-bold text-secondary my-4">Syarat Untuk Menjadi Donor Darah :</h6>
                <p class="text-secondary">
                    Donor darah adalah orang yang memberikan darah secara sukarela untuk maksud dan tujuan transfusi darah bagi orang lain yang membutuhkan. Semua orang dapat menjadi donor darah jika memenuhi persyaratan yang berlaku.
                </p>
                <h6 class="fw-bold text-secondary my-4">Apa Syarat-syarat Untuk Menjadi Donor Darah ?</h6>
                <p >
                    <ol class="text-secondary">
                        <li>Sehat jasmani dan rohani</li>
                        <li>Usia 17 sampai dengan 65 tahun</li>
                        <li>Berat badan minimal 45 kg</li>
                        <li>Tekanan darah :
                            <ul>
                                <li>sistole 100 - 170</li>
                                <li>diastole 70 - 100</li>
                            </ul>
                        </li>
                        <li>Kadar haemoglobin 12,5g% s/d 17,0g%</li>
                        <li>Interval donor minimal 12 minggu atau 3 bulan sejak donor darah sebelumnya (maksimal 5 kali dalam 2 tahun)</li>
                    </ol>
                </p>
            </div>
            <div class="col-md-6 mt-3 text-center">
                <img class="img-fluid" src="{{ asset('image/home/dDarah.jpg') }} " alt="">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-6 col-lg-6">
            <div class="card">
              <div class="card-header">
                <h4>Sliders</h4>
              </div>
              <div class="card-body">
                <div class="owl-carousel owl-theme slider" id="slider1">
                  <div><img alt="image" src="../assets/img/news/img01.jpg"></div>
                  <div><img alt="image" src="../assets/img/news/img08.jpg"></div>
                  <div><img alt="image" src="../assets/img/news/img10.jpg"></div>
                  <div><img alt="image" src="../assets/img/news/img09.jpg"></div>
                </div>
              </div>
            </div>
          </div>
    </div>


</div>
