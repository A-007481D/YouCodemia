<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo - Education Platform</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-green-50 font-sans">
    <header class="bg-white shadow-md px-20">
        <div class="container mx-auto px-6 py-4 flex items-center justify-between">
            <a href="#" class="text-2xl font-bold text-green-500">YouCodemy</a>
            <nav class="flex space-x-6 text-gray-700">
                <a href="#" class="hover:text-green-500">Home</a>
                <a href="#" class="hover:text-green-500">About</a>
                <a href="#" class="hover:text-green-500">Courses</a>
                <a href="#" class="hover:text-green-500">Blog</a>
                <a href="#" class="hover:text-green-500">Contact</a>
            </nav>
            <div class="flex space-x-4">
                <div class="flex items-center gap-2 font-medium cursor-pointer hover:underline hover:text-green-500">
                <svg fill="#000000" height="1em" width="1em" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 485.00 485.00" xml:space="preserve" stroke="#000000" stroke-width="0.00485"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="2.9099999999999997"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M345,175v-72.5C345,45.981,299.019,0,242.5,0S140,45.981,140,102.5V175H70v310h345V175H345z M170,102.5 c0-39.977,32.523-72.5,72.5-72.5S315,62.523,315,102.5V175H170V102.5z M385,455H100V205h285V455z"></path> <path d="M227.5,338.047v53.568h30v-53.569c11.814-5.628,20-17.682,20-31.616c0-19.299-15.701-35-35-35c-19.299,0-35,15.701-35,35 C207.5,320.365,215.686,332.42,227.5,338.047z"></path> </g> </g></svg>
                    <a href="#" class="text-gray-700 hover:text-green-500">Login</a>
                </div>
                <a href="#" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Sign up for Free</a>
            </div>
        </div>
    </header>

    <section class="bg-green-50 py-16 px-20">
        <div class="container mx-auto px-6 text-center md:text-left">
            <div class="flex flex-col-reverse md:flex-row items-center">

                <div class="md:w-1/2">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-800">Start to Success</h1>
                    <p class="mt-4 text-xl text-gray-600">Access To <span class="text-green-500 font-bold">5000+</span> Courses from <span class="text-green-500 font-bold">300</span> Instructors & Institutions</p>
                    <p class="mt-2 text-gray-500">Various versions have evolved over the years, sometimes by accident.</p>
                    <div class="mt-6">
                        <input type="text" placeholder="What do you want to learn?" class="w-full md:w-2/3 px-4 py-3 border rounded-md focus:ring focus:ring-green-200 focus:outline-none">
                    </div>
                </div>

                <div class="md:w-1/2 flex justify-center md:justify-end">
                    <div class="relative flex space-x-4">
                        <div class="transparent p-4 rounded-xl ">
                            <img src="../../public/img/leslie.svg" alt="Course 1" class="rounded-lg">
                            <!-- <p class="mt-2 font-bold">UI-UX Design Course</p>
                            <span class="text-gray-600 text-sm">Leslie Alexander</span> -->
                        </div>
                        <div class="transparent p-4 rounded-xl ">
                            <img src="../../public/img/khona.svg" alt="Course 2" class="rounded-lg">
                            <!-- <p class="mt-2 font-bold">Social Media Marketing</p>
                            <span class="text-gray-600 text-sm">Wade Warren</span> -->
                        </div>
                        <span class="relative md:absolute md:right-[-10px] md:bottom-[47px] z-[100] flex items-center gap-3 shadow-input shadow-md md:bg-[#f0fdf4] p-2 lg:p-4 md:p-5 rounded-md cursor-pointer"> 5.0 Rating</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 px-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Most <span class="text-green-500">Popular Course</span></h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-white shadow-md rounded-lg p-4">
                    <img src="../../public/img/67812e3a07886-677e6a0f26212-677e67cf63fa4-677941fc2e9ac-car1.jpeg" alt="JavaScript" class="rounded-lg">
                    <h3 class="mt-4 text-lg font-bold">JavaScript for Beginners</h3>
                    <p class="text-gray-600">$4500</p>
                    <span class="block mt-2 text-yellow-400">⭐⭐⭐⭐⭐ (25)</span>
                </div>

                <div class="bg-white shadow-md rounded-lg p-4">
                    <img src="../../public/img/67812e3a07886-677e6a0f26212-677e67cf63fa4-677941fc2e9ac-car1.jpeg" alt="React" class="rounded-lg">
                    <h3 class="mt-4 text-lg font-bold">Complete React Guide</h3>
                    <p class="text-gray-600">$5500</p>
                    <span class="block mt-2 text-yellow-400">⭐⭐⭐⭐⭐ (40)</span>
                </div>

                <div class="bg-white shadow-md rounded-lg p-4">
                    <img src="../../public/img/67812e3a07886-677e6a0f26212-677e67cf63fa4-677941fc2e9ac-car1.jpeg" alt="Node.js" class="rounded-lg">
                    <h3 class="mt-4 text-lg font-bold">Node.js Development</h3>
                    <p class="text-gray-600">$6000</p>
                    <span class="block mt-2 text-yellow-400">⭐⭐⭐⭐⭐ (18)</span>
                </div>

                <div class="bg-gray-200 shadow-md rounded-lg p-4 opacity-50">
                    <img src="../../public/img/67812e3a07886-677e6a0f26212-677e67cf63fa4-677941fc2e9ac-car1.jpeg" alt="Design" class="rounded-lg">
                    <h3 class="mt-4 text-lg font-bold">UI/UX Design</h3>
                    <p class="text-gray-600">$5000</p>
                    <span class="block mt-2 text-yellow-400">⭐⭐⭐⭐⭐ (50)</span>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-green-50 py-16 px-20">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center">

        <div class="md:w-1/2">
                <img src="../../public/img/bottom_hero_img.png" alt="Join Image" class="rounded-lg">
            </div>


            <div class="md:w-1/2 mt-8 md:mt-0 md:ml-8 text-center md:text-left">
                <h2 class="text-4xl font-bold text-gray-800">Join <span class="text-green-500">World's largest</span> learning platform today</h2>
                <p class="mt-4 text-gray-600">Start learning by registering for free</p>
                <a href="#" class="mt-6 inline-block bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg hover:bg-green-600">Sign up for Free</a>
            </div>
        </div>
    </section>


    <footer class="bg-white py-12 px-20">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">

        <div>
                <h3 class="text-2xl font-bold text-green-500">YouCodemy</h3>
                <p class="mt-4 text-gray-600">Call: +123 400 123</p>
                <p class="text-gray-600">Email: example@mail.com</p>
                <div class="flex space-x-4 mt-4">
                    <a href="#" class="text-green-500 hover:text-green-600">FB</a>
                    <a href="#" class="text-green-500 hover:text-green-600">TW</a>
                    <a href="#" class="text-green-500 hover:text-green-600">LN</a>
                    <a href="#" class="text-green-500 hover:text-green-600">BE</a>
                </div>
            </div>


            <div>
                <h3 class="text-xl font-bold text-gray-800">Explore</h3>
                <ul class="mt-4 space-y-2">
                    <li><a href="#" class="text-gray-600 hover:text-green-500">Home</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-green-500">About</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-green-500">Course</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-green-500">Blog</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-green-500">Contact</a></li>
                </ul>
            </div>


            <div>
                <h3 class="text-xl font-bold text-gray-800">Category</h3>
                <ul class="mt-4 space-y-2">
                    <li><a href="#" class="text-gray-600 hover:text-green-500">Design</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-green-500">Development</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-green-500">Marketing</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-green-500">Business</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-green-500">Lifestyle</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-green-500">Music</a></li>
                </ul>
            </div>


            <div>
                <h3 class="text-xl font-bold text-gray-800">Subscribe</h3>
                <p class="mt-4 text-gray-600">Get the latest updates and offers.</p>
                <div class="mt-4">
                    <input type="email" placeholder="Enter your email" class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-green-200 focus:outline-none">
                    <button class="w-full mt-2 bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Sign up for Free</button>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>