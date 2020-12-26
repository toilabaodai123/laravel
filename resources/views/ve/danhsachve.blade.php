@extends('layouts.index1')
@section('content')

                        <div class="col-xl-6" >
                            <div class="card-box">
                                <h4 class="header-title mb-3">Danh sách vé</h4>
								<h4 class="header-title mb-3">{{session('message')}}</h4>
                                <div class="table-responsive">
                                    <table class="table table-borderless table-hover table-centered  table-nowrap m-0">

                                        <thead class="thead-light">
                                            <tr>
												<th>ID vé</th>
                                                <th>Tên phim</th>
												<th>Khách hàng</th>
												<th>Ghế</th>
												<th>Ngày chiếu</th>
												<th>Thời gian</th>
												<th>Tổng tiền</th>
                                                <th hidden>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											@foreach ($test as $ve )
												<tr>
												<td>
                                                    <h5 class="m-0 font-weight-normal">{{$ve->id}}</h5>
                                                </td>
												<td>
													<h5 class="m-0 font-weight-normal">{{$ve->tenphim}}</h5>
												</td>
												<td>
                                                    <h5 class="m-0 font-weight-normal">{{$ve->taikhoan}}</h5>
                                                </td>
												<td>
													<h5 class="m-0 font-weight-normal">{{$ve->tenghe}}</h5>
												</td>
												<td>
                                                    <h5 class="m-0 font-weight-normal">{{$ve->dmy}}</h5>
                                                </td>
												<td style="width:50px">
                                                    <h5 class="m-0 font-weight-normal">{{$ve->gio}}</h5>
                                                </td>
												<td style="width:50px">
                                                    <h5 class="m-0 font-weight-normal">{{$ve->tongtienve}}</h5>
                                                </td>
												
												
												
												
                                                <td hidden>
                                                    <a href="ve/{{$ve->id}}" class="btn btn-xs btn-secondary"><i class="mdi mdi-pencil">Sửa</i></a>
													<form action="ve/{{$ve->id}}" method="POST">
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
									<label for="simpleinput" style="float:right">Tổng tiền : {{$tong}}</label>
                                </div> <!-- end .table-responsive-->
                            </div> <!-- end card-box-->
                        </div> <!-- end col -->
						@endsection
                    