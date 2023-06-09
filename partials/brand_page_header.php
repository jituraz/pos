<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
?>

<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4>
        <i class="icon-arrow-left52 mr-2"></i>
        <span class="font-weight-semibold">POS</span> - Brand List
      </h4>
      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>

    <div class="header-elements d-none">
      <div class="container">
        <button class="btn btn-primary" data-toggle="modal" data-target="#mymodal">
          Add Brand
        </button>
        <div class="modal fade" id="mymodal">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <div class="modal-title">
                  <h1>Add Brand</h1>
                  <h4>Create New Brand</h4>
                </div>

                <button class="close" data-dismiss="modal">
                  &times;
                </button>
                <?php include_once($partials . 'brand_add_modal.php') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
    <div class="d-flex">
      <div class="breadcrumb">
        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
        <a href="ecommerce_product_list.html" class="breadcrumb-item">Product</a>
        <span class="breadcrumb-item active">Brand</span>
      </div>

      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>

    <div class="header-elements d-none">
      <div class="breadcrumb justify-content-center">
        <a href="#" class="breadcrumb-elements-item">
          <i class="icon-comment-discussion mr-2"></i>
          Support
        </a>

        <div class="breadcrumb-elements-item dropdown p-0">
          <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
            <i class="icon-gear mr-2"></i>
            Settings
          </a>

          <div class="dropdown-menu dropdown-menu-right">
            <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
            <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
            <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>