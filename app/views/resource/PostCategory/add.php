<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Add Category</strong>
        </div>
        <div class="card-body card-block">
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Name Category</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="name" placeholder="Name" class="form-control">
                        <small class="form-text text-muted">This is a help text</small>
                    </div>
                </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <a href="/category/" type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Back
            </a>
        </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get the form element
        var form = document.querySelector('.form-horizontal');

        // Add a submit event listener to the form
        form.addEventListener('submit', function (event) {
            // Prevent the default form submission
            event.preventDefault();

            // Validate the form fields
            if (validateForm()) {
                // If the form is valid, submit it
                form.submit();
            }
        });

        // Function to validate the form fields
        function validateForm() {
            // Get the name input element
            var nameInput = document.getElementById('text-input');
            // Get the value of the name input
            var nameValue = nameInput.value.trim();

            // Get the small element for error messages
            var errorElement = nameInput.nextElementSibling;

            // Check if the name is empty
            if (nameValue === '') {
                // Display an error message with red text color
                errorElement.textContent = 'Name is required';
                // Set the text color directly
                errorElement.style.color = 'red';
                // Focus on the name input
                nameInput.focus();
                // Form is not valid
                return false;
            } else {
                // Clear any existing error message
                errorElement.textContent = '';
                // Reset the text color
                errorElement.style.color = ''; // Reset to default
                // Form is valid
                return true;
            }
        }
    });
</script>
