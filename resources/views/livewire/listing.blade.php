<div>
    <ul> 
        @foreach($posts as $post)
            <li wire:key="{{ $post->id }}">
                {{ $post->title }}
                <button wire:click="removePost({{ $post->id }})">Delete</button>
            </li>
        @endforeach
    <ul>
</div>
