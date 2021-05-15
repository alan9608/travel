<div>
    <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
        <div>
            <h1 class="text-2xl font-semibold leading-6 text-gray-900">
                Personal Information (user id={{$user_id}})
            </h1>
            <form wire:submit.prevent="save" class="space-y-8 divide-y divide-gray-200">
                <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">

                    <div class="space-y-6 sm:space-y-5">

                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="first_name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                First name
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input wire:model='firstname' type="text" name="first_name" id="first_name" autocomplete="given-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="last_name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Last name
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input wire:model='lastname' type="text" name="last_name" id="last_name" autocomplete="family-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Email address
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input wire:model='email' id="email" name="email" type="email" autocomplete="email" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="country" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Country / Region
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <select wire:model='country' id="country" name="country" autocomplete="country" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                    <option>Canada</option>
                                    <option>United States</option>
                                    <option>Mexico</option>
                                </select>
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="street_address" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Street address
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input wire:model='street1' type="text" name="street_address" id="street_address" autocomplete="street-address" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="city" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                City
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input wire:model='city' type="text" name="city" id="city" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="state" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                State / Province
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input wire:model='province' type="text" name="state" id="state" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="zip" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                ZIP / Postal
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input wire:model='postal' type="text" name="zip" id="zip" autocomplete="postal-code" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="pt-5">
                    <div class="flex justify-end">
                        <button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Cancel
                        </button>
                        <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </div>

        </div>