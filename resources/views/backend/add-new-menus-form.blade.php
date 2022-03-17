@extends("backend.layouts.main")
@section('main-section')
    <!--start content-->

    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="card">
                <div class="card-header py-3 bg-transparent">
                    <div class="d-sm-flex align-items-center">
                        <h5 class="mb-2 mb-sm-0">Add Main Menu Title</h5>
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
                                    <form class="row g-3" action="/admin/addMainMenuTitleDetail" method="post">
                                        @csrf
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <label class="form-label">Main Navigation Name</label>
                                            <input type="text" class="form-control" name="main_menu_name"
                                                id="main_menu_name" placeholder="Main Navigation Name">
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <label class="form-label">Sub Navigation Title Name</label>
                                            <input type="text" class="form-control" name="title_name" id="title_name"
                                                placeholder="Sub Navigation Title Name">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <label class="form-label">Menu Type</label>
                                            <select class="form-select" name="company_id" id="company_id">
                                                <option value="1">Company</option>
                                                <option value="2"> Master</option>

                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-success px-4">Add Menus</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
    </div>
    <!--end row-->

    </main>
    <!--end page main-->
    <script type="text/javascript">
        //alert("dsf")
    </script>
@endsection
