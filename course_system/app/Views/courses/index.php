<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses List</title>
    <style>
        body {
            background-color: 	#F0EAD6;
            display: flex;
            justify-content: center;
        }
        h1,h2,h3 {
            text-align: center;
        }
        table {
            width: 95%;
            margin: 0 auto;
            border-collapse: collapse;
            border: 1px solid #00AB41; 
        }
        tr:nth-child(even) {
            background-color: #FFFFFF;
        }
        tr:nth-child(odd) {
            background-color: #f2f2f2;;
        }
        th{
            background-color: #00AB41;
            color: #FFFFFF;
            padding: 10px;
        }
        td {
            padding: 1px;
            text-align: center;
        }
        tr:hover{
            background-color:#5CED73;
        }
        #coursesTable {
            overflow-x: auto;
        }
        #buttonContainer{
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        button{
            border-radius: 20px;
            padding: 1vw;
            margin: 1vw 0vw;
            min-width: 10em;
            min-height: 4em;
            width: 10vw;
            background-color: #00AB41;
            color:#FFFFFF;
            border: 2px solid #00AB41;
            cursor: pointer;
        }
        button:hover{
            background-color: #FFFFFF;
            color: #00AB41;
        }
        #overallContainer{
            border: 3px solid #00AB41;
            background-color: #FFFFFF;
            border-radius: 10px;
            width: 90%;
            margin: 2vw;
        }
        #searchContainer{
            display: flex;
            justify-content: center;
            margin-bottom: 1vw;
        }
    </style>
</head>
<body>
    <div id="overallContainer">
        <h1>Course Management System</h1>
        <h2>Courses List</h2>
        <div id="searchContainer">
            <form action="/courses" method="GET">
                <input type="text" name="keyword" value="<?= esc($searchKeyword) ?>" placeholder="Search courses...">
                <button type="submit">Search</button>
            </form>
        </div>
        <div id="coursesTable">
            <?php if (empty($courses)):?>
                <h3>No courses found in the record</h3>
            <?php else: ?>
                <table>
                    <tr>
                        <th>Course ID</th>
                        <th>Course Name</th>
                        <th>Course Code</th>
                        <th>Units</th>
                        <th>Instructor</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php foreach($courses as $c): ?>
                        <tr>
                            <td><?= esc($c['id']); ?></td>
                            <td><?= esc($c['course_name']); ?></td>
                            <td><?= esc($c['course_code']); ?></td>
                            <td><?= esc($c['units']); ?></td>
                            <td><?= esc($c['instructor']); ?></td>
                            <td><a href="/courses/edit/<?= esc($c['id']); ?>"><button>Update</button></a></td>
                            <td><a href="/courses/delete/<?= esc($c['id']); ?>"><button>Remove</button></a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
        </div>
        <div id='buttonContainer'>
            <a href="/courses/create"><button>Add Course</button></a>
        </div>
    </div>
</body>
</html>