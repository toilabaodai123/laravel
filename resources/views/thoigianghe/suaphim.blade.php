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
								<h4 class="header-title">Thông tin phim </h4>
                                <h4 class="header-title">{{session('message')}}</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form action="{{$dsphim->id}}" method="post">
											@csrf
											@method('put')
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Tên phim</label>
                                                <input name="tenphim" type="text" id="simpleinput" value="{{$dsphim->tenphim}}"class="form-control">
												
												<label for="simpleinput">Đạo diễn</label>
												<select name="tendaodien" class="form-control" id="example-select" style="width:100px">
													@foreach($dsdaodien2 as $daodien2)
														<option value="{{$daodien2->id}}">{{$daodien2->tendaodien}}</option>
													@endforeach
													@foreach($dsdaodien as $daodien)
														<option value="{{$daodien2->id}}" SELECTED>{{$daodien->tendaodien}}</option>
													@endforeach
												</select>
												<label for="simpleinput">Loại phim</label>
												<select name="tenloaiphim" class="form-control" id="example-select" style="width:100px">
														@foreach($dsloaiphim2 as $loaiphim)
															<option value="{{$loaiphim->id}}">{{$loaiphim->tenloaiphim}}</option>
														@endforeach
														@foreach($dsloaiphim as $loaiphim)
															<option value="{{$loaiphim->id}}"SELECTED>{{$loaiphim->tenloaiphim}}</option>
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
