<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @foreach ($posts as $post)   
        <article class="py-8 border-b border-gray-300 max-w-screen-md">
        <a href="/post/{{ $post['slug'] }}" class="hover:underline">
        <h2>{{ $post['title'] }}</h2></a>
        <div class="text-base text-gray-400">
            <a href="#">{{ $post['pembuat'] }}</a> | {{ $post['tanggal'] }}
        </div>
        <p class="my-4 font-light">{{ Str::limit($post['tulisan'], 150) }}</p>
        <a href="/post/{{ $post['slug'] }}" class="text-base text-blue-600">read more &raquo;</a>
    </article>
    @endforeach
</x-layout>
