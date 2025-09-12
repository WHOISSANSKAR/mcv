<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My ComplianceView Dashboard</title>

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- FullCalendar CSS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/mcv_admin/style.css') }}">
</head>
<body>
    <div class="content-wrapper">

        {{-- Navbar partial --}}
        @include('mcv_admin.partials.navbar')

        <main>
            <header>
                <div>
                    <h2>Current Compliance: 100%</h2>
                </div>

                <div class="search-bar">
                    <input type="text" placeholder="Can't find something? Search it here!">
                    <i class="fas fa-search"></i>
                </div>

                <div class="add-compliance">
                    <a href="{{ url('user') }}" class="btn-link">
                        <button><i class="fas fa-plus-circle"></i>&nbsp;Compliance Zone</button>
                    </a>
                </div>

                <div class="add-compliance">
                    <a href="{{ url('esg') }}" style="text-decoration: none;">
                        <button><i class="fas fa-plus-circle"></i>&nbsp;ESG</button>
                    </a>
                </div>
            </header>

            <!-- Charts Section -->
            <div class="charts-container">
                <!-- Compliance Table -->
                <div class="table-box">
                    <h3>Compliance</h3>
                    <table class="compliance-table">
                        <thead>
                            <tr>
                                <th>Comp_id</th>
                                <th>Compliance</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>REGSTFACTORIES02</td>
                                <td>REFER TO STATE RULES - II</td>
                                <td>Sep 10 2025</td>
                                <td>Sep 11 2025</td>
                            </tr>
                            <tr>
                                <td>REGSTFACTORIES01</td>
                                <td>REFER TO STATE RULES - I</td>
                                <td>Sep 3 2025</td>
                                <td>Sep 10 2025</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="new-row">New Row</div>
                </div>

                <!-- Calendar -->
                <div class="calendar-box">
                    <h3>Calendar</h3>
                    <div id="calendar"></div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="stats">
                <div class="stat-box">
                    <div class="icon"><i class="fa-solid fa-stopwatch"></i></div>
                    <div class="content">
                        <div class="label">Overdue</div>
                        <div class="value">2</div>
                    </div>
                </div>
                <div class="stat-box">
                    <div class="icon"><i class="fa-solid fa-clock"></i></div>
                    <div class="content">
                        <div class="label">Upcoming</div>
                        <div class="value">5</div>
                    </div>
                </div>
                <div class="stat-box">
                    <div class="icon"><i class="fa-solid fa-circle-check"></i></div>
                    <div class="content">
                        <div class="label">Approved</div>
                        <div class="value">3</div>
                    </div>
                </div>
                <div class="stat-box">
                    <div class="icon"><i class="fa-solid fa-shield"></i></div>
                    <div class="content">
                        <div class="label">Compliance</div>
                        <div class="value">1</div>
                    </div>
                </div>
            </div>

        </main>
    </div>

    {{-- Footer partial --}}
    @include('mcv_admin.partials.footer')

    <!-- FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('js/mcv_admin/script.js') }}"></script>
    <script src="{{ asset('js/mcv_admin/dashboard.js') }}"></script>
</body>
</html>
