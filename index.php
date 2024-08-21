<?php include("./components/header.php");
    include("./Modal/modal.php");

?>

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
                  <h5 class="card-title">Viwe proiduct <span>| Today</span></h5>

                  <table class="table table-borderless table-bordered table-striped">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Preview Image</th>
                        <th scope="col">Product</th>
                        <th scope="col">Product price</th>
                        <th scope="col">Prodcut Qty</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        include("./config/db.php");
                        $sql="SELECT * FROM `product_admin`";
                        $result=$con->query($sql);
                        while($row=$result->fetch_array()){
                            ?>
                                <tr>
                                <td><?php echo $row[0]?></td>
                                <th scope="row"><a href="#"><img src="public/image/<?php echo $row[1]?>" style="height:70px;width:70px" alt=""></a></th>
                                <td><a href="#" class="text-primary fw-bold"><?php echo $row[2]?></a></td>
                                <td><?php echo $row[3]?></td>
                                <td class="fw-bold"><?php echo $row[4]?></td>
                                <td>
                                    <a href="edit.php?prodcut_Id=<?php echo $row[0]?>" class="btn btn-warning rounded-0">Edit</a>
                                    <button onclick="Delte_prodcut(<?php echo $row[0]?>)" class="btn btn-danger rounded-0" data-bs-toggle="modal" data-bs-target="#del_pro">Delete</button>
                                </td>
                              </tr>
                            <?php 
                        }
                      
                      ?>
                     

                    </tbody>
                  </table>

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