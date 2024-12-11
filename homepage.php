<div?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
         
<div class="container">
   <h1 class="form-title"> iDatos Technology </h1>
                
        
        <form method="post" action="process_application.php" enctype="multipart/form-data">

        Position applied for:  <select name="dropdown">
             <option value="DATA SCIENTIST"> DATA SCIENTIST</option>
             <option value="CYBER SECURITY">CYBERSECURITY </option>
            <option value="AI">AI </option>
             </select>
                   <br><br>
 
        Name: <input type="text" name="name" required/>
        Nationality: <input type="text" name="Nationality"/>
             <br><br>

        Date of birth: <input type="date" name="date" required/>
              <br><br>

        Address: <input type="text" name="address">
             <br><br>

        Telephone number: <input type="tel" name="Phone number" placeholder="0712345678" required/>
        Email: <input type="email" name="Email" placeholder="jane@gmail.com" required/>
            <br><br>

        Work experience:
        <input type="number" name="work" placeholder="2 years" required/>
               <br><br>

        Resume: <input type="file" name="fileupload " accept="pdf/*" />
              <br><br>

        Referees:<br/>
        <textarea rows="3" cols="80" name="description"
placeholder="Write the names, occupation & telephone number of at least 2 of your referees here..." ></textarea>
             <br><br>
 
        <input type="hidden" name="submit" value="true">
        <button class="btn" type="submit">Submit Your Application</button>  
       
        <div class="links">
        <a href="logout.php">Logout</a> </div>
</form>

</div>  
<script src="js/scrript.js"></script>
</body> 
</html>