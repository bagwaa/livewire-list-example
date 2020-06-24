<div>
    <ul> 
        @foreach($posts as $post)
            <livewire:post wire:key="{{ $post->id }}" :post="$post" />
        @endforeach
    <ul>
</div>
