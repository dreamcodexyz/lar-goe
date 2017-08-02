@extends('goe::layouts.default')


@section('page-content-wrapper')

<p>{{ $contact['email'] }}</p>

{{--{{ dump($session_data) }}--}}
{{--{{ dump($session_data2) }}--}}
{{--{{ dump($x) }}--}}

<form action="{{ url('test/store') }}" method="post">
    {{ csrf_field() }}

    <div>
        <label for="select_store">Store</label>
        <select name="store_id" id="select_store">
            <option value="store_a">A</option>
            <option value="store_b">B</option>
        </select>
    </div>

    <div>
        <button id="submit" class="btn btn-success" type="submit">{{ __('save') }}</button>
    </div>

</form>

<div id="ajaxResponse"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


<script>
    $(document).ready(function(){

        $('#submit').on('click', function (e) {
            e.preventDefault();
            var store_id = $('#select_store').val();
            var _token = $('input[name="_token"]').val();
            console.log(store_id);
            $.ajax({
                type: "POST",
                url: '{{ url('test/store') }}',
                data: {store_id: store_id, _token: _token},
                success: function( data ) {
                    $("#ajaxResponse").append("<div>"+data.result.store_id+"</div>");
                },
                error: function (data) {
                    console.log('Error:', data.msg);
                }
            });
        });

    });
</script>

<script>
    $(document).ready(function(){

        var url = "/ajax-crud/public/tasks";

        //display modal form for task editing
        $('.open-modal').click(function(){
            var task_id = $(this).val();

            $.get(url + '/' + task_id, function (data) {
                //success data
                console.log(data);
            })
        });

        //display modal form for creating new task
        $('#btn-add').click(function(){
            $('#btn-save').val("add");
            $('#frmTasks').trigger("reset");
            $('#myModal').modal('show');
        });

        //delete task and remove it from list
        $('.delete-task').click(function(){
            var task_id = $(this).val();

            $.ajax({

                type: "DELETE",
                url: url + '/' + task_id,
                success: function (data) {
                    console.log(data);

                    $("#task" + task_id).remove();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });

        //create new task / update existing task
        $("#btn-save").click(function (e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            e.preventDefault();

            var formData = {
                task: $('#task').val(),
                description: $('#description').val(),
            };

            //used to determine the http verb to use [add=POST], [update=PUT]
            var state = $('#btn-save').val();

            var type = "POST"; //for creating new resource
            var task_id = $('#task_id').val();;
            var my_url = url;

            if (state == "update"){
                type = "PUT"; //for updating existing resource
                my_url += '/' + task_id;
            }

            console.log(formData);

            $.ajax({

                type: type,
                url: my_url,
                data: formData,
                dataType: 'json',
                success: function (data) {
                    console.log(data);

                    $('#frmTasks').trigger("reset");

                    $('#myModal').modal('hide')
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });
    });
</script>



@endsection