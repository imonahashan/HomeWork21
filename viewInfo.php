<?php
require_once "vendor/autoload.php";

use App\classes\StudentInfo;
$result = StudentInfo::viewStudentsInfo();
?>

<html>
<head>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <div class="col-md-4 m-auto">
            <button class="btn btn-outline-success btn-block button1"><a href="addInfo.php">Add New Student</a></button>
        </div>
        <table class="table">
            <h1 class="text-center font-weight-bold text-center">Student Information</h1>
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Mobile no</th>
                <th scope="col">Present Address</th>
            </tr>
            </thead>
            <?php while ($student = mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td><?php echo $student['id']; ?></td>
                <td><?php echo $student['first_name']; ?></td>
                <td><?php echo $student['last_name']; ?></td>
                <td><?php echo $student['email']; ?></td>
                <td><?php echo $student['mobile']; ?></td>
                <td><?php echo $student['address']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>

</div>
</body>
</html>

