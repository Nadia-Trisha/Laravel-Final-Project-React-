<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generate_pdf($order_number)
    {        
        $orders = Order::all()->where('order_number', $order_number);


        $pdf = Pdf::loadView('backend.billing_invoice', compact('orders'));
        return $pdf->stream('billing-invoice');
    }

}
