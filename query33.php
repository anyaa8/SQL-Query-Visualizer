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
    .main {
        background-color: blue;
        padding: 12px;
        font-size: 24px;
        text-align: center;
        margin: 0px 22vw;
        border: 3px solid black;
        border-radius: 24px;
    }

    .contentmain {
        display: flex;
        background-color: lightgrey;
        border: 2px solid grey;
        border-radius: 10px;
        margin: 8vh 3vw;
    }

    .contentfi {
        /* background-color: orange; */
        padding: 24px;
        width: 60%;
    }

    .contentfi button {
        /* background-color: orange; */
        padding: 12px 24px;
        margin: 0px 20px;
        border-radius: 10px;
        /* width: 40%; */
    }

    #b1:hover {
        padding: 13px 25px;
        cursor: pointer;
    }

    #b2:hover {
        padding: 13px 25px;
        cursor: pointer;
    }

    .contentse {
        background-color: grey;
        padding: 24px;
        width: 100%;
    }

    .secondcon {
        display: none;
    }

    #t2 {
        display: block;
    }

    #t1 {
        display: none;
    }

    .contentse button{
        padding: 10px;
        border-radius: 10px;
        margin: 0px 10px 20px 10px;
    }
    .contentse button:hover{
        padding: 11px;
    }
    .b3 {
        float: right;
        /* background-color: yellow; */
    }
    .b3 button{
        padding: 10px;
        border-radius: 10px;
    }
    .b3 button:hover{
        padding: 11px 11px;
        cursor: pointer;
    }
    table{
        border:1px solid;
        margin: 20px;
    }
    table td{
        border:1px solid;
        padding:10px;
    }
</style>
<script>
    function trig1() {
        document.getElementById("fcon").style.display = "block";
        document.getElementById("scon").style.display = "none";
    }
    function trig2() {
        document.getElementById("scon").style.display = "block";
        document.getElementById("fcon").style.display = "none";
    }
    function emptab() {
        document.getElementById("t1").style.display = "block";
        document.getElementById("t2").style.display = "none";
    }
    function logtab() {
        document.getElementById("t2").style.display = "block";
        document.getElementById("t1").style.display = "none";
    }
</script>

