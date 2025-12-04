<x-layout>
    <x-slot:title>
        Login
    </x-slot:title>
    
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h1 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Ieiet savā kontā</h1>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="/login" method="POST" class="space-y-6">
                @csrf

                <label for="username" class="block text-sm/6 font-medium text-gray-900 mb-1">Lietotājvārds</label>
                <div class="mt-2">
                    <input type="text" id="username" name="username" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-gray-600 sm:text-sm/6" placeholder="lietotājvārds" required>
                </div>

                <label for="password" class="block text-sm/6 font-medium text-gray-900 mb-1">Parole</label>
                <div class="mt-2">
                    <input type="text" id="password" name="password" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-gray-600 sm:text-sm/6" placeholder="parole" required>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-gray-800 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-gray-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-100">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
