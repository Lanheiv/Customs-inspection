<x-layout>
    <x-slot:title>
        Logd {{ $data->foreignId }}
    </x-slot:title>

    <div class="p-6 grid grid-cols-1 xl:grid-cols-2 gap-6">

        <div class="xl:col-span-2 bg-white border border-stone-200 rounded-xl px-8 py-6">
            <div class="flex justify-between items-center border-b border-stone-100 pb-4 mb-4">
                <div class="text-xl font-semibold text-stone-700"> Log ID: {{ $data->foreignId }} </div>
            </div>

            <div class="grid grid-cols-2 gap-4 text-sm text-stone-700">
                <div>
                    <div class="text-gray-500">Darītājs:</div>
                    <div>{{ $data->user_id }}</div>
                </div>
                <div>
                    <div class="text-gray-500">IP:</div>
                    <div>{{ $data->IPaddres }}</div>
                </div>
                <div>
                    <div class="text-gray-500">Tabula:</div>
                    <div>{{ $data->table_name }}</div>
                </div>
                <div>
                    <div class="text-gray-500">Tabulas elements:</div>
                    <div>{{ $data->tabel_id }}</div>
                </div>
                <div>
                    <div class="text-gray-500">Apraksts:</div>
                    <div>{{ $data->description }}</div>
                </div>
                <div>
                    <div class="text-gray-500">Izveidots:</div>
                    <div>{{ $data->created_ts }}</div>
                </div>
            </div>
        </div>

    </div>
</x-layout>
