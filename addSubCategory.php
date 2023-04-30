<?php 

    include('conn.php');

    if(isset($_POST['submit'])) {

        $name = $_POST['name'];
        $status = $_POST['status'];

        $sql = "INSERT INTO category(`name`, `status`) VALUES ('$name','$status')";
        $res = mysqli_query($conn,$sql);



    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <?php  
            include('sidebar.php');
        ?>
        <!-- Content Start -->
        <div class="content">
             <!-- Navbar Start -->
        <?php 
            include('navbar.php');
        ?>
            <!-- Navbar End -->

            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Add Sub Category</h6>
                            <form action="" method="post">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="name" id="floatingInput"
                                    placeholder="Action">
                                <label for="floatingInput">Title</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="name" id="floatingInput"
                                    placeholder="Action">
                                <label for="floatingInput">Language</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="name" id="floatingInput"
                                    placeholder="Action">
                                <label for="floatingInput">Realease Year</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="name" id="floatingInput"
                                    placeholder="Action">
                                <label for="floatingInput">Max Quatility</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="name" id="floatingInput"
                                    placeholder="Action">
                                <label for="floatingInput">Max Size</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" name="status" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <?php 

                                        $sqls = "SELECT * FROM category WHERE status='1'";
                                        $ress = mysqli_query($conn,$sqls);
                                        while($rows = mysqli_fetch_assoc($ress)) {
                                    ?>
                                            <option value="<?php echo $rows['id']; ?>"><?php echo $rows['name']; ?></option>
                                    <?php } ?>
                                </select>
                                <label for="floatingSelect">Works with selects</label>
                            </div>
                            
                            <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>