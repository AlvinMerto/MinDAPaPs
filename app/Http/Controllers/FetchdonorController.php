<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fetchdonor;

use App\Models\pictures;
use App\Models\linkstotheproject;
use App\Models\projectstbl;
use App\Models\projectinformation;

use DB;
class FetchdonorController extends Controller
{
    //

    function fetchdonor(Request $req) {
        $donorid    = $req->input("donorid");
        $locationid = $req->input("locationid");

        $donor_arr     = ["projectdonorid"=>$donorid];
        $location_arr  = ["projectlocationid"=>$locationid];

        $where         = [];
 
        if ($donorid != "false") {
            $where = array_merge($where,$donor_arr);
        }

        if ($locationid != "false") {
            $where = array_merge($where,$location_arr);
        }

        // $donor    = DB::table("projectstbl")
        //                     ->select("projectstbl.title")
        //                     ->join("pictures","projectstbl.projectid","=","pictures.odaid")
        //                     ->join("linkstotheproject","projectstbl.projectid","=","linkstotheproject.odaid")
        //                     ->where("projectstbl.projectid",);

        $donor = fetchdonor::where($where)->get();

        return view("list", compact("donor","where"));
    }

    function fetchgraph(Request $req) {
        $locationid = $req->input("locationid");

        $donor_info = DB::table('projectstbl')
                        ->select('*', DB::raw('count(projectdonorid) as total'))
                        ->where("projectlocationid","'{$locationid}'")
                        ->groupBy('projectdonorid')
                        ->get();
        
        $data = [21,15,87,38,34];
        return response()->json($data);
        // return view("graph", compact("donor_info"));
    }

