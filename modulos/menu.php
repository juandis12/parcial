

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
          <input type="hidden" id="usu_idx" value="<?php echo $_SESSION["id"] ?>">
          <a href="#" class="d-block"> <?php echo $_SESSION["nombre"]?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
            <i class='bx bx-cool'></i>
              <p>
                Inicio
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
            <i class='bx bx-cog'></i>
              <p>
                Administración
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
            <i class='bx bx-info-circle'></i>
              <p>
                Informacion
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
            <i class='bx bx-expand'></i>
              <p>
                Experiencia
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
            <i class='bx bx-food-menu'></i>
              <p>
                Menu
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
            <i class='bx bx-group'></i>
              <p>
                Social Media
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
            <i class='bx bx-briefcase'></i>
              <p>
                Trabajos
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php BASE_URL;?>logout.php" class="nav-link">
            <i class='bx bx-left-arrow-alt'></i>
              <p>
                Salir
                
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>