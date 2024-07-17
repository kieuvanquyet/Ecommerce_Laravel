@extends('admin.layouts.master')

@section('title')
    Danh sách danh mục sản phẩm
@endsection

@section('content')
    <a href="{{route('admin.catalogues.create')}}" class="btn btn-success mb-5">ADD</a>

    <table class="table " >
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>cover</th>
            <th>Is active</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th>action</th>
        </tr>
        @foreach ($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>
                    <img src="{{Storage::url($item->cover)}}" alt="" width="50px" >
                </td>
                <td>{!!$item->is_active 
                ? 
                '<span class="badge badge-succsess">YES</span>' 
                :
                '<span class="badge badge-danger">NO</span>'!!}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>
                <td class="col-md-12">
                    <a href="{{route('admin.catalogues.show',$item->id)}}" class="btn btn-info mb-5">Show</a>
                    <a href="{{route('admin.catalogues.edit',$item->id)}}" class="btn btn-warning mb-5">Edit</a>
                    <a href="{{route('admin.catalogues.destroy',$item->id)}}" class="btn btn-danger mb-5" onclick="return confirm('ban co muon xoa')">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{$data->links()}}
@endsection