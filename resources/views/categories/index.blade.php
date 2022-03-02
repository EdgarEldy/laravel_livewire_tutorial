@extends('layouts.default')
@section('content')
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Product categories</div>
            <div class="panel-body">
                <a href="{{url('categories/create')}}"
                   class="btn btn-primary">New</a>
                <!-- Categories data -->
                <livewire:categories.data/>
                <livewire:categories.form/>
            </div>
        </div>
    </div>

@endsection()
