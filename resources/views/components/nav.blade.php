@auth 
    <nav class="flex h-10 bg-white border-b-2 border-stone-200 items-center shrink-0 justify-between px-2">
        <div id="sidebar-swich-div" class="" onclick="sidebarSwich()">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-auto h-6" viewBox="0 0 24 24">
                <g fill="none" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.75 9.167h18.5"/>
                    <path stroke-linecap="square" stroke-linejoin="round" d="M9.167 21.25V9.167"/>
                    <rect width="18.5" height="18.5" x="2.75" y="2.75" rx="6"/>
                </g>
            </svg>
        </div>

        <div id="mode-swich-div" class="" onclick="modeSwich()">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-auto h-6" viewBox="0 0 24 24">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21.182 14.86A9.474 9.474 0 1 1 9.139 2.819a1.053 1.053 0 0 1 1.38 1.295a7.705 7.705 0 0 0-.085 4.642a6.999 6.999 0 0 0 4.81 4.811c1.52.45 3.14.42 4.643-.084a1.053 1.053 0 0 1 1.295 1.379"/>
            </svg>
        </div>
    </nav>
@endauth  






<!--
sidebar svg
    --- shrink version:
        <svg xmlns="http://www.w3.org/2000/svg" class="w-auto h-7" viewBox="0 0 24 24">
            <g fill="none" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.75 9.167h18.5"/>
                <path stroke-linecap="square" stroke-linejoin="round" d="M9.167 21.25V9.167"/>
                <rect width="18.5" height="18.5" x="2.75" y="2.75" rx="6"/>
            </g>
        </svg>
    --- full version:
        <svg xmlns="http://www.w3.org/2000/svg" class="w-auto h-7" viewBox="0 0 24 24">
            <g fill="none" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.75 9.167h18.5M15.334 21.25V9.167"/>
                <rect width="18.5" height="18.5" x="2.75" y="2.75" rx="6"/>
            </g>
        </svg>

dark/light mod svg
    ---moon
        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21.182 14.86A9.474 9.474 0 1 1 9.139 2.819a1.053 1.053 0 0 1 1.38 1.295a7.705 7.705 0 0 0-.085 4.642a6.999 6.999 0 0 0 4.81 4.811c1.52.45 3.14.42 4.643-.084a1.053 1.053 0 0 1 1.295 1.379"/>
        </svg>
    ---sun
        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24">
            <g fill="none">
                <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" clip-path="url(#mageSun0)">
                    <path d="M12 17.885a5.885 5.885 0 1 0 0-11.77a5.885 5.885 0 0 0 0 11.77m-9.281-5.879H1.5m21 0h-1.207m-9.287-9.287V1.5m0 21v-1.207M5.435 5.435l-.859-.859m14.848 14.848l-.86-.86m.001-13.129l.858-.859M4.576 19.424l.86-.86"/>
                </g>
                <defs>
                    <clipPath id="mageSun0">
                        <path fill="#fff" d="M0 0h24v24H0z"/>
                    </clipPath>
                </defs>
            </g>
        </svg>
-->