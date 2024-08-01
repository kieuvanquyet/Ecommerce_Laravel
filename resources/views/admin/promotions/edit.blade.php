@extends('admin.layouts.master')

@section('title')
    Chỉnh sửa Khuyến Mãi
@endsection

@section('content')
    
<div class="container">
    <h1>Edit Promotion</h1>

    <form action="{{ route('admin.promotions.update', $promotion->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $promotion->name) }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control">{{ old('description', $promotion->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="discount_type">Discount Type</label>
            <select name="discount_type" id="discount_type" class="form-control" required>
                <option value="">Select Discount Type</option>
                <option value="amount" {{ $promotion->discount_type === 'amount' ? 'selected' : '' }}>Amount</option>
                <option value="percentage" {{ $promotion->discount_type === 'percentage' ? 'selected' : '' }}>Percentage</option>
            </select>
        </div>

        <div class="form-group" id="discount_value_container">
            <label for="discount_value" id="discount_value_label">
                {{ $promotion->discount_type === 'percentage' ? 'Discount Percentage' : 'Discount Amount' }}
            </label>
            <input type="number" name="discount_value" id="discount_value" class="form-control" value="{{ old('discount_value', $promotion->discount_type === 'percentage' ? $promotion->discount_percentage : $promotion->discount_amount) }}" required>
        </div>

        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" id="start_date" class="form-control" value="{{ old('start_date', $promotion->start_date->format('Y-m-d')) }}" required>
        </div>

        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" name="end_date" id="end_date" class="form-control" value="{{ old('end_date', $promotion->end_date->format('Y-m-d')) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Promotion</button>
    </form>
</div>
    
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

        // Trigger change event to set correct labels and placeholders on page load
        discountTypeSelect.dispatchEvent(new Event('change'));
    });
</script>
@endsection
@endsection
