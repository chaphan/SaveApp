@extends('layouts.main')

@section('css')
    @include('layouts.css-includes')
    @include('layouts.dashboard-style')
@endsection
@section('modals')
    @include('modals.add_groups')
    @include('modals.add_members')
    @include('modals.view_members')
    @include('modals.add_money')
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
                        <a href="/" data-toggle="modal"><i class="fa fa-inbox"></i> Groups <span class="label label-danger pull-right"></span></a>

                        </li>
                        <li>
                            <a href="/products/view"><i class="fa fa-send"></i>Product <span class="label label-info pull-right"></span> </a>
                        </li>
                        <li>
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
                        <h4>List of Groups and Product</h4>
                        <form action="#" class="pull-right position">
                            <div class="input-append">
                                <input type="text" class="sr-input" placeholder="Search Group">
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
                        <input type="hidden" name="" id="groupid">
                        <input type="hidden" name="" id="memberid">
                        <table class="table table-inbox table-hover">
                            <thead>
                            <tr>
                                <th>#</th><th>Group Name</th><th>balance</th><th>created on</th><th colspan="2">Actions</th>
                            </tr> </thead>
                            <tbody id="loadedgroup">
                            <tr>
                                <td>1</td>
                                <td>baho</td>
                                <td>15000rwf</td>
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