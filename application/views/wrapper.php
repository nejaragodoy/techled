 
 <!-- Page Wrapper -->
    <div id="wrapper">
        <?php  $this->load->view($sideBar);?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php $this->load->view($topNav); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <?php $this->load->view($content); ?>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

             <?php $this->load->view($footContent); ?>

        

        </div>
    <!-- End of Page Wrapper -->


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    

   