  
  <?php
include 'connection.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM user WHERE id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['Name'];
$email=$row['Email'];
$mobile=$row['Mobile'];
$password=$row['Password'];

if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="UPDATE user SET id=$id,name='$name',email='$email',mobile='$mobile',password='$password' WHERE id=$id ";
    $result=mysqli_query($conn,$sql);
    if($result){
       header('location:display.php ');
    

    }else{
          die(mysqli_error($conn));
    }


}
?>
  
  
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OPERATION</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
  <h4 class="my-5">Update  <i class="fa-sharp fa-solid fa-pencil fa-beat"></i></h4>
    <div class="container">
    <form method="post" action="">
    <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value=<?php echo $name;?>>
   
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" value=<?php echo $email;?> >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="mobile" class="form-label">Mobile number</label>
    <input type="number" class="form-control" name="mobile" value=<?php echo $mobile;?> >
   
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" value=<?php echo $password;?>>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
</div>
  </body>
  </html>