<!-- resources/views/mcv_user/edit-user.blade.php -->
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
    <h1>Edit User</h1>

    <form method="POST" action="">
      @csrf
      <div class="form-grid">

        <div class="form-group">
          <label>Company Name</label>
          <input type="text" name="company" />
        </div>

        <div class="form-group">
          <label>User Name</label>
          <input type="text" name="username" />
        </div>

        <div class="form-group">
          <label>Department</label>
          <input type="text" name="department" />
        </div>

        <div class="form-group">
          <label>E-Mail Address</label>
          <input type="email" name="email" />
        </div>

        <div class="form-group">
          <label>Contact Number</label>
          <input type="text" name="contact" />
        </div>

        <div class="form-group">
          <label>Escalation Email</label>
          <input type="email" name="escalation_email" />
        </div>

        <div class="form-group">
          <label>Status</label>
          <select name="status">
            <option selected>Active</option>
            <option>Inactive</option>
          </select>
        </div>

      </div>

      <div class="form-group">
        <button type="submit" class="confirm-btn" style="background:#1c2233; color:white;">Update User</button>
      </div>
      <div class="form-group">
        <button type="button" class="confirm-btn" style="background:#0e1323; color:white;">Delete User</button>
      </div>

      <div style="text-align:right; margin-top:20px;">
        <button type="button" style="padding:8px 16px; background:#ccc; border-radius:6px; border:none;">Take Backup</button>
      </div>
    </form>
  </main>
</div>

@include('mcv_user.partials.footer')
<script src="{{ asset('js/mcv_user/script.js') }}"></script>
</body>
</html>
