 <!-- partial:partials/_navbar.html -->
 <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
     <div class="navbar-brand-wrapper d-flex justify-content-center">
         <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
             <a class="navbar-brand brand-logo" href="#"><img src="#" alt="Aditya Pratama" /></a>
             <a class="navbar-brand brand-logo-mini" href="#"><img src="#" alt="Aditya Pratama" />Aditya
                 Pratama</a>
             <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                 <span class="mdi mdi-sort-variant"></span>
             </button>
         </div>
     </div>
     <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
         <ul class="navbar-nav navbar-nav-right">
             <li class="nav-item nav-profile dropdown">
                 <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                     <img src="{{ asset('Majestic') }}/template/images/faces/{{ Auth::user()->avatar }}"
                         alt="profile" />
                     <span class="nav-profile-name">{{ Auth::user()->name }}</span>
                 </a>
                 <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                     <a class="dropdown-item" href="{{ url('auth/logout') }}">
                         <i class="mdi mdi-logout text-primary"></i>
                         Logout
                     </a>
                 </div>
             </li>
         </ul>
         <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
             data-toggle="offcanvas">
             <span class="mdi mdi-menu"></span>
         </button>
     </div>
 </nav>
