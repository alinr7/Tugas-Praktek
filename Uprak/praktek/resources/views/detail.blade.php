<!DOCTYPE html>
<html>
<head>
<style>

body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        nav{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 70px;
            background: rgba(0,0,0,0.6);
            padding: 0 100px;
            box-sizing: border-box;
        }
        nav .brand{
            float: left;
            height: 100%;
        }
        nav .brand{
            margin: 0;
            padding: 0;
            color: #fff;
        }
        nav ul{
            float: right;
            display: flex;
            margin: 0;
            padding: 0;
        }
        nav ul li{
            list-style: none;
        }
        nav ul li a{
            position: relative;
            display: block;
            height: 70px;
            line-height: 70px;
            padding: 0 20px;
            box-sizing: border-box;
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            transition: .5s;
        }
        nav ul li a:before{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            transform-origin: right;
            z-index: -1;
            transform: scaleX(0);
            transition: transform .5s;
        }
        nav ul li a:hover:before{
            transform-origin: left;
            transform: scaleX(1);
        }
        nav ul li a:hover{
            color: #262626;
        }

        
.button{
    float: right;
    margin-bottom: 50vh;
    margin-right: 3vh;
    display: inline;
}

.head{
    display: inline;

}

.container{
    margin-top: 12vh;
}

.img{
    display: inline-block;
    margin-top:-40vh;
}

img{
    width: 50%;
    height: auto;
    margin-right: 11vh;
        
}

.body{
    margin-left: 44vh;
}

button{
    border: none;
    background-color: yellow;
    color: black;
    padding: 10px;
    border-radius: 5px;
    margin: 7px;
}

a{
    text-decoration: none;
}

</style>
</head>
<body>

    <nav>
        <div class="brand">
            <h2>Hotela</h2>
        </div>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/hotelss">Hotels</a></li>
        </ul>
        </nav>

<div class="container">
    

    <div class="head" align="center">
    
    <div class="button">
        <button><a href="../edit/{{$hotel->id}}">Edit</a></button>
        <form action='{{url("hotel", $hotel->id)}}' method="post">
            @csrf
            @method("delete")
        <button>Hapus</button></form>
    </div>
        <h1 style="margin-left:1vh;">{{$hotel->nama_hotel}}</h1>
        <h3>{{$hotel->lokasi}}</h3>
    <div class="img">
        <img src="https://www.rwsentosa.com/-/media/project/non-gaming/rwsentosa/hotels/hard-rock-hotel-singapore/hardrockhotelsg-exterior.jpg?mh=666&la=id-ID&h=666&w=1366&mw=1366&hash=FF10D82E41A38B8CCBD3DF364625D1CE5D9CB194">
    </div>
    <div class="body" align='justify'>
        <h2>About The Hotel</h2>
        <p>{{$hotel->sinopsis}}</p>
        <h2>Facilitate</h2>
        <p>{{$hotel->fasilitas}}</p>
    </div>
    </div>

    
</div>

</body>
</html>


