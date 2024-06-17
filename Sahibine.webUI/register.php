<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sahibine Giriş Sayfası</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 0px;
    width: 500px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 20%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 20px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}

    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="PagesPHP/userkaydetok.php" method="post" >
        <h3>Kayıt Formu</h3>

        <label for="username">Adınız*</label>
        <input type="text" placeholder="Adınızı Giriniz"  name="FirstName" required>

        <label for="username">Soyadınız*</label>
        <input type="text" placeholder="Soyadınızı Giriniz"  name="LastName" required>

        <label for="username">Telefon*</label>
        <input type="number" placeholder="Soyadınızı Giriniz"  name="Phone" required>

        <label for="username">Adresiniz*</label>
        <input type="text" placeholder="Soyadınızı Giriniz"  name="Adress" required>

        <label for="username">TC No*</label>
        <input type="number" placeholder="Soyadınızı Giriniz"  name="TC" required>

        <label for="username">Mail*</label>
        <input type="Email" placeholder="Soyadınızı Giriniz"  name="Mail" required>

        <label for="password">Şifreniz*</label>
        <input type="password" placeholder="Şifrenizi Giriniz"  name="Password" required>

        <label for="username">Profil Fotoğrafınız*</label>
        <input type="text" placeholder="Görsel Url Giriniz"  name="UserImage" required>

        <button type="submit" value="Ekle">Kayıt Ol</button>
    </form>
</body>
</html>
