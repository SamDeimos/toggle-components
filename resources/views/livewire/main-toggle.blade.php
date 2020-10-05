<div x-data x-init="() => {$wire.__instance.serverMemo.children = []}"
     x-on:clearcomponent.window="{$wire.__instance.serverMemo.children = []}">

    @livewire("$toggle")

    <button class="flex m-auto bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded"
            wire:click="changeToggle">Change value
    </button>
</div>
