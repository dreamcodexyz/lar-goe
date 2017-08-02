@extends('layouts.default')
@section('page-content-wrapper')

{{-- @include('includes.content') --}}


<div class="content ">


    <div class="container-fluid container-fixed-lg">
        <ul class="breadcrumb">
            <li>
                <p>home</p>
            </li>

            @if( ! empty($page_title))
            <li>
                <a href="#" class="active">{{ $page_title }}</a>
            </li>
            @endif
        </ul>
    </div>

    <div class="container-fluid container-fixed-lg">
        <div class="row">
            <div class="col-md-12">
                <!-- START PANEL -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">Option #one</div>
                    </div>
                    <div class="panel-body">
                        <h5>
                            Pages default style
                        </h5>
                        <form class="" role="form">
                            <div class="form-group form-group-default required">
                                <label class="">Project</label>
                                <input type="email" class="form-control" required="">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-group-default required">
                                        <label>First name</label>
                                        <input type="text" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>Last name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-group-default required">
                                <label>Password</label>
                                <input type="password" class="form-control" required="">
                            </div>
                            <div class="form-group  form-group-default required">
                                <label>Placeholder</label>
                                <input type="email" class="form-control" placeholder="ex: some@example.com" required="">
                            </div>
                            <div class="form-group form-group-default disabled">
                                <label>Disabled</label>
                                <input type="email" class="form-control" value="You can put anything here" disabled="">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END PANEL -->
            </div>
            <div class="col-md-12">
                <!-- START PANEL -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            Option #two
                        </div>

                        <div class="pull-right">
                            <div class="col-xs-12">
                                <button id="show-modal" class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> Add row
                                </button>

                                <button id="show-modal" class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> Add row
                                </button>

                                <button id="show-modal" class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> Add row
                                </button>
                            </div>
                        </div>

                    </div>
                    <div class="panel-body">
                        <h5>
                            Traditional Standard Style
                        </h5>
                        <form role="form">
                            <div class="form-group">
                                <label>Your name</label>
                                <span class="help">e.g. "Mona Lisa Portrait"</span>
                                <input type="email" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <span class="help">e.g. "Mona Lisa Portrait"</span>
                                <input type="password" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <span class="help">e.g. "some@example.com"</span>
                                <input type="email" class="form-control" placeholder="ex: some@example.com" required="">
                            </div>
                            <div class="form-group">
                                <label>Placeholder</label>
                                <span class="help">e.g. "some@example.com"</span>
                                <input type="email" class="form-control" placeholder="ex: some@example.com" required="">
                            </div>
                            <div class="form-group">
                                <label>Disabled</label>
                                <span class="help">e.g. "some@example.com"</span>
                                <input type="email" class="form-control" value="You can put anything here" disabled="">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END PANEL -->
            </div>
        </div>
    </div>


    <div class="container-fluid container-fixed-lg">
        <!-- START PANEL -->
        <div class="panel panel-transparent">
            <div class="panel-heading">
                <div class="panel-title">Separated form layouts
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-10">
                        <h3>Simple but not simpler, Seperate your forms and create diversified info graphic</h3>
                        <p>Want it to be more Descriptive and User Friendly, We Made it possible, Use Seperated Form Layouts Structure to Presentate your Form Fields.
                        </p>
                        <br>
                        <p class="small hint-text">To Add A full Width Portlet - Class - portlet-full This can be used in any
                            <br> widget or situation, Highly Recomended on Forms and tables</p>
                        <form id="form-work" class="form-horizontal" role="form" autocomplete="off" novalidate="novalidate">
                            <div class="form-group">
                                <label for="fname" class="col-sm-3 control-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" placeholder="Full name" name="name" required="" aria-required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Your gender</label>
                                <div class="col-sm-9">
                                    <div class="radio radio-success">
                                        <input type="radio" value="male" name="optionyes" id="male">
                                        <label for="male">Male</label>
                                        <input type="radio" checked="checked" value="female" name="optionyes" id="female">
                                        <label for="female">Female</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Work</label>
                                <div class="col-sm-9">
                                    <p>Have you Worked at page Inc. before, Or joined the Pages Supirior Club?</p>
                                    <p class="hint-text small">If yes State which Place, if yes note date and Job CODE / Membership Number</p>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control error" required="" aria-required="true" aria-invalid="true"><label id="-error" class="error" for="">This field is required.</label>
                                        </div>
                                        <div class="col-sm-5 sm-m-t-10">
                                            <input type="text" placeholder="Code/Number" class="form-control" aria-invalid="false">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="position" class="col-sm-3 control-label">Position applying for</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control error" id="position" placeholder="Designation" required="" aria-required="true" aria-invalid="true"><label id="position-error" class="error" for="position">This field is required.</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="name" placeholder="Briefly Describe your Abilities" aria-invalid="false"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p>I hereby certify that the information above is true and accurate. </p>
                                </div>
                                <div class="col-sm-9">
                                    <button class="btn btn-success" type="submit">Submit</button>
                                    <button class="btn btn-default"><i class="pg-close"></i> Clear</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PANEL -->
    </div>


    <div class="container-fluid container-fixed-lg bg-white">
        <!-- START PANEL -->
        <div class="panel panel-transparent">
            <div class="panel-heading">
                <div class="panel-title">Pages Default Tables Style
                </div>
                <div class="btn-group pull-right m-b-10">
                    <button type="button" class="btn btn-default">Add new</button>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                            aria-expanded="false">
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
                <div class="table-responsive">
                    <div id="basicTable_wrapper" class="dataTables_wrapper form-inline no-footer">
                        <table class="table table-hover dataTable no-footer" id="basicTable" role="grid">
                            <thead>
                            <tr role="row">
                                <th style="width:1%" class="sorting_disabled" rowspan="1" colspan="1" aria-label="


                        ">
                                    <button class="btn"><i class="pg-trash"></i>
                                    </button>
                                </th>
                                <th style="width: 156px;" class="sorting_desc" tabindex="0" aria-controls="basicTable"
                                    rowspan="1" colspan="1" aria-sort="descending"
                                    aria-label="Title: activate to sort column ascending">Title
                                </th>
                                <th style="width: 158px;" class="sorting" tabindex="0" aria-controls="basicTable"
                                    rowspan="1" colspan="1" aria-label="Places: activate to sort column ascending">
                                    Places
                                </th>
                                <th style="width: 244px;" class="sorting" tabindex="0" aria-controls="basicTable"
                                    rowspan="1" colspan="1" aria-label="Activities: activate to sort column ascending">
                                    Activities
                                </th>
                                <th style="width: 110px;" class="sorting" tabindex="0" aria-controls="basicTable"
                                    rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">
                                    Status
                                </th>
                                <th style="width: 111px;" class="sorting" tabindex="0" aria-controls="basicTable"
                                    rowspan="1" colspan="1" aria-label="Last Update: activate to sort column ascending">
                                    Last Update
                                </th>
                            </tr>
                            </thead>
                            <tbody>


                            <tr role="row" class="odd">
                                <td class="v-align-middle">
                                    <div class="checkbox ">
                                        <input type="checkbox" value="3" id="checkbox4">
                                        <label for="checkbox4"></label>
                                    </div>
                                </td>
                                <td class="v-align-middle sorting_1">
                                    <p>Life’s sadness shared</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>United States, India, China,Africa</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>he world speaks English. Common law, Magna Carta and the Bill of Rights are its
                                        wonderful legacy</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>Public</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>April 13,2014 10:13</p>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="v-align-middle">
                                    <div class="checkbox ">
                                        <input type="checkbox" value="3" id="checkbox1">
                                        <label for="checkbox1"></label>
                                    </div>
                                </td>
                                <td class="v-align-middle sorting_1">
                                    <p>First Tour</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>United States, India, China,Africa</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of
                                        Great Britain and North Ireland..</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>Public</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>April 13,2014 10:13</p>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="v-align-middle">
                                    <div class="checkbox ">
                                        <input type="checkbox" value="3" id="checkbox5">
                                        <label for="checkbox5"></label>
                                    </div>
                                </td>
                                <td class="v-align-middle sorting_1">
                                    <p>First Tour</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>United States, India, China,Africa</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of
                                        Great Britain and North Ireland..</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>Public</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>April 13,2014 10:13</p>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="v-align-middle">
                                    <div class="checkbox ">
                                        <input type="checkbox" value="3" id="checkbox6">
                                        <label for="checkbox6"></label>
                                    </div>
                                </td>
                                <td class="v-align-middle sorting_1">
                                    <p>First Tour</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>United States, India, China,Africa</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of
                                        Great Britain and North Ireland..</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>Public</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>April 13,2014 10:13</p>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="v-align-middle">
                                    <div class="checkbox ">
                                        <input type="checkbox" value="3" id="checkbox2">
                                        <label for="checkbox2"></label>
                                    </div>
                                </td>
                                <td class="v-align-middle sorting_1">
                                    <p>Among the children</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>United States, India, China,Africa</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>you want English, Scottish, Welsh, Irish, British, European or UK even a British
                                        (name other original country you came form or have roots to E.G. A British
                                        Japanese or a 5th generation</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>Public</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>April 13,2014 10:13</p>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="v-align-middle">
                                    <div class="checkbox ">
                                        <input type="checkbox" value="3" id="checkbox3">
                                        <label for="checkbox3"></label>
                                    </div>
                                </td>
                                <td class="v-align-middle sorting_1">
                                    <p>A day to remember</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>United States, India, China,Africa</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>UK was on top of the art world 18-19 century had the best food, best cloths and
                                        best entertainment back then) it was a hyper nation</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>Public</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>April 13,2014 10:13</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PANEL -->
    </div>


    <div class="container-fluid container-fixed-lg bg-white">
        <!-- START PANEL -->
        <div class="panel panel-transparent">
            <div class="panel-heading">
                <div class="panel-title">Table with export options
                </div>
                <div class="pull-right">
                    <div class="col-xs-12">
                        <button id="show-modal" class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> Add row
                        </button>

                        <button id="show-modal" class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> Add row
                        </button>

                        <button id="show-modal" class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> Add row
                        </button>
                    </div>
                </div>
                <div class="export-options-container pull-right">
                    <div class="exportOptions">
                        <div class="DTTT btn-group"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <div id="tableWithExportOptions_wrapper" class="dataTables_wrapper form-inline no-footer">
                    <div class="table-responsive">
                        <table class="table table-striped dataTable no-footer" id="tableWithExportOptions" role="grid"
                               aria-describedby="tableWithExportOptions_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="tableWithExportOptions" rowspan="1"
                                    colspan="1" aria-label="Rendering engine: activate to sort column descending"
                                    aria-sort="ascending">Rendering engine
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="tableWithExportOptions" rowspan="1"
                                    colspan="1" aria-label="Browser: activate to sort column ascending"
                                    style="width: 328px;">Browser
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="tableWithExportOptions" rowspan="1"
                                    colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                    style="width: 304px;">Platform(s)
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="tableWithExportOptions" rowspan="1"
                                    colspan="1" aria-label="Engine version: activate to sort column ascending"
                                    style="width: 229px;">Engine version
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="tableWithExportOptions" rowspan="1"
                                    colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                    style="width: 162px;">CSS grade
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="gradeA odd" role="row">
                                <td class="sorting_1">Gecko</td>
                                <td class="">Camino 1.0</td>
                                <td>OSX.2+</td>
                                <td class="center">1.8</td>
                                <td class="center">A</td>
                            </tr>
                            <tr class="gradeA even" role="row">
                                <td class="sorting_1">Gecko</td>
                                <td class="">Camino 1.5</td>
                                <td>OSX.3+</td>
                                <td class="center">1.8</td>
                                <td class="center">A</td>
                            </tr>
                            <tr class="gradeA odd" role="row">
                                <td class="sorting_1">Gecko</td>
                                <td class="">Epiphany 2.20</td>
                                <td>Gnome</td>
                                <td class="center">1.8</td>
                                <td class="center">A</td>
                            </tr>
                            <tr class="gradeA even" role="row">
                                <td class="sorting_1">Gecko</td>
                                <td class="">Firefox 1.0</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td class="center">1.7</td>
                                <td class="center">A</td>
                            </tr>
                            <tr class="gradeA odd" role="row">
                                <td class="sorting_1">Gecko</td>
                                <td class="">Firefox 1.5</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td class="center">1.8</td>
                                <td class="center">A</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div>
                            <div class="dataTables_paginate paging_simple_numbers" id="tableWithExportOptions_paginate">
                                <ul class="">
                                    <li class="paginate_button previous disabled" id="tableWithExportOptions_previous">
                                        <a href="#" aria-controls="tableWithExportOptions" data-dt-idx="0" tabindex="0"><i
                                                    class="pg-arrow_left"></i></a></li>
                                    <li class="paginate_button active"><a href="#"
                                                                          aria-controls="tableWithExportOptions"
                                                                          data-dt-idx="1" tabindex="0">1</a></li>
                                    <li class="paginate_button "><a href="#" aria-controls="tableWithExportOptions"
                                                                    data-dt-idx="2" tabindex="0">2</a></li>
                                    <li class="paginate_button "><a href="#" aria-controls="tableWithExportOptions"
                                                                    data-dt-idx="3" tabindex="0">3</a></li>
                                    <li class="paginate_button "><a href="#" aria-controls="tableWithExportOptions"
                                                                    data-dt-idx="4" tabindex="0">4</a></li>
                                    <li class="paginate_button "><a href="#" aria-controls="tableWithExportOptions"
                                                                    data-dt-idx="5" tabindex="0">5</a></li>
                                    <li class="paginate_button disabled" id="tableWithExportOptions_ellipsis"><a
                                                href="#" aria-controls="tableWithExportOptions" data-dt-idx="6"
                                                tabindex="0">…</a></li>
                                    <li class="paginate_button "><a href="#" aria-controls="tableWithExportOptions"
                                                                    data-dt-idx="7" tabindex="0">12</a></li>
                                    <li class="paginate_button next" id="tableWithExportOptions_next"><a href="#"
                                                                                                         aria-controls="tableWithExportOptions"
                                                                                                         data-dt-idx="8"
                                                                                                         tabindex="0"><i
                                                    class="pg-arrow_right"></i></a></li>
                                </ul>
                            </div>
                            <div class="dataTables_info" id="tableWithExportOptions_info" role="status"
                                 aria-live="polite">Showing <b>1 to 5</b> of 57 entries
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PANEL -->
    </div>
</div>





@stop