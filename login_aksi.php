<?php
  include"koneksi.php";
  $sqladm=mysqli_query($con,"select * from t_user where username='$_POST[username]' and password='$_POST[password]'");
  $row=mysqli_num_rows($sqladm);
  

  if($row > 0){
    $radm=mysqli_fetch_array($sqladm);

    if($radm['status']=="Administrator"){
    
    session_start();
      $_SESSION['namaadmin'] = $radm['username'];
      $_SESSION['passadmin'] = $radm['password'];
      
  echo"<script language = 'JavaScript'>
    confirm('Berhasil Masuk Sebagai Admin');
    document.location='admin/index_admin.php';
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


?>