<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}" />
  </head>
  <body>
    
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white mr-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_navbar.html -->
      <nav style="padding-bottom: 5px" class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <a style="padding-bottom:0" class="navbar-brand brand-logo" href="index.html"><img style="object-fit: contain;width:100%;height:70px;" src="{{asset('images/logo-admin.png')}}" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <div class="welcome" style="display:flex;flex-direction:column;justify-content:flex-end;">
            <p style="margin-bottom: 0;color:#3e4b5b;font-size:18px">Xin chào, Tên người dùng</p>
            <span style="margin-bottom: 0;color:#5e666f;font-size:14px">Chào mừng bạn đã trở lại!</span>
          </div>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="{{asset('')}}" alt="profile"/>
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">David Grey. H</span>
                  <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="fa-solid fa-square-check" style="font-size: 1.125rem;margin-left: auto;color:#1bcfb4;"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <span style="font-size: 15px;text-transform:capitalize" class="menu-title">Danh mục</span>
                <i style="margin-left: auto;font-size:18px" class="fa-solid fa-layer-group"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <span style="font-size: 15px;text-transform:capitalize" class="menu-title">Phim</span>
                <i style="margin-left: auto;font-size:18px" class="fa-solid fa-clapperboard"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <span style="font-size: 15px;text-transform:capitalize" class="menu-title">Bình luận</span>
                <i style="margin-left: auto;font-size:18px" class="fa-solid fa-comments"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <span style="font-size: 15px;text-transform:capitalize" class="menu-title">Lọc bình luận</span>
                <i style="margin-left: auto;font-size:18px" class="fa-solid fa-filter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <span style="font-size: 15px;text-transform:capitalize" class="menu-title">Người dùng</span>
                <i style="margin-left: auto;font-size:18px" class="fa-solid fa-users"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <span style="font-size: 15px;text-transform:capitalize" class="menu-title">Bản quyền</span>
                <i style="margin-left: auto;font-size:18px" class="fa-solid fa-copyright"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <span style="font-size: 15px;text-transform:capitalize" class="menu-title">Slides</span>
                <i style="margin-left: auto;font-size:18px" class="fa-solid fa-photo-film"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span style="font-size: 15px;text-transform:capitalize" class="menu-title">Thống Kê</span>
                <i style="margin-left: auto;font-size:18px" class="fa-solid fa-chart-pie"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item" style="color: #888888;padding:12px 0px;font-size:14px;width:100%">
                    <a style="color: #888888;text-decoration:none" href="pages/ui-features/buttons.html">
                      <i style="margin-right:20px" class="fa-solid fa-heart"></i>
                      Lượt thích
                    </a>
                  </li>
                  <li class="nav-item" style="color: #888888;padding:12px 0px;font-size:14px;width:100%">
                    <a style="color: #888888;text-decoration:none" href="pages/ui-features/buttons.html">
                      <i style="margin-right:20px" class="fa-solid fa-users-viewfinder"></i>
                      Lượt xem
                    </a>
                  </li>
                  <li class="nav-item" style="color: #888888;padding:12px 0px;font-size:14px;width:100%">
                    <a style="color: #888888;text-decoration:none" href="pages/ui-features/buttons.html">
                      <i style="margin-right:20px" class="fa-solid fa-users"></i>
                      Tài khoản
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('content')
          </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>