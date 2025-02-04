<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="/">
            <i class="fas fa-home"></i>
            <span>Inicio</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Paginas
    </div>

    <!-- Nav Item - Units -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('units') ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Unidades</span></a>
    </li>

    <!-- Nav Item - Category -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('categories') ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Categorias</span></a>
    </li>


    <!-- Nav Item - Products -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('products') ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Productos</span></a>
    </li>

    <!-- Nav Item - Clients -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('clients') ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Clientes</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Ventas</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones:</h6>
                <a class="collapse-item" href="buttons.html">Crear</a>
                <a class="collapse-item" href="cards.html">Administrar</a>
                <a class="collapse-item" href="cards.html">Reportes</a>
            </div>
        </div>
    </li>

        <!-- Nav Item - Purchases Collapse Menu -->
        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePurchases" aria-expanded="false" aria-controls="collapsePurchases">
            <i class="fas fa-fw fa-folder"></i>
            <span>Compras</span>
        </a>
        <div id="collapsePurchases" class="collapse" aria-labelledby="headingPurchases" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones:</h6>
                <a class="collapse-item" href="<?= base_url('purchases') ?>">Crear</a>
                <a class="collapse-item" href="<?= base_url('settings') ?>">Administrar</a>
                <a class="collapse-item" href="<?= base_url('settings') ?>">Reportes</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Administración</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Opciones:</h6>
                <a class="collapse-item" href="<?= base_url('settings') ?>">Configuración</a>
                <a class="collapse-item" href="<?= base_url('users') ?>">Usuarios</a>
                <a class="collapse-item" href="<?= base_url('rols') ?>">Roles</a>
                <a class="collapse-item" href="<?= base_url('cash') ?>">Cajas</a>
                <a class="collapse-item" href="<?= base_url('logs') ?>">Logs</a>
                <a class="collapse-item" href="<?= base_url('backups') ?>">Respaldo</a>
            </div>
        </div>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->