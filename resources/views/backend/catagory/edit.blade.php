<x-masterdash>
<div class="container">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"  style="text-align:center;"> Update Catagory From</h1>
        <a class="btn btn-success" href="{{route('catagories.index')}} ">List </a>

       </div>

<form action="{{route('catagories.update',$catagory->id)}}" method="POST" enctype="multipart/form-data" >
    @csrf
@method('put')

    @csrf
    <input type="hidden" value="{{$catagory->id}}" name="id">


    <x-form.input name="name" type="text" placeholder="Enter name"
  label="catagory_name"/>


<x-form.input type="file" name="image" label='Picture' />



    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</x-masterdash>
