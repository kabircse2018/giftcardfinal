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
                <h3 class="card-title">Outlet Area</h3>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route('outlet.store') }}">
                @csrf
                  <div class="row">
                    <div class="form-group col-md-3">
                      <label>Outlet Name</label>
                      <input type="text" class="form-control" name="outlet_name" placeholder="Outlet Name">
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Outlet Address</label>
                    <textarea class="form-control" name="outlet_address" rows="4"></textarea>
                  </div>
                </form>
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
