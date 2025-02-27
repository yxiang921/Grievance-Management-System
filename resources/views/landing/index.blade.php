<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grievance Management System</title>
    <link rel="stylesheet" href="css/tailwind.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"
        integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">

</head>

<body class="font-body scroll-smooth">

    <!-- home section -->
    <section class="bg-white mb-20 md:mb-52 xl:mb-72">

        <div class="container max-w-screen-xl mx-auto px-4">

            <nav class="flex-wrap lg:flex items-center py-14 xl:relative z-10" x-data="{ navbarOpen: false }">

                <div class="flex items-center justify-between mb-10 lg:mb-0">
                    <img src="image/navbar-logo.png" alt="Logo img" class="w-52 md:w-80 lg:w-full">


                    <button
                        class="lg:hidden w-10 h-10 ml-auto flex items-center justify-center text-green-700 border border-green-700 rounded-md"
                        @click="navbarOpen = !navbarOpen">
                        <i data-feather="menu"></i>
                    </button>
                </div>

                <ul class="lg:flex flex-col lg:flex-row lg:items-center lg:mx-auto lg:space-x-8 xl:space-x-16"
                    :class="{ 'hidden': !navbarOpen, 'flex': navbarOpen }">

                    <li
                        class="font-semibold text-gray-900 text-lg hover:text-gray-400 transition ease-in-out duration-300 mb-5 lg:mb-0">
                        <a href="#intro">Why us?</a>
                    </li>

                    <li
                        class="font-semibold text-gray-900 text-lg hover:text-gray-400 transition ease-in-out duration-300 mb-5 lg:mb-0">
                        <a href="#prototype">Prototype</a>
                    </li>

                    <li
                        class="font-semibold text-gray-900 text-lg hover:text-gray-400 transition ease-in-out duration-300 mb-5 lg:mb-0">
                        <a href="#review">Review</a>
                    </li>

                    <li
                        class="font-semibold text-gray-900 text-lg hover:text-gray-400 transition ease-in-out duration-300 mb-5 lg:mb-0">
                        <a href="#contact">Contact</a>
                    </li>

                </ul>

                <button
                    class="px-5 py-3 lg:block border-2 border-green-700 rounded-lg font-semibold text-green-700 text-lg hover:bg-green-700 hover:text-white transition ease-linear duration-500"
                    :class="{ 'hidden': !navbarOpen, 'flex': navbarOpen }">
                    <a href="https://www.mediafire.com/file/xxokw60us6zed87/app-debug.apk/file" target="_blank">Download
                        APP Here</a>
                </button>

            </nav>


            <div class="flex items-center justify-center xl:justify-start">


                <div class="mt-28 text-center xl:text-left">
                    <h1 class="font-semibold text-4xl md:text-6xl lg:text-7xl text-gray-900 leading-normal mb-6">
                        Introduction to <br> Our GMS</h1>

                    <p class="font-normal text-xl text-gray-400 leading-relaxed mb-12">Learn how our Grievance
                        Management System streamlines <br>
                        complaint handling and ensures effective resolutions.</p>

                    <button
                        class="px-6 py-4 bg-green-700 text-white font-semibold text-lg rounded-xl hover:bg-green-900 transition ease-in-out duration-500">
                        <a href ="#contact">Contact us</a>
                    </button>
                </div>

                <div class="hidden w-1/2 xl:block xl:absolute z-0 top-1/2 -translate-y-24 right-0">
                    <img class="w-3/4 ml-24" src="{{ asset('images/laptop-home.png') }}" alt="Laptop">
                </div>

            </div>

        </div>

    </section>
    <section id="intro"class="bg-white py-10 md:py-16 xl:relative">

        <div class="container max-w-screen-xl mx-auto px-4">

            <div class="flex flex-col xl:flex-row justify-end">

                <div class="hidden xl:block xl:absolute left-12 bottom-1/2 translate-y-1/2 w-full">
                    <img class="w-1/3" src="{{ asset('images/mobile-home.png') }}" alt="Feature img">
                </div>

                <div class="">

                    <h1 class="font-semibold text-gray-900 text-xl md:text-4xl text-center leading-normal mb-6">
                        Objective of our <br>Grievance Management System</h1>

                    <p class="font-normal text-gray-400 text-md md:text-xl text-center mb-16">Our GMS is designed to
                        streamline and <br>enhance the process of addressing grievances effectively</p>

                    <div class="flex flex-col md:flex-row justify-center xl:justify-start space-x-4 mb-20">
                        <div
                            class="px-8 h-20 mx-auto md:mx-0 bg-gray-200 rounded-lg flex items-center justify-center mb-5 md:mb-0">
                            <i data-feather="check-circle" class=" text-green-900"></i>
                        </div>

                        <div class="text-center md:text-left">
                            <h4 class="font-semibold text-gray-900 text-2xl mb-2">Timely Resolution</h4>
                            <p class="font-normal text-gray-400 text-xl leading-relaxed"> Ensure quick and efficient
                                resolution of grievances to <br> build trust and satisfaction.</p>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row justify-center xl:justify-start space-x-4 mb-20">
                        <div
                            class="px-8 h-20 mx-auto md:mx-0 bg-gray-200 rounded-lg flex items-center justify-center mb-5 md:mb-0">
                            <i data-feather="lock" class=" text-green-900"></i>
                        </div>

                        <div class="text-center md:text-left">
                            <h4 class="font-semibold text-gray-900 text-2xl mb-2">Transparency</h4>
                            <p class="font-normal text-gray-400 text-xl leading-relaxed">Maintain transparency in
                                grievance handling to <br>ensure fairness and accountability.</p>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row justify-center xl:justify-start space-x-4">
                        <div
                            class="px-8 h-20 mx-auto md:mx-0 bg-gray-200 rounded-lg flex items-center justify-center mb-5 md:mb-0">
                            <i data-feather="credit-card" class=" text-green-900"></i>
                        </div>

                        <div class="text-center md:text-left">
                            <h4 class="font-semibold text-gray-900 text-2xl mb-2">Machine Learning Integration</h4>
                            <p class="font-normal text-gray-400 text-xl leading-relaxed">Leverage machine learning
                                algorithms to analyze<br> grievance patterns for better decision-making.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div> <!-- container.// -->

    </section>
    <!-- feature section //end -->

    <section id="prototype" class="bg-white py-10 md:py-16">

        <div class="container max-w-screen-xl mx-auto px-4">

            <h1 class="font-semibold text-gray-900 text-4xl text-center mb-10">Our Prototype</h1>

            <!-- Navigation Tabs -->
            <div class="flex justify-center space-x-2 mb-6">
                <button data-section="all" onclick="showSection('all')"
                    class="px-4 py-2 bg-blue-600 text-white rounded">
                    All
                </button>
                <button data-section="admin" onclick="showSection('admin')"
                    class="px-4 py-2 bg-gray-200 text-gray-800 rounded">
                    Admin
                </button>
                <button data-section="user" onclick="showSection('user')"
                    class="px-4 py-2 bg-gray-200 text-gray-800 rounded">
                    User
                </button>
            </div>

            <div id="all" class="flex space-x-4 md:space-x-6 lg:space-x-8">
                <div>
                    <img src="image/gallery-1.png" alt="image"
                        class="mb-4 md:mb-6 lg:mb-8 hover:opacity-75 transition ease-in-out duration-500">
                    <img src="image/gallery-4.png" alt="image"
                        class="hover:opacity-75 transition ease-in-out duration-500">
                </div>
                <div>
                    <img src="image/gallery-2.png" alt="image"
                        class="mb-4 md:mb-6 lg:mb-8 hover:opacity-75 transition ease-in-out duration-500">
                    <img src="image/gallery-5.png" alt="image"
                        class="mb-3 md:mb-6 lg:mb-8 hover:opacity-75 transition ease-in-out duration-500">
                    <img src="image/gallery-6.png" alt="image"
                        class="hover:opacity-75 transition ease-in-out duration-500">
                </div>
                <div>
                    <img src="image/gallery-3.png" alt="image"
                        class="mb-4 md:mb-6 lg:mb-8 hover:opacity-75 transition ease-in-out duration-500">
                    <img src="image/gallery-7.png" alt="image"
                        class="hover:opacity-75 transition ease-in-out duration-500">
                </div>
            </div>
            <div id="admin" class="hidden">
                <h2 class="font-semibold text-gray-900 text-3xl text-center mb-6">Admin Features</h2>
                <div class="flex space-x-4 md:space-x-6 lg:space-x-8">
                    <div>
                        <img src="image/gallery-3.png" alt="Admin Analytics"
                            class="hover:opacity-75 transition ease-in-out duration-500">
                    </div>
                    <div>
                        <img src="image/gallery-1.png" alt="Admin Dashboard"
                            class="mb-4 md:mb-6 lg:mb-8 hover:opacity-75 transition ease-in-out duration-500">
                    </div>
                    <div>
                        <img src="image/gallery-2.png" alt="Admin Analytics"
                            class="hover:opacity-75 transition ease-in-out duration-500">
                    </div>
                </div>
            </div>
            <div id="user" class="hidden">
                <h2 class="font-semibold text-gray-900 text-3xl text-center mb-6">User Features</h2>
                <div class="flex space-x-4 md:space-x-6 lg:space-x-8">
                    <div>
                        <img src="image/gallery-4.png" alt="Admin Analytics"
                            class="hover:opacity-75 transition ease-in-out duration-500">
                    </div>
                    <div>
                        <img src="image/gallery-5.png" alt="Admin Analytics"
                            class="hover:opacity-75 transition ease-in-out duration-500">
                    </div>
                    <div>
                        <img src="image/gallery-6.png" alt="Admin Analytics"
                            class="hover:opacity-75 transition ease-in-out duration-500">
                    </div>
                </div>
            </div>

        </div> <!-- container -->

    </section>

    <!-- gallery section //end -->

    <!-- testimoni section -->
    <section id="review" class="bg-white py-10 md:py-16">

        <div class="container max-w-screen-xl mx-auto px-4 xl:relative">

            <p class="font-normal text-gray-400 text-lg md:text-xl text-center uppercase mb-6">Review</p>

            <h1 class="font-semibold text-gray-900 text-2xl md:text-4xl text-center leading-normal mb-14">What People
                Say <br> About GMS</h1>

            <div class="hidden xl:block xl:absolute top-0">
                <img src="image/testimoni-1.png" alt="Image">
            </div>

            <div class="hidden xl:block xl:absolute top-32">
                <img src="image/testimoni-2.png" alt="Image">
            </div>

            <div
                class="flex flex-col md:flex-row md:items-center justify-center md:space-x-8 lg:space-x-12 mb-10 md:mb-20">

                <div class="bg-gray-100 rounded-lg mb-10 md:mb-0">
                    <img src="image/testimoni-3.png" alt="Image" class="mx-8 my-8">

                    <div class="flex items-center gap-5 mx-8">
                        <i data-feather="star" class="text-yellow-500"></i>
                        <i data-feather="star" class="text-yellow-500"></i>
                        <i data-feather="star" class="text-yellow-500"></i>
                        <i data-feather="star" class="text-yellow-500"></i>
                        <i data-feather="star" class="text-yellow-500"></i>
                    </div>

                    <p class="font-normal text-sm lg:text-md text-gray-400 mx-8 my-8">Very convenient and
                        user-friendly. Submitting and tracking complaints is hassle-free, and the updates keep me
                        informed. Great system overall!</p>

                    <h3 class="font-semibold text-gray-900 text-xl md:text-2xl lg:text-3xl mx-8 mb-8">Foo Yong Xiang
                    </h3>
                </div>

                <div class="bg-gray-100 rounded-lg">
                    <img src="image/testimoni-4.png" alt="Image" class="mx-8 my-8">

                    <div class="flex items-center gap-5 mx-8">
                        <i data-feather="star" class="text-yellow-500"></i>
                        <i data-feather="star" class="text-yellow-500"></i>
                        <i data-feather="star" class="text-yellow-500"></i>
                        <i data-feather="star" class="text-yellow-500"></i>
                        <i data-feather="star" class="text-yellow-500"></i>
                    </div>

                    <p class="font-normal text-sm lg:text-md text-gray-400 mx-8 my-8">Quick and efficient! I appreciate
                        the notifications about similar resolved issues—it saves a lot of back-and-forth. Highly
                        satisfied!</p>

                    <h3 class="font-semibold text-gray-900 text-xl md:text-2xl lg:text-3xl mx-8 mb-8">Aaron Lwi</h3>
                </div>

            </div>

        </div> <!-- container.// -->

    </section>
    <!-- testimoni section //end -->

    <!-- book section -->
    <section id="contact" class="bg-white py-10 md:py-16">

        <div class="container max-w-screen-xl mx-auto px-4 xl:relative">

            <div class="bg-green-800 flex flex-col lg:flex-row items-center justify-evenly py-14 rounded-3xl">

                <div class="text-center lg:text-left mb-10 lg:mb-0">
                    <h1 class="font-semibold text-white text-4xl md:text-5xl lg:text-7xl leading-normal mb-4">Talk to
                        us <br> to discuss</h1>

                    <p class="font-normal text-white text-md md:text-xl">Need more time to discuss? Won’t worry, we are
                        <br> ready to help you. You can fill in the column on the <br> right to book a meeting with us.
                        Totally free.
                    </p>
                </div>

                <div class="hidden xl:block xl:absolute right-0">
                    <img src="image/book.png" alt="Image">
                </div>

                <div class="hidden md:block bg-white xl:relative px-6 py-3 rounded-3xl">
                    <form action="{{ route('landing.store') }}" method="POST">
                        @csrf
                        <div class="py-3">
                            <h3 class="font-semibold text-gray-900 text-3xl">Book a meeting</h3>
                        </div>

                        <div class="py-3">
                            <input type="text" name="full_name" placeholder="Full Name"
                                class="px-4 py-4 w-96 bg-gray-100 placeholder-gray-400 rounded-xl outline-none">
                        </div>

                        <div class="py-3">
                            <input type="email" name="email" placeholder="Email"
                                class="px-4 py-4 w-96 bg-gray-100 placeholder-gray-400 rounded-xl outline-none">
                        </div>

                        <div class="py-3 relative">
                            <input type="datetime-local" name="contact_date"
                                class="px-4 py-4 w-96 bg-gray-100 font-normal text-lg placeholder-gray-400 rounded-xl outline-none">
                        </div>

                        <div class="py-3 relative">
                            <select name="meeting_type"
                                class="px-4 py-4 w-96 bg-gray-100 text-gray-700 rounded-xl outline-none">
                                <option value="" disabled selected>Select Meeting Type</option>
                                <option value="virtual">Virtual Meeting</option>
                                <option value="physical">Physical Meeting</option>
                            </select>
                        </div>

                        <div class="py-3">
                            <button
                                class="w-full py-4 font-semibold text-lg text-white bg-green-700 rounded-xl hover:bg-green-900 transition ease-in-out duration-500">
                                Book Meeting
                            </button>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </section>
    <footer class="bg-white py-10 md:py-16">

        <div class="container max-w-screen-xl mx-auto px-4">

            <div class="flex flex-col lg:flex-row justify-between">
                <div class="text-center lg:text-left mb-10 lg:mb-0">
                    <div class="flex justify-center lg:justify-start mb-5">
                        <img src="image/navbar-logo.png" alt="Image">
                    </div>

                    <p class="font-light text-gray-400 text-xl mb-10">Simplify your grievance process with <br> GMS</p>

                    <p class="font-light text-gray-400 text-xl py-2">More information</p>
                    <div class="flex items-center justify-center lg:justify-start space-x-5">
                        <a href="https://github.com/yxiang921/Grievance-Management-System"
                            class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-green-800 hover:text-white transition ease-in-out duration-500">
                            <i data-feather="github"></i>
                        </a>
                    </div>

                    <p class="font-light text-gray-400 text-xl mt-8 py-2">Person in charge in this project</p>
                    <div class="flex items-center justify-center lg:justify-start space-x-5">
                        <a href="https://www.linkedin.com/in/yong-xiang/"
                            class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-green-800 hover:text-white transition ease-in-out duration-500">
                            <i data-feather="linkedin"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/chun-kiat-lwi-058308287/"
                            class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-green-800 hover:text-white transition ease-in-out duration-500">
                            <i data-feather="linkedin"></i>
                        </a>
                        <a href="#"
                            class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-green-800 hover:text-white transition ease-in-out duration-500">
                            <i data-feather="linkedin"></i>
                        </a>
                    </div>
                </div>

                <div class="text-center lg:text-left mb-10 lg:mb-0">
                    <h4 class="font-semibold text-gray-900 text-2xl mb-6">Sitemap</h4>

                    <a href="#"
                        class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">Home</a>

                    <a href="#intro"
                        class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">Introduction</a>

                    <a href="#prototype"
                        class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">Prototype</a>

                    <a href="#review"
                        class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">Review</a>

                    <a href="#contact"
                        class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">Book
                        a meeting</a>
                </div>

                <div class="text-center lg:text-left mb-10 lg:mb-0">
                    <h4 class="font-semibold text-gray-900 text-2xl mb-6">Landing</h4>

                    <a href="#"
                        class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">Mobile
                        App</a>

                    <a href="#"
                        class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">Property</a>

                    <a href="#"
                        class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">Personal
                        Website</a>

                    <a href="#"
                        class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">Web
                        Developer</a>

                </div>

                <div class="text-center lg:text-left">
                    <h4 class="font-semibold text-gray-900 text-2xl mb-6">Utility</h4>

                    <a href="/faq"
                        class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">FAQ</a>

                    <a href="/tac"
                        class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">Terms
                        & Conditions</a>
                </div>
            </div>

        </div> <!-- container.// -->

    </footer>
    <!-- footer //end -->

    <script>
        // Replace Feather icons when the page loads
        document.addEventListener('DOMContentLoaded', () => {
            feather.replace();
        });

        // Function to show specific section and handle active state
        function showSection(section) {
            // List of all possible sections
            const sections = ['all', 'admin', 'user'];

            // Hide all sections
            sections.forEach(sec => {
                const sectionElement = document.getElementById(sec);
                const navButton = document.querySelector(`[data-section="${sec}"]`);

                if (sectionElement) {
                    sectionElement.classList.add('hidden');
                }

                if (navButton) {
                    navButton.classList.remove('bg-blue-600', 'text-white');
                    navButton.classList.add('bg-gray-200', 'text-gray-800');
                }
            });

            // Show the selected section
            const selectedSection = document.getElementById(section);
            const selectedNavButton = document.querySelector(`[data-section="${section}"]`);

            if (selectedSection) {
                selectedSection.classList.remove('hidden');
            }

            if (selectedNavButton) {
                selectedNavButton.classList.remove('bg-gray-200', 'text-gray-800');
                selectedNavButton.classList.add('bg-blue-600', 'text-white');
            }
        }
    </script>

</body>

</html>
