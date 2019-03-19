 <?php
 include ('connection.php');
$sql = "SELECT pass, name from user_entry WHERE email='$_POST[user]'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       
        //echo "pass: " . $row["pass"]."<br>";
        if ($row["pass"]==md5($_POST['password'])) {
          $Admin_name = "admin@admin.com";
           echo $ImageName= $row["name"][0];
           //echo $ImageName[0];
          if($_POST['user']==$Admin_name){
              session_start();
              $_SESSION['uname'] = $_POST['user'];
              header('Location: admin_panel.php');
          }
          else{
          $flag=1;
          session_start();
          $_SESSION['uname'] = $_POST['user'];
          header("Location: index.php");
        }}
        else{
         // $flag=2;
          echo '<script>alert("Wrong User or Password..");</script>';
          //echo 'Login again!!';
        }
    }
}
?>