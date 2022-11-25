<x-masterdash>
    <div class="container">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"  style="text-align:center;">Carousel Details</h1>
        <a class="btn btn-success" href="{{ route('carousels.index') }} "> List </a>

        </div>



    <h1>Title: {{ $carousel->name }}</h1>
    <p>Is Active?: {{ $carousel->is_active ? 'Yes' : 'No' }} </p>
    <img src="{{ asset('storage/carousels/'.$carousel->image) }}" height="250" />
    </div>
</x-masterdash>
