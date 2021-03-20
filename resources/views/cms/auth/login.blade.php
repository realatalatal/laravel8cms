<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Log In | Nooriwave - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('')}}/cms/images/favicon.ico">

    <!-- App css -->
    <link href="{{url('')}}/cms/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('')}}/cms/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{url('')}}/cms/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

</head>

<body class="authentication-bg pb-0" data-layout-config='{"darkMode":false}'>

    <div class="auth-fluid" style="background-image:url('<?php echo url('') . "/cms/images/booklogin.jpg"?>')">
        <!--Auth fluid left content -->
        <div class="auth-fluid-form-box">
            <div class="align-items-center d-flex h-100">
                <div class="card-body">

                    <!-- Logo -->
                    <div class="auth-brand text-center text-lg-left" style="position:static;">
                        <a href="javascript:void(0)" class="logo-dark">
                            <span><img src="{{url('')}}/cms/images/logo.jpg" alt="" height="100"></span>
                        </a>
                        <a href="javascript:void(0)" class="logo-light">
                            <span><img src="{{url('')}}/cms/images/logo.jpg" alt="" height="100"></span>
                        </a>
                    </div>

                    @if(session('logout') == 'success')
                    <h5 class="mb-2">
                        <span class="text-success">You were logged out successfully.</span>
                    </h5>
                    @endif
                    
                    <!-- title-->
                    <h4 class="mt-0">Sign In</h4>
                    <p class="text-muted mb-2">Enter your username and password to login.</p>
                    @if(session('login') == 'failed')
                    <h5 class="mb-2">
                        <span class="text-danger">The login credentials were incorrect, please try
                            again.</span>
                    </h5>
                    @endif

                    <!-- form -->
                    <form action="{{route('admin.login.submit')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input class="form-control" type="text" id="username" name="username" required
                                placeholder="Enter your username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="password" required id="password"
                                placeholder="Enter your password">
                        </div>
                        <div class="form-group mb-0 text-center">
                            <button class="btn btn-primary btn-block" type="submit"><i class="mdi mdi-login"></i> Log In
                            </button>
                        </div>
                    </form>
                    <!-- end form-->

                    <!-- Footer-->
                    <footer class="footer footer-alt">
                        <p class="text-muted">Forgot your password? Please contact the developers. </p>
                    </footer>

                </div> <!-- end .card-body -->
            </div> <!-- end .align-items-center.d-flex.h-100-->
        </div>
        <!-- end auth-fluid-form-box-->

        <!-- Auth fluid right content -->
        <div class="auth-fluid-right text-center">
            <div class="auth-user-testimonial">
                <h2 class="mb-3">Nooriwave Website CMS</h2>
                <p class="lead">Easily manage the content of the website, using graphical user interfaces.
                </p>
            </div> <!-- end auth-user-testimonial-->
        </div>
        <!-- end Auth fluid right content -->
    </div>
    <!-- end auth-fluid-->

    <!-- bundle -->
    <script src="{{url('')}}/cms/js/vendor.min.js"></script>
    <script src="{{url('')}}/cms/js/app.min.js"></script>

</body>

</html>
