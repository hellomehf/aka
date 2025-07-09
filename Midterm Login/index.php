<?php
if (!empty($_GET['q'])) {
  switch ($_GET['q']) {
    case 'info':
      phpinfo();
      exit;
      break;
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Laragon</title>
  <link rel="stylesheet" href="./css/clone.css">
  <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">
</head>

<body>
  <section>
    <div class="container">
      <div class="box-con">
        <div class="box">

        </div>
      </div>
    </div>
  </section>
  <header>
    <img src="./image/logo.png" alt="">
    <h2 class="logo">Setec Institue</h2>
    <nav class="nav">
      <a href="index.html">Home</a>
      <a href="#">Course</a>
      <a href="#">About</a>
      <a href="#">Contact</a>
      <button class="btnlogin">Login</button>
    </nav>
  </header>

  <div class="wrapper">
    <span class="close">
      <i class='bx bx-x'></i>
    </span>

    <div class="login-form">
      <h1>INPUT YOUR INFORMATION</h1>
      <form action="#" class="signup-link">
        <div class="table-container">
          <?php
          $hostname = '127.0.0.1';
          $username = 'root';
          $password = '';
          $db_name = 'su13_db';
          $port = '3306';
          // create connection
          $connection = new mysqli($hostname, $username, $password, $db_name);
          // get query
          $sql = 'select * from view_emp';
          $result = $connection->query($sql);
          if ($result->num_rows > 0) {
            echo "<table>" .
              "<tr><th>EMP_ID</TH><th>FIRST_NAME</TH><th>LAST_NAME</TH><th>SALARY</TH><th>HRIE_DATE</TH></TR>" . "</TABLE>";
            while ($rows = $result->fetch_assoc()) {
              echo
              "<tr>" .
                "<td>" . $rows["emp_id"] . "</td>" .
                "<td>" . $rows["FIRST_NAME"] . "</td>" .
                "<td>" . $rows["LAST_NAME"] . "</td>" .
                "<td>" . $rows["SALARY"] . "</td>" .
                "<td>" . $rows["HIRE_DATE"] . "</td>" . "<br>" .
              "</tr>";
            }
          }
          ?>
        </div>
      </form>
    </div>
  </div>
</body>

</html>