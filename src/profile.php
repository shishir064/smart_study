<?php
session_start();
include '../backend/db_connect.php';

$user_id = $_SESSION['user_id'];

// Fetch user data
$sql = "SELECT username, email FROM users WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
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
                        <label for="my-drawer-5" class="drawer-button btn ">Menu<button>
                        <i class="ri-menu-line 2xl"></i></button></label>
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
                        <li class="text-black hover:text-gray-500 flex items-center gap-2">
                            <i class="ri-dashboard-line"></i>
                            <a href="mytask.php">My tasks</a>
                        </li>
                        <li class="text-black hover:text-gray-500 flex items-center gap-2">
                            <i class="ri-dashboard-line"></i>
                            <a href="profile.php">Profile</a>
                        </li>
                    </ul>
                </aside>

                <section class="lg:col-span-3 space-y-6">
    <div class="flex justify-between">
      <h1 class="text-black text-4xl font-semibold  px-3 py-4 rounded-lg ">My Profile</h1>        
    </div>
    <div class=" min-h-[420px] max-h-[420px] bg-white rounded-xl shadow flex justify-center">
      <div class="w-full max-w-3xl px-6">
        <form action="../backend/edit_profile.php" method="POST" class="space-y-4">

      
         <div>
        <label class="block font-medium">Username</label>
        <input
          type="text"
          name="username"
          value="<?php echo htmlspecialchars($user['username']); ?>"
          class="w-full border rounded-lg px-4 py-2"
          required
        />
        </div>

        <div>
        <label class="block font-medium">Email</label>
        <input
          type="email"
          name="email"
          value="<?php echo htmlspecialchars($user['email']); ?>"
          class="w-full border rounded-lg px-4 py-2"
          required
        />
        </div>

        <div>
        <label class="block font-medium">New Password</label>
        <input
          type="password"
          name="password"
          placeholder="Leave blank to keep old password"
          class="w-full border rounded-lg px-4 py-2"
        />
        </div>

        <button
        type="submit"
        class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
        Update Profile
        </button>

        </form>
    </section>
      </div>
    </div>

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