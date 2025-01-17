@extends('backend.layouts.app')
@section('title', 'Search')
@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>General Tables</h1>

    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">General</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Default Table</h5>

            <form action="" method="GET">
                <input type="text" name="search" placeholder="Search Your Product">
               <select name="cat" id="">
                  <option value="">Select One</option>
                  <option value="5">Chocolate Cake</option>
                  <option value="6">Carrot Cake</option>
                  <option value="7">Vanila Cake</option>
                  
               </select>
               <input type="submit" name="submit" value="SEARCH">
            </form>

            <!-- Default Table -->
            

                    @if(count($products)>0)

                    <table class="table">
                      <thead>
                          <tr>
                            <th>
                              ID
                            </th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Tags</th>
                            <th>Description</th>
                            <th>Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>

                    @foreach($products as $item)  
                  <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->name}}</td>
                      <td>{{$item->price}}</td>
                      <td> <img src="{{'images/'. $item->image}}" width="100" alt=""> </td>
                      <td>{{$item->category->name}}</td>
                      <td>
                       <!-- {{ implode(", ", $item->tags) }} -->
                      <ul>
                       @foreach($item->tags as $tag)
                        <li>{{$tag}}</li>   
                       @endforeach
                     </ul>
                      </td>
                      
                      <td>{!!$item->description!!}</td>
                      <td>
                        
                     <a href="{{route('product.edit', $item->id)}}">Edit</a>  | 
                        
                     <a href="{{route('product.delete', $item->id)}}" onclick="return confirm('Are you sure to delete?')" >Delete</a> 
                    
                    </td> 
                    </tr>
                  @endforeach 
                </tbody>
               </table>
                  <!-- End Default Table Example -->

               @else 
                  <h1>No Data Found</h1>

                  @endif

                  
                  
         
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection