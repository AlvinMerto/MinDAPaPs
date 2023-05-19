<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FetchdonorController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // $where = [];
    // array_push($where,["hello"=>"1"]);
    // array_push($where,["world"=>"2"]);

    // $where = ["hello"=>"1","world"=>"2"];
    // var_dump($where);

    // $a = ["hello"=>"1"];
    // $b = ["world"=>"2"];

    // $c = array_merge($a,$b);

    // var_dump($c);
    return view('fetch');
})->name("fetch");

Route::get("/fetchdonors", [FetchdonorController::class,"fetchdonor"])->name("fetchdonor");
Route::get("/fetchgraph", [FetchdonorController::class,"fetchgraph"])->name("fetchgraph");

Route::get("/enter-project",[FetchdonorController::class,"enterproject"])->name("enterproject");
Route::post("/enter-project",[FetchdonorController::class,"enterproject"])->name("enterproject");

Route::post("/saveentry", [FetchdonorController::class,"saveentry"])->name("saveentry");

Route::get("/dashboard", [FetchdonorController::class,"dashboard"])->name("dashboard");
Route::get("/graphs/projects", [FetchdonorController::class,"projects"])->name("projects");
Route::get("/mindanao/status",[FetchdonorController::class,"mindanaostatus"])->name("mindanaostatus");

// values 
    Route::get("/graphs/loans", [FetchdonorController::class,"loans"])->name("loans");
// end 

Route::get("/loanedbyagency", [FetchdonorController::class,"loanedbyagency"])->name("loanedbyagency");
Route::get("/grantamountbyagency", [FetchdonorController::class,"grantamountbyagency"])->name("grantamountbyagency");
Route::get("/granted_grantperagency", [FetchdonorController::class,"granted_grantperagency"])->name("granted_grantperagency");
Route::get("/granted_loanedperagency", [FetchdonorController::class,"granted_loanedperagency"])->name("granted_loanedperagency");
Route::get("/distribution_programproject",[FetchdonorController::class,"distribution_programproject"])->name("distribution_programproject");

// display table
    Route::get("/loanedbyagency_table", [FetchdonorController::class,"loanedbyagency_table"])->name("loanedbyagency_table");
    Route::get("/grantamountbyagency_table", [FetchdonorController::class,"grantamountbyagency_table"])->name("grantamountbyagency_table");
    Route::get("/granted_grantperagency_table", [FetchdonorController::class,"granted_grantperagency_table"])->name("granted_grantperagency_table");
    Route::get("/granted_loanedperagency_table", [FetchdonorController::class,"granted_loanedperagency_table"])->name("granted_loanedperagency_table");
    Route::get("/distribution_programproject_table",[FetchdonorController::class,"distribution_programproject_table"])->name("distribution_programproject_table");
// end

// per table
    Route::get("/regionbyagency ", [FetchdonorController::class,"regionperagency"])->name("regionperagency");
    Route::get("/regionbyagency_table", [FetchdonorController::class,"regionbyagency_table"])->name("regionbyagency_table");

    Route::get("/byagency",[FetchdonorController::class,"byagency"])->name("byagency");
    Route::get("/byagency_table", [FetchdonorController::class,"byagency_table"])->name("byagency_table");

    Route::get("/bysector", [FetchdonorController::class, "bysector"])->name("bysector");
    Route::get("/bysector_table", [FetchdonorController::class, "bysector_table"])->name("bysector_table");

    Route::get("/totalamount", [FetchdonorController::class, "totalamount"])->name("totalamount");
    Route::get("/totalamount_table", [FetchdonorController::class, "totalamount_table"])->name("totalamount");

    Route::get("/perprovince", [FetchdonorController::class,"perprovince"])->name("perprovince");
    Route::get("/perprovince_table", [FetchdonorController::class,"perprovince_table"])->name("perprovince_table");
// end 

// route update 
    Route::get("/updateoda/{id?}",[FetchdonorController::class,"updateoda"])->name("updateoda");
    Route::post("/updateoda",[FetchdonorController::class,"updateoda"])->name("updateoda");
    Route::post("/updateentry",[FetchdonorController::class,"updateentry"])->name("updateentry");
// end route update

// 
    Route::get("/fetchinformation",[FetchdonorController::class,"fetchinformation"])->name("fetchinformation");
//

// pages 
    Route::get("/uploadpictures",[FetchdonorController::class,"uploadpictures"])->name("uploadpictures");
// end 

// all partners 
    Route::get("/allpartners",[FetchdonorController::class,"allpartners"])->name("allpartners");
// end

// pages
    Route::get("/mindanao/page1", [FetchdonorController::class,"page1"])->name("page1");
    Route::get("/mindanao/page2", [FetchdonorController::class,"page2"])->name("page2");
    Route::get("/mindanao/page3", [FetchdonorController::class,"page3"])->name("page3");
    Route::get("/mindanao/page4", [FetchdonorController::class,"page4"])->name("page4");
    Route::get("/mindanao/page5", [FetchdonorController::class,"page5"])->name("page5");
    Route::get("/mindanao/page6", [FetchdonorController::class,"page6"])->name("page6");
    Route::get("/mindanao/page7", [FetchdonorController::class,"page7"])->name("page7");
    Route::get("/mindanao/page8", [FetchdonorController::class,"page8"])->name("page8");
// pages
