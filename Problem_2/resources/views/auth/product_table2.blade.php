<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered info</title>
</head>
<body>

        <style>
            .edit{
                margin-right: 10px;
                margin-left:4px;
            }
            .delete{
                margin-left: 33px;
            }
            .btn{
                display: flex; 
                align-items: center;
                margin-left: 9px;
                margin-right: -49px;
            }

            #ptable{
                width: 100%;
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

        <h3>Registered Info</h3>
        
        <div class="d-flex justify-content-center links" style="margin-bottom: 10px;">
            Want to add new item?<a href='registration2'>Add Item</a>
        </div>
       
        
            
                <table id="ptable">
                    <thead>
                        <tr>
                            <th>Color</th>
                            <th>Size</th>
                            <th>Price</th>
                            <th>Buttons</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($info as $infos)
                                <tr>
                                    <td>{{$infos['color']}}</td>
                                    <td>{{$infos['size']}}</td>
                                    <td>{{$infos['price']}}</td>
                                    <td>
                                    <div class="btn">
                                        <div class="edit">
                                            <form action = "{{route('edit_2_page')}}" method="POST">
                                                @csrf
                                                <input type="hidden" id="id" name="id" value={{$infos['id']}}>
                                                <input class="btn" type="submit" name="edit" id="edit" value="Edit">
                                            </form>
                                        </div>
                                        <div class="delete">
                                            <form action = "" method="POST">
                                                @csrf
                                                <input type="hidden" id="id" name="id" value={{$infos['id']}}>
                                                <input class="btn" type="submit" name="delete" id="delete" value="Delete">
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
    