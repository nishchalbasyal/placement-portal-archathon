<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #f1{
            background-color: black;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <form action="result.php" method="post">
<div class="container mt-sm-5 my-1">
                <div class="questions">  
                <p>1.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vel varius justo, sit amet imperdiet nisl. Sed id feugiat purus, sed sollicitudin sem. </p>
                A. <input type="radio" name="q1" id="value1">gravida<br>
                B. <input type="radio" name="q1" id="value2">vestibulum  <br>
                C. <input type="radio" name="q1" id="value3">imperdiet  <br>
                D. <input type="radio" name="q1" id="value4">volutpat  <br><br>
                <hr>

                </div>
                <div class="questions">  
                <p>2.Sed blandit eu mi nec accumsan. Cras vel tincidunt ipsum. Morbi lobortis convallis augue, in bibendum lorem. </p>
                A. <input type="radio" name="q2" id="value1">Aliquam  <br>
                B. <input type="radio" name="q2" id="value2">convallis  <br>
                C. <input type="radio" name="q2" id="value3">nunc  <br>
                D. <input type="radio" name="q2" id="value4">vestibulum  <br><br>
                <hr>

                </div>
                
                <div class="questions">  
                <p>3.Phasellus enim quam, semper a nisi a, lacinia ullamcorper eros. Aliquam lobortis, sapien ut interdum accumsan </p>
                A. <input type="radio" name="q3" id="value1">quis  <br>
                B. <input type="radio" name="q3" id="value2">Nullam  <br>
                C. <input type="radio" name="q3" id="value3">varius  <br>
                D. <input type="radio" name="q3" id="value4">posuere  <br><br>
                <hr>
                </div>

                <div class="questions">  
                <p>4.Maecenas quis tellus ut ante porttitor convallis. Duis a justo tortor. Proin consequat volutpat gravida. Vestibulum </p>
                A. <input type="radio" name="q4" id="value1">vehicula  <br>
                B. <input type="radio" name="q4" id="value2">Duis  <br>
                C. <input type="radio" name="q4" id="value3">mi <br>
                D. <input type="radio" name="q4" id="value4">faucibus <br><br>
                <hr>
                </div>
                <div class="ml-auto mr-sm-5"> <button class="btn btn-success">Submit</button> </div>
                </div>
</div>
    </form>
    <?php  include('footer.php')  ?>
                

</body>
</html>