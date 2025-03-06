<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DCC Login - Alumni Portal</title>
    <link rel="icon" type="\Alumni System\repository\image\logo.png" href="/Alumni/repository/image/logo.png">
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
            background: url('/Alumni/repository/image/background.jpg') no-repeat center center fixed;
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
            background: linear-gradient(
                135deg,
                rgba(255, 255, 255, 0.85) 0%,
                rgba(255, 255, 255, 0.75) 100%
            );
            z-index: 1;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
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

        .signup-text {
            text-align: center;
            margin-bottom: 2rem;
            font-size: 0.9rem;
            color: var(--text-light);
        }

        .signup-text a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }

        .signup-text a:hover {
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

        .form-group {
            margin-bottom: 1.25rem;
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

        .forgot-password {
            display: block;
            text-align: center;
            margin-top: 1.25rem;
            color: var(--text-light);
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.2s;
        }

        .forgot-password:hover {
            color: var(--primary-color);
            text-decoration: underline;
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

        @media (max-width: 480px) {
            .login-container {
                margin: 1rem;
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="progress-bar"></div>
    <div class="login-container">
        <div class="logo">
            <img src="\Alumni\repository\image\logo.png" alt="UM Logo">
            <div class="portal-name">Alumni Portal</div>
        </div>

        <div class="signup-text">
            Don't have an account? <a href="registration.php">Sign up</a>
        </div>

        <form action="login.php" method="POST" id="loginForm">
            <div class="form-section">
                <div class="section-title">Login Information</div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" class="form-control" name="email_address" placeholder="Enter your email" required
                        pattern="[a-z0-9._%+-]+@gmail\.com$" title="Please enter a valid Gmail address">
                    <div class="error-message">Please enter a valid Gmail address</div>
                </div>
                
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter your password" required
                        pattern=".{8,}" title="Password must be at least 8 characters long">
                    <div class="error-message">Password must be at least 8 characters long</div>
                </div>
            </div>

            <button type="submit" class="btn">Sign in</button>
            <a href="forgot-password.php" class="forgot-password">Forgot your password?</a>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('loginForm');
            const progressBar = document.querySelector('.progress-bar');
            const inputs = form.querySelectorAll('input');

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

                if (!isValid) {
                    e.preventDefault();
                }
            });

            // Show error message if there's an error parameter in URL
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('error')) {
                const errorDiv = document.createElement('div');
                errorDiv.className = 'error-message';
                errorDiv.style.display = 'block';
                errorDiv.style.textAlign = 'center';
                errorDiv.style.marginTop = '-1rem';
                errorDiv.style.marginBottom = '1rem';
                
                // Set appropriate error message based on error type
                const errorType = urlParams.get('error');
                switch(errorType) {
                    case 'account_inactive':
                        errorDiv.textContent = 'Your account is not yet activated. Please check your email for activation instructions.';
                        break;
                    case 'invalid_credentials':
                        errorDiv.textContent = 'Invalid email or password. Please try again.';
                        break;
                    default:
                        errorDiv.textContent = 'An error occurred. Please try again.';
                }
                
                form.insertBefore(errorDiv, form.firstChild);
            }
        });
    </script>
</body>
</html>
