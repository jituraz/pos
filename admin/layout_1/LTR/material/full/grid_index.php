<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
$id= $_GET['id'];


$dataslide = file_get_contents($datasource . 'brand.json');
$slides = json_decode($dataslide, "ture");



$slide= null;

foreach ($slides as $key => $aslide) {
  if($aslide['id'] == $id){
      $slide = $aslide;
      break;
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include_once($partials . 'head.php') ?>

<body>
  <!-- Main navbar -->
  <?php include_once($partials . 'mainnav.php') ?>
  <!-- /main navbar -->

  <!-- Page content -->
  <div class="page-content">
    <!-- Main sidebar -->
    <?php include_once($partials . 'mainsidebar.php') ?>
    <!-- /main sidebar -->

    <!-- Main content -->
    <div class="content-wrapper">
      <!-- Page header -->
      <?php include_once($partials . 'header.php') ?>
      <!-- /page header -->

      <!-- Content area -->

    <div class="row">
      <div class="card-body">
      <div class="col-sm-6 col-xl-3">
          <div class="card">
            <div class="card-img-actions mx-1 mt-1">
              <img class="card-img img-fluid" src="<?= $assets. $slide['src']?>" alt="<?= $assets. $slide['src'] ?>">
              <div class="card-img-actions-overlay card-img">
                
                <a href="<?= $assets. $slide['src'] ?>" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
                  <i class="icon-eye"></i>
                </a>

                <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                  <i class="icon-link"></i>
                </a>
                <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                  <i class="icon-link"></i>
                </a>
              </div>
            </div>

            <div class="card-body">
              <div class="d-flex align-items-start flex-nowrap">
                <div>
                  <div class="font-weight-semibold mr-2"><?= $slide['BrandName'] ?></div>
                  <span class="font-size-sm text-muted">Size: 432kb</span>
                  <div>
                    <h6 class="font-weight-semibold mr-2">Disciption</h6>
                    <span><?= $slide['Discription'] ?></span>
                  </div>


                  <ul class="list-inline list-inline-condensed mt-3 mb-0">
                    <li class="list-inline-item"><a href="#" class="btn btn-outline bg-success btn-icon text-success border-success border-2 rounded-round">
                        <i class="icon-google-drive"></i></a>
                    </li>
                    <li class="list-inline-item"><a href="#" class="btn btn-outline bg-info btn-icon text-info border-info border-2 rounded-round">
                        <i class="icon-twitter"></i></a>
                    </li>
                    <li class="list-inline-item"><a href="#" class="btn btn-outline bg-grey-800 btn-icon text-grey-800 border-grey-800 border-2 rounded-round">
                        <i class="icon-github"></i></a>
                    </li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- /content area -->

      <!-- Footer -->
      <?php include_once($partials . 'footer.php') ?>
      <!-- /footer -->
    </div>
    <!-- /main content -->
  </div>
  <!-- /page content -->



</body>

</html>