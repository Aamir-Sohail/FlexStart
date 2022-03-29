<?php include 'includes/header.php' ?>

<div id="basic" class="col-lg-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Register an Employee</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">

            <form method="post">
                <div class="row">
                    <div class="form-group col-4">
                        <p>Full Name</p>
                        <input type="text" name="txt" class="form-control" required>
                    </div>
                    <div class="form-group col-4">
                        <p>Father Name</p>
                        <input type="text" name="txt" class="form-control" required>
                    </div>
                    <div class="form-group col-4">
                        <p>Email</p>
                        <input type="email" name="txt" class="form-control" required>
                    </div>

                    <div class="form-group col-4">
                        <p>CNIC</p>
                        <input type="text" name="txt" class="form-control" required>
                    </div>
                    <div class="form-group col-4">
                        <p>Contact</p>
                        <input type="number" name="txt" class="form-control" required>
                    </div>
                    <div class="form-group col-4">
                        <p>Address</p>
                        <input type="number" name="txt" class="form-control" required>
                    </div>
                    <div class="form-group col-4">
                        <p>Date of Joining</p>
                        <input type="date" name="txt" class="form-control" required>
                    </div>
                    <div class="form-group col-4">
                        <p>Date of Leaving</p>
                        <input type="date" name="txt" class="form-control" required>
                    </div>
                    <div class="form-group col-4">
                        <p>Password</p>
                        <input type="text" name="txt" class="form-control" required>
                    </div>
                    <div class="form-group col-4">
                        <p>Confirm Password</p>
                        <input type="text" name="txt" class="form-control" required>
                    </div>
                    <div class="form-group col-4">
                        <p>Picture</p>
                        <input type="file" name="txt" class="form-control-file" required>
                    </div>
                </div>
                <input type="submit" name="txt" class="mt-4 btn btn-primary">
            </form>
        </div>
    </div>
</div>
<?php include 'includes/footer.php' ?>