<h3>Register form</h3>
<form action="store" method="POST" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
    <label for="name">Firstname:</label>
    <input type="text" name="firstname"><br>
    <label for="name">Lastname:</label>
    <input type="text" name="lastname"><br>

    <label for="email">Email:</label>
    <input type="email" name="email"><br>

    <label for="password">Password:</label>
    <input type="password" name="password" value=""><br>

    <label for="gender">Gender:</label><br>
    <input type="radio" name="gender" value="Female">Female
    <input type="radio" name="gender" value="Male">Male<br>

   
    
    <label for="skills">Skills:</label><br>
    <input type="checkbox" id="html" name="skills[]" value="html">
    <label for="html">HTML</label><br>                                                                                               
    <input type="checkbox" id="php" name="skills[]" value="php">
    <label for="php"> PHP</label><br>
    <input type="checkbox" id="css" name="skills[]" value="css">
    <label for="css"> CSS</label><br>

    <label for="location">Preferred location:</label><br>         
    <select name="location[]" multiple required >
        <option value="Tirchy">Trichy</option>          
        <option value="Madurai">Madurai</option>
        <option value="Coimbatore">Coimbatore</option>
        <option value="Bangalore">Bangalore</option>
        <option value="Chennai">Chennai</option>                                                    
    </select><br>


    <label for="native">Native:</label>
    <select name="native" id="native">
    <option value="madurai">Madurai</option>
    <option value="chennai">Chennai</option>
    <option value="tirchy">Tirchy</option><br>
    </select><br>
    <input type="submit" value="Register">
   
   
</form><?php /**PATH C:\xampp\htdocs\crud_project\resources\views/create_user.blade.php ENDPATH**/ ?>