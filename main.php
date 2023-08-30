<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>


  @import url('https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Jost&family=Lato:wght@100;300&family=Roboto&family=Slabo+27px&family=Zilla+Slab:ital@1&display=swap');
html{
        background-image: url('images/bg.jpg');
  background-size: cover;
  background-position: center;
 
    }
    .mh{
        font-family: 'Slabo 27px', serif;
        text-align: center;
        font-size: 6vh;
        margin: 8vh;
        letter-spacing: 3px;
        font-weight: bold;
        word-spacing: 6px;  
        padding: 4.6vh;
       
    }
    #t1{
        display: none;
    }
    #t2{
        display: none;
    }
    #t3{
        display: none;
    }
    #t4{
        display: none;
    }
    #t5{
        display: none;
    }
    #t6{
        display: none;
    }
    .m{
        background-image: url('images/heading.jpg');
        background-size: cover;
        background-color: yellow;
        margin: 0vh 9vw;
        border-radius: 30px;
        
    }
    .tm{
        display: flex;
        margin:0 15px;
        
    }
    .t{
        border-radius:30px;
        font-family: 'Roboto', sans-serif;
        background-color: lightgrey;
        letter-spacing: 2px;
        width: 30vw;
        margin: 12px 52px;
        padding: 2vh 0vw;
        height:60vh;
    }
    .t p{
            font-size: 33px;
            font-weight: bolder;
            text-align: center;
            color: black;
            margin: 21px;
            /* margin: 100px 0px; */
    }
    .t button{
        background-color: lightblue;
        font-family: 'Roboto', sans-serif;
        margin: 20px 80px;
        width: 17vw;
        border-radius: 30px;
        font-size: 17px;
        cursor: pointer;
        height: 32px;
    }
    .tt button{
        background-color: #99FFCC;
        font-family: 'Roboto', sans-serif;
        margin: 20px 80px;
       width: 9vw;
        border-radius: 10px;
        font-size: 17px;
        cursor: pointer;
      /*  height: 32px;*/
    }
    .hover-button {
  background-color: #f0f0f0; /* Set the initial background color */
  color: #333; /* Set the initial text color */
  transition: background-color 0.3s, color 0.3s; /* Add smooth transition effect */
}

.hover-button:hover {
  background-color: #e0e0e0; /* Set the background color when hovered */
  color: #666; /* Set the text color when hovered */
}


    .td{
        padding: 2vh 2vw;
        /* background-color: red; */
        margin: 10px 60px;
        color:white;
    }
    .td img{
        height:60vh;
        width:45vw;
        border-radius: 60px;
        margin: 10px 30px;
    }
    td{
        border:2px solid;
        padding:12px;
        color: white;
    }    
</style>
<script>

    function c1() {
            document.getElementById("t0").style.display = 'none';
            document.getElementById("t1").style.display = 'block';
        }
    function c2() {
            document.getElementById("t0").style.display = 'none';
            document.getElementById("t1").style.display = 'none';
            document.getElementById("t2").style.display = 'block';
            document.getElementById("t3").style.display = 'none';
            document.getElementById("t4").style.display = 'none';
            document.getElementById("t5").style.display = 'none';
            document.getElementById("t6").style.display = 'none';
        }
    function c3() {
            document.getElementById("t0").style.display = 'none';
            document.getElementById("t1").style.display = 'none';
            document.getElementById("t2").style.display = 'none';
            document.getElementById("t3").style.display = 'block';
            document.getElementById("t4").style.display = 'none';
            document.getElementById("t5").style.display = 'none';
            document.getElementById("t6").style.display = 'none';
    }
    function c4() {
            document.getElementById("t0").style.display = 'none';
            document.getElementById("t1").style.display = 'none';
            document.getElementById("t2").style.display = 'none';
            document.getElementById("t3").style.display = 'none';
            document.getElementById("t4").style.display = 'block';
            document.getElementById("t5").style.display = 'none';
            document.getElementById("t6").style.display = 'none';
    }
    function c5() {
            document.getElementById("t0").style.display = 'none';
            document.getElementById("t1").style.display = 'none';
            document.getElementById("t2").style.display = 'none';
            document.getElementById("t3").style.display = 'none';
            document.getElementById("t4").style.display = 'none';
            document.getElementById("t5").style.display = 'block';
            document.getElementById("t6").style.display = 'none';
    }
    function c6() {
            document.getElementById("t0").style.display = 'none';
            document.getElementById("t1").style.display = 'none';
            document.getElementById("t2").style.display = 'none';
            document.getElementById("t3").style.display = 'none';
            document.getElementById("t4").style.display = 'none';
            document.getElementById("t5").style.display = 'none';
            document.getElementById("t6").style.display = 'block';
    }
    function c7() {
            document.getElementById("t0").style.display = 'block';
            document.getElementById("t1").style.display = 'none';
            document.getElementById("t2").style.display = 'none';
            document.getElementById("t3").style.display = 'none';
            document.getElementById("t4").style.display = 'none';
            document.getElementById("t5").style.display = 'none';
            document.getElementById("t6").style.display = 'none';
    }
    function openER()
    {
        var url = "ERdiagram/ER_Diagram_drawio.html";
  
  // Open the HTML file in a new window or tab
  window.open(url);
    }

