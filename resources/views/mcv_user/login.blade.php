<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - My ComplianceView</title>
    <link rel="stylesheet" href="{{ asset('css/mcv_user/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <div class="logo">
                <a href="{{ url('user') }}" class="aside-logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo">
                </a>
            </div>

            <div id="error-message" class="error-message" style="display:none;"></div>

            <form id="loginForm">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required placeholder="Enter your email">
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required placeholder="Enter your password">
                </div>

                <button type="submit" class="login-btn">Login</button>
            </form>
        </div>
    </div>

    <script>
        const form = document.getElementById('loginForm');
        const errorDiv = document.getElementById('error-message');

        form.addEventListener('submit', function(e){
            e.preventDefault();

            const formData = new FormData(form);
            const data = {
                email: formData.get('email'),
                password: formData.get('password')
            };

            axios.post('{{ route("mcv_user.login_api") }}', data)
                .then(function(response){
                    if(response.data.success){
                        window.location.href = response.data.redirect_url;
                    } else {
                        errorDiv.style.display = 'block';
                        errorDiv.innerText = 'Invalid email or password.';
                        // Redirect to login page after showing error
                        setTimeout(() => {
                            window.location.href = response.data.redirect_url;
                        }, 1500);
                    }
                })
                .catch(function(error){
                    console.error(error);
                    errorDiv.style.display = 'block';
                    errorDiv.innerText = 'Something went wrong. Please try again.';
                });
        });
    </script>
</body>
</html>
