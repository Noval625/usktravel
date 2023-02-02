<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('admin') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link "  href="{{ route('destinate.index') }}">
          <i class="bi bi-menu-button-wide"></i><span>Destination</span><i class=""></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="/order">
          <i class="bi bi-journal-text"></i><span>Order</span><i class=""></i>
        </a>
      </li>
    </ul>

  </aside>
