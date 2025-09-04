<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>My ComplianceView Dashboard</title>

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/mcv_admin/style.css') }}">
</head>
<body>
  
<div class="content-wrapper">

  {{-- Navbar --}}
  @include('mcv_admin.partials.navbar')

  <main>
    <header>
      <div>
        <h2>User List</h2>
        <p>See your User information here!</p>
      </div>
      
      <div class="add-compliance">
        <a href="{{ url('user') }}" style="text-decoration: none;">
          <button><i class="fas fa-plus-circle"></i>&nbsp;Compliance Zone</button>
        </a>
      </div>
    </header>

    {{-- Table Header --}}
    <div class="table-header">
      <h6>Departmental Users</h6>
      <div class="table-actions">
        <button><i class="fa-solid fa-trash"></i> Delete</button>
        <button><i class="fa-solid fa-filter"></i> Filter</button>
        <button><i class="fa-solid fa-download"></i> Export</button>
        <button class="add-user" onclick="window.location.href='{{ url('add-user') }}'">
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
            <th>E-mail <i class="fa-solid fa-sort"></i></th>
            <th>Company <i class="fa-solid fa-sort"></i></th>
            <th>Contact <i class="fa-solid fa-sort"></i></th>
            <th>Escalation E-mail <i class="fa-solid fa-sort"></i></th>
            <th>Status <i class="fa-solid fa-sort"></i></th>
            <th>Action <i class="fa-solid fa-sort"></i></th>
          </tr>
        </thead>
        <tbody>
          {{-- Example row (replace with @foreach loop later for DB data) --}}
          <tr>
            <td class="bold" data-label="Department">Development</td>
            <td data-label="Name">Sanskar</td>
            <td data-label="E-mail">sanskarsharma0119@gmail.com</td>
            <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
            <td data-label="Contact">1234567890</td>
            <td data-label="Escalation E-mail">Kunal@f1infotech.com</td>
            <td class="status" data-label="Status">Active</td>
            <td data-label="Action">
              <button class="edit-btn" onclick="window.location.href='{{ url('edit-user') }}'">Edit</button>
            </td>
          </tr>
          <tr>
            <td class="bold" data-label="Department">Development</td>
            <td data-label="Name">Sanskar</td>
            <td data-label="E-mail">sanskarsharma0119@gmail.com</td>
            <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
            <td data-label="Contact">1234567890</td>
            <td data-label="Escalation E-mail">Kunal@f1infotech.com</td>
            <td class="status" data-label="Status">Active</td>
            <td data-label="Action">
              <button class="edit-btn" onclick="window.location.href='{{ url('edit-user') }}'">Edit</button>
            </td>
          </tr>
          <tr>
            <td class="bold" data-label="Department">Development</td>
            <td data-label="Name">Sanskar</td>
            <td data-label="E-mail">sanskarsharma0119@gmail.com</td>
            <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
            <td data-label="Contact">1234567890</td>
            <td data-label="Escalation E-mail">Kunal@f1infotech.com</td>
            <td class="status" data-label="Status">Active</td>
            <td data-label="Action">
              <button class="edit-btn" onclick="window.location.href='{{ url('edit-user') }}'">Edit</button>
            </td>
          </tr>
          <tr>
            <td class="bold" data-label="Department">Development</td>
            <td data-label="Name">Sanskar</td>
            <td data-label="E-mail">sanskarsharma0119@gmail.com</td>
            <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
            <td data-label="Contact">1234567890</td>
            <td data-label="Escalation E-mail">Kunal@f1infotech.com</td>
            <td class="status" data-label="Status">Active</td>
            <td data-label="Action">
              <button class="edit-btn" onclick="window.location.href='{{ url('edit-user') }}'">Edit</button>
            </td>
          </tr>
          <tr>
            <td class="bold" data-label="Department">Development</td>
            <td data-label="Name">Sanskar</td>
            <td data-label="E-mail">sanskarsharma0119@gmail.com</td>
            <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
            <td data-label="Contact">1234567890</td>
            <td data-label="Escalation E-mail">Kunal@f1infotech.com</td>
            <td class="status" data-label="Status">Active</td>
            <td data-label="Action">
              <button class="edit-btn" onclick="window.location.href='{{ url('edit-user') }}'">Edit</button>
            </td>
          </tr>
          <tr>
            <td class="bold" data-label="Department">Development</td>
            <td data-label="Name">Sanskar</td>
            <td data-label="E-mail">sanskarsharma0119@gmail.com</td>
            <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
            <td data-label="Contact">1234567890</td>
            <td data-label="Escalation E-mail">Kunal@f1infotech.com</td>
            <td class="status" data-label="Status">Active</td>
            <td data-label="Action">
              <button class="edit-btn" onclick="window.location.href='{{ url('edit-user') }}'">Edit</button>
            </td>
          </tr>
          <tr>
            <td class="bold" data-label="Department">Development</td>
            <td data-label="Name">Sanskar</td>
            <td data-label="E-mail">sanskarsharma0119@gmail.com</td>
            <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
            <td data-label="Contact">1234567890</td>
            <td data-label="Escalation E-mail">Kunal@f1infotech.com</td>
            <td class="status" data-label="Status">Active</td>
            <td data-label="Action">
              <button class="edit-btn" onclick="window.location.href='{{ url('edit-user') }}'">Edit</button>
            </td>
          </tr>
          <tr>
            <td class="bold" data-label="Department">Development</td>
            <td data-label="Name">Sanskar</td>
            <td data-label="E-mail">sanskarsharma0119@gmail.com</td>
            <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
            <td data-label="Contact">1234567890</td>
            <td data-label="Escalation E-mail">Kunal@f1infotech.com</td>
            <td class="status" data-label="Status">Active</td>
            <td data-label="Action">
              <button class="edit-btn" onclick="window.location.href='{{ url('edit-user') }}'">Edit</button>
            </td>
          </tr>
          <tr>
            <td class="bold" data-label="Department">Development</td>
            <td data-label="Name">Sanskar</td>
            <td data-label="E-mail">sanskarsharma0119@gmail.com</td>
            <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
            <td data-label="Contact">1234567890</td>
            <td data-label="Escalation E-mail">Kunal@f1infotech.com</td>
            <td class="status" data-label="Status">Active</td>
            <td data-label="Action">
              <button class="edit-btn" onclick="window.location.href='{{ url('edit-user') }}'">Edit</button>
            </td>
          </tr>
          <tr>
            <td class="bold" data-label="Department">Development</td>
            <td data-label="Name">Sanskar</td>
            <td data-label="E-mail">sanskarsharma0119@gmail.com</td>
            <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
            <td data-label="Contact">1234567890</td>
            <td data-label="Escalation E-mail">Kunal@f1infotech.com</td>
            <td class="status" data-label="Status">Active</td>
            <td data-label="Action">
              <button class="edit-btn" onclick="window.location.href='{{ url('edit-user') }}'">Edit</button>
            </td>
          </tr>
          <tr>
            <td class="bold" data-label="Department">Development</td>
            <td data-label="Name">Sanskar</td>
            <td data-label="E-mail">sanskarsharma0119@gmail.com</td>
            <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
            <td data-label="Contact">1234567890</td>
            <td data-label="Escalation E-mail">Kunal@f1infotech.com</td>
            <td class="status" data-label="Status">Active</td>
            <td data-label="Action">
              <button class="edit-btn" onclick="window.location.href='{{ url('edit-user') }}'">Edit</button>
            </td>
          </tr>
          <tr>
            <td class="bold" data-label="Department">Development</td>
            <td data-label="Name">Sanskar</td>
            <td data-label="E-mail">sanskarsharma0119@gmail.com</td>
            <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
            <td data-label="Contact">1234567890</td>
            <td data-label="Escalation E-mail">Kunal@f1infotech.com</td>
            <td class="status" data-label="Status">Active</td>
            <td data-label="Action">
              <button class="edit-btn" onclick="window.location.href='{{ url('edit-user') }}'">Edit</button>
            </td>
          </tr>
          <tr>
            <td class="bold" data-label="Department">Development</td>
            <td data-label="Name">Sanskar</td>
            <td data-label="E-mail">sanskarsharma0119@gmail.com</td>
            <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
            <td data-label="Contact">1234567890</td>
            <td data-label="Escalation E-mail">Kunal@f1infotech.com</td>
            <td class="status" data-label="Status">Active</td>
            <td data-label="Action">
              <button class="edit-btn" onclick="window.location.href='{{ url('edit-user') }}'">Edit</button>
            </td>
          </tr>
          <tr>
            <td class="bold" data-label="Department">Development</td>
            <td data-label="Name">Sanskar</td>
            <td data-label="E-mail">sanskarsharma0119@gmail.com</td>
            <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
            <td data-label="Contact">1234567890</td>
            <td data-label="Escalation E-mail">Kunal@f1infotech.com</td>
            <td class="status" data-label="Status">Active</td>
            <td data-label="Action">
              <button class="edit-btn" onclick="window.location.href='{{ url('edit-user') }}'">Edit</button>
            </td>
          </tr>
          <tr>
            <td class="bold" data-label="Department">Development</td>
            <td data-label="Name">Sanskar</td>
            <td data-label="E-mail">sanskarsharma0119@gmail.com</td>
            <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
            <td data-label="Contact">1234567890</td>
            <td data-label="Escalation E-mail">Kunal@f1infotech.com</td>
            <td class="status" data-label="Status">Active</td>
            <td data-label="Action">
              <button class="edit-btn" onclick="window.location.href='{{ url('edit-user') }}'">Edit</button>
            </td>
          </tr>
          <tr>
            <td class="bold" data-label="Department">Development</td>
            <td data-label="Name">Sanskar</td>
            <td data-label="E-mail">sanskarsharma0119@gmail.com</td>
            <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
            <td data-label="Contact">1234567890</td>
            <td data-label="Escalation E-mail">Kunal@f1infotech.com</td>
            <td class="status" data-label="Status">Active</td>
            <td data-label="Action">
              <button class="edit-btn" onclick="window.location.href='{{ url('edit-user') }}'">Edit</button>
            </td>
          </tr>
          <tr>
            <td class="bold" data-label="Department">Development</td>
            <td data-label="Name">Sanskar</td>
            <td data-label="E-mail">sanskarsharma0119@gmail.com</td>
            <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
            <td data-label="Contact">1234567890</td>
            <td data-label="Escalation E-mail">Kunal@f1infotech.com</td>
            <td class="status" data-label="Status">Active</td>
            <td data-label="Action">
              <button class="edit-btn" onclick="window.location.href='{{ url('edit-user') }}'">Edit</button>
            </td>
          </tr>
          <tr>
            <td class="bold" data-label="Department">Development</td>
            <td data-label="Name">Sanskar</td>
            <td data-label="E-mail">sanskarsharma0119@gmail.com</td>
            <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
            <td data-label="Contact">1234567890</td>
            <td data-label="Escalation E-mail">Kunal@f1infotech.com</td>
            <td class="status" data-label="Status">Active</td>
            <td data-label="Action">
              <button class="edit-btn" onclick="window.location.href='{{ url('edit-user') }}'">Edit</button>
            </td>
          </tr>
          <tr>
            <td class="bold" data-label="Department">Development</td>
            <td data-label="Name">Sanskar</td>
            <td data-label="E-mail">sanskarsharma0119@gmail.com</td>
            <td data-label="Company">F1 Infotech Pvt. Ltd.</td>
            <td data-label="Contact">1234567890</td>
            <td data-label="Escalation E-mail">Kunal@f1infotech.com</td>
            <td class="status" data-label="Status">Active</td>
            <td data-label="Action">
              <button class="edit-btn" onclick="window.location.href='{{ url('edit-user') }}'">Edit</button>
            </td>
          </tr>
          
          {{-- Repeat dynamically --}}
        </tbody>
      </table>
    </div>

    <div id="pagination"></div>

  </main>
</div>

{{-- Footer --}}
@include('mcv_admin.partials.footer')

<!-- Scripts -->
<script src="{{ asset('js/mcv_admin/script.js') }}"></script>
</body>
</html>
