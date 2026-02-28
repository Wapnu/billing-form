<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container bg-white">
        <form action="output2.php" method="post">
            <div class="row">
                <div class="col-md-4 bg-warning d-flex justify-content-center align-items-center text-center">
                <h1 class="display-5 fw-bold text-white">Meralco Billing Form</h1>
            </div>
                <div class="col bg-light text-black p-3">
                    <!-- Customer Name -->
                    <div class="row mt-4">
                        <label for="">Customer Name</label>
                        <div class="col">
                            <input type="text" name="last" id="" class="form-control">
                            <label for="" class="form-label text-muted">Last Name</label>
                        </div>
                        <div class="col">
                            <input type="text" name="first" id="" class="form-control">
                            <label for="" class="form-label text-muted">First Name</label>
                        </div>
                        <div class="col">
                            <input type="text" name="mi" id="" class="form-control">
                            <label for="" class="form-label text-muted">Middle Initial</label>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="row mt-2">
                        <label for="">Address</label>
                        <div class="col">
                            <input type="text" name="bldg" id="" class="form-control">
                            <label for="" class="form-label text-muted">Building Number, Street, and Barangay</label>
                        </div>
                        <div class="col">
                            <input type="text" name="city" id="" class="form-control">
                            <label for="" class="form-label text-muted">City</label>
                        </div>
                    </div>

                    <!-- Address #2 -->
                    <div class="row">
                        <div class="col">
                            <input type="text" name="province" id="" class="form-control">
                            <label for="" class="form-label text-muted">Province</label>
                        </div>
                        <div class="col">
                            <input type="text" name="country" id="" class="form-control">
                            <label for="" class="form-label text-muted">Country</label>
                        </div>
                        <div class="col">
                            <input type="text" name="zip" id="" class="form-control">
                            <label for="" class="form-label text-muted">ZIP</label>
                        </div>
                    </div>

                    <!-- No. of Kilowatts -->
                    <div class="row">
                        <div class="col">
                            <label for="" class="form-label">No. of Kilowatts</label>
                            <input type="number" name="kilowatts" id="" class="form-control">
                        </div>
                    </div>

                    <!-- Subs and Other  -->

                    <div class="row mt-4 text-white">
                        <div class="col-md-5 bg-warning mt-2 rounded mx-4 p-4">
                            <label for="" class="h3 text-center fw-bold form-label">Subscription Type</label>                        
                                <div class="form-check">
                                    <input type="radio" name="subs" value="Residential" id="" class="form-check-input">
                                    <label for="" class="form-check-label"> Residential (Php 2.75 per KW)</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="subs" value="Industrial" class="form-check-input">
                                    <label for="" class="form-check-label"> Industrial (Php 3.75 per KW)</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="subs" value="Commercial" class="form-check-input">
                                    <label for="" class="form-check-label"> Commercial (Php 4.25 per KW)</label>
                                </div>
                        </div>

                        <div class="col-md-5 bg-warning mt-2 rounded mx-5 p-4">
                            <label for="" class="h3 text-center fw-bold form-label">Other Charges</label>  
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="discon" id="">
                                <label for="" class="form-check-label">Disconnection (Php 500.00)</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="recon" id="">
                                <label for="" class="form-check-label">Reconnection (Php 600.00)</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="late" id="">
                                <label for="" class="form-check-label">Late Payment (%30 of the Energy Charge)</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="add" id="">
                                <label for="" class="form-check-label">Additional Electricity Meter (Php 750.00)</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="trans" id="">
                                <label for="" class="form-check-label">Electricity Meter Transfer (Php 1,500.00)</label>
                            </div>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="row my-5">
                        <div class="col text-center ">
                            <input type="submit" name="comp" value="Compute" class="btn btn-warning w-50 text-white">
                        </div>
                    </div>

            </div>

        </form>

    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>