<x-dashboard.layout>
    <div class="flex h-full overflow-hidden">
        <div class="border-r border-gray-200 min-w-64 bg-white">
            <div class="py-3 px-5 text-xl border-b border-gray-200 text-gray-800">
                Instructors
            </div>
            <div class="py-2 px-2">
                <div class="px-3 mb-3 uppercase text-gray-400 font-['Source_Code_Pro']">
                    General
                </div>
                <a href="" class="bg-gray-100 rounded py-0.25 px-3 w-full block">
                    <span class="text-sm font-semibold">Manage instructors</span>
                </a>
                <a href="" class="rounded py-0.25 px-3 w-full block">
                    <span class="text-sm text-gray-600 hover:text-gray-800">Reports</span>
                </a>
            </div>
        </div>
        <div class="grow overflow-scroll">
            <!-- Content -->
                <div class="max-w-7xl mx-auto px-4 pt-4">
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h1 class="text-2xl font-semibold text-gray-900">Manage Instructors</h1>
                            <p class="mt-2 text-sm text-gray-600">Add, edit, or remove instructors for your driving
                                school.</p>
                        </div>

                        {{--                        Add istructor--}}
                        <x-modal :buttonText="'Add Instructor'">
                            <form>
                                <div class="space-y-4">
                                    <div class="w-full">
                                        <label
                                            for="name"
                                            class="block text-sm font-medium text-gray-700 mb-1"
                                        >Name</label>
                                        <input
                                            id="name"
                                            name="name"
                                            placeholder="John Doe"
                                            type="text"
                                            class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"
                                        />
                                    </div>
                                    <div class="w-full">
                                        <label
                                            for="email"
                                            class="block text-sm font-medium text-gray-700 mb-1"
                                        >Email</label>
                                        <input
                                            id="email"
                                            name="name"
                                            placeholder="john@outlook.com"
                                            type="email"
                                            class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"
                                        />
                                    </div>
{{--                                    phone--}}
                                    <div class="w-full">
                                        <label
                                            for="phone"
                                            class="block text-sm font-medium text-gray-700 mb-1"
                                        >Phone</label>
                                        <input
                                            id="phone"
                                            name="name"
                                            placeholder="0777252917"
                                            type="text"
                                            class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"
                                        />
                                    </div>
                                </div>
                                <div class="mt-6 flex justify-end gap-2">
                                    <button type="submit"
                                            class="w-full px-4 py-2 bg-gray-900 text-white text-sm font-medium rounded-md hover:bg-gray-700">
                                        Save
                                    </button>
                                </div>
                            </form>
                        </x-modal>
                    </div>

                    <div class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Email
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Phone
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                <!-- Example Instructor -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">John Doe</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">john.doe@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">(123) 456-7890</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <button
                                            @click="document.getElementById('edit-instructor-modal').classList.toggle('hidden')"
                                            class="text-gray-600 hover:text-gray-900">Edit
                                        </button>
                                        <button class="ml-4 text-red-600 hover:text-red-900">Delete</button>
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
        </div>
    </div>
</x-dashboard.layout>
