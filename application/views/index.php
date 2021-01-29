<!DOCTYPE html>
<html lang="en">

<head>
    <!-- partial:../../partials/_head.php -->
    <?php $this->load->view("_partials/_head.php") ?>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.php -->
        <?php $this->load->view("_partials/_navbar.php") ?>

        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_sidebar.php -->
            <?php $this->load->view("_partials/_sidebar.php") ?>

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Dashboard </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Content -->
                    <?php echo $contents; ?>
                    
                </div><!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.php -->
                <?php $this->load->view("_partials/_footer.php") ?>
                <!-- partial -->
            </div> <!-- main-panel ends -->
        </div> <!-- page-body-wrapper ends -->
    </div> <!-- container-scroller -->

    <!-- plugins:_js.php -->
    <?php $this->load->view("_partials/_js.php") ?>

</body>

</html>