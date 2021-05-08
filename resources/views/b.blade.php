@extends('users.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class=""><br>
                <h2>User Request Pending Dashboard </h2>
            </div>
           
        </div>
    </div>
    <!-- CSS only -->
    <br>
    <br>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg" class="table text-center">
        <tr>
            <th>Id</th>
            <th>fname</th>
            <th>lname</th>
            <th>role</th>
            <th>email</th>
            <th></th>
            
            
        </tr>
        @foreach ($usert as $user)
            <tr>
                
                <td>{{$user->id}}</td>
                <td>{{$user->fname}}</td>
                <td>{{$user->lname}}</td>
                <td>{{$user->role}}</td>
                <td>{{$user->email}}</td>
                <td> 
                        <a href="{{route('selectu',$user->id)}}">Confirm</a>
                        

                        

                        
                </td>
                
               
            </tr>
        @endforeach
    </table>


@endsection