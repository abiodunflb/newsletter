<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Afolabi Abiodun Newsletter</title>
    <style>

@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800');
body{
	padding: 0;
	margin: 0;
	font-family: "Open Sans";
}
h1{
	text-align: center;
	font-size: 36px;
}
h3{
	text-align: center;
	font-size: 30px;
	padding: 20px;
	font-weight: 400;
	letter-spacing: 1px;

}
input[type=text] {

    padding: 12px 20px;
    margin: 9px 0;
    box-sizing: border-box;
    border-radius: 10px;
    outline: none;
    width: 40%;
    height:20%;
    boredr:1px solid #7c7b7b;
}
input[type=text]:hover {
	border:1px solid #000;
	transition: 6s;
}
::placeholder {
    color: #000;
    opacity: 1;
    font-weight: 400;
    font-size: 20px;
    text-align: center;


}
button{
	height: 50px;
	padding: 0;
	margin: 0;

}
.btn{
	border-radius: 30px;
	width: 14%;
	margin-left: 5px;
	font-size: 20px;

}
footer{
	background: #000;
	text-align: center;
	padding: 10px;

}
footer p{
	color: #fff;
	padding: 10px;
	margin: 0;
	font-weight: 700;
	font-size: 20px;
}
@media(max-width: 992px){
	.btn{
		width: 20%
	}
	input[type=text]{
		width: 50%;
	}
}
@media(max-width: 768px){
	.btn{
		width: 40%
	}
	input[type=text]{
		width: 90%;
	}
}
@media(max-width: 440px){
	.btn{
		width: 50%;
		font-size: 18px;
	}
	input[type=text]{
		width: 100%;
	}
	h3{
		font-size: 22px;
	}
}
@media(max-width: 373px){
	h3{
		font-size: 20px;
		font-weight: 600;
	}
	h1{
		font-size: 28px;
		font-weight: 400;
	}


}
    </style>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>
<body>

<section class="bg-danger text-center p-5 mt-4">
		<div class="container p-3">
			<h3>SUBSCRIBE TO MY NEWSLETTER</h3>
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
			<form action={{route('subscribe')}} method="Post">
                @csrf
				<input type="text" name="email" placeholder="Enter Your Email">
                <input type="text" name="name" placeholder="Enter Your First Name">
				<button type="submit" class="btn btn-dark">Subscribe</button>
			</form>
		</div>
	</section>

    @if(Session::has('success'))
    <script>
        swal("Nice", "{{!! Session::get('success') !!}}", "success", {
            button: "close",
        });
    </script>
    @endif

<footer>
		<p>© Afolabi Abiodun 2021</p>
	</footer>



</body>
</html>
