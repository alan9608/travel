<div class="mx-auto py-4 alan1">
<!-- /home/alan/travel/resources/views/livewire/profiles.blade.php -->
    <div class="max-w-2xl flex-col space-y-4 mx-auto px-4 sm:px-6 md:px-8">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900">Profile - Pi</h1>
        </div>
        <div class="px-4 sm:px-6 md:px-8 bg-white border-solid border-2 border-gray-600 shadow rounded-lg">
            <div class="py-6">
                <div class="border-2">
                    <div style="height: 80%;overflow:auto" class="px-4 py-5 sm:p-6 overflow-auto ">

                        <form wire:submit.prevent="save">
                            <div class="mt-2 sm:mt-3">

                                <x-input.group label="First Name" for="profile.firstname" :error="$errors->first('profile.firstname')">
                                    <x-input.text wire:model="profile.firstname" id="profile.firstname" class="bg-gray-100 rounded-md p-2 " />
                                </x-input.group>

                                <x-input.group label="Last Name" for="profile.lastname" :error="$errors->first('profile.lastname')">
                                    <x-input.text wire:model="profile.lastname" id="profile.lastname" class="bg-gray-100 rounded-md p-2 " />
                                </x-input.group>

                                <x-input.group label="Username" for="profile.username" :error="$errors->first('profile.username')">
                                    <x-input.text wire:model="profile.username" id="profile.username" class="bg-gray-100 rounded-md p-2 " />
                                </x-input.group>

                                <x-input.group label="Birthday" for="profile.birthday" :error="$errors->first('profile.birthday')">
                                    <x-input.date wire:model="profile.birthday"
                                        id="profile.birthday" placeholder="YYYY-MM-DD"
                                        class="w-full bg-gray-100 rounded-md p-2"/>
                                </x-input.group>

                                <x-input.group label="About" for="profile.about" :error="$errors->first('profile.about')">
                                    <x-input.textarea wire:model.defer="profile.about" id="profile.about"  class="w-full bg-gray-100 rounded-md p-2" placeholder="Write something about yourself"/>
                                </x-input.group>

                            </div>

                            <div class=" mt-8 border-t border-gray-200 pt-5">
                                <div class="space-x-3 flex justify-end items-center">
                                        <span class="inline-flex rounded-md shadow-sm">
                                        <a href="/dashboard">
                                        <button type="button" class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-gray-300 focus:shadow-outline-gray active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                                            Cancel
                                        </button>
                                        </a>
                                    </span>

                                    <span class="inline-flex rounded-md shadow-sm">
                                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                            Save
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
