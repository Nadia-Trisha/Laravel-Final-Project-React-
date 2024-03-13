@extends('frontend.layouts.app')
@section('content')
<main id="main" class="main">
 <!-- About Start -->
 <div class="container-fluid pt-5">
    <div class="container">
        
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered second" style="width:100%">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Order Number</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            {{-- <th>Customer Name</th>
                            <th>Phone No</th>
                            <th>Address</th> --}}
                            <th>Invoices</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)                               
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->order_number}}</td>
                                <td>{{$order->productName}}</td>
                                <td>{{$order->quantity}}</td>                                    
                                <td>{{$order->total_amount}}</td>                                    
                                {{-- <td>{{$order->customerName}}</td>                                    
                                <td>{{$order->phone}}</td>                                    
                                <td>{{$order->address}}</td>                                     --}}
                                <td><a href="{{url('invoice/'. $order->order_number) }}" target="_blank" class="btn btn-dark">Invoice</a></td>                                    
                                 
                                <td>
                                    @if ($order->status==0)
                                    <button class="btn btn-warning">Pending</button>
                                    @else
                                    <button class="btn btn-success">Delivered</button>
                                    @endif
                                </td>                                   
                            </tr>
                        @endforeach                              
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</div>
<!-- About End -->

</main><!-- End #main -->

@endsection