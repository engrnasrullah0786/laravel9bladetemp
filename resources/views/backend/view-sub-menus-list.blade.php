@extends("backend.layouts.main")
@section('main-section')
    <!--start content-->
    <main class="page-content">

        <h6 class="mb-0 text-uppercase">View Sub Menu</h6>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Main Navigation</th>
                                <th>Sub Navigation Title</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $srNo = 1;
                            ?>
                            @forelse($subMenus as $subMenu)
                                <tr>
                                    <td>{{ $srNo++ }}</td>
                                    <td>{{ $subMenu->main_menu_id }}</td>
                                    <td>{{ $subMenu->sub_navigation_title_name }}</td>
                                    <td>Action</td>

                                </tr>

                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">No Data Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>S.No</th>
                                <th>Main Navigation</th>
                                <th>Sub Navigation Title</th>
                                <th>Action</th>

                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <!--end page main-->
@endsection
