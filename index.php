<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SISFO - LOGIN</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-8 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
				<div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/logo1.png" alt="">
                  </div>
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><b>SISTEM INFORMASI AKADEMIK</b></h1>
                  </div>
				  
                  <form class="user" method="POST" action="login_aksi.php" enctype="multipart/form-data">
				  
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" placeholder="Enter Username...">
                    </div>
					
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Password...">
                    </div>
					
					<center><input type="submit" class="btn btn-primary btn-user btn-block" name="submit" id="btn_login" value="Sign In" /></center>
                    
                    
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
  
  include"koneksi.php";
  $sqladm=mysql_query("select * from t_user where username='$_POST[username]' and password='$_POST[password]'");
  $row=mysql_num_rows($sqladm);
  

  if($row > 0){
    $radm=mysql_fetch_array($sqladm);

    if($radm['status']=="Administrator"){
    
    session_start();
      $_SESSION['namaadmin'] = $radm['username'];
      $_SESSION['passadmin'] = $radm['password'];
      
  echo"<script language = 'JavaScript'>
    confirm('Berhasil Masuk Sebagai Admin');
    document.location='Admin/index_admin.php';
    </script>"; 
  }

  else if($radm['status']=="Mahasiswa"){
    
    session_start();
      $_SESSION['namamhs'] = $radm['username'];
      $_SESSION['passmhs'] = $radm['password'];
      
  echo"<script language = 'JavaScript'>
    confirm('Berhasil Masuk Sebagai Mahasiswa');
    document.location='mahasiswa/index_mahasiswa.php';
    </script>"; 
  }

  else if($radm['status']=="Dosen"){
    
    session_start();
      $_SESSION['namadosen'] = $radm['username'];
      $_SESSION['passdosen'] = $radm['password'];
      
  echo"<script language = 'JavaScript'>
    confirm('Berhasil Masuk Sebagai Dosen');
    document.location='dosen/index_dosen.php';
    </script>"; 
  }


}
  else{
    header("location:index.php?pesan=gagal");

}
}

?>