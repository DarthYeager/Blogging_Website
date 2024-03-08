<?php
@include 'components/connect.php';
session_start();
if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}
else{
    $user_id = '';
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Identification</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<header class="header">
   <section class="flex">
      <a class="logo">Blog Vista</a>
   </section>
</header>
<body style="padding-left: 0 !important;">
   <section class="form-container">
      <form>
        <div class="box">
               <h3>Admin or User!?</h3>
               <div class="flex-btn">
                  <a href="admin\admin_login.php" class="option-btn">Admin</a>
                  <a href="home.php" class="option-btn">User</a>
               </div>
        </div>
      </form>
   </section>
   <?php include 'components/footer.php'; ?>
   <script src="js/script.js"></script>
</body>
</html>