<x-base-plus-header>
    <div class="px-8">
        <h1 class="font-bold text-3xl">{{ $book->title }}</h1>
        <div class="flex flex-row">
            <div class="flex-1 mr-4">
                <img class="mt-4 w-full" src="{{ Storage::url($book->image_path) }}" />
            </div>
            <div class="flex-1">
                <p class="my-4">{{ $book->description }}</p>
                <a href="{{ route('books.edit', ['book' => $book]) }}">
                    <button class="rounded-lg px-4 py-2 mb-4 w-full bg-amber-100 hover:bg-amber-200 transition duration-200 ease-in-out hover:cursor-pointer">Edit Book</button>
                </a>
                <form method="POST" action="{{ route('books.destroy', ['book' => $book]) }}">
                    @method('DELETE')
                    @csrf
                    <button class="rounded-lg px-4 py-2 mb-4 w-full bg-red-100 hover:bg-red-200 transition duration-200 ease-in-out hover:cursor-pointer" type="submit">Delete Book</button>
                </form>
            </div>
        </div>
    </div>
</x-base-plus-header>