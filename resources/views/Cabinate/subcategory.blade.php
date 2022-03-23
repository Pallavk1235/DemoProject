@extends('layouts.app3')
@section('content')
<!-- general form elements disabled -->

{{-- <div class="row">
  <div class="col-md-6">
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">Add Cabinate category</h3>
      </div>
      <div class="card-body">
        <form role="form" action="{{route('door.storemain')}}" method="POST">
          @csrf
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Category Name</label>
                <input type="text" name="door_main_name" id="door_main_name" class="form-control @error('door_main_name') is-invalid @enderror" value="{{old('door_main_name')}}" placeholder="">
                @error('door_main_name')
                <span class="invalid-feedback" role='alert'>
                  <strong>{{ $message }}</strong>           
                </span>
                @enderror
              </div>
            </div>
          </div>   
          <div class="row">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary" style="float:right;">Submit</button>  
            </div>
          </div>
        </form>
      </div>
    </div>    
  </div>
  
  <div class="col-md-6">
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">Add Cabinate type</h3>
      </div>
      <div class="card-body">
        <form role="form" action="{{route('door.storemain')}}" method="POST">
          @csrf
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Category Name</label>
                <input type="text" name="door_main_name" id="door_main_name" class="form-control @error('door_main_name') is-invalid @enderror" value="{{old('door_main_name')}}" placeholder="">
                @error('door_main_name')
                <span class="invalid-feedback" role='alert'>
                  <strong>{{ $message }}</strong>           
                </span>
                @enderror
              </div>
            </div>
          </div> 
          <div class="row">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary" style="float:right;">Submit</button>  
            </div>
          </div>
        </form>
      </div>
    </div>    
  </div>
</div> --}}

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered">

    <!-- Modal content-->
    <form role="form" id="add_category_form" action="{{url('/manage-sub-category/add')}}" method="POST" style="width: 100%">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="titleModel">Add category</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            {{-- action="{{route('door.storemain')}}" --}}
              @csrf
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group input_group_wrp">
                    <label>Category Name</label>
                    @if(!empty($mainproducts))
                        <select name="cat_id" id="cat_id" class="form-control @error('cat_id') is-invalid @enderror" value="{{old('cat_id')}}">
                            <option value=''>Select category</option>
                            @foreach($mainproducts as $cat)
                                <option value={{$cat->id}}>{{$cat->cabinate_main_name}}</option>
                            @endforeach
                        </select>
                    @endif
                    @error('cat_id')
                    <span class="invalid-feedback" role='alert'>
                      <strong>{{ $message }}</strong>           
                    </span>
                  @enderror
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group input_group_wrp">
                    <label>Sub Category Name</label>
                    <input type="text" name="sub_cat_name" id="sub_cat_name" class="form-control @error('sub_cat_name') is-invalid @enderror" value="{{old('sub_cat_name')}}" placeholder="Enter sub category">
                    @error('sub_cat_name')
                      <span class="invalid-feedback" role='alert'>
                        <strong>{{ $message }}</strong>           
                      </span>
                    @enderror
                  </div>
                </div>
              </div>   
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" id="add_cat_btn">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </form>
    </div>
</div>

<div id="updateModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered">

    <!-- Modal content-->
    <form role="form" id="add_category_form" action="{{url('/manage-sub-category/update')}}" method="POST" style="width: 100%">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="titleModel">Edit category</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            {{-- action="{{route('door.storemain')}}" --}}
            
              @csrf
              <div class="row">
                <div class="col-sm-12">
                    <div class="form-group input_group_wrp">
                      <label>Category Name</label>
                      @if(!empty($mainproducts))
                          <select name="cat_id" id="edit_cat_id" class="form-control @error('cat_id') is-invalid @enderror" value="{{old('cat_id')}}">
                              <option value=''>Select category</option>
                            @foreach($mainproducts as $cat)
                                  <option value={{$cat->id}}>{{$cat->cabinate_main_name}}</option>
                              @endforeach
                          </select>
                      @endif
                      @error('cat_id')
                      <span class="invalid-feedback" role='alert'>
                        <strong>{{ $message }}</strong>           
                      </span>
                    @enderror
                    </div>
                  </div>

                <div class="col-sm-12">
                  <div class="form-group input_group_wrp">
                    <input type="hidden" name="id" id="id" value="{{old('id')}}">
                    <label>Sub Category Name</label>
                    <input type="text" name="sub_cat_name" id="edit_sub_cat_name" class="form-control @error('sub_cat_name') is-invalid @enderror" value="{{old('sub_cat_name')}}">
                    @error('sub_cat_name')
                      <span class="invalid-feedback" role='alert'>
                        <strong>{{ $message }}</strong>           
                      </span>
                    @enderror
                  </div>
                </div>
              </div>   
        
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success" id="update_cat_btn">Update</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </form>
  </div>
