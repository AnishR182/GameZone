<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--css-->
<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial;
}

/* The grid: Three equal columns that floats next to each other */
.column {
    float: left;
    width: 20%;
    padding: 20px;
    text-align: center;
    font-size: 20px;
    cursor: pointer;
    color: white;
}

.containerTab {
    padding: 20px;
    color: white;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Closable button inside the container tab */
.closebtn {
    float: right;
    color: white;
    font-size: 35px;
    cursor: pointer;
}
</style>
<!--html-->
</head>
<body>

<div style="text-align:center">
  <h2>Expanding Grid</h2>
  <p>Click on the boxes below:</p>
</div>

<!-- Three columns -->
<div class="row">
  <div class="column" onclick="openTab('b1');" style="background:green;">
    Box 1
  </div>
  <div class="column" onclick="openTab('b2');" style="background:blue;">
    Box 2
  </div>
  <div class="column" onclick="openTab('b3');" style="background:red;">
    Box 3
  </div>
</div>
<div class="row">
  <div class="column" onclick="openTab('b4');" style="background:green;">
    Box 4
  </div>
  <div class="column" onclick="openTab('b5');" style="background:blue;">
    Box 5
  </div>
  <div class="column" onclick="openTab('b6');" style="background:red;">
    Box 6
  </div>
</div>
<div class="row">
  <div class="column" onclick="openTab('b7');" style="background:green;">
    Box 7
  </div>
  <div class="column" onclick="openTab('b8');" style="background:blue;">
    Box 8
  </div>
  <div class="column" onclick="openTab('b9');" style="background:red;">
    Box 9
  </div>
</div>
<div class="row">
  <div class="column" onclick="openTab('b10');" style="background:green;">
    Box 10
  </div>
  <div class="column" onclick="openTab('b11');" style="background:blue;">
    Box 11
  </div>
  <div class="column" onclick="openTab('b12');" style="background:red;">
    Box 12
  </div>
</div>
<!-- Full-width columns: (hidden by default) -->
<div id="b1" class="containerTab" style="display:none;background:green">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Box 1</h2>
</div>

<div id="b2" class="containerTab" style="display:none;background:blue">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Box 2</h2>
</div>

<div id="b3" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Box 3</h2>
</div>
<!--javascript-->
<script>
function openTab(tabName) {
  var i, x;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}
</script>

</body>
</html> 