@extends('admin.layouts.master')

@section('title')
    Danh sách khuyến mại
@endsection

@section('content')
    
    <div class="container">
        <h1>Danh Sách Khuyến Mãi</h1>
        <a href="{{ route('admin.promotions.create') }}" class="btn btn-primary mb-3">Tạo Khuyến Mãi Mới</a>
    
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên Khuyến Mãi</th>
                    <th>Mô Tả</th>
                    <th>Giảm Giá</th> <!-- Sửa tiêu đề cột -->
                    <th>Ngày Bắt Đầu</th>
                    <th>Ngày Kết Thúc</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($promotions as $promotion)
                    <tr>
                        <td>{{ $promotion->id }}</td>
                        <td>{{ $promotion->name }}</td>
                        <td>{{ $promotion->description }}</td>
                        <td>
                            @if($promotion->discount_type === 'amount')
                                {{ number_format($promotion->discount_value, ) }} VNĐ
                            @elseif($promotion->discount_type === 'percentage')
                                {{ number_format($promotion->discount_value, ) }}%
                            @else
                                N/A
                            @endif
                        </td>
                        <td>{{ $promotion->start_date->format('d-m-Y') }}</td>
                        <td>{{ $promotion->end_date->format('d-m-Y') }}</td>
                        <td>
                            <a href="{{ route('admin.promotions.edit', $promotion->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                            <form action="{{ route('admin.promotions.destroy', $promotion->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    
        {{-- {{ $promotions->links() }} --}}
    </div>
@endsection
