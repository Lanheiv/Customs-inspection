@vite('resources/js/scripts/user-serch-script.js')

<x-layout>
  <x-slot:title>
    Admin panele
  </x-slot:title>
    
  @if(session()->has("userdata"))
    <script> window.onload=()=>document.getElementById("dialog")?.showModal() </script>
    
    <el-dialog>
      <dialog id="dialog" aria-labelledby="dialog-title" class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

        <div tabindex="0" class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
          <el-dialog-panel class="relative transform overflow-hidden rounded-lg bg-white shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
              <div class="sm:flex sm:items-start">
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                  <h3 id="dialog-title" class="text-base font-semibold text-gray-500">Lietotājs veiksmīgi pievienots.</h3>
                  <div class="mt-2">
                    <p class="text-sm text-gray-400">Lietotājvārds: {{ session("userdata")["username"] }}</p>
                    <p class="text-sm text-gray-400">Loma: {{ session("userdata")["role"] }}</p>
                    <p class="text-sm text-gray-400">Parole: {{ session("userdata")["password"] }}</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
              <button type="button" command="close" commandfor="dialog" class="mt-3 inline-flex w-full justify-center rounded-md px-3 py-2 text-sm font-semibold bg-stone-700 text-white inset-ring inset-ring-white/5 hover:bg-bg-stone-500 sm:mt-0 sm:w-auto">Sapratu</button>
            </div>
          </el-dialog-panel>
        </div>
      </dialog>
    </el-dialog>
  @endif

  <div class="p-6 grid grid-cols-1 xl:grid-cols-4 gap-6">
    <div class="flex justify-between xl:col-span-4 bg-white border border-stone-200 rounded-xl px-8 py-5">
      <div class="text-xl font-semibold text-stone-700"> Admin panele </div>
      <div class="font-semibold text-blue-600 underline"> <a href="/admin/user/create">Izveidot lietotāju</a> </div>
    </div>
    <div class="xl:col-span-2 xl:row-span-4 bg-white border border-stone-200 rounded-xl px-8 py-6">
      <div class="flex justify-between items-center mb-4">
        <div class="text-stone-700 text-xl font-semibold border-b border-stone-100 pb-2"> Logs </div>

        <div class="relative">
            <div class="absolute inset-y-0 left-2 flex items-center pointer-events-none">
              <svg class="w-4 h-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 10a7 7 0 1 0-14 0 7 7 0 0 0 14 0z"/>
              </svg>
            </div>

          <input type="text" id="user_serch" placeholder="serch" class="pl-8 pr-3 py-1.5 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-1"/>
        </div>
      </div>

      <div class="overflow-y-auto max-h-[400px]">
        <table id="users_table" class="min-w-full divide-y divide-stone-200 text-sm text-stone-700">
          <div class="min-w-full divide-y divide-stone-200 text-sm text-stone-700">
            <tr>
              <th class="px-4 py-2 font-medium">ID</th>
              <th class="px-4 py-2 font-medium">Lietotājs</th>
              <th class="px-4 py-2 font-medium">IP</th>
              <th class="px-4 py-2 font-medium">Apraksts</th>
              <th class="px-4 py-2 font-medium"></th>
            </tr>
          </div>
          <div>
            @foreach($logs as $logs)
              <tr class="text-center">
                <td>{{ $logs->foreignId }}</td>
                <td>{{ $logs->user_id }}</td>
                <td>{{ $logs->IPaddres }}</td>
                <td>{{ $logs->description }}</td>
                <td class="text-blue-600 underline"><a href="/data/{{ $logs->foreignId }}">detaļas</a></td>
              </tr>
            @endforeach
          </div>
        </table>
      </div>
    </div>
    <div class="xl:col-span-2 xl:row-span-4 bg-white border border-stone-200 rounded-xl px-8 py-6">
      <div class="flex justify-between items-center mb-4">
        <div class="text-stone-700 text-xl font-semibold border-b border-stone-100 pb-2"> Lietotāji </div>

        <div class="relative">
            <div class="absolute inset-y-0 left-2 flex items-center pointer-events-none">
              <svg class="w-4 h-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 10a7 7 0 1 0-14 0 7 7 0 0 0 14 0z"/>
              </svg>
            </div>

          <input type="text" id="user_serch" placeholder="serch" class="pl-8 pr-3 py-1.5 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-1"/>
        </div>
      </div>

      <div class="overflow-y-auto max-h-[400px]">
        <table id="users_table" class="min-w-full divide-y divide-stone-200 text-sm text-stone-700">
          <div class="min-w-full divide-y divide-stone-200 text-sm text-stone-700">
            <tr>
              <th class="px-4 py-2 font-medium">ID</th>
              <th class="px-4 py-2 font-medium">Lietotājvārds</th>
              <th class="px-4 py-2 font-medium">Loma</th>
              <th class="px-4 py-2 font-medium">Stāvoklis</th>
              <th class="px-4 py-2 font-medium"></th>
            </tr>
          </div>
          <div>
            @foreach($users as $user)
              <tr class="text-center">
                <td>{{ $user->foreignId }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->active ? "aktīvs" : "neaktīvs" }}</td>
                <td class="text-blue-600 underline"><a href="/data/{{ $user->foreignId }}">detaļas</a></td>
              </tr>
            @endforeach
          </div>
        </table>
      </div>
    </div>
  </div>
</x-layout>
