@vite('resources/js/scripts/doc-serch-script.js')

<x-layout>
    <x-slot:title>
        Dokumenti
    </x-slot:title>

    <div class="p-6 grid grid-cols-1 xl:grid-cols-4 gap-6">
        <div class="flex justify-between xl:col-span-4 bg-white border border-stone-200 rounded-xl px-8 py-5">
            <div class="text-xl font-semibold text-stone-700">
                Dokumenti
            </div>
            @if(auth()->user()->role == "broker")
                <div class="font-semibold text-blue-600 underline">
                    <a href="/document/create">Pievienot dokumentu</a>
                </div>
            @endif
        </div>
        <div class="xl:col-span-2 xl:row-span-4 bg-white border border-stone-200 rounded-xl px-8 py-6">
            <div class="flex justify-between items-center mb-4">
                <div class="text-stone-700 text-xl font-semibold border-b border-stone-100 pb-2"> Transportlīdzekļi </div>

                <div class="relative">
                    <div class="absolute inset-y-0 left-2 flex items-center pointer-events-none">
                        <svg class="w-4 h-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 10a7 7 0 1 0-14 0 7 7 0 0 0 14 0z"/>
                        </svg>
                    </div>

                    <input type="text" id="trans_serch" class="pl-8 pr-3 py-1.5 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-1"/>
                </div>
            </div>
            <div class="overflow-y-auto max-h-[250px]">
                <table id="trans_table" class="min-w-full divide-y divide-stone-200 text-sm text-stone-700">
                    <div class="min-w-full divide-y divide-stone-200 text-sm text-stone-700">
                        <tr>
                            <th class="px-4 py-2 font-medium">ID</th>
                            <th class="px-4 py-2 font-medium">Mašīnas numurs</th>
                            <th class="px-4 py-2 font-medium">Modelis</th>
                            <th class="px-4 py-2 font-medium">Vin</th>
                            <th class="px-4 py-2 font-medium"></th>
                        </tr>
                    </div>
                    <div>
                        @foreach($veh as $veh)
                            <tr class="text-center">
                                <td>{{ $veh->foreignId }}</td>
                                <td>{{ $veh->plate_no }}</td>
                                <td>{{ $veh->model }}</td>
                                <td>{{ $veh->vin }}</td>
                                <td class="text-blue-600 underline"><a href="/data/{{ $veh->foreignId }}">detaļas</a></td>
                            </tr>
                        @endforeach
                    </div>
                </table>
            </div>
        </div>
        <div class="xl:col-span-2 xl:row-span-8  bg-white border border-stone-200 rounded-xl px-8 py-6">
            <div class="flex justify-between items-center mb-4">
                <div class="text-stone-700 text-xl font-semibold border-b border-stone-100 pb-2"> Dokumenti </div>

                <div class="relative">
                    <div class="absolute inset-y-0 left-2 flex items-center pointer-events-none">
                        <svg class="w-4 h-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 10a7 7 0 1 0-14 0 7 7 0 0 0 14 0z"/>
                        </svg>
                    </div>

                    <input type="text" id="doc_serch" class="pl-8 pr-3 py-1.5 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-1"/>
                </div>
            </div>
            <div class="overflow-y-auto max-h-[600px]">
                <table id="table" class="min-w-full divide-y divide-stone-200 text-sm text-stone-700">
                    <div class="min-w-full divide-y divide-stone-200 text-sm text-stone-700">
                        <tr>
                            <th class="px-4 py-2 font-medium">ID</th>
                            <th class="px-4 py-2 font-medium">Gadijums</th>
                            <th class="px-4 py-2 font-medium">Nosaukums</th>
                            <th class="px-4 py-2 font-medium">Kategorija</th>
                            <th class="px-4 py-2 font-medium"></th>
                        </tr>
                    </div>
                    <div>
                        @foreach($doc as $doc)
                            <tr class="text-center">
                                <td>{{ $doc->foreignId }}</td>
                                <td class="text-blue-600 underline"><a href="/data/{{ $doc->case_id }}">{{ $doc->case_id }}</a></td>
                                <td>{{ $doc->filename }}</td>
                                <td>{{ $doc->category }}</td>
                                <td class="text-blue-600 underline"><a href="/data/{{ $doc->foreignId }}">detaļas</a></td>
                            </tr>
                        @endforeach
                    </div>
                </table>
            </div>
        </div>
        <div class="xl:col-span-2 xl:row-span-4 bg-white border border-stone-200 rounded-xl px-8 py-6">
            <div class="flex justify-between items-center mb-4">
                <div class="text-stone-700 text-xl font-semibold border-b border-stone-100 pb-2"> Kompānijas </div>

                <div class="relative">
                    <div class="absolute inset-y-0 left-2 flex items-center pointer-events-none">
                        <svg class="w-4 h-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 10a7 7 0 1 0-14 0 7 7 0 0 0 14 0z"/>
                        </svg>
                    </div>

                    <input type="text" id="company_serch" class="pl-8 pr-3 py-1.5 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-1"/>
                </div>
            </div>
            <div class="overflow-y-auto max-h-[200px]">
                <table id="company_table" class="min-w-full divide-y divide-stone-200 text-sm text-stone-700">
                    <div class="min-w-full divide-y divide-stone-200 text-sm text-stone-700">
                        <tr>
                            <th class="px-4 py-2 font-medium">ID</th>
                            <th class="px-4 py-2 font-medium">Nosaukums</th>
                            <th class="px-4 py-2 font-medium">Tips</th>
                            <th class="px-4 py-2 font-medium">Vat</th>
                            <th class="px-4 py-2 font-medium"></th>
                        </tr>
                    </div>
                    <div>
                        @foreach($par as $par)
                            <tr class="text-center">
                                <td>{{ $par->foreignId }}</td>
                                <td>{{ $par->name }}</td>
                                <td>{{ $par->type }}</td>
                                <td>{{ $par->vat }}</td>
                                <td class="text-blue-600 underline"><a href="/data/{{ $par->foreignId }}">detaļas</a></td>
                            </tr>
                        @endforeach
                    </div>
                </table>
            </div>
        </div>
    </div>
</x-layout>
