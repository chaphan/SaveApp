@extends('layouts.main')

@section('css')
    @include('layouts.css-includes')
    @include('layouts.dashboard-style')
@endsection
@section('modals')
    @include('modals.add_groups')
    @include('modals.add_members')
    @include('modals.view_members')
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
                    <div class="inbox-body">
                        <a href="#myModal" data-toggle="modal" title="Compose" class="btn btn-compose">
                              <i class="fa fa-upload"></i> &nbspSaving group
                          </a>

                    </div>
                    <ul class="inbox-nav inbox-divider">
                        <li class="active">
                        <a href="#myModal" data-toggle="modal"><i class="fa fa-inbox"></i> Groups <span class="label label-danger pull-right">2</span></a>

                        </li>
                        <li>
                            <a href=""><i class="fa fa-send"></i>Product <span class="label label-info pull-right">30</span> </a>
                        </li>
                        <li>
                        <a href="#myModal" data-toggle="modal3"> <span class="label label-info pull-right">3</span>Business Idea</a>
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
                        <h4>List of Groups and Product</h4>
                        <form action="#" class="pull-right position">
                            <div class="input-append">
                                <input type="text" class="sr-input" placeholder="Search Order">
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
                                <th>#</th><th>Group Name</th><th>balance</th><th>Members</th><th>created on</th><th colspan="2">Actions</th>
                            </tr> 
                            <tr>
                                <td>1</td>
                                <td>baho</td>
                                <td>15000rwf</td>
                                <td>15</td>
                                <td>1/1/2017</td> 
                                <td> 
                                    <div class="btn-group"><button type="button" class="btn btn-default"  data-toggle="modal" data-target="#modalAddMember"> Add members</button>  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalViewMember"> view members</button> </td>         
                            
                                
                            </tbody>
                        </table>
                    </div>
                </aside>
            </div>
@endsection
@section('js')

    @include('layouts.js-includes')
    
@endsection