<html>

<head>
  <title>PHP Quiz Day 8</title>
  <style>
    .container {
      margin: 0 auto;
      height: 90%;
      width: 700px;
      border: 1px solid black;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    #form-id {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>

<body>
  <h1>
    Question 3
  </h1>
  <div class="container">
    <?php
    $students = ['kevin', 'amir', 'azizi', 'amirul'];
    echo "<h2>Student List:</h2>";
    array_push($students, 'arjun');
    foreach ($students as $student) {
      echo "<h3>" . $student . "</h3>";
    }
    ?>
  </div>


</body>

</html>