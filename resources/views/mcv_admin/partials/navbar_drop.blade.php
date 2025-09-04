<!-- Toggle checkbox (hidden) -->
<input type="checkbox" id="menu-toggle">

<!-- Hamburger icon (label for checkbox) -->
<label for="menu-toggle" class="hamburger">☰</label>

<!-- Left Aside Navigation -->
<aside>
  <h1>
    <a href="{{ url('admin') }}" class="aside-logo">
      <img src="{{ asset('images/logo.png') }}" alt="Logo">
    </a>
  </h1>

  <a href="{{ url('admin') }}" class="nav-item">
    <i class="fas fa-tachometer-alt"></i> Dashboard
  </a>

  <!-- User & Department dropdown -->
  <div class="dropdown" tabindex="0">
    <div class="nav-item"><i class="fas fa-shield-alt"></i> User & Department</div>
    <div class="dropdown-content">
      <a href="{{ url('user') }}"><i class="fas fa-user"></i> User</a>
      <a href="{{ url('activity') }}"><i class="fas fa-chart-line"></i> Activity</a>
      <a href="{{ url('department') }}"><i class="fa-solid fa-building"></i> Department</a>
    </div>
  </div>

  <!-- Reports dropdown -->
  <div class="dropdown reports-dropdown" tabindex="0">
    <a href="{{ url('report') }}" class="nav-item reports-toggle">
      <i class="fas fa-chart-bar"></i> Reports
    </a>
    <div class="dropdown-content">
      <a href="{{ url('compliance') }}"><i class="fas fa-user"></i> Compliance</a>
      <a href="{{ url('upcoming') }}"><i class="fas fa-clock"></i> Upcoming</a>
      <a href="{{ url('pending') }}"><i class="fas fa-hourglass-half"></i> Pending</a>
      <a href="{{ url('approved') }}"><i class="fas fa-check-circle"></i> Approved</a>
    </div>
  </div>

  <a href="{{ url('restore') }}" class="nav-item">
    <i class="fas fa-window-restore"></i> Restore and Replace
  </a>

  <a href="{{ url('settings') }}" class="nav-item">
    <i class="fas fa-cogs"></i> Settings
  </a>

  <a href="{{ url('accounts') }}" class="nav-item">
    <i class="fas fa-user-circle"></i> Accounts
  </a>

  <!-- User Card Button -->
  <button id="user-card" type="button" class="user-card-wrapper">
    <div class="user-card">
      <img src="{{ asset('images/user.png') }}" alt="User avatar">
      <span>User</span>
      <i class="fas fa-chevron-right"></i>
    </div>
  </button>
</aside>


<!-- Sidebar -->
<div id="sidebar" class="sidebar">
  <button class="back-btn">← Back</button>
  <div class="sidebar-header">
    <img src="{{ asset('images/user.png') }}" alt="User avatar">
    <span class="username">Name</span>
  </div>

  <ul class="sidebar-menu">
    <li><i class="fas fa-bell"></i> Notification</li>
    <li><i class="fas fa-envelope"></i> Email</li>
    <li><i class="fas fa-file-alt"></i> Terms Of Services</li>
  </ul>

  <div class="sidebar-footer">
    <p>Let's start!</p>
    <button class="add-task"><i class="fas fa-plus"></i> Add New Task</button>
  </div>
</div>


<script>
  const userBtn = document.getElementById("user-card");
  const sidebar = document.getElementById("sidebar");
  const backBtn = document.querySelector(".back-btn");

  // Toggle sidebar on user button click
  userBtn.addEventListener("click", (e) => {
    e.stopPropagation(); // prevent triggering document click
    sidebar.classList.toggle("active");
  });

  // Close sidebar when clicking anywhere else
  document.addEventListener("click", (e) => {
    if (!sidebar.contains(e.target) && !userBtn.contains(e.target)) {
      sidebar.classList.remove("active");
    }
  });

  // Close sidebar when back button is clicked (mobile only)
  if (backBtn) {
    backBtn.addEventListener("click", (e) => {
      e.stopPropagation();
      sidebar.classList.remove("active");
    });
  }
</script>


<script src="{{ asset('js/mcv_admin/script.js') }}"></script>

