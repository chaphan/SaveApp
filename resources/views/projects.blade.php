@extends('layouts.main')

@section('css')
    @include('layouts.css-includes')
    @include('layouts.dashboard-style')
@endsection

@section('modals')
@include("modals.plus_project")
@include('modals.finance_project')
@endsection

@section('content')
<br><br><br>    
<div class="mail-box">
                <aside class="sm-side">
                    <div class="user-head">
                        <div class="user-name">
                            <h5>Jean M. Rene</h5>
                            <span><a href="#">admin@baho.com</a></span>
                        </div>
                    </div>
                    <div class="i">
                        <a href="#" data-target="#modalFundProject" data-toggle="modal" title="Compose" class="btn btn-compose">
                              <i class="glyphicon glyphicon-upload"></i> &nbsp;Add Project
                          </a>

                    </div>
                    <ul class="inbox-nav inbox-divider">
                        <li>
                        <a href="/" data-toggle="modal"><i class="fa fa-inbox"></i> Groups <span class="label label-danger pull-right"></span></a>

                        </li>
                        <li>
                            <a href="/products/view"><i class="fa fa-send"></i>Product <span class="label label-info pull-right"></span> </a>
                        </li>
                        <li class="active">
                            <a href="/project/view"><i class="fa fa-envelope-o"></i> <span class="label label-info pull-right"></span>Cloud funding</a>
                        </li>  
                        <li>
                            <a href="/idea/view"><i class="fa fa-envelope-o"></i> <span class="label label-info pull-right"></span>Business Idea</a>
                        </li>                       
                        
                        <li>
                            <a href="#myModal2" data-toggle="modal"><i class=" fa fa-gear"></i> Logout</a>
                        </li>
                    </ul>
                    
                    <div class="inbox-body text-center">
                        <div class="btn-group">
                            <a class="btn mini btn-primary" href="javascript:;">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <div class="btn-group">
                            <a class="btn mini btn-success" href="javascript:;">
                                <i class="fa fa-phone"></i>
                            </a>
                        </div>
                        <div class="btn-group">
                            <a class="btn mini btn-info" href="javascript:;">
                                <i class="fa fa-cog"></i>
                            </a>
                        </div>
                    </div>

                </aside>
                <aside class="lg-side">
                    <div class="inbox-head">
                        <h4>List of Project need Fund</h4>
                        <form action="#" class="pull-right position">
                            <div class="input-append">
                                <input type="text" class="sr-input" placeholder="Search Cloud funding">
                                <button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="inbox-body">
                        <div class="mail-option">
                            
                            <ul class="unstyled inbox-pagination">
                                <li><span>1-50 of 234</span></li>
                                <li>
                                    <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                                </li>
                                <li>
                                    <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                </li>
                            </ul>
                        </div>
                        <table class="table table-inbox table-hover">
                            <tbody>
                            <tr>
                                <th>#</th><th>Group Name</th><th>Project</th><th>Attachment</th><th>Capital</th><th>Raised</th><th>Fund</th><th>Description</th><th>created on</th><!-- <th colspan="2">Actions</th> -->
                            </tr> 
                            <tr>
                                <td>1</td>
                                <td>Baho</td>
                                <td>Chicken Farming</td>
                                <td>business plan.PDF</td>
                                <td>100,000</td>
                                <td>65,000</td>
                                <td>12,000</td>
                                <td>Project to transform refugees daily life</td>
                                <td>2018-06-30</td><!-- 
                                <td><a class="btn btn-primary" data-toggle='modal' data-target='#modalFund'><i class='glyphicon glyphicon-plus'></i>Fund</a></td> --> 
                                </tr>
                            <tr>
                                <td>2</td>
                                <td>Sarura Muryango</td>
                                <td>Tomatoes Production</td>
                                <td>Listen to audio</td>
                                <td>30000 rwf</td>
                                <td>7000 rwf</td>
                                <td>1500 rwf</td>
                                <td>Project that can help refugees to get more tomatoes to make their life more Healthier </td>
                                <td>2018-11-27</td> <!-- 
                                <td> 
                                    <a class="btn btn-primary" data-toggle='modal' data-target='#modalFund'><i class='glyphicon glyphicon-plus'></i>Fund</a></td> --></tr> 

                            <tr>
                            </tbody>
                        </table>
                    </div>
                </aside>
            </div>
@endsection
@section('js')

    @include('layouts.js-includes')
    
@endsection