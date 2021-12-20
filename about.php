
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

<div class="content">


    <div class="about-section text-center bg-light">
        <h1 class="pt-5">About Us Page</h1>
        <h2 class="text-center pb-2">Our Team</h2>
    </div>

    <div class="row p-5 mx-5">
        <div class="col">
            <div class="card" style="width: 100%;">
            <img src="team2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Saurabh Sambhe</h5>
                <p class="card-text">2019BCS106</p>
                <a href="#" class="btn btn-primary">Contact</a>
            </div>
            </div>
        </div>

        <div class="col">
            <div class="card" style="width: 100%;">
            <img src="team3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Saurabh Sambhe</h5>
                <p class="card-text">2019BCS106</p>
                <a href="#" class="btn btn-primary">Contact</a>
            </div>
            </div>
        </div>
</div>
</div>

</body>
</html>
