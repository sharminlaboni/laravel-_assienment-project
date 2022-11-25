<x-master>
    <x-slot:title>
        {{ __('Product Create') }}
        </x-slot>

        <x-forms.message />

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ __('Products') }}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{ route('products.index') }}">
                    <button type="button" class="btn btn-sm btn-outline-info">
                        <span data-feather="list"></span>
                        {{ __('List') }}
                    </button>
                </a>
            </div>
        </div>

        <x-forms.errors />

        <form 
            action="{{ route('products.store') }}" 
            method="post" 
            enctype="multipart/form-data">
            @csrf

            <x-forms.select 
                name="category_id" 
                required
                label="Category"
                :options="$categories"
            />

            <x-forms.input 
                type="text" 
                name="title" 
                placeholder="Enter title" 
                required
                label="Title"
            />

            <x-forms.input type="number" name="price" label='Unit Price' />

            <x-forms.input type="file" name="image" label='Picture' />

            <x-forms.textarea name="description" label="Description" />

            <x-forms.checkbox name="colors[]" id="color" :checklist="$colors" label="Colors" />

            @php
                $checklist = ['1'=>'Is Active'];
            @endphp

            <x-forms.checkbox name="is_active" id="is_active" :checklist="$checklist" />

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

</x-master>