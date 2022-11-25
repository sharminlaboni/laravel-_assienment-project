<x-masterdash>

    <div class="container">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"  style="text-align:center;"> From</h1>
        <a class="btn btn-success" href="{{route('product.index')}} ">List </a>

       </div>


<form action="{{route('product.store')}} " method="POST" enctype="multipart/form-data" >

 @csrf

 <x-form.input
 type="text"
 name="title"
 placeholder="Enter title"
 required
 label="Title"
/>

        <x-form.select
                name="catagory_id"

                label="Catagory"
                :options="$catagory"
            />
            <x-form.textarea name="description" label="Description" />
            <x-form.input type="file" name="image" label='Picture' />
            <x-form.input
        type="text"
        name="price"
        placeholder="Enter price"
        required
        label="price"

       />
            <x-form.checkbox name="colors[]" id="color" :checklist="$colors" label="Colors" />

            @php
            $checklist = ['1'=>'Is Active'];



        @endphp

        <x-form.checkbox name="is_active" id="is_active" :checklist="$checklist" />




    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</x-masterdash>


