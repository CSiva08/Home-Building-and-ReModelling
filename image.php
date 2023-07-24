<!DOCTYPE html>
<html>
  <head>
    <title>Upload Image To Database</title>
  </head>
  <body>
    <!-- (A) HTML FILE UPLOAD FORM -->
    <form method="post" enctype="multipart/form-data">
      <input type="file" name="upload" accept=".png,.gif,.jpg,.webp" required/>
      <input type="submit" name="submit" value="Upload Image"/>
    </form>

    <?php
    // (B) SAVE IMAGE INTO DATABASE
    if (isset($_FILES["upload"])) {
      try {
        // (B1) CONNECT To DATABASE
        require "database.php";

        // (B2) READ IMAGE FILE & INSERT
        $stmt = $pdo->prepare("INSERT INTO `images` (`img_name`, `img_data`) VALUES (?,?)");
        $stmt->execute([$_FILES["upload"]["name"], file_get_contents($_FILES["upload"]["tmp_name"])]);
        echo "OK";
      } catch (Exception $ex) { echo $ex->getMessage(); }
    }
    ?>
  </body>
</html>
