<?php include 'includes/header.php' ?>
<div class="row layout-top-spacing w-100" id="cancel-row">
    <div class="col-lg-12">
        <div class="widget-content searchable-container list">

            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-5 col-sm-12 filtered-list-search layout-spacing align-self-center">
                    <form class="form-inline my-2 my-lg-0">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                            <input type="text" class="form-control product-search" id="input-search" placeholder="Search Contacts...">
                        </div>
                    </form>
                </div>

            </div>

            <div class="searchable-items list">
                <div class="items items-header-section">
                    <div class="item-content">
                        <div class="">
                            <div class="col">
                            </div>
                            <h4>Project Name</h4>
                        </div>
                        <div class="col">
                            <h4>Project Deadline</h4>
                        </div>
                        <div class="col">
                            <h4 style="margin-left: 0;">Assigned To</h4>
                        </div>
                        <div class="col">
                            <h4 style="margin-left: 3px;">Client Name</h4>
                        </div>
                        <div class="col">
                            <h4 style="margin-left: 3px;">Client Email</h4>
                        </div>
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2  delete-multiple">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                <line x1="14" y1="11" x2="14" y2="17"></line>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="items">
                    <div class="item-content">
                        <div class="col">
                                <p data-name="Alan Green">Alan Green</p>
                        </div>
                        <div class="col">
                            <p class="usr-email-addr" data-email="alan@mail.com">alan@mail.com</p>
                        </div>
                        <div class="col">
                            <p class="usr-location" data-location="Boston, USA">Boston, USA</p>
                        </div>
                        <div class="col">
                            <p class="usr-ph-no" data-phone="+1 (070) 123-4567">+1 (070) 123-4567</p>
                        </div>
                        <div class="col">
                            <p class="usr-ph-no" data-phone="+1 (070) 123-4567">maxhar30@gmail.con</p>
                        </div>
                        <div >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 edit">
                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-minus delete">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="8.5" cy="7" r="4"></circle>
                                <line x1="23" y1="11" x2="17" y2="11"></line>
                            </svg>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <?php include 'includes/footer.php' ?>