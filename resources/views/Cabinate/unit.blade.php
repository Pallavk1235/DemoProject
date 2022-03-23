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
    <form role="form" id="add_category_form" action="{{url('/manage-unit/add')}}" method="POST" style="width: 100%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="titleModel">Add Unit</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            {{-- action="{{route('door.storemain')}}" --}}
              @csrf
                <div class="row">
                    <input type="hidden" name="id" id="id">
                    <div class="col-sm-6">
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
                    <div class="col-sm-6">
                        <div class="form-group input_group_wrp">
                            <label>Sub Category Name</label>
                            @if(!empty($mainproducts))
                                <select name="sub_cat_id" id="sub_cat_id" class="form-control @error('sub_cat_id') is-invalid @enderror" value="{{old('sub_cat_id')}}">
                                    <option value=''>Select sub category</option>
                                    {{-- @foreach($mainproducts as $cat)
                                        <option value={{$cat->id}}>{{$cat->cabinate_main_name}}</option>
                                    @endforeach --}}
                                </select>
                            @endif
                            @error('sub_cat_id')
                                <span class="invalid-feedback" role='alert'>
                                    <strong>{{ $message }}</strong>           
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group input_group_wrp">
                            <label>Name</label>
                            <input type="text" name="unit_name" id="unit_name" class="form-control @error('unit_name') is-invalid @enderror" value="{{old('unit_name')}}" placeholder="Enter Unit">
                            @error('unit_name')
                                <span class="invalid-feedback" role='alert'>
                                    <strong>{{ $message }}</strong>           
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group input_group_wrp">
                            <label>Code</label>
                            <input type="text" name="code" id="code" class="form-control @error('unit_name') is-invalid @enderror" value="{{old('code')}}" placeholder="Enter code">
                            @error('code')
                                <span class="invalid-feedback" role='alert'>
                                    <strong>{{ $message }}</strong>           
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group input_group_wrp">
                            <label>Description</label>
                            <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}" placeholder="Enter description"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role='alert'>
                                    <strong>{{ $message }}</strong>           
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group input_group_wrp">
                            <label>Height</label>
                            <input type="number" name="height" id="height" class="form-control @error('height') is-invalid @enderror" value="{{old('height')}}" placeholder="Enter height">
                            @error('height')
                                <span class="invalid-feedback" role='alert'>
                                    <strong>{{ $message }}</strong>           
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group input_group_wrp">
                            <label>Width</label>
                            <input type="number" name="width" id="width" class="form-control @error('width') is-invalid @enderror" value="{{old('width')}}" placeholder="Enter width">
                            @error('width')
                                <span class="invalid-feedback" role='alert'>
                                    <strong>{{ $message }}</strong>           
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group input_group_wrp">
                            <label>Depth</label>
                            <input type="text" name="depth" id="depth" class="form-control @error('depth') is-invalid @enderror" value="{{old('depth')}}" placeholder="Enter depth">
                            @error('depth')
                                <span class="invalid-feedback" role='alert'>
                                    <strong>{{ $message }}</strong>           
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group input_group_wrp">
                            <label>Price</label>
                            <input type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}" placeholder="Enter price">
                            @error('price')
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
          <h4 class="modal-title" id="titleModel">Edit cabinate unit</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            {{-- action="{{route('door.storemain')}}" --}}
            
              @csrf
              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group input_group_wrp">
                        <label>Category Name</label>
                        @if(!empty($mainproducts))
                            <select name="cat_id" id="edit_cat_id" class="form-control @error('cat_id') is-invalid @enderror" value="{{old('cat_id')}}">
                                <option value=''>Select category</option>
                                @foreach($mainproducts as $cat)
                                    <option value="{{$cat->id}}">{{$cat->cabinate_main_name}}</option>
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
                <div class="col-sm-6">
                    <div class="form-group input_group_wrp">
                        <label>Sub Category Name</label>
                        @if(!empty($subproducts_data))
                            <select name="sub_cat_id" id="edit_sub_cat_id" class="form-control @error('sub_cat_id') is-invalid @enderror" value="{{old('sub_cat_id')}}">
                                <option value=''>Select sub category</option>
                                @foreach($subproducts_data as $cat)
                                    <option value="{{$cat->id}}">{{$cat->cabinate_type_name}}</option>
                                @endforeach
                            </select>
                        @endif
                        @error('sub_cat_id')
                            <span class="invalid-feedback" role='alert'>
                                <strong>{{ $message }}</strong>           
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group input_group_wrp">
                        <label>Name</label>
                        <input type="text" name="unit_name" id="edit_unit_name" class="form-control @error('unit_name') is-invalid @enderror" value="{{old('unit_name')}}" placeholder="Enter Unit">
                        @error('unit_name')
                            <span class="invalid-feedback" role='alert'>
                                <strong>{{ $message }}</strong>           
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group input_group_wrp">
                        <label>Code</label>
                        <input type="text" name="code" id="edit_code" class="form-control @error('unit_name') is-invalid @enderror" value="{{old('code')}}" placeholder="Enter code">
                        @error('code')
                            <span class="invalid-feedback" role='alert'>
                                <strong>{{ $message }}</strong>           
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group input_group_wrp">
                        <label>Description</label>
                        <textarea name="description" id="edit_description" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}" placeholder="Enter description"></textarea>
                        @error('description')
                            <span class="invalid-feedback" role='alert'>
                                <strong>{{ $message }}</strong>           
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group input_group_wrp">
                        <label>Height</label>
                        <input type="number" name="height" id="edit_height" class="form-control @error('height') is-invalid @enderror" value="{{old('height')}}" placeholder="Enter height">
                        @error('height')
                            <span class="invalid-feedback" role='alert'>
                                <strong>{{ $message }}</strong>           
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group input_group_wrp">
                        <label>Width</label>
                        <input type="number" name="width" id="edit_width" class="form-control @error('width') is-invalid @enderror" value="{{old('width')}}" placeholder="Enter width">
                        @error('width')
                            <span class="invalid-feedback" role='alert'>
                                <strong>{{ $message }}</strong>           
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group input_group_wrp">
                        <label>Depth</label>
                        <input type="text" name="depth" id="edit_depth" class="form-control @error('depth') is-invalid @enderror" value="{{old('depth')}}" placeholder="Enter depth">
                        @error('depth')
                            <span class="invalid-feedback" role='alert'>
                                <strong>{{ $message }}</strong>           
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group input_group_wrp">
                        <label>Price</label>
                        <input type="number" name="price" id="edit_price" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}" placeholder="Enter price">
                        @error('price')
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
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
    @if(isset($_GET['success']))
      <div class="alert alert-success" id="successDiv">
        @if($_GET['success'] == 'add')
            <p>Unit successfully added</p>
        @elseif($_GET['success'] == 'update')
            <p>Unit successfully updated</p>
        @elseif($_GET['success'] == 'delete')
            <p>Unit successfully deleted</p>
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
  </div>
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Add cabinate unit</h3>
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
                  <button class="btn btn-info" id="add_category">Add Unit</button>
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
              {{-- <th>Description</th>
              <th>Height</th>
              <th>Width</th>
              <th>Depth</th> --}}
              <th>Price</th>
              {{-- <th>Update</th> 
                
                --}}
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              
            @foreach($typeproducts as $product)
            <tr>
              <td>{{ $product->cab_sub_type_id }}</td>
              <td>{{ $product->cabinate_main_name }}</td>
              <td>{{ $product->cabinate_type_name }}</td>
              <td>{{ $product->cabinate_subtype_name }}</td>
              <td>{{ $product->code }}</td>
              {{-- <td>{{ $product->description }}</td>
              <td>{{ $product->height }}</td>
              <td>{{ $product->width }}</td>
              <td>{{ $product->depth }}</td> --}}
              <td>{{ $product->price }}</td>
              <td colspan="2">
                <button class="btn btn-info update-btn" data-id="{{ $product->cab_sub_type_id }}" data-value="{{ $product }}">Update</button>
                {{-- <td> --}}
                  <a class="btn btn-danger" href={{ url("delete-unit/".$product->cab_sub_type_id) }}>Delete</a>
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
{{-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}

<script type="text/javascript">
  $(document).ready(function () {
    var getUrl = window.location;
    var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[0];

      $('#add_category').on('click', function(e){
        e.preventDefault();
        $('#myModal').find('#add_cat_btn').show();
        $('#myModal').modal('show');
      })

      $('#category_sub_table').find('.update-btn').on('click', function(){
        var id = $(this).data('id');
        // var unit = "{{$typeproducts}}";
        // console.log(unit);
        var name = $(this).data('name');
        var value = $(this).data('value');
        console.log(value);
        // return;
        $('#updateModal').find('#update_cat_btn').attr('data-id', id);
        $('#updateModal').find('#titleModel').text('Update category');
        $('#updateModal').find('#update_cat_btn').show();
        $('#edit_sub_cat_name').val(name)
        $('#id').val(id)
        $('#edit_cat_id').val(value.cab_main_id)
        $('#edit_sub_cat_id').val(value.cab_type_id)
        $('#edit_unit_name').val(value.cabinate_subtype_name)
        $('#edit_code').val(value.code)
        $('#edit_description').val(value.description)
        $('#edit_height').val(value.height)
        $('#edit_width').val(value.width)
        $('#edit_depth').val(value.depth)
        $('#edit_price').val(value.price)
        $('#updateModal').modal('show');
      })

        $('#cat_id').on('change', function(){
            var id = $(this).val();
            var url =  baseUrl + "get-cabinate-sub-category/"+ id;
            var options = {
                method: 'GET',
                headers: {
                    'Content-Type': 
                        'application/json;charset=utf-8'
                },
            }
            var fetchRes = fetch(url, options);
  
            // fetchRes is the promise to resolve
            // it by using.then() method
            var html = '';
            var array = [];
            fetchRes.then(res =>
            res.json()).then(d => {
                    // console.log(d)
                    // console.log(d.data)
                    // console.log(d.status)
                
                if(d.status === true){
                    var data = d.data;
                    $('#sub_cat_id').empty();
                    if(data.length > 0){
                        for (let index = 0; index < data.length; index++) {
                            html = '<option value = '+data[index]['id']+'>'+data[index]['cabinate_type_name']+'</select>';
                            $('#sub_cat_id').append(html);
                            
                        }
                    }
                }
            });
        })

        $('#edit_cat_id').on('change', function(){
            var val = $(this).val();
            // alert(val);
            // return;
            var id = $(this).val();
            var url =  baseUrl + "get-cabinate-sub-category/"+ id;
            var options = {
                method: 'GET',
                headers: {
                    'Content-Type': 
                        'application/json;charset=utf-8'
                },
            }
            var fetchRes = fetch(url, options);
  
            // fetchRes is the promise to resolve
            // it by using.then() method
            var html = '';
            var array = [];
            fetchRes.then(res =>
            res.json()).then(d => {
                    // console.log(d)
                    // console.log(d.data)
                    // console.log(d.status)
                
                if(d.status === true){
                    var data = d.data;
                    $('#edit_sub_cat_id').empty();
                    if(data.length > 0){
                        for (let index = 0; index < data.length; index++) {
                            html = '<option value = '+data[index]['id']+'>'+data[index]['cabinate_type_name']+'</select>';
                            $('#edit_sub_cat_id').append(html);
                            
                        }
                    }
                }
            });
        })
});
</script>
@endsection
