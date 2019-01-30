@extends('layouts.vendor')

@section('content22')

<div class="row">
    <div class="col-md-12" >
        <div class="card" style="box-shadow: 5px 5px 5px 5px #888888">
            <div class="card-body">
                <div class="row">
                <div class="col-md-6 col-md-6-offset">
                    <h3 class="box-title">View / Alter Product Items</h3>
                </div>

            </div>
            <hr class="m-t-0 m-b-40">
            <div class="table-responsive m-t-40">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th><b>Name</b></th>
                        <th><b>Product Image</b></th>
                        <th><b>Description</b></th>
                        <th><b>Action</b></th>
                    </tr>
                    </thead>
                    <tbody>
                         @foreach($cat as $key => $category)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$category->name}}</td>
                        <td> <img src="/product_image/{{$category->image_path}}" alt="user" width="50" class="round"></td>
                        <td>{{$category->description}}</td>
<!-- href="{{route('category.edit',$category->id)}}"  data-toggle="modal" data-target="#ctagoryedit{{$category->id}}" -->
                        <td>
                            <a class="btn btn-outline-info btn-xs updatecat"  id="{{$category->id}}" >Alter</a>
                            <!--  <button type="submit" class="btn btn-outline-danger btn-xs">Delete</button> -->
                         <!--   <form action="{{route('category.destroy',$category->id)}}" method="DELETE">
                               <button type="submit" class="btn btn-outline-danger btn-xs">Delete</button>
                           </form> -->
                        </td>
                    </tr>
                     
                         @endforeach
                  @include('includes.cat_modal')
                   
                    </tbody>
                </table>
            </div>

            </div>

        </div>
    </div>
</div>

    @stop