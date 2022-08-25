<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,500;0,600;0,700;0,800;0,900;1,300;1,400&display=swap" rel="stylesheet">
    <title>Thêm bài blog</title>
    <style>
        * {
        padding: 0;
        margin: 0;
        color: #1a1f36;
        box-sizing: border-box;
        word-wrap: break-word;
        font-family:prompt;
        }
        body {
            min-height: 100%;
            background-color: #ffffff;
        }
        h1 {
            letter-spacing: -1px;
        }
        a {
        color: #5469d4;
        text-decoration: unset;
        }
        .login-root {
            background: #fff;
            display: flex;
            width: 100%;
            min-height: 100vh;
            overflow: hidden;
        }
        .loginbackground {
            min-height: 692px;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            z-index: 0;
            overflow: hidden;
        }
        .flex-flex {
            display: flex;
        }
        .align-center {
        align-items: center; 
        }
        .center-center {
        align-items: center;
        justify-content: center;
        }
        .box-root {
            box-sizing: border-box;
        }
        .flex-direction--column {
            -ms-flex-direction: column;
            flex-direction: column;
        }
        
        .box-divider--light-all-2 {
            box-shadow: inset 0 0 0 2px #e3e8ee;
        }
        .box-background--blue {
            background-color: #5469d4;
        }
        .box-background--white {
        background-color: #ffffff; 
        }
        .box-background--blue800 {
            background-color: #212d63;
        }
        .box-background--gray100 {
            background-color: #e3e8ee;
        }
        .box-background--cyan200 {
            background-color: #7fd3ed;
        }
        .padding-top--64 {
        padding-top: 64px;
        }
        .padding-top--24 {
        padding-top: 24px;
        }
        .padding-top--48 {
        padding-top: 48px;
        }
        .padding-bottom--24 {
        padding-bottom: 24px;
        }
        .padding-horizontal--48 {
        padding: 48px;
        }
        .padding-bottom--15 {
        padding-bottom: 15px;
        }


        .flex-justifyContent--center {
        -ms-flex-pack: center;
        justify-content: center;
        }

        .formbg {
            margin: 0px auto;
            width: 100%;
            max-width: 800px;
            background: white;
            border-radius: 4px;
            box-shadow: rgba(60, 66, 87, 0.12) 0px 7px 14px 0px, rgba(0, 0, 0, 0.12) 0px 3px 6px 0px;
        }
        span {
            display: block;
            font-size: 20px;
            line-height: 28px;
            color: #1a1f36;
        }
        label {
            margin-bottom: 10px;
        }
        
        .grid--50-50 {
            display: grid;
            grid-template-columns: 20% 80%;
            align-items: center;
        }

        .field input {
            font-size: 16px;
            line-height: 28px;
            padding: 8px 16px;
            width: 100%;
            min-height: 44px;
            border: unset;
            border-radius: 4px;
            outline-color: rgb(84 105 212 / 0.5);
            background-color: rgb(255, 255, 255);
            box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                        rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                        rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                        rgba(60, 66, 87, 0.16) 0px 0px 0px 1px, 
                        rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                        rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                        rgba(0, 0, 0, 0) 0px 0px 0px 0px;
        }

        input[type="submit"] {
            background-color: rgb(84, 105, 212);
            box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                        rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                        rgba(0, 0, 0, 0.12) 0px 1px 1px 0px, 
                        rgb(84, 105, 212) 0px 0px 0px 1px, 
                        rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                        rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                        rgba(60, 66, 87, 0.08) 0px 2px 5px 0px;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
        }
        .field-checkbox input {
            width: 20px;
            height: 15px;
            margin-right: 5px; 
            box-shadow: unset;
            min-height: unset;
        }
        .field-checkbox label {
            display: flex;
            align-items: center;
            margin: 0;
        }
        a.ssolink {
            display: block;
            text-align: center;
            font-weight: 600;
        }
        .footer-link span {
            font-size: 14px;
            text-align: center;
        }
        .listing a {
            color: #697386;
            font-weight: 600;
            margin: 0 10px;
        }

        .animationRightLeft {
        animation: animationRightLeft 2s ease-in-out infinite;
        }
        .animationLeftRight {
        animation: animationLeftRight 2s ease-in-out infinite;
        }
        .tans3s {
        animation: animationLeftRight 3s ease-in-out infinite;
        }
        .tans4s {
        animation: animationLeftRight 4s ease-in-out infinite;
        }

        @keyframes animationLeftRight {
        0% {
            transform: translateX(0px);
        }
        50% {
            transform: translateX(1000px);
        }
        100% {
            transform: translateX(0px);
        }
        } 

        @keyframes animationRightLeft {
        0% {
            transform: translateX(0px);
        }
        50% {
            transform: translateX(-1000px);
        }
        100% {
            transform: translateX(0px);
        }
        } 
        button{
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            
        }
        
    </style>
</head>
<body>
<div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
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
                  <input type="text" name="title">
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="content">Nội dung</label>
                    <textarea name="content" id=""  rows="20"></textarea>
                  </div>
                </div>
                <div class="field padding-bottom--24">
                  <label for="photo">Ảnh</label>
                  <input type="text" name="photo">
                </div>
                <button>Thêm</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>