@extends('layouts.main')

@section('css')
    @include('layouts.css-includes')
    @include('layouts.dashboard-style')
@endsection
@section('modals')
    @include('modals.business_idea')
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
                        <a href="#myModal3" data-toggle="modal" title="Compose" class="btn btn-compose">
                              <i class="fa fa-upload"></i> &nbsp;New Business Ideas
                          </a>

                    </div>
                    <ul class="inbox-nav inbox-divider">
                        <li>
                        <a href="/" data-toggle="modal"><i class="fa fa-inbox"></i> Groups <span class="label label-danger pull-right"></span></a>

                        </li>
                        <li>
                            <a href="/products/view"><i class="fa fa-send"></i>Product <span class="label label-info pull-right"></span> </a>
                        </li>
                        <li>
                            <a href="/project/view"><i class="fa fa-envelope-o"></i> <span class="label label-info pull-right"></span>Cloud funding</a>
                        </li> 
                        <li class="active">
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
                        <h4>List of Avaible Business Ideas</h4>
                        <form action="#" class="pull-right position">
                            <div class="input-append">
                                <input type="text" class="sr-input" placeholder="Search Business idea">
                                <button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="inbox-body">
                        <div class="mail-option">
                            
                            <ul class="unstyled inbox-pagination">
                                <li><span>1-50</span></li>
                                <li>
                                    <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                                </li>
                                <li>
                                    <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                </li>
                            </ul>
                        </div>
                        <table id="tblGroups" class="table table-inbox table-hover">
                            <thead>
                            <tr>
                                <th>#</th><th>Idea</th><th>Capital</th><th>Description</th><th>created on</th><th colspan="2">Actions</th>
                            </tr> </thead>
                            <tbody id="loadedgroup">
                            <tr>
                                <td>1</td>
                                <td>Chicken Farming</td>
                                <td>40000 rwf-150000 rwf</td>
                                <td>Chicken lowest capital,high income</td>
                                <td>2018-11-20</td> 
                                <td> 
                                    <div class="btn-group">  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalViewMember"><i class="glyphicon glyphicon-trash"></i> Delete</button> </div></td></tr> 

                            <tr>
                                <td>1</td>
                                <td>Tailoring</td>
                                <td>80000 rwf</td>
                                <td>lowest capital,lower raw material,no special skills</td>
                                <td>2018-11-20</td> 
                                <td> 
                                    <div class="btn-group">  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalViewMember"><i class="glyphicon glyphicon-trash"></i> Delete</button> </div></td></tr>         
                            </tbody>
                        </table>
                    </div>
                </aside>
            </div>
@endsection
@section('js')

    @include('layouts.js-includes')
    
@endsection