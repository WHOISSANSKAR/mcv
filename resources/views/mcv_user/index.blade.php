<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My ComplianceView Dashboard</title>

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.css" rel="stylesheet">

    <!-- Custom CSS (from public/) -->
    <link rel="stylesheet" href="{{ asset('css/mcv_user/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mcv_admin/ESG.css') }}">
</head>
<body>
    <div class="content-wrapper">

        {{-- Navbar partial --}}
        @include('mcv_user.partials.navbar')

        <main>
            <header>
                <div>
                    <h2>Current Compliance Score: 100%</h2>
                </div>

              <div class="search-button-group">
  <div class="add-compliance">
    <a href="{{ url('esg') }}" style="text-decoration: none;">
      <button><i class="fas fa-plus-circle"></i>&nbsp;ESG</button>
    </a>
  </div>

  <div class="search-bar">
    <input type="text" placeholder="Can't find something? Search it here!">
    <i class="fas fa-search"></i>
  </div>
</div>

            </header>

            <!-- Charts Section -->
            <div class="charts-container">
                <div class="chart-box">
                    <h3>Compliance</h3>
                    <canvas id="pieChart"></canvas>
                </div>
                <div class="calendar-box">
                    <h3>Calendar</h3>
                    <div id="calendar"></div>
                </div>
            </div>

           <!-- Stats Section -->
<!-- Stats Section -->
<div class="stats">
  <div class="stat-box">
    <div class="icon"><i class="fas fa-users"></i></div>
    <div class="content">
      <div class="label">Department</div>
      <div class="value">2</div>
    </div>
  </div>

  <div class="stat-box">
    <div class="icon"><i class="fa-solid fa-shield"></i></div>
    <div class="content">
      <div class="label">Compliance</div>
      <div class="value">5</div>
    </div>
  </div>

  <div class="stat-box">
    <div class="icon"><i class="fa-solid fa-pen"></i></div>
    <div class="content">
      <div class="label">Action</div>
      <div class="value">12</div>
    </div>
  </div>

  <div class="stat-box">
    <div class="icon"><i class="fa-solid fa-calendar"></i></div>
    <div class="content">
      <div class="label1">End of Subscription</div>
      <div class="value1">02-09-2026</div>
    </div>
  </div>
</div>

</div>

    {{-- Footer partial --}}
    @include('mcv_user.partials.footer')

    <!-- External JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>

    <!-- Custom JS (from public/) -->
    <script src="{{ asset('js/mcv_admin/script.js') }}"></script>
    <script src="{{ asset('js/mcv_admin/dashboard.js') }}"></script>
</body>
</html>
