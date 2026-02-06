<!doctype html>
<html class="scroll-smooth" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
  <title>Smart Study Planner</title>
</head>

<body class="m-h-screen">
  <header class="text-gray-600 bg-white body-font px-4 sm:px-8 z-10 sticky top-0 shadow-md ">
    <div class="container mx-auto flex flex-wrap p-5 justify-between md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <i class="ri-pen-nib-fill text-2xl"></i>
        <span class="ml-3 text-2xl">Smart Study</span>
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <ul class="hidden md:flex">
          <li>
            <a id="hometop" class=" mr-5 hover:text-gray-900" href="index.html">Home</a>
          </li>
          <li>
            <a id="abouttop" class="mr-5 hover:text-gray-900" href="#about">About</a>
          </li>
          <li>
            <a id="contacttop" class="mr-5 hover:text-gray-900" href="#contact">Contact Us</a>
          </li>
        </ul>

        <a class="hidden md:inline-flex items-center bg-gray-100 border-0 mr-3 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"
          href="./src/signUp.html">
          Sing Up
        </a>
        <a class="hidden md:inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"
          href="./src/login.php">
          Login
        </a>

        <div class="md:hidden drawer drawer-end">
          <input id="my-drawer-5" type="checkbox" class="drawer-toggle" />
          <div class="drawer-content">
            <label for="my-drawer-5" class="drawer-button btn ">Menu<button><i
                  class="ri-menu-line 2xl"></i></button></label>
          </div>
          <div class="drawer-side">
            <label for="my-drawer-5" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu bg-base-200 min-h-full w-80 p-4">
              <li class="py-2 "><a href="../index.php"><i class="ri-home-line"></i> Home</a></li>
              <li class="py-2 "><a href="#about"><i class="ri-info-i"></i> About</a></li>
              <li class="py-2 "><a href="#contact"><i class="ri-contacts-book-line"></i> Contact</a></li>

            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <section class="text-gray-600 body-font shadow-sm bg-white">
    <div class="container mx-auto flex px-4 sm:px-6 py-12 sm:py-24 md:flex-row flex-col items-center">
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0 mr-9">
        <img class="object-cover object-center rounded" alt="hero"
          src="./src/img/fda68de4-bd54-4201-8e36-855c1d18fd98.jpg" />
      </div>
      <div
        class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
        <h1 class="title-font text-3xl sm:text-4xl lg:text-5xl mb-8 font-bold text-gray-900">
          Plan Smarter, <br class="hidden sm:block" />
          <span class="md:mx-4">Study Better</span>
        </h1>
        <p class="mb-8 mt-6 leading-relaxed max-w-2xl">
          Organize your study tasks, manage deadlines, track your progress,
          and stay focused with one simple and powerful planner.
        </p>
        <div class="flex justify-center">
          <a href="./src/signUp.php"
            class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
            Get Started
          </a>
          <a href="#about"
            class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg" >
            Learn More
          </a>
        </div>
      </div>
    </div>
  </section>

  <section data-aos="fade-up" class="py-16 px-4 sm:px-8">
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="bg-white p-6 sm:p-10 lg:p-20 rounded-2xl shadow hover:shadow-lg transition text-center">
        <i class="ri-calendar-check-line text-5xl text-blue-600 mb-4"></i>
        <h3 class="text-2xl font-semibold mb-2">Task Planning</h3>
        <p class="text-gray-600 max-w-xs mx-auto">
          Create and manage your daily study tasks with deadlines and
          priorities.
        </p>
      </div>

      <div class="bg-white p-6 sm:p-10 lg:p-20 rounded-2xl shadow hover:shadow-lg transition text-center">
        <i class="ri-line-chart-line text-5xl text-indigo-600 mb-4"></i>
        <h3 class="text-2xl font-semibold mb-2">Progress Tracking</h3>
        <p class="text-gray-600 max-w-xs mx-auto">
          Track your completed tasks and visualize your daily study progress.
        </p>
      </div>

      <div class="bg-white p-6 sm:p-10 lg:p-20 rounded-2xl shadow hover:shadow-lg transition text-center">
        <i class="ri-moon-line text-5xl text-purple-600 mb-4"></i>
        <h3 class="text-2xl font-semibold mb-2">Simple & Smart</h3>
        <p class="text-gray-600 max-w-xs mx-auto">
          Clean interface, dark mode support, and easy-to-use design.
        </p>
      </div>
    </div>
  </section>

  <section data-aos="fade-up" id="about" class="mx-auto px-4 sm:px-6 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
      <div class="bg-white shadow-sm rounded-3xl p-6 sm:p-10">
        <p class="text-orange-500 font-semibold mb-4">
          About Smart Study Planner
        </p>

        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold leading-tight mb-6 break-words">
          Our Dream is <br />
          Global Learning <br />
          Transformation
        </h1>

        <p class="text-gray-600 leading-relaxed text-base sm:text-lg">
          Smart Study Planner is a modern web-based application built for
          students to help them organize study routines, manage deadlines, and
          improve time management. With a clean design and smart features, it
          turns daily study planning into a simple and productive experience.
        </p>
      </div>

      <div class="flex flex-col gap-6">
        <div class="bg-white shadow-sm rounded-3xl overflow-hidden">
          <img src="./src/img/fda68de4-bd54-4201-8e36-855c1d18fd98.jpg" alt="Students Working"
            class="w-full h-56 sm:h-72 md:h-96 object-cover" />
        </div>
        <div class="grid grid-cols-2 gap-4 sm:gap-6 bg-white shadow-sm rounded-3xl p-6 sm:p-8">
          <div class="p-4 bg-white rounded-xl shadow hover:shadow-lg transition text-center">
            <h2 class="text-2xl sm:text-3xl font-bold">3.5 yrs</h2>
            <p class="text-gray-500 text-sm">Since</p>
          </div>

          <div class="p-4 bg-white rounded-xl shadow hover:shadow-lg transition text-center">
            <h2 class="text-2xl sm:text-3xl font-bold">4</h2>
            <p class="text-gray-500 text-sm">Team members</p>
          </div>

          <div class="p-4 bg-white rounded-xl shadow hover:shadow-lg transition text-center">
            <h2 class="text-2xl sm:text-3xl font-bold">830+</h2>
            <p class="text-gray-500 text-sm">Positive Reviews</p>
          </div>

          <div class="p-4 bg-white rounded-xl shadow hover:shadow-lg transition text-center">
            <h2 class="text-2xl sm:text-3xl font-bold">100K</h2>
            <p class="text-gray-500 text-sm">Trusted Students</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section data-aos="fade-up" id="contact" class="bg-white mb-8">
    <div class="container px-6 py-12 mx-auto">
      <div class="lg:flex lg:items-center lg:-mx-6">
        <div class="lg:w-1/2 lg:mx-6">
          <h1 class="pl-10 text-3xl sm:text-4xl md:text-5xl font-semibold text-gray-800 capitalize">
            Contact us for <br />
            more info
          </h1>

          <div class="mt-6 pl-10 space-y-8 md:mt-8">
            <p class="flex items-start -mx-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500 dark:text-blue-400" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>

              <span class="mx-2 text-gray-700 truncate w-72 text-gray-400">
                Nepal 091-2880 kailali, dhangadhi 96522
              </span>
            </p>

            <p class="flex items-start -mx-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500 dark:text-blue-400" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>

              <span class="mx-2 text-gray-700 truncate w-72 text-gray-400">(+977) 563-000</span>
            </p>

            <p class="flex items-start -mx-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500 dark:text-blue-400" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>

              <span class="mx-2 text-gray-700 truncate w-72 text-gray-400">acb@example.com</span>
            </p>
          </div>

          <div class="pl-10 mt-6 w-80 md:mt-8">
            <h3 class="text-gray-600 text-gray-300">Follow us</h3>

            <div class="flex mt-4 -mx-1.5">
              <a class="mx-1.5 dark:hover:text-blue-400 text-gray-400 transition-colors duration-300 transform hover:text-blue-500"
                href="#">
                <svg class="w-10 h-10 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M18.6668 6.67334C18.0002 7.00001 17.3468 7.13268 16.6668 7.33334C15.9195 6.49001 14.8115 6.44334 13.7468 6.84201C12.6822 7.24068 11.9848 8.21534 12.0002 9.33334V10C9.83683 10.0553 7.91016 9.07001 6.66683 7.33334C6.66683 7.33334 3.87883 12.2887 9.3335 14.6667C8.0855 15.498 6.84083 16.0587 5.3335 16C7.53883 17.202 9.94216 17.6153 12.0228 17.0113C14.4095 16.318 16.3708 14.5293 17.1235 11.85C17.348 11.0351 17.4595 10.1932 17.4548 9.34801C17.4535 9.18201 18.4615 7.50001 18.6668 6.67268V6.67334Z" />
                </svg>
              </a>

              <a class="mx-1.5 dark:hover:text-blue-400 text-gray-400 transition-colors duration-300 transform hover:text-blue-500"
                href="#">
                <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M15.2 8.80005C16.4731 8.80005 17.694 9.30576 18.5941 10.2059C19.4943 11.1061 20 12.327 20 13.6V19.2H16.8V13.6C16.8 13.1757 16.6315 12.7687 16.3314 12.4687C16.0313 12.1686 15.6244 12 15.2 12C14.7757 12 14.3687 12.1686 14.0687 12.4687C13.7686 12.7687 13.6 13.1757 13.6 13.6V19.2H10.4V13.6C10.4 12.327 10.9057 11.1061 11.8059 10.2059C12.7061 9.30576 13.927 8.80005 15.2 8.80005Z"
                    fill="currentColor" />
                  <path d="M7.2 9.6001H4V19.2001H7.2V9.6001Z" fill="currentColor" />
                  <path
                    d="M5.6 7.2C6.48366 7.2 7.2 6.48366 7.2 5.6C7.2 4.71634 6.48366 4 5.6 4C4.71634 4 4 4.71634 4 5.6C4 6.48366 4.71634 7.2 5.6 7.2Z"
                    fill="currentColor" />
                </svg>
              </a>

              <a class="mx-1.5 dark:hover:text-blue-400 text-gray-400 transition-colors duration-300 transform hover:text-blue-500"
                href="#">
                <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M7 10.2222V13.7778H9.66667V20H13.2222V13.7778H15.8889L16.7778 10.2222H13.2222V8.44444C13.2222 8.2087 13.3159 7.9826 13.4826 7.81591C13.6493 7.64921 13.8754 7.55556 14.1111 7.55556H16.7778V4H14.1111C12.9324 4 11.8019 4.46825 10.9684 5.30175C10.1349 6.13524 9.66667 7.2657 9.66667 8.44444V10.2222H7Z"
                    fill="currentColor" />
                </svg>
              </a>

              <a class="mx-1.5 dark:hover:text-blue-400 text-gray-400 transition-colors duration-300 transform hover:text-blue-500"
                href="#">
                <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M11.9294 7.72275C9.65868 7.72275 7.82715 9.55428 7.82715 11.825C7.82715 14.0956 9.65868 15.9271 11.9294 15.9271C14.2 15.9271 16.0316 14.0956 16.0316 11.825C16.0316 9.55428 14.2 7.72275 11.9294 7.72275ZM11.9294 14.4919C10.462 14.4919 9.26239 13.2959 9.26239 11.825C9.26239 10.354 10.4584 9.15799 11.9294 9.15799C13.4003 9.15799 14.5963 10.354 14.5963 11.825C14.5963 13.2959 13.3967 14.4919 11.9294 14.4919ZM17.1562 7.55495C17.1562 8.08692 16.7277 8.51178 16.1994 8.51178C15.6674 8.51178 15.2425 8.08335 15.2425 7.55495C15.2425 7.02656 15.671 6.59813 16.1994 6.59813C16.7277 6.59813 17.1562 7.02656 17.1562 7.55495ZM19.8731 8.52606C19.8124 7.24434 19.5197 6.10901 18.5807 5.17361C17.6453 4.23821 16.51 3.94545 15.2282 3.88118C13.9073 3.80621 9.94787 3.80621 8.62689 3.88118C7.34874 3.94188 6.21341 4.23464 5.27444 5.17004C4.33547 6.10544 4.04628 7.24077 3.98201 8.52249C3.90704 9.84347 3.90704 13.8029 3.98201 15.1238C4.04271 16.4056 4.33547 17.5409 5.27444 18.4763C6.21341 19.4117 7.34517 19.7045 8.62689 19.7687C9.94787 19.8437 13.9073 19.8437 15.2282 19.7687C16.51 19.708 17.6453 19.4153 18.5807 18.4763C19.5161 17.5409 19.8089 16.4056 19.8731 15.1238C19.9481 13.8029 19.9481 9.84704 19.8731 8.52606ZM18.1665 16.5412C17.8881 17.241 17.349 17.7801 16.6456 18.0621C15.5924 18.4799 13.0932 18.3835 11.9294 18.3835C10.7655 18.3835 8.26272 18.4763 7.21307 18.0621C6.51331 17.7837 5.9742 17.2446 5.69215 16.5412C5.27444 15.488 5.37083 12.9888 5.37083 11.825C5.37083 10.6611 5.27801 8.15832 5.69215 7.10867C5.97063 6.40891 6.50974 5.8698 7.21307 5.58775C8.26629 5.17004 10.7655 5.26643 11.9294 5.26643C13.0932 5.26643 15.596 5.17361 16.6456 5.58775C17.3454 5.86623 17.8845 6.40534 18.1665 7.10867C18.5843 8.16189 18.4879 10.6611 18.4879 11.825C18.4879 12.9888 18.5843 15.4916 18.1665 16.5412Z"
                    fill="currentColor" />
                </svg>
              </a>
            </div>
          </div>
        </div>

        <div class="mt-8 lg:w-1/2 lg:mx-6">
          <div
            class="w-full px-8 py-10 mx-auto overflow-hidden bg-white rounded-lg shadow-2xl lg:max-w-xl shadow-gray-300/50 dark:shadow-black/50">
            <h1 class="text-lg font-medium text-gray-700">
              What do you want to ask
            </h1>

            <form class="mt-6">
              <div class="flex-1">
                <label class="block mb-2 text-sm text-gray-600 text-gray-200">Full Name</label>
                <input type="text" placeholder="enter your name"
                  class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
              </div>

              <div class="flex-1 mt-6">
                <label class="block mb-2 text-sm text-gray-600 text-gray-200">Email address</label>
                <input type="email" placeholder="your@example.com"
                  class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
              </div>

              <div class="w-full mt-6">
                <label class="block mb-2 text-sm text-gray-600 text-gray-200">Message</label>
                <textarea
                  class="block w-full h-32 px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md md:h-48 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"
                  placeholder="Message"></textarea>
              </div>

              <button
                class="w-full px-6 py-3 mt-6 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                get in touch
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-white text-gray-600 body-font">
    <div class="mx-auto px-4 sm:px-6 py-12">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
        <div class="text-center sm:text-left">
          <a class="flex items-center justify-center sm:justify-start mb-4">
            <i class="ri-pen-nib-fill text-2xl"></i>
            <span class="ml-3 text-2xl font-medium text-gray-900">Smart Study</span>
          </a>
          <p class="text-sm text-gray-500 max-w-xs mx-auto sm:mx-0">
            Smart Study Planner helps students organize, plan, and succeed in
            their academic journey.
          </p>
        </div>

        <!-- LINKS -->
        <div class="text-center sm:text-left">
          <h2 class="font-medium text-gray-900 tracking-widest text-sm mb-4">
            Quick Links
          </h2>
          <nav class="space-y-2">
            <a href="#hometop" class="block hover:text-gray-900">Home</a>
            <a href="#about" class="block hover:text-gray-900">About</a>
            <a href="#contact" class="block hover:text-gray-900">Contact</a>
          </nav>
        </div>

        <div class="text-center sm:text-left">
          <h2 class="font-medium text-gray-900 tracking-widest text-sm mb-4">
            Resources
          </h2>
          <nav class="space-y-2">
            <a class="block hover:text-gray-900">Blog</a>
            <a class="block hover:text-gray-900">Guides</a>
            <a class="block hover:text-gray-900">FAQs</a>
            <a class="block hover:text-gray-900">Support</a>
          </nav>
        </div>

        <div class="text-center sm:text-left">
          <h2 class="font-medium text-gray-900 tracking-widest text-sm mb-4">
            Follow Us
          </h2>
          <div class="flex justify-center sm:justify-start space-x-4">
            <i class="ri-facebook-fill text-xl hover:text-blue-600 cursor-pointer"></i>
            <i class="ri-twitter-x-line text-xl hover:text-blue-500 cursor-pointer"></i>
            <i class="ri-instagram-line text-xl hover:text-pink-500 cursor-pointer"></i>
            <i class="ri-linkedin-fill text-xl hover:text-blue-700 cursor-pointer"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-gray-100">
      <div class="mx-auto px-4 py-4 flex flex-col sm:flex-row items-center justify-between text-sm text-gray-500">
        <p class="text-center sm:text-left">
          © 2026 Smart Study. All rights reserved.
        </p>
        <p class="mt-2 sm:mt-0">
          Built by <span class="font-medium text-gray-700">Shishir</span>
        </p>
      </div>
    </div>
  </footer>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 600,
      once: true,
    });
  </script>
</body>

</html>