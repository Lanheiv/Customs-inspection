<x-layout>
    <x-slot:title>
        Izveidot lietotāju
    </x-slot:title>

    <form method="POST" action="/admin/user/create" class="p-6 grid grid-cols-1 xl:grid-cols-2 gap-6">
        @csrf

        <div class="xl:col-span-2 bg-white border border-stone-200 rounded-xl px-8 py-6">
            <div class="flex justify-between items-center border-b border-stone-100 pb-4 mb-4">
                <div class="text-xl font-semibold text-stone-700">Izveidot lietotāju</div>
            </div>

            <div class="grid grid-cols-2 gap-4 text-sm text-stone-700">

                <div>
                    <div class="text-gray-500">Lietotājvārds</div>
                    <input name="username" class="w-full border border-stone-300 rounded px-3 py-2">
                </div>

                <div>
                    <div class="text-gray-500">Pilns vārds</div>
                    <input name="full_name" class="w-full border border-stone-300 rounded px-3 py-2">
                </div>

                <div>
                    <div class="text-gray-500">Loma</div>
                    <select name="role" class="w-full border border-stone-300 rounded px-3 py-2">
                        <option value="inspector">Inspector</option>
                        <option value="analyst">Analyst</option>
                        <option value="broker">Broker</option>
                    </select>
                </div>

                <div>
                    <div class="text-gray-500">Statuss</div>
                    <select name="active" class="w-full border border-stone-300 rounded px-3 py-2">
                        <option value="1">Aktīvs</option>
                        <option value="0">Neaktīvs</option>
                    </select>
                </div>
            </div>

            <div class="mt-6 flex gap-3">
                <button type="submit" class="px-4 py-2 bg-stone-700 text-white rounded">Saglabāt</button>
                <a href="{{ url()->previous() }}" class="px-4 py-2 border border-stone-300 rounded">Atcelt</a>
            </div>
        </div>
    </form>
</x-layout>
