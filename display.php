<?php
include 'connection.php';
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
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">      
                  Add User</a> <i class="fa-solid fa-user"></i></button>
                  <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
$sql="SELECT * FROM user";
$result=mysqli_query($conn,$sql);
if($result){
while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $name=$row['Name'];
    $email=$row['Email'];
    $mobile=$row['Mobile'];
    $password=$row['Password']; 

    echo '<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$name.'</td>
    <td>'.$email.'</td>
    <td>'.$mobile.'</td>
    <td>'.$password.'</td>
    <td><button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
    <td><button class="btn btn-primary"><a href="download.php?file='.$id.' downloadid='.$id.'" class="text-light" ><i class="fa-solid fa-cloud-arrow-down fa-beat"></i></a></button></td>
</td>
  </tr>';

}


}


  ?>

  
  </tbody>
</table>
    </div>
    
</body>
</html>