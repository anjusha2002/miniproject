<?php
include("../Connection/Connection.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AjaxPlaces</title>
</head>

<body>

<option value="">--select--</option>
<?php
    $sel="select * from tbl_place where district_id='".$_GET["did"]."'";
    $rows=$conn->query($sel);
    while($results=$rows->fetch_assoc())
    {
        ?>
        <option value="<?php echo $results["place_id"]?>"><?php echo $results["place_name"]?></option>
        <?php
    }
?>
</body>
</html>