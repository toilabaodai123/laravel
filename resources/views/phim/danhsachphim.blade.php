@extends('layouts.index1')
@section('content')

                        <div class="col-xl-6">
                            <div class="card-box">
                                <h4 class="header-title mb-3">Danh sách loại phim</h4>
								<h4 class="header-title mb-3">{{session('message')}}</h4>
                                <div class="table-responsive">
                                    <table class="table table-borderless table-hover table-centered  table-nowrap m-0">

                                        <thead class="thead-light">
                                            <tr>
                                                <th>Tên phim</th>
												<th>Loại phim</th>
												<th>Đạo diễn</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											@foreach ($test as $phim )
												<tr>
												<td>
                                                    <h5 class="m-0 font-weight-normal">{{$phim->tenphim}}</h5>
													<input hidden name="phim" value="{{$phim->tenphim}}">
                                                </td>
													<td>
													<h5 class="m-0 font-weight-normal">{{$phim->tenloaiphim}}</h5>
													</td>
												<td>
                                                    <h5 class="m-0 font-weight-normal">{{$phim->tendaodien}}</h5>
                                                </td>
													
												
												
												
												
                                                <td>
                                                    <a href="themvequaphim/{{$phim->id}}" class="btn btn-xs btn-secondary"><i class="mdi mdi-pencil">Test</i></a>
													<a href="phim/{{$phim->id}}" class="btn btn-xs btn-secondary"><i class="mdi mdi-pencil">Sửa</i></a>
													<form action="phim/{{$phim->id}}" method="POST">
														@csrf
														@method('DELETE')
														<button type="submit" class="btn btn-xs btn-secondary">
															<i class="mdi mdi-pencil">Xoá</i>
														</button>
													</form>
                                                </td>
                                            </tr>
											@endforeach

                                        </tbody>
										
                                    </table>
                                </div> <!-- end .table-responsive-->
                            </div> <!-- end card-box-->
                        </div> <!-- end col -->
						@endsection
                    