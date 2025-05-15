<x-layouts.app>
    <x-nav/>
    <!-- Hero Section -->
    <section id="home" class="py-20 bg-gradient-to-b from-gray-50 to-white min-h-[94vh] flex items-center">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 text-center md:text-left md:-mt-24">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4 leading-tight">Learn to Drive with
                    Confidence</h1>
                <p class="text-lg text-gray-500 mb-6 max-w-md mx-auto md:mx-0">DriveConnect seamlessly connects you with
                    top-rated driving schools and instructors.</p>
                <div class="flex space-x-4 justify-center md:justify-start">
                    <a href="/user/signup"
                       class="bg-gray-900 text-white px-6 py-3 rounded-md text-sm font-medium hover:bg-gray-700 transition">Get
                        Started</a>
                    <a href="#features"
                       class="bg-white border border-gray-200 text-gray-900 px-6 py-3 rounded-md text-sm font-medium hover:bg-gray-100 transition">Learn
                        More</a>
                </div>
            </div>
            <div class="md:w-1/2 mt-10 md:mt-0">
                <img src="/assets/images/moped.webp" alt="Driving School" class="rounded-lg">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-semibold text-center text-gray-900 mb-12">Why DriveConnect?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-6 bg-white border border-gray-100 rounded-lg shadow-sm hover:shadow-md transition">
                    <div class="text-3xl mb-4">🚗</div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Top-Rated Schools</h3>
                    <p class="text-gray-500">Connect with certified driving schools with excellent track records.</p>
                </div>
                <div class="p-6 bg-white border border-gray-100 rounded-lg shadow-sm hover:shadow-md transition">
                    <div class="text-3xl mb-4">📅</div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Flexible Scheduling</h3>
                    <p class="text-gray-500">Book lessons at your convenience with our intuitive platform.</p>
                </div>
                <div class="p-6 bg-white border border-gray-100 rounded-lg shadow-sm hover:shadow-md transition">
                    <div class="text-3xl mb-4">⭐</div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Trusted Reviews</h3>
                    <p class="text-gray-500">Read verified reviews from students to choose the best instructors.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-semibold text-center text-gray-900 mb-12">What Our Students Say</h2>
            <div class="">
                <div class="relative w-full flex flex-col items-center gap-4"
                     x-data="{ current: 0, slides: 3 }"
                     x-init="
                        const updateSlides = () => {
                            if (window.innerWidth >= 1024) {
                                slides = 3; // lg breakpoint (1024px+)
                            } else if (window.innerWidth >= 768) {
                                slides = 4; // md breakpoint (768px+)
                            } else {
                                slides = 8; // mobile
                            }
                        };
                        updateSlides();
                        window.addEventListener('resize', updateSlides);
                    "
                >
                    <div class="flex items-center gap-4 w-full">
                        <button
                            @click="current = (current - 1 + slides) % slides"
                            class="hidden md:block bg-white/80 pl-2 pr-2.5 py-1 rounded-full shadow hover:bg-white transition z-20"
                        >◀
                        </button>
                        <div class="relative w-full overflow-hidden">
                            <div
                                class="flex transition-transform duration-500 ease-in-out z-10"
                                :style="`transform: translateX(-${current * 100}%);`"
                            >

                                <div class="p-2 basis-full md:basis-1/2 lg:basis-1/3 shrink-0">
                                    <div class="p-6 bg-white border border-gray-200 rounded-lg">
                                        <p class="text-gray-600 mb-4">"DriveConnect made finding a driving school
                                            effortless. My instructor
                                            was fantastic, and I passed my test first time!"</p>
                                        <div class="flex items-center">
                                            <img src="https://picsum.photos/200" alt="Student"
                                                 class="w-10 h-10 rounded-full mr-3">
                                            <div>
                                                <p class="font-semibold text-gray-900">Emma S.</p>
                                                <p class="text-sm text-gray-500">Student</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-2 basis-full md:basis-1/2 lg:basis-1/3 shrink-0">
                                    <div class="p-6 bg-white border border-gray-200 rounded-lg">
                                        <p class="text-gray-600 mb-4">"DriveConnect made finding a driving school
                                            effortless. My instructor
                                            was fantastic, and I passed my test first time!"</p>
                                        <div class="flex items-center">
                                            <img src="https://picsum.photos/200" alt="Student"
                                                 class="w-10 h-10 rounded-full mr-3">
                                            <div>
                                                <p class="font-semibold text-gray-900">Emma S.</p>
                                                <p class="text-sm text-gray-500">Student</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-2 basis-full md:basis-1/2 lg:basis-1/3 shrink-0">
                                    <div class="p-6 bg-white border border-gray-200 rounded-lg">
                                        <p class="text-gray-600 mb-4">"DriveConnect made finding a driving school
                                            effortless. My instructor
                                            was fantastic, and I passed my test first time!"</p>
                                        <div class="flex items-center">
                                            <img src="https://picsum.photos/200" alt="Student"
                                                 class="w-10 h-10 rounded-full mr-3">
                                            <div>
                                                <p class="font-semibold text-gray-900">Emma S.</p>
                                                <p class="text-sm text-gray-500">Student</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-2 basis-full md:basis-1/2 lg:basis-1/3 shrink-0">
                                    <div class="p-6 bg-white border border-gray-200 rounded-lg">
                                        <p class="text-gray-600 mb-4">"DriveConnect made finding a driving school
                                            effortless. My instructor
                                            was fantastic, and I passed my test first time!"</p>
                                        <div class="flex items-center">
                                            <img src="https://picsum.photos/200" alt="Student"
                                                 class="w-10 h-10 rounded-full mr-3">
                                            <div>
                                                <p class="font-semibold text-gray-900">Emma S.</p>
                                                <p class="text-sm text-gray-500">Student</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-2 basis-full md:basis-1/2 lg:basis-1/3 shrink-0">
                                    <div class="p-6 bg-white border border-gray-200 rounded-lg">
                                        <p class="text-gray-600 mb-4">"DriveConnect made finding a driving school
                                            effortless. My instructor
                                            was fantastic, and I passed my test first time!"</p>
                                        <div class="flex items-center">
                                            <img src="https://picsum.photos/200" alt="Student"
                                                 class="w-10 h-10 rounded-full mr-3">
                                            <div>
                                                <p class="font-semibold text-gray-900">Emma S.</p>
                                                <p class="text-sm text-gray-500">Student</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-2 basis-full md:basis-1/2 lg:basis-1/3 shrink-0">
                                    <div class="p-6 bg-white border border-gray-200 rounded-lg">
                                        <p class="text-gray-600 mb-4">"DriveConnect made finding a driving school
                                            effortless. My instructor
                                            was fantastic, and I passed my test first time!"</p>
                                        <div class="flex items-center">
                                            <img src="https://picsum.photos/200" alt="Student"
                                                 class="w-10 h-10 rounded-full mr-3">
                                            <div>
                                                <p class="font-semibold text-gray-900">Emma S.</p>
                                                <p class="text-sm text-gray-500">Student</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-2 basis-full md:basis-1/2 lg:basis-1/3 shrink-0">
                                    <div class="p-6 bg-white border border-gray-200 rounded-lg">
                                        <p class="text-gray-600 mb-4">"DriveConnect made finding a driving school
                                            effortless. My instructor
                                            was fantastic, and I passed my test first time!"</p>
                                        <div class="flex items-center">
                                            <img src="https://picsum.photos/200" alt="Student"
                                                 class="w-10 h-10 rounded-full mr-3">
                                            <div>
                                                <p class="font-semibold text-gray-900">Emma S.</p>
                                                <p class="text-sm text-gray-500">Student</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-2 basis-full md:basis-1/2 lg:basis-1/3 shrink-0">
                                    <div class="p-6 bg-white border border-gray-200 rounded-lg">
                                        <p class="text-gray-600 mb-4">"DriveConnect made finding a driving school
                                            effortless. My instructor
                                            was fantastic, and I passed my test first time!"</p>
                                        <div class="flex items-center">
                                            <img src="https://picsum.photos/200" alt="Student"
                                                 class="w-10 h-10 rounded-full mr-3">
                                            <div>
                                                <p class="font-semibold text-gray-900">Emma S.</p>
                                                <p class="text-sm text-gray-500">Student</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <button
                            @click="current = (current + 1) % slides"
                            class="hidden md:block bg-white/80 pr-2 pl-2.5 py-1 rounded-full shadow hover:bg-white transition z-20"
                        >▶
                        </button>
                    </div>

                    <!-- Indicators -->
                    <div class="flex space-x-2 z-20">
                        <template x-for="i in slides">
                            <div
                                @click="current = i - 1"
                                :class="{
                        'bg-gray-300': current !== i - 1,
                        'bg-gray-900': current === i - 1
                         }"
                                class="w-3 h-3 rounded-full cursor-pointer transition"
                            ></div>
                        </template>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section id="signup" class="py-20 bg-gray-900 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-semibold mb-4">Ready to Hit the Road?</h2>
            <p class="text-lg text-gray-300 mb-6 max-w-md mx-auto">Join DriveConnect today and find the perfect driving
                school for you.</p>
            <a href="#signup"
               class="bg-white text-gray-900 px-6 py-3 rounded-md text-sm font-medium hover:bg-gray-100 transition">Sign
                Up Now</a>
        </div>
    </section>

    <x-footer/>

</x-layouts.app>
