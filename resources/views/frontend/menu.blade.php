@extends('frontend.layouts.app')
@section('content')


<!-- Products Start -->
<div class="container-fluid about py-5">
    <div class="container">
        <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
            <h2 class="text-primary font-secondary">Menu & Pricing</h2>
            <h1 class="display-4 text-uppercase">Explore Our Cakes</h1>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center bg-dark text-uppercase border-inner p-4 mb-5">
                <li class="nav-item">
                    <a class="nav-link text-white active" data-bs-toggle="pill" href="#tab-1">Birthday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" data-bs-toggle="pill" href="#tab-2">Wedding</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" data-bs-toggle="pill" href="#tab-3">Custom</a>
                </li>
            </ul>


            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-3">

                        @foreach($data as $item)
                       

                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="{{'images/cake/'.$item->image}}" alt="" style="width: 150px; height: 85px;">                                    
                                    <h4 class="bg-dark text-primary p-2 m-0">{{$item->price}}</h4>
                                    <a href="{{route('add.to.cart', $item->id)}}"><button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-3">Add to Cart</button></a> 
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">{{$item->name}}</h5>
                                    <span>{{$item->description}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach


                        {{-- <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="frontend/assets/img/cake-11.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">Birthday Cake</h5>
                                    <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="frontend/assets/img/cake-1.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">Birthday Cake</h5>
                                    <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="frontend/assets/img/cake-5.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">Birthday Cake</h5>
                                    <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="frontend/assets/img/cake-1.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">Birthday Cake</h5>
                                    <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="frontend/assets/img/cake-4.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">Birthday Cake</h5>
                                    <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="frontend/assets/img/cake-2.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">Wedding Cake</h5>
                                    <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="frontend/assets/img/cake-3.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">Wedding Cake</h5>
                                    <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="frontend/assets/img/cake-2.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">Wedding Cake</h5>
                                    <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="frontend/assets/img/cake-6.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">Wedding Cake</h5>
                                    <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="frontend/assets/img/cake-7.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">Wedding Cake</h5>
                                    <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="frontend/assets/img/cake-8.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">Wedding Cake</h5>
                                    <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div id="tab-3" class="tab-pane fade show p-0">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="frontend/assets/img/cake-5.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">Custom Cake</h5>
                                    <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="frontend/assets/img/cake-4.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">Custom Cake</h5>
                                    <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="frontend/assets/img/cake-8.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">Custom Cake</h5>
                                    <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="frontend/assets/img/cake-10.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">Custom Cake</h5>
                                    <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="frontend/assets/img/cake-3.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">Custom Cake</h5>
                                    <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="frontend/assets/img/cake-5.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">Custom Cake</h5>
                                    <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->


<!-- Offer Start -->
<div class="container-fluid bg-offer my-5 py-5">
    <div class="container py-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title position-relative text-center mx-auto mb-4 pb-3" style="max-width: 600px;">
                    <h2 class="text-primary font-secondary">Special Kombo Pack</h2>
                    <h1 class="display-4 text-uppercase text-white">Super Crispy Cakes</h1>
                </div>
                <p class="text-white mb-4">Eirmod sed tempor lorem ut dolores sit kasd ipsum. Dolor ea et dolore et at sea ea at dolor justo ipsum duo rebum sea. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo lorem. Elitr ut dolores magna sit. Sea dolore sed et.</p>
                <a href="" class="btn btn-primary border-inner py-3 px-5 me-3">Shop Now</a>
                <a href="" class="btn btn-dark border-inner py-3 px-5">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- Offer End -->




@endsection