    function fetchinformation(Request $req) {
        $odaid    = $req->input("odaid");
        $donorid  = $req->input("donorid");

        $information          = projectinformation::where("projectid",$odaid)->get();
        $donor                = projectstbl::where("projectid",$odaid)->get();
        // .{$donorid}

        $agencyname = [
            'adb'       => "Asian Development Bank (ADB)",
            'aus'       => "DFAT Australia",
            'eu'        => "European Union",
            'giz'       => "German Agency for International Cooperation",
            'jica'      => "Japan International Cooperation Agency (JICA)",
            'koica'     => "Korea International Cooperation Agency",
            'unfao'     => "United Nations Food and Agriculture Organisation",
            'undp'      => "United Nations Development Programme",
            'usaid'     => "U.S. Agency for International Development",
            'worldbank' => "World Bank",
            'nzaid'     => "New Zealand Agency for International Development",
        ];

        // ========== start hard coded data ================//
        // koica
            $donorinformation['koica']['agencyinformation']['agencywebsite']     = "www.koica.go.kr/english";
            $donorinformation['koica']['agencyinformation']['agencydbwebsite']   = "http://koica.go.kr/phl_en/5389/subview.do";
            
            $donorinformation['koica']['summary']['totalloansandprojects']['loanamount']     = "0";
            $donorinformation['koica']['summary']['totalloansandprojects']['grandamount']    = "234962363";
            $donorinformation['koica']['summary']['totalloansandprojects']['grandtotal']     = "347252345";

            $donorinformation['koica']['summary']['totalnumberofprojectsandtotalamount']['numberofprojects']    = "35";
            $donorinformation['koica']['summary']['totalnumberofprojectsandtotalamount']['totalamount']         = "34637246";
            $donorinformation['koica']['summary']['totalnumberofprojectsandtotalamount']['amountpercentage']    = "18%";

            $donorinformation['koica']['summary']['numberofprojectsbytypeofasst']['grant']   = "23";
            $donorinformation['koica']['summary']['numberofprojectsbytypeofasst']['loan']    = "63";      

            $donorinformation['koica']['summary']['numberofprojectsperregion']['unknown']    = "2";
            $donorinformation['koica']['summary']['numberofprojectsperregion']['region9']    = "25";
            $donorinformation['koica']['summary']['numberofprojectsperregion']['region10']   = "12";
            $donorinformation['koica']['summary']['numberofprojectsperregion']['region11']   = "34";
            $donorinformation['koica']['summary']['numberofprojectsperregion']['region12']   = "76";
            $donorinformation['koica']['summary']['numberofprojectsperregion']['region13']   = "12";
            $donorinformation['koica']['summary']['numberofprojectsperregion']['barmm']      = "65";
        // end koica

        // adb
            $donorinformation['adb']['agencyinformation']['agencywebsite']     = "www.adb.org";
            $donorinformation['adb']['agencyinformation']['agencydbwebsite']   = "https://www.adb.org/projects";
            
            $donorinformation['adb']['summary']['totalloansandprojects']['loanamount']     = "0";
            $donorinformation['adb']['summary']['totalloansandprojects']['grandamount']    = "234962363";
            $donorinformation['adb']['summary']['totalloansandprojects']['grandtotal']     = "347252345";

            $donorinformation['adb']['summary']['totalnumberofprojectsandtotalamount']['numberofprojects']    = "35";
            $donorinformation['adb']['summary']['totalnumberofprojectsandtotalamount']['totalamount']         = "34637246";
            $donorinformation['adb']['summary']['totalnumberofprojectsandtotalamount']['amountpercentage']    = "18%";

            $donorinformation['adb']['summary']['numberofprojectsbytypeofasst']['grant']   = "23";
            $donorinformation['adb']['summary']['numberofprojectsbytypeofasst']['loan']    = "63";      

            $donorinformation['adb']['summary']['numberofprojectsperregion']['unknown']    = "2";
            $donorinformation['adb']['summary']['numberofprojectsperregion']['region9']    = "25";
            $donorinformation['adb']['summary']['numberofprojectsperregion']['region10']   = "12";
            $donorinformation['adb']['summary']['numberofprojectsperregion']['region11']   = "34";
            $donorinformation['adb']['summary']['numberofprojectsperregion']['region12']   = "76";
            $donorinformation['adb']['summary']['numberofprojectsperregion']['region13']   = "12";
            $donorinformation['adb']['summary']['numberofprojectsperregion']['barmm']      = "65";
        // end adb

        // aus
            $donorinformation['aus']['agencyinformation']['agencywebsite']     = "https://philippines.embassy.gov.au/mnla/australianaid.html";
            $donorinformation['aus']['agencyinformation']['agencydbwebsite']   = "https://www.dfat.gov.au/geo/philippines/development-assistance/development-assistance-in-philippines";
            
            $donorinformation['aus']['summary']['totalloansandprojects']['loanamount']     = "0";
            $donorinformation['aus']['summary']['totalloansandprojects']['grandamount']    = "234962363";
            $donorinformation['aus']['summary']['totalloansandprojects']['grandtotal']     = "347252345";

            $donorinformation['aus']['summary']['totalnumberofprojectsandtotalamount']['numberofprojects']    = "35";
            $donorinformation['aus']['summary']['totalnumberofprojectsandtotalamount']['totalamount']         = "34637246";
            $donorinformation['aus']['summary']['totalnumberofprojectsandtotalamount']['amountpercentage']    = "18%";

            $donorinformation['aus']['summary']['numberofprojectsbytypeofasst']['grant']   = "23";
            $donorinformation['aus']['summary']['numberofprojectsbytypeofasst']['loan']    = "63";      

            $donorinformation['aus']['summary']['numberofprojectsperregion']['unknown']    = "2";
            $donorinformation['aus']['summary']['numberofprojectsperregion']['region9']    = "25";
            $donorinformation['aus']['summary']['numberofprojectsperregion']['region10']   = "12";
            $donorinformation['aus']['summary']['numberofprojectsperregion']['region11']   = "34";
            $donorinformation['aus']['summary']['numberofprojectsperregion']['region12']   = "76";
            $donorinformation['aus']['summary']['numberofprojectsperregion']['region13']   = "12";
            $donorinformation['aus']['summary']['numberofprojectsperregion']['barmm']      = "65";
        // end aus

        // eu
            $donorinformation['eu']['agencyinformation']['agencywebsite']     = "https://eeas.europa.eu/delegations/philippines_en";
            $donorinformation['eu']['agencyinformation']['agencydbwebsite']   = "https://www.eeas.europa.eu/eeas/projects_en?s=176";
            
            $donorinformation['eu']['summary']['totalloansandprojects']['loanamount']     = "0";
            $donorinformation['eu']['summary']['totalloansandprojects']['grandamount']    = "234962363";
            $donorinformation['eu']['summary']['totalloansandprojects']['grandtotal']     = "347252345";

            $donorinformation['eu']['summary']['totalnumberofprojectsandtotalamount']['numberofprojects']    = "35";
            $donorinformation['eu']['summary']['totalnumberofprojectsandtotalamount']['totalamount']         = "34637246";
            $donorinformation['eu']['summary']['totalnumberofprojectsandtotalamount']['amountpercentage']    = "18%";

            $donorinformation['eu']['summary']['numberofprojectsbytypeofasst']['grant']   = "23";
            $donorinformation['eu']['summary']['numberofprojectsbytypeofasst']['loan']    = "63";      

            $donorinformation['eu']['summary']['numberofprojectsperregion']['unknown']    = "2";
            $donorinformation['eu']['summary']['numberofprojectsperregion']['region9']    = "25";
            $donorinformation['eu']['summary']['numberofprojectsperregion']['region10']   = "12";
            $donorinformation['eu']['summary']['numberofprojectsperregion']['region11']   = "34";
            $donorinformation['eu']['summary']['numberofprojectsperregion']['region12']   = "76";
            $donorinformation['eu']['summary']['numberofprojectsperregion']['region13']   = "12";
            $donorinformation['eu']['summary']['numberofprojectsperregion']['barmm']      = "65";
        // end eu

        // giz
            $donorinformation['giz']['agencyinformation']['agencywebsite']     = "https://www.giz.de/en/html/index.html";
            $donorinformation['giz']['agencyinformation']['agencydbwebsite']   = "https://www.giz.de/projektdaten/region/2/countries/PH";
            
            $donorinformation['giz']['summary']['totalloansandprojects']['loanamount']     = "0";
            $donorinformation['giz']['summary']['totalloansandprojects']['grandamount']    = "234962363";
            $donorinformation['giz']['summary']['totalloansandprojects']['grandtotal']     = "347252345";

            $donorinformation['giz']['summary']['totalnumberofprojectsandtotalamount']['numberofprojects']    = "35";
            $donorinformation['giz']['summary']['totalnumberofprojectsandtotalamount']['totalamount']         = "34637246";
            $donorinformation['giz']['summary']['totalnumberofprojectsandtotalamount']['amountpercentage']    = "18%";

            $donorinformation['giz']['summary']['numberofprojectsbytypeofasst']['grant']   = "23";
            $donorinformation['giz']['summary']['numberofprojectsbytypeofasst']['loan']    = "63";      

            $donorinformation['giz']['summary']['numberofprojectsperregion']['unknown']    = "2";
            $donorinformation['giz']['summary']['numberofprojectsperregion']['region9']    = "25";
            $donorinformation['giz']['summary']['numberofprojectsperregion']['region10']   = "12";
            $donorinformation['giz']['summary']['numberofprojectsperregion']['region11']   = "34";
            $donorinformation['giz']['summary']['numberofprojectsperregion']['region12']   = "76";
            $donorinformation['giz']['summary']['numberofprojectsperregion']['region13']   = "12";
            $donorinformation['giz']['summary']['numberofprojectsperregion']['barmm']      = "65";
        // end giz

        // jica
            $donorinformation['jica']['agencyinformation']['agencywebsite']     = "www.jica.go.jp/english/";
            $donorinformation['jica']['agencyinformation']['agencydbwebsite']   = "https://www2.jica.go.jp/en/yen_loan/index.php";
            
            $donorinformation['jica']['summary']['totalloansandprojects']['loanamount']     = "0";
            $donorinformation['jica']['summary']['totalloansandprojects']['grandamount']    = "234962363";
            $donorinformation['jica']['summary']['totalloansandprojects']['grandtotal']     = "347252345";

            $donorinformation['jica']['summary']['totalnumberofprojectsandtotalamount']['numberofprojects']    = "35";
            $donorinformation['jica']['summary']['totalnumberofprojectsandtotalamount']['totalamount']         = "34637246";
            $donorinformation['jica']['summary']['totalnumberofprojectsandtotalamount']['amountpercentage']    = "18%";

            $donorinformation['jica']['summary']['numberofprojectsbytypeofasst']['grant']   = "23";
            $donorinformation['jica']['summary']['numberofprojectsbytypeofasst']['loan']    = "63";      

            $donorinformation['jica']['summary']['numberofprojectsperregion']['unknown']    = "2";
            $donorinformation['jica']['summary']['numberofprojectsperregion']['region9']    = "25";
            $donorinformation['jica']['summary']['numberofprojectsperregion']['region10']   = "12";
            $donorinformation['jica']['summary']['numberofprojectsperregion']['region11']   = "34";
            $donorinformation['jica']['summary']['numberofprojectsperregion']['region12']   = "76";
            $donorinformation['jica']['summary']['numberofprojectsperregion']['region13']   = "12";
            $donorinformation['jica']['summary']['numberofprojectsperregion']['barmm']      = "65";
        // end jica

        // unfao
            $donorinformation['unfao']['agencyinformation']['agencywebsite']     = "www.fao.org/philippines/";
            $donorinformation['unfao']['agencyinformation']['agencydbwebsite']   = "https://www.fao.org/philippines/our-programmes-projects/our-projects/en/";
            
            $donorinformation['unfao']['summary']['totalloansandprojects']['loanamount']     = "0";
            $donorinformation['unfao']['summary']['totalloansandprojects']['grandamount']    = "234962363";
            $donorinformation['unfao']['summary']['totalloansandprojects']['grandtotal']     = "347252345";

            $donorinformation['unfao']['summary']['totalnumberofprojectsandtotalamount']['numberofprojects']    = "35";
            $donorinformation['unfao']['summary']['totalnumberofprojectsandtotalamount']['totalamount']         = "34637246";
            $donorinformation['unfao']['summary']['totalnumberofprojectsandtotalamount']['amountpercentage']    = "18%";

            $donorinformation['unfao']['summary']['numberofprojectsbytypeofasst']['grant']   = "23";
            $donorinformation['unfao']['summary']['numberofprojectsbytypeofasst']['loan']    = "63";      

            $donorinformation['unfao']['summary']['numberofprojectsperregion']['unknown']    = "2";
            $donorinformation['unfao']['summary']['numberofprojectsperregion']['region9']    = "25";
            $donorinformation['unfao']['summary']['numberofprojectsperregion']['region10']   = "12";
            $donorinformation['unfao']['summary']['numberofprojectsperregion']['region11']   = "34";
            $donorinformation['unfao']['summary']['numberofprojectsperregion']['region12']   = "76";
            $donorinformation['unfao']['summary']['numberofprojectsperregion']['region13']   = "12";
            $donorinformation['unfao']['summary']['numberofprojectsperregion']['barmm']      = "65";
        // end unfao

        // undp
            $donorinformation['undp']['agencyinformation']['agencywebsite']     = "www.ph.undp.org";
            $donorinformation['undp']['agencyinformation']['agencydbwebsite']   = "https://open.undp.org/profile/PH/recipientprofile";
            
            $donorinformation['undp']['summary']['totalloansandprojects']['loanamount']     = "0";
            $donorinformation['undp']['summary']['totalloansandprojects']['grandamount']    = "234962363";
            $donorinformation['undp']['summary']['totalloansandprojects']['grandtotal']     = "347252345";

            $donorinformation['undp']['summary']['totalnumberofprojectsandtotalamount']['numberofprojects']    = "35";
            $donorinformation['undp']['summary']['totalnumberofprojectsandtotalamount']['totalamount']         = "34637246";
            $donorinformation['undp']['summary']['totalnumberofprojectsandtotalamount']['amountpercentage']    = "18%";

            $donorinformation['undp']['summary']['numberofprojectsbytypeofasst']['grant']   = "23";
            $donorinformation['undp']['summary']['numberofprojectsbytypeofasst']['loan']    = "63";      

            $donorinformation['undp']['summary']['numberofprojectsperregion']['unknown']    = "2";
            $donorinformation['undp']['summary']['numberofprojectsperregion']['region9']    = "25";
            $donorinformation['undp']['summary']['numberofprojectsperregion']['region10']   = "12";
            $donorinformation['undp']['summary']['numberofprojectsperregion']['region11']   = "34";
            $donorinformation['undp']['summary']['numberofprojectsperregion']['region12']   = "76";
            $donorinformation['undp']['summary']['numberofprojectsperregion']['region13']   = "12";
            $donorinformation['undp']['summary']['numberofprojectsperregion']['barmm']      = "65";
        // end undp

        // usaid
            $donorinformation['usaid']['agencyinformation']['agencywebsite']     = "www.usaid.gov/philippines";
            $donorinformation['usaid']['agencyinformation']['agencydbwebsite']   = "https://www.foreignassistance.gov/";
            
            $donorinformation['usaid']['summary']['totalloansandprojects']['loanamount']     = "0";
            $donorinformation['usaid']['summary']['totalloansandprojects']['grandamount']    = "234962363";
            $donorinformation['usaid']['summary']['totalloansandprojects']['grandtotal']     = "347252345";

            $donorinformation['usaid']['summary']['totalnumberofprojectsandtotalamount']['numberofprojects']    = "35";
            $donorinformation['usaid']['summary']['totalnumberofprojectsandtotalamount']['totalamount']         = "34637246";
            $donorinformation['usaid']['summary']['totalnumberofprojectsandtotalamount']['amountpercentage']    = "18%";

            $donorinformation['usaid']['summary']['numberofprojectsbytypeofasst']['grant']   = "23";
            $donorinformation['usaid']['summary']['numberofprojectsbytypeofasst']['loan']    = "63";      

            $donorinformation['usaid']['summary']['numberofprojectsperregion']['unknown']    = "2";
            $donorinformation['usaid']['summary']['numberofprojectsperregion']['region9']    = "25";
            $donorinformation['usaid']['summary']['numberofprojectsperregion']['region10']   = "12";
            $donorinformation['usaid']['summary']['numberofprojectsperregion']['region11']   = "34";
            $donorinformation['usaid']['summary']['numberofprojectsperregion']['region12']   = "76";
            $donorinformation['usaid']['summary']['numberofprojectsperregion']['region13']   = "12";
            $donorinformation['usaid']['summary']['numberofprojectsperregion']['barmm']      = "65";
        // end usaid

        // worldbank
            $donorinformation['worldbank']['agencyinformation']['agencywebsite']     = "https://www.worldbank.org/en/country/philippines";
            $donorinformation['worldbank']['agencyinformation']['agencydbwebsite']   = "https://projects.worldbank.org/en/projects-operations/projects-summary?os=0";
            
            $donorinformation['worldbank']['summary']['totalloansandprojects']['loanamount']     = "0";
            $donorinformation['worldbank']['summary']['totalloansandprojects']['grandamount']    = "234962363";
            $donorinformation['worldbank']['summary']['totalloansandprojects']['grandtotal']     = "347252345";

            $donorinformation['worldbank']['summary']['totalnumberofprojectsandtotalamount']['numberofprojects']    = "35";
            $donorinformation['worldbank']['summary']['totalnumberofprojectsandtotalamount']['totalamount']         = "34637246";
            $donorinformation['worldbank']['summary']['totalnumberofprojectsandtotalamount']['amountpercentage']    = "18%";

            $donorinformation['worldbank']['summary']['numberofprojectsbytypeofasst']['grant']   = "23";
            $donorinformation['worldbank']['summary']['numberofprojectsbytypeofasst']['loan']    = "63";      

            $donorinformation['worldbank']['summary']['numberofprojectsperregion']['unknown']    = "2";
            $donorinformation['worldbank']['summary']['numberofprojectsperregion']['region9']    = "25";
            $donorinformation['worldbank']['summary']['numberofprojectsperregion']['region10']   = "12";
            $donorinformation['worldbank']['summary']['numberofprojectsperregion']['region11']   = "34";
            $donorinformation['worldbank']['summary']['numberofprojectsperregion']['region12']   = "76";
            $donorinformation['worldbank']['summary']['numberofprojectsperregion']['region13']   = "12";
            $donorinformation['worldbank']['summary']['numberofprojectsperregion']['barmm']      = "65";
        // end worldbank

        // nzaid
            $donorinformation['nzaid']['agencyinformation']['agencywebsite']     = "www.mfat.govt.nz/en/";
            $donorinformation['nzaid']['agencyinformation']['agencydbwebsite']   = "..";
            
            $donorinformation['nzaid']['summary']['totalloansandprojects']['loanamount']     = "0";
            $donorinformation['nzaid']['summary']['totalloansandprojects']['grandamount']    = "234962363";
            $donorinformation['nzaid']['summary']['totalloansandprojects']['grandtotal']     = "347252345";

            $donorinformation['nzaid']['summary']['totalnumberofprojectsandtotalamount']['numberofprojects']    = "35";
            $donorinformation['nzaid']['summary']['totalnumberofprojectsandtotalamount']['totalamount']         = "34637246";
            $donorinformation['nzaid']['summary']['totalnumberofprojectsandtotalamount']['amountpercentage']    = "18%";

            $donorinformation['nzaid']['summary']['numberofprojectsbytypeofasst']['grant']   = "23";
            $donorinformation['nzaid']['summary']['numberofprojectsbytypeofasst']['loan']    = "63";      

            $donorinformation['nzaid']['summary']['numberofprojectsperregion']['unknown']    = "2";
            $donorinformation['nzaid']['summary']['numberofprojectsperregion']['region9']    = "25";
            $donorinformation['nzaid']['summary']['numberofprojectsperregion']['region10']   = "12";
            $donorinformation['nzaid']['summary']['numberofprojectsperregion']['region11']   = "34";
            $donorinformation['nzaid']['summary']['numberofprojectsperregion']['region12']   = "76";
            $donorinformation['nzaid']['summary']['numberofprojectsperregion']['region13']   = "12";
            $donorinformation['nzaid']['summary']['numberofprojectsperregion']['barmm']      = "65";
        // end nzaid
        // ========== end hard coded data ================//
        return view("information", ["donor"             =>$donor,
                                    "information"       =>$information, 
                                    "donorinformation"  => $donorinformation, 
                                    "agencyname"        => $agencyname, 
                                    "donorid"           => $donorid]);

    }

