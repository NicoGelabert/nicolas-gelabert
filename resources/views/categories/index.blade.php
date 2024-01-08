<x-app-layout>
    <div class="px-5 max-w-screen-xl flex flex-col justify-evenly items-center py-32 mx-auto" id="categories">
        @foreach($categories as $category)
        <div class="mb-8 text-center">
            <a href="{{ route('categories.view', $category->slug) }}"><h2>{{$category->name}}</h2></a>
        </div>
        @endforeach
    </div>
</x-app-layout>