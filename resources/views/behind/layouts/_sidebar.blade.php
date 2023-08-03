   <!-- partial -->
   <div class="container-fluid page-body-wrapper">
       <!-- partial:partials/_sidebar.html -->
       <nav class="sidebar sidebar-offcanvas" id="sidebar">
           <ul class="nav">
               <li class="nav-item">
                   <a class="nav-link" href="{{ route('halaman.index') }}">
                       <i class="mdi mdi-home menu-icon"></i>
                       <span class="menu-title">Dashboard</span>
                   </a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="{{ route('experience.index') }}">
                       <i class="mdi  mdi mdi-worker  menu-icon"></i>
                       <span class="menu-title">Experience</span>
                   </a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="{{ route('education.index') }}">
                       <i class="mdi mdi mdi-book-open menu-icon"></i>
                       <span class="menu-title">Education</span>
                   </a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="{{ route('skill.index') }}">
                       <i class="mdi mdi mdi-certificate menu-icon"></i>
                       <span class="menu-title">Skill</span>
                   </a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="{{ route('profile.index') }}">
                       <i class="mdi mdi mdi-account menu-icon"></i>
                       <span class="menu-title">Profile</span>
                   </a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="{{ route('settingDashboard.index') }}">
                       <i class="mdi mdi mdi-settings menu-icon"></i>
                       <span class="menu-title">Setting Dashboard</span>
                   </a>
               </li>
           </ul>
       </nav>
