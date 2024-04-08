
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
      <nav class="navbar navbar-light bg-transparent py-3 px-4">
          <div class="d-flex align-items-center">
              <i class="fa-solid fa-bars fs-3 me-5 bgcolor-dark " id="menu-toggle"></i>
              <div>
                <h3 class="m-0 textcolor-light fw-bold">Dashboard</h3>
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



      <!-- Every page content is included here -->
      <div class= "h-100 overflow-scroll flex-column justify-content-center" id="main-content"> 
        <div class="container d-flex justify-content-center gap-2 flex-wrap mt-5">
          <div class="card  dashboard-card rounded-0 ">
              <div class="card-body text-center text-white d-flex flex-column justify-content-center align-items-center">
                <h3 class="card-title"><i class="bi bi-gift fa-lg me-2 "></i>Total Products</h3>
                <h3 class="card-text">23</h3>
              </div>
          </div>
          <div class="card  dashboard-card rounded-0">
              <div class="card-body text-center text-white d-flex flex-column justify-content-center align-items-center">
                <h3 class="card-title"><i class="bi bi-truck me-2 fa-lg"></i>Total Suppliers</h3>
              
                <h3 class="card-text">42</h3>
              </div>
          </div>    
        </div>
        <div class="container d-flex justify-content-center gap-3 flex-wrap mt-5">
          <div class="card  dashboard-card rounded-0">
              <div class="card-body text-center text-white d-flex flex-column justify-content-center align-items-center">
                <h3 class="card-title"><i class="me-3 fa-solid fa-cart-shopping fa-lg"></i> Purchase Order</h3>
                <h3 class="card-text">11</h3>
              </div>
          </div>
          <div class="card dashboard-card rounded-0">
              <div class="card-body text-center text-white d-flex flex-column justify-content-center align-items-center">
                <h3 class="card-title"><i class="me-3 fa fa-line-chart fa-lg" aria-hidden="true"></i>Total Sales Order</h3>
              
                <h3 class="card-text">50</h3>
              </div>
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