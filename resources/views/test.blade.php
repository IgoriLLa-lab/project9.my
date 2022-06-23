<html lang="en">
<head>
    <title>Статьи</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{csrf_token()}}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>
<body>

<div class="container panel panel-default ">
    <h2 class="panel-heading">Напишите Вашу статью</h2>
    <form id="articleForm">
        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Введите название статьи" id="title">
        </div>

        <div class="form-group">
            <textarea class="form-control" name="article" placeholder="Введите Вашу статью" id="article"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-success" id="submit">Submit</button>
        </div>
    </form>
</div>




<script>
    {{--jQuery.ajax({--}}
    {{--    url: "{{ url('/test') }}",--}}
    {{--    method: 'post',--}}
    {{--    data: {--}}
    {{--        "_token": "{{ csrf_token() }}",--}}
    {{--        title: jQuery('#title').val(),--}}
    {{--        article: jQuery('#article').val(),--}}
    {{--    },--}}
    {{--    success: function(result){--}}
    {{--        jQuery('.alert').show();--}}
    {{--        jQuery('.alert').html(result.success);--}}
    {{--    }});--}}

    $('#articleForm').on('submit',function(event){
        event.preventDefault();

        let title = $('#title').val();
        let article = $('#article').val();

        $.ajax({
            url: "test",
            type:"POST",
            data:{
                "_token": "{{ csrf_token() }}",
                title:title,
                article:article,
            },
            success:function(response){
                console.log(response);
            },
        });
    });
</script>
</body>
</html>
