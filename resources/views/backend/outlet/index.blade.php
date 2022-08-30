@extends('backend.master')

@section('content')


<div class="content-wrapper">


    <!-- Main content -->
    <section class="content mt-4">
      <div class="container-fluid">
        <div class="card">
        <a class="btn btn-info btn-dark">Outlets Area List</a>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    <th>Sl.</th>
                    <th>Outlet Name</th>
                    <th>Outlet Slug</th>
                    <th>Ac</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($outlets as $key=>$row)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$row->outlet_name}}</td>
                                <td>{{$row->outlet_slug}}</td>
                                <td>{{$row->outlet_address}}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-dark" ><i class="fas fa-edit "></i></a>
                                    <a href="#" class="btn btn-sm btn-danger delete-confirm delete" onclick="return myFunction();"><i class="fas fa-trash "></i></a>
                                </td>
                            </tr>
                            @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>

</div>
@endsection
