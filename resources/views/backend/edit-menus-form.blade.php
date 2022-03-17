
             
              
              <form class="row g-3" action="/admin/editMainMenuTitleDetail" method="post">
                                  @csrf  
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <input type="hidden" value="{{$mainMenus->menu_id}}" name="menu_id" >
                                    <label class="form-label">Main Navigation Name</label>
                                    <input type="text" class="form-control" name="main_menu_name" id="main_menu_name" value="{{$mainMenus->main_menu_id}}" placeholder="Main Navigation Name">
                                  </div>
                                  
                                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="form-label">Sub Navigation Title Name</label>
                                    <input type="text" class="form-control" name="title_name" id="title_name" value="{{$mainMenus->title_name}}" placeholder="Sub Navigation Title Name">
                                  </div>
                                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="form-label">Menu Type</label>
                                    <select class="form-select" name="company_id" id="company_id">
                                      <option value="1" {{$mainMenus->company_id== 1 ? 'selected' : ""}}>Company</option>
                                      <option value="2" {{$mainMenus->company_id== 2 ? 'selected' : ""}}> Master</option>
                                     
                                    </select> 
                                  </div>
                                  <div class="col-12">
                                      <button class="btn btn-success px-4">Update Menu</button>
                                    </div>
                                </form>
              
              