<x-layout>

    <form action="/api/posts/{{$post->id}}" method="POST">
        @method('PATCH')
        <input class="border-2 border-black mb-1" name="title" type="text" placeholder="Title" value="{{$post->title}}"><br>
        <textarea class="border-2 border-black" name="content" type="text" placeholder="Content" rows="5">{{$post->content}}</textarea>
        <button class="ml-10 bg-neutral-300 border-2 border-black">Save Post</button>
    </form>

</x-layout>