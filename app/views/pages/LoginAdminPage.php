<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="#">
                            <img src="<?= ASSETS ?>/images/infotech-logo.png" alt="CoolAdmin">
                        </a>
                    </div>
                    <div class="login-form">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                            </div>
                            <div class="login-checkbox">
                                <label>
                                    <a href="/sendemail/">Forgotten Password?</a>
                                </label>
                            </div>
                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Add this script at the end of your HTML body or in the head section -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Select the form element
        var form = document.querySelector('form');

        // Add a submit event listener to the form
        form.addEventListener('submit', function (event) {
            // Prevent the default form submission
            event.preventDefault();

            // Clear existing error messages
            clearErrorMessages();

            // Validate the form fields
            var emailInput = document.querySelector('input[name="email"]');
            var passwordInput = document.querySelector('input[name="password"]');
            var isValid = true;

            // Validate email
            if (!validateEmail(emailInput.value)) {
                displayError(emailInput, 'Invalid email address');
                isValid = false;
            } else {
                hideError(emailInput);
            }

            // Validate password
            if (passwordInput.value.length < 8) {
                displayError(passwordInput, 'Password must be at least 8 characters');
                isValid = false;
            } else {
                hideError(passwordInput);
            }

            // Simulate server-side check for incorrect username or password
            var simulatedIncorrectLogin = false; // Set this to true to simulate incorrect login

            if (simulatedIncorrectLogin) {
                displayError(passwordInput, 'Incorrect email or password');
                isValid = false;
            }

            // If the form is valid, you can submit it
            if (isValid) {
                form.submit();
            }
        });

        // Function to validate email
        function validateEmail(email) {
            // You can use a regular expression for email validation
            // This is a simple example, and you might want to use a more robust solution
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        // Function to display error message in red
        function displayError(input, message) {
            // Create an error message element
            var errorElement = document.createElement('div');
            errorElement.className = 'error-message';
            errorElement.textContent = message;

            // Add a CSS class for styling (color: red)
            errorElement.style.color = 'red';

            // Insert the error message after the input element
            input.parentNode.insertBefore(errorElement, input.nextSibling);
        }

        // Function to hide error message
        function hideError(input) {
            // Check if there is an existing error message
            var errorElement = input.parentNode.querySelector('.error-message');
            if (errorElement) {
                // Remove the error message
                errorElement.parentNode.removeChild(errorElement);
            }
        }

        // Function to clear all error messages
        function clearErrorMessages() {
            var errorMessages = document.querySelectorAll('.error-message');
            errorMessages.forEach(function (errorMessage) {
                errorMessage.parentNode.removeChild(errorMessage);
            });
        }
    });
</script>