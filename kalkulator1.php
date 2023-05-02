<?php 

$angka1 = "";
$angka2 = "";
$mtk = "";
$hasil = "";
if(isset($_POST['submit'])){
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $mtk = $_POST['mtk'];
        
    if($mtk == "+"){
        $hasil = $angka1+$angka2;
    } elseif($mtk == "-"){
        $hasil = $angka1-$angka2;
    } elseif($mtk == ":"){
        $hasil = $angka1/$angka2;
    } else {
        $hasil = $angka1*$angka2;
    }
}

if(isset($_POST['reset'])){
    $angka1 = "";
    $angka2 = "";
    $mtk = "";
    $hasil = "";
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Mini Kalkulator</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <!-- my font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;800&display=swap" rel="stylesheet">

    <!-- my css -->
    <style>
      html,
      body {
        height: 100%;
        background-color: #fdf4f5;
      }

      .global-container {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .kalkulator {
        position: relative;
        width: 584px;
        height: 479px;
        background: #e8a0bf;
        border: 10px solid #ba90c6;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 33px;
        box-sizing: border-box;
      }

      .head {
        position: absolute;
        width: 504px;
        height: 42px;
        color: #fdf4f5;
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
      }

      h1 {
        position: absolute;
        font-family: "Poppins";
        font-style: normal;
        font-weight: 800;
        font-size: 50px;
        line-height: 75px;
        width: 100%;
      }

      #inpt {
        width: 100%;
        margin: 0 auto;
        margin-top: 125px;
      }

      input:focus {
        outline: none !important;
      }

      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        -webkit-appearance: none;
      }

      #angka1 {
        background: #ba90c6;
        border: 3px solid #fdf4f5;
        /* box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); */
        border-radius: 14px;
        width: 201px;
        height: 68px;
        font-size: 30px;
        font-family: "Poppins";
        color: #fdf4f5;
        font-weight: 600 !important;
        text-align: center !important;
      }

      select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
      }

      select:focus {
        outline: none;
      }

      #mtk {
        background: #c0dbea;
        border: 3px solid #fdf4f5;
        /* box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); */
        border-radius: 14px;
        width: 68px;
        height: 68px;
        margin: 0 11px;
        text-align: center;
        justify-content: center;
        font-weight: 600 !important;
        color: #fdf4f5;
        font-family: "Poppins";
        font-size: 40px;
        cursor: pointer;
      }

      #angka2 {
        background: #ba90c6;
        border: 3px solid #fdf4f5;
        /* box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); */
        border-radius: 14px;
        width: 201px;
        height: 68px;
        font-size: 30px;
        font-family: "Poppins";
        font-weight: 600 !important;
        color: #fdf4f5;
        text-align: center !important;
      }

      #otp {
        width: 100%;
        margin: 0 auto;
        margin-top: 250px;
      }

      #tampilan1 {
        background: #ba90c6;
        border: 3px solid #fdf4f5;
        /* box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); */
        border-radius: 14px;
        width: 302px;
        height: 68px;
        font-size: 30px;
        font-family: "Poppins";
        color: #fdf4f5;
        font-weight: 600 !important;
        cursor: pointer;
        text-align: center !important;
      }

      h2 {
        font-family: "Roboto";
        font-style: normal;
        font-weight: 800;
        font-size: 80px;
        line-height: 59px;
        display: flex;
        align-items: center;
        text-align: center;
        margin: 0 4px;
        color: #fdf4f5;
        cursor: pointer;
      }

      #tampilan2 {
        background: #c0dbea;
        border: 3px solid #fdf4f5;
        /* box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); */
        border-radius: 14px;
        width: 135px;
        height: 68px;
        font-size: 30px;
        font-family: "Poppins";
        color: #fdf4f5;
        cursor: pointer;
        font-weight: 600 !important;
        text-align: center !important;
      }

      #btns {
        width: 100%;
        margin: 0;
        margin-top: 350px;
      }

      button {
        background-color: #ba90c6 !important;
        font-weight: 600 !important;
        border: 3px solid #fdf4f5 !important;
        border-radius: 14px !important;
        width: 225px !important;
        height: 68px !important;
        font-family: "Poppins" !important;
        font-size: 40px !important;
      }

      button:hover {
        color: #ffffff !important;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25) !important;
        background-color: #c0dbea !important;
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25) !important;
      }

      input:hover {
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25) !important;
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25) !important;
      }

      input::placeholder{
        color: #FDF4F5;
        mix-blend-mode: normal;
        opacity: 0.6;
        font-size: 20px;
        font-weight: 300;
      }

      h2:hover {
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
      }

      select:hover {
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25) !important;
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25) !important;
      }
    </style>
  </head>
  <body>
    <div class="global-container">
      <div class="kalkulator position-relative">
        <form action="" class="position-relative" method="POST">
          <div
            class="head text-center position-absolute start-50 top-0 translate-middle-x"
          >
            <h1 class="mx-auto start-50 translate-middle-x mt-2">
              MINI KALKULATOR
            </h1>
          </div>
          <div class="row position-absolute" id="inpt">
            <div class="col">
              <input type="number" value="<?php echo $angka1; ?>" name="angka1" id="angka1" placeholder="Masukan Angka" required/>
            </div>
            <div class="col">
              <select name="mtk" id="mtk">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value=":">:</option>
                <option value="x">x</option>
              </select>
            </div>
            <div class="col">
              <input type="number" name="angka2" value="<?php echo $angka2; ?>" id="angka2" placeholder="Masukan Angka" required/>
            </div>
          </div>
          <div class="row position-absolute" id="otp">
            <div class="col">
              <input type="text" name="tampilan1" value="<?php echo $angka1.$mtk.$angka2; ?>" id="tampilan1" disabled placeholder="(terisi otomatis)"/>
            </div>
            <div class="col">
              <h2>=</h2>
            </div>
            <div class="col">
              <input type="number" value="<?php echo $hasil; ?>" id="tampilan2" disabled />
            </div>
          </div>
          <div class="row position-absolute" id="btns">
            <div class="col">
              <button class="btn btn-primary" type="submit" value="submit" name="submit" id="submit">HASIL</button>
            </div>
            <div class="col">
              <button class="btn btn-primary" type="submit" value="reset" name="reset" id="reset">RESET</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
