<div class="flex bg-white shadow-lg rounded-lg mx-4 md:mx-auto my-5 max-w-md md:max-w-2xl ">
    <div class="items-start px-4 py-6">
        <h3 class="font-semibold mb-2 text-xl leading-tight sm:leading-normal">Create</h3>
        <div class="grid grid-cols-4 gap-4">
            <div class="col-span-2">
                <div class="flex">
                    <span class="text-sm border border-2 rounded-l px-4 py-2 bg-gray-300 whitespace-no-wrap">Name:</span>
                    <input wire:model="name" class="border border-2 rounded-r px-4 py-2 w-full" type="text" placeholder="Write a name here..." />
                </div>
            </div>
            <div class="col-span-2">
                <h3 class="font-semibold mb-2 text-xl leading-tight sm:leading-normal">{{ $name }}</h3>
            </div>
        </div>
    </div>
</div>
