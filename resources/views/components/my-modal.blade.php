<div x-data="{open: false}">
    <div
        x-show="open"
        @keydown.escape.prevent.stop="open: false"
        class="fixed inset-0"> // The actual modal
    >
        <!-- Overlay -->
        <div class="fixed inset-o bg-gray-900 bg-opacity-50"></div>

        <!-- Panel -->
        <div
            @@click="open=false"
            class="relative h-full w-full flex items-center justify-center"
        >
            <div
                style="max-height: 80vh"
                class="max-w-2xl w-full bg-white border border-black p-8 overflow-auto"
            >
            <!-- Title -->
            <!-- <x-slot name="header"> -->
            <h2 class="text-3xl font-medium">Edit Trip</h2>


            <!-- Content -->
            <!-- <x-slot /> -->
            <p class="mt-2 text-slate-600">Jam stuff inside here</p>

            <!-- Buttons -->
            <!-- <x-slot name="footer"> -->
                <x-button.secondary wire:click="$set('open',false)">Cancel</x-button.secondary>
                <x-button.primary type="submit">Save</x-button.primary>
            <!-- </x-slot> -->

        </div>
    </div>
</div>
