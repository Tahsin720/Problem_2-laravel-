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

    <div class="container" style="align-content: center;">
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('add_item_variant')}}" onsubmit="return validation()" method="POST" autocomplete="off">
                    @csrf
                    <fieldset><legend class="text-center">Valid information is required to register. <span class="req"><small> required *</small></span></legend>
                    
                    <div class="form-group">
                        <label for="Product_name"><font color =red>*</font> Product Name </label> 
                            <input class="form-control" type="text" id = "name" name = "name" autocomplete="off" required>
                            <div class = "alert" id="errName"></div>  
                    </div>

                    <div class="form-group">
                        <label for="variant"><font color =red>*</font> Variant: </label> 
                            <input class="form-control" required type="text" id = "variant" name="variant" required>   
                                <div class = "alert" id="errVariant"></div>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type = "submit" name = "" value = "Add Product">
                    </div>
                    </fieldset>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        function validation(){
            var name = document.getElementById('name').value;
            var variant = document.getElementById("variant").value;

            if(name.length < 2){
                document.getElementById("errName").innerHTML = "**Write more than one character**";
                return false;
            }
            if(!isNaN(name)){
                document.getElementById("errName").innerHTML = "**Write only alphabets**";
                return false;
            }
            if(isNaN(variant)){
                document.getElementById("errVariant").innerHTML = "**Write only Integer**";
                return false;
            }
        }
    </script>
</body>
</html>