<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>My ComplianceView Dashboard - Activity</title>

  {{-- Fonts & Icons --}}
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  {{-- CSS --}}
  <link rel="stylesheet" href="{{ asset('css/mcv_admin/style.css') }}" />
</head>
<body>
  <div class="content-wrapper">
    {{-- Navbar --}}
    @include('mcv_admin.partials.navbar')

    <main>
      <header>
        <div>
          <h2>Activity Log</h2>
          <p>See all recent user activities here!</p>
        </div>
      </header>

      <div class="table-header">
        <div class="search-input-group">
          <input type="text" class="search-input" data-col="0" placeholder="🔍︎ Search Dept">
          <input type="text" class="search-input" data-col="1" placeholder="🔍︎ Search Email">
          <input type="text" class="search-input" data-col="2" placeholder="🔍︎ Search Date">
        </div>
      </div>

      <div class="table-wrapper">
        <table id="Table" class="data-table">
          <thead>
            <tr>
              <th>Department <i class="fa-solid fa-sort"></i></th>
              <th>E-mail <i class="fa-solid fa-sort"></i></th>
              <th>Date <i class="fa-solid fa-sort"></i></th>
              <th>Time <i class="fa-solid fa-sort"></i></th>
              <th>Action <i class="fa-solid fa-sort"></i></th>
            </tr>
          </thead>
          <tbody>
            {{-- Example Rows (static for now) --}}
            <tr>
              <td class="bold" data-label="Department">Admin</td>
              <td data-label="E-mail">kunal@f1infotech.com</td>
              <td data-label="Date">19-08-2025</td>
              <td data-label="Time">11:58:24</td>
              <td data-label="Action">Logged in</td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Law</td>
              <td data-label="E-mail">kunal@f1infotech.com</td>
              <td data-label="Date">19-08-2025</td>
              <td data-label="Time">11:58:24</td>
              <td data-label="Action">Logged in</td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Law</td>
              <td data-label="E-mail">kunal@f1infotech.com</td>
              <td data-label="Date">19-08-2025</td>
              <td data-label="Time">11:58:24</td>
              <td data-label="Action">Logged in</td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Law</td>
              <td data-label="E-mail">kunal@f1infotech.com</td>
              <td data-label="Date">19-08-2025</td>
              <td data-label="Time">11:58:24</td>
              <td data-label="Action">Logged in</td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Law</td>
              <td data-label="E-mail">kunal@f1infotech.com</td>
              <td data-label="Date">19-08-2025</td>
              <td data-label="Time">11:58:24</td>
              <td data-label="Action">Logged in</td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Law</td>
              <td data-label="E-mail">kunal@f1infotech.com</td>
              <td data-label="Date">19-08-2025</td>
              <td data-label="Time">11:58:24</td>
              <td data-label="Action">Logged in</td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Law</td>
              <td data-label="E-mail">kunal@f1infotech.com</td>
              <td data-label="Date">19-08-2025</td>
              <td data-label="Time">11:58:24</td>
              <td data-label="Action">Logged in</td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Law</td>
              <td data-label="E-mail">kunal@f1infotech.com</td>
              <td data-label="Date">19-08-2025</td>
              <td data-label="Time">11:58:24</td>
              <td data-label="Action">Logged in</td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Law</td>
              <td data-label="E-mail">kunal@f1infotech.com</td>
              <td data-label="Date">19-08-2025</td>
              <td data-label="Time">11:58:24</td>
              <td data-label="Action">Logged in</td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Law</td>
              <td data-label="E-mail">kunal@f1infotech.com</td>
              <td data-label="Date">19-08-2025</td>
              <td data-label="Time">11:58:24</td>
              <td data-label="Action">Logged in</td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Law</td>
              <td data-label="E-mail">kunal@f1infotech.com</td>
              <td data-label="Date">19-08-2025</td>
              <td data-label="Time">11:58:24</td>
              <td data-label="Action">Logged in</td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Law</td>
              <td data-label="E-mail">kunal@f1infotech.com</td>
              <td data-label="Date">19-08-2025</td>
              <td data-label="Time">11:58:24</td>
              <td data-label="Action">Logged in</td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Law</td>
              <td data-label="E-mail">kunal@f1infotech.com</td>
              <td data-label="Date">19-08-2025</td>
              <td data-label="Time">11:58:24</td>
              <td data-label="Action">Logged in</td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Law</td>
              <td data-label="E-mail">kunal@f1infotech.com</td>
              <td data-label="Date">19-08-2025</td>
              <td data-label="Time">11:58:24</td>
              <td data-label="Action">Logged in</td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Law</td>
              <td data-label="E-mail">kunal@f1infotech.com</td>
              <td data-label="Date">19-08-2025</td>
              <td data-label="Time">11:58:24</td>
              <td data-label="Action">Logged in</td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Law</td>
              <td data-label="E-mail">kunal@f1infotech.com</td>
              <td data-label="Date">19-08-2025</td>
              <td data-label="Time">11:58:24</td>
              <td data-label="Action">Logged in</td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Law</td>
              <td data-label="E-mail">kunal@f1infotech.com</td>
              <td data-label="Date">19-08-2025</td>
              <td data-label="Time">11:58:24</td>
              <td data-label="Action">Logged in</td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Law</td>
              <td data-label="E-mail">kunal@f1infotech.com</td>
              <td data-label="Date">19-08-2025</td>
              <td data-label="Time">11:58:24</td>
              <td data-label="Action">Logged in</td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Law</td>
              <td data-label="E-mail">kunal@f1infotech.com</td>
              <td data-label="Date">19-08-2025</td>
              <td data-label="Time">11:58:24</td>
              <td data-label="Action">Logged in</td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Law</td>
              <td data-label="E-mail">kunal@f1infotech.com</td>
              <td data-label="Date">19-08-2025</td>
              <td data-label="Time">11:58:24</td>
              <td data-label="Action">Logged in</td>
            </tr>
            <tr>
              <td class="bold" data-label="Department">Law</td>
              <td data-label="E-mail">kunal@f1infotech.com</td>
              <td data-label="Date">19-08-2025</td>
              <td data-label="Time">11:58:24</td>
              <td data-label="Action">Logged in</td>
            </tr>
            
            {{-- Repeat / loop dynamically later if needed --}}
          </tbody>
        </table>
      </div>

      <div id="pagination"></div>
    </main>
  </div>

  {{-- Footer --}}
  @include('mcv_admin.partials.footer')

  {{-- JS --}}
  <script src="{{ asset('js/mcv_admin/script.js') }}"></script>
</body>
</html>
