<?php
session_start();
if(!isset($_SESSION['namaadmin'])){
  echo"<script language = 'Javascript'>
  confirm('Anda Harus Login');
  document.location='../index.php';
  </script>
  ";

}
include "../koneksi.php";
$sqla = mysqli_query($con,"select * from t_user where username='$_SESSION[namaadmin]'");
$ra = mysqli_fetch_array($sqla);

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="shortcut icon" href="../img/logobaru1.jpg">
  <title>UNIVERSITAS CIC - RESTRICTED AREA...</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	
	
	
	
	<!-- Bagian Pembuka Judul Template -->
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
		<img src="../img/logobaru1.jpg">
        </div>
        <div class="sidebar-brand-text mx-3 "><font color=gold>UNIVERSITAS CIC</font color></div>
      </a>
	<!-- Bagian Penutup Judul Template -->

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

	  
	  
	  
	  
	  
	  
	  <!-- Bagian Pembuka Menu Template -->
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index_admin.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu Utama
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-table"></i>
          <span>Menu Data CIC</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu Data CIC</h6>
            <a class="collapse-item" href="index_admin.php?page=data_mahasiswa">Data Mahasiswa</a>
            <a class="collapse-item" href="index_admin.php?page=data_dosen">Data Dosen</a>
            <a class="collapse-item" href="index_admin.php?page=data_kelas">Data Kelas</a>
            <a class="collapse-item" href="index_admin.php?page=data_ruangan">Data Ruangan</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-table"></i>
          <span>Menu Akademik</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu Akademik</h6>
            <a class="collapse-item" href="index_admin.php?page=data_matakuliah">Data Mata Kuliah</a>
            <a class="collapse-item" href="index_admin.php?page=data_jadwal">Data Jadwal</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      

      <!-- Heading -->
      

      <!-- Nav Item - Pages Collapse Menu -->
      

      <!-- Nav Item - Charts -->
     

      <!-- Nav Item - Tables -->
     

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
	<!-- Bagian Penutup Menu Template -->
	
	
	
	
	
	
	
	
	<!-- Bagian Pembuka Header Template -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Welcome 
                <?php echo"$ra[status]  | 
                $ra[nm_user]"; ?></span>
                <img class="img-profile rounded-circle" src="../img/user.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profile.html">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->
		<!-- Bagian Penutup Header Template -->
		
		
		
		
		
		
		
		
		<!-- Bagian Pembuka Kepala Info Judul Template -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-4 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Mahasiswa</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">

                          </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-4 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Dosen</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">

                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
			<div class="col-xl-4 col-md-4 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Kelas</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">

                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>

          <!-- Content Row -->
		  <!-- Bagian Penutup Kepala Info Template -->
		  
          <?php
          
          if(isset($_GET['page'])){
            $page=$_GET['page'];
            switch($page){

            case'data_mahasiswa';
            include"data_mahasiswa.php";
            break;

              case'data_mahasiswa_input';
              include"data_mahasiswa_input.php";
              break;

              case'data_mahasiswa_input_aksi';
              include"data_mahasiswa_input_aksi.php";
              break;

              case'data_mahasiswa_delete';
              include"data_mahasiswa_delete.php";
              break;

              case'data_mahasiswa_detail';
              include"data_mahasiswa_detail.php";
              break;

              case'data_mahasiswa_edit';
              include"data_mahasiswa_edit.php";
              break;

              case'data_mahasiswa_edit_aksi';
              include"data_mahasiswa_edit_aksi.php";
              break;

              case'data_mahasiswa_kelas';
              include"data_mahasiswa_kelas.php";
              break;

              case'cek_mahasiswa_kelas';
              include"cek_mahasiswa_kelas.php";
              break;

              case'mahasiswa_kelas_delete';
              include"mahasiswa_kelas_delete.php";
              break;

              case'data_mahasiswa_add';
              include"data_mahasiswa_add.php";
              break;


            case'data_dosen';
            include"data_dosen.php";
            break;

              case'data_dosen_detail';
              include"data_dosen_detail.php";
              break;

              case'data_dosen_input';
              include"data_dosen_input.php";
              break;

              case'data_dosen_input_aksi';
              include"data_dosen_input_aksi.php";
              break;

              case'data_dosen_delete';
              include"data_dosen_delete.php";
              break;

              case'data_dosen_edit';
              include"data_dosen_edit.php";
              break;

              case'data_dosen_edit_aksi';
              include"data_dosen_edit_aksi.php";
              break;

              case'data_dosen_add';
              include"data_dosen_add.php";
              break;



            case'data_matakuliah';
            include"data_matakuliah.php";
            break;

              case'data_matakuliah_detail';
              include"data_matakuliah_detail.php";
              break;

              case'data_matakuliah_input';
              include"data_matakuliah_input.php";
              break;

              case'data_matakuliah_delete';
              include"data_matakuliah_delete.php";
              break;

              case'data_matakuliah_edit';
              include"data_matakuliah_edit.php";
              break;

              case'data_matakuliah_edit_aksi';
              include"data_matakuliah_edit_aksi.php";
              break;

            case'data_kelas';
            include"data_kelas.php";
            break;
              case'data_kelas_input';
              include"data_kelas_input.php";
              break;

              case'data_kelas_detail';
              include"data_kelas_detail.php";
              break;

              case'data_kelas_edit';
              include"data_kelas_edit.php";
              break;

              case'data_kelas_delete';
              include"data_kelas_delete.php";
              break;

            case'data_jadwal';
            include"data_jadwal.php";
            break;
              case'data_jadwal_input';
              include"data_jadwal_input.php";
              break;
              case'data_jadwal_delete';
              include"data_jadwal_delete.php";
              break;

              case'data_ruangan';
              include"data_ruangan.php";
              break;
                case'data_ruangan_input';
                include"data_ruangan_input.php";
                break;
  
                case'data_ruangan_detail';
                include"data_ruangan_detail.php";
                break;
  
                case'data_ruangan_edit';
                include"data_ruangan_edit.php";
                break;
  
                case'data_ruangan_delete';
                include"data_ruangan_delete.php";
                break;

            default:
            echo"Maaf data tidak ditemukan";

            }
        }
        else{
            include"beranda.php";
        }
?>
		  
		  
		  

         
		 <!-- Bagian Pembuka Isi Conten Template -->
          <!-- Content Row -->
		  
		 

		
		  <!-- Bagian Penutup Isi Conten Template -->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
	  
	  
	  
	  
	  
	  
	  
	  
	  
	<!-- Bagian Pembuka Footer Template -->
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; SISFO Akademik Universitas CIC 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
	<!-- Bagian Penutup Footer Template -->
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->

  
  
  
  
  
  
  
  
  
  <!-- Bagian pembuka Show logout Template -->
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bagian Penutup Show logout Template -->

  
  
  
  
  
  
  
  
  
  
  
  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>
	
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
  
  <script src="../js/demo/datatables-demo.js"></script>
	
  <!-- Page level plugins -->
  <script src="../vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>

<?php


?>