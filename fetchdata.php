<?php
include "vendor/autoload.php";
$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->local->students;
$result = $collection->find();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="card-body">
<h1 style="text-align:center;">My Classmates</h1>
<!-- <div class="container"> -->
<table class="table">
<thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Student ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Birth Date</th>
      <th scope="col">Address</th>
      <th scope="col">Program</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Emergency Contact</th>
    </tr>
    <?php
        foreach ($result as $student) {
            ?>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row"><?php echo $student ['_id']; ?></th>
                    <td><?php echo $student['studentId']; ?></td>
                    <td><?php echo $student['firstName']; ?></td>
                    <td><?php echo $student['lastName']; ?></td>
                    <td><?php echo $student['birthdate']; ?></td>
                    <td><?php echo $student['address']; ?></td>
                    <td><?php echo $student['program']; ?></td>
                    <td><?php echo $student['contactNumber']; ?></td>
                    <td><?php echo $student['emergencyContact']; ?></td>
                   
                    </tr>
                </tbody>
        
                <?php
         }
        ?>
</table>
    </div>
    </div>
    









<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>