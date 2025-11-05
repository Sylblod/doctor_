<x-admin-layout
:breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Roles',
    ],
]">

    <div class="flex justify-end mb-4">
        <x-wire-button blue href="{{ route('admin.roles.create') }}">
            <i class="fa-solid fa-plus"></i>
            Nuevo
        </x-wire-button>
    </div>

    @livewire('admin.datatables.role-table')

</x-admin-layout>