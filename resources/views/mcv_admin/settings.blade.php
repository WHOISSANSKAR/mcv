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
  {{-- Navbar (dropdown version) --}}
  @include('mcv_admin.partials.navbar')

  <main>
    <h1>Settings</h1>
    <div class="form-grid">

      {{-- Company --}}
      <div class="form-group">
        <label>Company</label>
        <input type="text" />
      </div>

      {{-- Domain --}}
      <div class="form-group">
        <label>Domain</label>
        <input type="text" />
      </div>

      {{-- Email --}}
      <div class="form-group">
        <label>Email</label>
        <input type="email" />
      </div>

      {{-- Department --}}
      <div class="form-group">
        <label>Department</label>
        <input type="text" />
      </div>

      {{-- User Dropdown --}}
      <div class="form-group full-width">
        <label>User</label>
        <select>
          <option selected>Select User</option>
          <option>User 1</option>
          <option>User 2</option>
        </select>
      </div>

      {{-- Password --}}
      <div class="form-group">
        <label>Create Password:</label>
        <input type="password" placeholder="New Password" />
      </div>

      <div class="form-group">
        <label>Confirm Password:</label>
        <input type="password" placeholder="Confirm Password" />
      </div>

      {{-- Confirm Button --}}
      <div class="form-group full-width">
        <button class="confirm-btn">Confirm Password</button>
      </div>

    </div>
  </main>
</div>

{{-- Footer --}}
@include('mcv_admin.partials.footer')

<!-- Scripts -->
<script src="{{ asset('js/mcv_admin/script.js') }}"></script>
</body>
</html>
