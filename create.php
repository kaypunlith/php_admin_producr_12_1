<?php include("./components/header.php")?>

  <!-- ======= Sidebar ======= -->

  <?php include("./components/sidbar.php")?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">


            <div class="col-12">
              
                </div>

              

              </div>
            </div><!-- End Reports -->

        

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Create product <span>| Today</span></h5>
                    <form action="controller/create.php" method="post" class="p-3" enctype="multipart/form-data">
                        <div class="row">
                             <div class="col-xl-12">
                             <div class="form-group">
                                    <label class="form-label"  for="">Title</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                             </div>

                             <div class="col-xl-6">
                             <div class="form-group">
                                    <label class="form-label" for="">Price</label>
                                    <input type="text" class="form-control" name="price">
                                </div>
                             </div>
                             <div class="col-xl-6">
                             <div class="form-group">
                                    <label class="form-label"  for="">Qty</label>
                                    <input type="text" class="form-control" name="qty">
                                </div>
                             </div>
                             <div class="col-xl-12">
                             <div class="form-group">
                                    <label class="form-label"  for="">Image</label>
                                    <input type="file" class="form-control" name="img">
                                </div>
                             </div>
                             <div class="form-footermt-2">
                                  <div class="float-end mt-3">
                                  <button type="submit" class="btn btn-primary">Create</button>
                                  <button type="submit" class="btn btn-danger">Close</button>
                                  </div>
                             </div>
                        </div>

                    </form>
                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->




   

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->


<?php 
  include("./components/footer.php");
?>