<x-app-layout>
    <!-- Posts Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

        @foreach ($posts as $post)
            <x-post-item :post="$post" />
        @endforeach

        <!-- Pagination -->
        <div class="flex items-center py-8">
            {{ $posts->onEachSide(2)->links() }}
        </div>

    </section>

</x-app-layout>
