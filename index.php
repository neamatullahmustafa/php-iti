<?php  
//  $_varname = $_REQUEST['name'];
    // $_varemail = " ";
//?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1>neamatullah task 3 php</h1>
    <p>* required field</p>
    <form action="<?php $_PHP_SELF ?>" method="POST" class="container">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">name*</label>
            <input type="text" class="form-control" value="<?php
                                                            if (!empty($_REQUEST['name'])) 
                                                                echo   $_REQUEST['name'];
                                                            ?>" name="name" id="exampleFormControlInput1">
            <?php
            if (isset($_REQUEST['submit'])) {
                if (empty($_REQUEST['name'])) {
                    echo "Your name is required" . "<br/>";
                }
            }
            ?>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">e-mail*</label>
            <input type="email" class="form-control" value="<?php
                                                            if (!empty($_REQUEST['email'])) 
                                                                echo   $_REQUEST['email'];
                                                            ?>"name="e-mail" id="exampleFormControlInput2">
            <?php
            if (isset($_REQUEST['submit'])) {
                if (empty($_REQUEST['e-mail'])) {
                    echo "Your e-mail is required" . "<br/>";
                }
            }
            ?>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput3" class="form-label">group #</label>
            <input type="number" class="form-control" value="<?php
                                                            if (!empty($_REQUEST['group'])) 
                                                                echo   $_REQUEST['group'];
                                                            ?>"name name="group" id="exampleFormControlInput3">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Class Details</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" value="<?php
                                                            if (!empty($_REQUEST['details'])) 
                                                                echo   $_REQUEST['details'];
                                                            ?>" name="details" rows="3"></textarea>
        </div>
        <label>gender*</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="<?php
                                                            if ($_REQUEST['gender']=="male") 
                                                                echo   "checked";
                                                            ?>" value="male" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                male
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="<?php
                                                            if ($_REQUEST['gender']=="female") 
                                                                echo   "checked";
                                                            ?>" value="female" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                female
            </label>
        </div>
        <?php
        if (isset($_REQUEST['submit'])) {
            if (!isset($_REQUEST['gender'])) {
                echo "Your gender is required" . "<br/>";
            }
        }
        ?>
        <label class="form-check-label" for="select">
            courses
        </label>
        <select class="form-select form-select-lg mb-3 " id="select" name="course[]" 
        multiple aria-label=".form-select-lg example">
            <option value="php">php</option>
            <option value="Java Script">Java Script</option>
            <option value="MySQL">MySQL</option>
            <option value="HTML">HTML</option>
        </select>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php
                                                            if ($_REQUEST['agree']=="agree") 
                                                                echo   "checked";
                                                            ?>"  name="agree" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                agree
            </label>
            <?php
            if (isset($_REQUEST['submit'])) {
                if (!isset($_REQUEST['agree'])) {
                    echo "<br/>" . "You must be agree" . "<br/>";
                }
            }
            ?>
        </div>
        <input class="btn btn-primary" type="submit" name="submit"></input>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
<?php

if (
    !empty($_REQUEST['name'])
    && !empty($_REQUEST['e-mail'])
    && isset($_REQUEST['gender'])
    && isset($_REQUEST['agree'])
    && isset($_REQUEST['submit'])
) {
    echo "Welcome " .  $_REQUEST['name'] . "<br/>";
    echo "Your email is " .  $_REQUEST['e-mail'] . "<br/>";
    echo "Your group is " .  $_REQUEST['group'] . "<br/>";
    echo "Your class is " .  $_REQUEST['details'] . "<br/>";
    echo "Your gender is " .  $_REQUEST['gender'] . "<br/>";
    echo "Your course is ";
    $_varemail = " ";
    foreach ($_REQUEST['course'] as $c) {
        print_r($c);
        echo " ";
    }

   
    // $_varemail = $_REQUEST['e-mail'];
    // $_varname = $_REQUEST['name'];
    // $_varname = $_REQUEST['name'];
    
    // echo "Your agree is " .  $_REQUEST['agree'] . "<br/>";
}


?>