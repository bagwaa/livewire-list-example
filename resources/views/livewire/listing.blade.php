<div>
    <ul>
        @foreach($posts as $post)
            <livewire:post :key="$post->id" :post="$post" />
        @endforeach
    <ul>
</div>
