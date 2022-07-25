<?php
session_start();
if (!isset($_COOKIE["username"]) && !isset($_COOKIE["password"])) {
  if (!isset($_SESSION["username"])) {
    header("location: " . ('../../login/pages/index.php'));
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Validation Form</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../../../index.php" class="nav-link">Home</a>
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
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
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
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../../../index.php" class="brand-link">
        <img src="../../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="../../../index.php" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Trang Chủ
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Dữ liệu
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../product/pages/index.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sản phẩm</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../orderDetail/pages/index.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Đơn hàng</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="../../login/script/authenticate.php?logout=true" class="nav-link">
                <i class="nav-icon fas fa-right-from-bracket"></i>
                <p>
                  Đăng xuất
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Validation</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Validation</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->

      <?php
      require '../scripts/crui.php'
      ?>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm" method="POST"  action="../scripts/crui.php">
                  <input value=<?= empty(trim($productId)) ? "POST" : "PUT" ?> name="method" type="hidden">
                  <input value="<?= $orderId ?>" name="orderId" type="hidden">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Sản phẩm</label>
                      <!-- disabled="<?php empty(trim($productId)) ? false : true ?>" -->
                      <select class="form-control select2" value="<?= $productId ?>" name="productId" onchange=updateSize()>
                        <option disabled selected>Sản phẩm</option>
                        <?php
                        require '../../config.php';
                        $sql = 'SELECT DISTINCT nameProduct, idCategory_product FROM products';
                        if ($result = mysqli_query($con, $sql)) {
                          while ($row = mysqli_fetch_array($result)) {
                            echo '<option value = "' . $row[1] . '" ' . ($row[1] == $productId ? 'selected="selected"' : '') . '>' . $row[0] . '</option>';
                          }
                          mysqli_free_result($result);
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Size</label>
                      <select class="form-control select2" value="<?= $size ?>" name="size">
                        <option disabled selected>Size</option>
                        <?php
                        require '../../config.php';
                        $sql = 'SELECT * FROM products WHERE idCategory_product = "' .$productId. '"';
                        if ($result = mysqli_query($con, $sql)) {
                          if ($row = mysqli_fetch_array($result)) {
                            if($row['size1'] != '') {
                              echo '<option value = "' . $row['size1'] . '" ' . ($row['size1'] == $size ? 'selected="selected"' : '') . '>' . $row['size1'] . '</option>';
                            }
                            if($row['size2'] != '') {
                              echo '<option value = "' . $row['size2'] . '" ' . ($row['size2'] == $size ? 'selected="selected"' : '') . '>' . $row['size2'] . '</option>';
                            }                          
                            if($row['size3'] != '') {
                              echo '<option value = "' . $row['size3'] . '" ' . ($row['size3'] == $size ? 'selected="selected"' : '') . '>' . $row['size3'] . '</option>';
                            }                          
                            if($row['size4'] != '') {
                              echo '<option value = "' . $row['size4'] . '" ' . ($row['size4'] == $size ? 'selected="selected"' : '') . '>' . $row['size4'] . '</option>';
                            }                          
                            if($row['size5'] != '') {
                              echo '<option value = "' . $row['size5'] . '" ' . ($row['size5'] == $size ? 'selected="selected"' : '') . '>' . $row['size5'] . '</option>';
                            }            
                          }              
                          mysqli_free_result($result);
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Số lượng</label>
                      <input value="<?= $quantity ?>" name="quantity" class="form-control" id="inputName">
                    </div>

                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- jquery-validation -->
  <script src="../../../plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="../../../plugins/jquery-validation/additional-methods.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../../dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script src="../../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

  <script>
    function updateSize(){
      $.ajax({
        url: '../scripts/updateSize.php',
						method: 'POST',
						dataType: "json",
						data: {
							id: $('[name=productId]').val(),
						},
						success: function(data) {
                $('[name=size]').empty();
                option = document.createElement('option');
                option.selected = true;
                option.disabled = true;
                option.text = 'Size';
                $('[name=size]').append(option);
                // <option disabled selected>Size</option>
                if(data.size1){
                  option = document.createElement('option');
                  option.value = data.size1;
                  option.text = data.size1;
                  $('[name=size]').append(option);
                }
                if(data.size2){
                  option = document.createElement('option');
                  option.value = data.size2;
                  option.text = data.size2;
                  $('[name=size]').append(option);                
                }
                if(data.size3){
                  option = document.createElement('option');
                  option.value = data.size3;
                  option.text = data.size3;
                  $('[name=size]').append(option);                
                }
                if(data.size4){
                  option = document.createElement('option');
                  option.value = data.size4;
                  option.text = data.size4;
                  $('[name=size]').append(option);                
                }
                if(data.size5){
                  option = document.createElement('option');
                  option.value = data.size5;
                  option.text = data.size5;
                  $('[name=size]').append(option);               
                }
						}
      })
    }
  </script>
  <script>
    $(function() {
      // $.validator.setDefaults({
      //   submitHandler: function() {
      //     alert("Form successful submitted!");
      //   }
      // });
      $('#quickForm').validate({
        rules: {
          productId: {
            required: true,
          },
          size: {
            required: true,
            digits: true,
            min: 1
          },
          quantity: {
            required: true,
            digits: true,
            min: 1
          },
        },
        messages: {
          productId: {
            required: "Đây là trường bắt buộc",
          },
          size: {
            required: "Đây là trường bắt buộc",
            digits: "Hãy nhập một giá trị phù hợp",
            min: "Hãy nhập một giá trị phù hợp"
          },
          quantity: {
            required: "Đây là trường bắt buộc",
            digits: "Hãy nhập một giá trị phù hợp",
            min: "Hãy nhập một giá trị phù hợp"
          },
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
  </script>
</body>

</html>