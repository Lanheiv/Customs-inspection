<x-layout>
    <x-slot:title>
        Lietotājs {{ $data->foreignId }}
    </x-slot:title>

    <div class="p-6 grid grid-cols-1 xl:grid-cols-2 gap-6">

        <div class="xl:col-span-2 bg-white border border-stone-200 rounded-xl px-8 py-6">
            <div class="flex justify-between items-center border-b border-stone-100 pb-4 mb-4">
                <div class="text-xl font-semibold text-stone-700">
                    Lietotājs: {{ $data->full_name ?? $data->username }}
                </div>
                <div class="text-blue-600 underline"><a href="/admin/user/{{ $data->foreignId }}">rediģēt</a></div>
            </div>

            <div class="grid grid-cols-2 gap-4 text-sm text-stone-700">
                <div>
                    <div class="text-gray-500">Lietotājvārds:</div>
                    <div>{{ $data->username }}</div>
                </div>
                <div>
                    <div class="text-gray-500">Statuss:</div>
                    <div>{{ $data->active ? 'Aktīvs' : 'Neaktīvs' }}</div>
                </div>
                <div>
                    <div class="text-gray-500">Loma:</div>
                    <div>{{ $data->role }}</div>
                </div>
                <div>
                    <div class="text-gray-500">ID:</div>
                    <div>{{ $data->foreignId }}</div>
                </div>
            </div>
        </div>

    </div>
</x-layout>
