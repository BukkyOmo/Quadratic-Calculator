<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
     integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" 
     crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="quadratic.css">
    <title>Quadratic Equation</title>
</head>
<body>
<div class= "row justify-content-center mt-4">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header" style="background-color:yellow">
                 Please Enter your values
                    </div>
                        <div class="card-body">
                            <?php
                                if (isset($_POST['submit'])){
                                    $a = $_POST['a'];
                                    $b = $_POST['b'];
                                    $c = $_POST['c'];
                                    $d = (($b * $b) - (4 * $a * $c));
                                    $e = (2 * $a);
                                if($d < 0){
                                    echo "<div class='alert alert-danger'>".'x cannot be calculated'."</div>";
                                }
                                else if($d == 0) {
                                    echo "<div class='alert alert-info'>" ."x= ".(-$b / $e)."</div>";
                                }
                                else if($d > 0) {
                                    echo "<div class='alert alert-danger'>" ."x= ".((-$b + sqrt($d)) / ($e))."</div>";
                                    echo "<div class='alert alert-primary'>" ."x= ".((-$b - sqrt($d)) / ($e))."</div>";
                                }
                            }
                            ?> 
                     <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="number" name="a" class="form-control" value="<?php echo $_POST['a']; ?>" placeholder="Enter value a" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="number" name="b" class="form-control" value="<?php echo $b ?>" placeholder="Enter value b" required="required">
                            </div>
                        </div>      
                        <div class="form-group">
                            <div class="input-group">
                                <input type="number" name="c" class="form-control" value="<?php echo $c ?>" placeholder="Enter value c" required="required">
                            </div>
                        </div>     
                        <div class="form-group">
                            <input type="submit" name="submit" value="Submit" class="btn btn-success btn-block">
                        </div>        
                    </form>
                 </div>
            </div>
        </div>
    </div>
</body>
</html>