
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    <link rel="stylesheet" href="./css/header_sidebar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

</head>
<body>
  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="sidebar-menu" id="sidebar">
      <div class="sidebar-heading ms-3 text-white py-5 fs-5 fw-bold text-uppercase"><span class="py-5 text-white" id="menu-close"><i class="fa-solid fa-circle-xmark fa-2xl"></i></span></div>
      <div class="list-group list-group-flush my-3" id="list-link">
      <a href="dashboard_inventory.php" class="list-group-item backgroundcolor-red text-white ms-3 mb-4 rounded-start mb-5"><i class="me-3 fa-solid fa-gauge"></i>Dashboard</a>
      <a href="products.php" class="list-group-item backgroundcolor-red text-white ms-3 mb-2 rounded-start"><i class="me-3 fa-solid fa-gift"></i>Products</a>
      <a href="supplier.php" class="list-group-item backgroundcolor-red text-white ms-3 mb-2 rounded-start"><i class="me-3 fa-solid fa-truck-field"></i>Supplier</a>
      <a href="purchases.php" class="list-group-item backgroundcolor-red text-white ms-3 mb-2 rounded-start"><i class="me-3 fa-solid fa-cart-shopping"></i>Purchases</a>
      <a href="sales.php" class="list-group-item backgroundcolor-red text-white ms-3 mb-2 rounded-start"><i class="me-3 fa fa-line-chart" aria-hidden="true"></i>Sales</a>
      </div>
      <a href="../dashboard.php" class="list-group-item text-center text-white p-3 rounded-0"><img src="./img/back.svg" class="icons me-2">back to home</a>   
    </div>

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-light bg-transparent py-2 px-4">
          <div class="d-flex align-items-center">
              <i class="fa-solid fa-bars fs-3 me-5 textcolor-dark " id="menu-toggle"></i>
              <div>
                <h3 class="m-0 textcolor-light fw-bold">Products</h3>
                <h6 class="fs-6 fw-light " id="date"></h6>
              </div>    
          </div>
          <div class="d-flex align-item-center justify-item-center">
          <div class="dropdown me-5">
            <button class="btn dropdown-toggle backgroundgcolor-red" type="button" id="notificationDropdown" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-bell "></i>
            </button>
          </div>
          <div class="ms-auto rounded-2 backgroundcolor-red  px-3 py-2 text-white">
            <h6 class="m-auto"><i class="bi bi-person me-2"></i>Admin <span id="admin"></span></h6>
          </div>
          </div>
      </nav>


      <div class= "h-100 flex-column justify-content-center" id="main-content"> 
        <div class="container d-flex justify-content-center gap-3 flex-wrap mt-5">
          <div class="container d-flex w-100 justify-content-between search-buttons m-1">
            <input class="p-2 w-25 form-control border-outline-dark" type="search" placeholder="Search" id="search-input" name="search-input" autocomplete="off">
            <button type="button" class="btn btn-danger add-btn px-4 fw-3 me-5" data-bs-toggle="modal" data-bs-target="#addProductModal">
              Add product
            </button>

            <!-- Modal -->
            <div class="modal fade modal-lg " id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5 margin-auto textcolor-light" id="addProductModalLabel"> Add Product</h1>
                  </div>
                  <div class="modal-body">
                    <div class="alert alert-warning d-none" id="errorMessage"></div>
                    <form id="add-product" >
                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-2">
                                  <label class="w-50 label mb-1">Brand Name: </label>
                                  <input class="form-control col-sm-5 border" type="text" name="brandname">
                                </div>
                                <div class="form-group mb-2">
                                  <label class="w-50 label mb-1">Type:</label>
                                  <select class="form-select  col-sm-5" name="type">
                                    <!-- Getting data from database -->
                                       <option selected></option>
                                       <option>NVR</option>
                                       <option>DVR</option>
                                       <option>CAMERA</option>
                                       <option>ACCESSORIES</option>
                                       <option>POWER SUPPLY</option>
                                    </select>
                                </div>
                                <div class="form-group mb-2">
                                  <label class="w-50 label mb-1">Price:</label>
                                  <input class="form-control w-100 col-sm-5" type="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
                                </div>
                                <div class="form-group mb-2">
                                  <label class="w-50 label mb-1">Serial Name: </label>
                                  <input class="form-control w-100 col-sm-5" type="text" name="username">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-2">
                                  <label class="w-50 label mb-1">Model:</label>
                                  <input class="form-control w-100 col-sm-5" type="" name="password">
                                </div>
                                <div class="form-group mb-2">
                                  <label class="w-75 label mb-1">Sub-category:</label>
                                  <select class="form-select  col-sm-5" name="sub-category">
                                    <!-- Getting data from database -->
                                       <option selected></option>
                                       <option>Office Use</option>
                                       <option>Rough-Ins</option>
                                       <option>Stocks</option>

                                    </select>
                                  
                                </div>
                                <div class="form-group mb-2">
                                  <label class="w-75 label mb-1">Supplier:</label>
                                  <input class="form-control w-100 col-sm-5" type="text" name="account-type" > 
                                </div>
                                <div class="form-group mb-2">
                                  <label class="w-75 label mb-1">Quantity :</label>
                                  <input class="form-control w-100 col-sm-5" type="text" name="account-type"> 
                                </div>
                            </div>               
                        </div>
                        <div class="row form-group mb-1 mt-2 mx-1">
                          <label class="w-50 label mb-1">Description:</label><br>
                          <textarea placeholder="Input description here..." class="form-control"></textarea>
                        </div>
                        <div class="row form-down text-center">
                              <button type="submit" class="add-btn rounded-5 py-3 w-25 mx-auto mt-5 text-white fw-bold backgroundcolor-red" name="register">add</button>
                        </div>
                  </form>










                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container mt-2 h-100 overflow-y-auto">
          <div class="mt-1 overflow-y-scroll" id="table" style="height: 70vh">
            <table class="table table-danger table-hover text-center default-table table-sm table-bordered align-middle px-3" id='table-content'>
                <thead class="table-dark">
                  <tr>
                      <th>Code</th>
                      <th>Model</th>
                      <th>Brand Name</th>
                      <th>Type</th></th>
                      <th>Category</th> 
                      <th>Sub-Category</th>
                      <th>Supplier</th>
                      <th>Serial No.</th>
                      <th>Quantity</th>   
                      <th>Price</th> 
                      <th class="action-column">Action</th>
                  </tr> 
                  
                </thead>                  
                <tbody>
                  <tr>
                    <td>1232</td>
                    <td>Analog</td>
                    <td>HikVision</td>
                    <td>Camera</td>
                    <td>CCTV</td>
                    <td>Stocks</td>
                    <td>KalmanTech</td>
                    <td>NSW617I1</td>
                    <td>10</td>
                    <td>2,022.00</td>
                    <td></td>
                
                  </tr>
                </tbody>
                  
            </table>
          </div>
        </div>
      </div>

      
    </div>
  </div>

<script src="./js/menu.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
</body>
</html>