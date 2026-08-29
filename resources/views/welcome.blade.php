<x-base-plus-header>
    <div class="inline-grid grid-cols-4 px-8 gap-8">
        @foreach ($books as $book)
            <div class="border-2 border-blue-200 rounded-2xl overflow-hidden h-[50vh] min-h-0 flex flex-col w-full">
                <div class="flex-2 flex items-start justify-center overflow-scroll">
                    <img class="" src="{{ Storage::url($book->image_path) }}" />
                </div>
                <div class="flex-3 overflow-scroll flex-col w-full">
                    <h2 class="mt-4 px-4 text-lg font-semibold">{{ $book->title }}</h2>
                    @php $in = $book->description @endphp
                    <p class="mt-2 px-4">{{ strlen($in) > 80 ? substr($in,0,80)."..." : $in }}</p>
                    <div class="w-full px-4 mt-2">
                        <a href="{{ route('books.show', ['book' => $book]) }}">
                            <button class="rounded-lg px-4 py-2 mb-4 w-full bg-amber-100 hover:bg-amber-200 transition duration-200 ease-in-out hover:cursor-pointer">See More</button>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
        @if (empty($books))
            @if (Auth::check())
                <p>No books registered... Add your first book for them to show here.</p>
            @else
                <p>Log In or Register to see your books here...</p>
            @endif
        @endif
    </div>
</x-base-plus-header>