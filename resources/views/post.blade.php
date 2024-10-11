
<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
        <article class="py-8 border-b border-gray-300 max-w-screen-md">
        <h2>{{ $post['title'] }}</h2>
        <div class="text-base text-gray-400">
            <a href="#">{{ $post['pembuat'] }}</a> | {{ $post['tanggal'] }}
        </div>
        <p class="my-4 font-light">{{ $post['tulisan'] }}</p>
        <a href="/posts" class="text-base text-blue-600">&laquo;Back to Posts </a>
    </article>

</x-layout>
