<div class="flex justify-center">
    <li class="flex justify-between inline-block w-1/4 mt-4">
        <div class="inline-block">
            <div class="px-4 py-2">{{ $post->title }}</div>
        </div>
        <div class="inline-block">
            <button class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-700" wire:click="removePost">Delete</button>
        </div>
    </li>
</div>
