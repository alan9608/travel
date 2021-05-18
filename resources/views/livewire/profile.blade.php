<div class="py-4">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Profile</h1>
    </div>
    <div class="max-w-6xl mx-auto px-4 sm:px-6 md:px-8">
        <div class="py-6">
            <div class="border-2 bg-white border-solid border-gray-300 overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">

                    <form wire:submit.prevent="save">
                        <div class="mt-6 sm:mt-5">

                            <x-input.group label="Username" for="username" :error="$errors->first('username')">
                                <x-input.text wire:model="username" id="username" class="bg-gray-100 rounded-md p-1 " />
                            </x-input.group>

                            <x-input.group label="Birthday" for="birthday" :error="$errors->first('birthday')">
                                <x-input.date wire:model="birthday" id="birthday" placeholder="YYYY/MM/DD" />
                            </x-input.group>

                            <x-input.group label="About" for="about" :error="$errors->first('about')" help-text="Write a few sentances about yourself.">
                                <x-input.rich-text wire:model.defer="about" id="about" :initial-value="$about" />
                            </x-input.group>

                            <x-input.group label="Photo" for="photo" :error="$errors->first('upload')">
                                <x-input.filepond wire:model="upload" />
                            </x-input.group>

                        </div>

                        <div class="mt-8 border-t border-gray-200 pt-5">
                            <div class="space-x-3 flex justify-end items-center">
                                <span x-data="{ open: false }" x-init="
                                        @this.on('notify-saved', () => {
                                            if (open === false) setTimeout(() => { open = false }, 2500);
                                            open = true;
                                        })
                                    " x-show.transition.out.duration.1000ms="open" style="display: none;" class="text-gray-500">Saved!</span>

                                <span class="inline-flex rounded-md shadow-sm">
                                    <button type="button" class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                                        Cancel
                                    </button>
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