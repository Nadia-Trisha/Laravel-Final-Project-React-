<!-- Topbar Start -->
<div class="container-fluid px-0 d-none d-lg-block">
  <div class="row gx-0">
      <div class="col-lg-4 text-center bg-secondary py-3">
          <div class="d-inline-flex align-items-center justify-content-center">
              <i class="bi bi-envelope fs-1 text-primary me-3"></i>
              <div class="text-start">
                  <h6 class="text-uppercase mb-1">Email Us</h6>
                  <span>info@example.com</span>
              </div>
          </div>
      </div>
      <div class="col-lg-4 text-center bg-primary border-inner py-3">
          <div class="d-inline-flex align-items-center justify-content-center">
              <a href="index.html" class="navbar-brand">
                  <h1 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-dark me-3"></i>CakeZone</h1>
              </a>
          </div>
      </div>
      <div class="col-lg-4 text-center bg-secondary py-3">
          <div class="d-inline-flex align-items-center justify-content-center">
              <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
              <div class="text-start">
                  <h6 class="text-uppercase mb-1">Call Us</h6>
                  <span>+012 345 6789</span>
                  <a href="contact" class="nav-item nav-link">Admin</a>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
  <a href="index.html" class="navbar-brand d-block d-lg-none">
      <h1 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-primary me-3"></i>CakeZone</h1>
  </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto mx-lg-auto py-0">
          <a href="/" class="nav-item nav-link active">Home</a>
          <a href="about" class="nav-item nav-link">About Us</a>
          <a href="menu" class="nav-item nav-link">Order</a>
          <a href="master" class="nav-item nav-link">Master Chefs</a>
          <a href="services" class="nav-item nav-link">Services</a>
          <a href="contact" class="nav-item nav-link">Message Now</a>
          <a href="{{url('cart')}}" class="nav-item nav-link">Cart
            <i class="fa-solid fa-cart-shopping" style="color: #fffb00;">
                <span class="badge bg-danger text-white rounded-pill bg-primary p-2 ms-2">
                    {{ is_array(session()->get('cart')) ? count(session()->get('cart')) : 0 }}
                </span>
            </i>
        </a>
          <div class="nav-item  dropdown">
            @auth('customer')  
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">user</a>
              <div class="dropdown-menu">
                  <h5 >{{ Auth::guard('customer')->user()->name }}</h5>
                  <a class="dropdown-item" href="{{ route('myorders') }}"><i class="fas fa-user mr-2"></i>My Orders</a>
                  <form method="POST" action="{{ route('customer.logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        Logout
                    </button>
                </form>
              </div>
              @else
                <a href="customer-login" class="nav-item nav-link"> LogIn</a>
              @endauth
          </div>
         
      </div>
  </div>
</nav>
<!-- Navbar End -->
