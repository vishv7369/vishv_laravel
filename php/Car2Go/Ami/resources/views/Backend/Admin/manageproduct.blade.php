@extends('Backend.Admin.Layout.mainlayout')
@section('remaining_content') 

 <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Category</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="card-block">
                                <h6 class="card-title text-bold">Manage Category</h6>
                                
								<div class="table-responsive">
									<table class="datatable table table-stripped ">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Product Image</th>
											<th>Product Name</th>
											<th>Product Price</th>
											<th>Product Quantity</th>
											<th>Product Description</th>
											<th>Edit</th>
                                            <th>Delete</th>
                                            
                                            
                                        </tr>
                                    </thead>
									
									<tbody>
									<tr>
									<td>1</td>
									<td><img src="#" width="50px" height="50px"></td>
									<td>abcd</td>
									<td>14564</td>
									<td>5</td>
									<td>nice product</td>
									<td><a href="" class="btn btn-primary">Edit</a></td>
									<td><a href="#" class="btn btn-danger">Delete</a></td>
									<td><a href="" class="btn btn-primary">Available/Not available</a></td>
									</tr>
									</tbody>
									
									
									   @endsection