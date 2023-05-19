
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
        @if(!empty($_GET['acessoSolicitado']))
            <div class="alert alert-success col-6" role="alert">
                Acesso solicitado com sucesso
            </div>
        @endif
        </div>
    <div class="d-flex justify-content-center">
       
        <h1 class="fw-light">Entrar</h1>
    </div>
    <div class="d-flex justify-content-center">
        <small class="fw-light">Voce ja tem uma conta cadastrada? Acesse com seu login e senha.</small>
    </div>
    <form action=""  method="POST" >
        @csrf
        @method('POST')

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label class="mb-2"> E-mail</label>
                <input required type="text" name="email" class="form-control p-3 bg-white border-0" placeholder="emailcorporativo@gmail.com" required="" >
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label class="mb-2"> Senha </label>
                <div class="input-group">
                    <input required type="password" id='password' name="password" class="form-control p-3 bg-white border-0" placeholder="senha" required="" aria-describedby="showPassword">
                    <div class="input-group-append">
                      <span class="input-group-text border-0 bg-white p-3" id="showPassword"><i class='fa fa-eye text-secondary '></i></span>
                    </div>
                  </div>
                
            </div>
        </div>
        <div class="form-group mt-2">
            <div class="col-md-6 offset-md-3">
                <a href='/admin/recover-password'><small class="mb-2 text-white"><ins>Esqueceu a senha?</ins>  </small></a>
           </div>
        </div>


        <div class="form-group mt-2">
            <div class="col-md-6 offset-md-3">
                <button type="submit" value="Acessar" class="btn btn-success col-12 fw-bold fs-5" name="">Acessar</button>

            </div>
        </div>
        
        <div class="d-flex justify-content-center mt-4">
            <p class="fw-light">Nao tem uma conta? <a href='/admin/request-access' class='text-white'>Solicitar acesso ao administrador.</a></p>
        </div>
        
    </form>
</div>

<script src="{{asset('js/jquery-3.6.0.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

</body>
</html>
