<?php
session_start();
// if (!isset($_SESSION["Email"])) {
//     header("location:tableCC.php");
//     die();
// }else {
  $id = $_GET['id'];
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal information</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- Template Main CSS File -->
    <link href="../../assets/css/style.css" rel="stylesheet">

</head>

<body>
    <?php include "../../navbar.php" ?>
    <section id="hero" class="hero d-flex flex-column justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <h1>KnightOne - Create Bootstrap Website Template</h1>
                    <h2>We are team of designers making websites with Bootstrap</h2>
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <div class="container fluid" style="background-color: red;">
      <?php
      $conn = new PDO("mysql:host=localhost;dbname=dbbscarbon;charset=utf8", "root", "");
      $sql = "SELECT * FROM tab_category";
      ?>
      <div class="d-flex">
        <div>
          <label>หมวดหมู่</label>
          <span class="dropdown">
            <button class="btn btn-light dropdown-toggle btn-bs" type="data" id="button2" data-bs-toggle="dropdown" aria-expanded="false">
              <?php
              if ($id != 0)
                foreach ($conn->query("SELECT type FROM tab_category WHERE id = $id") as $row) {
                  echo $row['0'];
                }
              else {
                echo '--ทั้งหมด--';
              }
              ?>
            </button>
            <ul class="dropdown-menu" aria-labelledby="button2">
              <?php
              echo "<li><a href=\"table.php?id=0\" class='dropdown-item' value=0 > ---ทั้งหมด---</a></li>";
              foreach ($conn->query($sql) as $row) {
                echo "<li><a href=\"table.php?id=" . $row['0'] . "\" class='dropdown-item' value=" . $row['id'] . ">" . $row['type'] . "</a></li>";
              }
              $conn = null;
              ?>
            </ul>
          </span>
        </div>
      </div>

      <br>
      <table class="table table-responsive-xl">
						  <thead>
						    <tr>
						    	<th>&nbsp;</th>
						    	<th>Email</th>
						      <th>Username</th>
						      <th>Status</th>
						      <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr class="alert" role="alert">
						    	<td>
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox" checked>
										  <span class="checkmark"></span>
										</label>
						    	</td>
						      <td class="d-flex align-items-center">
						      	<div class="img" style="background-image: url(images/person_1.jpg);"></div>
						      	<div class="pl-3 email">
						      		<span>markotto@email.com</span>
						      		<span>Added: 01/03/2020</span>
						      	</div>
						      </td>
						      <td>Markotto89</td>
						      <td class="status"><span class="active">Active</span></td>
						      <td>

				          	</button>
				        	</td>
						    </tr>
						    <tr class="alert" role="alert">
						    	<td>
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
						    	</td>
						      <td class="d-flex align-items-center">
						      	<div class="img" style="background-image: url(images/person_2.jpg);"></div>
						      	<div class="pl-3 email">
						      		<span>jacobthornton@email.com</span>
						      		<span>Added: 01/03/2020</span>
						      	</div>
						      </td>
						      <td>Jacobthornton</td>
						      <td class="status"><span class="waiting">Waiting for Resassignment</span></td>
						      <td>

				          	</button>
				        	</td>
						    </tr>
						    
						  </tbody>
						</table>
        
        <?php 
        // $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
        // $conn->exec("SET CHARACTER SET utf8");
        // if ($id != 0) {
        //   $data = $conn->query("SELECT p.id,p.title,p.content,p.post_date ,c.name,u.name FROM post p , user u , category c WHERE p.cat_id = c.id AND c.id = $id AND p.user_id = u.id order by p.id DESC;");
        // } else {
        //   $data = $conn->query("SELECT p.id,p.title,p.content,p.post_date ,c.name,u.name FROM post p , user u , category c WHERE p.cat_id = c.id AND p.user_id = u.id order by p.id DESC;");
        // }
        // if ($data !== false) {
        //   while ($row = $data->fetch()) {
        //     // echo "<tr><td><a href=\"post.php?id=".$row['0'].'\" style=text-decoration:none></a>"; 
        //     echo "<tr><td>";
        //     echo "[ " . $row['4'] . " ] ";
        //     echo "<a href=\"post.php?id=" . $row['0'] . "\" style=text-decoration:none>";
        //     echo $row['1'] . "</a>";
        //     echo "<br>";
        //     echo $row['5'] . " - " . $row['3'];
        //     echo "</td></tr>";
        //   }
        // }
        // $conn = null;
        ?>



    </div>
</body>

</html>