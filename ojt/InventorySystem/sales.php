
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
                <h3 class="m-0 textcolor-light fw-bold">Sales</h3>
                <h6 class="fs-6 fw-light " id="date"></h6>
              </div>
          </div>
      </nav>
      <div class= "h-100 overflow-scroll flex-column justify-content-center bg-dark" id="main-content"> 
      </div>
    </div>
  </div>

<script src="./js/menu.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
</body>
</html>