<x-base>
    <div class="flex justify-center items-center h-full">
        <form class="w-auto h-auto bg-blue-100 rounded-xl flex items-center justify-between flex-col p-4" method="POST" action="/register">
            @csrf
            <h1 class="font-semibold text-2xl mb-4">Sign Up</h1>
            <div class="flex items-center justify-center flex-col mb-4">
                <input class="bg-white px-4 py-2 rounded-xl mb-2" type="email" name="email" placeholder="Email..." />
                <input class="bg-white px-4 py-2 rounded-xl mb-2" type="password" name="password" placeholder="Password..." />
                <input class="bg-white px-4 py-2 rounded-xl" type="password" name="confirm_password" placeholder="Confirm password..." />
            </div>
            <button class="bg-blue-200 px-4 py-2 rounded-xl hover:bg-blue-300 transition duration-200 ease-in-out hover:cursor-pointer" type="submit">Register</button>
        </form>
    </div>
</x-base>
