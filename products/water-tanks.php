<!DOCTYPE html>
<html ng-app="store" lang="en">
<head>
  
	<title>Water Tanks - CAP Distributing</title>
	<meta name="description" content="" />
	<meta name="keywords" content="water tank, storage, earthquake, natural disaster" />
  <?php include_once("../templates/head.html"); ?>
  
</head>
<body ng-controller="StoreController as store">
  
  <?php include_once("../templates/cap-logo.html"); ?>
  <?php include_once("../templates/nav.html"); ?>
  
  <div class="container">
    <h2>Storm Tanker Water Tanks</h2>

    <div class="row">
      <div class="col-md-4 product-info" ng-repeat="product in store.stormTanker" ng-hide="product.soldOut">
        <img class="product-img" ng-src="{{product.image.src}}" />
        <h3 class="product-name">{{product.name}}</h3>
        <ul class="product-bullets-ul product-bullets-ul-water-tanks">
          <li class="product-bullets-li">{{product.bullets[0]}}</li>
          <li class="product-bullets-li">{{product.bullets[1]}}</li>
        </ul>
        <?php #<a class="btn btn-cap" ng-href="{{product.amazonLink}}">Buy on Amazon &gt;&gt;</a>; ?>
        <a class="btn btn-cap" href="/contact.php">Contact Us</a>
      </div>
    </div>

  </div><?php #End .container ?>
  
  <?php include_once("../templates/footer.html"); ?>
  
</body>
</html>
