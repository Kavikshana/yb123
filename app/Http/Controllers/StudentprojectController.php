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
use App\Models\Desclecturer;
use App\Models\Suggestion;
use App\Models\Suggestionstud;
use App\Models\ConnectIndustrialist;


class StudentprojectController extends Controller
{
    public function create()
    {
        return view('ProjectPage.StudentProjectPage');
    }
    
    public function store1()
    {

    
        $studentproject = new Studentproject();
        $studentproject->Destination = request('Destination');
        $studentproject->StudentID = request('StudentID');
        $studentproject->ProjectID = request('ProjectID');
        $studentproject->Titleoftheproject = request('Titleoftheproject');

        $studentproject->Description = request('Description');
        
        $studentproject->ProjectType = request('ProjectType');
        $studentproject->Technologies = request('Technologies');
        
        //StudentProject::create($request->all());
       $studentproject->save();
       $description = Str::of(request('Description'))->split('/[\s,]+/');
       $keys = DB::table('dictionaries')->get();
       $newArr = [];
       //echo strcasecmp($description[0],"NeTwork");
      
      foreach($keys as $key){
           for($i = 0 ; $i < count($description) ; $i++){
               if(strcasecmp($description[$i],$key->keywordName) == 0){
                   $newArr[] = $key->keywordName;
               }
           }
           
       }
     
      $desc = new Description();
      $desc->StudentID = request('StudentID');
      $desc->Description = implode(", ",$newArr);

      $desc->save();

      $dict =DB::table('dictionaries')->whereIn('keywordName',[$newArr])->pluck('mainTermId')->toArray();
        
        $dict = array_count_values($dict);
        arsort($dict);
        $maxMainKey = array_key_first($dict);
     
     $connection = new Connection();
     $connection->StudentID = request('StudentID');
     $connection->MainTermID = $maxMainKey;
     $connection->save();
    
     $stu =DB::table('connectlecturers')->where('MainTermID',$maxMainKey)->pluck('LecturerID')->toArray();
     $connect = new Suggestion();
     $connect->Destination=request('Destination');
     $connect->MainTermID = $maxMainKey;
     $st = request('StudentID');
     //$connect->LecturerID =$stu;
     $ls=implode(",",$stu);
     $connect->LecturerID = Str::of($ls)->split('/[\s,]+/');
     //$stud=explode("<br>",$stu);
     //foreach($stud as $i)
        //$connect->LecturerID= $i;
     $connect->StudentID=$st;
     
     

     $stuss =DB::table('connect_industrialists')->where('MainTermID',$maxMainKey)->pluck('NameWithInitials')->toArray();
     
     $is=implode(",",$stuss);
     $connect->Industrialists = Str::of($is)->split('/[\s,]+/');
     /**$connect1 = new Suggestion();
     $connect1->Destination=request('Destination');
     $connect1->MainTermID = $maxMainKey;
     $connect1->StudentID= request('StudentID');
     
     $connect1->save();**/
     $connect->save();
     
    return redirect('/urpd');
}
}


   

    