</script>
<body>
    <!-- <form method ="POST" action="perform.php" > -->

        <div class="m">
            <div class="mh">
                WELCOME TO SQL QUERY VISUALIZER
            </div>   
        </div>
        <div class="tm">
            <div class="t">
                <p>TABLES</p>
                <button onclick="c1()" class="hover-button">Show Dataset</button>
                <form action="query1.php">
                    <button class="hover-button" title="Simple SQL queries are basic queries used to retrieve, insert, update, or delete data from a database.">Simple SQL Queries</button>
                </form>
                <form action="query21.php">
                    <button class="hover-button" title="Intermediate SQL queries are more complex queries that involve multiple tables, advanced filtering conditions, aggregations, and joins. ">Intermediate SQL Queries</button>
                </form >
                <form action="query31.php">
                    <button class="hover-button" title="PL/SQL is a procedural extension of SQL that is used to perform complex data manipulation and processing tasks.">PL/SQL Queries</button>
                </form >
                    <button onclick="openER()" class="hover-button" >ER Diagram</button>
                
            </div>
            <div class="td"  id="t0">
                <img src="https://img.freepik.com/free-vector/programmer-concept-illustration_114360-2284.jpg?w=740&t=st=1686582745~exp=1686583345~hmac=18decef3f86c4d855d84d5a898e7744e00f26d0ed3f3b677fb074d483089dada" alt="error">
            </div>

            <div class="td"  id="t1">
                EMPLOYEE 
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
                <div class="tt">
                <button onclick="c2()">Next Table -></button>
                </div>
            </div>

            <div class="td"  id="t2">
                DEPARTMENT
            <?php
                $conn = mysqli_connect("localhost", "root", "","project");
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM department";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                echo "<table>";
                echo "<tr><td>" . "Dname" . "&nbsp"."</td><td>" . "Dnumber" ."&nbsp"."</td><td>" . "Mgr_ssn" . "&nbsp"."</td><td>" . "Mgr_start_date" ."&nbsp".
                    "</td></tr>" ;
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["Dname"] . "&nbsp"."</td><td>" . $row["Dnumber"] ."&nbsp"."</td><td>" . $row["Mgr_ssn"] . "&nbsp"."</td><td>" . $row["Mgr_start_date"] ."&nbsp".
                    "</td></tr>" ;
            }
                echo "</table>";
                } else { echo "0 results"; }
                $conn->close();
                ?>
                <div class="tt">
                <button onclick="c3()">Next Table -></button>
                </div>
            </div>

            <div class="td"  id="t3">
                DEPT_LOCATIONS
            <?php
                $conn = mysqli_connect("localhost", "root", "","project");
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM dept_locations";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                echo "<table>";
                echo "<tr><td>" . "Dnumber" . "&nbsp"."</td><td>" . "Dlocation" ."&nbsp".
                    "</td></tr>" ;
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["Dnumber"] . "&nbsp"."</td><td>" . $row["Dlocation"] ."&nbsp".
                    "</td></tr>" ;
            }
                echo "</table>";
                } else { echo "0 results"; }
                $conn->close();
                ?>
                <div class="tt">
                <button onclick="c4()">Next Table -></button>
                </div>
            </div>

            <div class="td"  id="t4">
                WORKS_ON
            <?php
                $conn = mysqli_connect("localhost", "root", "","project");
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM works_on";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                echo "<table>";
                echo "<tr><td>" . "Essn" . "&nbsp"."</td><td>" . "Pno" ."&nbsp"."</td><td>" . "Hours" ."&nbsp".
                    "</td></tr>" ;
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["Essn"] . "&nbsp"."</td><td>" . $row["Pno"] ."&nbsp"."</td><td>" . $row["Hours"] ."&nbsp".
                    "</td></tr>" ;
            }
                echo "</table>";
                } else { echo "0 results"; }
                $conn->close();
                ?>
                <div class="tt">
                <button onclick="c5()">Next Table -></button>
                </div>
            </div>

            <div class="td"  id="t5">
                PROJECT
            <?php
                $conn = mysqli_connect("localhost", "root", "","project");
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM project";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                echo "<table>";
                echo "<tr><td>" . "Pname" . "&nbsp"."</td><td>" . "Pnumber" ."&nbsp"."</td><td>" . "Plocation" ."&nbsp"."</td><td>" . "Dnum" ."&nbsp".
                    "</td></tr>" ;
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["Pname"] . "&nbsp"."</td><td>" . $row["Pnumber"] ."&nbsp"."</td><td>" . $row["Plocation"] ."&nbsp"."</td><td>" . $row["Dnum"] ."&nbsp".
                    "</td></tr>" ;
            }
                echo "</table>";
                } else { echo "0 results"; }
                $conn->close();
                ?>
                <div class="tt">
                <button onclick="c6()">Next Table -></button>
                </div>
            </div>

            <div class="td"  id="t6">
                DEPENDENT
            <?php
                $conn = mysqli_connect("localhost", "root", "","project");
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM dependent";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                echo "<table>";
                echo "<tr><td>" . "Essn" . "&nbsp"."</td><td>" . "Dependent_name" ."&nbsp"."</td><td>" . "Sex" ."&nbsp"."</td><td>" . "Bdate" ."&nbsp"."</td><td>" . "Relationship" ."&nbsp".
                    "</td></tr>" ;
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["Essn"] . "&nbsp"."</td><td>" . $row["Dependent_name"] ."&nbsp"."</td><td>" . $row["Sex"] ."&nbsp"."</td><td>" . $row["Bdate"] ."&nbsp"."</td><td>" . $row["Relationship"] ."&nbsp".
                    "</td></tr>" ;
            }
                echo "</table>";
                } else { echo "0 results"; }
                $conn->close();
                ?>
                <div class="tt">
                <button onclick="c7()">Home -></button>
                </div>
            </div>


        </div>
    <!-- </form> -->
</body>
</html>