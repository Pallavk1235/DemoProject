@extends('layouts.app2')
@section('content')
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Modal Header</h4>
			</div>
			<div class="modal-body">
				<form>
					<div class="row">
						<div class="col-md-12">
							 <div class="form-group">
							 	<label>Select Main Category</label>
							 	<select class="form-control">
                  @foreach($maincategory as $item)
                     <option value="{{$item->id}}">{{$item->cabinate_main_name}}</option>
                  @endforeach
							 	</select>
							 </div>
						</div>
						<div class="col-md-12">
							 <div class="form-group">
							 	<label>Select Type Category</label>
							 	<select class="form-control">
							 		@foreach($typecategory as $item)
                     <option value="{{$item->id}}">{{$item->cabinate_type_name}}</option>
                  @endforeach
							 	</select>
							 </div>
						</div>
						<div class="col-md-12">
							 <div class="form-group">
							 	<label>Select Subtype Category</label>
							 	<select class="form-control">
							 		@foreach($subtypecategory as $items)
                     {{-- <option value="{{$items->id}}">{{$items->cabinate_subtype_name}}</option> --}}
                  @endforeach
							 	</select>
							 </div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

 <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Select Category</h3>
        <div class="card-tools">
          <div class="input-group input-group-sm" style="">
            <div class="row" style="width: 100%">
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 col-12" style="display: none">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-12">
                <div>
                  {{-- <a class="btn btn-info" href="{{route('customers.add')}}" >
                    Add Catgeory
                  </a> --}}
                  <button class="btn btn-info" data-toggle="modal" data-target="#myModal">Select Category</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap" id="category_sub_table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Category Name</th>
              <th>Sub Category Name</th>
              <th>Unit name</th>
              <th>Unit code</th>
              <th>Price</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
         
              <td></td>
              <td colspan="2">
                <button class="btn btn-info update-btn" data-id="" data-value="">Update</button>
                <td>
                  <a class="btn btn-danger" href="">Delete</a>
                  </td>
              </td>

            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
 
</div>



@endsection