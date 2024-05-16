<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

        

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
       <form action='{{route("register")}}' method="Post" name='register-form' id='register-form'>
        @csrf
        <label>User Name</label>
        <input type='text' name="name" required/><br>
        <label>Email</label>
        <input type='email' name="email" required/><br>
        <label>Password</label>
        <input type='password' name="password" required/><br>
        <input type="submit" name='sub'/>
       </form>
    </body>
</html>
<script type='text/javascript'>


$(function(){

    $("form[name='register-form']").validate({
        rules:{
            name : "required",
            email:{
                required:true,
                email:true
            },
            password:{
                minlength:8,
                required:true
            }
        },
        message:{
            name:'Please Enter Username',
            email:'Please Enter a valid email',
            password:{
                minlength:'Your Password must be at least 8 character long',
                required:"Please Provide a Password"
            }
        },
        submitHandler: function(form){
            form.submit();
        }
    });

});

</script>