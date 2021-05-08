<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UpdateProfiles extends Controller
{
    public function updatestudent(Request $request){

        

        $pw=DB::table('users')->where('email',$request->email)->value('password');
        if(Hash::check($request->pwrd,$pw)){
            $name = $request->email.'.'.$request->photo->extension();
            $request->photo->move(public_path().'/upload/profile', $name);
            

            DB::table('students')->where('EmailID',$request->email)->update(['FirstName'=>$request->fname,
                                                                        'LastName'=>$request->lname,
                                                                        'StudentID'=>$request->si,
                                                                        'Gender'=>$request->g,
                                                                        'DateOfBirth'=>$request->dob,
                                                                        'HomeAddress'=>$request->ha,
                                                                        'ContactNumber'=>$request->cn,
                                                                        'LinkedIn'=>$request->li,
                                                                        'StudyProgramme'=>$request->sp,
                                                                        'SubjectsOffered'=>$request->so,
                                                                        'YearOfStudy'=>$request->level,
                                                                        'Photo' => $name,
                                                                        
                                                                        ]);
            DB::table('users')->where('email',$request->email)->update(['password'=>Hash::make($request->nwpswrd)]);
            
            $s="Profile Successfully Updated";
        }
        else{
            $s="Old password is wrong";
        }
        return redirect()->back()->with('msg',$s);
        
    }

    public function updateindustrialist(Request $request){

        

        $pw=DB::table('users')->where('email',$request->email)->value('password');
        if(Hash::check($request->pwrd,$pw)){
            $name = $request->email.'.'.$request->photo->extension();
            $request->photo->move(public_path().'/upload/profile', $name);
            

            DB::table('industrialists')->where('CompanyPersonalEmailID',$request->email)->update(['NameWithInitials'=>$request->namewi,
                                                                                    'CompanyName'=>$request->comn,
                                                                                    'Designation'=>$request->designation,
                                                                                    'LinkedIn'=>$request->linkedin,
                                                                                    'FieldOfInterests'=>$request->foi,
                                                                                    'ContactNumber'=>$request->cn,
                                                                                    'Photo' => $name,
                                                                        ]);
            DB::table('users')->where('email',$request->email)->update(['password'=>Hash::make($request->nwpswrd)]);
            
            $s="Profile Successfully Updated";
        }
        else{
            $s="Old password is wrong";
        }
        return redirect()->back()->with('msg',$s);
        
    }

    
    
    public function updateacademic(Request $request){

        

        $pw=DB::table('users')->where('email',$request->email)->value('password');
        if(Hash::check($request->pwrd,$pw)){
            $name = $request->email.'.'.$request->photo->extension();
            $request->photo->move(public_path().'/upload/profile', $name);
            

            DB::table('academics')->where('EmailID',$request->email)->update(['Title'=>$request->title,
                                                                        'FirstName'=>$request->fname,
                                                                        'LastName'=>$request->lname,
                                                                        'EmployeeID'=>$request->eid,
                                                                        'Gender'=>$request->gender,
                                                                        'DateOfBirth'=>$request->dob,
                                                                        'Designation'=>$request->designation,
                                                                        'AdminRole'=>$request->arole,
                                                                        'LinkedIn'=>$request->linkedin,
                                                                        'ContactNumber'=>$request->cno,
                                                                        'OfficialWebsite'=>$request->ow,
                                                                        'ResearchInterest'=>$request->ri,
                                                                        'FieldOfSpecialization'=>$request->fos,
                                                                        'Photo' => $name,
                                                                        ]);
            DB::table('users')->where('email',$request->email)->update(['password'=>Hash::make($request->nwpswrd)]);
            
            $s="Profile Successfully Updated";
        }
        else{
            $s="Old password is wrong";
        }
        return redirect()->back()->with('msg',$s);
        
    }
    

}
