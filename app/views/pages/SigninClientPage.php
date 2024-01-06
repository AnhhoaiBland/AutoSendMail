<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>Signin Page</h2>
                        <p>Home <span>-</span> Login</p>
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
                        <a href="/signup/" class="btn_3">Create an Account</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="login_part_form">
                    <div class="login_part_form_iner">
                        <h3>Welcome Back ! <br>
                            Please Sign up now</h3>
                        <form class="row contact_form" action="/signin/" method="post" novalidate="novalidate">
                            <!-- ... -->
                            <div class="col-md-12 form-group p_star">
                                <input type="email" class="form-control" id="email" name="email" value="" placeholder="Email">
                                <div class="error-container"></div>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password">
                                <div class="error-container"></div>
                            </div>
                            <!-- ... -->

                            <div class="col-md-12 form-group">
                                <div class="creat_account d-flex align-items-center justify-content-end">
                                    <a href="/signup/">Register</a>
                                </div>
                                <button type="submit" value="submit" class="btn_3">
                                    log in
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
    document.addEventListener('DOMContentLoaded', function () {
        const loginForm = document.querySelector('.contact_form');

        loginForm.addEventListener('submit', function (event) {
            event.preventDefault();

            const email = document.getElementById('email');
            const password = document.getElementById('password');

            // Reset previous error messages
            clearErrors();

            let hasErrors = false;

            // Simple email validation
            if (!validateEmail(email.value)) {
                showError(email, 'Please enter a valid email address.');
                hasErrors = true;
            }

            // Password should not be empty
            if (!password.value.trim()) {
                showError(password, 'Please enter your password.');
                hasErrors = true;
            }

            if (hasErrors) {
                return;
            }

            // If all validations pass, you can submit the form
            this.submit();
        });

        function validateEmail(email) {
            // Basic email validation using regex
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        function showError(input, message) {
            const errorElement = document.createElement('div');
            errorElement.className = 'error-message';
            errorElement.innerText = message;
            errorElement.style.color = 'red'; // Set the color to red

            const parent = input.parentElement;
            const errorContainer = parent.querySelector('.error-container');
            errorContainer.innerHTML = ''; // Clear previous errors
            errorContainer.appendChild(errorElement);
        }

        function clearErrors() {
            const errorMessages = document.querySelectorAll('.error-message');
            errorMessages.forEach(function (error) {
                error.parentNode.removeChild(error);
            });
        }
    });
</script>



<!--================login_part end =================-->