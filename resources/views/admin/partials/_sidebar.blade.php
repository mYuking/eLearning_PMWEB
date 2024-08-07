 @php
  $currentRoute = Route::current()->uri;
  @endphp
 
 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link @if($currentRoute != 'admin/dashboard') collapsed @endif collapsed" href="/admin/dashboard">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  @if(Auth::user()->role == 'administrator')
  <li class="nav-item">
    <a class="nav-link @if($currentRoute != '/admin/student') collapsed @endif  "href="/admin/student">
      <i class="bi bi-grid"></i>
      <span>Student</span>
    </a>
  </li>
  @endif


  <li class="nav-item">
        <a class="nav-link  @if($currentRoute != 'admin/courses') collapsed @endif" href="courses">
          <i class="bi bi-book"></i>
          <span>Courses</span>
        </a>
      </li>
</aside><!-- End Sidebar-->