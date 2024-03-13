
@extends ('backend.layouts.app')

@section('content')
<main id="main" class="main">

<!--Section: Contact v.2-->
<div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Datatables</h5>
          <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p>

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
                  Sl No
                </th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Subject</th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($contact as $key=>$item)
              <tr>
                <td>{{++$key}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->subject}}</td>
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
<!--Section: Contact v.2-->
</main>

@endsection