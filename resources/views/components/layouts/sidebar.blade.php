<x-splade-script>
    const sidebar = document.getElementById('sidebar');

    if (sidebar) {
        const toggleSidebarMobile = (sidebar, toggleSidebarMobileHamburger, toggleSidebarMobileClose) => {
            sidebar.classList.toggle('hidden');
            toggleSidebarMobileHamburger.classList.toggle('hidden');
            toggleSidebarMobileClose.classList.toggle('hidden');
        }

        const toggleSidebarMobileEl = document.getElementById('toggleSidebarMobile');
        const toggleSidebarMobileHamburger = document.getElementById('toggleSidebarMobileHamburger');
        const toggleSidebarMobileClose = document.getElementById('toggleSidebarMobileClose');

        toggleSidebarMobileEl.addEventListener('click', () => {
            toggleSidebarMobile(sidebar, toggleSidebarMobileHamburger, toggleSidebarMobileClose);
        });
    }

</x-splade-script>

<aside id="sidebar" class="fixed top-0 left-0 z-10 flex flex-col flex-shrink-0 hidden w-64 bg-white border-r border-gray-200 h-full pt-16 font-normal duration-75 lg:flex transition-width" aria-label="Sidebar">
    <div class="relative flex flex-col flex-1 min-h-0 pt-0 ">
        <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200">
                @role('super-admin')
                    <x-layouts.sidebar.super-admin />
                @endrole
                <div class="pt-4 space-y-2">
                    <a href="#" target="_blank" class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group hover:border hover:border-gray-500 border border-transparent">
                        @svg('carbon-information', 'text-gray-600 h-6 w-6')
                        <span class="ml-3" sidebar-toggle-item="">Bantuan</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</aside>
