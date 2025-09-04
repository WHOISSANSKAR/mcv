<!-- resources/views/mcv_user/add-user.blade.php -->
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
    <h1>Add User</h1>
    <form method="post" action="">
      <div class="form-grid">

        <div class="form-group">
          <label>Company Name</label>
          <input type="text" name="company" placeholder="Enter company name" />
        </div>

        <div class="form-group">
          <label>User Name</label>
          <input type="text" name="username" placeholder="Enter user name" />
        </div>

        <div class="form-group">
          <label>Department</label>
          <input type="text" name="department" placeholder="Enter department" />
        </div>

        <div class="form-group">
          <label>E-Mail Address</label>
          <input type="email" name="email" placeholder="Enter email address" />
        </div>

        <div class="form-group">
          <label>Contact Number</label>
          <input type="text" name="contact" placeholder="Enter contact number" />
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter password" />
        </div>

      </div>

      <hr />

      <h2 class="section-heading" style="margin-top:30px;">Escalation</h2>

      <p>If not complied in stipulated period, alert will be sent 2 days before the action date.</p>

      <div class="form-grid">
        <div class="form-group full-width">
          <label>Escalation Email ID</label>
          <input type="email" name="escalation_email" placeholder="Enter escalation email" />
        </div>
      </div>

      <div class="form-group full-width">
        <button type="submit" class="confirm-btn">Add User</button>
      </div>
    </form>
  </main>
</div>

@include('mcv_user.partials.footer')
<script src="{{ asset('js/mcv_user/script.js') }}"></script>
</body>
</html>
