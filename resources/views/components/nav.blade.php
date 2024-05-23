<nav x-data="{ open: false }" class="bg-gray-800 fixed w-full top-0 z-20 left-0 border-gray-200 px-2 sm:px-4 py-2.5 rounded mb-5 text-white">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="/">
            <span class="self-center text-xl font-semibold whitespace-nowrap">
                Student System
            </span>
        </a>

        <button @click="open = !open" class="md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
        </button>

        <div x-show="open" class="w-full md:block md:w-auto" id="nav-bar-main">
            <x-items />
        </div>
        <div class="hidden w-full md:block md:w-auto" id="nav-bar-main">
            <x-items />
        </div>
    </div>
</nav>
