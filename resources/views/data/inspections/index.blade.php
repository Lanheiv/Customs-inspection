<x-layout>
    <x-slot:title>
        Inspekcija {{ $data->foreignId }}
    </x-slot:title>

    <div class="p-6 grid grid-cols-1 xl:grid-cols-3 gap-6">
        <div class="xl:col-span-3 bg-white border border-stone-200 rounded-xl px-8 py-6">
            <div class="flex justify-between items-center border-b border-stone-100 pb-4 mb-4">
                <div class="text-xl font-semibold text-stone-700">
                    Inspekcija {{ $data->foreignId }}
                </div>
                <div class="text-sm text-gray-700">
                    {{ strtoupper($data->type) }}
                </div>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 text-sm text-stone-700">
                <div>
                    <div class="text-gray-500">Tips:</div>
                    <div>{{ $data->type }}</div>
                </div>
                <div>
                    <div class="text-gray-500">Sākums:</div>
                    <div>{{ $data->start_ts }}</div>
                </div>
                <div>
                    <div class="text-gray-500">Atrašanās vieta:</div>
                    <div>{{ $data->location ?? "-" }}</div>
                </div>
                <div>
                    <div class="text-gray-500">Pieprasīja:</div>
                    <div>{{ $data->requested_by ?? "-" }}</div>
                </div>
            </div>
        </div>

        <div class="bg-white border border-stone-200 rounded-xl px-6 py-6">
            <div class="border-b border-stone-100 font-semibold text-stone-700 mb-4">
                Gadijums
            </div>

            @if($case)
                <div class="text-sm space-y-3 text-stone-700 py-2">
                    <div>
                        <div class="text-xs text-gray-500">Gadījums:</div>
                        <a class="text-blue-600 underline" href="{{ $case->foreignId }}">
                            {{ $case->foreignId }}
                        </a>
                    </div>

                    <div>
                        <div class="text-xs text-gray-500">Statuss:</div>
                        <div>{{ strtoupper($case->status) }}</div>
                    </div>

                    <div>
                        <div class="text-xs text-gray-500">Prioritāte:</div>
                        <div>{{ $case->priority }}</div>
                    </div>

                    <div>
                        <div class="text-xs text-gray-500">Ierašanās:</div>
                        <div>{{ $case->arrival_ts }}</div>
                    </div>
                </div>
            @else
                <div class="text-sm text-gray-400">
                    Nav gadījuma (iespējams kļūda kodā :[)
                </div>
            @endif
        </div>

        <div class="bg-white border border-stone-200 rounded-xl px-6 py-6">
            <div class="border-b border-stone-100 font-semibold text-stone-700 mb-4">
                Pārbaudes
            </div>
            @if(!empty($data->checks))
                @foreach($data->checks as $check)
                    <div class="text-stone-700 text-sm py-2">
                        <div class="pb-2 border-b border-stone-100">
                            <div class="text-xs text-gray-500">{{ $check["name"] ?? "-" }}:</div>
                            <div class="">{{ $check["result"] ?? "-" }}</div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="text-sm text-gray-400">
                    Nav pārbaužu
                </div>
            @endif
        </div>

        <div class="bg-white border border-stone-200 rounded-xl px-6 py-6">
            <div class="border-b border-stone-100 font-semibold text-stone-700 mb-4">
                Piešķirts
            </div>

            <div class="text-sm text-stone-700">
                {{ $user->full_name ?? "Piešķirts" }}
            </div>
        </div>

    </div>
</x-layout>
