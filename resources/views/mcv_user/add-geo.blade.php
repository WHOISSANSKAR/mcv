{{-- resources/views/mcv_admin/purchase.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>My ComplianceView Dashboard</title>

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/mcv_user/style.css') }}">
</head>
<body>
  <div class="content-wrapper">

    {{-- Navbar (dropdown version) --}}
    @include('mcv_user.partials.navbar')

    

  </div>

  {{-- Footer --}}
  @include('mcv_user.partials.footer')
</body>
</html>
