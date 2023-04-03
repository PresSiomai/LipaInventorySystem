<?php require_once '../init.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Item</title>
    <link rel="stylesheet" href="<?= url('/assets/css/main.css') ?>">
    <!-- fontawesome v5.13 -->
    <link rel="stylesheet" href="<?= url('/assets/fontawesome/css/all.css') ?>">
    <script src="<?= url('/assets/js/main.js') ?>" defer></script>
</head>

<body>
    <div class="layout">
        <?php include '../components/sidebar.php' ?>
        <div class="layout-content">
            <?php include '../components/header.php' ?>
            <main id="transfer-items-show" data-page="items" class="p-8 flex-grow flex flex-col">
                <h1 class="page-title">TRANSFER ITEM</h1>
                <div class="mt-8 grid grid-cols-2 gap-4 flex-grow">
                    <div class="card">
                        <div class="card-header">
                            Item Information
                        </div>
                        <div class="card-body">
                            <div class="flex justify-between items-center border-b p-2 border-slate-400">
                                <div class="text-2xl">Sample Item name 22</div>
                                <button class="text-primary-lightest">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                            <div class="p-4 grid grid-cols-2 border-b border-slate-400">
                                <div>Code Number: </div>
                                <div class="text-green-500">20220814-194256-01</div>

                                <div>Property Number:</div>
                                <div class="text-green-500">2221020589</div>

                                <div>Classification: </div>
                                <div class="text-green-500">Class Sample</div>

                                <div>Source of fund: </div>
                                <div class="text-green-500">General Fund</div>

                                <div>Date Acquired: </div>
                                <div class="text-green-500">2022-07-31</div>

                                <div>Total Value: </div>
                                <div class="text-green-500">Php 96,340</div>
                            </div>
                            <div class="p-8">
                                <img class="w-full" src="<?= url("/assets/image/qrcode.jpg") ?>">
                            </div>
                        </div>
                    </div>

                    <form method="GET" class="card" id="transfer-form">
                        <div class="card-header">Receiver Information</div>
                        <div class="card-body">
                            <div class="form-input required">
                                <label>Receiver Name: </label>
                                <input type="text" required>
                            </div>

                            <div class="form-input mt-2">
                                <label>Position: </label>
                                <input type="text">
                            </div>

                            <div class="form-input mt-2 required">
                                <label>Office: </label>
                                <input type="text" required>
                            </div>

                            <div class="form-input mt-2 required">
                                <label>Date Transfer: </label>
                                <input type="date" required>
                            </div>
                        </div>
                        <div class="card-footer flex justify-between">
                            <a href="<?= url('/transfer-items') ?>" type="button" class="btn bg-primary-lightest hover:bg-primary-lightest/90">
                                <i class="fal fa-ban"></i>
                                <span>Cancel</span>
                            </a>
                            <button type="button" onclick="openModal('confirmation_modal')" class="btn bg-blue-500 hover:bg-blue-500/90">
                                <span>Proceed</span>
                                <i class="fal fa-arrow-right"></i>
                            </button>
                        </div>

                        <!-- Password Confirmation Modal -->
                        <div id="confirmation_modal" class="hidden fixed flex-col items-center justify-center inset-0 bg-black/60">
                            <div class="bg-white w-full max-w-md rounded-lg overflow-hidden">
                                <div class="bg-primary-darker p-4 py-2 text-white flex justify-between">
                                    <div>TRANSFER ITEM CONFIRMATION</div>
                                </div>
                                <div class="p-4">
                                    <div class="p-4 text-center text-red-500 border-b border-slate-300">
                                        To confirm the transaction,<br />
                                        Please enter admin password!
                                    </div>
                                    <div class="form-input mt-4">
                                        <input type="password" placeholder="Enter your password here">
                                    </div>
                                </div>
                                <div class="p-4 border-t border-slate-300 flex justify-between">
                                    <button type="button" onclick="closeModal('confirmation_modal')" class="btn bg-primary-lightest hover:bg-primary-lightest/90">
                                        <span>Cancel</span>
                                    </button>
                                    <button type="submit" class="btn bg-blue-500 hover:bg-blue-500/90">
                                        <span>Confirm Password</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>
</body>

</html>