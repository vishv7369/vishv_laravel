@extends('Backend.Admin.Layout.mainlayout')
@section('remaining_content')


 <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Categories</h4>
                    </div>
                </div>
         <div class="row">
                    <div class="col-md-6">
                        <div class="card-box">
                            <h4 class="card-title">Add Category of Product</h4>
                            <form action="#">
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input type="text" class="form-control">
                                </div>
                               
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
				
       @endsection