@extends('backend.layouts.app')

@section('content')
    
<main id="main" class="main">

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        {{-- <th>Image</th> --}}
        <th>Designation</th>
        <th width="280px">Image</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($brands as $brand)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $brand->name }}</td>
        {{-- <td>{{ $brand->image }}</td> --}}
        <td>{{ $brand->designation }}</td>
        <td> <img src="{{'images/cake/'. $brand->image}}" width="100" alt=""> </td>
        <td>
            <form action="{{ route('brands.destroy',$brand->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('brands.show',$brand->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('brands.edit',$brand->id) }}">Edit</a>

                @csrf
                @method('DELETE')
  
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $brands->withQueryString()->links('pagination::bootstrap-5') !!}
</main>

@endsection