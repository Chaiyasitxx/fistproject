<?php 

    session_start();
    require_once 'config/db.php';
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php 

            if (isset($_SESSION['user_login'])) {
                $user_id = $_SESSION['user_login'];
                $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            }
        ?>

       
    </div>
    <header class="header">
      <a href="" class="logo">แมว | หมา</a>
      <input class="menu-btn" type="checkbox" id="menu-btn" />
      <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
      <ul class="menu">
            
        <li><h3 class="mt-3"> <?php echo $row['firstname'] . ' ' . $row['lastname'] ?></h3></li>
        
        <li><a href="logout.php">ออกจากระบบ</a></li>
      </ul>
    </header>
    <div class="sceen"></div>
    <div class="wallpaper-logo"></div>
     <div class="content">
      <div class="text-wrapper">
        <h1 class="text">แมว | หมา</h1>
      <p class="text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci consequuntur tempora doloremque aperiam commodi qui modi quia? Voluptatibus esse eius magnam vel est. Nihil labore ut officiis debitis, reiciendis inventore.
      </p> 
      </div>
     </div>
    <div class="sceen"></div>       
    
    <div class="gallery">
  <figure>
    <img src="https://devartiral.com/codepen/gallery-template-01.jpg" >
    <figcaption>(12 Weeks)</figcaption>
  </figure>

  <figure>
    <img src="https://images.unsplash.com/photo-1583512603805-3cc6b41f3edb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" >
    <figcaption>(9 Weeks)</figcaption>
  </figure>

  <figure>
    <img src="https://devartiral.com/codepen/gallery-template-03.jpg" >
    <figcaption>(5 Years) </figcaption>
  </figure>

  <figure>
    <img src="https://devartiral.com/codepen/gallery-template-04.jpg" >
    <figcaption>(2 Years) </figcaption>
  </figure>
  
    <figure>
    <img src="https://devartiral.com/codepen/gallery-template-05.jpg">
    <figcaption>(8 Weeks)</figcaption>
  </figure>
  
   <figure>
    <img src="https://devartiral.com/codepen/gallery-template-06.jpg" >
    <figcaption>(10 Weeks)</figcaption>
  </figure>

  <figure>
    <img src="https://media.istockphoto.com/photos/grey-cat-lying-on-bed-picture-id654651106?k=20&m=654651106&s=612x612&w=0&h=H9Ndo1XRXJilIfOry5tE4qJ-rgQLdxDlCNqtRlc5Z4g=" >
    <figcaption>(18 Weeks)</figcaption>
  </figure>

  <figure>
    <img src="https://media.istockphoto.com/photos/cute-terrier-dog-wearing-sunglasses-picture-id1387035098?b=1&k=20&m=1387035098&s=170667a&w=0&h=UFbN7aJy-n3QWxlgL7V1h5vzoadNDiF3wkKWqYH5mf8=" >
    <figcaption>(16 Weeks)</figcaption>
  </figure>

  <figure>
    <img src="https://images.unsplash.com/photo-1586671267731-da2cf3ceeb80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8ZG9nfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60">
    <figcaption>(18 Weeks)</figcaption>
  </figure>
  
  <figure>
    <img src="https://media.istockphoto.com/photos/golden-retriever-puppy-on-white-background-picture-id155234112?k=20&m=155234112&s=612x612&w=0&h=-whgn7C3Ua9TrGfQCqm3gVqUfRyoNL-X-Gd8uTbFIMk=">
    <figcaption>(18 Weeks)</figcaption>
  </figure>

  <figure>
    <img src="https://media.istockphoto.com/photos/front-view-of-british-shorthair-cat-7-months-old-sitting-picture-id104355461?k=20&m=104355461&s=612x612&w=0&h=9KPbuZ6tTUxqi-_WZT8zrjNrf1W8XBuXIw8ZIM_YQuI=" >
    <figcaption>(18 Weeks)</figcaption>
  </figure>

  <figure>
    <img src="https://media.istockphoto.com/photos/cat-licked-cream-off-cake-picture-id1364457103?k=20&m=1364457103&s=612x612&w=0&h=G5x0Ca8wv3gQn7taoYKykVKcBsMt-zl_B92bxFx0U4o=">
    <figcaption>(18 Weeks)</figcaption>
  </figure>
  <div class="sceen1"></div> 
   
</div>
</body>
</html>