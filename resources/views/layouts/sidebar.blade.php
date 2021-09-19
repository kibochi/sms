   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

       <!-- Sidebar - Brand -->
       <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

           <div class="sidebar-brand-text mt-3 mb-3 ">{{ $school->school_name }}</div>
       </a>

       <!-- Divider -->
       <hr class="sidebar-divider my-0">

       <!-- Nav Item - Dashboard -->
       <li class="nav-item">
           <a class="nav-link" href="index.html">
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Dashboard</span></a>
       </li>

       <!-- Divider -->
       <hr class="sidebar-divider">

       <!-- Heading -->
       <div class="sidebar-heading">
           Interface
       </div>

       <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
           <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
               aria-controls="collapseTwo">
               <i class="fas fa-fw fa-user"></i>
               <span>Staff</span>
           </a>
           <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
               <div class="bg-white py-2 collapse-inner rounded">
                   <h6 class="collapse-header">Manage Staff:</h6>
                   <a class="collapse-item" href="">New Staff</a>
                   <a class="collapse-item" href="">All Staff</a>
               </div>
           </div>
       </li>

       <!-- Nav Item - Utilities Collapse Menu -->
       <li class="nav-item">
           <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
               aria-expanded="true" aria-controls="collapseUtilities">
               <i class="fas fa-fw fa-user-graduate"></i>
               <span>Students</span>
           </a>
           <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
               data-parent="#accordionSidebar">
               <div class="bg-white py-2 collapse-inner rounded">
                   <h6 class="collapse-header">Manage Students:</h6>
                   <a class="collapse-item" href="#">New Student</a>
                   <a class="collapse-item" href="#">All Students</a>

               </div>
           </div>
       </li>

       <li class="nav-item">
           <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true"
               aria-controls="collapseUtilities">
               <i class="fas fa-fw fa-user-graduate"></i>
               <span>Utilities</span>
           </a>
           <div id="collapse3" class="collapse" aria-labelledby="headingUtilities"
               data-parent="#accordionSidebar">
               <div class="bg-white py-2 collapse-inner rounded">
                   <h6 class="collapse-header">Class Management:</h6>
                   <a class="collapse-item" href="#">Classes</a>
                   <a class="collapse-item" href="#">Subjects</a>
                   <a class="collapse-item" href="#">timetable</a>
                   <a class="collapse-item" href="#">school calender</a>

               </div>
           </div>
       </li>







       <!-- Nav Item - Pages Collapse Menu -->




       <!-- Divider -->
       <hr class="sidebar-divider d-none d-md-block">

       <!-- Sidebar Toggler (Sidebar) -->
       <div class="text-center d-none d-md-inline">
           <button class="rounded-circle border-0" id="sidebarToggle"></button>
       </div>

   </ul>
   <!-- End of Sidebar -->
