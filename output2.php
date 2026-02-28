<?php
    if (isset($_POST['comp'])){
    // Variables
    $praLastname = $_POST['last'];
    $praFirstname = $_POST['first'];
    $praMiddleIn = $_POST['mi'];
    $praBldg = $_POST['bldg'];
    $praCity = $_POST['city'];
    $praProvince = $_POST['province'];
    $praCountry = $_POST['country'];
    $praZIP = $_POST['zip'];
    $praNumKW = $_POST['kilowatts'];
    $praType = $_POST['subs'];
    
    //  Full Name
    $praFullName = $praLastname.", ".$praFirstname." ".$praMiddleIn.".";

    // Address
    $praAddress = $praBldg.", ".$praCity.", ".$praProvince.", ".$praCountry.", ".$praZIP;

    
    // Condition: Subscription
    if ($praType == "Residential"){
        $praSubsRate = 2.75;
    }
    else if ($praType == "Industrial"){
        $praSubsRate = 3.75;
    }
    else if ($praType == "Commercial"){
        $praSubsRate = 4.25;
    }

    // Energy Charge
    $praEnCharge = $praSubsRate * $praNumKW;

    // for charge 3
    $praPrice3 = 0;      

    // Conditional: Other Charge
            if(isset($_POST['discon'])){
                $praCharge1 = "Disconnection (Php 500.00)<br>";   
                $praPrice1 = 500;
            }
            else {
                $praCharge1 = null;
                $praPrice1 = 0;
            }
                
            if(isset($_POST['recon'])){
                $praCharge2 = "Reconnection (Php 600.00)<br>";   
                $praPrice2 = 600;
            }
            else {
                $praCharge2 =null;
                $praPrice2 = 0;
            }

            if(isset($_POST['late'])){
                $praCharge3 = "Late Payment (%30 of the Energy Charge)<br>";   
                $praPrice3 = $praEnCharge * 0.3;
            }
            else {
                $praCharge3 =null;
                $praPrice3 = 0;
            }

            if(isset($_POST['add'])){
                $praCharge4 = "Additional Electricity Meter (Php 750.00)<br>";  
                $praPrice4 = 750;
            }
            else {
                $praCharge4 =null;
                $praPrice4 = 0;
            }

            if(isset($_POST['trans'])){
                $praCharge5 = "Electricity Meter Transfer (Php 1,500.00)<br>";  
                $praPrice5 = 1500;
            }
            else {
                $praCharge5 =null;
                $praPrice5 = 0;
            }

    // Total Other Charge/s
    $praTotalOtherCharges = $praPrice1 + $praPrice2 + $praPrice3 + $praPrice4 + $praPrice5;

    // Total Bill
    $praTotalBill = $praTotalOtherCharges + $praEnCharge;
    }

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Output</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row ">
        <div class="col-md-4 bg-warning d-flex justify-content-center align-items-center text-center">
        <h1 class="display-5 fw-bold text-white">Meralco Billing Receipt</h1>
    </div>
    <div class="col py-5 ps-5 bg-light ">
        <div class="row bg-body-secondary p-1">
            <div class="col">
                <p class="fw-bold">Customer Billing Details</p>
            </div>
        </div>
        <!-- Customer -->
        <div class="row bg-white p-1">
            <div class="col-md-4">
                <p class="fst-normal">
                    Customer Name: 
                </p>
            </div>
            <div class="col">
                <?php echo "<strong>".$praFullName."</strong>"; ?>
            </div>
        </div>


        <!-- Address -->
        <div class="row bg-body-secondary p-1">
            <div class="col-md-4">
                <p class="fst-normal">
                    Address:
                </p>
            </div>
            <div class="col">
                <?php echo "<strong>".$praAddress."</strong>"; ?>
            </div>
        </div>

        <!-- No. of Kilowatts -->
        <div class="row bg-white p-1">
            <div class="col-md-4">
                <p class="fst-normal">
                    No. of Kilowatts: 
                </p>
            </div>
            <div class="col">
                <?php echo $praNumKW." kw" ?>
            </div>
        </div>

        <!-- Subscription Type -->
        <div class="row bg-body-secondary p-1">
            <div class="col-md-4">
                <p class="fst-normal">
                    Subscription Type:
                </p>
            </div>
            <div class="col">
                <?php echo $praType;?>  
            </div>
        </div>
        
        <!-- Rate of Subscription -->
         <div class="row bg-white p-1">
            <div class="col-md-4">
                <p class="fst-normal">
                    Rate of Subscription: 
                </p>
            </div>
            <div class="col">
                <?php echo $praSubsRate;?>
            </div>
         </div>


        <!-- Energy Charge -->
         <div class="row bg-body-secondary p-1">
            <div class="col-md-4">
                <p class="fst-normal">
                    Energy Charge: Php
                </p>
            </div>
            <div class="col">
                <?php echo number_format($praEnCharge, 2); ?>
            </div>
         </div>

         <!-- Other Charge/s -->

         <div class="row bg-white p-1">
            <div class="col-md-4">
                <p class="fst-normal">
                    Other Charge/s
                </p>
            </div>
            <div class="col">
                <?php echo $praCharge1. $praCharge2. $praCharge3. $praCharge4. $praCharge5 ?>
            </div>
         </div>

         <!-- Total Other Charge/s -->
        <div class="row bg-body-secondary p-1">
            <div class="col-md-4">
                <P class="fst-normal">
                    Total Other Charge/s Fee:
                </P>
            </div>
            <div class="col">
                <?php echo "Php ".number_format($praTotalOtherCharges, 2);;?>
            </div>
        </div>

         <!-- Total Electricity Bill -->

         <div class="row bg-white p-1">
            <div class="col-md-4">   
                <p class="fst-normal">
                    <strong>TOTAL ELECTRIC BILL:</strong>
                </p>
            </div>
            <div class="col">
                <?php echo "<strong>Php ".number_format($praTotalBill, 2)."</strong>"; ?>
            </div>
         </div>
    </div>
  </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>