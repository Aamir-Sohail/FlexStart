<?php include './includes/header.php' ?>
<div id="basic" class="col-lg-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Add Project</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">

            <form method="post">
                <div class="row">
                    <div class="form-group col-4">
                        <p>Project Name</p>
                        <input type="text" name="txt" class="form-control" required>
                    </div>
                    <div class="form-group col-4">
                        <p>Project Deadline</p>
                        <input type="date" name="txt" class="form-control" required>
                    </div>

                    <div class="form-group col-4">
                        <p>Project Budget</p>
                        <input type="text" name="txt" class="form-control" required>
                    </div>
                    <div class="form-group col-4">
                        <p>Client Name</p>
                        <input type="number" name="txt" class="form-control" required>
                    </div>
                    <div class="form-group col-4">
                        <p>Client email</p>
                        <input type="number" name="txt" class="form-control" required>
                    </div>
                    <div class="form-group col-4">
                        <p>Client Number</p>
                        <input type="number" name="txt" class="form-control" required>
                    </div>

                    <div class="form-group col-12">
                        <p>Project Description</p>
                        <textarea name="txt" class="form-control"></textarea>
                    </div>
                    <div class="form-group col-4">
                        <p>Attach File (If Any)</p>
                        <input type="file" name="txt" class="form-control-file" required>
                    </div>
                </div>
                <input type="submit" name="txt" class="mt-4 btn btn-primary">
            </form>
        </div>
    </div>
</div>
<?php include './includes/footer.php' ?>