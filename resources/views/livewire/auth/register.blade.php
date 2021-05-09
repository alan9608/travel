
<div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
    <form wire:submit.prevent="register" class="space-y-6" >
        <div>
            <label for="email">email</label>
            <div class="mt-1">
                <input wire:model="email" id="email" name="email" type="email" autocomplete="email" required class="@error('email') border-red-500 @enderror appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('email') <span class="mt-1 text-red-600 text-sm"> {{ $message }}</span> @enderror
            </div>
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">
                Password
            </label>
            <div class="mt-1">
                <input wire:model.lazy="password" type="password" id="password" name="password" class="@error('password') border-red-500 @enderror appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @error('password') <span class="mt-1 text-red-500 text-sm"> {{ $message }}</span> @enderror
            </div>
        </div>
        <div>
            <label for="passwordConfirmation" class="block text-sm font-medium text-gray-700">
                Password Confirmation
            </label>
            <div class="mt-1">
                <input wire:model.lazy="passwordConfirmation" type="password" id="passwordConfirmation" name="passwordConfirmation" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
        </div>

        <div>
            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Register
        </div>
    </form>

    <div class="mt-6">
        <p class="mt-2 text-center text-sm text-gray-600">
            <a href="/login" class="font-medium text-indigo-600 hover:text-indigo-500">
                Already have an account?
            </a>    
        </p>
    </div>
</div>
