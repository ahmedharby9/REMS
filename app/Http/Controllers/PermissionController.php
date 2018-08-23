<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Control_panel;
use App\License;
use App\Owner;
use App\Owner_control;
use App\Owner_module;
use App\Owner_page;
use App\Owner_sub_module;
use App\System_control;
use App\System_module;
use App\System_page;
use App\System_sub_module;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class permissionController extends Controller
{
    function setData(Request $request)
    {
//        ## set for admins table
//        $admin = new Admin();
//        $admin->name = "Ahmed";
//        $admin->email = "ahmed@gmail.com";
//        $admin->password = Hash::make("admin123");
//        $admin->is_blocked = false;
//        $admin->is_active = false;
//        $admin->save();

//        ## set for control_panel table
//        $control_panel = new Control_panel();
//        $control_panel->username = "admin12";
//        $control_panel->password = Hash::make("admin123");
//        $control_panel->save();

//        ## set for licence table
//        $licence = new License();
//        $licence->license = "12121221212";
//        $licence->activation = "123";
//        $licence->duration = 2;
//        $licence->limit = 8;
//        $licence->save();

//        ## set for owner table
//        $owner = new Owner();
//        $owner->name = "ahmed";
//        $owner->password = Hash::make("admin123");
//        $owner->email = "harby@gmail.com";
//        $owner->limit_users = 2;
//        $owner->count_users = 2;
//        $owner->limit_admin = 2;
//        $owner->count_admin = 2;
//        $owner->duration = 8;
//        $owner->license = "8989898989";
//        $owner->activation = "454";
//        $owner->template_unit = "";
//        $owner->mother_language = "";
//        $owner->is_status = 0;
//        $owner->connection = "";
//        $owner->is_active = 0;
//        $owner->has_key_active = 0;
//        $owner->company_logo_path = "";
//        $owner->company_name = "";
//        $owner->ceo_mobile = "";
//        $owner->ceo_email = "";
//        $owner->ceo_image = "";
//        $owner->google_analysis_code = "";
//        $owner->is_intro_view = 0;
//        $owner->last_page = "";
//        $owner->domain_name = "";
//        $owner->control_panel_version = "";
//        $owner->sub_domain = "";
//        $owner->company_FB_profile = "";
//        $owner->company_address = "";
//        $owner->save();

//        ## set for user table
//        $user = new User();
//        $user->name = "";
//        $user->email = "harby@gmq.cv";
//        $user->password = "1212323";
//        $user->national_id = 1;
//        $user->mobile = "1121212";
//        $user->phone = "01212";
//        $user->job = "";
//        $user->address = "";
//        $user->is_admin = 0;
//        $user->is_status = 0;
//        $user->is_logged_in = 0;
//        $user->is_intro_view = 0;
//        $user->is_active = 0;
//        $user->is_trash = 0;
//        $user->last_page = "";
//        $user->owner_id = 1;
//        $user->save();

//        ## set for System_Module table
//        $system_module = new System_module();
//        $system_module->name_en = "users";
//        $system_module->name_ar = "مستخدمين";
//        $system_module->save();

//        ## set for System Sub Module table
//        $system_sub_module = new System_sub_module();
//        $system_sub_module->name_en = "users";
//        $system_sub_module->name_ar = "مستخدمين";
//        $system_sub_module->system_module_id = 1;
//        $system_sub_module->save();

//        ## set for System page table
//        $system_page = new System_page();
//        $system_page->name_en = "users";
//        $system_page->name_ar = "مستخدمين";
//        $system_page->system_sub_module_id = 1;
//        $system_page->save();

//        ## set for System control table
//        $system_control = new System_control();
//        $system_control->name_en = "save";
//        $system_control->name_ar = "حفظ";
//        $system_control->system_page_id = 1;
//        $system_control->save();

//        ## set for Owner module table
//        $owner_module = new Owner_module();
//        $owner_module->owner_id = 1;
//        $owner_module->system_module_id = 1;
//        $owner_module->save();

//        ## set for Owner sub module table
//        $owner_sub_module = new Owner_sub_module();
//        $owner_sub_module->owner_id = 1;
//        $owner_sub_module->system_sub_module_id = 1;
//        $owner_sub_module->save();

//        ## set for Owner page table
//        $owner_page = new Owner_page();
//        $owner_page->owner_id = 1;
//        $owner_page->system_page_id = 1;
//        $owner_page->save();

//        ## set for Owner control table
        $has_owner_permission = Owner_control::where([["owner_id","=",1],["system_control_id","=",1]])->first();
        if(!$has_owner_permission->owner_id){
                    $owner_control = new Owner_control();
                    $owner_control->owner_id = 1;
                    $owner_control->system_control_id = 1;
                    $owner_control->save();

        }


        return $has_owner_permission;
    }
}
