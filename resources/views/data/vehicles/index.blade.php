<x-layout>
    <x-slot:title>
        Transportlīdzeklis {{ $data->foreignId }}
    </x-slot:title>

    <div class="p-6 grid grid-cols-1 xl:grid-cols-2 gap-6">

        <div class="xl:col-span-2 bg-white border border-stone-200 rounded-xl px-8 py-6">
            <div class="flex justify-between items-center border-b border-stone-100 pb-4 mb-4">
                <div class="text-xl font-semibold text-stone-700"> Transportlīdzeklis: {{ $data->foreignId }} </div>
                <div class="text-sm text-gray-700"> {{ strtoupper($data->make) }} </div>
            </div>

            <div class="grid grid-cols-2 gap-4 text-sm text-stone-700">
                <div>
                    <div class="text-gray-500">Numurs:</div>
                    <div>{{ $data->plate_no }}</div>
                </div>
                <div>
                    <div class="text-gray-500">Valsts:</div>
                    <div>{{ $data->country }}</div>
                </div>
                <div>
                    <div class="text-gray-500">Marka:</div>
                    <div>{{ $data->make }}</div>
                </div>
                <div>
                    <div class="text-gray-500">Modelis:</div>
                    <div>{{ $data->model }}</div>
                </div>
                <div class="col-span-2">
                    <div class="text-gray-500">VIN:</div>
                    <div>{{ $data->vin }}</div>
                </div>
            </div>
        </div>

    </div>
</x-layout>
