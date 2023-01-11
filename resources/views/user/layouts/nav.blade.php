<nav class="navbar navbar-expand-lg px-3 py-3 bg-danger fixed-top" ">
    <div class="container-fluid ">
      <a class="navbar-brand text-light me-5 fw-bold fs-2 me" href="{{ route('index') }}"><img src="{{ asset('image/home/PMI.png') }}" alt=""> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse fs-6 " id="navbarSupportedContent">
        <ul class="navbar-nav  me-auto  mb-2 fw-bold fs-5  mb-lg-0">
          <li class="nav-item ">
            <a class="nav-link text-light " aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#about">About</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-light" href="#galeri" role="button" aria-expanded="false">
              Gallery
            </a>
            
          </li>
          <li class="nav-item ms-5 ">
            
            
          </li>

          
          
        </ul>
        
      </div>
      <a class="nav-link text-dark fw-bold btn btn-light rounded-pill fs-6 px-5 py-2 " href="{{ route('login') }}"  aria-expanded="false">
        Login
      </a>
    </div>
  </nav>