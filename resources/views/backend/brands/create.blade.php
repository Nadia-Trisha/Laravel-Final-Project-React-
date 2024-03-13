@extends ('backend.layouts.app')

@section('content')
<main id="main" class="main">

<div class="pagetitle">
  <h1>Form Elements</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active">Elements</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">mastercheif Entry</h5>
          
      
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach


          <!-- General Form Elements -->
          <form method="post" action="{{ route('brands.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" name="name" value="{{ old('name') }}" class="form-control">
              </div>

     
                <label for="inputText" class="col-sm-2 col-form-label">Designation</label>
                <div class="col-sm-10">
                  <input type="text" name="designation" value="{{ old('designation') }}" class="form-control">
                </div>

                <div class="col-sm-10">
                    <label for="inputText" class="col-sm-2 col-form-label">Image</label>
                    
                  <input type="file" name="image"  class="form-control">
                  
                  </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Submit Button</label>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>

    </div>

    
  </div>
</section>

</main><!-- End #main -->


@endsection
