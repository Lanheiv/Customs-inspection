<x-layout>
    <x-slot:title>
        Sākumlapa
    </x-slot:title>

    <div class="p-6 grid grid-cols-1 xl:grid-cols-3 gap-6">

        <div class="xl:col-span-3 bg-white border border-stone-200 rounded-xl px-8 py-6">
            <div class="text-xl font-semibold text-stone-700">
                Esiet sveicināts, {{ auth()->user()->username }}
            </div>
        </div>

        <div class="xl:col-span-2 bg-white border border-stone-200 rounded-xl px-6 py-6">
            <div class="border-b border-stone-100 text-stone-700 text-xl font-semibold mb-4 pb-2">
                Apkopotie dati
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-5 gap-6 text-center text-stone-700">
                <div>
                    <div class="text-sm text-gray-600 mb-1">Transportlīdzekļi</div>
                    <div class="text-2xl font-bold">{{ $data["vehicles"] }}</div>
                </div>
                <div>
                    <div class="text-sm text-gray-600 mb-1">Kompānijas</div>
                    <div class="text-2xl font-bold">{{ $data["parties"] }}</div>
                </div>
                <div>
                    <div class="text-sm text-gray-600 mb-1">Gadījumi</div>
                    <div class="text-2xl font-bold">{{ $data["cases"] }}</div>
                </div>
                <div>
                    <div class="text-sm text-gray-600 mb-1">Inspekcijas</div>
                    <div class="text-2xl font-bold">{{ $data["inspections"] }}</div>
                </div>
                <div>
                    <div class="text-sm text-gray-600 mb-1">Dokumenti</div>
                    <div class="text-2xl font-bold">{{ $data["documents"] }}</div>
                </div>
            </div>
        </div>

        <div class="xl:col-span-1 xl:row-span-4 bg-white border border-stone-200 rounded-xl px-8 py-6">
            <div class="border-b border-stone-100 text-stone-700 text-xl font-semibold mb-4 pb-2">
                Jūsu izpildes uzdevumi
            </div>
        </div>
    </div>
</x-layout>
