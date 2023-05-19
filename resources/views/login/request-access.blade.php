
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>PRESTES</title>
    <link rel="icon" type="imagem/png" href="{{asset('img/logo-old.png')}}" />
</head>
<body class="bg-dark">

<div class="form-group d-flex justify-content-center mb-5 mt-5">
    <img src="{{ asset('img/logo.png') }}" width="300px" alt="Fuzzy Cardigan"
         class="img-responsive mb-1 mt-5"  >

</div>

<div class="container text-white">


    <div class="d-flex justify-content-center">
       
        <h1 class="fw-light">Solicitar acesso</h1>
    </div>

    <form action=""  method="POST" >
        @csrf
        @method('PUT')

        <div class="form-group">
            <div class="col-md-6 offset-md-3 mt-2 ">
                <label class="mb-2"> Nome</label>
                <input required type="text" name="name" class="form-control p-3 bg-white border-0" required="" >
            </div>
            <div class="col-md-6 offset-md-3 mt-2">
                <label class="mb-2"> Whatsapp</label>
                <input required type="text" name="whatsapp" class="form-control p-3 bg-white border-0" required="" >
            </div>
            <div class="col-md-6 offset-md-3 mt-2">
                <label class="mb-2"> E-mail</label>
                <input required type="text" name="email" class="form-control p-3 bg-white border-0" placeholder="emailcorporativo@gmail.com" required="" >
            </div>
        </div>

        <div class="form-group mt-2">
            <div class="col-md-6 offset-md-3 mt-3">
                <button type="submit" value="Acessar" class="btn btn-success col-12 fw-bold fs-5" name="">Solicitar</button>
            </div>
        </div>
      
    </form>
</div>

<script src="{{asset('js/jquery-3.6.0.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

</body>
</html>
