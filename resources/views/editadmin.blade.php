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
  class="light-style customizer-hide"
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

    <title>Register Basic - Pages | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

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
    <!-- Page -->
    <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                {{-- <a href="index.html" class="app-brand-link gap-2"> --}}
                  
                  
<span class="app-brand-text demo text-body fw-bolder">Edit Admin</span>
                </a>
              </div>
              <!-- /Logo -->

              <form id="formAuthentication" action="{{ url('aedit/' . $editadmin->AdminID) }}" class="mb-3"  method="POST">
                @csrf
                <div class="row">
                  <div class="col mb-3">
                    <label for="Nama" class="form-label">Nama</label>
                    <input
                      type="text"
                      id="Nama"
                      name="Nama"
                      class="form-control"
                      value="{{ $editadmin->Nama }}"
                      {{-- placeholder="Enter Name" --}}
                    />
                  </div>
                </div>
                  <div class="col mb-3">
                    <label for="Alamat" class="form-label">Alamat</label>
                    <input
                      type="text"
                      id="Alamat"
                      name="Alamat"
                      class="form-control"
                      value="{{ $editadmin->Alamat }}"
                      {{-- placeholder="Enter Name" --}}
                    />
                  </div>
                  <div class="col mb-3">
                    <label for="Username" class="form-label">Username</label>
                    <input
                      type="text"
                      id="Username"
                      name="Username"
                      class="form-control"
                      value="{{ $editadmin->Username }}"
                      {{-- placeholder="Enter Name" --}}
                    />
                  </div>
                  <div class="col mb-3">
                    <label for="Password" class="form-label">Password</label>
                    <input
                      type="text"
                      id="Password"
                      name="Password"
                      class="form-control"
                      value="{{ $editadmin->Password }}"
                      {{-- placeholder="Enter Name" --}}
                    />
                  </div>
                  <div class="col mb-3">
                    <label for="NomorTelepon" class="form-label">Nomor Telepon</label>
                    <input
                      type="text    "
                      id="NomorTelepon"
                      name="NomorTelepon"
                      class="form-control"
                      value="{{ $editadmin->NomorTelepon }}"
                      {{-- placeholder="Enter Name" --}}
                    />
                  </div>
                  <div class="col mb-3">
                    <label for="exampleFormControlSelect1" class="form-label">Akses</label>
                    <select class="form-select" id="exampleFormControlSelect1" name="Akses" value="{{$editadmin->Akses}}">
                        <option value="Admin">Admin</option>    
                        <option value="Kasir">Kasir</option>
                    </select>
                  </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                  
                    <button class="btn btn-secondary " type="submit">Simpan</button>
                    <button class="btn btn-secondary"><a href="{{ url('admin') }}">Kembali</a></button>

                </div>
              </form>

             
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    
   

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
