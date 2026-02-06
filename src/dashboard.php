<?php
include '../backend/dashboard_data.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Dashboard</title>
</head>

<body class="bg-slate-50 text-slate-900">
    <header class="text-gray-600 bg-white top-0 body-font px-4 sm:px-8 z-10 sticky shadow-md">
        <div class="container mx-auto flex flex-wrap p-5 justify-between md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <i class="ri-pen-nib-fill text-2xl"></i>
                <span class="ml-3 text-2xl">Smart Study</span>
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <div class="drawer drawer-end">
                    <input id="my-drawer-5" type="checkbox" class="drawer-toggle" />
                    <div class="drawer-content">
                        <label for="my-drawer-5" class="drawer-button btn ">Menu<button><i
                                    class="ri-menu-line 2xl"></i></button></label>
                    </div>
                    <div class="drawer-side">
                        <label for="my-drawer-5" aria-label="close sidebar" class="drawer-overlay"></label>
                        <ul class="menu bg-base-200 min-h-full w-80 p-4">

                            <li class="py-2 "><a href="../index.html"><i class="ri-home-line"></i> Home</a></li>
                            <li class="py-2 "><a><i class="ri-settings-3-line"></i> Settings</a></li>
                            <li>
                                <form action="../backend/logout.php" method="POST">
                                <button type="submit"
                                    onclick="return confirm('Are you sure you want to logout?')"
                                    class="py-2 rounded-lg flex items-center gap-1">
                                    <i class="ri-logout-box-line"></i> Logout
                                </button>
                                </form>

                            </li>
                        </ul>
                    </div>
                </div>

            </nav>
        </div>
    </header>

    <main class="flex-1 w-full">
        <div class="max-w-8xl mx-auto px-4 py-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <aside class="bg-white rounded-xl shadow p-6 h-full">
                    <ul class="space-y-4 font-medium">
                        <li class="text-black hover:text-gray-500 flex items-center gap-2">
                            <i class="ri-dashboard-line"></i>
                            <a href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="text-black hover:text-blue-500 flex items-center gap-2">
                            <i class="ri-dashboard-line"></i>
                            <a href="mytask.php">My tasks</a>
                        </li>
                        <li class="text-black hover:text-blue-500 flex items-center gap-2">
                            <i class="ri-dashboard-line"></i>
                            <a href="profile.php">Profile</a>
                        </li>
                    </ul>
                </aside>

                <section class="lg:col-span-3 space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                        <div class="bg-white rounded-xl shadow p-6 text-center">
                            <p class="text-black">Total Tasks</p>
                            <p class="text-3xl font-bold text-blue-600">
                                <?= $totalTasks ?>
                            </p>
                        </div>

                        <div class="bg-white rounded-xl shadow p-6 text-center">
                            <p class="text-black">Completed</p>
                            <p class="text-3xl font-bold text-green-600">
                                <?= $completedTasks ?>
                            </p>
                        </div>

                        <div class="bg-white rounded-xl shadow p-6 text-center">
                            <p class="text-black">Pending</p>
                            <p class="text-3xl font-bold text-red-600">
                                <?= $pendingTasks ?>
                            </p>
                        </div>
                    </div>


                    <div class="bg-white rounded-xl shadow p-5">
                        <h2 class="text-lg font-semibold mb-4">Recent Tasks</h2>

                        <div class="space-y-4 min-h-[420px] max-h-[420px] overflow-y-auto pr-2">

                            <?php if (mysqli_num_rows($tasks) > 0): ?>
                            <?php while ($row = mysqli_fetch_assoc($tasks)): ?>
                            <?php $completed = $row['status'] == 1; ?>

                            <div class="border rounded-lg p-4 flex gap-4 transition
              <?= $completed ? 'bg-gray-100 opacity-70' : 'bg-[#F7FAFF]' ?>">


                                <div class="flex-1">
                                    <h3 class="font-semibold <?= $completed ? 'line-through text-gray-400' : '' ?>">
                                        <?= htmlspecialchars($row['title']) ?>
                                    </h3>

                                    <p
                                        class="text-sm mt-1 <?= $completed ? 'line-through text-gray-400' : 'text-gray-600' ?>">
                                        <?= htmlspecialchars($row['description']) ?>
                                    </p>

                                    <div class="flex gap-2 mt-2 text-xs text-gray-400">
                                        <span>
                                            <?= htmlspecialchars($row['subject']) ?>
                                        </span>
                                    </div>

                                </div>
                            </div>

                            <?php endwhile; ?>
                            <?php else: ?>
                            <p class="text-center text-gray-500 py-20">No tasks yet</p>
                            <?php endif; ?>

                        </div>
                    </div>

                </section>
    </main>

    <footer class="bg-white text-gray-600 body-font">

        <div class="bg-gray-100">
            <div class="mx-auto px-4 py-6 flex flex-col sm:flex-row items-center justify-between text-sm text-gray-500">
                <p class="text-center sm:text-left text-black">
                    © 2026 Smart Study. All rights reserved.
                </p>
                <p class="mt-2 sm:mt-0">
                    Built by <span class="font-medium text-gray-700">Shishir</span>
                </p>
            </div>
        </div>
    </footer>

</body>
</html>
