@extends('includes.content')
@section('page-content')

    <div class="container-fluid container-fixed-lg bg-white">
        <!-- START PANEL -->
        <div class="panel panel-transparent">
            <div class="panel-heading">
                <div class="panel-title">Table with Dynamic Rows
                </div>
                <div class="pull-right m-b-10">
                    <div class="col-xs-12">
                        <button id="show-modal" class="btn btn-primary btn-cons"><i class="fa pg-plus"></i> Add New</button>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="pull-right m-b-10">
                    <div class="col-xs-12">
                        <input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
                    </div>
                </div>
                <div class="btn-group pull-left m-b-10">

                    <button type="button" class="btn btn-default">Delete</button>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings</a>
                        </li>
                        <li><a href="#">Help</a>
                        </li>
                    </ul>
                </div>

                <div class="clearfix"></div>

            </div>
            <div class="panel-body">
                <div id="tableWithDynamicRows_wrapper" class="dataTables_wrapper form-inline no-footer"><div><table class="table table-hover demo-table-dynamic table-responsive-block dataTable no-footer" id="tableWithDynamicRows" role="grid" aria-describedby="tableWithDynamicRows_info">
                            <thead>
                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="tableWithDynamicRows" rowspan="1" colspan="1" aria-label="App name: activate to sort column descending" aria-sort="ascending">App name</th><th class="sorting" tabindex="0" aria-controls="tableWithDynamicRows" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 277px;">Description</th><th class="sorting" tabindex="0" aria-controls="tableWithDynamicRows" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 171px;">Price</th><th class="sorting" tabindex="0" aria-controls="tableWithDynamicRows" rowspan="1" colspan="1" aria-label="Notes: activate to sort column ascending" style="width: 224px;">Notes</th></tr>
                            </thead>
                            <tbody>
                            <tr role="row" class="odd">
                                <td class="v-align-middle sorting_1">
                                    <p>Angry Birds</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>Description goes here</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>FREE</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>Notes go here</p>
                                </td>
                            </tr><tr role="row" class="even">
                                <td class="v-align-middle sorting_1">
                                    <p>Facebook</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>Description goes here</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>FREE</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>Notes go here</p>
                                </td>
                            </tr><tr role="row" class="odd">
                                <td class="v-align-middle sorting_1">
                                    <p>Foursquare</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>Description goes here</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>FREE</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>Notes go here</p>
                                </td>
                            </tr><tr role="row" class="even">
                                <td class="v-align-middle sorting_1">
                                    <p>Hyperlapse</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>Description goes here</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>FREE</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>Notes go here</p>
                                </td>
                            </tr><tr role="row" class="odd">
                                <td class="v-align-middle sorting_1">
                                    <p>Twitter</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>Description goes here</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>FREE</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>Notes go here</p>
                                </td>
                            </tr></tbody>
                        </table></div>

                    <div class="row"><div><div class="dataTables_paginate paging_simple_numbers" id="tableWithDynamicRows_paginate"><ul class=""><li class="paginate_button previous disabled" id="tableWithDynamicRows_previous"><a href="#" aria-controls="tableWithDynamicRows" data-dt-idx="0" tabindex="0"><i class="pg-arrow_left"></i></a></li><li class="paginate_button active"><a href="#" aria-controls="tableWithDynamicRows" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button next disabled" id="tableWithDynamicRows_next"><a href="#" aria-controls="tableWithDynamicRows" data-dt-idx="2" tabindex="0"><i class="pg-arrow_right"></i></a></li></ul></div><div class="dataTables_info" id="tableWithDynamicRows_info" role="status" aria-live="polite">Showing <b>1 to 5</b> of 5 entries</div></div></div></div>
            </div>
        </div>
        <!-- END PANEL -->
    </div>

@stop