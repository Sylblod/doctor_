<x-admin-layout
:breadcrumbs="[
    [
        'name' => 'Dashboard',  // <-- Corregido
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Roles',  // <-- Corregido
        'href' => route('layouts.admin.roles.index'),
    ],
    [
        'name' => 'Editar',
    ],
]">
</x-admin-layout>