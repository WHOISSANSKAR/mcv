<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Manage Users - My ComplianceView</title>

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/mcv_admin/style.css') }}">
  <style>
  /* === Top Navbar === */
  .top-navbar {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    background-color: #fff;
    padding: 10px 20px;
    border-bottom: 1px solid #ddd;
    height: 60px;
  }
  .top-navbar .aside-logo img {
    height: 40px;
    width: auto;
    display: block;
  }
  .dropdown-wrapper {
  position: relative;
  top: -60px; /* moves only this section upward slightly */
}

</style>

</head>
<body>
  <!-- Top Navbar -->
  <header class="top-navbar">
    <a href="{{ url('add_users') }}" class="aside-logo">
      <img src="{{ asset('images/logo.png') }}" alt="Logo">
    </a>
  </header>

  
    <div class="content-wrapper">
      <main>
        <!-- Dropdown Selector -->
        <div class="dropdown-wrapper">
  <div class="form-group" style="width: 30%;">
    <label for="formSelector"><strong>Select Form:</strong></label><br/>
    <select id="formSelector" style="width: 100%; border-radius: 10px;">
      <option value="">-- Choose an option --</option>
      <option value="userListForm">Add User List</option>
      <option value="userGroupForm">Add User Group</option>
    </select>
  </div>
</div>

        <!-- USER LIST FORM -->
        <div id="userListForm" style="display:none;">
          <header>
            <h2>Add New User List Entry</h2>
          </header>
          <form method="POST" action="{{ route('userlist.store') }}">
            @csrf
            <div class="form-grid">
              <div class="form-group">
                <label for="usrlst_name">Name</label><br />
                <input type="text" id="usrlst_name" name="usrlst_name" placeholder="Enter Full Name" required />
              </div>

              <div class="form-group">
                <label for="usrlst_email">Email</label><br />
                <input type="email" id="usrlst_email" name="usrlst_email" placeholder="Enter Email" required />
              </div>

              <div class="form-group">
                <label for="usrlst_contact">Contact</label><br />
                <input type="text" id="usrlst_contact" name="usrlst_contact" placeholder="Enter Contact Number" required />
              </div>

              <div class="form-group">
                <label for="role">Role</label><br />
                <input type="text" id="role" name="role" placeholder="Enter Role" required />
              </div>

              <div class="form-group">
                <label for="department">Department</label><br />
                <input type="text" id="department" name="department" placeholder="Enter Department" required />
              </div>

              <div class="form-group">
                <label for="password">Password</label><br />
                <input type="password" id="password" name="password" placeholder="Enter Password" required />
              </div>

              <div class="form-group">
                <label for="business_unit">Business Unit</label><br />
                <input type="text" id="business_unit" name="business_unit" placeholder="Enter Business Unit" required />
              </div>

              <div class="form-group full-width" style="width: 30%; margin: 0 auto; text-align: center;">
                <button type="submit" class="confirm-btn">Add User List Entry</button>
              </div>
            </div>
          </form>
        </div>

        <!-- USER GROUP FORM -->
        <div id="userGroupForm" style="display:none;">
          <header>
            <h2>Add User Group</h2>
          </header>
          <form method="POST" action="{{ route('usergroup.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-grid">
              <div class="form-group">
                <label for="usgrp_company_name">Company Name</label><br />
                <input type="text" id="usgrp_company_name" name="usgrp_company_name" placeholder="Enter Company Name" required />
              </div>

              <div class="form-group">
                <label for="usgrp_cin">CIN Number</label><br />
                <input type="text" id="usgrp_cin" name="usgrp_cin" placeholder="Enter CIN Number" required />
              </div>

              <div class="form-actions">
                 <label for="usgrp_govt_document">Upload Govt. Document:</label><br /><br/><br/>
  <label class="choose-file" for="govFileInput">Choose File</label>
  <span id="fileName" style="margin-left:10px; font-style:italic; color:#555;">No file chosen</span>
  <input type="file" id="govFileInput" name="usgrp_govt_document" style="display:none;" />
              </div>
              <div class="form-group"><br/><br/>
                <button type="submit" class="restore-btn" style="width:30%; margin-left:auto;">
                  Add User Group
                </button>
              </div>
            </div>
          </form>
        </div>
      </main>
    </div>
  

  <script>
    document.getElementById('formSelector').addEventListener('change', function() {
      const userListForm = document.getElementById('userListForm');
      const userGroupForm = document.getElementById('userGroupForm');
      userListForm.style.display = this.value === 'userListForm' ? 'block' : 'none';
      userGroupForm.style.display = this.value === 'userGroupForm' ? 'block' : 'none';
    });

    const govFileInput = document.getElementById('govFileInput');
  const fileNameSpan = document.getElementById('fileName');

  govFileInput.addEventListener('change', function() {
    if (this.files && this.files.length > 0) {
      fileNameSpan.textContent = this.files[0].name;
    } else {
      fileNameSpan.textContent = "No file chosen";
    }
  });
  </script>
</body>
</html>
