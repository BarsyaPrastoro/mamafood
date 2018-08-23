<?php
if (isset($_POST['login'])) {
    require 'Connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION['username'] = $username;
    $query = "select * from userperusahaan where namaPegawai = '".$username."' and password='".$password."'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            if ($row['status'] == 1) {
                header('location: divisi/applicantreviewer/apr-pengajuanpdg.php');                
            }else if ($row['status'] == 2) {
                header('location: divisi/profitablemeasure/pm-transaksipdgpbl.php');
            }else if ($row['status'] == 3) {
                header('location: divisi/customerservice/cs-pesanmsk.php');
            }else if ($row['status'] == 4) {
                header('location: divisi/admin/adm-pegawai.php');
            }
        }
    }
    else{
        echo  '<h1><i>Akun Tidak Ditemukan</i></h1>';
    }

    // if ($row['status'] === 1) {

    // }
    

    // if(mysqli_num_rows($result1)==1){
    //     session_start();
    //     $_SESSION['username'] = $username;
    //     header('location: divisi/ApplicantReviewer/apr-pengajuanpdg.php');
    // }
    // else if (mysqli_num_rows($result2)==1) {
    //     session_start();
    //     $_SESSION['username'] = $username;
    //     header('location: divisi/profitablemeasure/pm-transaksipdgpbl.php');
    //     //header('location: divisi/profitableMeasurer/.php');
        
    // }
    // else if (mysqli_num_rows($result3)==1) {
    //     session_start();
    //     $_SESSION['username'] = $username;
    //     header('location: divisi/customerservice/cs-pesanmsk.php');
    // }
    // else if (mysqli_num_rows($result4)==1) {
    //     session_start();
    //     $_SESSION['username'] = $username;
    //     header('location: divisi/admin/adm-pegawai.php');
    //     //header('location: divisi/profitableMeasurer/.php');
        
    // }
    // else{
    //     echo  '<h1><i>Akun Tidak Ditemukan</i></h1>';
    // }

}
?>