<?php include 'loadUser.php'; ?>

<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      
        <!-- Start Navbar -->
        <?php include 'navbar.php'; ?>

<!-- Start Sidebar -->
<?php include 'sidebar.php'; ?>




<!-- End Sidebar -->


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
         
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>All Sales Orders Table</h4>
                  <div class="card-header-form">
                    <form>
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                          <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tr>
                        <th class="text-center">
                          <div class="custom-checkbox custom-checkbox-table custom-control">
                            <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                              class="custom-control-input" id="checkbox-all">
                            <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                          </div>
                        </th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Product ID</th>
                        <th>Assigh Date</th>
                        <th>Due Date</th>
                        <th>Priority</th>
                        <th>Action</th>
                      </tr>

                      <?php 

                        $jsonobj =  file_get_contents("https://totco.kakebe.com/api/api/sales_orders/listAllSalesOrders.php");

                        $PHPsalesObj = json_decode($jsonobj);

                        if ($PHPsalesObj->success == 0) {
                            $pdts_error = $PHPsalesObj->message;
                        } elseif ($PHPsalesObj->success == 1) {

                            $sales_orders = $PHPsalesObj->orders;
                            // $pdts_total = $PHPpdtsObj->totalCount;

                            for ($x = 0; $x < count($sales_orders); $x++) {

                                echo '
                                
                                <tr>
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                            id="checkbox-' . $sales_orders[$x]->sales_order_id . '">
                                        <label for="checkbox-' . $sales_orders[$x]->sales_order_id . '" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>' . $sales_orders[$x]->pdt_name . '</td>
                                    <td class="text-truncate">
                                    ' . $sales_orders[$x]->quantity . '
                                    </td>
                                    <td class="align-middle">
                                    ' . $sales_orders[$x]->product_id . '
                                    </td>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>
                                        <div class="badge badge-success">Low</div>
                                    </td>
                                    <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                </tr>
                                
                                ';
                            }
                        }



                      
                      ?>
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          


        </section>




        <!-- Setting Sidebar -->
        <?php include 'settings.php'; ?>
        
      </div>

<!-- Footer -->    
<?php include 'footer.php'; ?>

    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>