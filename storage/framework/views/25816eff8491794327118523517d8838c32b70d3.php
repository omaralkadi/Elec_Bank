
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

}
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Laravel')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                        <?php else: ?>

                        <?php if(!Auth::guest() && Auth::user()->group_id ==1 ): ?>

                        <!--Transactions Management-->
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false" v-pre>
                               Transactions <span class="caret"></span>
                            </a>


                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="transfer_show">new Transaction</a>
                                <a class="dropdown-item" href="listTransactions">View Transactions</a>
                            </div>
                        </li>
                        <!-- User Mangement -->
                        <li>
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false" v-pre>
                                     Customer Management  <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" style="position:absolute;left:850px;width:200px"aria-labelledby="navbarDrodpdown">
                                    <a id="navbarDropdown" class="nav-link " href="adduserform" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                    New Account <span class="caret"></span>
                                    </a>
                                    <a id="navbarDropdown" class="nav-link " href="showusers" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                    View Accounts<span class="caret"></span>
                                    </a>
                                    <a id="navbarDropdown" class="nav-link " href="updateuser" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                    Update Accounts <span class="caret"></span>
                                    </a>

                                </div>
                            </li>
                                <a id="navbarDropdown" class="nav-link " href="feedback" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                  Feedback <span class="caret"></span>
                                </a>
                            <?php endif; ?>
                            <li class="nav-item dropdown">


                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->fname ." " . Auth::user()->lname); ?> <span class="caret"></span>
                                </a>


                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>


                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>


                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH E:\FCIH\3\2nd Term\Software Engineering-2\project\project\versions\Elec_Bank\resources\views/layouts/app.blade.php ENDPATH**/ ?>