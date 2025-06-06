<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

 
<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
crossorigin="anonymous"
/>

<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
crossorigin="anonymous"
/>

<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
crossorigin="anonymous"
/>

<link rel="stylesheet" href="../../dist/css/adminlte.css" />

<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
crossorigin="anonymous"
/>

<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4="
crossorigin="anonymous"
/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

</head>




<!--begin::Header-->
<nav class="main-header navbar navbar-expand navbar-dark bg-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
          <i class="fas fa-bars"></i>
        </a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
  
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
      </li>
  
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- Chat items here -->
          <a href="#" class="dropdown-item">
            <div class="media">
              <img src="img/user2-160x160.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <!-- More chat items... -->
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
  
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <!-- More notif items... -->
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
  
      <!-- Fullscreen -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
  
      <!-- User Menu -->
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="img/luffy siluet.png" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline">{{ auth()->user()->name }}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <li class="user-header bg-dark">
            <img src="img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            <p>
              Nicholas Raphael - Web Developer
              <small>Member since Nov. 2023</small>
            </p>
          </li>
          <li class="user-footer">
            <a href="#" class="btn btn-default btn-flat">Profile</a>
            <a href="#" class="btn btn-default btn-flat float-right">Sign out</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!--end::Header-->


<aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed">
  
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
                        <a href="/prodi1" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>{{ $fkk }}</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/prodi2" class="nav-link">
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

          <div class="m-2" style="position: absolute; bottom: 0; left: 70px;"  >
              <form action="{{ url('logout') }}" method="POST" >

                @csrf

              <button type="submit" class="btn btn-secondary rounded">Logout</button>

                </form>
          </div>
</aside>


<body class="hold-transition sidebar-mini">

<div class="wrapper">


 <div class="wrapper">
    <div class="content-wrapper">
      @yield('content')
    </div>
  </div>

        

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/js/jquery.overlayScrollbars.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"></script>


<script>
$(function() {
    // Sales Chart
    var salesChartCanvas = document.getElementById('sales-chart').getContext('2d');
    var salesChartData = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
            {
                label: 'Informatika',
                backgroundColor: '#00a65a',
                borderColor: '#00a65a',
                pointRadius: false,
                pointColor: '#00a65a',
                pointStrokeColor: '#00a65a',
                pointHighlightFill: '#fff',
                pointHighlightStroke: '#00a65a',
                data: [28, 48, 40, 19, 86, 27, 90]
            },
            {
                label: 'Management Informatika',
                backgroundColor: 'rgba(210, 214, 222, 1)',
                borderColor: 'rgba(210, 214, 222, 1)',
                pointRadius: false,
                pointColor: 'rgba(210, 214, 222, 1)',
                pointStrokeColor: '#c1c7d1',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(220,220,220,1)',
                data: [65, 59, 80, 81, 56, 55, 40]
            },
            {
                label: 'System Informasi',
                backgroundColor: '#f56954',
                borderColor: '#f56954',
                pointRadius: false,
                pointColor: 'rgba(210, 214, 222, 1)',
                pointStrokeColor: '#c1c7d1',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(220,220,220,1)',
                data: [88, 59, 30, 91, 86, 85, 60]
            },
            {
                label: 'Teknik Elektro',
                backgroundColor: '#3c8dbc',
                borderColor: '#3c8dbc',
                pointRadius: false,
                pointColor: 'rgba(210, 214, 222, 1)',
                pointStrokeColor: '#c1c7d1',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(220,220,220,1)',
                data: [58, 59, 40, 31, 56, 75, 50]
            },
            {
                label: 'Akutansi',
                backgroundColor: '#f39c12',
                borderColor: '#f39c12',
                pointRadius: false,
                pointColor: 'rgba(210, 214, 222, 1)',
                pointStrokeColor: '#c1c7d1',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(220,220,220,1)',
                data: [70, 59, 80, 91, 76, 75, 80]
            },
            {
                label: 'Management',
                backgroundColor: '#f39c12',
                borderColor: '#f39c12',
                pointRadius: false,
                pointColor: 'rgba(210, 214, 222, 1)',
                pointStrokeColor: '#c1c7d1',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(220,220,220,1)',
                data: [90, 60, 80, 91, 86, 95, 80]
            }

        ]
    };

    var salesChartOptions = {
        maintainAspectRatio: false,
        responsive: true,
        legend: {
            display: false
        },
        scales: {
            xAxes: [{
                gridLines: {
                    display: false
                }
            }],
            yAxes: [{
                gridLines: {
                    display: false
                }
            }]
        }
    };

    new Chart(salesChartCanvas, {
        type: 'line',
        data: salesChartData,
        options: salesChartOptions
    });

    // Pie Chart
    var pieChartCanvas = document.getElementById('pie-chart').getContext('2d');
    var pieData = {
        labels: [
            'System Informasi',
            'Informatika',
            'Akuntansi',
            'Management',
            'Teknik Elektro',
            'Management Informatika'
        ],
        datasets: [{
            data: [700,500,400,600,300,100],
            backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de']
        }]
    };

    var pieOptions = {
        maintainAspectRatio: false,
        responsive: true,
    };

    new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions
    });

    // World Map
    $('#world-map').vectorMap({
        map: 'world_en',
        backgroundColor: 'transparent',
        regionStyle: {
            initial: {
                fill: 'rgba(255, 255, 255, 0.7)',
                stroke: 'rgba(0,0,0,.2)',
                "stroke-width": 1,
                "stroke-opacity": 1
            }
        },
        series: {
            regions: [{
                values: {
                    "US": 498,
                    "SA": 200,
                    "DE": 420,
                    "FR": 380,
                    "IN": 350,
                    "GB": 320,
                    "BR": 290
                },
                scale: ['#ffffff', '#0154ad'],
                normalizeFunction: 'polynomial'
            }]
        },
        onRegionLabelShow: function(e, el, code) {
            if (typeof countries[code] != 'undefined') {
                el.html(el.html() + ': ' + countries[code] + ' visitors');
            }
        }
    });
});
</script>


</body>
</html>
