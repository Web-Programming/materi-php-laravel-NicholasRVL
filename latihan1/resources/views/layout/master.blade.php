<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AdminLTE Laravel</title>

    <!-- Font Awesome -->
<!--begin::Fonts-->
<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
crossorigin="anonymous"
/>
<!--end::Fonts-->
<!--begin::Third Party Plugin(OverlayScrollbars)-->
<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
crossorigin="anonymous"
/>
<!--end::Third Party Plugin(OverlayScrollbars)-->
<!--begin::Third Party Plugin(Bootstrap Icons)-->
<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
crossorigin="anonymous"
/>
<!--end::Third Party Plugin(Bootstrap Icons)-->
<!--begin::Required Plugin(AdminLTE)-->
<link rel="stylesheet" href="../../dist/css/adminlte.css" />
<!--end::Required Plugin(AdminLTE)-->
<!-- apexcharts -->
<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
crossorigin="anonymous"
/>
<!-- jsvectormap -->
<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4="
crossorigin="anonymous"
/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <!-- AdminLTE CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">

    {{-- Header --}}
    @include('layout.header')

    {{-- Sidebar --}}
    @include('layout.sidebar')

    {{-- Main Content --}}
    <div class="content-wrapper">
        @yield('content')
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
<!-- overlayScrollbars -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>
