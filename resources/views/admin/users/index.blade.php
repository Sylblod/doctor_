<x-admin-layout
:breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Usuarios',
    ],
]">

    <div class="flex justify-end mb-4">
        <x-wire-button blue href="{{ route('admin.users.create') }}">
            <i class="fa-solid fa-plus"></i>
            Nuevo
        </x-wire-button>
    </div>

    @livewire('admin.datatables.user-table')
    

   

</x-admin-layout>