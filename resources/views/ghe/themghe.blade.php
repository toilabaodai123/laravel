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
                            <h4 class="page-title">Thêm ghế</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
								<h4 class="header-title">Thông tin ghế</h4>
                                <h4 class="header-title">{{session('message')}}</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form action="{{url('/danhsachghe')}}" method="post">
											@csrf
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Tên ghế</label>
                                                <input name="tenghe" type="text" id="simpleinput" class="form-control">
                                            </div>
											<label for="simpleinput" style="color:red">@error('tenghe'){{$message}}@enderror</label><br>
												<label for="simpleinput">Loại ghế</label>
												<select name="loaighe" class="form-control" id="example-select" style="width:100px">
														@foreach($dsloaighe as $loaighe)
														<option value="{{$loaighe->id}}">{{$loaighe->tenloaighe}}</option>
														@endforeach
												</select>
												<label for="simpleinput" style="color:red">@error('loaighe'){{$message}}@enderror</label><br>
												<label for="simpleinput">Rạp</label>
												<select name="rap" class="form-control" id="example-select" style="width:100px">
														@foreach($dsrap as $rap)
														<option value="{{$rap->id}}">{{$rap->tenrap}}</option>
														@endforeach
												</select>
												<label for="simpleinput" style="color:red">@error('rap'){{$message}}@enderror</label><br>
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
