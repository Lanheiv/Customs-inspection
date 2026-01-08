<x-layout>
    <x-slot:title>
        Dokuments {{ $data->foreignId }}
    </x-slot:title>

    <div class="p-6 grid grid-cols-1 xl:grid-cols-2 gap-6">

        <div class="xl:col-span-2 bg-white border border-stone-200 rounded-xl px-8 py-6">
            <div class="flex justify-between items-center border-b border-stone-100 pb-4 mb-4">
                <div class="text-xl font-semibold text-stone-700"> Dokuments: {{ $data->foreignId }} </div>
                <div class="text-sm text-gray-700"> {{ strtoupper($data->category) }} </div>
            </div>

            <div class="grid grid-cols-2 gap-4 text-sm text-stone-700">
                <div>
                    <div class="text-gray-500">Faila nosaukums:</div>
                    <div>{{ $data->filename }}</div>
                </div>
                <div>
                    <div class="text-gray-500">tips:</div>
                    <div>{{ $data->mime_type }}</div>
                </div>
                <div>
                    <div class="text-gray-500">Lapas:</div>
                    <div>{{ $data->pages }}</div>
                </div>
                <div>
                    <div class="text-gray-500">Pievienoja:</div>
                    <div>{{ $user->full_name }}</div>
                </div>
                <div class="col-span-2">
                    <div class="text-gray-500">Fails:</div>
                    <div>
                        <a href="{{ $path ?? '#' }}" class="text-blue-600 underline" target="_blank">
                            {{ "dokuments šeit" }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="xl:col-span-1 bg-white border border-stone-200 rounded-xl px-8 py-6">
            <div class="border-b border-stone-100 font-semibold text-stone-700 mb-4">
                Saistītais gadijums
            </div>

            @if($case->count())
                @foreach($case as $case)
                    <div class="flex justify-between text-sm py-2">
                        <div><a href="{{ $case->foreignId }}" class="text-blue-600 underline">{{ $case->foreignId }}</a></div>
                    </div>
                @endforeach
            @else
                <div class="text-sm text-gray-400">
                    Nav gadijumi
                </div>
            @endif
        </div>

    </div>
</x-layout>
