<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Tambah Pelanggan</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="45 " fill="currentColor" class="bi bi-bag-dash-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0M6 9.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1z"/>
              </svg>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">ALFAMARET</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="{{url('dashboard')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Data</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{url('produk')}}" class="menu-link">
                    <div data-i18n="Without menu">Data Produk</div>
                  </a>
                </li>
                {{-- <li class="menu-item">
                  <a href="{{url('datakategori')}}" class="menu-link">
                    <div data-i18n="Without navbar">Data Kategori Buku</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{url('datarelasi')}}" class="menu-link">
                    <div data-i18n="Container">Data Kategori Relasi</div>
                  </a>
                </li> --}}
                
              </ul>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Data Account Admin</span>
            </li>
            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Account Settings</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{url('pelanggan')}}" class="menu-link">
                    <div data-i18n="Account">Data Pelanggan</div>
                  </a>
                </li>
                <li class="menu-item active">
                  <a href="{{url('tambahpelanggan')}}" class="menu-link">
                    <div data-i18n="Notifications">Tambah Pelanggan</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{url('admin')}}" class="menu-link">
                    <div data-i18n="Connections">Data Admin</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
            <!-- Cards -->
            <li class="menu-item">
              <a href="{{url('penjualan')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Penjualan</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
{{-- <div class="container-fluid flex-grow-1 container-p-y"> --}}
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Tambah Pelanggan /</span> Tambah
              </h4>

              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('pelanggan')}}"
                        ><i class="bx bx-user me-1"></i> Data Pelanggan</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="javascript:void(0);"
                        ><i class="bx bx-bell me-1"></i> Tambah Pelanggan</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('admin')}}"
                        ><i class="bx bx-link-alt me-1"></i> Data Admin</a
                      >
                    </li>
                  </ul>
        <div class="card mb-4">
          <div class="card">
                  <!-- /Account -->
          <div class="card-body">
            <form id="formAccountSettings" method="POST">
              @csrf
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="NamaPelanggan" class="form-label">Nama Pelanggan</label>
                  <input
                    class="form-control"
                    type="text"
                    id="NamaPelanggan"
                    name="NamaPelanggan"
                    placeholder="Masukkan Nama Pelanggan"
                    autofocus
                  />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="Alamat" class="form-label">Alamat</label>
                  <input class="form-control" type="text" name="Alamat" id="Alamat" placeholder="Masukkan Alamat" />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="NomorTelepon" class="form-label">No Telepon</label>
                  <input
                    class="form-control"
                    type="text"
                    id="NomorTelepon"
                    name="NomorTelepon"
                    {{-- value="john.doe@example.com" --}}
                    placeholder="Masukkan Nomor Telepon"
                  />
                </div>
                {{-- <div class="mb-3 col-md-6">
                  <label for="Level" class="form-label">Level</label>
                  <select id="Level" class="select2 form-select">
                    <option value="Admin">Admin</option>
                    <option value="Petugas">Petugas</option>
                  </select>
                </div> --}}
                {{-- <div class="mb-3 col-md-6">
                  <label for="timeZones" class="form-label">Timezone</label>
                  <select id="timeZones" class="select2 form-select">
                    <option value="">Select Timezone</option>
                    <option value="-12">(GMT-12:00) International Date Line West</option>
                    
                  </select> --}}
                {{-- </div>
                <div class="mb-3 col-md-6">
                  <label for="currency" class="form-label">Currency</label>
                  <select id="currency" class="select2 form-select">
                    <option value="">Select Currency</option>
                    <option value="usd">USD</option>
                    <option value="euro">Euro</option>
                    <option value="pound">Pound</option>
                    <option value="bitcoin">Bitcoin</option>
                  </select>
                </div>
              </div> --}}
              <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2">Simpan</button>
                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
              </div>
            </form>
          </div>
          <!-- /Account -->
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

             <!-- Footer -->
             <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">Wildan Saputra</a>
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>