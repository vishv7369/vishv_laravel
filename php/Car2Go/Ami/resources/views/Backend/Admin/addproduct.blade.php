@extends('Backend.Admin.Layout.mainlayout')
@section('remaining_content')
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Product Advertisement</h4>
                    </div>
                </div>
                <form>
                    <div class="card-box">
                        <h3 class="card-title">Add Product</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap">
                                    <img class="inline-block" src="{{url('Backend/Admin/assests/img/blankproduct.png')}}" alt="">
                                    <div class="fileupload btn">
                                        <span class="btn-text">edit</span>
                                        <input class="upload" type="file">
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="focus-label">Product Name</label>
                                                <input type="text" class="form-control floating" value="" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="focus-label">Product Price</label>
                                                <input type="text" class="form-control floating" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="focus-label">Quantity</label>
                                                
                                                    <input class="form-control floating " type="number" value="">
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group  select-focus">
                                                <label class="focus-label">Product Categories</label>
                                                <select class="select form-control floating">
												 <option value="">Select Category</option>
                                                    <option value="male ">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>
										
										<div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="focus-label">Prouct Description</label>
                                                <textarea name="Description" class="form-control floating" value=""></textarea>
                                            </div>
                                        </div>
										
										 <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="focus-label">Product Link</label>
                                                <input type="text" class="form-control floating" value="" >
                                            </div>
                                        </div>
										
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
                    
                 
                    <div class="text-center m-t-20">
                        <button class="btn btn-primary submit-btn" type="button">Add Product</button>
                    </div>
                </form>
            </div>
           
        </div>
    </div>
        @endsection