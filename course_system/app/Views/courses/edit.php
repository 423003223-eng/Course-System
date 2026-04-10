<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Course Form</title>
    <style>
        body{
            display:flex;
            justify-content:center;
            background-color: 	#F0EAD6;
        }
        form{
            background-color:#FFFFFF;
            display:flex;
            flex-direction:column;
            border:4px solid #00AB41;
            border-radius: 30px;
            width: 40%;
            margin: 5vw;
            padding: 2%;
        }
        label{
            margin-bottom:5px;
        }
        input[type=text]{
            border: 2px solid #8BC8A4;
            border-radius: 10px;
            width:96%;
            min-height:30px;
            padding:0% 2%;
        }
        input[type=text]:hover, input[type=text]:focus{
            border: 2px solid #00AB41;
            outline:none;
        }
        input[type=submit], input[type=button]{
            border-radius: 20px;
            padding: 1vw;
            margin: 1.5vw 1.5vw;
            min-width: 10em;
            min-height: 4em;
            width: 10vw;
            background-color: #00AB41;
            color:#FFFFFF;
            border: 2px solid #00AB41;
            cursor: pointer;
        }
        input[type=submit]:hover, input[type=button]:hover{
            background-color: #FFFFFF;
            color: #00AB41;
        }
        #buttonContainer{
            width:100%;
            display:flex;
            justify-content:center;
        }
        span{
            color: red;
        }
    </style>
</head>
<body>
    <form action="/courses/update/<?= esc($course['id']) ?>" method="POST">
        <h2>Update Course Details</h2>
        <label for="course_name">Course Name:</label>
        <input type="text" id="course_name" name="course_name" value = "<?= esc($course['course_name']) ?>">
        <br>
        <label for="course_code">Course Code:</label>
        <input type="text" id="course_code" name="course_code" value = "<?= esc($course['course_code']) ?>">
        <br>
        <label for="units">Units:</label>
        <input type="text" id="units" name="units" value = "<?= esc($course['units']) ?>">
        <br>
        <label for="instructor">Instructor:</label>
        <input type="text" id="instructor" name="instructor" value = "<?= esc($course['instructor']) ?>">
        <br>
        <?php if (!empty($errors)): ?>
            <?php foreach ($errors as $error): ?>
                <span>*<?= esc($error) ?></span>
            <?php endforeach ?>
        <?php endif ?>
        <div id="buttonContainer">\
        <a href="/courses/"><input type="button" value="Back"></a>
        <input type="submit" name="update" value="Update">
        </div>
    </form>
</body>
</html>