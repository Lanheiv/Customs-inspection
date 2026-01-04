<x-layout>
    <x-slot:title>
        Gadījums {{ $data->foreignId }}
    </x-slot:title>

    <div class="p-6 grid grid-cols-1 xl:grid-cols-3 gap-6">

        <div class="xl:col-span-3 bg-white border border-stone-200 rounded-xl px-8 py-6">
            <div class="flex justify-between items-center border-b border-stone-100 pb-4 mb-4">
                <div class="text-xl font-semibold text-stone-700">
                    Gadījums {{ $data->foreignId }}
                </div>
                <div class="text-sm text-gray-700">
                    {{ strtoupper($data->status) }}
                </div>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 text-sm text-stone-700">
                <div>
                    <div class="text-gray-500">Ārējais refs:</div>
                    <div>{{ $data->external_ref }}</div>
                </div>
                <div>
                    <div class="text-gray-500">Prioritāte:</div>
                    <div>{{ $data->priority }}</div>
                </div>
                <div>
                    <div class="text-gray-500">Ierašanās;</div>
                    <div>{{ $data->arrival_ts }}</div>
                </div>
                <div>
                    <div class="text-gray-500">Kontroles punkts:</div>
                    <div>{{ $data->checkpoint_id }}</div>
                </div>
            </div>
        </div>

        <div class="bg-white border border-stone-200 rounded-xl px-6 py-6">
            <div class="border-b border-stone-100 font-semibold text-stone-700 mb-4">
                Transportlīdzeklis
            </div>

            @if($vehicle)
                <div class="text-sm space-y-2 text-stone-700">
                    <div class="mb-4">
                        <div class="text-xs text-gray-500">Numurs:</div>
                        <div class="text-stone-700">{{ $vehicle->plate_no }}</div>
                    </div>
                    <div class="mb-4">
                        <div class="text-xs text-gray-500">Valsts:</div>
                        <div class="text-stone-700">{{ $vehicle->country }}</div>
                    </div>
                    <div class="mb-4">
                        <div class="text-xs text-gray-500">Marka:</div>
                        <div class="text-stone-700">{{ $vehicle->make }} {{ $vehicle->model }}</div>
                    </div>
                    <div class="mb-4">
                        <div class="text-xs text-gray-500">VIN:</div>
                        <div class="text-stone-700">{{ $vehicle->vin }}</div>
                    </div>
                </div>
            @else
                <div class="text-sm text-gray-400">
                    Nav datu
                </div>
            @endif
        </div>

        <div class="bg-white border border-stone-200 rounded-xl px-6 py-6">
            <div class="border-b border-stone-100 font-semibold text-stone-700 mb-4">
                Uzņēmumi
            </div>

            <div class="mb-4">
                <div class="text-xs text-gray-500">Deklarants:</div>
                <div class="text-stone-700">
                    {{ $partie_declarant?->name ?? '-' }}
                </div>
                <div class="text-sm text-gray-600">
                    {{ $partie_declarant?->country ?? '' }}
                </div>
            </div>

            <div>
                <div class="text-xs text-gray-500">Saņēmējs:</div>
                <div class="text-stone-700">
                    {{ $partie_consignee?->name ?? '-' }}
                </div>
                <div class="text-sm text-gray-600">
                    {{ $partie_consignee?->country ?? '' }}
                </div>
            </div>
        </div>

        <div class="bg-white border border-stone-200 rounded-xl px-6 py-6">
            <div class="border-b border-stone-100 font-semibold text-stone-700 mb-4">
                Dokumenti
            </div>

            @if($document->count())
                @foreach($document as $doc)
                    <div class="flex justify-between text-sm border-b border-stone-100 py-2">
                        <div><a href="{{ $doc->foreignId }}" class="text-blue-600 underline">{{ $doc->filename }}</a></div>
                        <div class="text-gray-500">{{ $doc->category }}</div>
                    </div>
                @endforeach
            @else
                <div class="text-sm text-gray-400">
                    Nav dokumentu
                </div>
            @endif
        </div>

        <div class="bg-white border border-stone-200 rounded-xl px-6 py-6">
            <div class="border-b border-stone-100 font-semibold text-stone-700 mb-4">
                Inspekcijas
            </div>

            @if($inspection->count())
                @foreach($inspection as $insp)
                    <div class="border-b border-stone-100 py-2 text-sm">
                        <div>Tips: {{ $insp->type }}</div>
                        <div class="text-gray-500">
                            {{ $insp->start_ts }}
                        </div>
                    </div>
                @endforeach
            @else
                <div class="text-sm text-gray-400">
                    Nav inspekciju
                </div>
            @endif
        </div>

    </div>
</x-layout>
