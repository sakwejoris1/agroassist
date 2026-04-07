<!DOCTYPE html>
<html>

<head>

    <title>Register - AgroAssist</title>

    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div id="register-container">

        <div id="register-card">

            <div id="register-icon">
                🚜
            </div>

            <h2 id="register-title">
                Join AgroAssist
            </h2>

            <p id="register-subtitle">
                Start your journey to smarter farming management.
            </p>

            <form
                id="register-form"
                method="POST"
                action="backend/register_process.php"
            >

                <!-- FULL NAME -->
                <label for="full-name">Full Name</label>

                <input
                    id="full-name"
                    name="full_name"
                    type="text"
                    placeholder="John Doe"
                    required
                >

                <!-- EMAIL -->
                <label for="email-address">Email Address</label>

                <input
                    id="email-address"
                    name="email"
                    type="email"
                    placeholder="john@example.com"
                    required
                >

                <!-- PHONE -->
                <label for="phone-number">Phone Number</label>

                <input
                    id="phone-number"
                    name="phone"
                    type="text"
                    placeholder="+1 (555) 000-0000"
                    required
                >

                <!-- ROLE -->
                <label for="role">Register As</label>

                <select id="user-role" name="role">
                    <option value="farmer">Farmer</option>
                    <option value="admin">Admin</option>
                </select>

                <!-- LOCATION -->
                <label for="farm-location">Farm Location</label>

                <input
                    id="farm-location"
                    name="location"
                    type="text"
                    placeholder="City, State"
                    required
                >

                <!-- CROP TYPE -->
                <label for="crop-type">Primary Crop Type</label>

                <select
                    id="crop-type"
                    name="crop_type"
                    required
                >
                    <option value="">Select your crop type</option>
                    <option value="rice">Rice</option>
                    <option value="wheat">Wheat</option>
                    <option value="corn">Corn</option>
                    <option value="vegetables">Vegetables</option>
                    <option value="fruits">Fruits</option>
                </select>

                <!-- PASSWORD -->
                <label for="password">Password</label>

                <input
                    id="password"
                    name="password"
                    type="password"
                    placeholder="******"
                    required
                >

                <!-- SUBMIT BUTTON -->
                <button
                    id="btn-register-submit"
                    type="submit"
                >
                    Register as Farmer
                </button>

            </form>

            <p id="login-redirect">
                Already have an account?

                <a id="signin-link" href="login.php">
                    Sign in here
                </a>
            </p>

        </div>

    </div>

</body>

</html>