<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/index.css" type="text/css">

  <title>Basic Banking System</title>
  <link rel="stylesheet" type="text/css" href="/CSS/index.css">
</head>

<body>
  <?php
  include 'navbar.php';
  ?>

  <div class="container-fluid">
    <!-- Introduction section -->
    <div class="row intro py-1 bg ">
      <div class="col-sm-12 col-md">
        <div class="heading text-center my-5">
          <h3>Welcome To</h3>
          <h3>Sparks Bank</h3>
        </div>
      </div>
      <div class="col-sm-12 col-md img text-center">
        <img src="bank2.png" class="img-fluid pt-2" style="width:400px;">
      </div>
    </div>

    <!-- Activity section -->
    <div class="row activity text-center mt-1">
      <div class="col-md  act">
        <img src="add-user.png" class="img-fluid pt-3  imgspace">
        <br>
        <a href="createuser.php"><button type="button" class="btn btn-secondary">Create a User</button></a>
      </div>
      <div class=" col-md act ">
        <img src="transaction.png" class="img-fluid pt-2  imgspace">
        <br>
        <a href="transfermoney.php"><button type="button" class="btn btn-secondary">Make a Transaction</button></a>
      </div>
      <div class="col-md act ">
        <img src="passbook.png" class="img-fluid pt-2  imgspace">
        <br>
        <a href="transactionhistory.php"><button type="button" class="btn btn-secondary">Transaction History</button></a>
      </div>
    </div>
  </div>
  <footer class="text-center mt-5 py-2">
    <p style="font-family: poppins; font-size: 16px;">&copy 2021. Developed by <b>CHIRANTHAN P</b> <br> Sparks Foundation</p>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
