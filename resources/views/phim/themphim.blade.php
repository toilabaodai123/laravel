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
                            <h4 class="page-title">Thêm phim</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
								<h4 class="header-title">Thông tin phim</h4>
                                <h4 class="header-title">{{session('message')}}</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form action="{{url('/danhsachphim')}}" method="post">
											@csrf
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Tên phim</label>
                                                <input name="tenphim" type="text" id="simpleinput" class="form-control">
												<label for="simpleinput" style="color:red">@error('tenphim'){{$message}}@enderror</label><br>
                                            </div>
												<label for="simpleinput">Loại phim</label>
												<select name="tenloaiphim" class="form-control" id="example-select" style="width:100px">
														@foreach($dsloaiphim as $loaiphim)
														<option value="{{$loaiphim->id}}">{{$loaiphim->tenloaiphim}}</option>
														@endforeach
												</select>
												<label for="simpleinput" style="color:red">@error('tenloaiphim'){{$message}}@enderror</label><br>
												<label for="simpleinput">Đạo diễn</label>
												<select name="tendaodien" class="form-control" id="example-select" style="width:100px">
														@foreach($dsdaodien as $daodien)
														<option value="{{$daodien->id}}">{{$daodien->tendaodien}}</option>
														@endforeach
												</select>
												<label for="simpleinput" style="color:red">@error('tendaodien'){{$message}}@enderror</label><br>
												<select name="giaphim" class="form-control" id="example-select" style="width:100px">
														<option >50000</option>
												</select>
											<div class="col-lg-6">
												<button type="submit" class="btn btn-primary waves-effect waves-light">Thêm</button>
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
