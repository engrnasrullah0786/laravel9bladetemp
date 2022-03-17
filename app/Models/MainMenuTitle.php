<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainMenuTitle extends Model
{
    protected $table = 'main_menu_titles';
	protected $fillable = ['menu_id','main_menu_id','company_id','title_name','title_id','status','date'];
	protected $primaryKey = 'menu_id';

}
