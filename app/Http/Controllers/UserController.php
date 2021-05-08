<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Industrialist;
use App\Models\Academic;
use App\Models\Student;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(5);

        return view('users.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');

        
     
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          
            'UserName' => 'required',
            'Role' => 'required',
            'password' => 'required',
        ]);
    
       
        User::create($request->all());
       
     
        return redirect()->route('users.index')
                        ->with('success','User created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\User  $product
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'UserName' => 'required',
            'password' => 'required',

        ]);
    
        $user->update($request->all());
    
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
    
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }

    public function indexl(){
        return view('layouts/App');     
     }

    public function admindash(){
        $p=DB::table('users')->get();
        return view('AdminDash.dashboard')->with('usert',$p);      
    }

    public function registeruser(Request $request){
        $user=new User;
       
            $user->fname=$request->fname;
            $user->lname=$request->lname;
            $user->role=$request->role;
            $user->email=$request->email;
            $user->password= Hash::make($request->password);
            $user->save();


        return 'wait for the acceptance';     
     }

     public function selectu($id){
        $x=DB::table('users')->where('id',$id)->first();
        if($x->role=="Industry"){
        $user=new Industrialist;
        
            $user->NameWithInitials=$x->fname." ".$x->lname;
            $user->CompanyPersonalEmailID=$x->email;
          
            $user->save();
     }

       
        elseif($x->role=="Student"){
            $user=new Student;
            
                
                $user->FirstName=$x->fname;
                $user->LastName=$x->lname;
                $user->EmailID=$x->email;
              
                $user->save();
         }

        elseif($x->role=="Lecturer"){
            $user=new Academic;
            
                $user->FirstName=$x->fname;
                $user->LastName=$x->lname;
                $user->EmailID=$x->email;
              
                $user->save();
         }
         return 'user saved';     
        }
    public function stud(){
        $p=DB::table('students')->get();
            return view('AdminDash/studentd')->with('studentt',$p);      }
    public function indd(){
        $p=DB::table('industrialists')->get();
            return view('AdminDash/industrialistd')->with('industrialistt',$p);      }
    public function acad(){
        $p=DB::table('academics')->get();
            return view('AdminDash/academicd')->with('academict',$p);      }
    public function stusd(){
        $p=DB::table('students_societies')->get();
            return view('AdminDash/studentsoc')->with('studentsoct',$p);      }
    public function uped(){
        $p=DB::table('upcoming_events')->get();
            return view('AdminDash/upcomingeve')->with('upcomingevet',$p);      }
    
        /**public function old()
        {
            DB::table('suggestions')->where('id',$id-1)->update(['old'=>"0"]);
        }**/
           
           
        public function sug(){
           
        $ss =DB::table('suggestions')->orderby('id','DESC')->limit(1)->get();
       
            return view('studentprojects/suggestion')->with('suggestiont',$ss);
      
    }
        //return view('studentprojects/sugglec')->with('suggestionlec',$ll);
      
          
    public function shlec(){
    return view('ShowProfile/academicsp');     
 }

 public function sugglec(){
           
    $ll =DB::table('suggestions')->orderby('id','DESC')->limit(1)->get();
    
        return view('studentprojects/sugglec')->with('suggestionlec',$ll);
 }
   
 public function shstu(){
    return view('ShowProfile/studentsp');     
 }

}
   /**@foreach ($suggestiont as $user)
        
                    <tr>
                <table class="table table-dark"  class="table text-center" >
                
                <td>{{$user->LecturerID}}</td>
                
                
                @endforeach    
            </tr>
            **/