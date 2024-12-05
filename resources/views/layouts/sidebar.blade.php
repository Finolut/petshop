

<nav class="sidebar-nav">
  <ul id="sidebarnav" class="mb-0">
      <!-- Home Section -->
      <li class="nav-small-cap">
          <span class="hide-menu">Home</span>
      </li>
      <li class="sidebar-item">
          <a class="sidebar-link sidebar-link " href="{{ route('dashboard') }}" aria-expanded="false">
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
                  <a href="{{ route('vendor.index') }}" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu">Vendor</span>
                  </a>
              </li>
              <li class="sidebar-item">
                  <a href="{{ route('satuan.index') }}" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu">Satuan</span>
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
                  <a href="{{ route('barang.index') }}" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu">Barang</span>
                  </a>
              </li>
              <li class="sidebar-item">
                  <a href="{{ route('marginpenjualan.index') }}" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu">Margin Penjualan</span>
                  </a>
              </li>
          </ul>
      </li>

      <!-- Transaksi Section -->
      <li class="nav-small-cap">
          <span class="hide-menu">Transaksi</span>
      </li>
      <li class="sidebar-item">
          <a class="sidebar-link sidebar-link " href="{{ route('pengadaan.index') }}" aria-expanded="false">
              <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                  <iconify-icon icon="solar:screencast-2-line-duotone" class="fs-6"></iconify-icon>
              </span>
              <span class="hide-menu ps-1">Pengadaan</span>
          </a>
      </li>
      <li class="sidebar-item">
          <a class="sidebar-link sidebar-link " href="{{ route('penerimaan.index') }}" aria-expanded="false">
              <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                  <iconify-icon icon="solar:screencast-2-line-duotone" class="fs-6"></iconify-icon>
              </span>
              <span class="hide-menu ps-1">Penerimaan</span>
          </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link sidebar-link " href="{{ route('pengadaan.index') }}" aria-expanded="false">
            <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                <iconify-icon icon="solar:screencast-2-line-duotone" class="fs-6"></iconify-icon>
            </span>
            <span class="hide-menu ps-1">Pengembalian</span>
        </a>
    </li>
  </ul>
</nav>
