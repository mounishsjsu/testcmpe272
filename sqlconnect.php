<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
</head>
<body>
 <h1>Register Form</h1>
 <form action="insert.php" method="POST">
  <table>
   <tr>
    <td>First Name :</td>
    <td><input type="text" name="first_name" required></td>
   </tr>
   <tr>
    <td>Last Name :</td>
    <td><input type="text" name="last_name" required></td>
   </tr>
   <tr>
    <td>Email :</td>
    <td><input type="email" name="email" required></td>
   </tr>
   <tr>
    <td>Home Address :</td>
    <td><input type="test" name="home_address" required></td>
   </tr> 
   <tr>
    <td>Home Phone no :</td>
    <td>
     <select name="home_phone" required>
      <option selected hidden value="">Select Code</option>
      <option value="+1">+1</option>
      <option value="+91">+91</option>
     </select>
     <input type="phone" name="home_phone" required>
    </td>
   </tr>
   <tr>
    <td>Cell Phone no :</td>
    <td>
     <select name="cell_phone" required>
      <option selected hidden value="">Select Code</option>
      <option value="+1">+1</option>
      <option value="+91">+91</option>
     </select>
     <input type="phone" name="cell_phone" required>
    </td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit" name="submit"></td>
   </tr>
  </table>
 </form>
 <h1>Search Users Below</h1>
 <form action="retrieve.php" method="POST">
  <table>
   <tr>
    <td>First Name :</td>
    <td><input type="text" name="first_name"></td>
   </tr>
   <tr>
    <td>Last Name :</td>
    <td><input type="text" name="last_name"></td>
   </tr>
   <tr>
    <td>Email :</td>
    <td><input type="email" name="email" ></td>
   </tr> 
   <tr>
    <td>Home Phone no :</td>
    <td>
     <select name="home_phone">
      <option selected hidden value="">Select Code</option>
      <option value="+1">+1</option>
      <option value="+91">+91</option>
     </select>
     <input type="phone" name="home_phone">
    </td>
   </tr>
   <tr>
    <td>Cell Phone no :</td>
    <td>
     <select name="cell_phone">
      <option selected hidden value="">Select Code</option>
      <option value="+1">+1</option>
      <option value="+91">+91</option>
     </select>
     <input type="phone" name="cell_phone">
    </td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit" name="submit"></td>
   </tr>
  </table>
 </form>
</body>
</html>
