<aside id="aside-full" class="fixed left-0 top-0 z-40 flex flex-col w-64 h-screen px-5 py-8 overflow-y-auto bg-white border-r-2 border-stone-200 hidden">

    <div class="flex flex-col justify-between flex-1 mt-6">
        <nav class="flex-1 -mx-3 space-y-3">
            <a href="/" class="flex items-center px-3 py-2 text-gray-700 transition-colors duration-200 transform rounded-lg hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-auto h-6" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m19.633 7.11l-6.474-4.02a2.228 2.228 0 0 0-2.362 0L4.324 7.133A2.228 2.228 0 0 0 3.31 9.362l1.67 10.027a2.228 2.228 0 0 0 2.228 1.86h9.582a2.229 2.229 0 0 0 2.229-1.86l1.67-10.027a2.228 2.228 0 0 0-1.058-2.251M8.636 16.459h6.685"/>
                </svg>
                <span class="mx-2 text-sm font-medium">Sākumlapa</span>
            </a>
            <a href="/cases" class="flex items-center px-3 py-2 text-gray-700 transition-colors duration-200 transform rounded-lg hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-auto h-6" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor">
                        <rect width="18.5" height="18.5" x="2.75" y="2.75" stroke-width="1.5" rx="6"/>
                        <path stroke-linecap="round" stroke-width="1.6" d="M7.672 16.222v-5.099m4.451 5.099V7.778m4.205 8.444V9.82"/>
                    </g>
                </svg>
                <span class="mx-2 text-sm font-medium">Reģistrs</span>
            </a>
            <a href="/inspections" class="flex items-center px-3 py-2 text-gray-700 transition-colors duration-200 transform rounded-lg hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-auto h-6" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.382 8.813v8.5c0 .845.344 1.656.957 2.253a3.305 3.305 0 0 0 2.308.934h8.706c.866 0 1.696-.336 2.308-.934a3.15 3.15 0 0 0 .957-2.253v-8.5m0-5.313H4.382c-.901 0-1.632.714-1.632 1.594v2.125c0 .88.73 1.593 1.632 1.593h15.236c.901 0 1.632-.713 1.632-1.593V5.094c0-.88-.73-1.594-1.632-1.594M8.735 15.188h6.53"/>
                </svg>
                <span class="mx-2 text-sm font-medium">Pārbaudes</span>
            </a>
            <a href="/documents" class="flex items-center px-3 py-2 text-gray-700 transition-colors duration-200 transform rounded-lg hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-auto h-6" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                        <path d="M19.194 9.079V7.821c0-.538-.216-1.054-.602-1.434a2.07 2.07 0 0 0-1.453-.594H6.86a2.07 2.07 0 0 0-1.453.594c-.386.38-.602.896-.602 1.434V9.08"/>
                        <path d="M6.861 5.793V4.779c0-.538.217-1.054.602-1.435a2.07 2.07 0 0 1 1.454-.594h6.166a2.07 2.07 0 0 1 1.454.594c.385.38.602.897.602 1.435v1.014m.781 3.043H6.08c-1.84 0-3.33 1.47-3.33 3.286v5.842c0 1.815 1.49 3.286 3.33 3.286h11.84c1.84 0 3.33-1.471 3.33-3.286v-5.842c0-1.815-1.49-3.286-3.33-3.286"/>
                        <path d="M7.889 12.893v1.014c0 .538.216 1.054.602 1.434c.385.38.908.594 1.453.594h4.112a2.07 2.07 0 0 0 1.453-.594c.386-.38.602-.896.602-1.434v-1.014"/>
                    </g>
                </svg>
                <span class="mx-2 text-sm font-medium">Dokumenti</span>
            </a>
            @if(auth()->user()->role == "admin")
                <a href="/admin" class="flex items-center px-3 py-2 text-gray-700 transition-colors duration-200 transform rounded-lg hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-auto h-6" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                            <path d="M12.132 15.404a3.364 3.364 0 1 0 0-6.728a3.364 3.364 0 0 0 0 6.728"/>
                            <path d="M20.983 15.094a9.43 9.43 0 0 1-1.802 3.1l-2.124-.482a7.245 7.245 0 0 1-2.801 1.56l-.574 2.079a9.462 9.462 0 0 1-1.63.149a9.117 9.117 0 0 1-2.032-.23l-.609-2.146a7.475 7.475 0 0 1-2.457-1.493l-2.1.54a9.357 9.357 0 0 1-1.837-3.33l1.55-1.722a7.186 7.186 0 0 1 .069-2.652L3.107 8.872a9.356 9.356 0 0 1 2.067-3.353l2.17.54A7.68 7.68 0 0 1 9.319 4.91l.574-2.124a8.886 8.886 0 0 1 2.17-.287c.585 0 1.17.054 1.745.16l.551 2.113c.83.269 1.608.68 2.296 1.217l2.182-.563a9.368 9.368 0 0 1 2.043 3.1l-1.48 1.607a7.405 7.405 0 0 1 .068 3.364z"/>
                        </g>
                    </svg>
                    <span class="mx-2 text-sm font-medium">Admin panele</span>
                </a>
            @endif
        </nav>

        <div class="mt-6">
            <div class="flex items-center justify-between mt-6">
                <a href="/data/{{ auth()->user()->foreignId }}" class="flex items-center gap-x-2 text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-auto h-6" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.618 21.25c0-3.602-4.016-6.53-7.618-6.53c-3.602 0-7.618 2.928-7.618 6.53M12 11.456a4.353 4.353 0 1 0 0-8.706a4.353 4.353 0 0 0 0 8.706"/>
                    </svg>
                    <span class="text-sm font-medium">{{ auth()->user()->username }}</span>
                </a>
                
                <a href="/logout" class="text-gray-700 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-auto h-6" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
                            <path stroke-linejoin="round" d="M13.477 21.245H8.34a4.918 4.918 0 0 1-5.136-4.623V7.378A4.918 4.918 0 0 1 8.34 2.755h5.136"/>
                            <path stroke-miterlimit="10" d="M20.795 12H7.442"/>
                            <path stroke-linejoin="round" d="m16.083 17.136l4.404-4.404a1.04 1.04 0 0 0 0-1.464l-4.404-4.404"/>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</aside>