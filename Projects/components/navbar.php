<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
 <div class="container">
  <a class="navbar-brand fw-bold" href="#">Exclusive</a>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
   <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-center" id="navbarContent">
   <ul class="navbar-nav mb-2 mb-lg-0">
    <li class="nav-item">
     <a class="nav-link active" href="#">Home</a>
    </li>
    <li class="nav-item">
     <a class="nav-link" href="#">Contact</a>
    </li>
    <li class="nav-item">
     <a class="nav-link" href="#">About</a>
    </li>
    <li class="nav-item">
     <a class="nav-link" href="#">Sign Up</a>
    </li>
   </ul>
  </div>

  <div class="d-flex align-items-center gap-3">
   <!-- Search Bar -->

   <input type="text" class="form-control" placeholder="What are you looking for?" aria-label="Search">
   <button type="submit" class="btn btn-sm p-0 border-0 bg-transparent">
    <i class="bi bi-search"></i>
   </button>


   <!-- Icons -->
   <a href="#" class="text-dark"><i class="bi bi-heart fs-5"></i></a>
   <a href="#" class="text-dark"><i class="bi bi-cart3 fs-5"></i></a>

   <!-- Profile Dropdown -->
   <div class="dropdown profile-dropdown">
    <div class="profile-icon dropdown-toggle" data-bs-toggle="dropdown">
     <i class="bi bi-person-fill fs-5 text-dark"></i>
    </div>
    <ul class="dropdown-menu dropdown-menu-end">
     <li><a class="dropdown-item" href="#">Profile</a></li>
     <li><a class="dropdown-item" href="#">My Orders</a></li>
     <li>
      <hr class="dropdown-divider">
     </li>
     <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
    </ul>
   </div>
  </div>
 </div>
</nav>