@extends('layouts.index1')
@section('content')

                        <div class="col-xl-6"  >
                            <div class="card-box" style="width:900px">
                                <h4 class="header-title mb-3">Danh sách vé</h4>
								<h4 class="header-title mb-3">{{session('message')}}</h4>
                                <div class="table-responsive">
                                    <table class="table table-borderless table-hover table-centered  table-nowrap m-0">

                                        <thead class="thead-light">
                                            <tr>
												<th>ID </th>
												<th>ID vé </th>
                                                <th>Phim</th>
												<th>Ghế</th>
												<th>Rạp</th>
												<th>Tổng tiền</th>
                                                <th hidden>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											@foreach ($dschitietve as $a)
												<tr>
												<td>
                                                    <h5 class="m-0 font-weight-normal">{{$a->id}}</h5>
                                                </td>
												<td>
													<h5 class="m-0 font-weight-normal">{{$a->idve}}</h5>
												</td>
												<td>
                                                    @foreach($dataphim as $phim)<h5 class="m-0 font-weight-normal">{{$phim->tenphim}}</h5>@endforeach
                                                </td>
												<td>
													@foreach($dataghe as $ghe)<h5 class="m-0 font-weight-normal">{{$ghe->tenghe}}</h5>@endforeach
												</td>
												<td>
													@foreach($datarap as $rap)<h5 class="m-0 font-weight-normal">{{$rap->tenrap}}</h5>@endforeach
                                                </td>
												<td style="width:50px">
                                                    <h5 class="m-0 font-weight-normal">{{$a->tongtienchitiet}}</h5>
                                                </td>
                                                <td >         
													<form hidden action="ve/$ve->id" method="POST">
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
                    