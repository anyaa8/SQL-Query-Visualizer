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
        color: yellow;
    }
    </style>
<body>
    <div class="head">
        <p>IMPLICIT JOIN </p>
    </div>
    <div class="q1">
        <div class="qs">
            <p>Ques. Retrieve SSN and Department name for all employees.</p>
            <p>SELECT e.Ssn, d.Dname FROM Employee e, Department d where e.Dno = d.Dnumber;</p><br>
        </div>
    <?php
    $conn = mysqli_connect("localhost", "root", "","project");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT e.Ssn, d.Dname FROM employee e, department d where e.Dno = d.Dnumber";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    echo "<table>";
    echo "<tr>
    <td>" . "Ssn" . "&nbsp"."</td>
    <td>" . "Dname" ."&nbsp"."</td>

    </tr>";
    while($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>" . $row["Ssn"] . "&nbsp"."</td>
    <td>" . $row["Dname"] ."&nbsp"."</td>
    
    </tr>" ;
} 
echo "</table>";
    }
else { echo "0 results"; }
    $conn->close();
    ?>
</div>
<form action="query22.php">
    <div class="nm">
        <div class="n1">
            <button>Next Query</button>
        </div>
    </div>
</form>
</body>
</html>