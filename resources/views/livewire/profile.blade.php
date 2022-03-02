<div class="mx-auto py-4">
    <div class="max-w-2xl flex-col space-y-4 mx-auto px-4 sm:px-6 md:px-8">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900">Profile</h1>
        </div>
        <div class="px-4 sm:px-6 md:px-8 bg-white border-solid border-2 border-gray-600 shadow rounded-lg">
            <div class="py-6">
                <div class="border-2">
                    <div style="height: 80%;overflow:auto" class="px-4 py-5 sm:p-6 overflow-auto ">

                        <form wire:submit.prevent="save">
                            <div class="mt-2 sm:mt-3">

                            <x-input.group label="First Name" for="firstname" :error="$errors->first('firstname')">
                                    <x-input.text wire:model="firstname" id="firstname" class="bg-gray-100 rounded-md p-2 " />
                                </x-input.group>

                                <x-input.group label="Last Name" for="lastname" :error="$errors->first('lastname')">
                                    <x-input.text wire:model="lastname" id="lastname" class="bg-gray-100 rounded-md p-2 " />
                                </x-input.group>

                                <x-input.group label="Username" for="username" :error="$errors->first('username')">
                                    <x-input.text wire:model="username" id="username" class="bg-gray-100 rounded-md p-2 " />
                                </x-input.group>

                                <x-input.group label="Birthday" for="birthday" :error="$errors->first('birthday')">
                                    <x-input.date wire:model.lazy="birthday" id="birthday"  placeholder="YYYY-MM-DD" class="w-full bg-gray-100 rounded-md p-2"/>
                                </x-input.group>

                                <x-input.group label="About" for="about" :error="$errors->first('about')" help-text="Write a few sentences about yourself.">
                                    <x-input.textarea wire:model.defer="about" id="about" :initial-value="$about" class="w-full bg-gray-100 rounded-md p-2" />
                                </x-input.group>

                                <x-input.group label="Photo" for="photo" :error="$errors->first('upload')">
                                    <div class="flex">
                                        <!-- this flex box puts the preview inline with the filepond input box -->
                                        <span class="w-24 rounded-full overflow-hidden bg-gray-100">
                                            <!-- This is a preview of the image stored already -->
                                            @if ($upload)
                                                <img src="{{ $upload->temporaryUrl() }}" class="h-24" alt="Profile Photo">
                                            @else
                                                <!-- user()->avatarUrl is a function in the User Model to show the latset picture -->
                                                <img src="{{ auth()->user()->avatarUrl() }}" class="h-24" alt="Profile Photo">
                                            @endif
                                        </span>
                                        <!-- end of preview -->
                                        <div class="w-full">
                                            <x-input.filepond wire:model="upload" />
                                        </div>

                                    </div>
                                </x-input.group>

                            </div>

                            <div class=" mt-8 border-t border-gray-200 pt-5">
                                <div class="space-x-3 flex justify-end items-center">
                                    <span x-data="{ open: false }" x-init="
                                            @this.on('notify-saved', () => {
                                                if (open === false) setTimeout(() => { open = false }, 2500);
                                                open = true;
                                            })
                                        " x-show.transition.out.duration.1000ms="open" style="display: none;" class="text-gray-500">Saved!</span>

                                    <span class="inline-flex rounded-md shadow-sm">
                                        <a href="/dashboard">
                                        <button type="button" class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
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