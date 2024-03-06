<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* CSS styles here */
        .success {
            color: blue;
            font-size: 24px;
            padding-left: 50px;
        }

        /* Style for the table */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        /* Style for table header */
        th {
            background-color: #f2f2f2;
            color: #333;
            font-weight: bold;
            padding: 8px;
            border: 1px solid #ddd;
        }

        /* Style for table rows */
        td {
            padding: 8px;
            border: 1px solid #ddd;
        }

        /* Style for alternate rows */
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="col-md-10">
        <?php 
        require_once("../include/connection.php");
        require_once('../include/function.php');
        
        if(isset($_POST['search'])){ 
            $searchLname = strtoupper($_POST['search']);
            $result=$fc->getStud($searchLname);
        } else {
            $result = $fc->viewStudents();
        }
        ?>
        <br>
        <form action="" method="POST">
            <div class="col-md-6">
                <input type="text" name="search" class='form-control' placeholder="Search by Last Name" value="">
            </div>
            <div class="col-md-6 text-left">
                <button class="btn">Search</button>
            </div>
        </form>
        <br><br><br>
        <table class="td">
            <tr>
                <th>PROF ID</th>
                <th>FIRST NAME</th>
                <th>MIDDLE NAME</th>
                <th>LAST NAME</th>
                <th>Gender</th>
                <th>Actions</th> <!-- New column for actions -->
            </tr>
            <?php while($row = mysqli_fetch_object($result)) { ?>
            <tr>
                <td><?php echo $row->PROF_ID ?></td>
                <td><?php echo $row->FIRSTNAME ?></td>
                <td><?php echo $row->MIDDLENAME ?></td>
                <td><?php echo $row->LASTNAME?></td>
                <td><?php echo $row->GENDER?></td>
                <td>
                    <!-- Edit button with link to edit page -->
                    <a href="?page=edit&searchpage=<?php echo $row->PROF_ID; ?>" class="btn btn-primary">Edit</a>
                    <!-- Delete button with form submission -->
                    <form action="delete.php" method="POST" style="display:inline;">
                        <input type="hidden" name="prof_id" value="<?php echo $row->PROF_ID; ?>">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </table>
        <br /><br /><br /><br /><br /><br />
    </div>
</body>
</html>
