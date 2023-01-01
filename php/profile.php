<?php
  session_start();
  include_once "..//php//config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: ..//login.php");
  }
?>

<?php include_once "..//header.php"; ?>


<html>

<link rel="stylesheet" href="..//css//styles2.css">



<section class="profile">
  <header class="header">
    <div class="details">

      <?php
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
        if(mysqli_num_rows($sql) > 0){
          $row = mysqli_fetch_assoc($sql);
        }
      ?>

      <img src="..//php//images/<?php echo $row['img']; ?>" alt="" class="profile-pic">

      <h1 class="heading">
        <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
      </h1>

      <div class="location">
        
      </div>
        <div class="col-4">
          <h4><span><?php echo $row['email']?></span></h4>
        </div>
        <div class="col-4">
          <h4>My name is <?php echo $row['fname']. " " . $row['lname'] ?>. I love programming. Design is my passion. Feel free to contact me. Thanks.</h4>

        </div>
      </div>


    </div>

    
  </header>
</section>

</html>
