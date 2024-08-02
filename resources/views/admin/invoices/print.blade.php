<!DOCTYPE html>
<html>
<head>
    <title>Hoa don #{{ $order->id }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
        }
        h1, h2, h3 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
            color: #333;
        }
        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        h3 {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Hoa don #{{ $order->id }}</h1>
    <p><strong>Ten khach hang:</strong> {{ $order->user_name }}</p>
    <p><strong>Email:</strong> {{ $order->user_email }}</p>
    <p><strong>Dien thoai:</strong> {{ $order->user_phone }}</p>
    <p><strong>Dia chi:</strong> {{ $order->user_address }}</p>

    <h2>Danh sach san pham</h2>
    <table>
        <thead>
            <tr>
                <th>Ten san pham</th>
                <th>SKU</th>
                <th>Gia ban</th>
                <th>So luong</th>
                <th>Size</th>
                <th>Mau sac</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->orderItems as $item)
                <tr>
                    <td>{{ $item->product_name }}</td>
                    <td>{{ $item->product_sku }}</td>
                    <td>{{ number_format($item->product_price_sale) }} VND</td>
                    <td>{{ $item->quatity }}</td>
                    <td>{{ $item->variant_size_name }}</td>
                    <td>{{ $item->variant_color_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h3>Tong gia: {{ number_format($order->total_price) }} VND</h3>
</body>
</html>
