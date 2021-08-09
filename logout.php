<?php
 
        session_start();
        $result = session_destroy();
 
        if($result) {
?>
<script type="text/javascript">alert('Logout Complete!');</script>
<meta http-equiv="refresh" content="0 url=login.php">
<?php   }
?>