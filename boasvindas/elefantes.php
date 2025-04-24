<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elefantes</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-8 col-md-6">
        <form method="post">
            <div class="form-group row">
                <div class="col-12 col-sm-6">
                    <input type="text" name="elefante" id="elefante" class="form-control form-control-lg" placeholder="Qntd. de elefantes">

                </div>
                <div class="col-12 col-sm-6">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Cante...
                    </button>
                </div>
            </div>
         </form>
       </div>
    </div>
    <div class="row mt-5 justify-content-center">
        <div class="col-12 col-sm-10 alert alert-info">
           <?php
           if(isset($_POST['elefante'])) {
                for($j = 1; $j <= $_POST['elefante']; $j++) {
                    if($j % 2 == 0) {
                        echo '<p class="text-dark">'.$j.' elefantes ';
                        for($i = 0; $i < $j; $i++) {
                            echo " incomodam";
                        }
                        echo ' muito mais...</p>';
                    } else if($j == '1'){
                        echo '<p class="text-dark">'.$j.' elefante incomoda muita gente...</p>';
                    } else {
                        echo '<p class="text-dark">'.$j.' elefantes incomodam muita gente...</p>';
                    }
                }
           } else {
             echo '<p class="text-dark">Selecione a quantidade de elefantes...</p>';
           }
           ?>
        </div>
    </div>
</div>
</body>
</html>