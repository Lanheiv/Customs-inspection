<x-layout>
    <x-slot:title>
        Login
    </x-slot:title>
    
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h1 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Ieiet savā kontā</h1>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">

            @if ($errors->has("error"))
                <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-2" role="alert">
                    <p class="font-bold">Kļīda!</p>
                    <p>Jums ir nepareizs lietotājvārds vai parole!</p>
                </div>
            @endif


            <form action="/login" method="POST" class="space-y-6">
                @csrf

                <label for="username" class="block text-sm/6 font-medium text-gray-900 mb-1">Lietotājvārds</label>
                <div class="mt-2">
                    <input type="text" id="username" name="username" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-gray-600 sm:text-sm/6" placeholder="lietotājvārds" required>
                </div>

                <label for="password" class="block text-sm/6 font-medium text-gray-900 mb-1">Parole</label>
                <div class="relative mt-2">
                    <input name="password" id="password" type="password" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-gray-600 sm:text-sm/6" placeholder="parole" required>
                    <button id="togglePassword" type="button" data-hs-toggle-password='{ "target": "#password" }' class="absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-gray-400 rounded-e-md focus:outline-hidden focus:text-gray-800 dark:text-neutral-600 dark:focus:text-gray-900">
                        <svg class="shrink-0 size-3.5" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                            <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                            <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>

                            <line id="element_1" class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"></line>
                            <path id="element_2" class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                            <circle id="element_3" class="hidden hs-password-active:block" cx="12" cy="12" r="3"></circle>
                        </svg>
                    </button>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-gray-800 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-gray-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-100">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector("#password");

    togglePassword.addEventListener('click', function (e) {
        if(password.getAttribute("type") === "password") {
            password.setAttribute("type", "text");

            document.getElementById("element_1").classList.add("hidden");
            document.getElementById("element_2").classList.remove("hidden");
            document.getElementById("element_3").classList.remove("hidden");
        } else {
            password.setAttribute("type", "password");

            document.getElementById("element_1").classList.remove("hidden");
            document.getElementById("element_2").classList.add("hidden");
            document.getElementById("element_3").classList.add("hidden");
        }
    });
</script>