    function enterproject(Request $req) {
        if ($req->method() == "POST") {
            $where = [
                "projecttitle"          => $req->input("projecttitle"),
                "projectdesc"           => $req->input("projectdesc"),
                "sector"                => $req->input("projectsector"),
                "projectstatus"         => $req->input("projectstatus"),
                "projectdonorid"        => $req->input("donorid"),
                "projectdonortext"      => $req->input("donortext"),
                "projectlocationid"     => $req->input("locationid"),
                "projectlocationtext"   => $req->input("locationtext")
            ];

            if (fetchdonor::create($where)) {
                echo "saved";
            }
        }

        return view("enterproject");
    }

    function saveentry(Request $req) {
        $loc                = (array) json_decode($req->input("loc"));
        $locationdetails    = (array) json_decode($req->input("locationdetails"));
        
        $projecttitle  = $req->input("projecttitle");
        $projectdesc   = $req->input("projectdesc");
        $projectsector = $req->input("projectsector");
        $projectstatus = $req->input("projectstatus");
        $donorid       = $req->input("donorid");
        $donortext     = $req->input("donortext");

        $save = false;
        foreach($loc as $l) {
             $insert = [
                "projecttitle"          => $projecttitle,
                "projectdesc"           => $projectdesc,
                "sector"                => $projectsector,
                "projectstatus"         => $projectstatus,
                "projectdonorid"        => $donorid,
                "projectdonortext"      => $donortext,
                "projectlocationid"     => $l,
                "projectlocationtext"   => $locationdetails[$l]
            ];

            $save = fetchdonor::create($insert);
        }
        
        return response()->json($save);
        // return response()->json($locationdetails['dinagatisland']);
    }

