<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../img/favicon.ico.png">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,500;0,600;0,700;0,800;0,900;1,300;1,400&display=swap" rel="stylesheet">
    <title>Thêm bài blog</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<div class="login-root">
   
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1>Thêm bài đăng</h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              
              <form action="process_insert.php" method="post" id="stripe-login">
                <div class="field padding-bottom--24">
                  <label for="title">Tiêu đề</label>
                  <input type="text" id="title" name="title">
                  <div class="error" id="title_error"></div>
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="content">Nội dung</label>
                    <textarea name="content" id="content"  rows="20"></textarea>
                    
                  </div>
                  <div class="error" id="content_error"></div>
                </div>
                <div class="field padding-bottom--24">
                  <label for="photo">Ảnh</label>
                  <input type="text" id="photo" name="photo">
                  <div class="error" id="photo_error"></div>
                </div>
                <button onclick="return validate()">Thêm</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  
  <script src="./script.js"></script>
</body>
</html>