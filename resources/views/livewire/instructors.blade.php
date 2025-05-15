<x-dashboard.layout>
    <div class="flex h-full overflow-hidden">
        <div class="border-r border-gray-200 min-w-64 bg-white">
            <div class="py-3 px-5 text-xl border-b border-gray-200 text-gray-800">
                Instructors
            </div>
            <div class="py-2 px-2">
                <a href="" class="bg-gray-100 rounded-md py-0.25 px-3 w-full block">
                    <span class="text-sm font-semibold">Manage instructors</span>
                </a>
                <a href="" class="rounded-md py-0.25 px-3 w-full block">
                    <span class="text-sm text-gray-600 hover:text-gray-800">Reports</span>
                </a>
            </div>
        </div>
        <div class="grow overflow-scroll">
            <!-- Content -->
            <div class="">
                <div class="max-w-7xl mx-auto px-4 pt-4">
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h1 class="text-2xl font-semibold text-gray-900">Manage Instructors</h1>
                            <p class="mt-2 text-sm text-gray-600">Add, edit, or remove instructors for your driving school.</p>
                        </div>
                        <button @click="document.getElementById('add-instructor-modal').classList.toggle('hidden')" class="inline-flex items-center px-4 py-2 bg-gray-900 text-white text-sm font-medium rounded-md hover:bg-gray-700 transition-colors">
                            Add Instructor
                            <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                        </button>
                    </div>
                    <!-- Instructors Table -->
                    <div class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                <!-- Example Instructor -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">John Doe</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">john.doe@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">(123) 456-7890</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <button @click="document.getElementById('edit-instructor-modal').classList.toggle('hidden')" class="text-gray-600 hover:text-gray-900">Edit</button>
                                        <button class="ml-4 text-red-600 hover:text-red-900">Delete</button>
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Add Instructor Modal -->
                    <div id="add-instructor-modal" class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center z-50">
                        <div class="bg-white rounded-lg shadow-xl w-full max-w-md p-6">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-xl font-semibold text-gray-900">Add New Instructor</h2>
                                <button @click="document.getElementById('add-instructor-modal').classList.toggle('hidden')" class="text-gray-400 hover:text-gray-600">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                            </div>
                            <form>
                                <div class="space-y-4">
                                    <div>
                                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                        <input type="text" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-900 focus:ring-gray-900 sm:text-sm" placeholder="John Doe">
                                    </div>
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                        <input type="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-900 focus:ring-gray-900 sm:text-sm" placeholder="john.doe@example.com">
                                    </div>
                                    <div>
                                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                                        <input type="tel" id="phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-900 focus:ring-gray-900 sm:text-sm" placeholder="(123) 456-7890">
                                    </div>
                                    <div>
                                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                                        <select id="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-900 focus:ring-gray-900 sm:text-sm">
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mt-6 flex justify-end gap-2">
                                    <button type="button" @click="document.getElementById('add-instructor-modal').classList.toggle('hidden')" class="px-4 py-2 bg-gray-200 text-gray-700 text-sm font-medium rounded-md hover:bg-gray-300">Cancel</button>
                                    <button type="submit" class="px-4 py-2 bg-gray-900 text-white text-sm font-medium rounded-md hover:bg-gray-700">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Edit Instructor Modal -->
                    <div id="edit-instructor-modal" class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center z-50">
                        <div class="bg-white rounded-lg shadow-xl w-full max-w-md p-6">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-xl font-semibold text-gray-900">Edit Instructor</h2>
                                <button @click="document.getElementById('edit-instructor-modal').classList.toggle('hidden')" class="text-gray-400 hover:text-gray-600">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                            </div>
                            <form>
                                <div class="space-y-4">
                                    <div>
                                        <label for="edit-name" class="block text-sm font-medium text-gray-700">Name</label>
                                        <input type="text" id="edit-name" value="John Doe" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-900 focus:ring-gray-900 sm:text-sm">
                                    </div>
                                    <div>
                                        <label for="edit-email" class="block text-sm font-medium text-gray-700">Email</label>
                                        <input type="email" id="edit-email" value="john.doe@example.com" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-900 focus:ring-gray-900 sm:text-sm">
                                    </div>
                                    <div>
                                        <label for="edit-phone" class="block text-sm font-medium text-gray-700">Phone</label>
                                        <input type="tel" id="edit-phone" value="(123) 456-7890" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-900 focus:ring-gray-900 sm:text-sm">
                                    </div>
                                    <div>
                                        <label for="edit-status" class="block text-sm font-medium text-gray-700">Status</label>
                                        <select id="edit-status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-900 focus:ring-gray-900 sm:text-sm">
                                            <option selected>Active</option>
                                            <option>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mt-6 flex justify-end gap-2">
                                    <button type="button" @click="document.getElementById('edit-instructor-modal').classList.toggle('hidden')" class="px-4 py-2 bg-gray-200 text-gray-700 text-sm font-medium rounded-md hover:bg-gray-300">Cancel</button>
                                    <button type="submit" class="px-4 py-2 bg-gray-900 text-white text-sm font-medium rounded-md hover:bg-gray-700">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard.layout>
