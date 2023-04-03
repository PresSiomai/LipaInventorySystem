<?php require_once '../init.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?= url('/assets/css/main.css') ?>">
    <!-- fontawesome v5.13 -->
    <link rel="stylesheet" href="<?= url('/assets/fontawesome/css/all.css') ?>">
    <script src="<?= url('/assets/js/main.js') ?>" defer></script>
</head>

<body>
    <div class="layout">
        <?php include "../components/sidebar.php" ?>

        <div class="layout-content">
            <?php include "../components/header.php" ?>

            <main id="dashboard" data-page="dashboard" class="p-8 flex-grow flex flex-col min-h-0">
                <h1 class="page-title">DASHBOARD</h1>

                <div class="grid grid-cols-3 gap-4 mt-4 flex-shrink-0">
                    <div class="card-statistic">
                        <div class="card-statistic-body">
                            <h1 class="text-2xl flex-grow">5,000</h1>
                            <div class="italic text-sm font-light">Total Items recorded</div>
                        </div>
                        <i class="fas fa-box-check text-5xl text-white/20"></i>
                    </div>

                    <div class="card-statistic">
                        <div class="card-statistic-body">
                            <h1 class="text-2xl flex-grow">88,888,888</h1>
                            <div class="italic text-sm font-light">Total Items recorded</div>
                        </div>
                        <i class="card-statistic-icon fas fa-dollar-sign"></i>
                    </div>

                    <div class="card-statistic">
                        <div class="card-statistic-body">
                            <h1 class="text-2xl flex-grow">8,000</h1>
                            <div class="italic text-sm font-light">Total Unserviceable item</div>
                        </div>
                        <i class="card-statistic-icon fas fa-exclamation-triangle"></i>
                    </div>
                </div>

                <div class="mt-4 grid grid-cols-3 flex-grow gap-4 min-h-0">
                    <div class="card">
                        <div class="card-header">
                            <div>New Item Added</div>
                            <div>Page 1 of 4</div>
                        </div>
                        <div class="card-body">
                            <div class="flex flex-col ">
                                <?php foreach (range(1, 5) as $i) : ?>
                                    <div class="card-item">
                                        <h4>New Item no. 1 - 96,340</h4>
                                        <h5>Juan Dela Cruz - 2023-01-16 13:23:29</h5>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                        <div class="card-footer">
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
                    <div class="card col-span-2">
                        <div class="card-header">
                            <div>Recent Activity</div>
                            <div>Page 1 of 4</div>
                        </div>
                        <div class="card-body">
                            <div class="flex flex-col ">
                                <?php foreach (range(1, 5) as $i) : ?>
                                    <div class="card-item">
                                        <h4>New Item no. 1 - 96,340</h4>
                                        <h5>Juan Dela Cruz - 2023-01-16 13:23:29</h5>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                        <div class="card-footer">
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
                </div>

                <div class="mt-4 flex flex-col items-end text-white">
                    <span id="date" class="italic">-</span>
                    <span id="time" class="text-2xl">-</span>
                </div>

            </main>
        </div>
    </div>
</body>

</html>