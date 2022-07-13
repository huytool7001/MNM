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
      require '../scripts/crui.php';
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
                <form id="quickForm" enctype="multipart/form-data" method="POST" action="../scripts/crui.php">
                  <input value="<?= $id ?>" name="id" type="hidden">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Tên sản phẩm</label>
                      <input value="<?= $name ?>" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Loại</label>
                      <select class="form-control select2" value="<?= $category ?>" name="category">
                        <?php
                        require '../../config.php';
                        $sql = 'SELECT DISTINCT nameCategoryProduct FROM products';
                        if ($result = mysqli_query($con, $sql)) {
                          while ($row = mysqli_fetch_array($result)) {
                            echo '<option value = "' . $row[0] . '" ' . ($row[0] == $category ? 'selected="selected"' : '') . '>' . $row[0] . '</option>';
                          }
                          mysqli_free_result($result);
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Màu</label>
                      <select class="form-control select2" value="<?= $color ?>" name="color">
                        <?php
                        require '../../config.php';
                        $sql = 'SELECT DISTINCT color FROM products';
                        if ($result = mysqli_query($con, $sql)) {
                          while ($row = mysqli_fetch_array($result)) {
                            echo '<option value = "' . $row[0] . '" ' . ($row[0] == $color ? 'selected="selected"' : '') . '>' . $row[0] . '</option>';
                          }
                          mysqli_free_result($result);
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Giá</label>
                      <input value="<?= $price ?>" name="price" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Size</label><br>
                      <input style="width: 20%; float: left;" value="<?= $size1 ?>" name="size1" class="form-control" id="inputSize1">
                      <input style="width: 20%; float: left;" value="<?= $size2 ?>" name="size2" class="form-control" id="inputSize2">
                      <input style="width: 20%; float: left;" value="<?= $size3 ?>" name="size3" class="form-control" id="inputSize3">
                      <input style="width: 20%; float: left;" value="<?= $size4 ?>" name="size4" class="form-control" id="inputSize4">
                      <input style="width: 20%; float: left;" value="<?= $size5 ?>" name="size5" class="form-control" id="inputSize5">
                    </div>
                    <div class="form-group" style="margin-top: 52px;">
                      <label>Ảnh</label>
                      <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                        <li>
                          <input type="file" style="visibility: hidden;" name="image1">
                          <span style="max-height: fit-content;" class="mailbox-attachment-icon has-img"><img id="image1" src="<?= $images1 ?>"></span>

                          <div class="mailbox-attachment-info">
                            <a class="mailbox-attachment-name"><i class="fas fa-camera"></i> photo1.png</a>
                            <span class="mailbox-attachment-size clearfix mt-1">
                              <a onclick="onClickHandler(event, 'image1')" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-upload-alt"></i></a>
                            </span>
                          </div>
                        </li>
                        <li>
                          <input type="file" style="visibility: hidden;" name="image2">
                          <span style="max-height: fit-content;" class="mailbox-attachment-icon has-img"><img id="image2" src="<?= $images2 ?>"></span>

                          <div class="mailbox-attachment-info">
                            <a class="mailbox-attachment-name"><i class="fas fa-camera"></i> photo2.png</a>
                            <span class="mailbox-attachment-size clearfix mt-1">
                              <a onclick="onClickHandler(event, 'image2')" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-upload-alt"></i></a>
                            </span>
                          </div>
                        </li>
                        <li>
                          <input type="file" style="visibility: hidden;" name="image3">
                          <span style="max-height: fit-content;" class="mailbox-attachment-icon has-img"><img id="image3" src="<?= $images3 ?>"></span>

                          <div class="mailbox-attachment-info">
                            <a class="mailbox-attachment-name"><i class="fas fa-camera"></i> photo3.png</a>
                            <span class="mailbox-attachment-size clearfix mt-1">
                              <a onclick="onClickHandler(event, 'image3')" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-upload-alt"></i></a>
                            </span>
                          </div>
                        </li>
                        <li>
                          <input type="file" style="visibility: hidden;" name="image4">
                          <span style="max-height: fit-content;" class="mailbox-attachment-icon has-img"><img id="image4" src="<?= $images4 ?>"></span>

                          <div class="mailbox-attachment-info">
                            <a class="mailbox-attachment-name"><i class="fas fa-camera"></i> photo4.png</a>
                            <span class="mailbox-attachment-size clearfix mt-1">
                              <a onclick="onClickHandler(event, 'image4')" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-upload-alt"></i></a>
                            </span>
                          </div>
                        </li>
                        <li>
                          <input type="file" style="visibility: hidden;" name="image5">
                          <span style="max-height: fit-content;" class="mailbox-attachment-icon has-img"><img id="image5" src="<?= $images5 ?>"></span>

                          <div class="mailbox-attachment-info">
                            <a class="mailbox-attachment-name"><i class="fas fa-camera"></i> photo5.png</a>
                            <span class="mailbox-attachment-size clearfix mt-1">
                              <a onclick="onClickHandler(event, 'image5')" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-upload-alt"></i></a>
                            </span>
                          </div>
                        </li>
                      </ul>
                      <!-- <div class="custom-file">
                        <input value="<?= $images1 ?>" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="custom-file">
                        <input value="<?= $images2 ?>" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="custom-file">
                        <input value="<?= $images3 ?>" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="custom-file">
                        <input value="<?= $images4 ?>" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="custom-file">
                        <input value="<?= $images5 ?>" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div> -->

                    </div>
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
    function loadURLToInputField(url, id) {
      getImgURL(url, (imgBlob) => {
        // Load img blob to input
        // WIP: UTF8 character error
        let fileName = 'hasFilename.jpg'
        let file = new File([imgBlob], fileName, {
          type: "image/jpeg",
          lastModified: new Date().getTime()
        }, 'utf-8');
        let container = new DataTransfer();
        container.items.add(file);
        //console.log('[name='+id+']');
        document.querySelector('[name='+id+']').files = container.files;

      })
    }
    // xmlHTTP return blob respond
    function getImgURL(url, callback) {
      var xhr = new XMLHttpRequest();
      xhr.onload = function() {
        callback(xhr.response);
      };
      xhr.open('GET', url);
      xhr.responseType = 'blob';
      xhr.send();
    }
    // window.onload = function(){
    //   $(document).ready(function(){
    //     loadURLToInputField(document.getElementById('image1').src,'image1');
    //     loadURLToInputField(document.getElementById('image1').src,'image2');
    //     loadURLToInputField(document.getElementById('image1').src,'image3');
    //     loadURLToInputField(document.getElementById('image1').src,'image4');
    //     loadURLToInputField(document.getElementById('image1').src,'image5');
    //   });
      
    // }
  </script>
  <script>
    $(function() {
      bsCustomFileInput.init();
    });

    function onClickHandler(ev, name) {
      $('[name=' + name + ']').click(); // open
    }
    $('[name=image1]').on('change', function() {
      document.getElementById('image1').src = URL.createObjectURL(this.files[0]);
    })
    $('[name=image2]').on('change', function() {
      document.getElementById('image2').src = URL.createObjectURL(this.files[0]);
    })
    $('[name=image3]').on('change', function() {
      document.getElementById('image3').src = URL.createObjectURL(this.files[0]);
    })
    $('[name=image4]').on('change', function() {
      document.getElementById('image4').src = URL.createObjectURL(this.files[0]);
    })
    $('[name=image5]').on('change', function() {
      document.getElementById('image5').src = URL.createObjectURL(this.files[0]);
    })
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
          name: {
            required: true,
          },
          category: {
            required: true,
          },
          color: {
            required: true
          },
          price: {
            required: true,
            min: 0,
            digits: true
          },
        },
        messages: {
          name: {
            required: "Đây là trường bắt buộc",
          },
          price: {
            required: "Đây là trường bắt buộc",
            min: "Hãy nhập một giá trị phù hợp",
            digits: "Hãy nhập một giá trị phù hợp"
          },
          category: "Đây là trường bắt buộc",
          color: "Đây là trường bắt buộc"
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