
<html>
<head>
<title>blood request</title>
</head>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #FFC0CB ;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #FF0000;
}

div {
  border-radius: 5px;
  background-color: #FFFFE0;
  padding: 20px;
}
</style>
<body>
 <div> 
<form method="post" action="formdata"><br></br>

<h1> APPLY FOR BLOOD </h2>
<!-- <input type="radio" name="Someon else" value="Someone else"> Someone else
<input type="radio" name="Me" value="">Me<br></br>
 --><form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.."><br></br>
Contact number<input type="number" name="Contact number" id="Contact number"><br></br>
<p></p>
<select>
  <option value="Blood group">Blood Group</option>
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="B+">B+</option>
    <option value="B-">B-</option>
  <option value="AB+">AB+</option>
  <option value="AB-">AB-</option>
    <option value="O+">O+</option>
  <option value="O-">O-</option>
</select>
<select>
  <option value="Select State">Select State</option>
  <option value="Uttar Pradesh">Uttar Pradesh</option>
  <option value="Punjab">Punjab</option>
  <option value="Delhi">Delhi</option>
    <option value="Chandigarh">Chandigarh</option>
  <option value="J&K">J&K</option>
  <option value="Bihar">Bihar</option>
    <option value="Rajasthan">Rajasthan</option>
  <option value="Gujrat">Gujrat</option>
</select><br></br>
Hospital Name with Address<input type="text" name="Hospital Name with Address<" id="Hospital Name with Address<"><br></br>
<input type="submit" button="submit"></br>
</form>
</div>

