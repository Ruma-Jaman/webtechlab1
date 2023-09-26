<!DOCTYPE html>
<html >
<head>
   
    <title>Reg.From</title>

</head>
<body>
    <form action="./success.php"method="Post">
    <table>
        <tr>
            <td>First Name:</td>
            
            <td><input type="text" name="first name"></td>
        <tr>
            <td>Last Name:</td>
            
            <td><input type="text" name="last name"></td>
        <tr>
            <td>Email Address:</td>
            
            <td><input type="text" name="email"></td>
        <tr>
            <td>Password:</td>
        
            <td><input type="text" name="pass"></td>
        <tr>
            <td>Date of Birth:</td>
            
            <td><input type="date" name="date"></td>
        <tr>
            <td>Gender:</td>
            
            <td><input type="radio" value=" Male" name="gender"> Male</td>
            <td><input type="radio" value=" Female" name="gender"> Female</td>
            <td><input type="radio" value="other" name="gender">Other</td>
</tr>
<tr> 
    <td>Country:</td>
    <td>
        <select name ="CNPY">
            <option value=" UnitedStates" name="CNPY"> United States</option>
            <option value="Canada" name="CNPY"> Canada</option>
            <option value="  UnitedKingdom" name="CNPY">United Kingdom</option>
            <option value="other" name="CNPY">other</option>
</td>
</tr>
<tr>
    <td> Phone Number:</td>
    <td><input type="text"name="Phone"></td> 
</tr>
<tr>
<td> Profile Picture:</td>
    <td><input type="file"name="profilePic"></td>
</tr>
<tr> <td> Checkbox:</td>
    <td><input type="Checkbox"name="box" value="checkbox"></td>
</tr>

    <tr> <td>Submit:</td>
    <td><input type="submit"name="done" value="submit"></td>
</tr>
    <tr><td> Reset:</td>
    <td><input type="Reset"name="reset"value="reset"></td>
</tr>
</table>
</form>
</body>
</html>
