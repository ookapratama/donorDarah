 <!-- Main Content -->
 <div class="main-content">
     <section class="section">
         <div class="section-header">
             <h1>{{ $title }}</h1>
             <div class="section-header-breadcrumb">
                 <div class="breadcrumb-item active">
                     <a href="{{ route('dashboards') }}">Dashboard</a>
                 </div>
                 <div class="breadcrumb-item">
                     <a href="{{ route('transaksi') }}">Transaksi</a>
                 </div>
             </div>
         </div>

         <div class="section-body">


             <div class="row">
                 <div class="col-12">
                     <div class="card">

                         <div class="d-flex justify-content-between">
                             <!-- <div class=" d-flex m-3 ml-4">
                                 <input class="form-control py-3" type="search" placeholder="Search"
                                     aria-label="Search" data-width="250">
                                 <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                             </div> -->
                             <form method="GET" action="{{ route('transaksi') }}">

                                 <div class=" d-flex">
                                     <div class="m-3 ml-4 ">
                                         <input type="date" class="form-control" name="tgl_awal">
                                     </div>

                                     <div class="m-3 ml-4 ">
                                         <input type="date" class="form-control" name="tgl_akhir">
                                     </div>
                                     <button type="submit" name="submit" class="btn btn-dark d-block">Sortir</button>
                                 </div>

                             </form>

                             <div class="m-3 mr-4">
                                 <a href="{{ route('transaksi.tambah') }}"
                                     class="btn btn-success text-right p-2 px-3"><i class="fas fa-plus"></i> Tambah </a>
                             </div>
                         </div>

                         <div class="card-body">
                             <div class="table-responsive">
                                 <table class="table table-striped table-hover" id="table-1">
                                     <thead>
                                         <tr>
                                             <th width="5%" class="text-center">
                                                 No
                                             </th>
                                             <th class="text-center" width="20%">Nama</th>
                                             <th width="5%">Golongan</th>
                                             <th width="20%">Alamat</th>
                                             <th width="10%">Tanggal Lahir</th>
                                             <th>Gender</th>
                                             <th>Tanggal Keluar</th>
                                             <th>Status</th>
                                             <th width="15%">Action</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         @foreach ($data as $i => $v)
                                             <tr>
                                                 <td>{{ ++$i }}</td>
                                                 <td>
                                                     {{ $v->nama }}
                                                 </td>
                                                 <td>
                                                     {{ $v->golongan->golongan ?? '' }}
                                                 </td>
                                                 <td>
                                                     {{ $v->alamat }}
                                                 </td>
                                                 <td>
                                                     {{ $v->tgl_lahir }}
                                                 </td>
                                                 <td>
                                                     {{ $v->jkl }}
                                                 </td>

                                                 <td class="align-middle">
                                                     {{ $v->tgl_keluar }}
                                                 </td>
                                                 <td class="align-middle text-success">
                                                     {{ $v->status }}
                                                 </td>
                                                 <td>
                                                     <form action="{{ route('transaksi.delete', $v->id) }}"
                                                         method="POST">
                                                         <a href="{{ route('transaksi.show', $v->id) }}"
                                                             class="btn btn-primary btn-action mr-1"
                                                             data-toggle="tooltip" title="Edit"><i
                                                                 class="fas fa-pencil-alt"></i>
                                                         </a>
                                                         {{ method_field('delete') }}
                                                         {{ csrf_field() }}
                                                         <button class="btn btn-danger btn-action" data-toggle="tooltip"
                                                             title="Delete">
                                                             <i class="fas fa-trash"></i>
                                                         </button>
                                                     </form>
                                                 </td>
                                             </tr>
                                         @endforeach


                             </div>



                             </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

 </div>
 </section>
 </div>
