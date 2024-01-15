<ul class="pb-2 space-y-2">
    <li>
        <Link href="/dashboard" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group hover:border hover:border-gray-500 border border-transparent">
            @svg('carbon-dashboard', 'text-gray-600 h-6 w-6')
            <span class="ml-3" sidebar-toggle-item="">
                Dashboard
            </span>
        </Link>
    </li>
    <li class="pt-4 space-y-2"></li>
    <li>
        <Link href="divisi" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group hover:border hover:border-gray-500 border border-transparent">
            @svg('carbon-send-alt', 'text-gray-600 h-6 w-6')
            <span class="ml-3" sidebar-toggle-item="">
                Pemberitahuan
            </span>
        </Link>
    </li>
    <li>
        <x-link-item :href="route('superadmin.divisi.index')" :active="request()->routeIs('superadmin.divisi.index')">
            @svg('carbon-chart-point', 'text-gray-600 h-6 w-6')
            <span class="ml-3">Divisi</span>
        </x-link-item>
    </li>
    <li>
        <x-link-item :href="route('superadmin.unit.index')" :active="request()->routeIs('superadmin.unit.index')">
            @svg('carbon-chart-scatter', 'text-gray-600 h-6 w-6')
            <span class="ml-3">Unit</span>
        </x-link-item>

    </li>
    <li>
        <x-link-item :href="route('superadmin.level.index')" :active="request()->routeIs('superadmin.level.index')">
            @svg('carbon-distribute-horizontal-center', 'text-gray-600 h-6 w-6')
            <span class="ml-3">Level</span>
        </x-link-item>
    </li>
    <li>
        <x-link-item :href="route('superadmin.coa.index')" :active="request()->routeIs('superadmin.coa.index')">
            @svg('carbon-calculator-check', 'text-gray-600 h-6 w-6')
            <span class="ml-3">COA</span>
        </x-link-item>
    </li>
    <li>
        <x-link-item :href="route('superadmin.roles.index')" :active="request()->routeIs('superadmin.roles.index')">
            @svg('carbon-network-2', 'text-gray-600 h-6 w-6')
            <span class="ml-3">Roles</span>
        </x-link-item>
    </li>
    <li>
        <x-link-item :href="route('superadmin.users.index')" :active="request()->routeIs('superadmin.users.index')">
            @svg('carbon-user-multiple', 'text-gray-600 h-6 w-6')
            <span class="ml-3">Users</span>
        </x-link-item>
    </li>
    <li>
        <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-layouts" data-collapse-toggle="dropdown-layouts">
            @svg('carbon-report', 'text-gray-600 h-6 w-6')
            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item="">Report</span>
            @svg('carbon-chevron-down', 'text-gray-600 h-6 w-6')
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
