<x-masterdash>

    <div class="container">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"  style="text-align:center;">Color From</h1>
        <a class="btn btn-success" href="{{route('colors.index')}} ">List </a>

       </div>


<form action="{{route('colors.store')}} " method="POST"enctype="multipart/form-data" >
 @csrf



 <x-form.input 
                type="text" 
                name="title" 
                placeholder="Enter title" 
                
                label="Title"
            />

            <x-form.input 
                type="color" 
                name="color_code" 
                
                label="Color Code"
            />





    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</x-masterdash>


