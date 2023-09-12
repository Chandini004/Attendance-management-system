<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  /* margin-top:200px; */
  text-align: center;
  font-family: arial;
  margin-right: 20px ;
  margin-bottom: 20px;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
.containr{
 margin-top: 100px;
}
.row{
  margin-left: 20px;
}
</style>
</head>
<body>
<div class="containr" style="width:100vw;position:absolute;">
<h2 style="text-align: center;">DEPARTMENTS</h2><br>
<form action="" method="post">
    <label for="batch">Batch:</label>
    <input type="text" name="batch" id="batch" placeholder="Enter Batch Number">
    <label for="dept">Department:</label>
    <input type="text" name="dept" id="dept" placeholder="Enter Department Name">
    <input type="submit" name="submit" value="Search" class="btn btn-dark">
</form>
<br>
<br>
<div class="row">
<div class="card">
  <img src="/w3images/team2.jpg" alt="John" style="width:100%">
  <h1>John Doe</h1>
  <p class="title">Cse-b</p>
  <p>Harvard</p>
  <p><input type="submit" name="submit" value="Search" class="btn btn-dark"></p>
</div>
<div class="card">
  <img src="/w3images/team2.jpg" alt="John" style="width:100%">
  <h1>John Doe</h1>
  <p class="title">Cse-b</p>
  <p>Harvard</p>
  <p><button>view profile</button></p>
</div>
<div class="card">
  <img src="/w3images/team2.jpg" alt="John" style="width:100%">
  <h1>John Doe</h1>
  <p class="title">Cse-b</p>
  <p>Harvard</p>
  <p><button>view profile</button></p>
</div>
<div class="card">
  <img src="/w3images/team2.jpg" alt="John" style="width:100%">
  <h1>John Doe</h1>
  <p class="title">Cse-b</p>
  <p>Harvard</p>
  <p><button>view profile</button></p>
</div>
<div class="card">
  <img src="/w3images/team2.jpg" alt="John" style="width:100%">
  <h1>John Doe</h1>
  <p class="title">Cse-b</p>
  <p>Harvard</p>
  <p><button>view profile</button></p>
</div>
<div class="card">
  <img src="/w3images/team2.jpg" alt="John" style="width:100%">
  <h1>John Doe</h1>
  <p class="title">Cse-b</p>
  <p>Harvard</p>
  <p><button>view profile</button></p>
</div>
</div>
</div>
</body>
</html>
