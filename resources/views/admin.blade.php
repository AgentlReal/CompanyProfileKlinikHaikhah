<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login - Klinik Haikhah</title>
    <link rel="icon" href="../images/logo-klinik.png" type="image/png" />
    <link rel="stylesheet" href="{{ asset('modules/fontawesome-free-6.7.2-web/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <div class="login-header">
                <img src="../images/logo-klinik.png" alt="Klinik Haikhah Logo" class="login-logo" />
                <h1>Admin Login</h1>
            </div>
            <form id="loginForm" class="login-form" method="POST" action="{{ route('admin.submit') }}">
                @csrf
                <div class="form-group">
                    <label for="username">
                        <i class="fas fa-user"></i>
                        Username
                    </label>
                    <input type="text" id="username" name="username" required />
                </div>
                <div class="form-group">
                    <label for="password">
                        <i class="fas fa-lock"></i>
                        Password
                    </label>
                    <div class="password-input">
                        <input type="password" id="password" name="password" required />
                        <button type="button" class="toggle-password">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>
                <button type="submit" class="login-btn">
                    <span>Login</span>
                    <i class="fas fa-arrow-right"></i>
                </button>
            </form>
            <div id="errorMessage" class="error-message"></div>
        </div>
    </div>
    <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>