<?php include 'includes/header.php' ?>
<div id="basic" class="col-lg-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Add Loans</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">

            <form method="post">
                <div class="row">
                    <div class="form-group col-3">
                        <p>Name of Lender</p>
                        <input type="text" name="txt" class="form-control" required>
                    </div>
                    <div class="form-group col-3">
                        <p> Amount</p>
                        <input type="number" name="txt" class="form-control" required>
                    </div>
                    <div class="form-group col-3">
                        <p> Date of Taking Loan</p>
                        <input type="date" name="txt" class="form-control" required>
                    </div>
                    <div class="form-group col-3">
                        <p> Deadline</p>
                        <input type="date" name="txt" class="form-control" required>
                    </div>
                    <div class="form-group col-12">
                        <p> Purpose</p>
                        <input type="number" name="txt" class="form-control" required>
                    </div>
                    <div class="form-group col-4">
                        <p>Attach Recipt (If Any)</p>
                        <input type="file" name="txt" class="form-control-file" required>
                    </div>
                </div>
                <input type="submit" name="txt" class="mt-4 btn btn-primary">
            </form>
        </div>
    </div>
</div>
<?php include 'includes/footer.php' ?>