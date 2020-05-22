<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="src/bootstrap/css/bootstrap.css"crossorigin="anonymous">
    <link rel="stylesheet" href="src/bootstrap/css/bootstrap.min.css"crossorigin="anonymous">
    <link rel="stylesheet" href="src/bootstrap/css/bootstrap-grid.css"crossorigin="anonymous">
    <link rel="stylesheet" href="src/bootstrap/css/bootstrap-grid.min.css"crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        window.Laravel = <?php echo json_encode([
        'user' => auth()->check() ? auth()->user()->id : null,
    ]); ?>;
    </script>
    <?php echo $__env->yieldContent('css'); ?>
    <title>Hello, world!</title>
</head>
<body>
<div id="app">
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-3">
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
            <span style="color: tomato">
                <i class="fa fa-bell fa-2x"></i>
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo e(route('home')); ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">Notification</a>
                </li>
            </ul>
            <div class="m-3">
                <vue-notification></vue-notification>
            </div>
            <ul class="navbar-nav my-2 my-lg-0">
            <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('login.view')); ?>">Login</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" > Wellcome <?php echo e(Auth::user()->username); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('logout')); ?>">Logout</a>
                </li>
            <?php endif; ?>
            </ul>
        </div>
    </nav>
    <div class="border mt-2 p-3">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php echo $__env->yieldContent('script'); ?>

<script src="<?php echo e(mix('js/app.js')); ?>"></script>
<script src="src/bootstrap/js/bootstrap.bundle.js"crossorigin="anonymous"></script>
<script src="src/bootstrap/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
<script src="src/bootstrap/js/bootstrap.js"crossorigin="anonymous"></script>
<script src="src/bootstrap/js/bootstrap.min.js"crossorigin="anonymous"></script>
</body>
</html><?php /**PATH /home/d3cr33/opt/Workplace/Project/notify/resources/views/layouts/app.blade.php ENDPATH**/ ?>