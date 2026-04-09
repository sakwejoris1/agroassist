<!DOCTYPE html>
<html>

<head>
    <title>Register - AgroAssist</title>


    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/style.css">

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
                    placeholder="Sanrine dEV"
                    required
                >

                <!-- EMAIL -->
                <label for="email-address">Email Address</label>
                <input
                    id="email-address"
                    name="email"
                    type="email"
                    placeholder="sanrine@example.com"
                    required
                >

                <!-- PHONE -->
                <label for="phone-number">Phone Number</label>
                <input
                    id="phone-number"
                    name="phone"
                    type="text"
                    placeholder="+237 6XX XXX XXX"
                    required
                >

                <!-- ROLE -->
                <label for="user-role">Register As</label>
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
                    placeholder="City, Region"
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

                <div style="position: relative;">
                    <input
                        id="password"
                        name="password"
                        type="password"
                        placeholder="******"
                        required
                    >

                    <span
                        class="toggle-password"
                        data-target="#password"
                        style="position:absolute; right:10px; top:8px; cursor:pointer;"
                    >
                        👁️
                    </span>
                </div>

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

    <!-- GLOBAL JS -->
    <script src="js/app.js"></script>

    <!-- PAGE SCRIPT -->
    <script>
        const roleSelect = document.getElementById("user-role");
        const submitBtn = document.getElementById("btn-register-submit");

        roleSelect.addEventListener("change", () => {
            const role = roleSelect.value;
            submitBtn.textContent =
                "Register as " +
                role.charAt(0).toUpperCase() +
                role.slice(1);
        });
    </script>
=======

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
>>>>>>> 96612d8cce30dbf8670ac595521cbaedbe8b33f7

</body>

</html>