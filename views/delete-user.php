<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE</title>
     <!-- BS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <!-- FW -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- Custom link -->
     <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="bg-light">
    <!-- Navigation -->
    <nav class="navbar navbar-expand navbar-dark bg-dark"  style="margin-bottom: 80px;">
        <div class="container">
         <a href="dashboard.php" class="navbar-brand">
          <h1 class="h3">The company</h1>
         </a>
        </div>
        <div class="navbar-nav me-auto">
          <span class="navbar-text">
            <?php echo $_SESSION['full_name']; ?>
          </span>
          <form action="../actions/logout.php" method="POST" class="d-flex ms-2 mt-2">
            <button type="submit" name="logout" class="text-danger bg-transparent border-0">Logout</button>
          </form>
        </div>
    </nav>
    <main class="row justify-content gx-0 mt-5">
      <div class="col-4 text-center">
         <i class="fa-solid fa-triandle-exclamation text-warning display-4 d-block mb-2"><h2 class="text-danger mb-5">DELETE ACCOUNT</h2></i>

         <p class="fw-bold">Are you sure you want to delete your account?</p>

         <div class="row">
            <div class="col">
               <a href="dashboard.php" class="btn btn-seccondary w-100">Cancel</a>
            </div>
            <div class="col">
               <form action="..//action/delete-user.php"></form>
            </div>
         </div>

      </div>





     
   </main>  


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>   
</body>
</html>
<?php
if(isset($_POST['btn_delete_account']));

?>