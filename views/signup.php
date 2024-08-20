<?php ob_start(); ?>

<!-- Banner Section Starts Here -->
<section class="inner-banner bg_img padding-bottom" style="background: url(./assets/images/about/bg.png) no-repeat right bottom;">
    <div class="container">
        <div class="inner-banner-wrapper">
            <div class="inner-banner-content">
                <h2 class="inner-banner-title">Create your account</h2>
                <ul class="breadcums">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <span>Registration</span>
                    </li>
                </ul>
            </div>
            <div class="inner-banner-thumb about d-none d-md-block">
                <img src="./assets/images/account/thumb.png" alt="account">
            </div>
        </div>
    </div>
    <div class="shape1">
        <img src="./assets/images/about/balls.png" alt="about">
    </div>
</section>
<!-- Banner Section Ends Here -->

<!-- Account Section Starts Here -->
<section class="account-section padding-top padding-bottom">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-7 d-none d-lg-block">
                <div class="account-thumb">
                    <img src="./assets/images/account/login-thumb.png" alt="account">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="account-wrapper">
                    <h2 class="title">Create Your Account</h2>
                    <form id="signupForm" class="account-form">
                        <div class="form--group">
                            <i class="las la-user"></i>
                            <input type="text" name="fullName" class="form--control" placeholder="Full Name" required>
                        </div>
                        <div class="form--group">
                            <i class="las la-user"></i>
                            <input type="text" name="userName" class="form--control" placeholder="User Name" required>
                        </div>
                        <div class="form--group">
                            <i class="las la-user"></i>
                            <input type="email" name="email" class="form--control" placeholder="Email" required>
                        </div>
                        <div class="form--group">
                            <i class="las la-phone"></i>
                            <input type="text" name="phone" class="form--control" placeholder="Phone Number" required>
                        </div>
                        <div class="form--group">
                            <i class="las la-lock"></i>
                            <input type="password" name="password" class="form--control" placeholder="Password" required>
                        </div>
                        <div class="form--group">
                            <i class="las la-lock"></i>
                            <input type="password" name="repassword" class="form--control" placeholder="Re - Password" required>
                        </div>
                        <div class="d-flex">
                            <div class="form--group custom--checkbox ">
                                <input type="checkbox" id="check01" required>
                                <label for="check01">I agree with all <a class="text--primary" href="#">Terms & Conditions</a></label>
                            </div>
                        </div>
                        <div class="form--group">
                            <button type="submit" class="custom-button">REGISTRATION</button>
                        </div>
                    </form>
                    <span class="subtitle">Already have an account here?</span>
                    <a href="/cryptofront/login" class="create-account theme-four">Sign in</a>
                    <div class="shape">
                        <img src="./assets/images/account/shape.png" alt="account">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
<div class="modal fade" id="verificationModal" tabindex="-1" aria-labelledby="verificationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered"> <!-- Added modal-dialog-centered class -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="verificationModalLabel">Almost Done</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="verificationMessage">
                <!-- Message will be inserted here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<!-- Error Modal -->
<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">Error</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="errorMessage">
                <!-- Error message will be inserted here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</section>
<!-- Account Section Ends Here -->

<script>
    document.getElementById('signupForm').addEventListener('submit', function(event) {
        event.preventDefault();
    
    var formData = {
        fullName: document.querySelector('input[name="fullName"]').value,
        userName: document.querySelector('input[name="userName"]').value,
        email: document.querySelector('input[name="email"]').value,
        phone: document.querySelector('input[name="phone"]').value,
        password: document.querySelector('input[name="password"]').value,
        repassword: document.querySelector('input[name="repassword"]').value,
    };

    axios.post('http://localhost:9000/v1/auth/signup', formData)
        .then(function(response) {
            // Display the modal with the custom message
            var message = response.data.message; // Assuming your backend sends back user data
            var modalMessage = `${message}`;
            document.getElementById('verificationMessage').innerText = modalMessage;
            
            // Show the modal
            var verificationModal = new bootstrap.Modal(document.getElementById('verificationModal'));
            verificationModal.show();

            // Reset the form fields after displaying the modal
            document.getElementById('signupForm').reset();
        })
        .catch(function(error) {
            // Display the error modal with the error message
            var errorMessage = error.response.data.message; // Assuming your backend sends back error message
            document.getElementById('errorMessage').innerText = errorMessage;
            
            // Show the error modal
            var errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
            errorModal.show();
        });
    });


</script>

<?php
$content = ob_get_clean();
include './views/layouts/main.php';
?>
