<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<aside class="side-nav" id="show-side-navigation1">
      <i class="fa fa-bars close-aside hidden-sm hidden-md hidden-lg" data-close="show-side-navigation1"></i>
      <div class="heading">
        <img src="https://thumbs.dreamstime.com/b/creative-geometric-logo-sign-orange-pink-gradient-letter-m-your-company-207530185.jpg" alt="">
        <div class="info">
          <h3><a href="#">Citizen bank</a></h3>
          <p>Your transaction made easy.</p>
        </div>
      
      <ul class="categories">
        <li><i class="fa fa-home fa-fw" aria-hidden="true"></i> &emsp;<a href="index.php"> Dashboard</a>
        
        </li>
        <li><i class="fa fa-money fa-fw"></i>&emsp;<a href="#">Money Transfer</a>
      
        </li>
        <li><i class="fa fa-history fa-fw"></i>&emsp;<a href="TransactionHistory.php">Transaction History</a>
        
        </li>
      </ul>
    </aside>
    <section id="contents">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><p class="main-color">Transfer Money</p></a>
            </div>
        </div>
    </nav>

<?php
    include 'connection.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
?>

    <div class="container">
        <h1  class="text-center pt-4">Transfer Money</h1>
        <br>
        <div class="row">
            <div class="col">
                <div class="table-responsive-sm">
                <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                <thead>
                    <tr>
                    <th scope="col" class="text-center py-2">Id</th>
                    <th scope="col" class="text-center py-2">Name</th>
                    <th scope="col" class="text-center py-2">E-Mail</th>
                    <th scope="col" class="text-center py-2">Balance</th>
                    <th scope="col" class="text-center py-2">Transfer Money</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($rows = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td class="py2"><?php echo $rows['id']?></td>
                        <td class="py2"><?php echo $rows['name']?></td>
                        <td class="py2"><?php echo $rows['email']?></td>
                        <td class="py2"><?php echo $rows['balance']?></td>
                        <td><a href="userdetails.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">View</button></a></td> 
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
                </div>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
    </section>
</body>
</html>