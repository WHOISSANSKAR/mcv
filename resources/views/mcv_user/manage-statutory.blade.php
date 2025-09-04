<!-- resources/views/mcv_user/manage-statutory.blade.php -->
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
  <div class="page-container">
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
                <th>Comp_ID <i class="fa-solid fa-sort"></i></th>
                <th>Compliance <i class="fa-solid fa-sort"></i></th>
                <th>Start Date <i class="fa-solid fa-sort"></i></th>
                <th>End Date <i class="fa-solid fa-sort"></i></th>
                <th>Action <i class="fa-solid fa-sort"></i></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="bold" data-label="Comp_ID">REGSTFACTORIES01</td>
                <td data-label="Compliance">REFER TO STATE RULES 1</td>
                <td data-label="Start Date">01-04-2025</td>
                <td data-label="End Date">31-03-2026</td>
                <td data-label="Action">
                  <button class="edit-btn" onclick="window.location.href='{{ url('view_') }}'">View</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div id="pagination"></div>
      </main>
    </div>

    @include('mcv_user.partials.footer')

   <script src="{{ asset('js/mcv_admin/script.js') }}"></script>
  </div>
</body>
</html>
