<x-layouts.app title="Users">

    <x-slot:content>
        <div class="container mt-5">
            <div class="PostsAndCategories d-flex justify-content-between">
                <div class="posts col-8  p-3 border border-1">
                    <h1>All Users</h1>
                    @foreach ($users as $user)
                        <div class="bg-light p-2 border border-1 border-black-50 mt-2">
                            <h5>{{ $user->name }}</h5>
                            <div class="user-posts-count">
                                @if (count($user->posts))
                                    This user have {{ count($user->posts) }} posts
                                @else
                                    This user Dosent have any posts yet
                                @endif
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </x-slot:content>

</x-layouts.app>
