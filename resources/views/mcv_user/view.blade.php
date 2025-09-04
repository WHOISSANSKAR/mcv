<!-- resources/views/mcv_user/view.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>My ComplianceView Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/mcv_user/style.css') }}" />
</head>

<body>
<div class="content-wrapper">
  @include('mcv_user.partials.navbar')

  <main>
    <header>
      <h2>Edit Compliance</h2>
    </header>

    <div class="table-wrapper">
      <table id="Table" class="data-table">
  <thead>
    <tr>
      <th>Compliance <i class="fa-solid fa-sort"></i></th>
      <th>Start Date <i class="fa-solid fa-sort"></i></th>
      <th>Action Date <i class="fa-solid fa-sort"></i></th>
      <th>End Date <i class="fa-solid fa-sort"></i></th>
      <th>Rem. before<i class="fa-solid fa-sort"></i></th>
      <th>Status <i class="fa-solid fa-sort"></i></th>
      <th>Approver's E-mail <i class="fa-solid fa-sort"></i></th>
      <th>Attachment <i class="fa-solid fa-sort"></i></th>
      <th>Action <i class="fa-solid fa-sort"></i></th>
      <th>Edit <i class="fa-solid fa-sort"></i></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-label="Compliance">REFER TO STATE RULES 1</td>
      <td data-label="Start Date">01-04-2025</td>
      <td data-label="Action Date">31-01-2026</td>
      <td data-label="End Date">31-03-2026</td>
      <td data-label="Rem. before">3 Days</td>
      <td data-label="Status">Approved</td>
      <td data-label="Approver's E-mail">kunal@pseudoteam.com</td>
      <td data-label="Attachment">
        <div class="file-upload-wrapper">
          <input type="file" id="fileInput" hidden onchange="document.getElementById('fileName').textContent = this.files[0]?.name || 'No file chosen'">
          <label for="fileInput" class="custom-file-upload">Choose File</label>
          <span id="fileName" class="file-name">No file chosen</span>
        </div>
      </td>
      <td data-label="Action"><button class="edit-btn">Submit</button></td>
      <td data-label="Edit"><button class="edit-btn">Edit</button></td>
    </tr>
  </tbody>
</table>

      </div>
    <div class="delete-all-container">
    <button class="delete-btn">Delete All</button>
</div>
      </div>

      
      <div id="pagination"></div>
  </main>
</div>

@include('mcv_user.partials.footer')
<script src="{{ asset('js/mcv_user/script.js') }}"></script>
</body>
</html>
