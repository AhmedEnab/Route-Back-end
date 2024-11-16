<?php
if (isset($_COOKIE['bgColor'])) {
    $bgColor = $_COOKIE['bgColor'];
} else {
    // Default color if cookie is not set
    $bgColor = 'blue';
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Change Background Color</title>
    <style>
        
        body {
            display: flex;
            justify-content: center;
            background-color: <?php echo $bgColor; ?>;
        }
        body div{
            background-color: teal;
            width: 50%;
            padding: 20px;
            margin-top: 100px;
            border-radius: 10px;
            text-align: center;
            color: white;
            font-size: larger;
            font-weight: 700;
            display: flex;
            justify-content: center;
        }
        label{
            margin-left: -50px ;
            font-size: larger;
        }
        select{
            padding: 10px;
            margin-top: 20px;
            font-size: large;
            border-radius: 10px;
        }
        button{
            background-color: orange;
            color: white;
            padding: 10px;
            margin-top: 20px;
            font-size: large;
            border-radius: 10px;
            display: block;
        }
    </style>
</head>

<body>
    <div >
        <form action="handelForm.php" method="post">
        <label for="color">Choose a color:</label>
        <select name="color">
            <option value="green">green</option>
            <option value="red">red</option>
            <option value="blue">blue</option>
            <option value="violet">violet</option>
        </select>
        <button type="submit" name="submit">Change Color</button>
    </form>
    </div>
    
</body>

</html>