<!DOCTYPE html>
<html>
<style>
    /*set border to the form*/
     
    form {
        border: 3px solid #f1f1f1;
    }
    /*assign full width inputs*/
     
    textarea {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 2px solid #000;
        box-sizing: border-box;
        border-radius: 10px; 
        background-color:#D9D9D9;
    }
    /*set a style for the buttons*/
     
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }
    /* set a hover effect for the button*/
     
    button:hover {
        opacity: 0.8;
    }
    /*set extra style for the cancel button*/
     
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        border-radius: 10px;
    }
    /*set image properties*/
     
    /* img {
        width: 100%;
        border-radius: 10px;
    } */
    /*set padding to the container*/
     
    .container {
        padding: 16px;
    }
    /*set the forgot password text*/
     
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
    }
</style>
<title>submit page</title>
<link rel="shortcut icon" href="/meow/submit//favicon.ico" />
<meta property="og:title" content="submit your heartfelt" />
<meta property="og:image" content="https://i.imgur.com/R8676fY.png" />
<body>

    <h2>Meow</h2>
    <form style="border-radius: 10px;" action="action.php" method="POST">
        <div class="imgcontainer">
            <img src="images/fly.png" width="100" >
        </div>
 
        <div style="border-radius: 10px;" class="container">
            <label style="font-size: 30px;"><b>say anything : </b></label>

            <textarea rows="5" id="story" name="story" >meow</textarea>
            <button style="border-radius: 10px;" type="submit">submit</button>
        </div>
    </form>
    
    <div class="imgcontainer">
        <img style="width: 100%;border-radius: 10px;" src="images/cat1.jpg">
    </div>
    <div class="imgcontainer">
        <img style="width: 100%;border-radius: 10px;" src="images/cat2.jpg" >
    </div>
</body>
 
</html>