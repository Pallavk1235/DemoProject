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
        <h3 class="card-title">Door Material</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
            <div>
             <a class="btn btn-info" href="{{route('door.addmaterials')}}" >
               Add Material
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
            <th>Material Name</th>
            <th>Material Details</th>
            <th>Material Stock</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach($allmat as $items)
          <tr>
            <td>{{$items->id}}</td>
            <td>{{$items->door_material_name}}</td>
            <td>{{$items->door_material_details}}</td>
            <td>{{$items->door_material_stock}}</td>
            <td><a class="btn btn-info" href={{"edit-mat/".$items->id}}>Update</a></td>
            <td><a class="btn btn-danger" href={{"delete-mat/".$items->id}}>Delete</a></td>
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