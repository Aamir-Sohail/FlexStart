<?php include 'includes/header.php' ?>

<div id="basic" class="col-lg-12 layout-spacing">
    <div class="widget-content widget-content-area br-6">
        <div id="multi-column-ordering_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
            <div class="dt--top-section">
                <div class="row">
                    <div class="col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center">
                        <div class="dataTables_length" id="multi-column-ordering_length">
                            <h3>Employee</h3>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3">
                        <div id="multi-column-ordering_filter" class="dataTables_filter"><label>
                                <input type="search" class="form-control" placeholder="Search..." aria-controls="multi-column-ordering"></label></div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="multi-column-ordering" class="table table-hover dataTable" style="width: 100%;" role="grid" aria-describedby="multi-column-ordering_info">
                    <thead>
                        <tr role="row">
                            <th style="width: 140px;">Name</th>
                            <th style="width: 236px;">Position</th>
                            <th style="width: 118px;">Office</th>
                            <th style="width: 60px;">Age</th>
                            <th style="width: 123px;">Start date</th>
                            <th style="width: 102px;">Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr role="row">
                            <td class="sorting_1 sorting_2">
                                <div class="d-flex">
                                    <div class="usr-img-frame mr-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="assets/img/girl-3.png">
                                    </div>
                                    <p class="align-self-center mb-0 admin-name"> Haley </p>
                                </div>
                            </td>
                            <td>Senior Marketing Designer</td>
                            <td>London</td>
                            <td>43</td>
                            <td>2012/12/18</td>
                            <td>$313,500</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php' ?>