    function dashboard() {
        return view("dashboard");
    }

    function mindanaostatus() {
        return view("mindanaostatus");
    }

    function projects() {
        return view("projects");
    }

    function uploadpictures() {
           
    }

    function loans() {
        // $data = [23,63,14,37,45];
        // return response()->json($data);
        return view("totalamountloanedbyagency");
    }

    //      ['ADB', 'AUS', 'EU','FAO','GIZ','JICA','KOICA','NEDA','USAID','WORLDBANK']
    function loanedbyagency() {
        // ['ADB', 'AUS', 'EU','FAO','GIZ','JICA','KOICA','USAID','WORLDBANK','UNDP','NZAid']
        $data['series'] = [ 
                            157868208000.00, 
                            7107773777.36, 
                            17636093689.20, 
                            652432570.00,
                            3797726136.03,
                            31250177632.13,
                            1242392000.00,
                            31785149994.14,
                            287311300443.54,
                            3304222845.82,
                            197017540.00 
                          ];

        return response()->json($data);
    }

    function loanedbyagency_table() {
        $data = ['ADB'          => ["287,311,300,443.54" , "53%"], 
                 'AUS'          => ["7,107,773,777.36","1%" ], 
                 'EU'           => ["17,636,093,689.20","3%"],
                 'FAO'          => ["652,432,570.00","0%"],
                 'GIZ'          => ["3,797,726,136.03","1%"],
                 'JICA'         => ["31,250,177,632.13","6%"],
                 'KOICA'        => ["1,242,392,000.00","0%"],
                 'USAID'        => ["31,785,149,994.14","6%"],
                 'WORLDBANK'    => ["287,311,300,443.54","53%"],
                 'UNDP'         => ["3,304,222,845.82","1%"],
                 'NZAid'        => ["197,017,540.00","0%"]
                ];

        $title = "ODA DISTRIBUTION ON PROGRAMS AND PROJECTS IN  TERMS OF TOTAL AMOUNT (in PHP) As of YEAR 2022";
        return view("datatable", compact("data","title"));
    }

