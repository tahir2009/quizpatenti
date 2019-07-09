@extends('layouts.admin.app')

@section('dashboard_nav', 'active')

@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-warning card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">commute</i>
                                </div>
                                <p class="card-category">No Of Schools</p>
                                <h4 class="card-title">Active
                                    <small>1</small>
                                </h4>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons text-success">warning</i>
                                    <a href="tables.html">Click to view</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-success card-header-icon">
                                <div class="card-icon">
                                    <i class="fa fa-tasks"></i>
                                </div>
                                <p class="card-category">No Of Packages</p>
                                <h4 class="card-title">Packages
                                    <small>2</small>
                                </h4>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">store</i>
                                    <a href="tables.html">Click to view</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-danger card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">info_outline</i>
                                </div>
                                <p class="card-category">Blocked Schools</p>
                                <h4 class="card-title">0</h4>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons text-danger">delete</i>
                                    <a href="tables.html">Click to view</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-info card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">verified_user</i>
                                </div>
                                <p class="card-category">No Of Licenses</p>
                                <h4 class="card-title">2</h4>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">store</i>
                                    <a href="tables.html">Licenses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-chart">
                            <div class="card-header card-header-success">
                                <div class="ct-chart" id="dailySalesChart"></div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Daily Sales of Licenses</h4>
                                <p class="card-category">
                                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase
                                    in
                                    today sales.</p>
                            </div>
                            <!-- <div class="card-footer">
                              <div class="stats">
                                <i class="material-icons">access_time</i> updated 4 minutes ago
                              </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-chart">
                            <div class="card-header card-header-warning">
                                <div class="ct-chart" id="websiteViewsChart"></div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">School Subscriptions</h4>
                                <p class="card-category">Last Campaign Performance</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-chart">
                            <div class="card-header card-header-danger">
                                <div class="ct-chart" id="completedTasksChart"></div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Completed Tasks</h4>
                                <p class="card-category">Last Campaign Performance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection