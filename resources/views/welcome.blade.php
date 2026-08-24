<x-base>
    <header class="w-full flex justify-between items-center h-20 px-8">
        <h1 class="font-bold text-2xl">Book Tracker</h1>
        <div>
            @if(Auth::check())
                <a class="rounded-lg px-4 py-2 mr-2 bg-amber-100 hover:bg-amber-200 transition duration-200 ease-in-out" href="{{ route('books.create') }}">+ Add Book</a>
                <a class="rounded-lg px-4 py-2 bg-blue-100 hover:bg-blue-200 transition duration-200 ease-in-out" href="{{ route('logout') }}">Logout</a>
            @else
                <a class="rounded-lg px-4 py-2 mr-2 bg-blue-100 hover:bg-blue-200 transition duration-200 ease-in-out" href="{{ route('login') }}">Login</a>
                <a class="rounded-lg px-4 py-2 bg-blue-100 hover:bg-blue-200 transition duration-200 ease-in-out" href="{{ route('register') }}">Register</a>
            @endif
        </div>
    </header>
    <main>
        
    </main>
</x-base>