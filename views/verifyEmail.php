<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- BootStrap Link -->
    <link rel="stylesheet" href=".././assets/css/bootstrap.min.css">

    <!-- Icon Link -->
    <link rel="stylesheet" href=".././assets/css/all.min.css">
    <link rel="stylesheet" href=".././assets/css/line-awesome.min.css">

    <!-- Plugings Link -->
    <link rel="stylesheet" href=".././assets/css/animate.css">
    <link rel="stylesheet" href=".././assets/css/magnific-popup.css">
    <link rel="stylesheet" href=".././assets/css/nice-select.css">
    <link rel="stylesheet" href=".././assets/css/odometer.css">
    <link rel="stylesheet" href=".././assets/css/slick.css">

    <!-- Custom Link -->
    <link rel="stylesheet" href=".././assets/css/main.css">
    <link rel="shortcut icon" href=".././assets/images/favicon.png" type="image/x-icon">

    <title>Ongoing Crypto Site</title>

</head>
<body>
      <!-- Modal -->
<div class="modal fade" id="verificationModal" tabindex="-1" aria-labelledby="verificationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="verificationModalLabel">Verification Status</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- This will be dynamically updated with JS -->
      </div>
    </div>
  </div>
</div>
    <!-- preloader -->
    <div class="loader-bg">
        <div class="loader-p"></div>
    </div>
    <div class="overlay"></div>
            <!-- Header Section Starts Here -->
     <header class="header">
        <div class="header-bottom">
            <div class="container">
                <div class="header-area">
                    <div class="logo">
                        <a href="./index.html">
                            <img src=".././assets/images/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="header-trigger d-block d-lg-none">
                        <span></span>
                    </div>
                    <ul class="menu">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">Trading Plans</a>
                        </li> 
                        <li>
                            <a href="/cryptofront/Signup">Sign Up</a>
                        </li>           
                        <li>
                            <a href="/cryptofront/login" class="cmn--btn">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section Ends Here -->
     <!-- Banner Section Starts Here -->
     <section class="inner-banner bg_img padding-bottom" style="background: url(../assets/./images/about/bg.png) no-repeat right bottom;">
        <div class="container">
            <div class="inner-banner-wrapper">
                <div class="inner-banner-content">
                    <h2 class="inner-banner-title">Verify Email</h2>
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
                    <img src=".././assets/images/account/thumb.png" alt="account">
                </div>
            </div>
        </div>
        <div class="shape1 paroller" data-paroller-factor=".2">
            <img src=".././assets/images/about/balls.png" alt="about">
        </div>
    </section>

    <a href="#0" class="scrollToTop active"><i class="las la-chevron-up"></i></a>
    <script src=".././assets/js/jquery-3.3.1.min.js"></script>
    <script src=".././assets/js/bootstrap.min.js"></script>
    <script src=".././assets/js/jquery.ui.js"></script>
    <script src=".././assets/js/slick.min.js"></script>
    <script src=".././assets/js/wow.min.js"></script>
    <script src=".././assets/js/magnific-popup.min.js"></script>
    <script src=".././assets/js/odometer.min.js"></script>
    <script src=".././assets/js/viewport.jquery.js"></script>
    <script src=".././assets/js/nice-select.js"></script>
    <script src=".././assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
           document.addEventListener('DOMContentLoaded', function () {
    // 1. Get the emailVerificationToken from the URL
    const emailVerificationToken = window.location.pathname.split('/').pop();

    // 2. Send the token to the backend
    axios.get(`http://localhost:9000/v1/auth/verify_email/${emailVerificationToken}`)
        .then(response => {
            if (response.status === 200 && response.data.status === 'success') {
                // 3. Show success modal
                showModal(`${response.data.message}`, 'success');
                // 4. Redirect to login after 3 seconds
                setTimeout(() => {
                    window.location.href = '/cryptofront/login';
                }, 3000);
            }
        })
        .catch(error => {
            // 5. Show error modal
            const errorMessage = error.response && error.response.data && error.response.data.message
                ? error.response.data.message
                : 'An error occurred during email verification. Please try again.';
            
            showModal('Error', errorMessage, 'danger');

            // 4. Redirect to login after 3 seconds
            setTimeout(() => {
                    window.location.href = '/cryptofront/Signup';
                }, 3000);
        });
});

function showModal(title, message, type) {
    // 6. Update the modal content
    const modal = new bootstrap.Modal(document.getElementById('verificationModal'));
    const modalTitle = document.getElementById('verificationModalLabel');
    const modalBody = document.querySelector('.modal-body');

    modalTitle.innerText = title;
    modalBody.innerHTML = `<div class="alert alert-${type}">${message}</div>`;
    
    // 7. Show the modal
    modal.show();

    // 8. Automatically hide the modal after 3 seconds
    setTimeout(() => {
        modal.hide();
    }, 3000);
}
 
    </script>
</body>
</html>