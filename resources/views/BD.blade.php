<!DOCTYPE html>
<html>
<title>Male</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
<body background="blood.jpg">
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}

.container a {
float: left;
font-size: 16px;
color: white;
text-align: center;
padding: 14px 16px;
text-decoration: none;
}
</style>
<body>
<center>
 <!-- Footer -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
      <div class="w3-col s4">
        <h4>Contact</h4>
        <form method="post" action="formdata" >
          {{csrf_field()}}
          <p><input class="w3-input w3-border" type="text" placeholder="Name" name="name" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" name="email" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Age" name="age" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Blood group" name="bloodgrp" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Contact No." name="contact" required></p>
          <button type="submit" class="w3-button w3-block w3-black">Register</button>
        </form>
      </div>