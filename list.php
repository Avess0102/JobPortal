<?php 
    include('header.php');
    include('config.php');
    $sql = "SELECT `name`, `email`, `grad`, `skills`, `Experience`, `appliedFor` FROM `appliedcandidates`";
    $result = mysqli_query($conn, $sql);
    $candidates = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    $i=0;
    mysqli_close($conn);
?>

<div class="content">

    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Candidate Name</th>
                <th scope="col">Applied For</th>
                <th scope="col">Qualification</th>
                <th scope="col">Email</th>
                <th scope="col">Skills</th>
                <th scope="col">Experience</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($candidates as $candidate): ?>
                <tr>
                    <th scope="row">  <?php ++$i; ?> </th>
                    <td>  <?php echo($candidate['name']); ?> </td>
                    <td>  <?php echo($candidate['appliedFor']); ?> </td>
                    <td>  <?php echo($candidate['grad']); ?> </td>
                    <td>  <?php echo($candidate['email']); ?> </td>
                    <td>  <?php echo($candidate['skills']); ?> </td>
                    <td>  <?php echo($candidate['Experience']); ?> </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>