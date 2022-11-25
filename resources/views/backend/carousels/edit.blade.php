
<x-masterdash>
    <div class="container">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"  style="text-align:center;"> Update carousel From</h1>
        <a class="btn btn-success" href="{{route('catagories.index')}} ">List </a>

       </div>
    <x-forms.errors />

    <form action="{{ route('carousels.update', $carousel->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <x-forms.input type="text" name="name" label="Name" :value="old('name', $carousel->name)" required placeholder="Enter name" />

        <img src="{{ asset('storage/carousels/'.$carousel->image) }}" height="250" />

        <x-forms.input type="file" name="image" label="Image"/>

        <div class="mb-3 form-check">
            <input
            name="is_active"
            type="checkbox"
            class="form-check-input"
            id="isActiveInput"
            @if($carousel->is_active) checked @endif
            >
            <label class="form-check-label" for="isActiveInput">Is Active ?</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</x-masterdash>
