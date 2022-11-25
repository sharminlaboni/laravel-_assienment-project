<x-masterdash>

    <div class="container">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"  style="text-align:center;">Update product From</h1>
        <a class="btn btn-success" href=" {{route('product.index')}}">List </a>

       </div>


<form action="{{route('product.update', $product->id)}}" method="POST"enctype="multipart/form-data" >
    @csrf
    @method('put')

        <x-form.input
        type="text"
        name="title"
        placeholder="Enter title"
        required
        label="Title"
        :value="old('title', $product->title)"
       />

               <x-form.select
                       name="catagory_id"

                       label="Catagory"
                       :options="$catagory"
                       :value="old('catagory_id', $product->catagoty?->name)"
                   />
                   <x-form.textarea name="description" label="Description" :value="old('description', $product->description)"/>
                  
                   
                   <x-form.input type="file" name="image" label='Picture' :value="old('image', $product->image)"/>
    <x-form.input
        type="text"
        name="price"
        placeholder="Enter price"
        required
        label="price"
        :value="old('price',$product->price)"
       />
        <x-form.checkbox
            name="colors[]"
            id="color"
            :checklist="$colors"

            label="Colors" />


                   @php
                   $checklist = ['Is Active'];
                   

               @endphp

               <x-form.checkbox :checklist="$checklist" />




           <button type="submit" class="btn btn-primary">Submit</button>
       </form>
</div>
</x-masterdash>


