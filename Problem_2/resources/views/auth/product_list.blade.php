<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>

        <style>
            .view{
                margin-left: 35%;
            }

            .btn{
                display: flex; 
                align-items: center;
                margin-left: 9px;
                margin-right: -49px;
            }

            #ptable{
                width: 80%;
                margin-left: 10%;
                border: 1px solid rgb(126, 126, 175);
                border-collapse: collapse;
            }

            #ptable th, #ptable td{
                border: 1px solid rgb(126, 126, 175);
                border-collapse: collapse;
                text-align: center;
                color: black;
            }

            #ptable tr:hover{
                background-color: bisque !important;
            }


        </style>

        <h3>Product Info</h3>
        
        <div class="d-flex justify-content-center links" style="margin-bottom: 10px;">
            Want to add new Variant?<a href='add_variant'>Add Variant</a>
        </div>
       
        

            <table id="ptable">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Variant</th>
                        <th>Buttons</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($info as $infos)
                        <tr>
                            <td>{{$infos['product_name']}}</td>
                            <td>{{$infos['Variant']}}</td>
                            <td>
                                <div class="btn">
                                    <div class="view">
                                        <form action = "{{route('view_table')}}" method="POST">
                                            @csrf
                                            <input type="hidden" id="id" name="id" value={{$infos['Variant']}}>
                                            <input class="btn" type="submit" name="view" id="view" value="View">
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
</body>
</html>
    