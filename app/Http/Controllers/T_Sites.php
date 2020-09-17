<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\trused_web_sites;
class T_Sites extends Controller
{
    public function AddTrustedSite()
    {
        $sites = DB::table("trused_web_sites")->get();
        return view("AddTrustedSite", compact("sites"));
    }

    public function StoreTrustedSite(Request $request)
    {
        $pattern = '/\b.\b/';
            $validation=$request->validate([
                'Trusted_Site'=> 'required'
              ]);

            $site = new trused_web_sites;
            $site->Site = $request->Trusted_Site;
            $site->save();
            return redirect("Site");


    }

    public function removeSite($id)
    {
        $message = "Something Wrong just happend.";
        if ($id != "" && is_numeric($id))
        {
            try {
                DB::table("trused_web_sites")->where("id","=",$id)->Delete();
                $message = "Removed Successfully";
            } catch (Exception $e) {
            }
        }
        return redirect("Site");


    }
    public function search_web(request $request)
    {
      
        $sites = DB::table("trused_web_sites")->where("Site",$request->check_web_site)->get();
        return view("view_check", compact("sites"));
    }

    public function EditeSite($id)
    {
        $sites = DB::table("trused_web_sites")->where("id","=",$id)->get();
        return view("EditedSite", compact("sites"));

    }
    
    public function EditeSiteStore(request $request, $id)
    {
        

        DB::table('trused_web_sites')
              ->where('id', $id)
              ->update(['Site' => $request->NewT]);

        return redirect("Site");

    }
}
