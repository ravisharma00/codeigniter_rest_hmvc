<!DOCTYPE html>
<html>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
}

</style>
<body>

<form id="form" method = "get" style="border:1px solid #ccc">
  <div class="container">
  	<label><b>Full Name</b></label>
    <input type="text" placeholder="Full Name" name="name" id="fullname">
    <label><b>Address</b></label>
    <input type="text" placeholder="Address" name="address" id="address">
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" >
    <label><b>Contact</b></label>
    <input type="text" placeholder="Mobile Number" name="contact" id="contact">
    <div class="clearfix">
    <input type="button" id="submitbtn" name="submit" value="submit"  >
    <span id="result"></span>
    <style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
     
    </div>
  </div>
</form>
<div id="res">
    
</div>
<div id="show">
    

</div>

<div>
    <table style="width:50%">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>address</th> 
        <th>email</th>
        <th>phone</th>
        <th>CRUD</th>
    </tr>
    <?php
    foreach ($user_details as $key => $value) { ?>
         <tr>
            <td><?php echo $value->id; ?></td>
            <td><?php echo $value->full_name; ?></td>
            <td><?php echo $value->address; ?></td>
            <td><?php echo $value->email; ?></td>
            <td><?php echo $value->contact; ?></td>
            <td>
                   <input type="button" class="edit_button" id="edit" value="edit">
                   <input type="button" class="save_button" id="save" value="save">
                   <input type="button" class="delete_button" id="delete" value="delete">
            </td>
    <?php  }?> 

        </tr>
        </table>
     
    


</div>
<script type="text/javascript">
    window.BASE_URL = "<?php echo base_url();?>"
</script>
<script
  src="https://code.jquery.com/jquery-3.2.1.js"></script>
 <script src = "<?php echo base_url();?>assets/js/form.js " type="text/javascript"></script>
</body>
</html>

<!-- <html>
<head>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript" src="modify_records.js"></script>
</head>
<body>
<div id="wrapper">


<table align="center" cellpadding="10" border="1" id="user_table">
<tr>
<th>NAME</th>
<th>AGE</th>
<th></th>
</tr>

 <tr id="row">
  <td id="name_val">13</td>
  <td id="age_val">18</td>
  <td>
   <input type='button' class="edit_button" id="edit_button" value="edit">
   <input type='button' class="save_button" id="save_button" value="save">
   <input type='button' class="delete_button" id="delete_button" value="delete"">
  </td>
 </tr>


<tr id="new_row">
 <td><input type="text" id="new_name"></td>
 <td><input type="text" id="new_age"></td>
 <td><input type="button" value="Insert Row"></td>
</tr>
</table>

</div>
</body>
</html> -->