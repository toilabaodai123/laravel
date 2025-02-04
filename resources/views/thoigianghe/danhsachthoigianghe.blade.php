@extends('layouts.index1')
@section('content')

                        <div class="col-xl-6">
                            <div class="card-box" style="width:1200px">
                                <h4 class="header-title mb-3">Danh sách loại phim</h4>
								<h4 class="header-title mb-3">{{session('message')}}</h4>
                                <div class="table-responsive">
                                    <table class="table table-borderless table-hover table-centered  table-nowrap m-0" >

                                        <thead class="thead-light">
                                            <tr>
                                                <th>ID</th>
												<th>Tên phim</th>
												<th>Thời gian</th>
												<th>Rạp</th>
												<th>Ghế</th>
												<th>Giờ</th>
                                                <th hidden>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											@foreach ($test as $thoigianghe)
												<tr>
												<td>
                                                    <h5 class="m-0 font-weight-normal">{{$thoigianghe->id}}</h5>
                                                </td>
												<td>
                                                    <h5 class="m-0 font-weight-normal">{{$thoigianghe->tenphim}}</h5>
                                                </td>
												
												<td>
													<h5 class="m-0 font-weight-normal">{{$thoigianghe->dmy}}</h5>
                                                </td>
												<td>
													<h5 class="m-0 font-weight-normal">{{$thoigianghe->tenrap}}</h5>
                                                </td>
												<td>
                                                    <h5 class="m-0 font-weight-normal">{{$thoigianghe->tenghe}}</h5>
                                                </td>
												<td>
                                                    <h5 class="m-0 font-weight-normal">{{$thoigianghe->gio}}</h5>
                                                </td>


													
												
												
												
												
                                                <td hidden>
                                                    <a href="thoigianghe/{{$thoigianghe->id}}" class="btn btn-xs btn-secondary"><i class="mdi mdi-pencil">Sửa</i></a>
													<form action="thoigianghe/{{$thoigianghe->id}}" method="POST">
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
                    