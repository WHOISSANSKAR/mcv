<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>My ComplianceView Dashboard</title>

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/mcv_user/style.css') }}">
</head>
<body>
  
  <div class="content-wrapper">

    {{-- Navbar (dropdown version) --}}
    @include('mcv_user.partials.navbar')

    <main>
      <header>
        <h2>Reports</h2>
        
      </header>

      {{-- Search --}}
      <div class="table-header">
        <div class="search-input-group">
          <input type="text" class="search-input" data-col="0" placeholder="🔍︎ Search Dept">
          <input type="text" class="search-input" data-col="1" placeholder="🔍︎ Search Email">
          <input type="text" class="search-input" data-col="2" placeholder="🔍︎ Search Date">
        </div>
      </div>

      {{-- Action Buttons --}}
      <div class="table-header">
        <div></div>
        <div class="table-actions">
          <button><i class="fa-solid fa-trash"></i> Delete</button>
          <button><i class="fa-solid fa-filter"></i> Filter</button>
          <button><i class="fa-solid fa-download"></i> Export</button>
          <button class="add-user" onclick="window.location.href='{{ url('add-user_') }}'">
            <i class="fa-solid fa-user-plus"></i> Add User
          </button>
        </div>
      </div>

      {{-- Table --}}
      <div class="table-wrapper">
        <table id="Table" class="data-table">
          <thead>
            <tr>
              <th>Department <i class="fa-solid fa-sort"></i></th>
              <th>Name <i class="fa-solid fa-sort"></i></th>
              <th>Email <i class="fa-solid fa-sort"></i></th>
              <th>Company <i class="fa-solid fa-sort"></i></th>
              <th>Phone <i class="fa-solid fa-sort"></i></th>
              <th>Username <i class="fa-solid fa-sort"></i></th>
              <th>Status <i class="fa-solid fa-sort"></i></th>
              <th>Action <i class="fa-solid fa-sort"></i></th>
            </tr>
          </thead>
          <tbody>
            {{-- Example row (replace with dynamic data later) --}}
            <tr>
              <td class="bold" data-label="Department">Development</td>
              <td data-label="Name">Sanskar</td>
              <td data-label="Email">sanskarsharma0119@gmail.com</td>
              <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
              <td data-label="Phone">1234567890</td>
              <td data-label="Username">Kunal@f1infotech.com</td>
              <td class="status" data-label="Status">Active</td>
              <td data-label="Action">
                <button class="edit-btn" onclick="window.location.href='{{ url('edit-user_') }}'">Edit</button>
              </td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Development</td>
              <td data-label="Name">Sanskar</td>
              <td data-label="Email">sanskarsharma0119@gmail.com</td>
              <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
              <td data-label="Phone">1234567890</td>
              <td data-label="Username">Kunal@f1infotech.com</td>
              <td class="status" data-label="Status">Active</td>
              <td data-label="Action">
                <button class="edit-btn" onclick="window.location.href='{{ url('edit-user_') }}'">Edit</button>
              </td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Development</td>
              <td data-label="Name">Sanskar</td>
              <td data-label="Email">sanskarsharma0119@gmail.com</td>
              <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
              <td data-label="Phone">1234567890</td>
              <td data-label="Username">Kunal@f1infotech.com</td>
              <td class="status" data-label="Status">Active</td>
              <td data-label="Action">
                <button class="edit-btn" onclick="window.location.href='{{ url('edit-user_') }}'">Edit</button>
              </td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Development</td>
              <td data-label="Name">Sanskar</td>
              <td data-label="Email">sanskarsharma0119@gmail.com</td>
              <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
              <td data-label="Phone">1234567890</td>
              <td data-label="Username">Kunal@f1infotech.com</td>
              <td class="status" data-label="Status">Active</td>
              <td data-label="Action">
                <button class="edit-btn" onclick="window.location.href='{{ url('edit-use_r') }}'">Edit</button>
              </td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Development</td>
              <td data-label="Name">Sanskar</td>
              <td data-label="Email">sanskarsharma0119@gmail.com</td>
              <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
              <td data-label="Phone">1234567890</td>
              <td data-label="Username">Kunal@f1infotech.com</td>
              <td class="status" data-label="Status">Active</td>
              <td data-label="Action">
                <button class="edit-btn" onclick="window.location.href='{{ url('edit-user_') }}'">Edit</button>
              </td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Development</td>
              <td data-label="Name">Sanskar</td>
              <td data-label="Email">sanskarsharma0119@gmail.com</td>
              <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
              <td data-label="Phone">1234567890</td>
              <td data-label="Username">Kunal@f1infotech.com</td>
              <td class="status" data-label="Status">Active</td>
              <td data-label="Action">
                <button class="edit-btn" onclick="window.location.href='{{ url('edit-user_') }}'">Edit</button>
              </td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Development</td>
              <td data-label="Name">Sanskar</td>
              <td data-label="Email">sanskarsharma0119@gmail.com</td>
              <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
              <td data-label="Phone">1234567890</td>
              <td data-label="Username">Kunal@f1infotech.com</td>
              <td class="status" data-label="Status">Active</td>
              <td data-label="Action">
                <button class="edit-btn" onclick="window.location.href='{{ url('edit-user_') }}'">Edit</button>
              </td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Development</td>
              <td data-label="Name">Sanskar</td>
              <td data-label="Email">sanskarsharma0119@gmail.com</td>
              <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
              <td data-label="Phone">1234567890</td>
              <td data-label="Username">Kunal@f1infotech.com</td>
              <td class="status" data-label="Status">Active</td>
              <td data-label="Action">
                <button class="edit-btn" onclick="window.location.href='{{ url('edit-user_') }}'">Edit</button>
              </td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Development</td>
              <td data-label="Name">Sanskar</td>
              <td data-label="Email">sanskarsharma0119@gmail.com</td>
              <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
              <td data-label="Phone">1234567890</td>
              <td data-label="Username">Kunal@f1infotech.com</td>
              <td class="status" data-label="Status">Active</td>
              <td data-label="Action">
                <button class="edit-btn" onclick="window.location.href='{{ url('edit-user_') }}'">Edit</button>
              </td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Development</td>
              <td data-label="Name">Sanskar</td>
              <td data-label="Email">sanskarsharma0119@gmail.com</td>
              <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
              <td data-label="Phone">1234567890</td>
              <td data-label="Username">Kunal@f1infotech.com</td>
              <td class="status" data-label="Status">Active</td>
              <td data-label="Action">
                <button class="edit-btn" onclick="window.location.href='{{ url('edit-user_') }}'">Edit</button>
              </td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Development</td>
              <td data-label="Name">Sanskar</td>
              <td data-label="Email">sanskarsharma0119@gmail.com</td>
              <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
              <td data-label="Phone">1234567890</td>
              <td data-label="Username">Kunal@f1infotech.com</td>
              <td class="status" data-label="Status">Active</td>
              <td data-label="Action">
                <button class="edit-btn" onclick="window.location.href='{{ url('edit-user_') }}'">Edit</button>
              </td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Development</td>
              <td data-label="Name">Sanskar</td>
              <td data-label="Email">sanskarsharma0119@gmail.com</td>
              <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
              <td data-label="Phone">1234567890</td>
              <td data-label="Username">Kunal@f1infotech.com</td>
              <td class="status" data-label="Status">Active</td>
              <td data-label="Action">
                <button class="edit-btn" onclick="window.location.href='{{ url('edit-user_') }}'">Edit</button>
              </td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Development</td>
              <td data-label="Name">Sanskar</td>
              <td data-label="Email">sanskarsharma0119@gmail.com</td>
              <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
              <td data-label="Phone">1234567890</td>
              <td data-label="Username">Kunal@f1infotech.com</td>
              <td class="status" data-label="Status">Active</td>
              <td data-label="Action">
                <button class="edit-btn" onclick="window.location.href='{{ url('edit-user_') }}'">Edit</button>
              </td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Development</td>
              <td data-label="Name">Sanskar</td>
              <td data-label="Email">sanskarsharma0119@gmail.com</td>
              <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
              <td data-label="Phone">1234567890</td>
              <td data-label="Username">Kunal@f1infotech.com</td>
              <td class="status" data-label="Status">Active</td>
              <td data-label="Action">
                <button class="edit-btn" onclick="window.location.href='{{ url('edit-user_') }}'">Edit</button>
              </td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Development</td>
              <td data-label="Name">Sanskar</td>
              <td data-label="Email">sanskarsharma0119@gmail.com</td>
              <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
              <td data-label="Phone">1234567890</td>
              <td data-label="Username">Kunal@f1infotech.com</td>
              <td class="status" data-label="Status">Active</td>
              <td data-label="Action">
                <button class="edit-btn" onclick="window.location.href='{{ url('edit-user_') }}'">Edit</button>
              </td>
            </tr>
            
            {{-- Repeat rows dynamically with @foreach later --}}
          </tbody>
        </table>
      </div>

      <div id="pagination"></div>
    </main>
  </div>

  {{-- Footer --}}
  @include('mcv_user.partials.footer')

  <!-- Scripts -->
  <script src="{{ asset('js/mcv_admin/script.js') }}"></script>
</bod
