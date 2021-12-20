
<?php include 'header.php' ?>
<?php 
    include('config.php');
    $sql = "SELECT CName, Position, CTC FROM jobs";
    $result = mysqli_query($conn, $sql);
    $jobs = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    $i = 0;
    mysqli_close($conn);
?>

    <!-- Page content -->
    <div class="content">
        <p>
            <a class="btn btn-primary mt-3" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Post Job
            </a>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">

            <form method="POST" action="">
                <div class="mb-3">
                    <input type="text" name="CName" class="form-control" id="exampleInputEmail1" placeholder="Company Name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <input type="text" name="Position" class="form-control" id="exampleInputPassword1" placeholder="Position">
                </div>
                <div class="mb-3">
                    <input type="text" name="CTC" class="form-control" id="exampleCheck1" placeholder="CTC">
                </div>
                <div class="mb-3">
                    <input type="text" name="skills" class="form-control" id="exampleCheck1" placeholder="Skills Required">
                </div>
                <div class="mb-3">
                    <input type="text" name="jobDescription" class="form-control" id="exampleCheck1" placeholder="Job Description">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Post</button>
            </form>                
            </div>
        </div>

        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">CTC</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($jobs as $job): ?>
                    <tr>
                        <th scope="row"> <?php echo ++$i; ?> </th>  
                        <td> <?php echo($job['CName']) ?> </td>  
                        <td> <?php echo($job['Position']) ?> </td>   
                        <td> <?php echo($job['CTC']) ?> </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>