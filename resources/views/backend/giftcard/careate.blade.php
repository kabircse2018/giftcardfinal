@extends('welcome')
@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mt-2">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">

            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Gift Card Issue</h3>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route('giftcard.store') }}">
                    @csrf
                  <div class="form-row">
                    <div class="form-group col-md-3">
                    <label>Purchase From</label>
                    <select class="form-control select2" style="width: 100%;" name="outlet_id">
                      <option selected="selected">Select area</option>
                      @foreach ($outlets as $row)
                          <option value="{{ $row->id }}">{{ $row->outlet_name }}</option>
                      @endforeach
                    </select>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-3">
                      <label>Invoice No</label>
                      <input type="text" class="form-control" name="invoice_no" placeholder="Invoice No" class="form-control @error('invoice_no') is-invalid @enderror">
                    @error('invoice_no')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{$message}}</strong>
                      </span>
                     @enderror
                    </div>

                    {{-- <div class="form-group col-md-3">
                      <label>Unique Invoice No</label>
                      <input type="text" class="form-control" name="unique_invoice_no" placeholder="Unique Invoice No">
                    </div> --}}

                    <div class="form-group col-md-3">
                      <label>Order Date(MM-DD-YY)</label>
                      <input type="date" class="form-control" name="order_date" placeholder="Order Date">
                    </div>

                    <div class="form-group col-md-3">
                      <label>Customer/Order ID</label>
                      <input type="text" class="form-control" name="order_id" placeholder="Customer/Order ID">
                    </div>

                    <div class="form-group col-md-3">
                      <label>Customer Name</label>
                      <input type="text" class="form-control" name="customer_name" placeholder="Customer Name">
                    </div>

                    <div class="form-group col-md-3">
                      <label>Customer Contact</label>
                      <input type="tel" class="form-control" name="customer_contact" placeholder="Customer contact">
                    </div>

                    <div class="form-group col-md-3">
                      <label>Order Qty</label>
                      <input type="text" class="form-control" name="order_qty" placeholder="Order Qty">
                    </div>

                    <div class="form-group col-md-3">
                      <label>Validity Month</label>
                      <input type="number" class="form-control" name="validity_month" placeholder="Validity Month">
                    </div>


                    <div class="form-group col-md-3">
                      <label>Order Price</label>
                      <input type="text" class="form-control" name="order_price" placeholder="Order Price">
                    </div>

                    <div class="form-group col-md-3">
                      <label>Actual Price</label>
                      <input type="text" class="form-control" name="actual_price" placeholder="Actual Price">
                    </div>

                  </div>

                  <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" name="customer_address" rows="4"></textarea>
                  </div>

              </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">SAVE</button>
              </div>
            </div>
            </div>
          </div>
        </div>
     </div>
    </section>
    <!-- /.content -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

@endsection
