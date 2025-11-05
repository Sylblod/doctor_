<x-admin-layout title="Roles | Simiflig " :breadcrumbs="[
    [
        'name' => 'Dashboard',  // <-- Corregido
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Roles',  // <-- Corregido
        'href' => route('admin.roles.index'),
    ],
    [
        'name' => 'Editar',
    ],
]">


</x-admin-layout>