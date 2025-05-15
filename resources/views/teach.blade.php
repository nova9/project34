<x-layouts.app>
    <x-nav/>

    <!-- Hero Section -->
    <section id="home" class="py-20 bg-gradient-to-b from-gray-50 to-white min-h-[94vh] flex items-center">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 text-center md:text-left md:-mt-24">
            <span class="text-4xl md:text-5xl font-bold text-gray-900 inline">
                Grow Your Driving School with
                <span class="inline-flex items-baseline">
                    <x-logo class="size-9"/>
                    riveConnect
                </span>
            </span>

                <p class="text-lg text-gray-500 mb-6 max-w-md mx-auto md:mx-0">DriveConnect connects your driving school
                    with eager students, streamlining bookings and boosting your reach.</p>
                <div class="flex space-x-4 justify-center md:justify-start">
                    <a href="/ds/signup"
                       class="bg-gray-900 text-white px-6 py-3 rounded-md text-sm font-medium hover:bg-gray-700 transition">Join Now</a>
                    <a href="#features"
                       class="bg-white border border-gray-200 text-gray-900 px-6 py-3 rounded-md text-sm font-medium hover:bg-gray-100 transition">Learn
                        More</a>
                </div>
            </div>
            <div class="md:w-1/2 mt-10 md:mt-0 flex justify-center">
                <img src="/assets/images/people_fueling_a_car_with_gasoline.svg" alt="Driving Instructor">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-semibold text-center text-gray-900 mb-12">Why Partner with DriveConnect?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-6 bg-white border border-gray-100 rounded-lg shadow-sm hover:shadow-md transition">
                    <div class="text-3xl mb-4">📈</div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Expand Your Reach</h3>
                    <p class="text-gray-500">Showcase your school to thousands of students actively seeking driving
                        lessons.</p>
                </div>
                <div class="p-6 bg-white border border-gray-100 rounded-lg shadow-sm hover:shadow-md transition">
                    <div class="text-3xl mb-4">⚙️</div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Streamlined Management</h3>
                    <p class="text-gray-500">Manage bookings, schedules, and payments effortlessly with our intuitive
                        tools.</p>
                </div>
                <div class="p-6 bg-white border border-gray-100 rounded-lg shadow-sm hover:shadow-md transition">
                    <div class="text-3xl mb-4">🏆</div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Build Your Reputation</h3>
                    <p class="text-gray-500">Gain visibility through student reviews and our trusted platform
                        branding.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-semibold text-center text-gray-900 mb-12">What Our Partners Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-6 bg-white border border-gray-100 rounded-lg shadow-sm">
                    <p class="text-gray-600 mb-4">"DriveConnect has transformed our business. We’ve doubled our student
                        intake and simplified our scheduling process."</p>
                    <div class="flex items-center">
                        <img src="https://picsum.photos/200" alt="Instructor" class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <p class="font-semibold text-gray-900">Sarah M.</p>
                            <p class="text-sm text-gray-500">Driving School Owner</p>
                        </div>
                    </div>
                </div>
                <div class="p-6 bg-white border border-gray-100 rounded-lg shadow-sm">
                    <p class="text-gray-600 mb-4">"The platform’s tools make it easy to manage our instructors and
                        connect with new students."</p>
                    <div class="flex items-center">
                        <img src="https://picsum.photos/200" alt="Instructor" class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <p class="font-semibold text-gray-900">James R.</p>
                            <p class="text-sm text-gray-500">Driving Instructor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section id="signup" class="py-20 bg-gray-900 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-semibold mb-4">Ready to Grow Your Driving School?</h2>
            <p class="text-lg text-gray-300 mb-6 max-w-md mx-auto">Partner with DriveConnect and reach more students
                today.</p>
            <a href="#signup"
               class="bg-white text-gray-900 px-6 py-3 rounded-md text-sm font-medium hover:bg-gray-100 transition">Get
                Started</a>
        </div>
    </section>

    <x-footer/>
</x-layouts.app>
