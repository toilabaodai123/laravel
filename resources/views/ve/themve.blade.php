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
                            <h4 class="page-title">Thêm vé</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
								<h4 class="header-title">Thông tin vé</h4>
                                <h4 class="header-title">{{session('message')}}</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form action="{{url('/danhsachve')}}" method="post">
											@csrf
												<label for="simpleinput">Tên phim</label>
												<select name="phim" class="form-control" id="example-select" style="width:200px">
														@foreach($dsphim as $phim)
														<option value="{{$phim->id}}">{{$phim->tenphim}}</option>
														@endforeach
												</select>
												<label for="simpleinput">Ghế</label>
												<select name="ghe" class="form-control" id="example-select" style="width:200px">
														@foreach($dsghe as $ghe)
														<option value="{{$ghe->id}}">{{$ghe->tenghe}}</option>
														@endforeach
												</select>
												<label for="simpleinput">Xuất chiếu</label>
												<select name="xuatchieu" class="form-control" id="example-select" style="width:200px">
														@foreach($dsxuatchieu as $xuatchieu)
														<option value="{{$xuatchieu->id}}">{{$xuatchieu->dmy}} lúc {{$xuatchieu->gio}} giờ</option>
														@endforeach
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
