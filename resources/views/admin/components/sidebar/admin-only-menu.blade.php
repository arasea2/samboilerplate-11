{{-- ROLE SPECIFIC MENU -- ADMIN ONLY --}}
@if (auth()->user()->hasRole('ROLE_ADMIN'))
{{-- EXAMPLE MENU HEADER FOR GROUPING --}}
@include('admin.components.sidebar.menu-header', ['textMenuHeader' => 'Admin Menu'])
{{-- ADMIN ONLY MENU --}}
@include('admin.components.sidebar.item', [
    'menuId' => 'menu-user-pages',
    'menuText' => 'Program Settings',
    'menuUrl' => url('/admin/configuration'),
    'menuIcon' => 'bx bx-cog',
    'subMenuData' => null,
])

@include('admin.components.sidebar.item', [
    'menuId' => 'menu-operator-pages',
    'menuText' => 'User Management',
    'menuUrl' => url('/admin/user'),
    'menuIcon' => 'bx bx-group',
    'subMenuData' => null,
])
@endif
