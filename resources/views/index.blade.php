<x-layout>
    <x-slot:title>
        Sākumlapa
    </x-slot:title>

    <div class="flex-1 grid grid-cols-4 grid-rows-3 gap-4 p-4 h-full">
        <div class="col-span-4 rounded-xl border border-stone-200 bg-white backdrop-blur-sm px-8 py-10">
            <div class="pb-2 text-sm text-gray-700 border-b border-stone-100">Muitas pārbaude</div>

            <div class="flex flex-col lg:flex-row items-center justify-between text-stone-700">
                <div class="text-xl font-semibold">Esiet sveicināts {{ auth()->user()->username }}</div>
            </div>
        </div>
        <div class="col-span-2 rounded-xl border border-stone-200 bg-white px-6 py-8 grid grid-cols-1 lg:grid-cols-5 gap-6">
            <div class="lg:col-span-5 text-center mb-3 pb-2 border-b border-stone-100">
                <div class="text-stone-700 text-xl font-semibold">Apkopotie dati</div>
            </div>
            
            <div class="text-center">
                <div class="text-sm text-gray-600 mb-1">Transportlīdzekļi</div>
                <div class="text-stone-700 text-2xl font-bold">{{ $data['vehicles'] }}</div>
            </div>
            <div class="text-center">
                <div class="text-sm text-gray-600 mb-1">Kompānijas</div>
                <div class="text-stone-700 text-2xl font-bold">{{ $data['parties'] }}</div>
            </div>
            <div class="text-center">
                <div class="text-sm text-gray-600 mb-1">Gadijumi</div>
                <div class="text-stone-700 text-2xl font-bold">{{ $data['cases'] }}</div>
            </div>
            <div class="text-center">
                <div class="text-sm text-gray-600 mb-1">Inspekcijas</div>
                <div class="text-stone-700 text-2xl font-bold">{{ $data['inspections'] }}</div>
            </div>
            <div class="text-center">
                <div class="text-sm text-gray-600 mb-1">Dokumenti</div>
                <div class="text-stone-700 text-2xl font-bold">{{ $data['documents'] }}</div>
            </div>
        </div>
        <div class="col-span-2 row-span-2 rounded-xl border border-stone-200 bg-white backdrop-blur-sm px-8 py-10">
            <div class="mb-6 pb-2 border-b border-stone-100">
                <div class="text-stone-700 text-xl font-semibold">Jūsu izpildes uzdevumi</div>
            </div>

            <div>
                
            </div>
        </div>
    </div>
</x-layout>
