<!-- Toggle checkbox (hidden) -->
<input type="checkbox" id="menu-toggle">

<!-- Hamburger icon (label for checkbox) -->
<label for="menu-toggle" class="hamburger">☰</label>

<!-- Overlay -->
<div class="overlay"></div>

<aside>
  <h1>
    <a href="{{ url('user') }}" class="aside-logo">
      <img src="{{ asset('images/logo.png') }}" alt="Logo">
    </a>
  </h1>

  <a href="{{ url('user') }}" class="nav-item">
    <i class="fas fa-tachometer-alt"></i> Dashboard
  </a>

  <!-- Compliance dropdown -->
  <div class="dropdown">
    <div class="nav-item"><i class="fas fa-shield-alt"></i> Compliance</div>
    <div class="dropdown-content">
      <!-- Add -->
      <div class="sub-dropdown">
        <a><i class="fa-solid fa-plus"></i> Add</a>
        <div class="sub-dropdown-content">
          <a href="{{ url('add-statutory_') }}"><i class="fa-solid fa-file-contract"></i> Statutory</a>
          <a href="{{ url('add-self_') }}"><i class="fa-solid fa-user-check"></i> Self</a>
          <a href="{{ url('add-dc_') }}"><i class="fa-solid fa-leaf"></i> DC Sustainability</a>
          <a href="{{ url('add-geo_') }}"><i class="fa-solid fa-globe"></i> Geo-Spatial</a>
          <a href="{{ url('add-dpdp_') }}"><i class="fa-solid fa-book"></i> DPDP Act</a>
          <a href="{{ url('add-cyber_') }}"><i class="fa-solid fa-wifi"></i> Cyber Resiliance</a>
          <a href="{{ url('add-notices_') }}"><i class="fa-solid fa-bell"></i> Notices</a>  
        </div>
      </div>
      <!-- Manage -->
      <div class="sub-dropdown">
        <a><i class="fa-solid fa-people-roof"></i> Manage</a>
        <div class="sub-dropdown-content">
          <a href="{{ url('manage-statutory_') }}"><i class="fa-solid fa-file-contract"></i> Statutory</a>
          <a href="{{ url('manage-self_') }}"><i class="fa-solid fa-user-check"></i> Self</a>
          <a href="{{ url('manage-dc_') }}"><i class="fa-solid fa-leaf"></i> DC Sustainability</a>
          <a href="{{ url('manage-geo_') }}"><i class="fa-solid fa-globe"></i> Geo-Spatial</a>
          <a href="{{ url('manage-dpdp_') }}"><i class="fa-solid fa-book"></i> DPDP Act</a>
          <a href="{{ url('manage-cyber_') }}"><i class="fa-solid fa-wifi"></i> Cyber Resiliance</a>
          <a href="{{ url('manage-notices_') }}"><i class="fa-solid fa-bell"></i> Notices</a>  
        </div>
      </div>
    </div>
  </div>

  <!-- Reports dropdown -->
  <div class="dropdown">
    <div class="nav-item"><i class="fa-solid fa-file"></i> Reports</div>
    <div class="dropdown-content">
      <a href="{{ url('compliance_') }}"><i class="fa-regular fa-file"></i> General report</a>
      <a href="{{ url('report_') }}"><i class="fa-solid fa-chart-line"></i> Report</a>
    </div>
  </div>

  <!-- Assessments dropdown -->
  <div class="dropdown">
    <div class="nav-item"><i class="fa-solid fa-arrows-to-eye"></i> Assessments</div>
    <div class="dropdown-content">
      <!-- DPDPA -->
      <div class="sub-dropdown">
        <a><i class="fa-solid fa-pen"></i> DPDPA</a>
        <div class="sub-dropdown-content">
          <a href="{{ url('dpdpa-start_') }}"><i class="fa-solid fa-play"></i> Start</a>
          <a href="{{ url('dpdpa-view_') }}"><i class="fa-solid fa-eye"></i> View</a>
        </div>
      </div>
      <!-- DPDP Act -->
      <div class="sub-dropdown">
        <a><i class="fa-solid fa-pencil"></i> DPDP Act</a>
        <div class="sub-dropdown-content">
          <a href="{{ url('dpdpact-start_') }}"><i class="fa-solid fa-play"></i> Start</a>
          <a href="{{ url('dpdpact-view_') }}"><i class="fa-solid fa-eye"></i> View</a>
        </div>
      </div>
    </div>
  </div>

  <!-- General dropdown -->
  <div class="dropdown">
    <div class="nav-item"><i class="fa-solid fa-globe"></i> General</div>
    <div class="dropdown-content">
      <a href="{{ url('outofoffice_') }}"><i class="fas fa-calendar-times"></i> Out of Office</a>
      <a href="tns_"><i class="fa-solid fa-file-contract"></i> Terms of office</a>
      <a href="{{ url('settings_') }}"><i class="fa-solid fa-gear"></i> Settings</a>
    </div>
  </div>

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

  // helper: disable/enable scrolling
  function toggleScroll(disable) {
    if (disable) {
      document.body.style.overflow = "hidden";
    } else {
      document.body.style.overflow = "";
    }
  }

  // Toggle sidebar on user button click
  userBtn.addEventListener("click", (e) => {
    e.stopPropagation(); // prevent triggering document click
    sidebar.classList.toggle("active");
    toggleScroll(sidebar.classList.contains("active"));
  });

  // Close sidebar when clicking anywhere else
  document.addEventListener("click", (e) => {
    if (!sidebar.contains(e.target) && !userBtn.contains(e.target)) {
      sidebar.classList.remove("active");
      toggleScroll(false);
    }
  });

  // Close sidebar when back button is clicked (mobile only)
  if (backBtn) {
    backBtn.addEventListener("click", (e) => {
      e.stopPropagation();
      sidebar.classList.remove("active");
      toggleScroll(false);
    });
  }

  document.addEventListener('DOMContentLoaded', () => {
  const dropdownLinks = document.querySelectorAll('.sub-dropdown > a');

  dropdownLinks.forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      e.stopPropagation(); // stop the click from reaching document

      const parent = link.parentElement;
      const isOpen = parent.classList.contains('open');

      // Close all dropdowns first
      document.querySelectorAll('.sub-dropdown.open')
        .forEach(item => item.classList.remove('open'));

      // Toggle the clicked one if it was not open
      if (!isOpen) {
        parent.classList.add('open');
      }
    });
  });

  // Close dropdowns when clicking outside
  document.addEventListener('click', () => {
    document.querySelectorAll('.sub-dropdown.open')
      .forEach(item => item.classList.remove('open'));
  });
});
</script>
