<!-- Product description in modal box -->
<div class="modal fade details-1" id="<?php echo $result['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <!-- Modal content -->
    <div class="modal-content">

      <div class="modal-header">
        <h3><?php echo $result['featured_title']; ?>&percnt;</h3>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div><!--end modal-header-->

      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-3">
              <img class="img-responsive img-center" src="<?php echo $result['featured_img']; ?>" alt="<?php echo $result['featured_title']; ?>" />
            </div><!--end col-->

            <div class="col-md-9">
                <div class="row marginBottom">
                    <div class="col-sm-2 border"><img src="assets/img/mouth.png" alt="Taste icon"></div>
                    <div class="col-sm-2 border">TASTE</div>
                    <div class="col-sm-8 border"><?php echo $result['taste']; ?></div>
                </div>

                <div class="row marginBottom">
                    <div class="col-sm-2 border"><img src="assets/img/nose.png" alt="Smell icon"></div>
                    <div class="col-sm-2 border">SMELL</div>
                    <div class="col-sm-8 border"><?php echo $result['smell']; ?></div>
                </div>

                <div class="row marginBottom">
                    <div class="col-sm-2 border"><img src="assets/img/eye.png" alt="See icon"></div>
                    <div class="col-sm-2 border">SEE</div>
                    <div class="col-sm-8 border"><?php echo $result['see']; ?></div>
                </div>

                <div class="row">
                    <div class="col-sm-2 border"><img src="assets/img/percent.png" alt="See icon"></div>
                    <div class="col-sm-2 border">ALC. VOL</div>
                    <div class="col-sm-8 border"><?php echo $result['alc_vol']; ?>&percnt;</div>
                </div>
            </div><!--end col-->

          </div><!--end row-->
        </div><!--end container-fluid-->
      </div><!--end modal-header-->

      <div class="modal-footer">
        <div class="container-fluid">
          <div class="row">
              <div class="col-sm-4">
                <p>Bottle of 500ml</p>
              </div><!--end col-->
              <div class="col-sm-8">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
              </div><!--end col-->
          </div><!--end row-->
        </div><!--end container-fluid-->
      </div><!--end modal-footer-->

    </div><!--end modal content-->
  </div><!--end modal-dialog-->
</div><!--end myModal -->
