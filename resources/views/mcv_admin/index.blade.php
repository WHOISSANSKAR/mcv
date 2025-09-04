<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My ComplianceView Dashboard</title>

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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
                    <h2>Dashboard</h2>
                    <p>See your account information here!</p>
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

            <div class="premium-card">
                <div class="premium-text">
                    <h3>Special premium account!</h3>
                    <p>
                        With a special premium account, you can do very interesting things!<br>
                        By purchasing this account, special features will be activated for you that you will be amazed to see!
                    </p>
                    <div class="button-group">
                        <a href="{{ url('purchase') }}"><button><i class="fas fa-shopping-cart"></i> Account purchase</button></a>
                        <a href="{{ url('feature') }}"><button><i class="fas fa-bolt"></i> View features</button></a>
                    </div>
                </div>
                <div class="premium-image">
                    <img src="{{ asset('images/vr_illustration.png') }}" alt="VR Illustration">
                </div>
            </div>
            
            <div class="stats">
                <div class="stat-box">
                    <div class="icon"><i class="fas fa-users"></i></div>
                    <div class="change">
                        <div><i class="fas fa-arrow-up"></i> 1.2%</div>
                        <div class="sub-label">This Month</div>
                    </div>
                    <div class="label-value">
                        <div class="label">All followers</div>
                        <div class="value">1000</div>
                    </div>
                    <a href="{{ url('report') }}" class="info-button">See info</a>
                </div>

                <div class="stat-box">
                    <div class="icon"><i class="fas fa-dollar-sign"></i></div>
                    <div class="change">
                        <div><i class="fas fa-arrow-up"></i> 21.12%</div>
                        <div class="sub-label">This Month</div>
                    </div>
                    <div class="label-value">
                        <div class="label">Total earning</div>
                        <div class="value">125K</div>
                    </div>
                    <a href="{{ url('report') }}" class="info-button">See info</a>
                </div>

                <div class="stat-box">
                    <div class="icon"><i class="fas fa-user"></i></div>
                    <div class="change">
                        <div><i class="fas fa-arrow-up"></i> 1.2%</div>
                        <div class="sub-label">This Month</div>
                    </div>
                    <div class="label-value">
                        <div class="label">All users</div>
                        <div class="value">64K</div>
                    </div>
                    <a href="{{ url('users') }}" class="info-button">See info</a>
                </div>
            </div>
        </main>
    </div>

    {{-- Footer partial --}}
    @include('mcv_admin.partials.footer')

    <!-- Custom JS -->
    <script src="{{ asset('js/mcv_admin/script.js') }}"></script>
</body>
</html>
