  <!--start overlay-->
  <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        
        <!--start switcher-->
       <div class="switcher-body">
        <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-paint-bucket me-0"></i></button>
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
          <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
          </div>
          <div class="offcanvas-body">
            <h6 class="mb-0">Theme Variation</h6>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1">
              <label class="form-check-label" for="LightTheme">Light</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
              <label class="form-check-label" for="DarkTheme">Dark</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
              <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
            </div>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3" checked>
              <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
            </div>
            <hr/>
            <h6 class="mb-0">Header Colors</h6>
            <hr/>
            <div class="header-colors-indigators">
              <div class="row row-cols-auto g-3">
                <div class="col">
                  <div class="indigator headercolor1" id="headercolor1"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor2" id="headercolor2"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor3" id="headercolor3"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor4" id="headercolor4"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor5" id="headercolor5"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor6" id="headercolor6"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor7" id="headercolor7"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor8" id="headercolor8"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
       <!--end switcher-->
<script>
  function showMasterTableEditModel(url,id,modalName,m){

jQuery('#showMasterTableEditModel').modal('show', {backdrop: 'false'});
jQuery('#showMasterTableEditModel .modal-title').html(modalName);
jQuery('#showMasterTableEditModel .modal-body').html('<div class="row"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="loader"></div></div></div>');

$.ajax({
    url: '<?php echo url('/')?>/'+url+'',
    type: "GET",
    data: {id:id,m:m},
    success:function(data) {
      console.log(data)
jQuery('#showMasterTableEditModel .modal-body').html(data);
    }
});
  }

  function deleteRowRecords(url,recordId,companyId){
        var companyId;
        var recordId;
        // alert(url);
        // alert(companyId);
        // alert(recordId);
        $.ajax({
            url: '<?php echo url('/')?>/'+url+'',
            type: "GET",
            data: {companyId:companyId,recordId:recordId},
            success:function(data) {
                location.reload();
                //console.log(data)
            }
        });

    }
</script>
       <div class="col">
        <!-- Button trigger modal -->
        
        <!-- Modal -->
        <div class="modal fade" id="showMasterTableEditModel" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body"></div>
              
            </div>
          </div>
        </div>
      </div>
  </div>
  <!--end wrapper-->



  <!-- Bootstrap bundle JS -->
  <script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
  <!--plugins-->
  <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
  <script src="{{asset('backend/assets/js/pace.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
  <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
  <script src="{{asset('backend/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/table-datatable.js')}}"></script>
  <!--app-->
  <script src="{{asset('backend/assets/js/app.js')}}"></script>
  <script src="{{asset('backend/assets/js/index5.js')}}"></script>
  

</body>


<!-- Mirrored from codervent.com/skodash/demo/collapsed-menu/ltr/index5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Mar 2022 10:34:42 GMT -->
</html>