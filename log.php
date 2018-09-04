<?php
session_start();
mysql_connect("localhost","root","") or die("Nggak bisa koneksi");
mysql_select_db("citra_media");//sesuaikan dengan nama database anda

$userid = $_POST['userid'];
$psw = $_POST['psw'];
$op = $_GET['op'];

if($op=="in"){
    $cek = mysql_query("SELECT * FROM tabeluser WHERE userid='$userid' AND password='$psw'");
    if(mysql_num_rows($cek)==1){//jika berhasil akan bernilai 1
        $c = mysql_fetch_array($cek);
        $_SESSION['userid'] = $c['userid'];
        $_SESSION['level'] = $c['level'];
        if($c['level']=="admin"){
            ?><script language="javascript">
			<!--
			window.alert("Login Berhasil!!");
			document.location="../index2.php";
			//--
			</script><?
        }else if($c['level']=="user"){
            ?><script language="javascript">
			<!--
			window.alert("Login Berhasil!!");
			document.location="../index2.php";
			//--
			</script><?
        }
		if($c['level']=="premium"){
            ?><script language="javascript">
			<!--
			window.alert("Login Berhasil!!");
			document.location="../index2.php";
			//--
			</script><?
        }
		if (empty($cek))
		{
			?><script language="javascript">
			alert("Maaf, Password Anda salah!!");
			document.location="../index.php";
			</script><?
		}
    }else{
         ?><script language="javascript">
			alert("Maaf, Password Anda salah!!");
			document.location="../index.php";
			</script><?
    }
}else if($op=="out"){
    session_start();
	session_destroy();
    echo "<meta http-equiv='refresh' content='3;URL=../index.php' />";
}
?>
