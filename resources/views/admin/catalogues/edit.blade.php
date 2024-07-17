@extends('admin.layouts.master')

@section('title')
   Edit danh mục sản phẩm
@endsection

@section('content')
<form action="{{route('admin.catalogues.update', $model->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
   <div class="row">
    <div class="col-md-6"> 

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" 
            value="{{$model->name}}"  
            name="name" placeholder="Enter name">
        </div>
          
        <div class="form-group">
            <label for="cover">File</label>
            <input type="file" class="form-control" id="cover" name="cover" >
            <img src="{{Storage::url($model->cover)}}" alt="" width="50px" >
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-check">
            <label class="form-check-label" for="exampleCheck1">
                <input type="checkbox" class="form-check-input" name="id_active" 
                @if ($model->is_active) checked @endif
                value="1" > is active
            </label>
        </div>
   </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection