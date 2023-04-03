<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>
    <div class="flex h-screen bg-secondary-lighter">
        <aside class="sidebar">
            <div class="p-4 bg-secondary-darker flex gap-4 items-center justify-center">
                <img class="h-16 aspect-square" src="../assets/image/logo.svg">
                <div class="text-md leading-4">
                    CITY OF LIPA <br /> INVENTORY <br />SYSTEM
                </div>
            </div>
            <div class="flex flex-col flex-grow">
                <nav class="flex-grow">
                    <a href="#" class="navlink active">DASHBOARD</a>
                    <a href="#" class="navlink">
                        <span>ITEMS</span>
                        <i class="fa-regular fa-angle-left fa-rotate-180"></i>
                    </a>
                    <a href="#" class="navlink">PRINTING</a>
                    <a href="#" class="navlink">UNSERVICEABLE ITEM</a>
                    <a href="#" class="navlink">ACTIVITY LOG</a>
                </nav>

                <!-- Logout -->
                <form method="POST">
                    <button type="submit" class="p-4 border-l-2">Logout</button>
                </form>
            </div>
        </aside>
        <div class="flex flex-grow flex-col h-screen">
            <header class="header">
                Juan Dela Cruz
            </header>
            <main id="dashboard" class="p-8 flex-grow flex flex-col min-h-0">
                <div class="text-white border-b border-white p-2">
                    <h1 class="text-2xl">DASHBOARD</h1>
                </div>

                <div class="grid grid-cols-3 gap-4 mt-4">
                    <div class="h-28 bg-primary rounded-2xl p-4 flex text-white">
                        <div class="flex flex-grow flex-col">
                            <h1 class="text-2xl flex-grow">5,000</h1>
                            <div class="italic text-sm font-light">Total Items recorded</div>
                        </div>
                    </div>

                    <div class="h-28 bg-primary rounded-2xl p-4 flex text-white">
                        <div class="flex flex-grow flex-col">
                            <h1 class="text-2xl flex-grow">88,888,888</h1>
                            <div class="italic text-sm font-light">Total Items recorded</div>
                        </div>
                    </div>

                    <div class="h-28 bg-primary rounded-2xl p-4 flex text-white">
                        <div class="flex flex-grow flex-col">
                            <h1 class="text-2xl flex-grow">8,000</h1>
                            <div class="italic text-sm font-light">Total Unserviceable item</div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 grid grid-cols-3 flex-grow gap-4 min-h-0">
                    <div class="bg-white flex flex-col min-h-0">
                        <div class="h-8 bg-secondary flex items-center justify-between px-4 text-white text-xs italic font-light">
                            <div>New Item Added</div>
                            <div>Page 1 of 4</div>
                        </div>
                        <div class="flex-grow overflow-y-auto min-h-0">
                            <div class="flex flex-col ">
                                <div class="p-2 border-b border-secondary flex flex-col">
                                    <div class="font-semibold text-sm">New Item no. 1 - 96,340</div>
                                    <div class="text-xs italic font-light">Juan Dela Cruz - 2023-01-16 13:23:29</div>
                                </div>
                                <div class="p-2 border-b border-secondary flex flex-col">
                                    <div class="font-semibold text-sm">New Item no. 1 - 96,340</div>
                                    <div class="text-xs italic font-light">Juan Dela Cruz - 2023-01-16 13:23:29</div>
                                </div>
                                <div class="p-2 border-b border-secondary flex flex-col">
                                    <div class="font-semibold text-sm">New Item no. 1 - 96,340</div>
                                    <div class="text-xs italic font-light">Juan Dela Cruz - 2023-01-16 13:23:29</div>
                                </div>
                                <div class="p-2 border-b border-secondary flex flex-col">
                                    <div class="font-semibold text-sm">New Item no. 1 - 96,340</div>
                                    <div class="text-xs italic font-light">Juan Dela Cruz - 2023-01-16 13:23:29</div>
                                </div>
                                <div class="p-2 border-b border-secondary flex flex-col">
                                    <div class="font-semibold text-sm">New Item no. 1 - 96,340</div>
                                    <div class="text-xs italic font-light">Juan Dela Cruz - 2023-01-16 13:23:29</div>
                                </div>
                                <div class="p-2 border-b border-secondary flex flex-col">
                                    <div class="font-semibold text-sm">New Item no. 1 - 96,340</div>
                                    <div class="text-xs italic font-light">Juan Dela Cruz - 2023-01-16 13:23:29</div>
                                </div>
                                <div class="p-2 border-b border-secondary flex flex-col">
                                    <div class="font-semibold text-sm">New Item no. 1 - 96,340</div>
                                    <div class="text-xs italic font-light">Juan Dela Cruz - 2023-01-16 13:23:29</div>
                                </div>
                                <div class="p-2 border-b border-secondary flex flex-col">
                                    <div class="font-semibold text-sm">New Item no. 1 - 96,340</div>
                                    <div class="text-xs italic font-light">Juan Dela Cruz - 2023-01-16 13:23:29</div>
                                </div>
                                <div class="p-2 border-b border-secondary flex flex-col">
                                    <div class="font-semibold text-sm">New Item no. 1 - 96,340</div>
                                    <div class="text-xs italic font-light">Juan Dela Cruz - 2023-01-16 13:23:29</div>
                                </div>
                                <div class="p-2 border-b border-secondary flex flex-col">
                                    <div class="font-semibold text-sm">New Item no. 1 - 96,340</div>
                                    <div class="text-xs italic font-light">Juan Dela Cruz - 2023-01-16 13:23:29</div>
                                </div>
                                <div class="p-2 border-b border-secondary flex flex-col">
                                    <div class="font-semibold text-sm">New Item no. 1 - 96,340</div>
                                    <div class="text-xs italic font-light">Juan Dela Cruz - 2023-01-16 13:23:29</div>
                                </div>
                                <div class="p-2 border-b border-secondary flex flex-col">
                                    <div class="font-semibold text-sm">New Item no. 1 - 96,340</div>
                                    <div class="text-xs italic font-light">Juan Dela Cruz - 2023-01-16 13:23:29</div>
                                </div>
                                <div class="p-2 border-b border-secondary flex flex-col">
                                    <div class="font-semibold text-sm">New Item no. 1 - 96,340</div>
                                    <div class="text-xs italic font-light">Juan Dela Cruz - 2023-01-16 13:23:29</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-end p-2 border-t border-secondary">
                            <div class="border-collapse border border-slate-500 text-slate-500 flex text-xs font-light rounded">
                                <a href="#" class="px-1 border-inherit">
                                    < </a>
                                        <a href="#" class="px-1 border-l border-inherit">1</a>
                                        <a href="#" class="px-1 border-l border-inherit">2</a>
                                        <a href="#" class="px-1 border-l border-inherit">3</a>
                                        <a href="#" class="px-1 border-l border-inherit">4</a>
                                        <a href="#" class="px-1 border-l border-inherit">></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white flex flex-col col-span-2">
                        <div class="h-8 bg-secondary flex items-center justify-between px-4 text-white text-xs italic font-light">
                            <div>Recent Activity</div>
                            <div>Page 1 of 4</div>
                        </div>
                        <div class="flex-grow"></div>
                        <div class="flex justify-end p-2 border-t border-secondary">
                            <div class="border-collapse border border-slate-500 text-slate-500 flex text-xs font-light rounded">
                                <a href="#" class="px-1 border-inherit"> < </a>
                                <a href="#" class="px-1 border-l border-inherit">1</a>
                                <a href="#" class="px-1 border-l border-inherit">2</a>
                                <a href="#" class="px-1 border-l border-inherit">3</a>
                                <a href="#" class="px-1 border-l border-inherit">4</a>
                                <a href="#" class="px-1 border-l border-inherit">></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 flex flex-col items-end text-white">
                    <span id="date" class="italic">Sunday, January 1, 2023</span>
                    <span id="time" class="text-2xl">12:00:00 AM</span>
                </div>

            </main>
        </div>
    </div>
</body>

</html>