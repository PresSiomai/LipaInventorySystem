<aside class="sidebar">
    <div class="p-4 bg-secondary-darker flex gap-4 items-center justify-center">
        <img class="h-16 aspect-square" src="../assets/image/logo.svg">
        <div class="text-md leading-4">
            CITY OF LIPA <br /> INVENTORY <br />SYSTEM
        </div>
    </div>
    <div class="flex flex-col flex-grow">
        <nav class="flex-grow">
            <a href="<?= url('/dashboard') ?>" class="navlink" data-target="dashboard">
                <i class="fas fa-th-large"></i>
                <span>DASHBOARD</span>
            </a>
            <button class="navlink relative" data-target="items">
                <i class="fas fa-box"></i>
                <span>ITEMS</span>
                <i class="ml-auto fal fa-angle-left fa-rotate-180"></i>
                <div class="navlink-dropdown">
                    <a class="whitespace-nowrap p-4" href="<?= url('/transfer-items') ?>">Transfer Item</a>
                    <a class="whitespace-nowrap p-4" href="#">Add Item</a>
                </div>
            </button>
            <a href="#" class="navlink" data-target="printing">
                <i class="fas fa-print"></i>
                <span>PRINTING</span>
                <i class="ml-auto fal fa-angle-left fa-rotate-180"></i>
            </a>
            <a href="#" class="navlink" data-target="unserviceable-items">
                <i class="fas fa-exclamation-triangle"></i>
                <span>UNSERVICEABLE ITEMS</span>
            </a>
            <a href="#" class="navlink" data-target="activity-log">
                <i class="fas fa-clipboard-list"></i>
                <span>ACTIVITY LOG</span>
            </a>
        </nav>

        <!-- Logout -->
        <form method="GET" action="<?= url('/login') ?>">
            <button type="submit" class="navlink">
                <i class="fas fa-power-off fa-rotate-90"></i>
                <span>Logout</span>
            </button>
        </form>
    </div>
</aside>