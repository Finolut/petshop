

<nav class="sidebar-nav">
  <ul id="sidebarnav" class="mb-0">
      <!-- Home Section -->
      <li class="nav-small-cap">
          <span class="hide-menu">Home</span>
      </li>
      <li class="sidebar-item">
          <a class="sidebar-link sidebar-link " href="{{ route('landing') }}" aria-expanded="false">
              <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                  <iconify-icon icon="solar:screencast-2-line-duotone" class="fs-6"></iconify-icon>
              </span>
              <span class="hide-menu ps-1">Dashboard</span>
          </a>
      </li>

      <!-- Master Section -->
      <li class="nav-small-cap">
          <span class="hide-menu">Master</span>
      </li>
      <li class="sidebar-item">
          <a class="sidebar-link has-arrow " href="#" aria-expanded="false">
              <span class="aside-icon p-2 bg-success-subtle rounded-1">
                  <iconify-icon icon="solar:smart-speaker-minimalistic-line-duotone" class="fs-6"></iconify-icon>
              </span>
              <span class="hide-menu ps-1">Data Master</span>
          </a>
          <ul aria-expanded="false" class="collapse first-level">
    
            <li class="sidebar-item">
                <a href="{{ route('products.bukti') }}" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">email</span>
                </a>
            </li>
              <li class="sidebar-item">
                  <a href="{{ route('role.index') }}" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu">Role User</span>
                  </a>
              </li>
              <li class="sidebar-item">
                  <a href="{{ route('users.index') }}" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu">User</span>
                  </a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('reservation.index') }}" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Reservasi user</span>
                </a>
            </li>            
            
              <li class="sidebar-item">
                <a href="{{ route('reservasi.index') }}" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Reservasi admin</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('penitipan.index') }}" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Database Kandang</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('kandang.index') }}" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Kandang</span>
                </a>
            </li>  
  </ul>
</nav>
