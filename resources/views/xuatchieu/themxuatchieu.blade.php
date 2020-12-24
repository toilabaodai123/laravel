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
                            <h4 class="page-title">Thêm xuất chiếu</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
								<h4 class="header-title">Thông tin xuất chiếu</h4>
                                <h4 class="header-title">{{session('message')}}</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form action="{{url('/danhsachxuatchieu')}}" method="post">
											@csrf
											<select name="phim" class="form-control" id="example-select" style="width:100px">
														@foreach($dsphim as $phim)
														<option value="{{$phim->id}}">{{$phim->tenphim}}</option>
														@endforeach
											</select>
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Ngày</label>
                                                <input name="dmy" type="date" id="simpleinput" class="form-control">
                                            </div>
											<label for="simpleinput">Thời gian</label>
											<select name="gio" class="form-control" id="example-select" style="width:100px">
														
														<option >1</option>
														<option >2</option>
														<option >3</option>
														<option >4</option>
														<option >5</option>
														<option >6</option>
														<option >7</option>
														<option >8</option>
														<option	>9</option>
														<option >10</option>
														<option >11</option>
														<option >12</option>
														<option >13</option>
														<option >14</option>
														<option >15</option>
														<option >16</option>
														<option >17</option>
														<option >18</option>
														<option >19</option>
														<option >20</option>
														<option >21</option>
														<option >22</option>
														<option >23</option>
														<option >24</option>
												
												</select>
											<div class="col-lg-6">
											<label for="simpleinput">Phim</label>

											<div class="col-lg-6">
												<button type="submit" class="btn btn-primary waves-effect waves-light">Thêm</button>
											</div>
                                        </form>
                                    </div> <!-- end col -->
                                    </div>
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
