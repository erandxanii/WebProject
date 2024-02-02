<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="kontakti.css">
    <link rel="stylesheet" href="Header.css">
</head>
<body>
    <div class="header">
        <div class="logo"><a href="Home.html"><img src="logo.png" alt="Logo" class="foto1"></a></div>
        <div class="kontakti">
            <ul class="lista">
                <li><a href="Home.php" class="underline">Kryesore</a></li>
                <li><a href="Produktet.php" class="underline">Produktet</a></li>
                <li><a href="About us.php" class="underline">Rreth nesh</a></li>
                <li><a href="lajme.php" class="underline">Lajme</a></li>
            </ul>
        </div>
    </div>

    
<div class="b">
    <div class="main">
        <div class="teksti">
            <h1 class="titulli">Kontakti</h1>
            <p>Për çdo paqartësi ose rekomandim në lidhje me laboratorin tonë, na kontaktoni.</p>
            
        </div>
        <div class="foto">
            <div class="inputat">
                <form action="contact.php" method="post" >
             <input type="text" placeholder="Emri:" id="Emri" name="emri">   
             <input type="text" placeholder="Mbiemri:" id="Mbiemri" name="mbiemri">   
             <input type="email" placeholder="Email:" id="Email" name="email">   
                
            </div>
            <div class="textarea">
                <textarea name="mesazhi"cols="30" rows="10" placeholder="Mesazhi juaj:" id="textarea"></textarea><br>
                <input type="submit" onclick="validateContactForm()">
            </div>
            </form>
        </div>

    </div>
</div>


  <footer>
        <div class="fundi"> <p>E drejta e autorit ©2023</p></div>
         <div class="asd">
             <ul class="footerlist">
                <a href="#" class="footerunderline"> <li class="listelements">Politika e mbrojtjes së të dhënave</li></a>
                <a href="#" class="footerunderline">  <li class="listelements">Marrëveshja e përdoruesit</li></a>
                 <a href="#" class="footerunderline"> <li class="listelements">Kushtet e Përdorimit</li></a>
                 <a href="#" class="footerunderline"> <li class="listelements">Cookies</li></a>
             </ul>
         </div>
         <div> <a href="https://www.linkedin.com/"><img src="LI-Logo.png" alt="Linkedin Logo" class="linkedin"></a></div>
     </footer>


 <script>


function validateContactForm() {

        var emri = document.getElementById('Emri').value; 
        var mbiemri = document.getElementById('Mbiemri').value;
        var email = document.getElementById('Email').value;
        var text = document.getElementById('textarea').value;

       
     
        if (emri.length<2) {
          alert('Please enter a valid name!');
          return false;
        }
        if (mbiemri.length<2) {
          alert('Please enter a valid surname!');
          return false;
        }
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
          alert('Please enter a valid email address!');
          return false;
        }
        if(text.length==0){
            alert('Please enter your message!');
            return false;
        }


        if(text.length<10){
            alert('Your message is too short!');
            return false;
        }
        if(text.length>500){
            alert('Your message is too long!');
            return false;
        }
        
        document.getElementById('emri').value=null;
        document.getElementById('mbiemri').value=null;
        document.getElementById('email').value=null;
        document.getElementById('textarea').value=null;

        return true;
      }


 </script>




    
</body>
</html>