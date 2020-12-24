@extends('layouts.index1')
@section('content')
        <div class="wrapper">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Upvex</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">Basic Elements</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Sửa phim</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
								<h4 class="header-title">Thông tin ghế </h4>
                                <h4 class="header-title">{{session('message')}}</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form action="{{$dsghe->id}}" method="post">
											@csrf
											@method('put')
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Tên ghế</label>
                                                <input name="tenghe" type="text" id="simpleinput" value="{{$dsghe->tenghe}}"class="form-control">
												
												<label for="simpleinput">Loại ghế</label>
												<select name="loaighe" class="form-control" id="example-select" style="width:100px">
													@foreach($dsloaighe2 as $loaighe2)
														<option value="{{$loaighe2->id}}">{{$loaighe2->tenloaighe}}</option>
													@endforeach
													@foreach($dsloaighe as $loaighe)
														<option value="{{$loaighe->id}}" SELECTED>{{$loaighe->tenloaighe}}</option>
													@endforeach
												</select>
												<label for="simpleinput">Rạp</label>
												<select name="rap" class="form-control" id="example-select" style="width:100px">
														@foreach($dsrap2 as $rap2)
															<option value="{{$rap2->id}}">{{$rap2->tenrap}}</option>
														@endforeach
														@foreach($dsrap as $rap)
															<option value="{{$rap->id}}"SELECTED>{{$rap->tenrap}}</option>
														@endforeach
												</select>
                                            </div>
											<div class="col-lg-6">
												<button type="submit" class="btn btn-primary waves-effect waves-light">Sửa</button>
											</div>
                                        </form>
                                    </div> <!-- end col -->
                                    
                                <!-- end row-->
								</div>
                            </div> <!-- end card-body -->
							
                        </div> <!-- end card -->
                    </div><!-- end col -->
                </div>
                <!-- end row -->

                

                    



                
            </div> <!-- end container -->
        </div>

@endsection
