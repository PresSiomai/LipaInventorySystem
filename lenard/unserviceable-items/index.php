<?php require_once '../init.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unserviceable Items</title>
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
            <main data-page="unserviceable-items" class="p-8 flex-grow flex flex-col min-h-0">
                <h1 class="page-title flex-shrink-0">UNSERVICEABLE ITEM</h1>

                <div class="w-full flex-grow bg-white flex flex-col mt-4">
                    <div class="flex-grow overflow-y-auto">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Code No.</th>
                                    <th>Item Name</th>
                                    <th>Property No.</th>
                                    <th>Value</th>
                                    <th>Date Acquired</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach(range(1,1) as $i) : ?>
                                <tr>
                                    <td>1</td>
                                    <td>14-194256-01</td>
                                    <td>Sample Item Name 22</td>
                                    <td>2221020589</td>
                                    <td>PHP 96,340</td>
                                    <td>2022-07-31</td>
                                    <td>
                                        <a href="<?= url('/transfer-items-show') ?>">
                                            <i class="fas fa-eye text-primary-lightest"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="flex flex-shrink-0 justify-center py-4 border-t border-slate-300">
                        <div class="pagination">
                            <a href="#">
                                <i class="fal fa-angle-left"></i>
                            </a>
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">
                                <i class="fal fa-angle-left fa-rotate-180"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>