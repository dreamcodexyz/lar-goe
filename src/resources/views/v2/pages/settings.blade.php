{{--@extends('goe::layouts.default')--}}
{{--@section('page-content-wrapper')--}}
        <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add new store</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>
<div class="container">
    <div class="page-header">
        <h1>Add new store</h1>
    </div>
    <div class="row">
        <div class="col-md-4">
            <form id="form-new-store" action="{{ url('test/store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="note">Note</label>
                    <textarea class="form-control" rows="5" id="note" name="note" placeholder="Note"></textarea>
                </div>
                <div class="form-group">
                    <label for="is_active">Active</label>
                    <select class="form-control" id="is_active" name="is_active">
                        <option value="1">Enable</option>
                        <option value="2">Disable</option>
                    </select>
                </div>
                <button type="button" id="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
        <div class="col-md-8">
            <div class="row">
                <textarea class="form-control" rows="5" id="message"></textarea>
            </div>
            <div class="row">
                <div id="table-list-store" style="margin-top:20px">
                    @include('goe::pages.test2', ['stores' => $stores])
                </div>
            </div>
        </div>
    </div>

</div>
</body>

</html>

<script>
    $(document).ready(function(){

        $('#submit').on('click', function (e) {
            e.preventDefault();

            /*check validate*/
            if(!$('#form-new-store')[0].checkValidity()){
                addMessage('Error: Form validate return false !');
                return false;

            }
            $.ajax({
                type: "POST",
                url: '{{ url('test/store') }}',
                data: $('#form-new-store').serialize(),
                success: function( data ) {
                    console.log(data);
                    if(data.msg == 'OK'){
                        $('#table-list-store').html(data.html);
                        $('#form-new-store')[0].reset();
                        addMessage('Success: Add new store('+data.store.name+') success !');
                    }
                },
                error: function (data) {
                    addMessage('Error: '+data.msg);
                    console.log('Error:', data.msg);
                }
            });
        });

        function addMessage(message){
            $('#message').val(message+'\n'+$('#message').val());
        }

    });


</script>

{{--<script>--}}
{{--$(document).ready(function(){--}}

{{--var url = "/ajax-crud/public/tasks";--}}

{{--//display modal form for task editing--}}
{{--$('.open-modal').click(function(){--}}
{{--var task_id = $(this).val();--}}

{{--$.get(url + '/' + task_id, function (data) {--}}
{{--//success data--}}
{{--console.log(data);--}}
{{--})--}}
{{--});--}}

{{--//display modal form for creating new task--}}
{{--$('#btn-add').click(function(){--}}
{{--$('#btn-save').val("add");--}}
{{--$('#frmTasks').trigger("reset");--}}
{{--$('#myModal').modal('show');--}}
{{--});--}}

{{--//delete task and remove it from list--}}
{{--$('.delete-task').click(function(){--}}
{{--var task_id = $(this).val();--}}

{{--$.ajax({--}}

{{--type: "DELETE",--}}
{{--url: url + '/' + task_id,--}}
{{--success: function (data) {--}}
{{--console.log(data);--}}

{{--$("#task" + task_id).remove();--}}
{{--},--}}
{{--error: function (data) {--}}
{{--console.log('Error:', data);--}}
{{--}--}}
{{--});--}}
{{--});--}}

{{--//create new task / update existing task--}}
{{--$("#btn-save").click(function (e) {--}}
{{--$.ajaxSetup({--}}
{{--headers: {--}}
{{--'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')--}}
{{--}--}}
{{--});--}}

{{--e.preventDefault();--}}

{{--var formData = {--}}
{{--task: $('#task').val(),--}}
{{--description: $('#description').val(),--}}
{{--};--}}

{{--//used to determine the http verb to use [add=POST], [update=PUT]--}}
{{--var state = $('#btn-save').val();--}}

{{--var type = "POST"; //for creating new resource--}}
{{--var task_id = $('#task_id').val();;--}}
{{--var my_url = url;--}}

{{--if (state == "update"){--}}
{{--type = "PUT"; //for updating existing resource--}}
{{--my_url += '/' + task_id;--}}
{{--}--}}

{{--console.log(formData);--}}

{{--$.ajax({--}}

{{--type: type,--}}
{{--url: my_url,--}}
{{--data: formData,--}}
{{--dataType: 'json',--}}
{{--success: function (data) {--}}
{{--console.log(data);--}}

{{--$('#frmTasks').trigger("reset");--}}

{{--$('#myModal').modal('hide')--}}
{{--},--}}
{{--error: function (data) {--}}
{{--console.log('Error:', data);--}}
{{--}--}}
{{--});--}}
{{--});--}}
{{--});--}}
{{--</script>--}}