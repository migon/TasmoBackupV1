<?php
require_once(__DIR__.'/lib/functions.inc.php');

global $settings;

dbUpgrade();

TBHeader('Upgrade',true,false,true,10);

?>
  <body>
    <div class="container-fluid">
Upgrade Complete
    </div>
<?php
TBFooter();
?>
</body>
</html>

