
<?php include('header.php'); ?>
  <?php include('navbar.php'); ?>

<!-------------------seller-----form---start------------------>
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Seller Registration </h6>
                </div>
                <div class="card-body">
                  <div class="form-group" id="simple-date1">
                    <label for="simpleDataInput">Simple Data Input</label>
                      <div class="input-group date">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        </div>
                        <input type="text" class="form-control" value="01/06/2020" id="simpleDataInput">
                      </div>
                  </div>
                  <div class="form-group" id="simple-date2">
                    <label for="oneYearView">One Year View</label>
                      <div class="input-group date">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        </div>
                        <input type="text" class="form-control" value="01/06/2020" id="oneYearView">
                      </div>
                  </div>
                  <div class="form-group" id="simple-date3">
                    <label for="decadeView">Decade View</label>
                      <div class="input-group date">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        </div>
                        <input type="text" class="form-control" value="01/06/2020" id="decadeView">
                      </div>
                  </div>
                  <div class="form-group" id="simple-date4">
                    <label for="dateRangePicker">Range Select</label>
                    <div class="input-daterange input-group">
                      <input type="text" class="input-sm form-control" name="start" />
                      <div class="input-group-prepend">
                        <span class="input-group-text">to</span>
                      </div>
                      <input type="text" class="input-sm form-control" name="end" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="col-lg-6">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary"> </h6>
                </div>
                <div class="card-body">
                  <div class="form-group" id="simple-date1">
                    <label for="simpleDataInput">Simple Data Input</label>
                      <div class="input-group date">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        </div>
                        <input type="text" class="form-control" value="01/06/2020" id="simpleDataInput">
                      </div>
                  </div>
                  <div class="form-group" id="simple-date2">
                    <label for="oneYearView">One Year View</label>
                      <div class="input-group date">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        </div>
                        <input type="text" class="form-control" value="01/06/2020" id="oneYearView">
                      </div>
                  </div>
                  <div class="form-group" id="simple-date3">
                    <label for="decadeView">Decade View</label>
                      <div class="input-group date">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        </div>
                        <input type="text" class="form-control" value="01/06/2020" id="decadeView">
                      </div>
                  </div>
                  <div class="form-group" id="simple-date4">
                    <label for="dateRangePicker">Range Select</label>
                    <div class="input-daterange input-group">
                      <input type="text" class="input-sm form-control" name="start" />
                      <div class="input-group-prepend">
                        <span class="input-group-text">to</span>
                      </div>
                      <input type="text" class="input-sm form-control" name="end" />
                    </div>
                  </div>
                </div>
              </div>
            </div>     

           </div>
         </div>      
            <!-------------------seller-----form---end----------------->

            <?php include('footer.php') ?>