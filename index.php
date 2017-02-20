<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://fonts.googleapis.com/css?family=Chathura|Comfortaa|Pangolin|Pridi" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Chathura|Comfortaa|Pangolin|Pridi|Questrial" rel="stylesheet">
<title>โปรแกรมคำนวณอัตราแลกเปลี่ยนเงินตราต่างประเทศ</title>
<style type="text/css">


  body {
      background-color:#FFFFFF;
      color:#FFFFFF;
      position: absolute;
      left: 50%;
      top: 50%;
        transform: translate(-50%, -50%);
        font-family: 'Pangolin', cursive;
        font-family: 'Chathura', sans-serif;
        
}

h3{
    font-family: 'Pangolin', cursive;
    font-family: 'Chathura', sans-serif;
   font-family: 'Comfortaa', cursive;
  font-family: 'Pridi', serif;
  font-family: 'Questrial', sans-serif;
}
h2 {
    font-family: 'Chathura', sans-serif;
    font-family: 'Comfortaa', cursive;
    font-family: 'Pridi', serif;
}
.wrapper{
  background-color: #FF6666;
  width:700px;
  height: 400px;
  border-radius: 20px;
}

</style>
</head>



<body>
  <div class="wrapper">
    <div> 
    <form action="exchange.php" method="GET">
<table width="600" border="0" align="center">
    <tr>
      <td colspan="2">
      <div align="center"><h2><br>โปรแกรมคำนวณอัตราแลกเปลี่ยนเงินตราต่างประเทศ </br> </h2>
      <h3> <br>The program calculates the exchange rate.  </h3> </br></div></td>
    </tr>
    <tr>
      <td width="150"><div align="right">จำนวนเงิน : </div></td>
      <td width="212"><input type="text" name="money" size="20"  maxlength="100" style="background: #F8F8FF";/>  บาทไทย (THB) </td>
    </tr>     
    <tr>
      <td width="150"><div align="right">เลือกสกุลเงิน :  </div></td>
      <td width="212"><select name="coin1" >
                <option value="KRW" >เกาหลีวอน (KRW)</option>
                <option value="MYR" >รังกิตมาเลเซีย(MYR)</option>
                <option value="SEK" >โครนสวีเดน(SEK)</option>               
              </select></td>
    </tr>  

    <tr>
      <td width="150"><div align="right">เลือกสกุลเงิน : </div></td>
      <td width="212"><select name="coin2" >
                <option value="THB" >ไทย (THB)</option>
                <option value="CHF" >ฟรังก์สวิส (CHF)</option>
                <option value="SGD" >ดอลลาร์สิงคโปร์(SGD)</option>               
              </select></td>
    </tr>  
    <tr align="center">
      <td colspan="2"> 
      <button style = "width:120px; height:40px;border-radius: 20px;line-height: 25px;background: #FFCC99; margin:40px; font-size: 16px; ">เเปลงสกุลเงิน  </button>
      </div></td>
    </tr>   
    <tr>
      <td colspan="2" style="font-size:20px; color:#F00;" align="center"></td>
    </tr>
  </table>
  </form>
<div align="center">
<?php
  session_start();
  if(isset($_SESSION["moneylast"])&&isset($_SESSION["resultlast"])){
    echo $_SESSION["moneylast"]." : ".$_SESSION["resultlast"];
  }
?>

</div>
</body>
</div>

</div>
</html>