<link rel="stylesheet" href="hasil.css">


<body>
<div class="bg"><center> <h1>selamat tiket anda berhasil di beli</h1> <center></div>
<img src="bunga.jpg">
<div class = "form">
  <center><h1>kode tiket anda</h1></center>
  <br>
  <center><h3>87gs56</h3></center>
  <br>
<?php
if (isset($_POST["firstname"]))
        {
            $name_awal = $_POST["firstname"];
        }
if (isset($_POST["lastname"]))
        {
            $name_belakang = $_POST["lastname"];
        }
if (isset($_POST["email"]))
        {
            $email = $_POST["email"];
        }
        $password = $_POST['password']; //mengambil inputan dari form dengan name password
        $password2 = $_POST['konfirmasipassword']; //mengambil inputan dari form dengan name password2    
 
        if($name_awal==""){
            echo " firstname tidak boleh kosong ";
        }
        if($name_belakang==""){
            echo " lastname tidak boleh kosong ";
        }
        if($password==$password2){ // kondisi jika password = password2
            echo " nama = ". $name_awal  ." " . $name_belakang  ."<br>";  
            echo " email = ". $email ."";
            if (isset($_POST['gender'])) {
                $jenis_kelamin=$_POST['gender'];
                echo "<br>gender= ".$jenis_kelamin;
            }
            if (isset($_POST['tombolregistrasi'])) {
                $usia = $_POST['usia'];
                echo "<br>usia = $usia";
                }
                if (isset($_POST["penjelasan"]))
                {
                    $penjelasan = $_POST["penjelasan"];
                    echo "<br>Data diri = ". $penjelasan ."";  
                }
           }else{ // sebaliknya, jika password tidak sama dengan password 2
            echo 'Maaf password anda tidak sama, silahkan coba lagi ' ; //tamplikan error
           }    
?>




</div>


  
</body>