</div>

<div class="row">
  {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
    @if(isset($_GET['success']))
      <div class="alert alert-success" id="successDiv">
        @if($_GET['success'] == 'add')
            <p>Sub category successfully added</p>
        @elseif($_GET['success'] == 'update')
            <p>Sub category successfully updated</p>
        @elseif($_GET['success'] == 'delete')
            <p>Sub category successfully deleted</p>
        @endif
      </div>
    @endif
    @if(isset($_GET['error']))
        <div class="alert alert-danger" id="errorDiv">
            @if($_GET['error'] == 'val')
                <p>Fill up all details.</p>
            @else
                <p>Something went wrong on server side.</p>
            @endif
        </div>
    @endif
  </div> --}}
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Cabinate sub Category</h3>
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
                  <button class="btn btn-info" id="add_category">Add sub category</button>
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
              {{-- <th>Update</th> --}}
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($typeproducts as $product)
            <tr>
              <td>{{ $product->cab_type_id }}</td>
              <td>{{ $product->cabinate_main_name }}</td>
              <td>{{ $product->cabinate_type_name }}</td>
              <td colspan="2">
                <button class="btn btn-info update-btn" data-value="{{$product->cab_main_id}}" data-name="{{$product->cabinate_type_name}}" data-id="{{ $product->cab_type_id }}">Update</button>
                {{-- <td> --}}
                  <a class="btn btn-danger" href={{ url("delete-sub-category/".$product->cab_type_id) }}>Delete</a>
                  {{-- </td> --}}
              </td>

            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
 
</div>



{{-- <div class="row mt-5">
    <div class="col-md-12">
      <div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title">Add Cabinate Subtypecategory</h3>
        </div>
        <div class="card-body">
          <form role="form" action="{{route('door.storemain')}}" method="POST">
            @csrf
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label>Category Name</label>
                  <input type="text" name="door_main_name" id="door_main_name" class="form-control @error('door_main_name') is-invalid @enderror" value="{{old('door_main_name')}}" placeholder="">
                  @error('door_main_name')
                  <span class="invalid-feedback" role='alert'>
                    <strong>{{ $message }}</strong>           
                  </span>
                  @enderror
                </div>
              </div>
            </div> 
            <div class="row">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-primary" style="float:right;">Submit</button>  
              </div>
            </div>
          </form>
        </div>
      </div>    
  </div>
</div> --}}
{{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> --}}
{{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> --}}
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}

<script type="text/javascript">
  $(document).ready(function () {
      $('#add_category').on('click', function(e){
        e.preventDefault();
        $('#myModal').find('#add_cat_btn').show();
        $('#myModal').modal('show');
      })

      $('#category_sub_table').find('.update-btn').on('click', function(){
        var id = $(this).data('id');
        var name = $(this).data('name');
        var value = $(this).data('value');
        $('#updateModal').find('#update_cat_btn').attr('data-id', id);
        $('#updateModal').find('#titleModel').text('Update category');
        $('#updateModal').find('#update_cat_btn').show();
        $('#edit_sub_cat_name').val(name)
        $('#id').val(id)
        $('#edit_cat_id').val(value)
        $('#updateModal').modal('show');
      })
});
</script>
@endsection
