@extends('layouts.admin.app')
@section('mytitle','Dashboard')
@section('content')
<div class="section-body mt-3">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="mb-4">
                            <h4><i class="fa fa-address-book" aria-hidden="true"></i> Welcome {{Auth::guard('admin')->user()->name}}</h4>
                        </div>
                    </div>
                </div>
                <div class="row clearfix row-deck">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Projects</h3>
                            </div>
                            <div class="card-body">
                            <span class="float-left"><i class="fa fa-tasks " style="font-size: 40px;color:#EB6F62" aria-hidden="true"></i></span>
                                <h5 class="number mb-0 font-32 counter float-right"></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Complete Projects</h3>
                            </div>
                            <div class="card-body">
                            <span class="float-left"><i class="fa fa-check-square" style="font-size: 40px;color:#4caf50" aria-hidden="true"></i></span>
                                <h5 class="number mb-0 font-32 counter float-right"></h5>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-xl-2 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Managers</h3>
                            </div>
                            <div class="card-body">
                            <span class="float-left"><i class="fa fa-user-circle" style="font-size: 40px;color:#2196f3" aria-hidden="true"></i></span>
                                <h5 class="number mb-0 font-32 counter float-right"></h5>

                            </div>
                        </div>
                    </div> --}}
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Task Pending</h3>
                            </div>
                            <div class="card-body">
                            <span class="float-left"><i class="fa fa-file" style="font-size: 40px;color:#ff9800bf" aria-hidden="true"></i></span>
                                <h5 class="number mb-0 font-32 counter float-right"></h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Team Members</h3>
                            </div>
                            <div class="card-body">
                                <span class="float-left"><i class="fa fa-user" style="font-size: 40px;color:#00bcd4" aria-hidden="true"></i></span>
                                <h5 class="number mb-0 font-32 counter float-right"></h5>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix row-deck">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Sales Analytics</h3>
                                <div class="card-options">
                                    <button class="btn btn-sm btn-outline-secondary mr-1" id="one_month">1M</button>
                                    <button class="btn btn-sm btn-outline-secondary mr-1" id="six_months">6M</button>
                                    <button class="btn btn-sm btn-outline-secondary mr-1" id="one_year" class="active">1Y</button>
                                    <button class="btn btn-sm btn-outline-secondary mr-1" id="ytd">YTD</button>
                                    <button class="btn btn-sm btn-outline-secondary" id="all">ALL</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="apex-timeline-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Orders Summary</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped text-nowrap table-vcenter mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Client Name</th>
                                                <th>Team</th>
                                                <th>Project</th>
                                                <th>Project Cost</th>
                                                <th>Payment</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#AD1245</td>
                                                <td>Sean Black</td>
                                                <td>
                                                    <ul class="list-unstyled team-info sm margin-0 w150">
                                                        <li><img src="assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                        <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                        <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                                        <li><img src="assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                                        <li class="ml-2"><span>2+</span></li>
                                                    </ul>
                                                </td>
                                                <td>Angular Admin</td>
                                                <td>$14,500</td>
                                                <td>Done</td>
                                                <td><span class="tag tag-success">Delivered</span></td>
                                            </tr>
                                            <tr>
                                                <td>#DF1937</td>
                                                <td>Sean Black</td>
                                                <td>
                                                    <ul class="list-unstyled team-info sm margin-0 w150">
                                                        <li><img src="assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                        <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                        <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                                        <li><img src="assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                                        <li class="ml-2"><span>2+</span></li>
                                                    </ul>
                                                </td>
                                                <td>Angular Admin</td>
                                                <td>$14,500</td>
                                                <td>Pending</td>
                                                <td><span class="tag tag-success">Delivered</span></td>
                                            </tr>
                                            <tr>
                                                <td>#YU8585</td>
                                                <td>Merri Diamond</td>
                                                <td>
                                                    <ul class="list-unstyled team-info sm margin-0 w150">
                                                        <li><img src="assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                        <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                    </ul>
                                                </td>
                                                <td>One page html Admin</td>
                                                <td>$500</td>
                                                <td>Done</td>
                                                <td><span class="tag tag-orange">Submit</span></td>
                                            </tr>
                                            <tr>
                                                <td>#AD1245</td>
                                                <td>Sean Black</td>
                                                <td>
                                                    <ul class="list-unstyled team-info sm margin-0 w150">
                                                        <li><img src="assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                        <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                        <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                                        <li><img src="assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                                    </ul>
                                                </td>
                                                <td>Wordpress One page</td>
                                                <td>$1,500</td>
                                                <td>Done</td>
                                                <td><span class="tag tag-success">Delivered</span></td>
                                            </tr>
                                            <tr>
                                                <td>#GH8596</td>
                                                <td>Allen Collins</td>
                                                <td>
                                                    <ul class="list-unstyled team-info sm margin-0 w150">
                                                        <li><img src="assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                        <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                        <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                                        <li><img src="assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                                        <li class="ml-2"><span>2+</span></li>
                                                    </ul>
                                                </td>
                                                <td>VueJs Application</td>
                                                <td>$9,500</td>
                                                <td>Done</td>
                                                <td><span class="tag tag-success">Delivered</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Transaction History</h3>
                                <div class="card-options">
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                    <div class="item-action dropdown ml-2">
                                        <a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-174px, 25px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table card-table mt-2">
                                <tbody>
                                    <tr>
                                        <td class="w60"><img class="avatar" src="assets/images/xs/avatar1.jpg" alt="Avatar"></td>
                                        <td>
                                            <p class="mb-0 d-flex justify-content-between"><span>Payment from #2583</span> <strong>$300</strong></p>
                                            <span class="text-muted font-13">Feb 21, 2019</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w60"><img class="avatar" src="assets/images/xs/avatar2.jpg" alt="Avatar"></td>
                                        <td>
                                            <p class="mb-0 d-flex justify-content-between"><span>Payment from #1245</span> <strong>$1200</strong></p>
                                            <span class="text-muted font-13">March 14, 2019</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w60"><img class="avatar" src="assets/images/xs/avatar3.jpg" alt="Avatar"></td>
                                        <td>
                                            <p class="mb-0 d-flex justify-content-between"><span>Payment from #8596</span> <strong>$780</strong></p>
                                            <span class="text-muted font-13">March 18, 2019</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w60"><img class="avatar" src="assets/images/xs/avatar4.jpg" alt="Avatar"></td>
                                        <td>
                                            <p class="mb-0 d-flex justify-content-between"><span>Payment from #1526</span> <strong>$841</strong></p>
                                            <span class="text-muted font-13">April 27, 2019</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w60"><img class="avatar" src="assets/images/xs/avatar5.jpg" alt="Avatar"></td>
                                        <td>
                                            <p class="mb-0 d-flex justify-content-between"><span>Payment from #4859</span> <strong>$235</strong></p>
                                            <span class="text-muted font-13">March 18, 2019</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
