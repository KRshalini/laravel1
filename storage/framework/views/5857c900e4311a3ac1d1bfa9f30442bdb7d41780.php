<html>
    <h2>List</h2>
    <style>
        table th,td{
            border:1px solid black;
            border-collapse:collapse;
        }
    </style>
    <table>
        <thead>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>password</th>
            <th>gender</th>
            <th>skills</th>
            <th>location</th>
            <th>native</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($user->id); ?></td>
            <td><?php echo e($user->firstname); ?></td>
            <td><?php echo e($user->lastname); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td><?php echo e($user->password); ?></td>
            <td><?php echo e($user->gender); ?></td>
            <td><?php echo e($user->skills); ?></td>
            <td><?php echo e($user->location); ?></td>
            <td><?php echo e($user->native); ?></td>
            <td><a href="edit/<?php echo e($user->id); ?>">Edit</a></td>
            <td><a href="delete/<?php echo e($user->id); ?>">Delete</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</html>                                                                                                                                     <?php /**PATH C:\xampp\htdocs\crud_project\resources\views/list_user.blade.php ENDPATH**/ ?>