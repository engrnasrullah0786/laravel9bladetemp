<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MainMenuTitle;
use Input;
use Auth;
use DB;
class UserAddDetailController extends Controller
{
    // public function addMainMenuTitleDetail(Request $request){
	// 	// dd($request->all());
	// 	$main_menu_id = $request->main_menu_name;
	// 	$title = $request->title_name;
	// 	$company_id = $request->company_id;
	// 	$title_id = preg_replace('/\s+/', '', $title);

	// 	$data1['main_menu_id'] =	$main_menu_id;
	// 	$data1['title_name'] = $title;
	// 	$data1['company_id']=$company_id;
	// 	$data1['title_id'] = $title_id;
    //     $data1['date']     		  = date("Y-m-d");
	// 	MainMenuTitle::create($data1);
    //     //DB::table('main_menu_titles')->insert($data1);
	// }
	// public function addSubMenuTitleDetail(Request $request){
	// 	// dd($request->all());
	// 	$sub_navigation_title_name= $request->sub_navigation_title_name;
	// 	$main_menu_id = $request->main_menu_id;
		
	// 	$data1['main_menu_id'] =	$main_menu_id;
	// 	$data1['sub_navigation_title_name'] = $sub_navigation_title_name;
    //     $data1['date']     		  = date("Y-m-d");
	// 	SubMenuTitle::create($data1);
    //     //DB::table('main_menu_titles')->insert($data1);
	// }
}
