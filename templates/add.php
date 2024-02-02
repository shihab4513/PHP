<?php

//Get method
//if (isset($_GET['submit']))
//{
//    echo $_GET['email'];
//    echo $_GET['title'];
//    echo $_GET['ingredient'];
//
//}

//post method do the same as get method but its more secure
if (isset($_POST['submit']))
{
//    To safeguard against XSS attack we should coat everything we echo 'htmlspecialchars' function
//    echo htmlspecialchars($_POST['email']) ;
//    echo htmlspecialchars($_POST['title']);
//    echo htmlspecialchars($_POST['ingredient']);
//check mail
    if (empty($_POST['email']))
    {
        echo 'An email is required <br/>';
    }
    else{
//        echo htmlspecialchars($_POST['email']) ;
        //        filtration technique to validate input
        $email=$_POST['email'];
        if (!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            echo 'Email address must be valid email address<br/>';
        }
    }
    //check title
    if (empty($_POST['title']))
    {
        echo 'A title is required <br/>';
    }
    else{
//        echo htmlspecialchars($_POST['title']) ;
        $title=$_POST['title'];
        if (!preg_match('/^[a-zA-Z\s]+$/',$title))
        {
            echo 'Title must be letters and spaces only';
        }

    }
    //check ingredient
    if (empty($_POST['ingredient']))
    {
        echo 'An least one ingredient is required <br/>';
    }
    else{
//        echo htmlspecialchars($_POST['ingredient']) ;
        $ingredient=$_POST['ingredient'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$ingredient))
        {
            echo 'Ingredients must be comma separated list';
        }
    }



}
//end of check





?>




<!doctype html>
<html>
<?php include 'header.php';?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form action="add.php" class="white" method="POST">
        <label for="">Your Email: </label>
        <input type="email" name="email">
        <label for="">Pizza title:  </label>
        <input type="text" name="title">
        <label for="">Ingredients (comma separated) </label>
        <input type="text" name="ingredient">
         <div class="center">
             <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
         </div>

    </form>
</section>

<?php include 'footer.php';?>


</html>