    function grantamountbyagency() {
                
        $data['series']   = [9, 1, 20,4,8,3,3,32,8,10,2];
        $data['table']    = [
            [""]
        ];

        return response()->json($data);
    }

    function grantamountbyagency_table() {
        $data = [
            "ADB"       => ["46","0","46","32%"], 
            "AUS"       => ["2","0","2","1%"],
            "EU"        => ["29","0","29","20%"],
            "FAO"       => ["6","0","6","4%"],
            "GIZ"       => ["12","0","12","8%"],
            "JICA"      => ["3","2","5","3%"],
            "KOICA"     => ["4","0","4","3%"],
            "USAID"     => ["46","0","46","32%"],
            "WORLDBANK" => ["2","9","11","8%"],
            "UNDP"      => ["14","0","14","10%"],
            "NZAid"     => ["3","0","3","2%"]
        ];

        $tblheader = ["Agency","Grant","Loan","Grand Total","Percentage"];
        $title = "PERCENT SHARE ON PROGRAMS AND PROJECTS BY ODA AGENCY As of YEAR 2022";
        return view("datatable", compact("data","title","tblheader"));
    }

    function distribution_programproject() {
        // $data = [
        //         "Multi-sectoral",
        //         "Energy",
        //         "Agriculture",
        //         "Transport",
        //         "DRR",
        //         "Public Sector Management",
        //         "Economic Development",
        //         "Environment",
        //         "Social protection",
        //         "Agrbusiness financing",
        //         "Health",
        //         "Renewable energy"
        //         ];
        $data['series'] = [72, 10, 7, 6, 4, 4, 3, 2,2,1,1,1];
        $data['table']  = [];

        return response()->json($data);
    }

    function distribution_programproject_table() {
        $data = [
            "Multi-sectoral"                => ["72","64%"], 
            "Energy"                        => ["10","9%"],
            "Agriculture"                   => ["7","6%"],
            "Transport"                     => ["6","5%"],
            "DRR"                           => ["4","4%"],
            "Public Sector Management"      => ["4","4%"],
            "Economic Development"          => ["3","3%"],
            "Environment"                   => ["2","2%"],
            "Social protection"             => ["2","2%"],
            "Agrbusiness financing"         => ["1","1%"],
            "Health"                        => ["1","1%"],
            "Renewable energy"              => ["1","1%"]
        ];
        
        $tblheader  = ["Sector","Count","Percentage"];
        $title      = "DISTRIBUTION OF PROGRAMS AND PROJECTS BY SECTOR As of YEAR 2022";
        return view("datatable", compact("data","title","tblheader"));
    }

    function granted_loanedperagency() {
        $data['series']  = [44129860000.00, 
                            0, 
                            0,
                            0,
                            0,
                            29889058079.95,
                            0,
                            0,
                            240555777243.54,
                            0,
                            0];
        $data['table']   = [];

        return response()->json($data);
    }

