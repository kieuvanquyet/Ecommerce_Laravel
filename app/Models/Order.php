<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    const STATUS_ORDER = [
        'pending' => 'Chờ xác nhận',
        'confirmed' => 'Đã xác nhận',
        'preparing_goods' => 'Đang chuẩn bị hàng',
        'shipping' => 'Đang vận chuyển',
        'delivered' => 'Đã giao hàng',
        'canceled' => 'Đơn hàng đã bị hủy',
    ];
    public static function validTransitions()
    {
        return [
            'pending' => ['confirmed', 'preparing_goods', 'shipping', 'delivered', 'canceled'],
            'confirmed' => ['preparing_goods', 'shipping', 'delivered', 'canceled'],
            'preparing_goods' => ['shipping', 'delivered', 'canceled'],
            'shipping' => ['delivered', 'canceled'],
            'delivered' => [],
            'canceled' => [],
        ];
    }

    const STATUS_PAYMENT = [
        'unpaid' => 'Chưa thanh toán',
        'paid' => 'Đã thanh toán',
    ];

    const PAYMENT_METHODS = [
        'cash_on_delivery' => 'Thanh toán khi nhận hàng',
        'credit_card' => 'Thẻ tín dụng',
        'paypal' => 'PayPal',
        'bank_transfer' => 'Chuyển khoản ngân hàng',
    ];
    
    const STATUS_ORDER_PENDING = 'pending';
    const STATUS_ORDER_CONFIRMED = 'confirmed';
    const STATUS_ORDER_PREPARING_GOODS = 'preparing_goods';
    const STATUS_ORDER_SHIPPING = 'shipping';
    const STATUS_ORDER_DELIVERED = 'delivered';
    const STATUS_ORDER_CANCELED = 'canceled';
    const STATUS_PAYMENT_UNPAID = 'unpaid';
    const STATUS_PAYMENT_PAID = 'paid';


    protected $fillable = [
        'user_id',
        'user_name',
        'user_email',
        'user_phone',
        'user_address',
        'user_note',
        'is_ship_user_same_user',
        'ship_user_name',
        'ship_user_email',
        'ship_user_phone',
        'ship_user_address',
        'ship_user_note',
        'status_order',
        'status_payment',
        'total_price',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
