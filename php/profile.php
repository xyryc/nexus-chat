<?php
  session_start();
  include_once "..//php//config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: ..//login.php");
  }
?>

<?php include_once "..//header.php"; ?>


<html>

<link rel="stylesheet" href="..//css//styles_profile.css">



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
        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
  <path d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12 ,2Z"></path>
</svg>
        <p>Dinajpur, Bangladesh</p>
      </div>

      <div class="stats">
        <div class="col-4">
          <h4>Demo</h4>

        </div>
        <div class="col-4">
          <h4><span><?php echo $row['email']?></span></h4>
        </div>
        <div class="col-4">
          <h4>Demo</h4>

        </div>
      </div>


    </div>
  </header>
</section>

</html>
