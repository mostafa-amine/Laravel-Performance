<x-layouts.app title="All Posts">

    <x-slot:content>
        <div class="container mt-5">
            <div class="PostsAndCategories d-flex justify-content-between">
                <div class="posts col-8  p-3 border border-1">
                    <h1>Posts</h1>
                    @foreach ($posts as $post) 
                        <div class="bg-light p-2 border border-1 border-black-50 mt-2">
                            <div class="title d-flex justify-content-between">
                                <h2>{{ $post->title }}</h2>
                                <h6>{{ $post->user->name }}</h6>
                            </div>
                            <div class="mt-1">
                                <p>{{ $post->content }}</p>
                            </div>
                            <div class="mt-1">
                                @if ($post->status === "draft")
                                    <button class="btn btn-secondary rounded-0 border-0">{{ "Draft" }}</button>
                                @elseif ($post->status === "published")
                                    <button class="btn btn-success rounded-0 border-0">{{ "Published" }}</button>
                                @else
                                    <button class="btn btn-danger rounded-0 border-0">{{ "archived" }}</button>
                                @endif
                            </div>

                            <div class="mt-1">
                                <button class="btn btn-dark rounded-0 border-0">{{ $post->category->name }}</button>
                            </div>
                        </div>
                    @endforeach

                </div>

                {{-- Categories --}}
                <div class="categories col-3 border border-1 p-3">
                    <h1>Categories</h1>
                    @foreach ($categories as $category)
                        <div class="bg-light p-2 border border-1 border-black-50 mt-2">
                            {{ $category->name }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </x-slot:content>

</x-layouts.app>
