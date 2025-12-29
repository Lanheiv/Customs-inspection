@vite('resources/js/scripts/user_changes_script.js')

<x-layout>
    <x-slot:title>
        Lietotāja iestatījumi
    </x-slot:title>

    <div class="flex items-center justify-center min-h-screen">
        <form id="settings" action="/account" method="POST">
            @csrf

            <div>
                <label for="username">Lietotājvārds</label>
                <input id="username" type="text" value="{{ auth()->user()->username }}">
            </div>

            <div>
                <label for="full_name">Pilnais vārds</label>
                <input id="full_name" type="text" value="{{ auth()->user()->full_name }}">
            </div>
        </form>
    </div>

    <div class="fixed bottom-0 left-0 w-full bg-white p-4 shadow-[0_-4px_6px_-1px_rgba(0,0,0,0.1),0_-2px_4px_-1px_rgba(0,0,0,0.06)]">
        <div class="max-w-2xl mx-auto flex justify-center gap-4">
            <button type="button" class="flex-.5 text-center px-4 py-2 rounded-lg bg-gray-200 text-gray-700 font-medium hover:bg-gray-300 transition">Atjaunot</button>
            <button type="submit" form="settings" class="flex-.5 text-center px-4 py-2 rounded-lg bg-gray-200 text-gray-700 font-medium hover:bg-gray-300 transition">Saglabāt</button>
        </div>
    </div>
</x-layout>
