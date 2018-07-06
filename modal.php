<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
  <link rel="stylesheet" type="text/css" href="modal.css">
</head>
<body>

<div class="wrapper">
  <div class="container">
    <div class="profile-card">
        <h2>Gerald Suleh</h2>
      <div class="img-container">
        <?php if($pp == null){
            echo '<img src="avatar.png" >' ;}else{ echo displayimg();} ?>
            
      </div>
      <div class="role"><p>Owner</p></div>
      <div class="btn"><a href="portfolio.php">Portfolio</a></div>
    </div>
    <div class="data">
      <div class="inner-data">
        <div class="data-content">
        <p>Franchise</p>
        <span>1</span>
      </div>
      <div class="data-content">
        <p>Rank</p>
        <span>5</span>
      </div>
      <div class="data-content">
        <p>Rating</p>
        <span>4.5</span>
      </div>
      </div>
    </div>
    
    <div class="quote">
      <p>my name is jeff my name is jeff my name is jeff my name is jeff my name is jeff my name is jeff my name is jeff </p>
      <p>A man who views the world the same at fifty as he did at twenty has wasted thirty years of his life.</p>
    </div>
  </div>
</div>


</body>
</html>