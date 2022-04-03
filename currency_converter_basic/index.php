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
        $amount = '';
        $currency = null;
        
        

        if( isset($_POST['convert']) ){

            //get form values

            $amount = $_POST['amount'];
            $currency = $_POST['currency'];

             if( empty($amount) || empty($currency) ){

                $msg =  "<p class=\"alert alert-danger d-flex justify-content-between\"> All fields are required ! <button class=\"btn-close\" data-bs-dismiss=\"alert\"></button></p>"; 
    
            }else{

                $msg = currencyConverterBasic($amount, $currency);



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
                            <h2>Currency Converter Basic</h2>
                            <?php echo $msg ?? ''; ?>
                            <hr>
                            <form action="" method="POST">
                                <div class="my-3">
                                    <label for="">Amount</label>
                                    <input name="amount" type="text" class="form-control">
                                </div>
                                <div class="my-3">
                                    <label for="">Currency</label>
                                    <select name="currency" class="form-control" id="">
                                        <option value="select">-select-</option>
                                        <option value="USD">USD</option>
                                        <option value="CAD">CAD</option>
                                        <option value="POUND">POUND</option>
                                        <option value="EURO">EURO</option>
                                        <option value="WON">WON</option>
                                    </select>
                                </div>
                                
                                <div class="my-3">
                                    <input name="convert" type="submit" class="btn btn-primary" value="Convert">
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