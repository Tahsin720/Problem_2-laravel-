<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=invice-width, initial-scale=1.0">
    <!--Bootsrap 4 CDN-->
    <script src="https://coin.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="ainactivenymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="ainactivenymous">
    <title>Register</title>
</head>
<body>
    <style>
        fieldset {
            border: thin solid #ccc; 
            border-radius: 4px;
            padding: 20px;
            padding-left: 40px;
            background: #fbfbfb;
        }

        .form-control {
            width: 95%;
        }
        label small {
            color: #678 !important;
        }
        span.req {
            color:maroon;
            font-size: 112%;
        }
        .text-center{
            color: lightblue;
        }
        .alert {
            color: red !important;
        }
        legend {
            display: block;
            width: 100%;
            max-width: 100%;
            margin-bottom: 0.5rem;
            font-size: 1.5rem;
            line-height: inherit;
            color: #678;
            white-space: inactivermal;
        }
    </style>
    @if($items != null)
    <div class="container" style="align-content: center;">
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('edit_3_func')}}" onsubmit="return validation()" method="POST" autocomplete="off">
                    @csrf
                    <fieldset><legend class="text-center">Valid information is required to register. <span class="req"><small> required *</small></span></legend>
                    
                    <div class="form-group">
                        <label for="gender"><font color =red>*</font> Gender </label> 
                            <input class="form-control" type="text" id = "gender" name = "gender" value = {{$items['gender']}} autocomplete="off" required>
                            <div class = "alert" id="errgender"></div>  
                    </div>

                    <div class="form-group">
                        <label for="color"><font color =red>*</font> Color Address: </label> 
                            <input class="form-control" required type="text" id = "color" name="color" value = {{$items['color']}} required>   
                                <div class = "alert" id="errcolor"></div>
                    </div>

                    <div class="form-group">
                        <label for="size"><font color =red>*</font> Size: </label><br>
                        <input type = "size" id = "size" name = "size" autocomplete="off" value = {{$items['size']}} required>
                        <div class = "alert" id="errsize"></div>
                    </div>

                    <div class="form-group">
                        <label for="price"><font color =red>*</font> Price: </label> 
                            <input class="form-control" type="text" id = "price" name = "price" value = {{$items['price']}} required >  
                                <div class = "alert" id="errPrice"></div>
                    </div>

                    <div class="form-group">
                        <input type="hidden" id="id" name="id" value={{$items['id']}}>   
                        <input type = "submit" name = "" value = "Update Item">
                    </div>

                    </fieldset>
            </form>
        </div>
    </div>
    @endif
    <script type="text/javascript">
        function validation(){
            var gender = document.getElementById('gender').value;
            var color = document.getElementById("color").value;
            var price = document.getElementById("price").value;
            var size = document.getElementById("size").value;

            if(gender.length < 2){
                document.getElementById("errgender").innerHTML = "**Write more than one character**";
                return false;
            }
            if(!isNaN(gender)){
                document.getElementById("errgender").innerHTML = "**Write only alphabets**";
                return false;
            }
            if(color.length < 2){
                document.getElementById("errcolor").innerHTML = "**Write more than one character**";
                return false;
            }
            if(!isNaN(color)){
                document.getElementById("errcolor").innerHTML = "**Write only alphabets**";
                return false;
            }
            if(size.length == 1){
                document.getElementById("errsize").innerHTML = "**size must be 1 characters**";
                return false;

            if(isNaN(price)){
                document.getElementById("errPrice").innerHTML = "**Write only Integers**";
                return false;
            }
        }
    </script>
</body>
</html>