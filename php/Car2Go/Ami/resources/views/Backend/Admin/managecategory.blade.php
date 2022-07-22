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
                                            <th>Category Name</th>
                                            <th>Delete</th>
                                            
                                            
                                        </tr>
                                    </thead>
									
									<tbody>
									<tr>
									<td>1</td>
									<td>abcd</td>
									<td><a href="#" class="btn btn-danger">Delete</a></td>
									</tr>
									</tbody>
									
									
									   @endsection