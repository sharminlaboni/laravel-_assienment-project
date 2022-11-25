<x-masterdash>
    <div class="container">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"  style="text-align:center;"> user Details</h1>
        <a class="btn btn-success" href="{{route('users.index')}}  "> List </a>

        </div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">User Details</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>

    <h1>Name: {{ $user->name }}</h1>
    <p>Email: {{ $user->email }}</p>
    <p>present_address:{{$user->profile->present_address}}</p>
  
</x-masterdash>
