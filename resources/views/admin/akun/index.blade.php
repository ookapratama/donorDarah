 <!-- Main Content -->
 <div class="main-content">
     <section class="section">
         <div class="section-header">
             <h1>Data Akun Admin</h1>
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
                                 <a href="{{ route('account_admin.tambah') }}" class="btn btn-success text-right p-2 px-3"><i class="fas fa-plus"></i> Tambah </a>
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
                                             <th>Email</th>
                                             <th width="15%">Action</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td>1</td>
                                             <td>
                                                 <img alt="image" src="../assets/img/avatar/avatar-5.png"
                                                     class="rounded-circle m-3" width="80" data-toggle="tooltip"
                                                     title="Wildan Ahdian" />
                                             </td>
                                             <td>
                                                 Judhistira Ooka Pratama
                                             </td>
                                             <td class="align-middle">
                                                 aaaaa@gmail.com
                                             <td>
                                                 <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                     title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                 <a class="btn btn-danger btn-action" data-toggle="tooltip"
                                                     title="Delete"
                                                     data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                     data-confirm-yes="alert('Deleted')">
                                                     <i class="fas fa-trash"></i>
                                                 </a>
                                             </td>
                                         </tr>


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
