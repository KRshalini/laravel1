<h3>Update form</h3>

<form action="<?php echo e(url('update', $user->id)); ?>" method="POST">
    <?php echo method_field('PATCH'); ?>
    
    <label for="firstname">Firstname:</label>
    <input type="text" id="firstname" name="firstname" value="<?php echo e($user->firstname); ?>" required><br>
    
    <label for="lastname">Lastname:</label>
    <input type="text" id="lastname" name="lastname" value="<?php echo e($user->lastname); ?>" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo e($user->email); ?>" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br>
    
    <label for="gender">Gender:</label><br>
    <input type="radio" id="female" name="gender" value="Female" <?php if($user->gender === 'Female'): ?> checked <?php endif; ?>>
    <label for="female">Female</label>
    <input type="radio" id="male" name="gender" value="Male" <?php if($user->gender === 'Male'): ?> checked <?php endif; ?>>
    <label for="male">Male</label><br>
    
    <label for="skills">Skills:</label><br>
    <input type="checkbox" id="html" name="skills[]" value="html" <?php echo e(in_array('html',$skills)? 'checked' :''); ?>>HTML                                                                                            
    <input type="checkbox" id="css" name="skills[]" value="css" <?php echo e(in_array('css',$skills)? 'checked' :''); ?>>CSS
    <input type="checkbox" id="php" name="skills[]" value="php" <?php echo e(in_array('php',$skills)? 'checked' :''); ?>>PHP<br><br>

    <label for="native">Native:</label>
    <select name="native" id="native">
        <option value="madurai" <?php if($user->native === 'madurai'): ?> selected <?php endif; ?>>Madurai</option>
        <option value="chennai" <?php if($user->native === 'chennai'): ?> selected <?php endif; ?>>Chennai</option>
        <option value="tirchy" <?php if($user->native === 'tirchy'): ?> selected <?php endif; ?>>Tirchy</option>
    </select><br>

    <select name="location[]" id="location" multiple required>
    <?php $__currentLoopData = ['Trichy', 'Madurai', 'Coimbatore', 'Bangalore', 'Chennai']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($location); ?>" <?php if(is_array($user->location) && in_array($location, $user->location)): ?> selected <?php endif; ?>><?php echo e($location); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select><br>


   

    <input type="submit" value="Update User">
    <?php echo csrf_field(); ?>
</form>
<?php /**PATH C:\xampp\htdocs\crud_project\resources\views/edit_user.blade.php ENDPATH**/ ?>