
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

    <section class="m-2">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
            a matter of hours to help you.</p>
            
        <div class="row mb-4">
            <div class="text-center">
                <h4 class="text-center text-info">Address: SGGSIE&T, Nanded.</h4>                    
            </div>
        </div>

        <div class="row">

            <!--Grid column-->
            <div class="mb-md-0 mb-5">
                <form>

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6 p-2">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6 p-2">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control" placeholder="Your Email">
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12 p-2">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12 p-2">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Message"></textarea>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                </form>

                <div class="text-center text-md-left">
                    <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                </div>
                <div class="status"></div>
            </div>
            <!--Grid column-->


        </div>

    </section>
</div>
</body>
</html>