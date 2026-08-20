<x-base>
    <div class="flex justify-center items-center h-full">
        <form class="w-60 h-80 bg-blue-100 rounded-xl flex items-center justify-between flex-col p-4">
            @csrf
            <h1 class="font-semibold text-2xl">Register</h1>
            <input class="" type="text" name="username" />
            <input type="password" name="password" />
            <input type="password" name="confirm_password" />
        </form>
    </div>
</x-base>
