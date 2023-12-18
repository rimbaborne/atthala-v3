<x-splade-script>
    const sidebar = document.getElementById('sidebar');

    if (sidebar) {
        const toggleSidebarMobile = (sidebar, sidebarBackdrop, toggleSidebarMobileHamburger, toggleSidebarMobileClose) => {
            sidebar.classList.toggle('hidden');
            sidebarBackdrop.classList.toggle('hidden');
            toggleSidebarMobileHamburger.classList.toggle('hidden');
            toggleSidebarMobileClose.classList.toggle('hidden');
        }

        const toggleSidebarMobileEl = document.getElementById('toggleSidebarMobile');
        const sidebarBackdrop = document.getElementById('sidebarBackdrop');
        const toggleSidebarMobileHamburger = document.getElementById('toggleSidebarMobileHamburger');
        const toggleSidebarMobileClose = document.getElementById('toggleSidebarMobileClose');

        toggleSidebarMobileEl.addEventListener('click', () => {
            toggleSidebarMobile(sidebar, sidebarBackdrop, toggleSidebarMobileHamburger, toggleSidebarMobileClose);
        });

        sidebarBackdrop.addEventListener('click', () => {
            toggleSidebarMobile(sidebar, sidebarBackdrop, toggleSidebarMobileHamburger, toggleSidebarMobileClose);
        });
    }

</x-splade-script>
<nav class="fixed z-30 w-full bg-white border-b border-gray-200 ">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
        <div class="flex items-center justify-start">
            <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar" class="p-2 text-gray-600 rounded cursor-pointer lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100 ">
                <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
                <svg id="toggleSidebarMobileClose" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <a href="#" class="flex ml-2 md:mr-24">
                <img src="https://web.arrahmahbalikpapan.or.id/wp-content/uploads/2022/08/cropped-logo-1.png" class="h-10 mr-3" alt="Atthala Logo">
            </a>
        </div>
        <div class="flex items-center">
            <div class="hidden mr-3 -mb-1 sm:block">
                <span></span>
            </div>
            <button type="button" data-dropdown-toggle="apps-dropdown" class="hidden p-2 text-gray-500 rounded-lg sm:flex hover:text-gray-900 hover:bg-gray-100
            dark:text-gray-400
            dark:hover:text-white
            dark:hover:bg-gray-700">
                <span class="sr-only">View notifications</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                </svg>
            </button>
            <div class="z-20 z-50 hidden max-w-sm my-4 overflow-hidden text-base list-none bg-white divide-y divide-gray-100 rounded shadow-lg" id="apps-dropdown" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(1750px, 65px);">
                <div class="block px-4 py-2 text-base font-medium text-center text-gray-700 bg-gray-50">
                    Dashboard
                </div>
                <div class="grid grid-cols-3 gap-4 p-4">
                    <a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100">
                        <svg class="mx-auto mb-1 text-gray-500 w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                        </svg>
                        <div class="text-sm font-medium text-gray-900
                        dark:text-white">Sales</div>
                    </a>
                    <a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100">
                        <svg class="mx-auto mb-1 text-gray-500 w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                        </svg>
                        <div class="text-sm font-medium text-gray-900
                        dark:text-white">Users</div>
                    </a>
                    <a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100">
                        <svg class="mx-auto mb-1 text-gray-500 w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd"></path>
                        </svg>
                        <div class="text-sm font-medium text-gray-900
                        dark:text-white">Inbox</div>
                    </a>
                </div>
            </div>
            <div class="flex items-center ml-3">
                <div>
                    <button type="button" class="flex text-sm  rounded-full focus:ring-4 focus:ring-gray-300" id="user-menu-button-2" aria-expanded="false" data-dropdown-toggle="dropdown-2">
                        <span class="sr-only">Open user menu</span>
                        <x-carbon-user-avatar class="text-gray-800 h-8 w-8" />
                    </button>
                </div>
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow" id="dropdown-2" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(1838px, 61px);">
                    <div class="px-4 py-3" role="none">
                        <p class="text-sm text-gray-900
                        dark:text-white" role="none">
                            Neil Sims
                        </p>
                        <p class="text-sm font-medium text-gray-900 truncate
                        dark:text-gray-300" role="none">
                            neil.sims@flowbite.com
                        </p>
                    </div>
                    <ul class="py-1" role="none">
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
</nav>
<div class="flex pt-16 overflow-hidden bg-gray-50">
    <aside id="sidebar" class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width" aria-label="Sidebar">
    <div class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200">
        <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200">
                <ul class="pb-2 space-y-2">
                    <li>
                        <Link href="/dashboard" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <x-carbon-dashboard class="text-gray-600 h-6 w-6" />
                            <span class="ml-3" sidebar-toggle-item="">
                                Dashboard
                            </span>
                        </Link>
                    </li>
                    <li class="pt-4 space-y-2"></li>
                    <li>
                        <Link href="divisi" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <x-carbon-send-alt class="text-gray-600 h-6 w-6" />
                            <span class="ml-3" sidebar-toggle-item="">
                                Pemberitahuan
                            </span>
                        </Link>
                    </li>
                    <li>
                        <Link href="divisi" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <x-carbon-chart-point class="text-gray-600 h-6 w-6" />
                            <span class="ml-3" sidebar-toggle-item="">
                                Divisi
                            </span>
                        </Link>
                    </li>
                    <li>
                        <Link href="unit" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <x-carbon-chart-scatter class="text-gray-600 h-6 w-6" />
                            <span class="ml-3" sidebar-toggle-item="">
                                Unit
                            </span>
                        </Link>
                    </li>
                    <li>
                        <Link href="level" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <x-carbon-distribute-horizontal-center class="text-gray-600 h-6 w-6" />
                            <span class="ml-3" sidebar-toggle-item="">
                                Level
                            </span>
                        </Link>
                    </li>
                    <li>
                        <Link href="permission" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <x-carbon-network-2 class="text-gray-600 h-6 w-6" />
                            <span class="ml-3" sidebar-toggle-item="">
                                Akses Kontrol
                            </span>
                        </Link>
                    </li>
                    <li>
                        <Link href="users" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <x-carbon-user-multiple class="text-gray-600 h-6 w-6" />
                            <span class="ml-3" sidebar-toggle-item="">
                                Users
                            </span>
                        </Link>
                    </li>
                    <li>
                        <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-layouts" data-collapse-toggle="dropdown-layouts">
                            <x-carbon-report class="text-gray-600 h-6 w-6" />
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item="">Report</span>
                            <x-carbon-chevron-down class="text-gray-600 h-6 w-6" />
                        </button>
                        <ul id="dropdown-layouts" class="hidden py-2 space-y-2">
                            <li>
                                <a href="#" class="flex items-center p-2 ml-4 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                    Catatan / LOG
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center p-2 ml-4 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                    Statistik
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="pt-4 space-y-2">
                    <a href="#" target="_blank" class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group">
                        <x-carbon-information class="text-gray-600 h-6 w-6" />
                        <span class="ml-3" sidebar-toggle-item="">Bantuan</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </aside>
    <div class="fixed inset-0 z-10 hidden bg-gray-900/50" id="sidebarBackdrop"></div>
    <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64">
        <main>
            <div class="px-4 pt-6">
                <div class="grid gap-4 xl:grid-cols-2 2xl:grid-cols-3">
                    <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 h-full">
                    </div>
                </div>
            </div>
        </main>
        <p class="my-10 text-sm text-center text-gray-500">
            © 2019-{{ date('Y') }} <a href="#" class="hover:underline" target="_blank">atthala.arrahmahbalikpapan.or.id</a> All rights reserved.
        </p>
    </div>
</div>

