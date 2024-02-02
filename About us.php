<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="About us.css">
    <link rel="stylesheet" href="Header.css">
</head>
<body>
    <div class="header">
        <div class="logo"><a href="Home.html"><img src="logo.png" alt="Logo" class="foto1"></a></div>
        <div class="kontakti">
            <ul class="lista">
                <li><a href="Home.php" class="underline">Kryesore</a></li>
                <li><a href="Produktet.html" class="underline">Produktet</a></li>
                <li><a href="lajme.php" class="underline">Lajme</a></li>
                <li><a href="Kontakti.php" class="underline">Kontakti</a></li>
            </ul>
        </div>
    </div>
    <div class="a">
        <div class="main">
            <div class="teksti">
                <h1 class="titulli">Zyret</h1>
                <p>Zyrat tona dhe të partnerëve të Laboratorit 'Preventiva' janë të vendosura në Kosovë, Shqipëri, Gjermani dhe në Shtetet e Bashkuara të Amerikës.</p>
            </div>
            <div class="foto">
                <img src="zyret.png" alt="Zyret" class="zyra" id="sliderImage">
                <button onclick="ndryshoFoto()" style="border-radius: 50%;border: 0px;background-color: lightblue;"><img src="arrow.png" alt="" class="arrow"></button>
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

let fotoIndex = 1;
let fotoArray = ["zyret.png", "zyret2.png","zyret3.png"];

function ndryshoFoto() {
    document.getElementById("sliderImage").src = fotoArray[fotoIndex];
    fotoIndex++;
    
    if (fotoIndex >= fotoArray.length) {
        fotoIndex = 0;
    }
}

 </script>




    
</body>
</html>