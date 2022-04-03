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
         * Marriage age check form submit
         */
        $msg = '';
        $name = '';
        $year = null;
        $gender = null;
        

        if( isset($_POST['check']) ){

            //get form values

            $name = $_POST['name'];
            $year = $_POST['year'];
            $gender = $_POST['gender'] ?? '';

             if( empty($name) || empty($year) || empty($gender) ){

                $msg =  "<p class=\"alert alert-danger d-flex justify-content-between\"> All fields are required ! <button class=\"btn-close\" data-bs-dismiss=\"alert\"></button></p>"; 
    
            }else{

                $msg = marriageAgeCal($name, $year , $gender);



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
                            <h2>Marriage Age Checker</h2>
                            <?php echo $msg ?? ''; ?>
                            <hr>
                            <form action="" method="POST">
                                <div class="my-3">
                                    <label for="">Name</label>
                                    <input name="name" type="text" class="form-control">
                                </div>
                                <div class="my-3">
                                    <label for="">Birth Year</label>
                                    <input name="year" type="text" class="form-control">
                                </div>
                                <div class="my-3">
                                    <label for="">Gender</label>
                                    <input name="gender" type="radio" value="male" id="male"><label for="male">Male</label>
                                    <input name="gender" type="radio" value="female" id="female"><label for="female">Female</label>
                                </div>
                                <div class="my-3">
                                    <input name="check" type="submit" class="btn btn-primary" value="Check">
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