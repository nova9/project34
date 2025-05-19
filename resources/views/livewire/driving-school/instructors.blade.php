<x-dashboard.layout>
    <x-slot:sidebar>
        <div class="py-0.5 px-5 border-b border-gray-200 flex justify-between items-center">
            <span class="text-xl text-gray-800">Instructors</span>
            <img src="/assets/images/skeuomorphic/user-round.webp" alt="icon" class="size-10">
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
    </x-slot:sidebar>
    <!-- Content -->
    <div class="max-w-7xl mx-auto px-4 pt-4">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-2xl font-semibold text-gray-900">Manage Instructors</h1>
                <p class="mt-2 text-sm text-gray-600">Add, edit, or remove instructors for your driving
                    school.</p>
            </div>
            <x-modal>
                <x-slot:trigger>
                    <button
                        wire:click="create"
                        class="flex items-center px-4 py-2 bg-gray-900 text-white text-sm font-medium rounded-md hover:bg-gray-700 transition-colors">
                        New Instructor
                        <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                    </button>
                </x-slot:trigger>
                <form wire:submit="store">
                    <div class="space-y-4">
                        <div class="w-full">
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                            <input wire:model.blur="name" id="name" name="name" placeholder="John Doe" type="text"
                                   class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50 @error('newName') border-red-500 @enderror"
                                   aria-describedby="name-error"/>
                            @error('name') <span id="name-error"
                                                 class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div class="w-full">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input wire:model.blur="email" id="email" name="email" placeholder="john@outlook.com"
                                   type="email"
                                   class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50 @error('newEmail') border-red-500 @enderror"
                                   aria-describedby="email-error"/>
                            @error('email') <span id="email-error"
                                                  class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div class="w-full">
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                            <input wire:model.live="phone" id="phone" name="phone" placeholder="0712345678" type="tel"
                                   class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50 @error('newPhone') border-red-500 @enderror"
                                   aria-describedby="phone-error"/>
                            @error('phone') <span id="phone-error"
                                                  class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div class="w-full">
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                            <input wire:model.blur="password" id="password" name="password" placeholder="Password"
                                   type="password"
                                   class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50 @error('newPassword') border-red-500 @enderror"
                                   aria-describedby="password-error"/>
                            @error('password') <span id="password-error"
                                                     class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mt-6 flex justify-end gap-2">
                        <button type="submit"
                                class="w-full px-4 py-2 bg-gray-900 text-white text-sm font-medium rounded-md hover:bg-gray-700 disabled:opacity-50">
                            Save
                        </button>
                    </div>
                </form>
            </x-modal>
            {{--                        Add istructor--}}
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
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Example Instructor -->

                    @unless($instructors->count())
                        <tr>
                            <td colspan="4" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                No instructors found.
                            </td>
                        </tr>
                    @endunless

                    @foreach($instructors as $item)
                        <tr wire:key="{{ $item->id }}">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $item->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $item->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $item->userAttributes()->where('key', 'phone')->first()->value }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex gap-2 justify-end">
                                    <div>
                                        <x-modal>
                                            <x-slot:trigger>
                                                <span wire:click="edit({{$item->id}})">Edit</span>
                                            </x-slot:trigger>
                                            <div>
                                                <form wire:submit="update({{$item->id}})">
                                                    <div class="space-y-4">
                                                        <div class="w-full">
                                                            <label for="name{{$item->id}}" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                                                            <input
                                                                wire:model.blur="name"
                                                                id="name{{$item->id}}"
                                                                value="{{ $item->name }}"
                                                                placeholder="John Doe" type="text"
                                                                class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50 @error('newName') border-red-500 @enderror"
                                                                aria-describedby="name-error"
                                                            />
                                                            @error('name')
                                                            <span id="name-error" class="text-red-500 text-sm">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="w-full">
                                                            <label for="email{{$item->id}}"
                                                                   class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                                            <input
                                                                wire:model.blur="email"
                                                                id="email{{$item->id}}"
                                                                placeholder="john@outlook.com"
                                                                type="email"
                                                                class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50 @error('newEmail') border-red-500 @enderror"
                                                                aria-describedby="email-error"
                                                            />
                                                            @error('email')
                                                            <span id="email-error" class="text-red-500 text-sm">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="w-full">
                                                            <label for="phone{{$item->id}}"
                                                                   class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                                                            <input wire:model.live="phone"
                                                                   id="phone{{$item->id}}"
                                                                   placeholder="0777252917" type="tel"
                                                                   class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50 @error('newPhone') border-red-500 @enderror"
                                                                   aria-describedby="phone-error"/>
                                                            @error('phone')
                                                            <span id="phone-error" class="text-red-500 text-sm">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mt-6 flex justify-end gap-2">
                                                        <button type="submit"
                                                                class="w-full px-4 py-2 bg-gray-900 text-white text-sm font-medium rounded-md hover:bg-gray-700 disabled:opacity-50">
                                                            Save
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </x-modal>
                                    </div>
                                    <button class="ml-4 text-red-600 hover:text-red-900" wire:click="destroy({{$item->id}})">Delete</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-dashboard.layout>
