<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

div.gallery {
  margin: 20px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
  margin-top: 100px;  
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 10px;
  text-align: justify;
}

button {
  background-color: #4CAF50; /* Hijau */
  border: none;
  color: white;
  padding: 5px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 50px;
  margin: 1px 2px;
  cursor: pointer;
  border-radius: 50%;
}

a{
    text-decoration: none;
    color: black;
}

.button1{
    float: right;
    margin-top: 35em;
    margin-right: 6vh;
}



</style>
</head>
<body>

  <nav>
    <div class="brand">
        <h2>Hotel Mantap</h2>
    </div>
    <ul>
        <li><a href="/home">Home</a></li>
        <li><a href="/hotelss">Hotels</a></li>
    </ul>
    </nav>

    
@foreach ($hotel as $row)
<div class="gallery">
  <a href="detail/{{$row->id}}">
    <img src= "{{asset('storage/'.$row->image)}}" alt="Cinque Terre">
  </a>
  <div class="desc">
        <h4>{{$row->nama_hotel}} <br> <i class="fa-solid fa-location-dot"></i> <span style="font-size:17px; padding:2px; color:#777;">{{$row->lokasi}} </span> <br> <span>${{$row->harga}} /night</span></h4>
    </div>
</div>
@endforeach

<div class="button1">
<button><a href="/add">+</a></button></div>
</body>
</html>


