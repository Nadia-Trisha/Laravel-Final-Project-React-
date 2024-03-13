<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        * {font-family: 'Roboto', sans-serif;line-height: 26px;font-size: 15px}
        .custom--table {width: 100%;color: inherit;vertical-align: top;font-weight: 400;border-collapse: collapse;border-bottom: 2px solid #ddd;margin-top: 0;}
        .table-title{font-size: 18px;font-weight: 600;line-height: 32px;margin-bottom: 10px}
        .custom--table thead {font-weight: 700;background: inherit;color: inherit;font-size: 16px;font-weight: 500}
        .custom--table tbody {border-top: 0;overflow: hidden;border-radius: 10px;}
        .custom--table thead tr {border-top: 2px solid #ddd;border-bottom: 2px solid #ddd;text-align: left}
        .custom--table thead tr th {border-top: 2px solid #ddd;border-bottom: 2px solid #ddd;text-align: left;font-size: 16px;padding: 10px 0}
        .custom--table tbody tr {vertical-align: top;}
        .custom--table tbody tr td {font-size: 14px;line-height: 18px; vertical-align:top 10}
        .custom--table tbody tr td:last-child{padding-bottom: 10px;}
        .custom--table tbody tr td .data-span {font-size: 14px;font-weight: 500;line-height: 18px;}
        .custom--table tbody .table_footer_row {border-top: 2px solid #ddd;margin-bottom: 10px !important;padding-bottom: 10px !important}
        /* invoice area */
        .invoice-area {padding: 10px 0}
        .invoice-wrapper {max-width: 650px;margin: 0 auto;box-shadow: 0 0 10px #f3f3f3;padding: 0px;}
        .invoice-header {margin-bottom: 40px;}
        .invoice-flex-contents {display: flex;align-items: center;justify-content: space-between;gap: 24px;flex-wrap: wrap;}
        .invoice-title {font-size: 25px;font-weight: 700}
        .invoice-details {margin-top: 20px}
        .invoice-details-flex {display: flex;align-items: flex-start;justify-content: space-between;gap: 24px;flex-wrap: wrap;}
        .invoice-details-title {font-size: 18px;font-weight: 700;line-height: 32px;color: #333;margin: 0;padding: 0}
        .invoice-single-details {padding:10px}
        .details-list {margin: 0;padding: 0;list-style: none;margin-top: 10px;}
        .details-list .list {font-size: 14px;font-weight: 400;line-height: 18px;color: #666;margin: 0;padding: 0;transition: all .3s;}
        .details-list .list strong {font-size: 14px;font-weight: 500;line-height: 18px;color: #666;margin: 0;padding: 0;transition: all .3s}
        .details-list .list a {display: inline-block;color: #666;transition: all .3s;text-decoration: none;margin: 0;line-height: 18px}
        .item-description {margin-top: 10px;padding:10px;}
        .products-item {text-align: left}
        .invoice-total-count .list-single {display: flex;align-items: center;gap: 30px;font-size: 16px;line-height: 28px}
        .invoice-subtotal {border-bottom: 2px solid #ddd;padding-bottom: 15px}
        .invoice-total {padding-top: 10px}
        .invoice-flex-footer {display: flex;align-items: flex-start;justify-content: space-between;flex-wrap: wrap;gap: 30px;}
        .single-footer-item {flex: 1}
        .single-footer {display: flex;align-items: center;gap: 10px} 
        .single-footer .icon {display: flex;align-items: center;justify-content: center;height: 30px;width: 30px;font-size: 16px;background-color: #000e8f;color: #fff}
    </style>

</head>
<body>

<!-- Invoice area Starts -->
<div class="invoice-area">
    <div class="invoice-wrapper">
        <div class="invoice-header">
            {{-- <img src="{{ public_path('backend/assets/images/logo.png')}}" alt="not found"> --}}

            <h1 class="invoice-title" style="text-align:center;">Invoice - CakeZone</h1>
        </div>
        <div class="invoice-details">
            <div class="invoice-details-flex">
                <div class="invoice-single-details">
                    @foreach($orders as $order)
                    <h2 class="invoice-details-title">Ship To: {{ $order->customerName }}</h2>
                    <ul class="details-list">
                        {{-- <li class="list">{{ $order->customerName }}</li> --}}
                        <li class="list">Email:  {{ $order->email }} </li>
                        <li class="list">Phone: {{ $order->phone }} </li>
                        <li class="list">Address: {{ $order->address }}</li>
                    </ul>                   
                </div>
                {{-- @endforeach --}}
            </div>
        </div>

        <div class="item-description">
            <h5 class="table-title">Order Details</h5>
            <table class="custom--table">
                <thead>
                <tr>
                    <th>Packege Name</th>
                    <th>Unit Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$order->productName}}</td>
                    <td>${{$order->total_amount}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>${{$order->total_amount}}</td>
                </tr>
                <tr>
                    <th>Total Bill</th>
                    <th></th>
                    <th></th>
                    <td style="font-weight: bold">${{$order->total_amount}}</td>
                </tr>
                </tbody>
                @endforeach
            </table>
        </div>

        {{-- <div class="item-description">
            <div class="table-responsive">
                <h5 class="table-title">Orders Details</h5>
                <table class="custom--table">
                    <thead class="head-bg">
                    <tr>
                        <th>Buyer Details</th>
                        <th>Date & Schedule</th>
                        <th>Amount Details</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <span class="data-span">Name:</span>Nazmul Hoque<br>
                            <span class="data-span">Email:</span>Nazmul@gmail.com <br>
                            <span class="data-span">Phone: </span>01678985958 <br>
                            <span class="data-span">Address:</span>West Panthapath, Dhanmondi
                        </td>
                        <td>
                            30-9-2022 <br>
                            Fri, 10pm
                        </td>
                        <td>
                            <span class="data-span"> Package Fee:</span>$70 <br>
                            <span class="data-span"> Sub Total:</span>$70 <br>
                            <span class="data-span"> Tax: </span>$10 <br>
                            <span class="data-span"> Total:</span>$80 <br>
                            <span class="data-span">Payment Status: </span>Pending
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div> --}}

        <footer>
            <h3 style="text-align: center">
                Copyright @2023
            </h3>
        </footer>

    </div>
</div>

<!-- Invoice area end -->

</body>

</html>