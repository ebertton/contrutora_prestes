
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Prestes</title>
</head>
<body class="bg-light">



<div class="container ">

        <h1 class="fw-light">Solicitação de acesso ao painel</h1>
   


        <div class='form-group container mb-4 col-7'>
            <div >
                <strong >Nome: </strong>
                <span> {{$request['name']}}</span>
            </div>


            <div>
                <strong >Whatsapp: </strong>
                <span> {{$request['whatsapp']}}</span>
            </div>
            <div>
                <strong >Email: </strong>
                <span> {{$request['email']}}</span>
            </div>

        </div>


    </form>
</div>

<style>
    div {
        margin-top: 20px;
    }

</style>

</body>
</html>
