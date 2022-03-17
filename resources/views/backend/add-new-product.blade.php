
@extends("backend.layouts.main")
@section("main-section")
       <!--start content-->

           

              <div class="row">
                 <div class="col-lg-12 mx-auto">
                  <div class="card">
                    <div class="card-header py-3 bg-transparent"> 
                      <div class="d-sm-flex align-items-center">
                        <h5 class="mb-2 mb-sm-0">Add New Product</h5>
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
                                <form class="row g-3">
                                  <div class="col-12">
                                    <label class="form-label">Product title</label>
                                    <input type="text" class="form-control" placeholder="Product title">
                                  </div>
                                  <div class="col-12 col-lg-4">
                                    <label class="form-label">SKU</label>
                                    <input type="text" class="form-control" placeholder="SKU">
                                  </div>
                                  <div class="col-12 col-lg-4">
                                    <label class="form-label">Color</label>
                                    <input type="text" class="form-control" placeholder="Color">
                                  </div>
                                  <div class="col-12 col-lg-4">
                                    <label class="form-label">Size</label>
                                    <input type="text" class="form-control" placeholder="Size">
                                  </div>
                                  <div class="col-12">
                                    <label class="form-label">Brand</label>
                                    <input type="text" class="form-control" placeholder="Brand">
                                  </div>
                                  <div class="col-12">
                                    <label class="form-label">Images</label>
                                    <input class="form-control" type="file">
                                  </div>
                                  <div class="col-12">
                                    <label class="form-label">Full description</label>
                                    <textarea class="form-control" placeholder="Full description" rows="4" cols="4"></textarea>
                                  </div>
                                  <div class="col-12">
                                      <label class="form-label">Price</label>
                                      <input type="text" class="form-control" placeholder="Price">
                                    </div>
                                    <div class="col-12">
                                      <label class="form-label">Status</label>
                                      <select class="form-select">
                                        <option>Published</option>
                                        <option>Draft</option>
                                      </select>
                                    </div>
                                    <div class="col-12">
                                      <label class="form-label">Tags</label>
                                      <input type="text" class="form-control" placeholder="Tags">
                                    </div>
                                    <div class="col-12">
                                      <button class="btn btn-primary px-4">Submit Item</button>
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
      
@endsection