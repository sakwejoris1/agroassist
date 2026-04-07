<!DOCTYPE html>
<html>

<head>

    <title>Login - AgroAssist</title>

    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/login.css">

</head>

<body>

    <!-- HEADER -->
    <header id="login-header">

        <a id="login-back-btn" href="index.php">←</a>

        <h2 id="login-logo">AgroAssist</h2>

    </header>

    <!-- LOGIN CARD -->
    <div id="login-container">

        <div id="login-card">

            <div id="login-icon">
                🚜
            </div>

            <h1 id="login-title">
                Welcome Back
            </h1>

            <p id="login-subtitle">
                Login to manage your farm assets securely.
            </p>

            <form
                id="login-form"
                method="POST"
                action="backend/login_process.php"
            >

                <!-- EMAIL -->
                <label id="label-email" for="login-email">
                    Email Address
                </label>

                <input
                    id="login-email"
                    name="email"
                    type="email"
                    placeholder="name@farm.com"
                    required
                >

                <!-- PASSWORD -->
                <div id="password-label-row">

                    <label for="login-password">
                        Password
                    </label>

                    <a id="forgot-password-link">
                        Forgot Password?
                    </a>

                </div>

                <input
                    id="login-password"
                    name="password"
                    type="password"
                    placeholder="Enter your password"
                    required
                >

                <!-- SIGN IN BUTTON -->
                <button
                    id="btn-login-submit"
                    type="submit"
                >
                    Sign In →
                </button>

            </form>

            <!-- REGISTER -->
            <div id="login-register-section">

                <p id="new-user-text">
                    New to AgroAssist?
                </p>

                <p id="farmer-question">
                    Are you a new farm owner?
                </p>

                <a
                    id="btn-register-farmer"
                    href="register.php"
                >
                    Register as Farmer
                </a>

            </div>

        </div>

    </div>

    <!-- FOOTER -->
    <footer id="login-footer">

        <p>
            © 2024 AgroAssist Inc. Secure Farm Management.
        </p>

        <div id="footer-links">
            <span>Terms</span>
            <span>Privacy</span>
            <span>Help</span>
        </div>

    </footer>

</body>

</html>