<x-dashboard.layout>
    <div>
        <div class="p-4 overflow-scroll">
            <div class="max-w-7xl mx-auto">
                <!-- Welcome Section -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-6 mb-6">
                    <h1 class="text-2xl font-semibold text-gray-900">Welcome to Your Driving School Dashboard!</h1>
                    <p class="mt-2 text-sm text-gray-600">
                        We're excited to have you on board. This dashboard is your hub for managing instructors,
                        scheduling lessons, and tracking student progress. Let's get started by completing your
                        profile to unlock all features.
                    </p>
                    <div class="mt-4">
                        <a href="/profile/setup"
                           class="inline-flex items-center px-4 py-2 bg-gray-900 text-white text-sm font-medium rounded-md hover:bg-gray-700 transition-colors">
                            Complete Your Profile
                            <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <!-- Action Card 1 -->
                    <div
                        class="bg-white rounded-lg shadow-sm border border-gray-100 p-6 hover:shadow-md transition-shadow">
                        <div class="flex items-center space-x-3">
                            <div class="p-2 bg-gray-50 rounded-full">
                                <svg class="h-6 w-6 text-gray-600" fill="none" stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 4v16m8-8H4"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900">Add an Instructor</h3>
                        </div>
                        <p class="mt-2 text-sm text-gray-600">
                            Add your first instructor to start scheduling lessons and managing their availability.
                        </p>
                        <div class="mt-4">
                            <a href="/instructors/new"
                               class="text-sm font-medium text-gray-600 hover:text-gray-900">Get Started &rarr;</a>
                        </div>
                    </div>

                    <!-- Action Card 2 -->
                    <div
                        class="bg-white rounded-lg shadow-sm border border-gray-100 p-6 hover:shadow-md transition-shadow">
                        <div class="flex items-center space-x-3">
                            <div class="p-2 bg-gray-50 rounded-full">
                                <svg class="h-6 w-6 text-gray-600" fill="none" stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900">Schedule a Lesson</h3>
                        </div>
                        <p class="mt-2 text-sm text-gray-600">
                            Set up your first driving lesson with a student and manage your calendar.
                        </p>
                        <div class="mt-4">
                            <a href="/lessons/new" class="text-sm font-medium text-gray-600 hover:text-gray-900">Get
                                Started &rarr;</a>
                        </div>
                    </div>

                    <!-- Action Card 3 -->
                    <div
                        class="bg-white rounded-lg shadow-sm border border-gray-100 p-6 hover:shadow-md transition-shadow">
                        <div class="flex items-center space-x-3">
                            <div class="p-2 bg-gray-50 rounded-full">
                                <svg class="h-6 w-6 text-gray-600" fill="none" stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900">View Reports</h3>
                        </div>
                        <p class="mt-2 text-sm text-gray-600">
                            Track student progress and generate reports to monitor performance.
                        </p>
                        <div class="mt-4">
                            <a href="/reports" class="text-sm font-medium text-gray-600 hover:text-gray-900">Get
                                Started & instrumentos;</a>
                        </div>
                    </div>
                </div>

                <!-- Progress Overview -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-6">
                    <h2 class="text-xl font-semibold text-gray-900">Your Progress</h2>
                    <p class="mt-2 text-sm text-gray-600">Here's a quick overview of your setup progress.</p>
                    <div class="mt-4 space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-sm text-gray-700">Account Created</span>
                            </div>
                            <span class="text-sm text-gray-500">Completed</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-sm text-gray-700">Basic Information Added</span>
                            </div>
                            <span class="text-sm text-gray-500">Completed</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                <span class="text-sm text-gray-700">Upload Certifications</span>
                            </div>
                            <a href="/profile/certifications"
                               class="text-sm font-medium text-gray-600 hover:text-gray-900">Complete Now</a>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                <span class="text-sm text-gray-700">Add First Instructor</span>
                            </div>
                            <a href="/instructors/new"
                               class="text-sm font-medium text-gray-600 hover:text-gray-900">Complete Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard.layout>