     function granted_loanedperagency_table() {
        // $data = [
        //     "ADB"       => ["113,738,348,000.00","44,129,860,000.00","0","157,868,208,000.00","63%"], 
        //     "AUS"       => ["7,107,773,777.36","0","0","7,107,773,777.36","4%"],
        //     "EU"        => ["17,636,093,689.20","0","0","17,636,093,689.20","10%"],
        //     "FAO"       => ["652,432,570.00","0","0","652,432,570.00","0%"],
        //     "GIZ"       => ["3,797,726,136.03","0","0","3,797,726,136.03","2%"],
        //     "JICA"      => ["1,361,119,552.18","29,889,058,079.95","0","31,250,177,632.13","1%"],
        //     "KOICA"     => ["1,242,392,000.00","0","0","1,242,392,000.00","1%"],
        //     "USAID"     => ["31,785,149,994.14","0","0","31,785,149,994.14","17%"],
        //     "WORLDBANK" => ["516,817,000.00","240,555,777,243.54","46,238,706,200.00","287,311,300,443.54","8%"],
        //     "UNDP"      => ["14","0","14","10%"],
        //     "NZAid"     => ["3","0","3","2%"]
        // ];

        $data = [
            "ADB"       => ["44,129,860,000.00","14%"], 
            "AUS"       => ["0","0%"],
            "EU"        => ["0","0%"],
            "FAO"       => ["0","0%"],
            "GIZ"       => ["0","0%"],
            "JICA"      => ["29,889,058,079.95","10%"],
            "KOICA"     => ["0","0%"],
            "USAID"     => ["0","0%"],
            "WORLDBANK" => ["240,555,777,243.54","76%"],
            "UNDP"      => ["0","0%"],
            "NZAid"     => ["0","0%"]
        ];
        
        
        $tblheader  = ["Agency","Loan","Percentage"];
        $title      = "PERCENT SHARE AND  DISTRIBUTION ON ODA PROGRAMS AND PROJECTS IN TERMS OF GRANT AMOUNT (in PHP) As of YEAR 2022";
        return view("datatable", compact("data","title","tblheader"));
    }

    function granted_grantperagency() {
        $data['series']  = [113738348000, 
                            7107773777.3631, 
                            17636093689.2047,
                            652432570,
                            3797726136.0282,
                            1361119552.17913,
                            1242392000,
                            31785149994.14,
                            516817000,
                            3304222845.8175,
                            197017540];
        $data['table']   = [];

        return response()->json($data);
    }

    function granted_grantperagency_table() {
        // $data = [
        //     "ADB"       => ["113,738,348,000.00","44,129,860,000.00","0","157,868,208,000.00","63%"], 
        //     "AUS"       => ["7,107,773,777.36","0","0","7,107,773,777.36","4%"],
        //     "EU"        => ["17,636,093,689.20","0","0","17,636,093,689.20","10%"],
        //     "FAO"       => ["652,432,570.00","0","0","652,432,570.00","0%"],
        //     "GIZ"       => ["3,797,726,136.03","0","0","3,797,726,136.03","2%"],
        //     "JICA"      => ["1,361,119,552.18","29,889,058,079.95","0","31,250,177,632.13","1%"],
        //     "KOICA"     => ["1,242,392,000.00","0","0","1,242,392,000.00","1%"],
        //     "USAID"     => ["31,785,149,994.14","0","0","31,785,149,994.14","17%"],
        //     "WORLDBANK" => ["516,817,000.00","240,555,777,243.54","46,238,706,200.00","287,311,300,443.54","8%"],
        //     "UNDP"      => ["14","0","14","10%"],
        //     "NZAid"     => ["3","0","3","2%"]
        // ];

        $data = [
            "ADB"       => ["113,738,348,000.00","63%"], 
            "AUS"       => ["7,107,773,777.36","4%"],
            "EU"        => ["17,636,093,689.20","10%"],
            "FAO"       => ["652,432,570.00","0%"],
            "GIZ"       => ["3,797,726,136.03","2%"],
            "JICA"      => ["1,361,119,552.18","1%"],
            "KOICA"     => ["1,242,392,000.00","1%"],
            "USAID"     => ["31,785,149,994.14","17%"],
            "WORLDBANK" => ["516,817,000.00","8%"],
            "UNDP"      => ["3,304,222,845.82","10%"],
            "NZAid"     => ["197,017,540.00","2%"]
        ];
        
        
        $tblheader  = ["Agency","Grant","Percentage"];
        $title      = "PERCENT SHARE AND  DISTRIBUTION ON ODA PROGRAMS AND PROJECTS IN TERMS OF GRANT AMOUNT (in PHP) As of YEAR 2022";
        return view("datatable", compact("data","title","tblheader"));
    }

    function regionperagency() {
        $data[0]['name'] = "ADB";
        $data[0]['data'] = [0,0,0,0,0,0,0,1,4,0,0,2,6,0];

        $data[1]['name'] = "AUS";
        $data[1]['data'] = [0,0,0,0,0,0,0,0,0,0,0,0,2,0];

        $data[2]['name'] = "EU";
        $data[2]['data'] = [0,0,0,0,0,10,0,0,0,0,0,0,19,0];

        $data[3]['name'] = "FAO";
        $data[3]['data'] = [0,0,0,0,2,0,0,0,0,0,0,0,4,0];

        $data[4]['name'] = "GIZ";
        $data[4]['data'] = [0,6,0,0,0,0,0,0,0,0,0,0,6,0];

        $data[5]['name'] = "JICA";
        $data[5]['data'] = [1,0,0,4,0,0,2,0,0,0,0,4,3,0];

        $data[6]['name'] = "KOICA";
        $data[6]['data'] = [0,0,0,0,0,0,0,0,0,0,0,0,4,0];

        $data[7]['name'] = "NZAid";
        $data[7]['data'] = [0,0,0,0,0,0,0,0,0,0,0,0,7,3];

        $data[8]['name'] = "UNDP";
        $data[8]['data'] = [0,0,0,0,1,0,0,0,0,0,0,0,0,0];

        $data[9]['name'] = "USAID";
        $data[9]['data'] = [0,0,0,0,0,0,0,0,0,0,0,0,0,46];

        $data[9]['name'] = "WB";
        $data[9]['data'] = [0,1,1,0,0,0,0,0,0,1,2,0,6,0];

        return response()->json($data);

    }

