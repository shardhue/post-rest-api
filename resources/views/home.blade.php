<x-layout>

    <form action="/api/posts" method="POST">
        <input class="border-2 border-black mb-1" name="title" type="text" placeholder="Title"><br>
        <textarea class="border-2 border-black" name="content" type="text" placeholder="Content" rows="5"></textarea>
        <button class="ml-10 bg-neutral-300 border-2 border-black">Create Post</button>
    </form>

    @foreach($posts as $post)
        <div class="border-2 border-black w-1/2 md:w-1/3 grid grid-cols-1 lg:grid-cols-3">
            <div class="p-3 col-span-2">
                <h3 class="text-2xl font-bold">{{$post->title}}</h3>
                <p>{{$post->content}}</p>
            </div>
            <div class="p-3 col-span-1">
                <form action="/edit-post/{{$post->id}}" method="GET">
                    <button class="bg-neutral-400 border-2 border-black w-full mb-1">Edit</button>
                </form>
                <form action="/api/posts/{{$post->id}}" method="POST">
                    @method('DELETE')
                    <button class="bg-red-400 border-2 border-black w-full">Delete</button>
                </form>
            </div>
        </div>
    @endforeach

</x-layout>