<!-- resources/views/mcv_user/not-found.blade.php -->
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
    <h1>Add Compliance</h1>
    <div class="form-grid">
      <div class="form-group">
        <label for="act">Act</label>
        <input type="text" id="act" name="act" placeholder="" />
      </div>

      <div class="form-group">
        <label for="compliance-name">Compliance Name</label>
        <input type="text" id="compliance-name" name="compliance_name" placeholder="" />
      </div>

      <div class="form-group full-width">
        <label for="description">Description</label>
        <textarea id="description" name="description" rows="5"></textarea>
      </div>

      <div class="form-group">
        <button class="filter-btn">Create</button>
      </div>
    </div>
  </main>
</div>

@include('mcv_user.partials.footer')
</body>
</html>
