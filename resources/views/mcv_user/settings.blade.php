<!-- resources/views/mcv_user/settings.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>My ComplianceView Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/mcv_user/style.css') }}" />
</head>
<body>
<div class="content-wrapper">
  @include('mcv_user.partials.navbar')

  <main>
    <h1>Settings</h1>
    <div class="form-grid">
      <div class="form-group">
        <label>Company</label>
        <input type="text" name="company" />
      </div>
      <div class="form-group">
        <label>Domain</label>
        <input type="text" name="domain" />
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" />
      </div>
      <div class="form-group">
        <label>Department</label>
        <input type="text" name="department" />
      </div>
      <div class="form-group full-width">
        <label>User</label>
        <select name="user">
          <option selected>Select User</option>
          <option>User 1</option>
          <option>User 2</option>
        </select>
      </div>
      <div class="form-group">
        <label>Create Password:</label>
        <input type="password" name="new_password" placeholder="New Password" />
      </div>
      <div class="form-group">
        <label>Confirm Password:</label>
        <input type="password" name="confirm_password" placeholder="Confirm Password" />
      </div>
      <div class="form-group full-width">
        <button class="confirm-btn">Confirm Password</button>
      </div>
    </div>
  </main>
</div>

@include('mcv_user.partials.footer')

</body>
</html>
