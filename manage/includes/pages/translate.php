<?php
  if($_SERVER['REQUEST_METHOD'] == "POST") {
      $la = extractGet('language');
    $string = "<?php \n \$language = array(";
    foreach($_POST as $key => $value) {
      $value = str_replace("'", "\\'", $value);
      $string = $string . "\n\t\t\t'{$key}' => '{$value}',";
    }

    $string = $string . ") ?>";

    $fp = fopen($config['htmlPath'] . "includes/language/{$la}.php", 'w');
    fwrite($fp, $string);

    // die($string);
    fclose($fp);
    // die();
    header("Location: ?page=".extractGet('page')."&language=".extractGet("language"));
    die();
  }
  $la = extractGet('language');
  require($config['htmlPath'] . "includes/language/{$la}.php");
  require_once('includes/pages/tpl_menu.php');

  // Require Language Changer
  require_once('includes/pages/tpl_language_changer.php');
 ?>

 <form class="" action="" method="post">
   <h1>Translate</h1>
   <table class="table">
     <?php
        foreach($language as $key => $value) {
      ?>
      <tr>
        <td><?php echo $key ?></td>
        <td><textarea name="<?php echo $key ?>" rows="5" cols="80" class="input-xxlarge"><?php echo $value ?></textarea></td>
      </tr>
      <?php } ?>
   </table>
   <input type="submit" value="Save" class="btn btn-success">
 </form>
