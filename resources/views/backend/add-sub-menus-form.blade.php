
@extends("backend.layouts.main")
@section("main-section")
       <!--start content-->
      
              <div class="row">
                 <div class="col-lg-12 mx-auto">
                  <div class="card">
                    <div class="card-header py-3 bg-transparent"> 
                      <div class="d-sm-flex align-items-center">
                        <h5 class="mb-2 mb-sm-0">Add Sub Menus</h5>
                        <!-- <div class="ms-auto">
                          <button type="button" class="btn btn-secondary">Print</button>
                          <button type="button" class="btn btn-primary">Export</button>
                        </div> -->
                      </div>
                     </div>
                    <div class="card-body">
                       <div class="row g-3">
                         <div class="col-12 col-lg-12">
                            <div class="card shadow-none bg-light border">
                              <div class="card-body">
                                <form enctype="multipart/form-data" class="row g-3" action="/admin/addSubMenuTitleDetail" method="post">
                                
                                @csrf  
                                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="form-label">Main Navigation Name</label>
                                    <select class="form-select" name="main_menu_id" id="main_menu_id">
                                    @foreach($mainMenus as $mainMenu)
                                    <option  value="{{$mainMenu->menu_id}}"> {{ $mainMenu->main_menu_id }}</option>
                                    
                                    @endforeach
                                    </select> 
                                  </div>
                                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="form-label">Sub Navigation Title Name</label>
                                    <input type="text" class="form-control" name="sub_navigation_title_name" id="sub_navigation_title_name" placeholder="Sub Navigation Title Name">
                                  </div>
                                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="form-label">Sub Navigation Url</label>
                                    <input type="text" class="form-control" name="sub_navigation_url" id="sub_navigation_url" placeholder="Sub Navigation Url ">
                                  </div>
                                  <div class="col-12 col-lg-12">
                                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="form-label">Js</label>
                                    <input type="text" class="form-control" name="sub_navigation_js" id="sub_navigation_js" placeholder="Sub Navigation Title Name">
                                  </div>
                                  </div>
                                  <div class="col-12">
                                      <button class="btn btn-success px-4">Add Menus</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                         </div>
                       </div><!--end row-->
                     </div>
                    </div>
                 </div>
              </div><!--end row-->

          </main>
       <!--end page main-->
      <script type="text/javascript">
        //alert("dsf")
      </script>
@endsection