<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
  .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
}

.button1 {font-size: 10px;}
</style>
<body>

<div class="container">
  <h2>Show Data</h2>  
  <p><a href="add">Add Data</a></p>         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>password</th>
        <th>status</th>
        <th>edit</th>
        <th>del</th>
        
      </tr>
    </thead><?php foreach 

    ($rs as $r) {?>
    <tbody>

      <tr>
        <td> <?php echo $r['id'] ?> </td>
        <td> <?php echo $r['name'] ?> </td>
        <td> <?php echo $r['passwd'] ?> </td>
        <td> <?php echo $r['status'] ?> </td>
         <th><a href="edit/<?php echo $r['id'] ?> ">Edit</a></th>
         <th><a href="del/<?php echo $r['id'] ?> " onclick="return confirm('Are you sure?') ";>del</a></th>
      </tr>

      <?php } ?>
    

    </tbody>
  </table>
</div>

</body>
</html>
