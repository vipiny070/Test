<?php include 'header.php'; ?>
<?php include 'server.php'; ?>
<?php 
if ($post_result->num_rows > 0) {
// output data of each row
while($row = $post_result->fetch_assoc()) {
echo $row["post_name"] .$row["post_email"].$row["post_date"].$row["post_subject"].$row["post_updatepost"] ;
}
} else { echo "0 results"; }
?>
<?php include 'footer.php'; ?>
