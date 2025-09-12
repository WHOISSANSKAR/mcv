<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Main - My ComplianceView</title>
  <link rel="stylesheet" href="{{ asset('css/mcv_user/style.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <style>
    /* Full-page background */
body {
  margin: 0;
  height: 100vh;
  width: 100vw;
  background: url('{{ asset("images/login_bg.png") }}') no-repeat center center fixed;
  background-size: cover;        /* Fill width and height of viewport */
  background-position: center;   /* Keep the focus centered */
  background-attachment: fixed;  /* Keeps it stable on scroll */
  font-family: 'Inter', sans-serif;
  position: relative;
}

/* Wider login box, right aligned */
.login-box {
  position: absolute;
  top: 50%;              /* Vertical center */
  right: 8%;             /* Distance from right edge */
  transform: translateY(-50%);
  background: rgba(255,255,255,0.08);
  border-radius: 16px;
  padding: 40px 60px;    /* Extra padding for width */
  width: 420px;          /* Wider box */
  backdrop-filter: blur(12px);
  box-shadow: 0 8px 25px rgba(0,0,0,0.3);
  color: #fff;
  text-align: center;
}



    .login-box h1 {
      font-size: 1.8rem;
      margin-bottom: 0.4rem;
      font-weight: 700;
    }

    .login-box p {
      margin-bottom: 1.5rem;
      font-size: 0.9rem;
      opacity: 0.85;
    }

    .form-group {
      text-align: left;
      margin-bottom: 1.2rem;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.4rem;
      font-weight: 600;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 6px;
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
    }

    .form-group input::placeholder {
      color: rgba(255, 255, 255, 0.7);
    }

    .login-btn {
      width: 100%;
      background-color: #a8e5db;
      border: none;
      padding: 10px 0;
      border-radius: 6px;
      font-weight: bold;
      cursor: pointer;
      margin-top: 10px;
    }

    .login-btn:hover {
      background-color: #91d4c7;
    }

    .extra-links {
      margin-top: 10px;
      font-size: 0.85rem;
    }

    .extra-links a {
      color: #a8e5db;
      text-decoration: none;
      font-weight: 600;
    }

    #error-message {
      background-color: rgba(255, 0, 0, 0.2);
      padding: 10px;
      border-radius: 6px;
      margin-bottom: 1rem;
      display: none;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h1>Login</h1>
    <p>Welcome onboard with us!</p>

    <div id="error-message"></div>

    <form id="loginMainForm">
      @csrf
      <div class="form-group">
        <label for="email">Username</label>
        <input type="email" name="email" id="email" required placeholder="Enter your username">
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required placeholder="Enter your password">
      </div>

      <div class="extra-links" style="text-align:right; margin-bottom:10px;">
        <a href="#">Forgot Password?</a>
      </div>

      <button type="submit" class="login-btn">LOGIN</button>

      <div class="extra-links">
        New to Logo? <a href="{{ url('/register') }}">Register Here</a>
      </div>
    </form>
  </div>
</body>


  <script>
    const form = document.getElementById('loginMainForm');
    const errorDiv = document.getElementById('error-message');

    form.addEventListener('submit', function(e) {
      e.preventDefault();
      const formData = new FormData(form);
      const data = {
        email: formData.get('email'),
        password: formData.get('password')
      };

      axios.post('{{ route("login_main.api") }}', data)
        .then(function(response) {
          if (response.data.success) {
            window.location.href = response.data.redirect_url;
          } else {
            errorDiv.style.display = 'block';
            errorDiv.innerText = 'Invalid email or password.';
            setTimeout(() => {
              window.location.href = response.data.redirect_url;
            }, 1500);
          }
        })
        .catch(function(error) {
          console.error(error);
          errorDiv.style.display = 'block';
          errorDiv.innerText = 'Something went wrong. Please try again.';
        });
    });
  </script>
</body>
</html>
