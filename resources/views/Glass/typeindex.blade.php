@extends('layouts.app3')
@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
       <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Glass Type</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                    <div>
                    	<a class="btn btn-info" href="{{route('glass.addtype')}}" >
                        	Add Type
						</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Details</th>
                      <th>Stock</th>
                      <th>Update</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($glass_main as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->glass_name}}</td>
                      <td>{{$item->glass_details}}</td>
                      <td>{{$item->glass_stock}}</td>
                      <td><a class="btn btn-info" href={{"edit-glasstype/".$item->id}}>Update</a></td>
                      <td><a class="btn btn-danger" href={{"delete-glasstype/".$item->id}}>Delete</a></td>
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
@endsection