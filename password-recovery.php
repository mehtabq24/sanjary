<?php
include('include/header.php')
?>
  <main id="content">
        <section class="py-3 bg-color-3">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#"> Pages </a></li>
                        <li class="breadcrumb-item active" aria-current="page">Password Recovery</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="pb-11 pb-lg-15 pt-10">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-7 mx-auto">
                        <div class="card border-0">
                            <div class="card-body p-0">
                                <h2 class="card-title fs-40 mb-2">Forgot your password?</h2>
                                <p class="mb-6">Don’t have an account yet? <a href="login-register.html"
                                        class="d-inline-block fs-15 border-bottom border-2x lh-12 border-light-dark">Sign
                                        up for free</a></p>
                                <form class="form">
                                    <div class="form-group mb-6">
                                        <label for="email" class="text-heading">Enter your email address</label>
                                        <input type="email" name="mail" class="form-control" id="email"
                                            placeholder="Enter your email address">
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-6">Get new password
                                    </button>
                                </form>
                                <div class="row no-gutters mx-n2">
                                    <div class="col-sm-6 mb-4 mb-sm-0 px-2">
                                        <a href="#"
                                            class="btn btn-outline-primary btn-block text-capitalize px-3 font-weight-500">
                                            <span class="d-inline-block mr-2"><i
                                                    class="fab fa-facebook-f"></i></span>Continue with Facebook</a>
                                    </div>
                                    <div class="col-sm-6 mb-4 mb-sm-0 px-2">
                                        <a href="#"
                                            class="btn btn-outline-primary btn-block text-capitalize px-4 font-weight-500">
                                            <span class="d-inline-block mr-2">
                                                <i class="fab fa-google"></i>
                                            </span>Continue with Google</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
include('include/footer.php')
?>