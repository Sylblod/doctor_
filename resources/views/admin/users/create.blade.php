<x-admin-layout title="Usuarios | Simiflig " :breadcrumbs="[
    [
        'name' => 'Dashboard',  // <-- Corregido
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Roles',  // <-- Corregido
        'href' => route('admin.users.index'),
    ],
    [
        'name' => 'Nuevo',
    ],
]">
</x-admin-layout>