@extends('admin.layouts.master')

@section('title')
    Danh sách khuyến mại
@endsection

@section('content')
    
<div class="container">
    <h1>Create Promotion</h1>

    <form action="{{ route('admin.promotions.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="discount_type">Discount Type</label>
            <select name="discount_type" id="discount_type" class="form-control" required>
                <option value="">Select Discount Type</option>
                <option value="amount">Amount</option>
                <option value="percentage">Percentage</option>
            </select>
        </div>

        <div class="form-group" id="discount_value_container">
            <label for="discount_value" id="discount_value_label">Discount Value</label>
            <input type="number" name="discount_value" id="discount_value" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" id="start_date" class="form-control" required>
            @error('start_date')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" name="end_date" id="end_date" class="form-control" required>
            @error('end_date')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create Promotion</button>
    </form>
</div>
    
        {{-- {{ $promotions->links() }} --}}
        @section('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const discountTypeSelect = document.getElementById('discount_type');
                const discountValueContainer = document.getElementById('discount_value_container');
                const discountValueInput = document.getElementById('discount_value');
                const discountValueLabel = document.getElementById('discount_value_label');
        
                discountTypeSelect.addEventListener('change', function() {
                    const discountType = this.value;
                    if (discountType === 'percentage') {
                        discountValueInput.setAttribute('placeholder', 'Enter discount percentage');
                        discountValueLabel.textContent = 'Discount Percentage';
                    } else if (discountType === 'amount') {
                        discountValueInput.setAttribute('placeholder', 'Enter discount amount');
                        discountValueLabel.textContent = 'Discount Amount';
                    } else {
                        discountValueInput.removeAttribute('placeholder');
                        discountValueLabel.textContent = 'Discount Value';
                    }
                });
            });
        </script>
        @endsection
@endsection