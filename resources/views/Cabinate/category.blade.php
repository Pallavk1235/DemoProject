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
    <form role="form" id="add_category_form" action="{{url('/cabinate_category_manage/add')}}" method="POST" style="width: 100%">
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
                    <input type="text" name="door_main_name" id="door_main_name" class="form-control @error('door_main_name') is-invalid @enderror" value="{{old('door_main_name')}}" placeholder="Enter category">
                    @error('door_main_name')
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
    <form role="form" id="add_category_form" action="{{url('/cabinate_category_manage/update')}}" method="POST" style="width: 100%">
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
                    <input type="hidden" name="id" id="edit_door_id" value="{{old('door_main_name')}}">
                    <label>Category Name</label>
                    <input type="text" name="door_main_name" id="edit_door_main_name" class="form-control @error('door_main_name') is-invalid @enderror" value="{{old('door_main_name')}}" placeholder="Enter category">
                    @error('door_main_name')
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
    @if(isset($success_message) && $success_message !== null && $success_message !== '')
      <div class="alert alert-success" id="successDiv" style="display: none">
        {{$success_message}}
      </div>
    @endif
    @if(isset($error_message) && $error_message !== null && $error_message !== '') 
    <div class="alert alert-danger" id="errorDiv" style="display: none">
      {{$error_message}}
    </div>
    @endif
  </div>
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Cabinate Category</h3>
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
                  <button class="btn btn-info" id="add_category">Add category</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap" id="category_table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              {{-- <th>Update</th> --}}
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($mainproducts as $product)
            <tr>
              <td>{{ $product->id }}</td>
              <td>{{ $product->cabinate_main_name }}</td>
              <td colspan="2">
                <button class="btn btn-info update-btn" data-name="{{$product->cabinate_main_name}}" data-id="{{ $product->id }}">Update</button>
                {{-- <td> --}}
                  <a class="btn btn-danger" href={{ url("cabinate_delete_category/".$product->id) }}>Delete</a>
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
      var getUrl = window.location;
      var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[0];

      // $('#myModal').find('#add_cat_btn').hide();
      // $('#myModal').find('#update_cat_btn').hide();
      // $('#error_door_main_name').hide();
      
      // $('#successDiv').hide();
      // $('#errorDiv').hide();
      
      $('#add_category').on('click', function(e){
        e.preventDefault();
        // $('#myModal').find('#titleModel').text('Add category');
        $('#myModal').find('#add_cat_btn').show();
        // $('#myModal').find('#update_cat_btn').hide();
        // $('#error_door_main_name').hide();
        $('#myModal').modal('show');
      })

      // $('#add_cat_btn').on('click', function(e){
      //   e.preventDefault();
      // //--------------------add ajax call--------------------
      //   var door_name = $('#door_main_name').val();
      //   if(door_name !== null && door_name !== ''){
      //     alert(door_name)
      //     $.ajax({
      //           url: baseUrl + "/cabinate_category_add/add",
      //           type:"POST",
      //           processData: false,
      //           contentType: false,
      //           data:{
      //             door_name: door_name
      //           },
      //           success:function(response){
      //             console.log(response);return;
      //               // if(response.status){
      //               //     successAlert(response.message);
      //               //     location.reload();
      //               // }else{
      //               //     errorAlert(response.message);
      //               // }
      //           },
      //           error: function(err) {
      //               // errorAlert('<?php echo __('messages.ErrorMessages.SomethingWentWrong'); ?>')
      //               console.log(err);return;
      //           }
      //       });
      //   }else{
      //     $('#error_door_main_name').show();
      //   }
      // })

      $('#category_table').find('.update-btn').on('click', function(){
        var id = $(this).data('id');
        var name = $(this).data('name');
        $('#updateModal').find('#update_cat_btn').attr('data-id', id);
        $('#updateModal').find('#titleModel').text('Update category');
        $('#updateModal').find('#update_cat_btn').show();
        // $('#updateModal').find('#add_cat_btn').hide();
        $('#edit_door_main_name').val(name)
        $('#edit_door_id').val(id)
        // $('#updateModal').find('#update_cat_btn').removeAttr('data-id');
        // $('#error_door_main_name').hide();
        
        $('#updateModal').modal('show');
      })

      // $('#myModal').find('#update_cat_btn').on('click', function(e){
      //   e.preventDefault();
      //   var ids = $('#update_cat_btn').attr('data-id');
      //   alert("UPDATE "+ ids);
      // })
  });
</script>
@endsection
