

<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    * {
        margin: 0;
        padding: 0;

    }

    ::-webkit-scrollbar {

        width: 5px;
    }

    ::-webkit-scrollbar-track {

        background: #AC1F17;
    }

    ::-webkit-scrollbar-thumb {

        background: black;
    }
</style>

<body style="background:#CF5C55;">

    <div>
        <div class="container-fluid m-0 d-flex p-2">
            <a href="home">
                <div class="pl-2" style="width: 40px; height: 50px; font-size: 180%;">
                    <i class="fa fa-angle-double-left text-white mt-2"></i>
                </div>
            </a>
            <div style="width:50px; height:50px;">
                <img src=" https://icon-library.com/images/warcraft-icon/warcraft-icon-11.jpg" width="100%"
                    height="100%" style="border-radius:50px">
            </div>
            <div class="text-white font-weight-bold ml-2 mt-2" >
                Warcraft Bot
            </div>
        </div>
        <div style="background:#C8322A; height:2px;"></div>
        <div id="content-box" class="container-fluid p-2" style="height:calc(100vh - 130px); overflow-y:scroll">
            
        </div>
        <div class="container-fluid w-100 px-3 py-2 d-flex" style="background:#84231D;height:62px;">
            <div class="mr-2 pl-2" style="background:#ffffff1c;width:calc(100% - 45px);border radius:5px;">
                <input id="input" class="text-white" type="text" name="input"
                    style="background:none; width:100%; height:100%; border:0; outline:none;">
            </div>

            <div id="button-submit" class="text-center"
                style="background:#B15D58;height:100%; width:50px;border-radius:5px;">
                <i class="fa fa-paper-plane text-white" aria-hidden="true" style="line-height:45px"></i>
            </div>
        </div>
    </div>

</body>

</html>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    $('#button-submit').on('click', function() {
        let value = $('#input').val();
    
        $('#content-box').append(
            '<div class="mb-2"><div class="float-right px-3 py-2" style="width: 270px;background:#CB170C; border-radius:10px;float:right;font-size:85%;">'+ value +'</div><div style="clear:both;"></div></div>'
            );

    $.ajax({
        type:'post',
        url: '{{url('send')}}',
        data: {
            'input': value
        },
        success: function(data){
            $('#content-box').append('<div class="d-flex mb-2"><div class="mr-2" style="width:45px;height:45px;"><img src=" https://icon-library.com/images/warcraft-icon/warcraft-icon-11.jpg" width="100%"></div><div class="text-white px-3 py-2"style="width:270; background:#81100A;border-radius:10px; font-size: 85%;">'+data+'</div></div>')
            var value = $('#input').val(' ');
        }
    })
    })
</script>
