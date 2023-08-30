<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    html{
        background-image: url('images/bg2.jpg');
  background-size: cover;
  background-position: center;
 
    }
    .head{
        text-align: center;
        background-color: blue;
        color: pink;
        font-weight: bold;
        padding: 1px;
        margin: 10px 25vw;
        font-style: italic;
        font-size: 2.4vw;
        border-radius: 12px;
    }
    .q1{
       /* background-color:lightblue;*/
        margin:6vh 0vw 0vh 0vw;
        padding:0px 64px ;
        color:white;
    }
    table{
        border:1px solid;
    }
    table td{
        border:1px solid;
        padding:22px;
    }
    .universh{
        display:flex;
    }
    .universh p{
        padding:10px;
    }
    .n1 button{
        background-color: #99FFCC;
        font-family: 'Roboto', sans-serif;
        margin: 20px 80px;
       width: 9vw;
        border-radius: 10px;
        font-size: 17px;
        cursor: pointer;
    }
    .nm{
        /* background-color:yellow; */
        padding:2vw;
        margin:0px 10vw;
        /* width:auto ; */
    }
    .qs p{
        margin:20px 0px 0px 0px;
        color:yellow;
    }
    </style>
<body>
    <div class="head">
        <p>'SELECT' Query </p>
    </div>
    
    <div class="q1">
    <div class="qs">
    <p>Ques. Display all the details of all employees working in the company.</p>
            <p>SELECT * FROM EMPLOYEE</p><br>
        </div>
    <?php
    $conn = mysqli_connect("localhost", "root", "","project");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM employee";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                echo "<table>";
                echo "<tr><td>" . "Fname" . "&nbsp"."</td><td>" . "Minit" ."&nbsp"."</td><td>" . "Lname" . "&nbsp"."</td><td>" . "Ssn" ."&nbsp"."</td><td>". "Bdate" . "&nbsp"."</td><td>". "Address" . "&nbsp"."</td><td>". "Sex" . "&nbsp"."</td><td>". "Salary" . "&nbsp"."</td><td>". "Super_ssn" . "&nbsp"."</td><td>". "Dno" . "&nbsp". "</td></tr>" ;

                while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["Fname"] . "&nbsp"."</td><td>" . $row["Minit"] ."&nbsp"."</td><td>" . $row["Lname"] . "&nbsp"."</td><td>" . $row["Ssn"] ."&nbsp"."</td><td>". $row["Bdate"] . "&nbsp"."</td><td>". $row["Address"] . "&nbsp"."</td><td>". $row["Sex"] . "&nbsp"."</td><td>". $row["Salary"] . "&nbsp"."</td><td>". $row["Super_ssn"] . "&nbsp"."</td><td>". $row["Dno"] . "&nbsp".
                "</td></tr>" ;
            }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
</div>
<form action="query2.php">
    <div class="nm">
        <div class="n1">
            <button>Next Query</button>
        </div>
    </div>
</form>
</body>
</html>