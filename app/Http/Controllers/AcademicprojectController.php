<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Academicproject;
use Illuminate\Support\Facades\DB;
use App\Models\Academic;
use App\Models\User;
use App\Models\Desclecturer;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Models\Connectlecturer;
use App\Models\Connections;
use App\Models\Student;
use App\Models\Studentproject;
use App\Models\Suggestion;

class AcademicprojectController extends Controller

{
    public function create()
    {
        return view('ProjectPage.LecturerProjectPage');
    }
    
    public function store1()
    {
    
        $academicproject = new Academicproject();
        $academicproject->Destination = request('Destination');
        $academicproject->LecturerID = request('LecturerID');
        $academicproject->ProjectID = request('ProjectID');
        $academicproject->Titleoftheproject = request('Titleoftheproject');

        $academicproject->Description = request('Description');
        
        $academicproject->Technologies = request('Technologies');
        $academicproject->ProjectType = request('ProjectType');
        //$academicproject->ProjectStatus = request('ProjectStatus');
        
        $academicproject->save();
        $description = Str::of(request('Description'))->split('/[\s,]+/');
        $keys = DB::table('dictionaries')->get();
        $newArr = [];
       
        foreach($keys as $key){
           for($i = 0 ; $i < count($description) ; $i++){
               if(strcasecmp($description[$i],$key->keywordName) == 0){
                   $newArr[] = $key->keywordName;
               }
           }
           
       }
     
        $desc = new Desclecturer();
        $desc->LecturerID = request('LecturerID');
        $desc->Description = implode(", ",$newArr);

        $desc->save();

        
        $dict =DB::table('dictionaries')->whereIn('keywordName',[$newArr])->pluck('mainTermId')->toArray();
        
            $dict = array_count_values($dict);
            arsort($dict);
            $maxMainKey = array_key_first($dict);
     
         $connectionl = new Connectlecturer();
         $connectionl->LecturerID = request('LecturerID');
         $connectionl->MainTermID = $maxMainKey;
         $connectionl->save();
         
        $lec =DB::table('connections')->where('mainTermId',$maxMainKey)->pluck('StudentID')->toArray(); 
        $connect = new Suggestion();
        $connect->Destination=request('Destination');
        $connect->MainTermID = $maxMainKey;
        $connect->LecturerID = request('LecturerID');
        $connect->StudentID = implode(",",$lec);
        $connect->save();
    



       // $connect->save();

    return redirect('/urp');
    }
}
