@extends('frontend.layouts.app')
@section('content')

 <!-- Contact Start -->
 <div class="container-fluid contact position-relative px-5" style="margin-top: 90px;">
    <div class="container">
        <div class="row g-5 mb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-primary border-inner text-center text-white p-5">
                    <i class="bi bi-geo-alt fs-1 text-white"></i>
                    <h6 class="text-uppercase my-2">Our Office</h6>
                    <span>123 Street, New York, USA</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-primary border-inner text-center text-white p-5">
                    <i class="bi bi-envelope-open fs-1 text-white"></i>
                    <h6 class="text-uppercase my-2">Email Us</h6>
                    <span>info@example.com</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-primary border-inner text-center text-white p-5">
                    <i class="bi bi-phone-vibrate fs-1 text-white"></i>
                    <h6 class="text-uppercase my-2">Call Us</h6>
                    <span>+012 345 6789</span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
          
                <form  method="post" action="{{route('contact.store')}} ">
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control bg-light border-0 px-4" placeholder="Your Name" style="height: 55px;">
                        </div>
                        <div class="col-sm-6">
                            <input type="email" name="email" class="form-control bg-light border-0 px-4" placeholder="Your Email" style="height: 55px;">
                        </div>

                        <div class="col-sm-6">
                            <input type="text" name="phone" class="form-control bg-light border-0 px-4" placeholder="Phone" style="height: 55px;">
                        </div>
                        {{-- <div class="col-sm-12">
                           
                            <select name="item" id="">
                                <option value="">Select one</option>
                                <option value="">Birthday Cake</option>
                                <option value="">Vanila Cake</option>
                                <option value="">Choclate Cake</option>
                                <option value="">Carrot Cake</option>
                                <option value="">Vanila Cake</option>
                                <option value="">Strawberry Cake</option>
                                <option value="">Red Velbet Cake</option>
                            </select>
                            
                        </div> --}}
                        <div class="col-sm-4">
                            <textarea class="form-control bg-light border-0 px-4 py-3" rows="2" name="address" placeholder="address"></textarea>
                        </div>


                        <div class="col-sm-6">
                            <input type="text" name="subject" class="form-control bg-light border-0 px-4" placeholder="subject" style="height: 55px;">
                        </div>

                        <div class="col-sm-12">
                            <button class="btn btn-primary border-inner w-100 py-3" type="submit">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->



@endsection