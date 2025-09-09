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
<div class="page-container"> 

  <div class="content-wrapper">
    {{-- Navbar (dropdown version) --}}
    @include('mcv_admin.partials.navbar')

    <main>
      <header>
        <h2>Restore And Replace</h2>
      </header>

      <div class="form-container">
        {{-- Replace Email --}}
        <div class="form-group">
          <label for="email">Replace</label><br />
          <input type="text" id="email" placeholder="Email ID" />
        </div>

        {{-- Replace With User --}}
        <div class="form-group">
          <label for="user">With</label><br />
          <select id="user">
            <option value="">Select User</option>
            <option value="user1">User 1</option>
            <option value="user2">User 2</option>
          </select>
        </div>

        {{-- Actions --}}
        <div class="form-actions">
          <label for="user">Upload Backup File:</label><br /><br/><br/>
          <label class="choose-file" for="fileInput">Choose File</label>
          <input type="file" id="fileInput" style="display:none;" />
          <button class="restore-btn">Restore</button>
        </div>
      </div>
    </main>
  </div>

  {{-- Footer --}}
  @include('mcv_admin.partials.footer')

</div> 

<!-- Scripts -->
<script src="{{ asset('js/mcv_admin/script.js') }}"></script>
</body>
</html>
