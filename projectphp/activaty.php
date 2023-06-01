
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="activaty.css">
    <title>Document</title>
    
</head>
<body>
<div class="container">
  
<!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Open modal
</button>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="http://localhost/activaty2.php" method="post">
        
        <div class="form-group">
        
    <label class="b">NEW COUNTS</label>
      <h5>
        USER NAME    
        </h5>
        <input class="form-control" placeholder="  ادخل اسم المستخدم " type="text"required name="namea" id="a">

    </div><div class="form-group">
        <h5>
        PASSOWERD 
        </h5>
        <input class="form-control" placeholder="ادخل  كلمه السر"required type="password" name="pass" id="a">

    </div><div class="form-group">
        <h5>
        EMAIL
        </h5>
        <input class="form-control" placeholder="ادخل ايميل المستخدم"required type="email" name="email" id="a">
    </div>
   <button type="submit" name="submit" class="btn btn-primary">submit</button>
    </form>      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


    <table class="table">
      <thead>
      <tr style="background-color:blue";>
        <th scope="col"  >ID </th>

        <th scope="col">    USER NAME 
        </th>
        <th scope="col">   PASSOWERD
        </th>
        <th scope="col"> EMAIL 
        </th>
       
       

      </tr>
  </thead>
       <tbody>
       <?php 
$conn=mysqli_connect('localhost','root','','activety')or die("connect error".mysqli_connect_error());
$sql="select *from active";
    $reslut=mysqli_query($conn,$sql);
    if($reslut){
      while($row=mysqli_fetch_assoc($reslut)){
        $id=$row['id'];
$name=$row['name'];
$password=$row['password'];
$email=$row['email'];
echo  '<tr>
<th scope="row">'.$id.'</th>
<td>'.$name.'</td>
<td>'.$password.'</td>
<td>'.$email.'</td>
     
   

  </tr>';
}

}
?>

  </tbody>
</div>
<script src="js/jquery.3.6.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>