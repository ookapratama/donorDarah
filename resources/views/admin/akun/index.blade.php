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
                     <a href="{{ route('akun') }}">Admin</a>
                 </div>
             </div>
         </div>

         <div class="section-body">


             <div class="row">
                 <div class="col-12">
                     <div class="card">

                         <div class="d-flex justify-content-between">
                             <div class=" d-flex m-3 ml-4">
                                 <input class="form-control py-3" type="search" placeholder="Search"
                                     aria-label="Search" data-width="250">
                                 <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                             </div>
                             <div class="m-3 mr-4">
                                 <a href="{{ route('account_admin.tambah') }}"
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
                                             <th width="5%" class="text-center">Profile</th>
                                             <th>Nama Lengkap</th>
                                             <th>Username</th>
                                             <th>Role</th>
                                             <th>alamat</th>
                                             <th width="15%">Action</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         @foreach ($data as $v)
                                             <tr>
                                                 <td>{{ $no++ }}</td>
                                                 <td>
                                                     <img alt="{{ $v->nama }}"
                                                         src="{{ asset('image/' . $v->profile) }}"
                                                         class="rounded-circle m-3" width="80" data-toggle="tooltip"
                                                         title="{{ $v->nama }}" />
                                                 </td>
                                                 <td>
                                                     {{ $v->nama }}
                                                 </td>
                                                 <td class="align-middle">
                                                     {{ $v->username }}
                                                 </td>
                                                 <td class="align-middle">
                                                     {{ $v->role }}
                                                 </td>
                                                 <td class="align-middle">
                                                     {{ $v->alamat }}
                                                 </td>
                                                 <td>
                                                     <form action="{{ route('account_admin.delete', $v->id) }}" method="POST">
                                                        <a href="{{ route('account_admin.show', $v->id) }}"
                                                            class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                            title="Edit"><i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        {{ method_field('delete') }}
                                                        {{ csrf_field() }}
                                                        <button 
                                                             class="btn btn-danger btn-action" data-toggle="tooltip"
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
