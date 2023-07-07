<!DOCTYPE html>
<html>
<head>
  <title>Jeu du Taquin</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Jeu du Taquin</h1>
  <div id="puzzle-container">
    <div class="row">
      <div class="tile empty"></div>
      <div class="tile"><img src="image1.jpg"></div>
      <div class="tile"><img src="image2.jpg"></div>
    </div>
    <div class="row">
      <div class="tile"><img src="image3.jpg"></div>
      <div class="tile"><img src="image4.jpg"></div>
      <div class="tile"><img src="image5.jpg"></div>
    </div>
    <div class="row">
      <div class="tile"><img src="image6.jpg"></div>
      <div class="tile"><img src="image7.jpg"></div>
      <div class="tile"><img src="image8.jpg"></div>
    </div>
  </div>
  <button onclick="shuffleTiles()">Mélanger</button>
  <script src="script.js"></script>
</body>
</html>
