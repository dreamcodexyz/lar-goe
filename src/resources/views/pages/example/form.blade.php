@extends('includes.content')
@section('page-content')

<div class="container-fluid container-fixed-lg bg-white text-black">
    <!-- START PANEL -->
    <div class="panel panel-transparent">
        <div class="panel-heading">
            <div class="panel-title">Separated form layouts
            </div>
            <div class="pull-right">
                <div class="col-xs-12">
                    <button id="show-modal" class="btn btn-primary btn-cons"><i class="fa fa-save"></i> Save</button>
                </div>
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
                        <div class="row" style="display: none">
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

@stop