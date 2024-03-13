@extends('backend.layouts.app')

@section('content')
<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Tables</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Data</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Datatables</h5>
          {{-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p> --}}

          <!-- Table with stripped rows -->

          @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div> 
      @endif
          <table class="table datatable">
            <thead>
              <tr>
                <th>
                  ID
                </th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Category</th>
                <th>Description</th>
                <th>Tags</th>
                <th>Action</th>
                
              </tr>
            </thead>
            <tbody>
            @foreach($products as $item)  
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td> <img src="{{'images/cake/'. $item->image}}" width="100" alt=""> </td>
                {{-- <td>{{$item->category->name}}</td> --}}
                <td>{{ $item->category ? $item->category->name : 'N/A' }}</td>

            
              
                <td>{!!$item->description!!}</td>
                
                {{-- <td>{{$item->tags}}</td> --}}
                <td>
                  
               {{-- <p class="btn-holder"><a href="{{ route('add.to.cart', $item->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p> --}}
              
              </td> 
              {{-- copy --}}
              <td class="" style="display:flex; gap:10px">
               
                  
               
 
                <div>
                  {{-- <form action="{{route('booking.status',$item->id)}}" method="post">
                    @csrf
                    <select name="status" id="">
                      <option value="" disabled>Select One</option>
                      <option value="0">Cancle</option>
                      <option value="1">confirm</option>
                      <option value="2">panding</option>
                    </select>
                    <button type="submit">Change</button>
                  </form> --}}
                </div>
                <div>
                  <a href="{{route('product.edit', $item->id)}}" class="btn btn-sm btn-warning" >Edit</a> 
                  <a href="{{route('product.delete', $item->id)}}"class="btn btn-sm btn-dark" onclick="return confirm('Are you sure to delete?')">Delete</a>
                  {{-- <a href="{{route('invoiceperid',$item->id)}}" target="_blank" class="btn btn-sm btn-dark" style="margin-left:10px;"> Invoice</a> --}}
                </div>
              </td>
              {{-- end --}}
              </tr>
            @endforeach 
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->


@endsection


