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
                    <th>outlet_name</th>
                    <th>Invoice No</th>
                    <th>order_date</th>
                    <th>customer_name</th>
                    <th>order_id</th>
                    <th>customer_contact</th>
                    <th>order_qty</th>
                    <th>validity_month</th>
                    <th>order_price</th>
                    <th>actual_price</th>
                    <th>customer_address</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($giftcards as $key=>$row)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$row->outlet->outlet_name}}</td>
                                <td>{{$row->invoice_no}}</td>
                                <td>{{$row->order_date}}</td>
                                <td>{{$row->customer_name}}</td>
                                <td>{{$row->order_id}}</td>
                                <td>{{$row->customer_contact}}</td>
                                <td>{{$row->order_qty}}</td>
                                <td>{{$row->validity_month}}</td>
                                <td>{{$row->order_price}}</td>
                                <td>{{$row->actual_price}}</td>
                                <td>{{$row->customer_address}}</td>
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
