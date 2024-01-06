<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>Signup Page</h2>
                        <p>Home <span>-</span> Register</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--================login_part Area =================-->
<section class="login_part padding_top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="login_part_text text-center">
                    <div class="login_part_text_iner">
                        <h2>New to our Shop?</h2>
                        <p>There are advances being made in science and technology
                            everyday, and a good example of this is the</p>
                        <a href="/signin/" class="btn_3">You are an account? Login</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="login_part_form">
                    <div class="login_part_form_iner">
                        <h3>Welcome Back ! <br>
                            Please Sign in now</h3>
                        <form class="row contact_form" action="/signup/" method="post" novalidate="novalidate">
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="name" name="username" value="" placeholder="Username">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="email" class="form-control" id="email" name="email" value="" placeholder="Email">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="password" class="form-control" id="cpassword" name="cpassword" value="" placeholder="Password repeat">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account d-flex align-items-center justify-content-end">
                                    <a href="/signin/">Login</a>
                                </div>
                                <button type="submit" value="submit" class="btn_3">
                                    Register
                                </button>
                                <a class="lost_pass" href="#">forget password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var form = document.querySelector('.contact_form');
        form.addEventListener('submit', function (event) {
            var username = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var cpassword = document.getElementById('cpassword').value;

            // Reset previous error messages
            clearErrors();

            var hasErrors = false;

            // Validate username
            if (username.trim() === '') {
                displayError('Please enter a username', 'name');
                hasErrors = true;
            }

            // Validate email
            if (email.trim() === '' || !isValidEmail(email)) {
                displayError('Please enter a valid email address', 'email');
                hasErrors = true;
            }

            // Validate password
            if (password.trim() === '') {
                displayError('Please enter a password', 'password');
                hasErrors = true;
            }

            // Validate confirm password
            if (cpassword.trim() === '') {
                displayError('Please confirm your password', 'cpassword');
                hasErrors = true;
            }

            // Check if passwords match
            if (password !== cpassword) {
                displayError('Passwords do not match', 'password');
                displayError('Passwords do not match', 'cpassword');
                hasErrors = true;
            }

            if (hasErrors) {
                event.preventDefault();
            }
        });

        function displayError(message, fieldId) {
            var errorDiv = document.createElement('div');
            errorDiv.className = 'error-message';
            errorDiv.style.color = 'red'; // Set text color to red
            errorDiv.innerText = message;
            document.getElementById(fieldId).parentNode.appendChild(errorDiv);
        }

        function clearErrors() {
            var errorMessages = document.querySelectorAll('.error-message');
            errorMessages.forEach(function (error) {
                error.parentNode.removeChild(error);
            });
        }

        function isValidEmail(email) {
            // Simple email validation using regular expression
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
    });
</script>


<!--================login_part end =================-->