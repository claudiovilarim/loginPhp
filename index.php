<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
<!-- 
    https://www.youtube.com/watch?v=GX7eWpBSHzs&ab_channel=ProgramadorEspartano
 -->

    <title>Document</title>
</head>


<body class="bg-info">
    <div class="container" style="max-width: 440px;">
        <div class="bg-white rounded m-3 p-3">
            <h3 class="text-center my-3">Faça seu Login</h3>

            <form action="login.php" method="POST">
                <div class="m-3">
                    <label for="">E-mail</label>
                    <input name="email" class="form-control mb-2" type="email" required>
                </div>
                <div class="m-3">
                    <label for="">Senha</label>
                    <input name="senha" class="form-control mb-2" type="password" required>
                </div>
                <div class="d-grid gap-2 ">
                    <button class="btn btn-primary m-3 mb-2">Login</button>
                </div>
            </form>
        </div>
    </div>


</body>
</html>