@extends('layouts.app')
@php
    $hideHeaderFooter = true;
@endphp
<style>
    .form-container {
        max-width: 400px;
        margin: auto;
        margin-top: 50px;

        .form-content {
            display: none;
            padding-top: 20px;
        }

        .form-content.active {
            display: block;
        }

        input {
            width: 20px;
            height: 20px;
        }

        label {
            font-size: 16px;
            line-height: 20.8px;
            font-weight: 300;
        }

        input[type="radio"] {
            appearance: none;
            width: 20px;
            height: 20px;
            border: 3px solid gray;
            border-radius: 50%;
            outline: none;
            cursor: pointer;
            position: relative;
            top: 5px;
            margin-right: 10px;
        }

        input[type="radio"]:checked {
            border-color: #000000;
        }

        input[type="radio"]:checked::after {
            content: "";
            width: 5px;
            height: 5px;
            background-color: #ffffff;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .tab-option {
            max-width: 100%;
            display: flex;
        }

        .me-2 span {
            margin-right: 10px;
        }

        .btn.btn-primary {
            background-color: #1C1C1C;
            color: #ffffff;
            width: 100%;
            padding: 12px 16px;
            margin-bottom: 16px;
            gap: 4px;
        }

        .mb-3.form-check {
            display: flex;
            margin-top: 20px;
            flex-direction: row;
        }

        .form-check label {
            font-weight: 300;
            font-size: 16px;
            line-height: 20.8px;
            color: #8E8E8E;
        }

        .form-check input {
            border: 1px;
            border-radius: 2px;
            margin-right: 5px;
        }

        .form-content {
            max-width: 400px;
            margin: 0 auto;
            font-family: Arial, sans-serif;
        }

        .mb-3 {
            position: relative;
            margin-bottom: 1.5rem;

            .form-control {
                height: 56px;
            }
        }

        .form-control {
            width: 100%;
            padding: 10px 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            background: transparent;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .form-label {
            display: none;
            position: absolute;
            left: 12px;
            top: -10px;
            background-color: white;
            padding: 0 5px;
            font-size: 16px;
            color: #999;
            pointer-events: none;
            transition: all 0.3s ease;
        }

        .input-container input:focus + .form-label,
        .input-container input:not(:placeholder-shown) + .form-label {
            display: block;
        }

        .row-inputs {
            display: flex;
            gap: 15px;
        }

        .input-container {
            flex: 1;
            position: relative;
        }

        .input-container .form-control {
            width: 100%;
        }

        .required > .form-label::after {
            content: " *";
            color: red;
            font-weight: bold;
            margin-left: 4px;
        }

        label.me-2-coupon {
            display: block;
        }
    }

    .tab-button {
        flex: 1;
        text-align: center;
        padding: 10px;
        cursor: pointer;
        color: #1C1C1C;
    }

    .tab-button.active {
        background-color: #1C1C1C;
        color: white;
    }

    .form-check-label {
        font-size: 14px;
    }

    button {
        width: 100%;
        background-color: #1C1C1C;
        color: white;
        border: none;
        padding: 10px;
        font-size: 16px;
        font-weight: bold;
    }

    button:hover {
        background-color: #333;
    }

    /** error */
    .form-control.error {
        border: 2px solid red;
        outline: none;
    }

    .form-control.error:focus {
        border: 2px solid red;
        box-shadow: 0 0 5px red;
    }

    .error-message {
        font-size: 14px;
        color: red;
        margin-top: 5px;
    }
    .header-form {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 4rem;
    }

    .logo img {
        height: 46px;
        width: 150px;
        object-fit: contain;
    }

</style>

@section('content')
    <div class="header-form">
        <div class="logo">
            <a href="/">
                <img src="{{ asset('images/header/logo.png') }}">
            </a>
        </div>
    </div>

    <div class="form-container">
        <div class="tab-option">
            <button class="tab-button active" id="login-tab">Login</button>
            <button class="tab-button " id="register-tab">Registration</button>
        </div>

        <div class="form-content active" id="login-form">
            <form action="/login" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="mb-3 input-container required">
                    <input class="form-control" id="email" name="email" placeholder="Email address" required>
                    <label for="email" class="form-label">Email address</label>
                </div>
                <div class="mb-3 input-container required">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                           required>
                    <label for="password" class="form-label">Password</label>
                </div>
                <div id="error-message-login" class="error-message" style="display: none;"></div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>

        <div class="form-content " id="register-form">
            <form action="{{ route('register') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="mb-3 input-container required">
                    <input class="form-control" id="email-register" name="email" placeholder="Your email address "
                           required>
                    <label for="email-register" class="form-label">Email address</label>
                    <div id="email-error" class="error-message"></div>
                </div>
                <div class="mb-3 row-inputs">
                    <div class="input-container required">
                        <input type="text" class="form-control" id="first-name" name="first_name"
                               placeholder="First name " required>
                        <label for="first-name" class="form-label">First name</label>
                    </div>
                    <div class="input-container required">
                        <input type="text" class="form-control" id="last-name" name="last_name" placeholder="Last name "
                               required>
                        <label for="last-name" class="form-label">Last name</label>
                    </div>
                </div>
                <div class="mb-3 input-container required">
                    <input type="password" class="form-control" id="password-register" name="password"
                           placeholder="Password" required>
                    <label for="password-register" class="form-label">Password</label>
                    <div id="password-error" class="error-message"></div>
                </div>
                <div class="mb-3 input-container required">
                    <input type="password" class="form-control" id="confirm-password" name="password_confirmation"
                           placeholder="Confirmation Password" required>
                    <label for="confirm-password" class="form-label">Confirm Password</label>
                    <div id="confirm-password-error" class="error-message"></div>
                </div>
                <div class="mb-3">
                    <label>How should we address you?</label>
                    <div>
                        <label class="me-2">
                            <input type="radio" name="gender" value="Ms." required>
                            <span>Ms.</span>
                        </label>
                        <label class="me-2">
                            <input type="radio" name="gender" value="Mr." required>
                            <span>Mr.</span>
                        </label>
                        <label>
                            <input type="radio" name="gender" value="Diverse" required>
                            <span>Diverse</span>
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label>What discount type would you like to receive when we launch?</label>
                    <div>
                        <label class="me-2-coupon">
                            <input type="radio" name="discount" value="5% off any brand you want" required>
                            <span>5% off any brand you want</span>
                        </label>
                        <label class="me-2-coupon">
                            <input type="radio" name="discount" value="5% off your whole cart" required>
                            <span>5% off your whole cart</span>
                        </label>
                    </div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="newsletter" name="newsletter">
                    <label class="form-check-label" for="newsletter">I would like to receive newsletters PERSONA about
                        current trends, offers and vouchers in accordance with the Privacy Policy. You can withdraw at
                        an... Show more</label>
                </div>
                <button type="submit" class="btn btn-primary w-100">Register now</button>
            </form>
        </div>
    </div>
    <script>
        const loginTab = document.getElementById('login-tab');
        const registerTab = document.getElementById('register-tab');
        const loginForm = document.getElementById('login-form');
        const registerForm = document.getElementById('register-form');

        loginTab.addEventListener('click', () => {
            loginTab.classList.add('active');
            registerTab.classList.remove('active');
            loginForm.classList.add('active');
            registerForm.classList.remove('active');
        });

        registerTab.addEventListener('click', () => {
            registerTab.classList.add('active');
            loginTab.classList.remove('active');
            registerForm.classList.add('active');
            loginForm.classList.remove('active');
        });
        document.getElementById('register-form').addEventListener('submit', function (event) {
            let isValid = true;
            let firstInvalidInput = null;

            const email = document.getElementById('email-register');
            const password = document.getElementById('password-register');
            const confirmPassword = document.getElementById('confirm-password');

            const emailError = document.getElementById('email-error');
            const passwordError = document.getElementById('password-error');
            const confirmPasswordError = document.getElementById('confirm-password-error');

            emailError.textContent = '';
            passwordError.textContent = '';
            confirmPasswordError.textContent = '';
            [email, password, confirmPassword].forEach(input => {
                input.classList.remove('error');
            });

            // Validate email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email.value)) {
                emailError.textContent = 'Invalid email address.';

                email.classList.add('error');
                if (!firstInvalidInput) firstInvalidInput = email;
                isValid = false;
            }

            // Validate password length
            if (password.value.length < 6) {
                passwordError.textContent = 'Password must be at least 6 characters long.';
                password.classList.add('error');
                if (!firstInvalidInput) firstInvalidInput = password;
                isValid = false;
            }

            // Validate confirm password matches password
            if (password.value !== confirmPassword.value) {
                confirmPasswordError.textContent = 'Passwords do not match.';
                confirmPassword.classList.add('error');
                if (!firstInvalidInput) firstInvalidInput = confirmPassword;
                isValid = false;
            }

            if (!isValid) {
                event.preventDefault();
                firstInvalidInput.focus();
            } else {
                const formData = new FormData(event.target);
                event.preventDefault();
                fetch('/register', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            window.location.href = '/';
                        } else if (data.error) {
                            event.preventDefault();
                            const errorMessageElement = document.getElementById('email-error');
                            errorMessageElement.textContent = data.error;
                            errorMessageElement.style.display = 'block';
                        }
                    })
            }
        });

        document.getElementById('login-form').addEventListener('submit', function (event) {
            event.preventDefault();

            const formData = new FormData(event.target);

            fetch('/login', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        window.location.href = '/';
                    } else if (data.error) {
                        const errorMessageElement = document.getElementById('error-message-login');
                        errorMessageElement.textContent = data.error;
                        errorMessageElement.style.display = 'block';
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    const errorMessageElement = document.getElementById('error-message-login');
                    errorMessageElement.textContent = 'There was an error processing your request. Please try again.';
                    errorMessageElement.style.display = 'block';
                });
        });

    </script>
@endsection
