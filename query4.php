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
        <p>'INSERT' Query</p>
    </div>
    <div class="q1">
        <div class="qs">
        <p>Ques. Insert a new row in Dept_Locations table.</p>
            <p>INSERT INTO DEPT_LOCATIONS (Dnumber,Dlocation) VALUES (1, 'Delhi');</p><br>
        </div>
        
    <?php
    $conn = mysqli_connect("localhost", "root", "","project");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sqll = "INSERT INTO DEPT_LOCATIONS (Dnumber,Dlocation) VALUES (1, 'Delhi')";
    $result = $conn->query($sqll);
    $sql = "SELECT * FROM dept_locations";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    echo "<table>";
    echo "<tr>
    <td>" . "Dnumber" . "&nbsp"."</td>
    <td>" . "Dlocation" ."&nbsp"."</td>
    </tr>" ;
    while($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>" . $row["Dnumber"] . "&nbsp"."</td>
    <td>" . $row["Dlocation"] ."&nbsp"."</td>
    </tr>" ;
}
    echo "</table>";
    } else { echo "0 results"; }

    $sqlll = "DELETE FROM DEPT_LOCATIONS WHERE Dnumber=1 AND Dlocation='Delhi'";
    $result = $conn->query($sqlll);
    $conn->close();

    ?>
</div>
<form action="query5.php">
    <div class="nm">
        <div class="n1">
            <button>Next Query</button>
        </div>
    </div>
</form>
</body>
</html>