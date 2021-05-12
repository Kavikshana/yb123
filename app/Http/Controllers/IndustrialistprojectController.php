<?php
namespace App\Http\Controllers;

use App\Models\Studentproject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\User;
use App\Models\Description;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Models\Connection;
use App\Models\Connectlecturer;
use App\Models\Academicproject;
use App\Models\Industrialistproject;
use App\Models\Desclecturer;
use App\Models\Suggestion;
use App\Models\Suggestionstud;
use App\Models\ConnectIndustrialist;

class IndustrialistprojectController extends Controller
{
    public function create()
    {
        return view('ProjectPage.IndustrialistProjectPage');
    }
    
    public function stor()
    {

    
        $industrialistproject = new Industrialistproject();
        $industrialistproject ->Destination = request('Destination');
        //$industrialistproject ->StudentID = request('StudentID');
        //$industrialistproject ->ProjectID = request('ProjectID');
        $industrialistproject ->NameWithInitials = request('NameWithInitials');

        $industrialistproject ->Titleoftheproject= request('Titleoftheproject');
        
        //$industrialistproject ->ProjectType = request('ProjectType');
        $industrialistproject ->Technologies = request('Technologies');
        
        //StudentProject::create($request->all());
        $industrialistproject ->save();
      // $description = Str::of(request('Description'))->split('/[\s,]+/');
       //$keys = DB::table('mainTerms')->get();
       //$newArr = [];
       //echo strcasecmp($description[0],"NeTwork");
      
      
               


           /**$dict =DB::table('mainTerms')->where('mainTerm',$industrialistproject ->Technologies)->pluck('mainTermId');
           $connect = new Suggestion();
           $connect->Destination=request('Destination');
           $connect->MainTermID = $dict;
           $connect->StudentID = request('StudentID');
           $industrialistproject ->Industrialist= request('NameWithInitials');
          // $connect->StudentID = request('StudentID');
           
           $connect->save();
           **/
        $dict =DB::table('mainTerms')->where('mainTerm',$industrialistproject->Technologies)->pluck('mainTermId')->toArray();
        $connection = new ConnectIndustrialist();
        $connection->NameWithInitials = request('NameWithInitials');
        $connection->MainTermID = implode(",",$dict);
        $connection->save();
    
          
        $lec =DB::table('connections')->where('mainTermId',$connection->MainTermID)->pluck('StudentID')->toArray(); 
        $connect = new Suggestion();
        $connect->Destination=request('Destination');
        $connect->MainTermID = $connection->MainTermID;
        $connect->Industrialists = request('NameWithInitials');
        $connect->StudentID =implode(",", $lec);
        $connect->save();

     
     
     
    return redirect('/uri');
}
}