    function perprovince() {
        $data[0]['data'] = [108,166,99,1,93,107,110,109,118,1,109,58,50,257,171,174,93,104,96,27,98,100,94,160,109,105,163,76,82,73];

        return response()->json($data);

    }

    function perprovince_table() {
        $data = ["Agusan del Norte"   => [0,0,10,0,8,1,0,0,1,22,10,108],
                "Agusan del Sur"      => [0,0,10,0,9,1,1,0,2,19,10,108],
                "Basilan"             => [0,0,20,1,6,5,0,0,15,24,11,166],
                "Bukidnon"            => [0,0,9,0,10,4,0,0,0,19,10,99],
                "Cagayan de Oro"      => [0,0,0,0,1,0,0,0,0,0,0,1],
                "Camiguin"            => [0,0,9,0,7,3,0,0,0,17,10,93],
                "Compostela Valley"   => [0,0,9,0,7,2,1,0,1,17,10,107],
                "Cotabato"            => [0,0,0,0,1,0,0,0,0,0,0,34],
                "Davao de Oro"        => [0,0,10,0,9,2,1,0,1,17,10,110], 
                "Davao del Norte"     => [0,0,10,0,8,2,1,0,1,17,10,109],
                "Davao del Sur"       => [0,0,9,0,9,7,1,0,2,20,10,118],
                "Davao Occidental"    => [0,0,1,0,0,0,0,0,0,0,0,1],
                "Davao Oriental"      => [0,0,9,0,9,2,1,0,1,17,10,109],
                "Dinagat Island"      => [0,0,0,0,1,0,0,0,1,0,0,58],
                "Dinagat Islands"     => [0,0,11,0,6,1,0,0,1,22,10,50],
                "Lanao del Norte"     => [0,0,31,1,14,8,0,0,15,41,21,257],
                "Lanao del Sur"       => [0,0,24,1,7,7,1,0,15,26,11,171],
                "Maguindanao"         => [0,0,21,6,7,6,2,0,15,27,11,174],
                "Misamis Occidental"  => [0,0,9,0,7,3,0,0,0,17,10,93],
                "Misamis Oriental"    => [0,0,9,0,7,4,4,0,0,27,10,104],
                "North Cotabato"      => [0,0,12,2,6,1,1,0,0,17,10,96],
                "Not Specified"       => [13,2,0,0,0,0,0,10,0,0,0,27],
                "Sarangani"           => [0,0,11,0,8,1,0,0,0,21,10,98],
                "South Cotabato"      => [0,0,9,2,7,1,0,0,0,24,10,100],
                "Sultan Kudarat"      => [0,0,11,0,7,1,0,0,0,18,10,94],
                "Sulu"                => [0,0,20,1,6,5,0,0,15,23,11,160],
                "Surigao del Norte"   => [0,0,12,0,7,1,0,0,1,22,10,109],
                "Surigao del Sur"     => [0,0,10,0,8,1,0,0,1,19,10,105],
                "Tawi-Tawi"           => [0,0,22,1,6,5,1,0,15,23,11,163],
                "Zamboanga del Norte" => [0,0,10,0,7,1,1,0,0,19,10,76],
                "Zamboanga del Sur"   => [0,0,10,0,7,1,0,0,1,25,10,82],
                "Zamboanga Sibugay"   => [0,0,10,0,6,1,0,0,0,18,10,73],
            ];
        return view("perprovince_table", compact('data'));
    }

    function regionbyagency_table() {
        // $data = [
        //     "ADB"       => [0,0,0,0,0,0,0,1,4,0,0,2,6,0], 
        //     "AUS"       => [0,0,0,0,0,0,0,0,0,0,0,0,2,0],
        //     "EU"        => [0,0,0,0,0,10,0,0,0,0,0,0,19,0],
        //     "FAO"       => [0,0,0,0,2,0,0,0,0,0,0,0,4,0],
        //     "GIZ"       => [0,6,0,0,0,0,0,0,0,0,0,0,6,0],
        //     "JICA"      => [1,0,0,4,0,0,2,0,0,0,0,4,3,0],
        //     "KOICA"     => [0,0,0,0,0,0,0,0,0,0,0,0,4,0],
        //     "NZAid"     => [0,0,0,0,0,0,0,0,0,0,0,0,7,3],
        //     "USAID"     => [0,0,0,0,0,0,0,0,0,0,0,0,0,46],
        //     "WORLDBANK" => [0,1,1,0,0,0,0,0,0,1,2,0,6,0]
        // ];
        $data = [
            "Agrbusiness financing"     => [0,0,0,0,0,1,0,0,0,0,0],
            "Agriculture"               => [0,0,0,0,6,0,0,0,0,0,1],
            "Central government"        => [0,0,0,0,0,0,0,0,0,0,1],
            "DRR"                       => [0,0,0,0,0,4,0,0,0,0,0],
            "Economic Development"      => [0,0,0,2,0,0,0,0,1,0,0],
            "Energy"                    => [0,0,10,0,0,0,0,0,0,0,0],
            "Environment"               => [0,0,0,0,0,2,0,0,0,0,0],
            "Health"                    => [1,0,0,0,0,0,0,0,0,0,0],
            "Public Sector Management"  => [4,0,0,0,0,0,0,0,0,0,0],
            "Renewable energy"          => [0,0,0,0,0,0,0,0,0,0,1],
            "Social protection"         => [0,0,0,0,0,0,0,0,0,0,2],
            "Transport"                 => [2,0,0,0,0,4,0,0,0,0,0],
            "Multi Sector"              => [6,2,19,4,6,3,4,7,14,0,6],
            "Not Specified"             => [0,0,0,0,0,0,0,3,0,46,0]
        ];
        return view("projectstable", compact("data"));
    }

