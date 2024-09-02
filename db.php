<?php
$conn = mysqli_connect("localhost", "root", "", "pg");
if(!$conn){
    ?>
<script>
    alert("Connection failed");
</script>

    <?php
}


?>