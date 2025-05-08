<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ $kampus }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                <!-- Dashboard -->


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="bi bi-briefcase-fill"></i>
                      <p>
                        {{ $fakultas }}
                        <i class="right fas fa-angle-left"></i> 
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>{{ $fkk }}</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>{{ $fkbe }}</p>
                        </a>
                      </li>
                    </ul>
                  </li>

                
                <!-- Town Connect -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-person-square"></i>
                        <p>{{ $dosen }}</p>
                    </a>
                </li>
                
                <!-- Legend Contact -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-person-vcard-fill"></i>
                        <p>{{ $mahasiswa }}</p>
                    </a>
                </li>
                
                <!-- Lit Forum -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-book"></i>
                        <p>{{ $materi }}</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>


