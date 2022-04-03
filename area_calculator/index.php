<?php 
    include_once './function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php

        /**
         * currency converter basic
         */
        $height = null;
        $width = null;
        $shape = null;
        
        

        if( isset($_POST['calculate']) ){

            //get form values

            $height = $_POST['height'];
            $width = $_POST['width'];
            $shape = $_POST['shape'];

             if( empty($height) || empty($shape)){

                $msg =  "<p class=\"alert alert-danger d-flex justify-content-between\"> Necessary fields are empty ! <button class=\"btn-close\" data-bs-dismiss=\"alert\"></button></p>"; 
    
            }else{

                

                $msg = area($shape, $height, $width);



                // $msg =  "<p class=\"alert alert-success d-flex justify-content-between\"> Data stable! <button class=\"btn-close\" data-bs-dismiss=\"alert\"></button></p>"; 

                
              

            } 
           

            



                
        }

    ?>



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="my-3">
                    <div class="card shadow">
                        <img src="" alt="">
                        <div class="card-body">
                            <h2>Area Calculator</h2>
                            <?php echo $msg ?? ''; ?>
                            <hr>
                            <form action="" method="POST">

                                <div class="my-3">
                                    <label for="">Shape</label>
                                    <select name="shape" class="form-control" id="">
                                        <option value="select">-select-</option>
                                        <option value="rectangle">Rectangle</option>
                                        <option value="square">Square</option>
                                        <option value="triangle">Triagnle</option>
                                        <option value="circle">Circle</option>
                                    </select>
                                </div>

                                <div class="my-3">
                                    <label for="">Height/(Radius for circle)</label>
                                    <input name="height" type="text" class="form-control">
                                </div>
                                <div class="my-3">
                                    <label for="">Width</label>
                                    <input name="width" type="text" class="form-control">
                                </div>
                                
                                <div class="my-3">
                                    <input name="calculate" type="submit" class="btn btn-primary" value="Calculate">
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>