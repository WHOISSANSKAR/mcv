<!-- resources/views/mcv_user/add-statutory.blade.php -->
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
  <div class="page-container">
    <div class="content-wrapper">
      @include('mcv_user.partials.navbar')

      <main>
        <h1>Add Compliances</h1>
        <div class="form-grid">
          <div class="form-group full-width">
            <label for="country">Select Country</label>
            <select id="country">
              <option selected>India</option>
            </select>
          </div>

          <div class="form-group full-width">
            <label for="act">Select Act</label>
            <select id="act">
              <option selected>Select</option>
              <option>Act 1</option>
              <option>Act 2</option>
              <option>Act 3</option>
            </select>
          </div>

          <div class="form-group">
            <button class="filter-btn">Filter</button>
          </div>

          <div class="form-group full-width">
            <a href="{{ url('not-found_') }}" style="color: red; text-decoration: none;">
              Compliance not found?
            </a>
          </div>
        </div>
      </main>
    </div>
  </div>

  @include('mcv_user.partials.footer')
  <script src="{{ asset('js/mcv_user/script.js') }}"></script>
</body>
</html>
