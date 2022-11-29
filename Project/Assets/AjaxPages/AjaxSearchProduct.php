<?php
include("../Connection/Connection.php");

    if (isset($_GET["action"])) {

        $sqlQry = "SELECT * from tbl_product p inner join tbl_quantity sc on sc.quantity_id=p.quantity_id inner join tbl_category c on c.category_id=p.category_id inner join tbl_stock s on s.product_id = p.product_id
        WHERE exp_date > curdate()";
        $row = "SELECT count(*) as count from tbl_product p inner join tbl_quantity sc on sc.quantity_id=p.quantity_id inner join tbl_category c on c.category_id=p.category_id where true ";

        if ($_GET["category"]!=null) {

            $category = $_GET["category"];

            $sqlQry = $sqlQry." AND c.category_id IN(".$category.")";
            $row = $row." AND c.category_id IN(".$category.")";
        }
        if ($_GET["qn"]!=null) {

            $subcategory = $_GET["qn"];

            $sqlQry = $sqlQry." AND p.quantity_id IN(".$subcategory.")";
            $row = $row." AND sc.quantity_id IN(".$subcategory.")";
        }

        //echo $sqlQry;
        $resultS = $conn->query($sqlQry);
        $resultR = $conn->query($row);
        
       
        $rowR = $resultR->fetch_assoc();

        if ($rowR["count"] > 0) {
            while ($row1 = $resultS->fetch_assoc()) {
				$average_rating = 0;
	$total_review = 0;
	$five_star_review = 0;
	$four_star_review = 0;
	$three_star_review = 0;
	$two_star_review = 0;
	$one_star_review = 0;
	$total_user_rating = 0;
	$review_content = array();

	$query = "
	SELECT * FROM tbl_review where product_id = '".$row1["product_id"]."' ORDER BY review_id DESC
	";

	$result = $conn->query($query);

	while($row = $result->fetch_assoc())
	{
		$review_content[] = array(
			'user_name'		=>	$row["user_name"],
			'user_review'	=>	$row["user_review"],
			'rating'		=>	$row["user_rating"],
			'datetime'		=>	$row["review_datetime"]
		);

		if($row["user_rating"] == '5')
		{
			$five_star_review++;
		}

		if($row["user_rating"] == '4')
		{
			$four_star_review++;
		}

		if($row["user_rating"] == '3')
		{
			$three_star_review++;
		}

		if($row["user_rating"] == '2')
		{
			$two_star_review++;
		}

		if($row["user_rating"] == '1')
		{
			$one_star_review++;
		}

		$total_review++;

		$total_user_rating = $total_user_rating + $row["user_rating"];

	}
	if($total_review==0 || $total_user_rating==0)
	{
		$average_rating=0;
	}
else
{
	$average_rating = $total_user_rating / $total_review;
}
?>

<div class="col-md-3 mb-2">
                            <div class="card-deck">
                                <div class="card border-secondary">
                                    <img src="../Assets/Files/ProductPhoto/<?php echo $row1["product_photo"]; ?>" class="card-img-top" height="250">
                                    <div class="card-img-secondary">
                                        <h6  class="text-light bg-info text-center rounded p-1"><?php echo $row1["category_name"]; ?></h6>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title text-danger" align="center">
                                            Price : <?php echo $row1["product_mrp"]; ?>/-
                                        </h4>
                                        <p align="center">
                                         <?php echo $average_rating."/5"; ?><br />
                                            <?php echo $row1["quantity_content"]; ?><br>
                                        </p>
                                        <?php
                                            
                                                if ($row1["stock_quantity"] > 0) {
                                        ?>
                                        <a href="javascript:void(0)" onclick="addCart('<?php echo $row1["product_id"]; ?>')" class="btn btn-success btn-block">Add to Cart</a>
                                        <a href="ViewMore.php?pid=<?php echo $row1["product_id"]?>">ViewMore</a>
                                        <?php
                                        } else if ($row1["stock_quantity"] == 0) {
                                        ?>
                                        <a href="javascript:void(0)" class="btn btn-danger btn-block">Out of Stock</a>
                                        <?php
                                            }
                                         else {
                                        ?>
                                        <a href="javascript:void(0)" class="btn btn-warning btn-block">Stock Not Found</a>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>

<?php
            }
        } else {
             echo "<h4 align='center'>Products Not Found!!!!</h4>";
        }
    }

?>