    function byagency() {
        $data[0]['name'] = "Number of Projects";
        $data[0]['data'] = [13,2,29,6,6,14,4,7,46,11];
        return response()->json($data);
    }

    function byagency_table() {
        $data = [
            "ADB"       => "13", 
            "AUS"       => "2",
            "EU"        => "29",
            "FAO"       => "6",
            "GIZ"       => "6",
            "JICA"      => "4",
            "KOICA"     => "4",
            "NEDA"      => "7",
            "USAID"     => "46",
            "WORLDBANK" => "11"
        ];
        return view("byagency", compact("data"));
    }

    function bysector() {
        $data[0]['name'] = "Number of Projects";
        $data[0]['data'] = [72,10,7,6,4,4,3,2,2,1,1,1];
        return response()->json($data);
    }

    function bysector_table() {
        // $data = [
        //     "Agriculture, Agrarian Reform and Natural Resources (AARNR)"    => "13",
        //     "Agriculture (includes agribusiness financing)"                 => "8",
        //     "Community Development"                                         => "7",
        //     "Construction"                                                  => "2",
        //     "Disaster Risk Response and Management"                         => "5",
        //     "Economic Development"                                          => "5",
        //     "Education"                                                     => "1",
        //     "Energy"                                                        => "11",
        //     "Environment"                                                   => "2",
        //     "Government (includes related to governance)"                   => "16",
        //     "Health"                                                        => "4",
        //     "Planning"                                                      => "1",
        //     "PPOS"                                                          => "3",
        //     "Public Administration"                                         => "3",
        //     "Public Sector Management"                                      => "4",
        //     "Social Development"                                            => "3",
        //     "Social Protection"                                             => "3",
        //     "Social Reform and Community Development"                       => "13",
        //     "Transport"                                                     => "7",
        //     "Water and other urban infrastructure and services"             => "2",
        //     "Not Specified"                                                 => "57"
        // ];

        $data = [
            "Multi-sectoral"                => ["72","64%"],
            "Energy"                        => ["10","9%"],
            "Agriculture"                   => ["7","6%"],
            "Transport"                     => ["6","5%"],
            "DRR"                           => ["4","4%"],
            "Public Sector Management"      => ["4","4%"],
            "Economic Development"          => ["3","3%"],
            "Environment"                   => ["2","2%"],
            "Social protection"             => ["2","2%"],
            "Agrbusiness financing"         => ["1","1%"],
            "Health"                        => ["1","1%"],
            "Renewable energy"              => ["1","1%"],
            "Grand Total"                   => ["113","100%"]
        ];

        return view("persector", compact("data"));

    }

    function totalamount() {

        $data[0]['name'] = "Number of Projects";
        $data[0]['data'] = [13,2,29,6,6,14,4,7,46,11];

        $data[1]['name'] = "Total Amount (USD)";
        $data[1]['data'] = [850000000.00, 124035053.63,338174346.66,12233068.88,35131899.98,491456935.20,16490000.00,0,624489773.00,4826541837.03];

        return response()->json($data);
    }

    function totalamount_table() {
        $data = [
            "ADB"       => [13, 850000000.00], 
            "AUS"       => [2, 124035053.63],
            "EU"        => [23, 338174346.66],
            "FAO"       => [6, 12233068.88],
            "GIZ"       => [6, 35131899.98],
            "JICA"      => [5, 491456935.20],
            "KOICA"     => [3, 16490000.00],
            "NEDA"      => [3, 0.00],
            "USAID"     => [27, 624489773.00],
            "WORLDBANK" => [11, 4826541837.03]
        ];

        return view("totalamount_table", compact("data"));
    }

    function updateoda(Request $req, $id = false) {
        $searchresult = [];
        $isupdate     = false;

        if ($req->method() == "POST") {
            $searchresult = projectstbl::where("projecttitle",'like',"%{$req->input("thesearchtxts")}%")->get();
        } else if ( $req->method() == "GET" ) {
            $searchresult = projectstbl::where("projectid",$id)->get();
            $isupdate = true;
        }

        return view("updateoda",["result"=>$searchresult,"isupdate"=>$isupdate]);
    }

    function updateentry(Request $req) {
        $ids = json_decode($req->input("batchids"));

        $amount       = $req->input("amount");
        $currency     = $req->input("currency");
        $typeofamt    = $req->input("typeofamount");
        $proposedprc  = $req->input("proposedcost");
        $recentupt    = $req->input("recentupdate");
        $websitelink  = null;
        $websitedata  = null;

        $save = false;
        $msg  = null;
        foreach($ids as $i) {
            $save = projectinformation::create([
                "projectid"                => $i,
                "amount"                   => $amount,
                "currency"                 => $currency,
                "typeofamount"             => $typeofamt,
                "proposedprojectcost"      => $proposedprc,
                "recentupdate"             => $recentupt,
                "websitelink"              => $websitelink,
                "websitedatabase"          => $websitedata
            ]);
        }

        if ($save) {
            $msg = "saved.";
        }

        return redirect("updateoda")->with("msg",$msg);
    }

    function allpartners() {
        return view("allpartners");
    }

    function page1() {
        return view("nedalinks.page1");
    }

    function page2() {
        return view("nedalinks.page2");
    }

    function page3() {
        return view("nedalinks.page3");
    }

    function page4() {
         return view("nedalinks.page4");   
    }


    function page5() {
        return view("nedalinks.page5");
    }


    function page6() {
        return view("nedalinks.page6");
    }


    function page7() {
        return view("nedalinks.page7");
    }


    function page8() {
        return view("nedalinks.page8");
    }
}

