<?php include "header.php"; ?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/style2.css">
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="product-list">
        <div class="row">

            <?php
            include "code/code.selectFromItems.php";

            ?>

        </div>
    </div>
</div>

<?php include "code/footer.php"; ?>