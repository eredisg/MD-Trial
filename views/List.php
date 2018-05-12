<form method="POST" action="../components/Delete.php">
   <ul class="list-group">
      <?php
         $tasks = unserialize(isset($_COOKIE['task']) ? $_COOKIE['task'] : null);
         
         if(!empty($tasks)) {
             foreach($tasks as $task) {
                 echo "<li class='list-group-item'><input type='checkbox' name='cl[]' value=$task> $task</li>";
             }
         } else {
             echo "<h5>You have no tasks available!</h5>";
         }
         ?>
   </ul>
   <br>
   <input class="btn btn-danger" type="submit" name="delete" value="Done">
</form>