<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="hasil.css">
</head>
<body>
<div class= "halaman">
  <br>
  <center><h1>TIKET ONLINE MUSEUM PATTIMURA</h1><center></div>
  <img src="bunga.jpg">

<div class="input">
<form action="hasil.php" method="post" >
  <table>
    <tr>
      <td> First Name</td>
      <td> : </td>
      <td><input type="text" name="firstname" required= "Firstname"> <br></td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td>:</td>
      <td><input type="text" name="lastname"required= "Firstname"> <br></td>
    </tr>
    <tr>
      <td>Email</td>
      <td>:</td>
      <td><input type="email" name="email" required= "Email"> <br></td>
    </tr>
    <tr>
      <td>Password</td>
      <td>:</td>
      <td><input type="password" name="password" required= "Password"> <br></td>
    </tr>
    <tr>
      <td>Confirm Password</td>
      <td>:</td>
      <td><input type="password" name="konfirmasipassword"required= "confirm password"> <br></td>
    </tr> 
    <tr>
      <td>Gender</td>
      <td>:</td>
      <td><input type="radio" name="gender" value="Laki-laki"> Laki-laki <br><input type="radio" name="gender" value="Perempuan"> Perempuan </td>
    </tr>
    <tr>
      <td>Usia</td>
      <td>:</td>
      <td><select name="usia" > 
      <option value="dewasa">dewasa</option>
      <option value="anak-anak">anak-anak</option>
      </select></td>
      <br>
    </tr>
    <tr>
      <td>Penjelasan Singkat Data Diri</td>
      <br>
      <td>:</td>
      <td><textarea  name="penjelasan" rows="3" cols="20" required= "isi data diri">
      </textarea></td>
      <br>
    </tr>
    <tr>
      <td><input type="submit" name="tombolregistrasi" value="beli tiket"> <br></td>
    </tr>
  </table>
        
   
</form>

</div>


 
</body>
</html>
