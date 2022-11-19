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
                     <a href="{{ route('golongan') }}">Golongan</a>
                 </div>
             </div>
         </div>

         <div class="section-body">


             <div class="row justify-content-center">
                 <div class="col-6 ">
                     <div class="card">

                         <div class="card-body">
                             <div class="table-responsive">
                                 <table class="table table-striped table-hover" id="table-1">
                                     <thead>
                                         <tr>
                                             <th width="5%" class="text-center">
                                                 No
                                             </th>
                                             <th class="text-center">Gambar</th>
                                             <th>Jenis Golongan</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         @foreach ($data as $v)
                                             <tr>
                                                 <td>{{ $no++ }}</td>
                                                 <td>
                                                     <img alt="{{ $v->golongan }}"
                                                         src="{{ asset('image/golongan/' . $v->gambar) }}"
                                                         class="rounded-circle m-3 " width="80"
                                                         data-toggle="tooltip" title="{{ $v->golongan }}" />
                                                 </td>
                                                 <td>
                                                     {{ $v->golongan }}
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
