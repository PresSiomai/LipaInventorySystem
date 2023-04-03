<?php require_once '../init.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= url('/assets/css/main.css') ?>">

    <!-- fontawesome v5.13 -->
    <link rel="stylesheet" href="<?= url('/assets/fontawesome/css/all.css') ?>">

    <script src="<?= url('/assets/js/main.js') ?>" defer></script>
</head>
<body>
    <div class="h-screen flex flex-col bg-secondary-lighter">
        <header class="header"></header>
        <main id="login">
            <div class="flex rounded-3xl mx-auto overflow-hidden">
                <div class="bg-secondary flex flex-col items-center p-8 py-16 justify-center">
                    <img class="w-48 aspect-square" src="<?= url('/assets/image/logo.svg') ?>">
                    <div class="text-white text-2xl mt-4 text-center">
                        <div class="p-2 px-4 border-b border-white">LIPA CITY GENERAL SERVICES OFFICE</div>
                        <div class="mt-2">INVENTORY SYSTEM</div>
                    </div>
                </div>
                <div class="bg-white flex flex-col items-center p-16">
                    <img class="w-32 aspect-square" src="<?= url('/assets/image/login-icon.svg') ?>">
                    <div class="text-sm font-light mt-2">Please enter your username and password!</div>

                    <form class="mt-16" action="<?= url('/dashboard') ?>" method="GET">
                        <div class="form-input">
                            <div class="px-4 text-slate-400">
                                <i class="fas fa-user"></i>
                            </div>
                            <input type="text" placeholder="Enter your username here."/>
                        </div>

                        <div class="form-input mt-4">
                            <div class="px-4 text-slate-400">
                                <i class="fas fa-lock"></i>
                            </div>
                            <input type="password" placeholder="Enter your password here." id="password"/>
                            <div class="px-4 text-slate-400">
                                <button type="button" id="password-toggler" class="w-2 fas fa-eye"></button>
                            </div>
                        </div>

                        <button class="btn-login">Login</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>
</html>