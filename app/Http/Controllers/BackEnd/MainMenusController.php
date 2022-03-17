<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\MainMenuTitle;
use App\Models\SubMenuTitle;
use Input;
use Auth;
use DB;
use Redirect;
use Session;

class MainMenusController extends Controller
{
    public function addNewMenusForm(){
        return view("backend.add-new-menus-form");
    }
    public function addMainMenuTitleDetail(Request $request){
		// dd($request->all());
		$main_menu_id = $request->main_menu_name;
		$title = $request->title_name;
		$company_id = $request->company_id;
		$title_id = preg_replace('/\s+/', '', $title);

		$data1['main_menu_id'] =	$main_menu_id;
		$data1['title_name'] = $title;
		$data1['company_id']=$company_id;
		$data1['title_id'] = $title_id;
        $data1['date']     		  = date("Y-m-d");
		MainMenuTitle::create($data1);
        Session::flash('success', 'added successfully!');
       return redirect('/admin/view-menus-list');
	}

    
    public function viewMenusList(){
        $mainMenus = MainMenuTitle::where('status',1)->get();
            return view("backend.view-menus-list",compact("mainMenus"));
    }
    public function addSubMenusForm(){
        $mainMenus = MainMenuTitle::where("status",1)->get();
        Session::flash('success', 'added successfully!');
        return view("backend.add-sub-menus-form",compact('mainMenus'));
    }
    public function editMenusForm(Request $request){
        ///dd($request->id);
        $mainMenus = MainMenuTitle::where('menu_id',$request->id)->first();
        return view("backend.edit-menus-form",compact('mainMenus'));
    }
    public function editMainMenuTitleDetail(Request $request){
        
       $main_menu_id = $request->main_menu_name;
       $title_name = $request->title_name;
       $company_id = $request->company_id;
       $updateData = MainMenuTitle::find($request->menu_id);
        
       $updateData->main_menu_id= $main_menu_id;
       $updateData->title_name= $title_name;
       $updateData->company_id= $company_id;
       $updateData->date     		  = date("Y-m-d");
       $updateData->save();
       
       Session::flash('success', 'updated successfully!');
       
       return redirect('/admin/view-menus-list');
    }
    public function deleteMenus(Request $request){
        
        $data = array(
            'date' => date("Y-m-d"),
            'status'=>2
        );
        
        MainMenuTitle::where('menu_id',$request->recordId)->update($data);
        Session::flash('danger', 'deleted successfully!');
       //return redirect('/admin/view-menus-list');
    }
    public function addSubMenuTitleDetail(Request $request){
		// dd($request->all());
       //$sub_navigation_js =  Storage::disk('local')->put('custom/'.$request->sub_navigation_js, 'Write Js Code Here');
        //$file = $request->sub_navigation_js;
        $sub_navigation_js = fopen("../assets/custom/js/".$request->sub_navigation_js, "a") or die("Unable to open file!");
        $txt = "";
        fwrite($sub_navigation_js, "\n". $txt);
        fclose($sub_navigation_js);

		$sub_navigation_title_name= $request->sub_navigation_title_name;
		$main_menu_id = $request->main_menu_id;
		$subNavigationUrl = $request->sub_navigation_url;
        
        $data1['sub_navigation_js']= $request->sub_navigation_js;
		$data1['menu_id'] =	$main_menu_id;
        $data1['m_controller_name'] = $subNavigationUrl;
		$data1['sub_navigation_title_name'] = $sub_navigation_title_name;
        $data1['date']     		  = date("Y-m-d");
		SubMenuTitle::create($data1);
        Session::flash('success', 'added successfully!');
       return redirect('/admin/view-menus-list');
	}


    public function viewSubMenusList(){
        $subMenus = DB::table('sub_menu_titles')
                    //->select('sub_navigation_title_name')
                    ->join('main_menu_titles', 'main_menu_titles.menu_id', '=', 'sub_menu_titles.menu_id')
                    ->get();
           // $subMenus = SubMenuTitle::where('status',1)->get();
        return view("backend.view-sub-menus-list",compact("subMenus"));
    }
}
