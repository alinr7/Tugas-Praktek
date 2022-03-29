<!DOCTYPE html>
<html lang="en">
<head>
    <title>Studi Kasus 1</title>
    <style>

        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: white;
        }
        .form{
            width: 300px;
            padding: 40px;
            position: absolute;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: whitesmoke;
            border-radius: 10px;
        }
        .form input[type="text"]{
            border: 0;
            background: none;
            display: block;
            margin: 10px 1px;
            text-align: left;
            border: 2px solid #3498db;
            padding: 14px 25px;
            width: 200px;
            outline: none;
            border-radius: 10px;
            transition: 0.25s;
            color: black;
        }
        button[type='submit']{
            border: none;
            background-color: blue;
            color: whitesmoke;
            padding: 10px 20px;
            border-radius: 20px;
            margin-left: 9px;
        }

        button{
            border: none;
            background-color: rgb(255, 0, 0);
            color: whitesmoke;
            padding: 10px 20px;
            border-radius: 20px;
            margin-left: 9px;
        }

        a{
            text-decoration: none;
            color: #fff;
        }

        .form textarea{
            border: 0;
            background: none;
            display: block;
            margin: 10px 1px;
            text-align: left;
            border: 2px solid #3498db;
            padding: 14px 25px;
            width: 200px;
            outline: none;
            border-radius: 10px;
            transition: 0.25s;
            color: black;
        }
        
.file-input {
	display: inline-block;
	text-align: left;
	background: #fff;
	padding: 10px;
	width: 247px;
	position: relative;
	border-radius: 3px;
}
 
.file-input > [type='file'] {
	position: absolute;
	opacity: 0;
	cursor: pointer;
}
 
.file-input > .button {
	background: #eee none repeat scroll 0 0;
	border-radius: 2px;
	cursor: pointer;
	display: inline-block;
	margin-right: 10px;
	padding: 10px 25px;
}
 
.file-input:hover > .button {
	background: dodgerblue;
	color: white;
}
 
.file-input > .label {
	color: #333;
	white-space: nowrap;
	opacity: .3;
}
 
.file-input.-chosen > .label {
 	opacity: 1;
}

table{
    border-bottom: 1px;
}

.f{
    width:10px;
}

    </style>
</head>
<body>
    <div class="form">
        <form action="{{ url("hotel")}}" method="post" enctype="multipart/form-data">
            @csrf
        <div>
            <label for="nama_hotel">Hotel Name </label> <input type="text" name="nama_hotel">
        </div>
        <div>
        <label for="lokasi">Location </label> <input type="text" name="lokasi">
        </div>
        <div>
        <label for="harga">Price </label> <input type="text" name="harga">
        </div> 
        <label for="image">Image</label><br>
        <div class='file-input'>
            <input type='file' name="image">
            <span class='button'>Pilih</span>
            
        </div>
        <div>
            <table >
                <tr>
                    <td class='f'>Facility</td>
                </tr>
            <tr>
            <td><label >Shower</label></td>
            <td><input type="checkbox" value="Shower" name="fasilitas"></td>
            
            <td>
            <label >Wifi</label></td>
            <td><input type="checkbox" value="Wifi" name="fasilitas"></td>
            
            <td>
            <label >Pool</label></td>
            <td><input type="checkbox" value="Pool" name="fasilitas" ></td>
            </tr>
            <tr>
                <td>
            <label >Double Bed</label></td>
            <td><input type="checkbox" value="Double Bed" name="fasilitas" ></td>
            <td>
            <label >Breakfast</label></td>
            <td><input type="checkbox"  value="Breakfast" name="fasilitas" ></td>
            <td>
            <label>Refrigator</label></td>
            <td><input  type="checkbox" value="Refrigator" name="fasilitas" ></td></tr>
       </table> </div>
        <div>
        <label for="sinopsis">Synopsis </label><br>
        <textarea name="sinopsis" id="" cols="32" rows="2"></textarea>
        </div>
        <div>
            <button type="submit">Add Hotel</button>
            <button><a href="/hotelss">Back</a></button>
        </div>
        </form>
    </div>

</html>