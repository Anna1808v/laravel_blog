  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
    <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="{{ route('admin.main.index') }}" class="nav-link">
              <i class="fa nav-icon fa-duotone fa-house"></i>
              <p>
                Главная
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.user.index') }}" class="nav-link">
              <i class="fa nav-icon fa-duotone fa-users"></i>
              <p>
                Пользователи
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.post.index') }}" class="nav-link">
              <i class="fa nav-icon fa-solid fa-bug"></i>
              <p>
                Посты
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.category.index') }}" class="nav-link">
              <i class="fa nav-icon fa-solid fa-ghost"></i>
              <p>
                Категории
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.tag.index') }}" class="nav-link">
              <i class="fa nav-icon fa-solid fa-hippo"></i>
              <p>
                Тэги
              </p>
            </a>
          </li>
          
        </ul>
    </div>
    <!-- /.sidebar -->
  </aside>