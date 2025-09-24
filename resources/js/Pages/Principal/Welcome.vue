<template>
<!-- Page wrapper starts -->
    <div class="page-wrapper">

      <!-- Main container starts -->
      <div class="main-container">

        <!-- Sidebar wrapper starts -->
        <nav id="sidebar" class="sidebar-wrapper">

          <!-- App brand starts -->
          <div class="app-brand p-3 mb-3">
            <a href="/inventario">
              <img src="/images/logo.svg" class="logo" alt="Seven Bootstrap Template" />
            </a>
          </div>
          <!-- App brand ends -->

          <!-- Sidebar menu starts -->
          <div class="sidebarMenuScroll">
            <ul class="sidebar-menu">
              <li class="active current-page">
                <a href="/inventario">
                  <i class="bi bi-laptop"></i>
                  <span class="menu-text">Principal</span>
                </a>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-stickies"></i>
                  <span class="menu-text">Inventariado</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="/producto">Producto</a>
                  </li>
                  <li>
                    <a href="/inventario">Inventario</a>
                  </li>
                  <li>
                    <a href="/historial_inventario">Historial inventario</a>
                  </li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-ui-checks-grid"></i>
                  <span class="menu-text">Administración</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="/clientes">Clientes</a>
                  </li>
                  <li>
                    <a href="/usuarios">Usuarios</a>
                  </li>
                  <li>
                    <a href="/metodo_pago">Métodos de pago</a>
                  </li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-laptop"></i>
                  <span class="menu-text">Catalogo</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="/catalogo">Catalogo</a>
                  </li>
                  <li>
                    <a href="/categorias_catalogo">Categorias</a>
                  </li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-window-sidebar"></i>
                  <span class="menu-text">Ventas</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="/ventas">Ventas</a>
                  </li>
                  <li>
                    <a href="/crear_venta">Generar venta</a>
                  </li>
                  <li>
                    <a href="/abonos">Abonos</a>
                  </li>
                  <li>
                    <a href="/entradas_salidas">Entradas y salidas de efectivo</a>
                  </li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-upc-scan"></i>
                  <span class="menu-text">Promociones</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="/promociones">Promociones</a>
                  </li>
                  <li>
                    <a href="/crear_promocion">Crear promocion</a>
                  </li>

                </ul>
              </li>
            </ul>
          </div>
          <!-- Sidebar menu ends -->

          <!-- Sidebar settings starts -->

          <!-- Sidebar settings ends -->

        </nav>
        <!-- Sidebar wrapper ends -->

        <!-- App container starts -->
        <div class="app-container">

          <!-- App header starts -->
          <div class="app-header d-flex align-items-center">

            <!-- Toggle buttons starts -->
            <div class="d-flex">
              <button class="pin-sidebar">
                <i class="bi bi-list lh-1"></i>
              </button>
            </div>
            <!-- Toggle buttons ends -->

            <!-- App brand sm starts -->
            <div class="app-brand-sm d-lg-none d-flex">
              <a href="/home">
                <img src="/images/logo-sm.svg" class="logo" alt="Seven Bootstrap Template" />
              </a>
            </div>
            <!-- App brand sm ends -->

            <!-- Breadcrumb starts -->
            <div class="d-flex align-items-center ms-3">
              <h5 class="m-0">Lavanderia SMA</h5>
            </div>
            <!-- Breadcrumb ends -->

            <!-- App header actions starts -->
            <div class="header-actions">

              <!-- Search container starts -->

              <!-- Search container ends -->

              <!-- Header list starts -->

              <!-- Header list ends -->

              <!-- User setting starts -->
              <div class="dropdown ms-4">
                <a id="userSettings" class="dropdown-toggle d-flex py-2 align-items-center" href="#!" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="/images/user3.png" class="rounded-4 img-3x" alt="Bootstrap Gallery" />
                  <div class="ms-2 text-truncate d-lg-flex flex-column d-none">
                    <p class="text-truncate m-0">Maximiliano</p>
                    <span class="small opacity-50 lh-1">Admin</span>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end shadow-lg">

                  <a class="dropdown-item d-flex align-items-center" href="reset-password.html"><i
                      class="bi bi-slash-circle fs-5 me-2"></i>Cambiar contraseña</a>
                  <div class="mx-3 mt-2 d-grid">
                    <a href="/login" class="btn btn-primary">Salir</a>
                  </div>
                </div>
              </div>
              <!-- User setting ends -->

              <!-- Toggle sidebar starts -->
              <div class="d-flex">
                <button class="toggle-sidebar">
                  <i class="bi bi-list lh-1"></i>
                </button>
              </div>
              <!-- Toggle sidebar ends -->

            </div>
            <!-- App header actions ends -->

          </div>
          <!-- App header ends -->

          <!-- App body starts -->
          <div class="app-body">
                <!--DE AQUI SE HACE TODO LA HEREDAR-->
                <slot></slot>
          </div>
          <!-- App body ends -->

          <!-- App footer starts -->
          <div class="app-footer">
            <span class="small">© JDevs 2025</span>
          </div>
          <!-- App footer ends -->

        </div>
        <!-- App container ends -->

      </div>
      <!-- Main container ends -->

    </div>
</template>
<script setup>

</script>

<style scoped>

</style>
