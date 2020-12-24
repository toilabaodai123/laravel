@extends('layouts.index1')
@section('content')

                        <div class="col-xl-6">
                            <div class="card-box">
                                <h4 class="header-title mb-3">Danh sách đạo diễn</h4>
								<h4 class="header-title mb-3">{{session('message')}}</h4>
                                <div class="table-responsive">
                                    <table class="table table-borderless table-hover table-centered  table-nowrap m-0">

                                        <thead class="thead-light">
                                            <tr>
                                                <th>Tên đạo diễn</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											@foreach ($dsdaodien as $daodien)
												<tr>
                                                <td>
                                                    <h5 class="m-0 font-weight-normal">{{$daodien->tendaodien}}</h5>
                                                </td>
	

                                                <td>
                                                    <a href="daodien/{{$daodien->id}}" class="btn btn-xs btn-secondary"><i class="mdi mdi-pencil">Sửa</i></a>
													<form action="daodien/{{$daodien->id}}" method="POST">
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
                    