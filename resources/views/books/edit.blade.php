<x-base-plus-header>
    <div class="px-8">
        <form method="POST" action="{{ route('books.update', ['book' => $book]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <h1 class="font-bold text-3xl mb-2">Edit a book</h1>
            <div class="flex flex-col w-60">
                <input class="bg-white border-blue-100 border-2 rounded-xl px-4 py-2 mb-2" type="text" name="title" placeholder="Book title..." value="{{ $book->title }}" />
                @error('title')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
                <textarea class="bg-white border-blue-100 border-2 rounded-xl px-4 py-2 mb-2" name="description" placeholder="Book description..." >{{ $book->description }}</textarea>
                @error('description')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
                <input class="bg-white border-blue-100 border-2 rounded-xl px-4 py-2 mb-2" type="file" name="image" />
                @error('image')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
                <button class="rounded-lg px-4 py-2 mr-2 bg-blue-100 hover:bg-blue-200 transition duration-200 ease-in-out w-full hover:cursor-pointer" type="submit">Edit</button>
            </div>
        </form>
    </div>
</x-base-plus-header>