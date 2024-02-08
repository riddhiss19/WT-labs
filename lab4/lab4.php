<?php

if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    switch($operation){
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'sub':
            $result = $num1 - $num2;
            break;
        case 'mul':
            $result = $num1 * $num2;
            break;
        case 'div':
            if($num2 == 0){
                echo '<div class="alert alert-danger">Division by zero is not allowed.</div>';
            }else{
                $result = $num1 / $num2;
            }
            break;
    }

    echo '<div class="alert alert-success">Result: '.$result.'</div>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label for="num1">Enter 1st number:</label>
                        <input type="number" id="num1" name="num1" class="form-control">

                        <label for="num2">Enter 2nd number:</label>
                        <input type="number" id="num2" name="num2" class="form-control">
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" name="submit" value="add" class="btn btn-primary m-1">add</button>
                        <button type="submit" name="submit" value="sub" class="btn btn-primary m-1">sub</button>
                        <button type="submit" name="submit" value="mul" class="btn btn-primary m-1">mul</button>
                        <button type="submit" name="submit" value="div" class="btn btn-primary m-1">div</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>