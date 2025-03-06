<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Alumni Portal</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2e7d32;
            --text-color: #333;
            --text-light: #666;
            --border-color: #eee;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-color);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url('/repository/image/background.jpg') no-repeat center center fixed;
            background-size: cover;
            position: relative;
            padding: 1.5rem 0;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg,
                    rgba(255, 255, 255, 0.85) 0%,
                    rgba(255, 255, 255, 0.75) 100%);
            z-index: 1;
        }

        .registration-container {
            width: 100%;
            max-width: 600px;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.98);
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
            position: relative;
            z-index: 2;
            border: 1px solid rgba(255, 255, 255, 0.9);
            margin: 0 1rem;
        }

        .logo {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .logo img {
            height: 64px;
            margin-bottom: 0.75rem;
        }

        .portal-name {
            color: var(--primary-color);
            font-size: 1.25rem;
            font-weight: 500;
            letter-spacing: -0.01em;
        }

        .signin-text {
            text-align: center;
            margin-bottom: 2rem;
            font-size: 0.9rem;
            color: var(--text-light);
        }

        .signin-text a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }

        .signin-text a:hover {
            text-decoration: underline;
        }

        .form-section {
            margin-bottom: 2rem;
        }

        .section-title {
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--text-light);
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid var(--border-color);
        }

        .form-row {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.25rem;
        }

        .form-row .form-group {
            flex: 1;
            margin-bottom: 0;
        }

        .form-group {
            margin-bottom: 0;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.4rem;
            color: var(--text-color);
            font-size: 0.9rem;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            font-size: 0.95rem;
            color: var(--text-color);
            transition: all 0.2s;
            background: #fff;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 2px rgba(46, 125, 50, 0.1);
        }

        .form-control.invalid {
            border-color: #dc3545;
            background-color: #fff8f8;
        }

        .error-message {
            color: #dc3545;
            font-size: 0.8rem;
            margin-top: 0.25rem;
            display: none;
        }

        .form-control.invalid + .error-message {
            display: block;
        }

        .year-select {
            position: relative;
            width: 100%;
        }

        .year-select select {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            font-size: 0.95rem;
            color: var(--text-color);
            background: #fff;
            appearance: none;
            cursor: pointer;
        }

        .year-select::after {
            content: '▼';
            font-size: 0.8rem;
            color: var(--text-light);
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
        }

        .btn {
            width: 100%;
            padding: 0.75rem;
            border: none;
            border-radius: 6px;
            background: var(--primary-color);
            color: white;
            font-size: 0.95rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
            position: relative;
            overflow: hidden;
        }

        .btn:hover {
            background: #256b29;
        }

        .btn:active {
            transform: scale(0.98);
        }

        .progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            width: 0;
            height: 4px;
            background: var(--primary-color);
            transition: width 0.3s ease;
            z-index: 1000;
        }

        @media (min-width: 768px) {
            .form-row {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>

<body>
    <div class="progress-bar"></div>
    <div class="registration-container">
        <div class="logo">
            <img src="\repository\image\logo.png" alt="UM Logo">
            <div class="portal-name">Alumni Portal</div>
        </div>

        <div class="signin-text">
            Already have an account? <a href="index.php">Sign in</a>
        </div>

        <form action="register.php" method="POST" id="registrationForm">
            <div class="form-section">
                <div class="section-title">Personal Information</div>
                <div class="form-row">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="first_name" placeholder="Enter first name" required
                            pattern="[A-Za-z ]+" title="Please enter a valid name (letters only)">
                        <div class="error-message">Please enter a valid name (letters only)</div>
                    </div>
                    <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" name="middle_name" placeholder="Enter middle name"
                            pattern="[A-Za-z ]*" title="Please enter a valid name (letters only)">
                        <small>(Optional)</small>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Enter last name" required
                            pattern="[A-Za-z ]+" title="Please enter a valid name (letters only)">
                        <div class="error-message">Please enter a valid name (letters only)</div>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <div class="section-title">Academic Information</div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Student ID Number</label>
                        <input type="text" class="form-control" name="student_id_number" placeholder="Enter student ID number (e.g., 21-000303)" required
                            pattern="\d{2}-\d{6}" title="Format: YY-XXXXXX (e.g., 21-000303)">
                        <div class="error-message">Please enter a valid student ID (Format: YY-XXXXXX, e.g., 21-000303)</div>
                    </div>
                    <div class="form-group">
                        <label>Year Graduated</label>
                        <div class="year-select">
                            <select name="year_graduated" class="form-control" required>
                                <option value="">Select graduation year</option>
                                <script>
                                    const currentYear = new Date().getFullYear();
                                    for (let year = currentYear; year >= 1980; year--) {
                                        document.write(`<option value="${year}">${year}</option>`);
                                    }
                                </script>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <div class="section-title">Contact Information</div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" class="form-control" name="email_address" placeholder="Enter active personal email" required
                            pattern="[a-z0-9._%+-]+@gmail\.com$" title="Please enter a valid Gmail address">
                        <div class="error-message">Please enter a valid Gmail address</div>
                    </div>
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="tel" class="form-control" name="mobile_number" placeholder="Enter mobile number" required
                            pattern="09[0-9]{9}" title="Please enter a valid Philippine mobile number">
                        <div class="error-message">Please enter a valid Philippine mobile number (Format: 09XXXXXXXXX)</div>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <div class="section-title">Security</div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password" required
                            pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" 
                            title="Password must be at least 8 characters long and include both letters and numbers">
                        <div class="error-message">Password must be at least 8 characters long and include both letters and numbers</div>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm password" required>
                        <div class="error-message">Passwords do not match</div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn">Register</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('registrationForm');
            const progressBar = document.querySelector('.progress-bar');
            const inputs = form.querySelectorAll('input, select');
            const password = form.querySelector('input[name="password"]');
            const confirmPassword = form.querySelector('input[name="confirm_password"]');

            // Update progress bar
            function updateProgress() {
                const totalFields = inputs.length;
                let filledFields = 0;
                inputs.forEach(input => {
                    if (input.value.trim() !== '') filledFields++;
                });
                const progress = (filledFields / totalFields) * 100;
                progressBar.style.width = `${progress}%`;
            }

            // Validate form fields
            inputs.forEach(input => {
                input.addEventListener('input', function() {
                    updateProgress();
                    
                    if (this.pattern) {
                        const regex = new RegExp(this.pattern);
                        if (!regex.test(this.value)) {
                            this.classList.add('invalid');
                        } else {
                            this.classList.remove('invalid');
                        }
                    }

                    // Special validation for confirm password
                    if (this === confirmPassword) {
                        if (this.value !== password.value) {
                            this.classList.add('invalid');
                        } else {
                            this.classList.remove('invalid');
                        }
                    }
                });
            });

            // Form submission
            form.addEventListener('submit', function(e) {
                let isValid = true;
                inputs.forEach(input => {
                    if (input.pattern) {
                        const regex = new RegExp(input.pattern);
                        if (!regex.test(input.value)) {
                            input.classList.add('invalid');
                            isValid = false;
                        }
                    }
                });

                if (password.value !== confirmPassword.value) {
                    confirmPassword.classList.add('invalid');
                    isValid = false;
                }

                if (!isValid) {
                    e.preventDefault();
                }
            });
        });
    </script>
</body>

</html>
