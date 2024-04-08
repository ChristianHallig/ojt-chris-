<?php 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinity Technosys</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="bg">
        <div class="container" bg-color="blue">
            <img src="images/logo.png" class="logo" alt="Logo">
            <h1>Security Surveillance System & ICT Innovative Solution</h1>
            <div>
                <div class="dashboard-btn">
                    <div class="btn-holder"> 
                        <button class="crm">
                            <img src="images/crm.png" alt="crm">
                        </button>
                        <h3 class="crm-hover">CRM</h3>
                        <!--<span class="crm-text">Click the icon to launch the CRM System</span> -->
                    </div>
                    <div class="btn-holder">
                        <button class="ticket">
                            <img src="images/ticket.png" alt="crm">
                        </button> 
                        <h3 >Ticketing</h3>
                    </div>
                    <div class="btn-holder">
                        <button class="report">
                            <img src="images/reports.png" alt="crm">
                        </button>
                        <h3 >Reports</h3>
                    </div>
                </div>
                <div class="dashboard-btn">
                    <div class="btn-holder">
                        <button class="inventory">
                            <a href="/InventorySystem/dashboard_inventory.php"><img src="images/inventory.png" alt="crm"></a>
                        </button>
                        <h3 >Inventory System</h3>
                    </div>
                    <div class="btn-holder">
                        <button class="personnel">
                            <img src="images/personnel.png" alt="crm">
                        </button>
                        <h3  class="">Personnel</h3>
                    </div>
                    <div class="btn-holder">
                        <button class="hr">
                            <img src="images/hr.png" alt="crm">
                        </button>
                        <h3 >Human Resources</h3>
                    </div>
                </div>
            </div>
            <div class="logout-container">
                <a href="../logout.php" class="logout-btn"><i class="me-3 fa-solid fa-right-from-bracket"></i>Logout</a>
            </div>
            

        </div>
    </div>
</body>
</html>
