
<?php 
    include('config.php');
    $sql = "SELECT CName, Position, CTC, jobDescription FROM jobs";
    $result = mysqli_query($conn, $sql);
    $jobs = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    $i = 0;
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>

    <div class="job">

        <div class="p-4 p-md-5 mb-4 text-white bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4">Jobs Portal</h1>
                <p>Best Jobs Available Matching Your Skills</p>
            </div>
        </div>

    </div>
    
    <div class="container">
        <div class="row">
            <?php foreach($jobs as $job): ?>
                <div class="col-4">
                    <div class="card text-white bg-dark p-4 mb-3">
                        <div class="card-header text-center mb-1"> <?php echo($job['CName']); ?> </div>
                        <div class="card-body">
                            <h2 class="card-title p-1"> <?php echo($job['Position']); ?> </h2>
                            <h5 class="card-title p-1"> <?php echo($job['CTC']); ?> </h5>
                            <p class="card-text text-justify p-1"><?php echo($job['jobDescription']); ?></p>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Apply Now</button>
                            <!-- Modal -->
                            <div class="modal fade text-dark" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Please Fill Your Information</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <form method="POST" action="">
                                            <div class="mb-3">
                                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Full Name" aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" name="grad" class="form-control" id="exampleCheck1" placeholder="Highest-Qualification">
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" name="skills" class="form-control" id="exampleCheck1" placeholder="Skills">
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" name="exp" class="form-control" id="exampleCheck1" placeholder="Experience">
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" name="CName" class="form-control" id="exampleCheck1" placeholder="Applying For --( Position and Company Name)">
                                            </div>
                                            <button type="submit" name="apply" class="btn btn-success">Apply</button>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>    
</body>
</html>