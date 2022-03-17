<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMenuTitle extends Model
{
    protected $table = 'sub_menu_titles';
	protected $fillable = ['sub_menu_id','menu_id','sub_navigation_js','m_controller_name','sub_navigation_title_name','status','date'];
	protected $primaryKey = 'sub_menu_id';

}
