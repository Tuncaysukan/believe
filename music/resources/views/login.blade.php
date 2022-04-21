<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>BeliveBackstage - CRM </title>

    <meta name="description" content="BeliveBackstage - CRM">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="BeliveBackstage - CRM ">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{asset('')}}assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('')}}assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('')}}assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap">
    <link rel="stylesheet" id="css-main" href="{{asset('')}}assets/css/codebase.min.css">
    <link rel="stylesheet" href="{{asset('')}}sweet-alert/sweetalert2.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>

<div id="page-container" class="main-content-boxed">

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="bg-image" style="background-image: url('{{asset('')}}assets/media/photos/photo34@2x.jpg');">
            <div class="row mx-0 bg-black-50">
                <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                    <div class="p-4">
                        <p class="fs-3 fw-semibold text-white">

                        </p>
                        <p class="text-white-75 fw-medium">
                            Copyright &copy; <span data-toggle="year-copy"></span>
                        </p>
                    </div>
                </div>
                <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-body-extra-light">
                    <div class="content content-full">
                        <!-- Header -->
                        <div class="px-4 py-2 mb-4">
                            <a class="link-fx fw-bold" href="{{asset('')}}">
                                <i class="fa fa-fire"></i>
                                <span class="fs-4 text-body-color">believe</span><span class="fs-4">backstage</span>
                            </a>
                            <h1 class="h3 fw-bold mt-4 mb-2">Hoşgeldin</h1>

                        </div>
                        <!-- END Header -->

                        <!-- Sign In Form -->
                        <!-- jQuery Validation functionality is initialized with .js-validation-signin class in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js -->
                        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                        <form class="js-validation-signin px-4" action="{{route('login')}}"  id="loginForm" method="POST">
                            @csrf
                            <div class="form-floating mb-4">
                                <input type="email" class="form-control" id="email"
                                       value="{{old('login-email')}}" name="email"
                                       placeholder="">
                                <label class="form-label" for="login-email">E Posta Adresiniz</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="password"
                                       value="{{old('login-password')}}" name="password"
                                       placeholder="">
                                <label class="form-label" for="login-password">Şifre</label>
                            </div>

                            <div class="mb-4">
                                <button type="submit" id="btnLogin" class="btn btn-lg btn-alt-primary fw-semibold">
                                    Giriş Yap
                                </button>
                                <div class="mt-4">
                                    <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block"
                                       href="#">
                                        Kayıt Ol
                                    </a>
                                    <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block"
                                       href="#">
                                        Şifremi Unuttum
                                    </a>
                                </div>
                            </div>
                        </form>
                        <!-- END Sign In Form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
</div>
<!-- END Page Container -->

<!--
    Codebase JS

    Core libraries and functionality
    webpack is putting everything together at assets/_js/main/app.js
-->


<!-- jQuery (required for Select2 + jQuery Validation plugins) -->
<script src="{{asset('')}}assets/js/lib/jquery.min.js"></script>

<!-- Page JS Plugins -->
<script src="{{asset('')}}assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>


<script src="{{asset('')}}sweet-alert/sweetalert2.all.js"></script>

<!-- Page JS Code -->


<script>
    $('#btnLogin').click(
        function () {
            event.preventDefault();
            let email = document.querySelector('#email').value;
            let password = document.querySelector('#password').value;


            if (email.trim()==''){
                Swal.fire({
                    icon: 'info',
                    title: 'Uyarı',
                    text: 'Email  Adresi Boş Olamaz',

                })
            }else if(!emailControl(email)){
                Swal.fire({
                    icon: 'info',
                    title: 'Uyarı',
                    text: 'Email  Formatı Doğru Olmalı ',

                })
            }
            else if(password.trim()==''){
                Swal.fire({
                    icon: 'info',
                    title: 'Uyarı',
                    text: 'Şifre Alanı Boş Olamaz',

                })
            }
            else {
                $('#loginForm').submit(

                );
            }


        });
    function emailControl(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

</script>

</body>
</html>
