<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="#">
                            <img src="<?= ASSETS ?>/images/infotech-logo.png" alt="CoolAdmin">
                        </a>
                    </div>
                    <div class="login-form">
                        <form action="" method="post" enctype="multipart/form-data" class="needs-validation was-validated">
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" type="text" name="name" placeholder="Username" required>
                                <div class="invalid-feedback">
                                    Please enter a valid username
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input class="form-control" type="email" name="email" placeholder="Email" required>
                                <div class="invalid-feedback">
                                    Please enter a valid email
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input class="form-control" type="text" name="address" placeholder="Address" required>
                                <div class="invalid-feedback">
                                    Please enter a valid address
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control" type="number" min="0" name="phone" placeholder="Phone" required>
                                <div class="invalid-feedback">
                                    Please enter a valid phone
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="role_id" class="form-control-label">Role Id</label>
                                <select name="role_id" id="role_id" class="form-control">
                                    <option value="1">User</option>
                                    <option value="0">Admin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" placeholder="Password" required>
                                <div class="invalid-feedback">
                                    Please enter a valid password
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password Repeat</label>
                                <input class="form-control" type="password" name="cpassword" placeholder="Password repeat" required>
                                <div class="invalid-feedback">
                                    Please enter a valid password repeat
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Avatar</label>
                                <input class="form-control-file" type="file" name="avatar" required>
                            </div>
                            <button class="btn btn-success btn-block" type="submit">Register</button>
                        </form>
                        <div class="register-link">
                            <p>
                                Already have an account?
                                <a href="/admin/">Sign In</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>