<body>
    <div class="main">
        <p>Creating a DELETE trigger </p>
    </div>
    <div class="contentmain">
        <div class="contentfi">
            <button onclick="trig1()" id="b1">DELETE Trigger Code</button>
            <!-- <br> -->
            <button onclick="trig2()" id="b2">CREATE Table Code</button>
            <div class="firstcon" id="fcon">
                <p>mysql>
                    <BR>
                    DELIMITER $$
                    <BR>
                    CREATE TRIGGER 'deleteemp' BEFORE DELETE
                    <BR>
                    ON employee FOR EACH ROW
                    <BR>
                    BEGIN
                    <BR>
                    <BR>
                    Insert into logsemp VALUES(
                    <BR>
                    OLD.Fname
                    <BR>
                    ,OLD.Minit
                    <BR>
                    ,OLD.Lname
                    <BR>
                    ,OLD.Ssn
                    <BR>
                    ,OLD.Bdate
                    <BR>
                    ,OLD.Address
                    <BR>
                    ,OLD.Sex
                    <BR>
                    ,OLD.Salary
                    <BR>
                    ,OLD.Super_ssn
                    <BR>
                    ,OLD.Dno
                    <BR>
                    ,'Before Update'
                    <BR>
                    )
                    <BR>
                    <BR>
                    END$$
                    <BR>
                    DELIMITER ;
                </p>
            </div>
            <div class="secondcon" id="scon">
                <p>CREATE TABLE logsemp (
                    <BR>
                    Fname VARCHAR(255),
                    <BR>
                    Minit CHAR(1),
                    <BR>
                    Lname VARCHAR(255),
                    <BR>
                    Ssn INT,
                    <BR>
                    Bdate DATE,
                    <BR>
                    Address VARCHAR(255),
                    <BR>
                    Sex CHAR(1),
                    <BR>
                    Salary INT,
                    <BR>
                    Super_ssn INT,
                    <BR>
                    Dno INT,
                    <BR>
                    action VARCHAR(50)
                    <BR>
                    );
                </p>
            </div>
        </div>
        <div class="contentse">
            <!-- <p>Result</p> -->
            <button onclick="logtab()">Logs Employee Table</button>
            <button onclick="emptab()">Employee Table</button>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "project");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sqlins = "DELETE FROM employee WHERE Ssn='888665555'";
            $result = $conn->query($sqlins);
            $sql = "SELECT * FROM employee";
            $result = $conn->query($sql);
            ?>
            <div class="table1" id="t1">
                <?php

                if ($result->num_rows > 0) {
                    echo "<table>";
                    echo "<tr><td>" . "Fname" . "&nbsp" . "</td><td>" . "Minit" . "&nbsp" . "</td><td>" . "Lname" . "&nbsp" . "</td><td>" . "Ssn" . "&nbsp" . "</td><td>" . "Bdate" . "&nbsp" . "</td><td>" . "Address" . "&nbsp" . "</td><td>" . "Sex" . "&nbsp" . "</td><td>" . "Salary" . "&nbsp" . "</td><td>" . "Super_ssn" . "&nbsp" . "</td><td>" . "Dno" . "&nbsp" . "</td></tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["Fname"] . "&nbsp" . "</td><td>" . $row["Minit"] . "&nbsp" . "</td><td>" . $row["Lname"] . "&nbsp" . "</td><td>" . $row["Ssn"] . "&nbsp" . "</td><td>" . $row["Bdate"] . "&nbsp" . "</td><td>" . $row["Address"] . "&nbsp" . "</td><td>" . $row["Sex"] . "&nbsp" . "</td><td>" . $row["Salary"] . "&nbsp" . "</td><td>" . $row["Super_ssn"] . "&nbsp" . "</td><td>" . $row["Dno"] . "&nbsp" .
                            "</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }
                ?>
            </div>
            <div class="table2" id="t2">
                <?php
                $sqlo = "SELECT * FROM logsemp";
                $result = $conn->query($sqlo);
                if ($result->num_rows > 0) {
                    // output data of each row
                    echo "<table>";
                    echo "<tr><td>" . "Fname" . "&nbsp" .
                        "</td><td>" . "Minit" . "&nbsp" .
                        "</td><td>" . "Lname" . "&nbsp" .
                        "</td><td>" . "Ssn" . "&nbsp" . "</td><td>"
                        . "Bdate" . "&nbsp" . "</td><td>" . "Address"
                        . "&nbsp" . "</td><td>" . "Sex" . "&nbsp"
                        . "</td><td>" . "Salary" . "&nbsp"
                        . "</td><td>" . "Super_ssn" . "&nbsp"
                        . "</td><td>" . "Dno" . "&nbsp"
                        . "</td><td>" . "action" . "&nbsp"
                        . "</td></tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["Fname"] . "&nbsp" . "</td><td>" . $row["Minit"] . "&nbsp" . "</td><td>" . $row["Lname"] . "&nbsp" . "</td><td>" . $row["Ssn"] . "&nbsp" . "</td><td>" . $row["Bdate"] . "&nbsp" . "</td><td>" . $row["Address"] . "&nbsp" . "</td><td>" . $row["Sex"] . "&nbsp" . "</td><td>" . $row["Salary"] . "&nbsp"
                            . "</td><td>" . $row["Super_ssn"] . "&nbsp"
                            . "</td><td>" . $row["Dno"] . "&nbsp"
                            . "</td><td>" . $row["action"] . "&nbsp" .
                            "</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }
                ?>
            </div>
            <?php
            $sqlll = "INSERT INTO employee (Fname,Minit,Lname,Ssn,Bdate,Address,Sex,Salary,Super_ssn,Dno) VALUES ('James', 'E','Borg',888665555,'1937-11-10','450 Stone, Houston, TX', 'M', 55000,0,1)";
            $result = $conn->query($sqlll);
            $sqllog = "Delete from logsemp";
            $result = $conn->query($sqllog);
            $conn->close();
            ?>
            <form action="main.php">
                <div class="b3">
                    <button>Home</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>