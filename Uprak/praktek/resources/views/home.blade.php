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

.head{
    margin-bottom: 250px;
    display: block;
}

.image{
    margin-top: -270px;
}

.container{
  margin-left:100px;
}

.box{
    margin-right: 100px;
}

button{
    border: none;
    padding: 12px 20px;
    background-color: red;
    border-radius: 20px;
    color: whitesmoke;
    padding: 13px 20px;
}

button[type='submit']:hover{
    background-color: black;
    color: whitesmoke; 
}

.sec1{
  background: url(https://images.unsplash.com/photo-1561501900-3701fa6a0864?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bHV4dXJ5JTIwaG90ZWx8ZW58MHx8MHx8&w=1000&q=80);
  width: 100%;
  height: 100vh;
  display: inline-block;
  background-size: cover;
}

a{
  text-decoration: none;
  color: whitesmoke;
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
    <section class="sec1">


<div class="container" >
<div class="head"></div>
<h1 style="font-size: 60px; ; color: rgb(12, 12, 12);" ">Our World is <br> Our Playground</h1>
<h3 style="font-size: 20px; color:rgb(39, 35, 35);">We give you want and less what you don't need</h3>
<div class="get-button"></div>
<button type="submit"><a href="/hotelss">Get Started</a></button>
</div></div>
</section>
</body>
</html>


