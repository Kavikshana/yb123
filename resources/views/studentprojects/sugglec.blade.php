<!DOCTYPE html>
<html>
<head>
    <title>Y-Bridge</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>

<body>
  
<div class="container">
    @yield('content')
</div>
   

    

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg" class="table text-center">
      
          <thead>  
          <tr>
            <th>Students</th>
            <th></th>
            <th></th>
            <th></th>
            
            
        </tr>
        </thead>
        @foreach($suggestionlec as $user)
                
                    <tr>
                <table class="table table-dark"  class="table text-center" >
                 
                
                <td><a href="{{url('/shstu')}}">{{$user->StudentID}}</a></td>
                @csrf
                
                
            @endforeach 
                
                </table>    
            </tr>
            
                
            
        
       
    
    </body>
</html>

    