   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

       <!-- Sidebar - Brand -->
       <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

           <div class="sidebar-brand-text m-2">{{ $school->school_name }}</div>
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
           <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#classroom" aria-expanded="true"
               aria-controls="collapseTwo">
               <i class="fas fa-fw fa-user"></i>
               <span>Classroom</span>
           </a>
           <div id="classroom" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
               <div class="bg-white py-2 collapse-inner rounded">
                   <h6 class="collapse-header">Manage Classrooms</h6>
                   <a class="collapse-item" href="{{ route('classroom.index') }}">Classroom</a>

               </div>
           </div>
       </li>

       <!-- Nav Item - Utilities Collapse Menu -->
       <li class="nav-item">
           <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#students" aria-expanded="true"
               aria-controls="collapseUtilities">
               <i class="fas fa-fw fa-user-graduate"></i>
               <span>Students</span>
           </a>
           <div id="students" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
               <div class="bg-white py-2 collapse-inner rounded">
                   <h6 class="collapse-header">Manage Students:</h6>
                   <a class="collapse-item" href="{{ route('student.index') }}">Students</a>


               </div>
           </div>
       </li>

       <!-- Nav Item - Utilities Collapse Menu -->
       <li class="nav-item">
           <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#subjects" aria-expanded="true"
               aria-controls="collapseUtilities">
               <i class="fas fa-fw fa-sticky-note"></i>
               <span>Subjects</span>
           </a>
           <div id="subjects" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
               <div class="bg-white py-2 collapse-inner rounded">
                   <h6 class="collapse-header">Manage Subjects:</h6>
                   <a class="collapse-item" href="{{ route('subject.index') }}">Subject</a>


               </div>
           </div>
       </li>



       <!-- Nav Item - Utilities Collapse Menu -->
       <li class="nav-item">
           <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#fees" aria-expanded="true"
               aria-controls="collapseUtilities">
               <i class="fas fa-fw fa-dollar-sign"></i>
               <span>Fees</span>
           </a>
           <div id="fees" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
               <div class="bg-white py-2 collapse-inner rounded">
                   <h6 class="collapse-header">Manage Fees:</h6>
                   <a class="collapse-item" href="{{ route('fee.index') }}">Fees</a>


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
