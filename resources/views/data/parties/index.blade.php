<x-layout>
    <x-slot:title>
        Uzņēmums {{ $data->foreignId }}
    </x-slot:title>

    <div class="p-6 grid grid-cols-1 xl:grid-cols-2 gap-6">

        <div class="xl:col-span-2 bg-white border border-stone-200 rounded-xl px-8 py-6">
            <div class="flex justify-between items-center border-b border-stone-100 pb-4 mb-4">
                <div class="text-xl font-semibold text-stone-700">
                    Uzņēmums: {{ $data->foreignId }}
                </div>
                <div class="text-sm text-gray-700">
                    {{ strtoupper($data->type ?? 'Nezināms') }}
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 text-sm text-stone-700">
                <div>
                    <div class="text-gray-500">Nosaukums:</div>
                    <div>{{ $data->name }}</div>
                </div>
                <div>
                    <div class="text-gray-500">Valsts:</div>
                    <div>{{ $data->country ?? '—' }}</div>
                </div>
                <div>
                    <div class="text-gray-500">Reģistrācijas kods:</div>
                    <div>{{ $data->reg_code ?? '—' }}</div>
                </div>
                <div>
                    <div class="text-gray-500">VAT:</div>
                    <div>{{ $data->vat ?? '—' }}</div>
                </div>
                <div>
                    <div class="text-gray-500">E-pasts:</div>
                    <div>{{ $data->email ?? '—' }}</div>
                </div>
                <div>
                    <div class="text-gray-500">Telefons:</div>
                    <div>{{ $data->phone ?? '—' }}</div>
                </div>
            </div>
        </div>

    </div>
</x-layout>
