<?php ob_start(); ?>

<!-- Banner Section Starts Here -->
<section class="inner-banner bg_img padding-bottom" style="background: url(./assets/images/about/bg.png) no-repeat right bottom;">
        <div class="container">
            <div class="inner-banner-wrapper">
                <div class="inner-banner-content">
                    <h2 class="inner-banner-title">login your
                        account</h2>
                    <ul class="breadcums">
                        <li>
                            <a href="/cryptofront">Home</a>
                        </li>
                        <li>
                            <span>Login</span>
                        </li>
                    </ul>
                </div>
                <div class="inner-banner-thumb about d-none d-md-block">
                    <img src="./assets/images/account/thumb.png" alt="account">
                </div>
            </div>
        </div>
        <div class="shape1 paroller" data-paroller-factor=".2">
            <img src="./assets/images/about/balls.png" alt="about">
        </div>
    </section>
    <!-- Banner Section Ends Here -->

 
    <!-- Account Section Starts Here -->
    <section class="account-section padding-top padding-bottom">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-7  d-none d-lg-block">
                    <div class="account-thumb">
                        <img src="./assets/images/account/login-thumb.png" alt="account">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="account-wrapper">
                        <h2 class="title">Sign In Your Account</h2>
<form class="account-form">
    <div class="form--group">
        <i class="las la-user"></i>
        <input type="email" class="form--control" placeholder="Email or User Name" required>
    </div>
    <div class="form--group">
        <i class="las la-lock"></i>
        <input type="password" class="form--control" placeholder="Password" required>
    </div>
    <div class="d-flex justify-content-between">
        <div class="form--group custom--checkbox ">
            <input type="checkbox" id="check01">
            <label for="check01">Remember me</label>
        </div>
        <div class="form--group forgot-pass">
            <a href="#0">Forgot Password?</a>
        </div>
    </div>
    <div class="form--group">
        <button class="custom-button" type="submit">SIGN IN NOW</button>
    </div>
</form>
                        <span class="subtitle">Don't have an account yet?</span>
                        <a href="/cryptofront/Signup" class="create-account theme-four">Create Account</a>
                        <div class="shape">
                            <img src="./assets/images/account/shape.png" alt="account">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Account Section Ends Here -->

    <!-- Error Modal -->
<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="errorModalLabel">Login Error</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Error message will be dynamically inserted here -->
        <p id="errorModalMessage"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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


<script>
    document.querySelector('.account-form').addEventListener('submit', async function(event) {
    event.preventDefault(); // Prevent the form from submitting the traditional way

    // Collect the form data
    const emailOrUsername = document.querySelector('input[type="email"]').value;
    const password = document.querySelector('input[type="password"]').value;

    // Prepare the request body
    const requestBody = {
        email: emailOrUsername, // Assuming the backend expects 'email'
        password: password
    };

    try {
        // Send a POST request to the backend login endpoint
        const response = await axios.post('http://localhost:9000/v1/auth/signin', requestBody);

        if (response.status === 200) {
            const { token, data: { user } } = response.data;
            console.log(token);

            // Send token to set session
            const sessionResponse = await axios.post("/cryptofront/setSession.php", { token });

            if (sessionResponse.data.status === 'success') {
                // Store token in local storage or cookies
                localStorage.setItem('authToken', token);
                document.cookie = `token=${token}; path=/; max-age=${24 * 60 * 60};`;

                // Optionally, redirect to a protected page or dashboard
                window.location.href = '/cryptofront/dashboard';
            } else {
                console.error('Failed to set session:', sessionResponse.data.message);

                // Handle session setting failure and display the error modal
                const errorMessage2 = "Failed to set session. Please try again later.";
                document.getElementById('errorModalMessage').textContent = errorMessage2;
                const errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
                errorModal.show();
            }
        } else {
            // Handle any other unsuccessful responses
            const errorMessage1 = response.data.message || "An unexpected error occurred. Please try again later.";
            document.getElementById('errorModalMessage').textContent = errorMessage1;
            const errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
            errorModal.show();
        }
    } catch (error) {
        // Handle errors during the request
        const errorMessage1 = error.response && error.response.data && error.response.data.message 
                            ? error.response.data.message 
                            : "An unexpected error occurred. Please try again later.";
        document.getElementById('errorModalMessage').textContent = errorMessage1;
        const errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
        errorModal.show();
    }
});

</script>
<?php
$content = ob_get_clean();
include './views/layouts/main.php';
?>