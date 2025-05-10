<aside class="main-sidebar sidebar-dark-primary elevation-4">
  
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ $kampus }}</span>
    </a>

  
    <div class="sidebar">
       
        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                


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

                
                
                <li class="nav-item">
                    <a href="/dosen" class="nav-link">
                        <i class="bi bi-person-square"></i>
                        <p>{{ $dosen }}</p>
                    </a>
                </li>
                
                
                <li class="nav-item">
                    <a href="/mhs" class="nav-link">
                        <i class="bi bi-person-vcard-fill"></i>
                        <p>{{ $mahasiswa }}</p>
                    </a>
                </li>
                
                
                <li class="nav-item">
                    <a href="/materi" class="nav-link">
                        <i class="bi bi-book"></i>
                        <p>{{ $materi }}</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>


