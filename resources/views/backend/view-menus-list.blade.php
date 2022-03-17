@extends("backend.layouts.main")
@section("main-section")
<!--start content-->


				<h6 class="mb-0 text-uppercase">View Main Menu Title</h6>
				<hr/>
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
								@forelse($mainMenus as $mainMenu)	
									<tr>
										<td>{{$srNo++}}</td>
										<td>{{$mainMenu->main_menu_id}}</td>
										<td>{{$mainMenu->title_name}}</td>
										<td>
										<div class="dropdown">
											<button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Action</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" onclick="showMasterTableEditModel('admin/edit-menus','<?php echo $mainMenu->menu_id ?>',' Edit Menus Form','<?php echo $mainMenu->company_id?>')">Edit</a>
												</li>
												<li><a class="dropdown-item" onclick="deleteRowRecords('admin/delete-menus','<?php echo $mainMenu->menu_id ?>','<?php echo $mainMenu->company_id?>')">Delete</a>
												</li>
												<li><a class="dropdown-item" href="#">Something else here</a>
												</li>
											</ul>
										</div>
										
										</td>
										
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