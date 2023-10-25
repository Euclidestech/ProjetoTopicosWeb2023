<nav aria-label="menu nav" class=" bg-gray-800 pt-2 md:pt-1 pb-1 px-4 mt-0 ml-24 h-auto w-2/3 fixed z-20 top-0 rounded-lg ">

    <div class="flex flex-wrap items-center">
        <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
            <a href="#" aria-label="Home">
                <span class="text-xl pl-2"><i class="em em-grinning"></i></span>
            </a>
        </div>

        <div class=" flex flex-1 md:w-1/3 justify-center md:justify-start text-black font-bold px-2">
            <span class="relative w-full">
                <input aria-label="search" type="text" wire:model.live="busca" placeholder="Busca"  class="mt-1 block w-full rounded-md
                border-green-300 shadow-sm focus:border-green-300 focus:ring
                focus:ring-green-500 focus:ring-opacity-50">
                <div class="absolute search-icon top-4 left-60 ">
                    <svg class="fill-current pointer-events-none text-black w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                    </svg>
                </div>
            </span>
        </div>

        <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
            <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                {{-- <li class="flex-1 md:flex-none md:mr-3">
                    <a class="inline-block py-2 px-4 text-white no-underline" href="#">Active</a>
                </li> --}}
                {{-- <li class="flex-1 md:flex-none md:mr-3">
                    <a class="inline-block text-gray-400 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="#">link</a>
                </li> --}}
                <li class="flex-1 md:flex-none md:mr-3">
                    <div class="relative inline-block">
                        <button onclick="toggleDD('myDropdown')" class="drop-button text-white py-2 px-2"> <span class="pr-2"><i class="em em-robot_face"></i></span> Usuario<svg class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg></button>
                        <div id="myDropdown" class="dropdownlist absolute bg-gray-800 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible">
                            <input type="text" class="drop-search p-2 text-gray-600" placeholder="Search.." id="myInput" onkeyup="filterDD('myDropdown','myInput')">
                            <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-user fa-fw"></i> Profile</a>
                            <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-cog fa-fw"></i> Settings</a>
                            <div class="border border-gray-800"></div>
                            <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</nav>
