<?php
@session_start();
include "connect_db.php";
ob_start();
require_once('mpdf/mpdf.php');
?>
<table width="100%" border="0" align="center" cellspacing="0">
  <tr>
      <td colspan="2" style="text-align: center;"><br><br><h3>หนังสือยินยอมให้ส่วนราชการหักเงินชำระหนี้เงินกู้เพื่อพัฒนาคุณภาพชีวิต<br>สถาบันการเงินชุมชนเทศบาลเมืองยโยธร</h3></td><br><br>
    </tr>
    <tr>
          <td colspan="2" style="text-align: right;">
              เขียนที่ <b>..................................  
                      </tr>
    <tr>
              <td colspan="2" style="text-align: right;">
              วันที่ <b>..................................  
          </td> 
    </tr>
    <tr>
        <td colspan="2" style="text-align: left;"><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;ข้าพเจ้า.......................................................อายุ..........................ปีที่อยู่ปัจจุบันบ้านเลขที่.............ถนน...................
        ตำบล.......ในเมือง.....อำเภอ.....เมือง.....จังหวัด....ยโสธร......เป็นสมาชิกสถาบันการเงินในชุมชนเทศบาลเมืองยโสธร เลขทะเบียน <br>
        สมาชิก......................มีความประสงค์ให้ส่วนราชการที่ช้าพเจ้ารับเงินเบี้ยยังชีพอยู่ในปัจจุบันหักเงินรายได้เบี้ยยังชีพและนำส่งสถาบัน<br>
        การเงินชุมชนเทศบาลเมืองยโยธร  ที่ข้าพเจ้าเป็นสมาชิกอยู่  จึงมีหนังสือให้ความยินยอมฉบับนี้ไว้กับเทศบาลเมืองยโสธร ดังนี้<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;ข้อ ๑. ยินยอมให้เจ้าหน้าที่ผู้จ่ายเงินหักเงินเบี้ยยังชีพตามจำนวนที่สถาบันการเงินชุมชนเทศบาลเมืองยโสธร ได้แจ้งให้ในแต่ละ<br>
        เดือน และส่งชำระหนี้ให้สถาบันการเงินแทนข้าพเจ้าทุกเดือน<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;ข้อ ๒. การหักเงินเบี้ยยังชีพ ตามข้อ ๑. ข้าพเจ้ายินยอมให้หักเงินดังกล่าวชำระหนี้ให้สถาบันการเงินชุมชนเทศบาลเมืองยโสธร<br>
        เป็นอันดับแรก<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;ข้อ ๓. หนังสือยินยอมให้หักเงินเดือนให้มีผลตั้งแต่บัดนี้เป็นต้นไป ข้าพเจ้าสัญญาว่าจะไม่ถอนการให้คำยินยอมนี้ไม่ว่าทั้งหมด<br>
        หรือบางส่วน จนกว่าข้าพเจ้าจะพ้นจากการเป็นสมาชิกของสถาบันการเงิน หรือพ้นจากภาระหนี้สินที่ข้าพเจ้ามีต่อสถาบันการเงิน<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;หนังสือนี้ทำขึ้น ๒ ฉบับ มีข้อความตรงกัน ฉบันหนึ่งเก็บไว้ที่ส่วนราชการผู้จ่ายเงินเบี้ยยังชีพ และฉบับที่สองเก็บไว้ที่สถาบัน<br>
        การเงินชุมชนเทศบาลเมืองยโสธร
        </td>  
    </tr>
    <tr>
        <td colspan="2" style="text-align: center;">
            <br><br>ลงชื่อ...................................... ผู้ให้คำยินยอม<br><br>
        (............................................)<br><br>
        
        </td>
    </tr>
       <tr>
        <td colspan="1" style="text-align: left;"><br>
       ลงชื่อ...................................... พยาน<br><br>
        &emsp;(............................................)<br><br>
        </td> 
          <td colspan="1"style="text-align: right;"><br>
     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ลงชื่อ......................................พยาน<br><br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;(............................................)<br><br>
        </td> 
    </tr>
	</table><br>
-------------------------------------------------------------------------------------------------------------------------------------------
<table width="100%" border="0" align="center" cellspacing="0">
  <tr>
      <td colspan="2" style="text-align: center;"><br><br><h3>หนังสือยินยอมให้ส่วนราชการหักเงินชำระหนี้เงินกู้เพื่อพัฒนาคุณภาพชีวิต<br>สถาบันการเงินชุมชนเทศบาลเมืองยโยธร</h3></td><br><br>
    </tr>
    <tr>
          <td colspan="2" style="text-align: right;">
              เขียนที่ <b>..................................  
                      </tr>
    <tr>
              <td colspan="2" style="text-align: right;">
              วันที่ <b>..................................  
          </td> 
    </tr>
    <tr>
        <td colspan="2" style="text-align: left;"><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;ข้าพเจ้า.......................................................อายุ..........................ปีที่อยู่ปัจจุบันบ้านเลขที่.............ถนน...................
        ตำบล.......ในเมือง.....อำเภอ.....เมือง.....จังหวัด....ยโสธร......เป็นสมาชิกสถาบันการเงินในชุมชนเทศบาลเมืองยโสธร เลขทะเบียน <br>
        สมาชิก......................มีความประสงค์ให้ส่วนราชการที่ช้าพเจ้ารับเงินเบี้ยยังชีพอยู่ในปัจจุบันหักเงินรายได้เบี้ยยังชีพและนำส่งสถาบัน<br>
        การเงินชุมชนเทศบาลเมืองยโยธร  ที่ข้าพเจ้าเป็นสมาชิกอยู่  จึงมีหนังสือให้ความยินยอมฉบับนี้ไว้กับเทศบาลเมืองยโสธร ดังนี้<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;ข้อ ๑. ยินยอมให้เจ้าหน้าที่ผู้จ่ายเงินหักเงินเบี้ยยังชีพตามจำนวนที่สถาบันการเงินชุมชนเทศบาลเมืองยโสธร ได้แจ้งให้ในแต่ละ<br>
        เดือน และส่งชำระหนี้ให้สถาบันการเงินแทนข้าพเจ้าทุกเดือน<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;ข้อ ๒. การหักเงินเบี้ยยังชีพ ตามข้อ ๑. ข้าพเจ้ายินยอมให้หักเงินดังกล่าวชำระหนี้ให้สถาบันการเงินชุมชนเทศบาลเมืองยโสธร<br>
        เป็นอันดับแรก<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;ข้อ ๓. หนังสือยินยอมให้หักเงินเดือนให้มีผลตั้งแต่บัดนี้เป็นต้นไป ข้าพเจ้าสัญญาว่าจะไม่ถอนการให้คำยินยอมนี้ไม่ว่าทั้งหมด<br>
        หรือบางส่วน จนกว่าข้าพเจ้าจะพ้นจากการเป็นสมาชิกของสถาบันการเงิน หรือพ้นจากภาระหนี้สินที่ข้าพเจ้ามีต่อสถาบันการเงิน<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;หนังสือนี้ทำขึ้น ๒ ฉบับ มีข้อความตรงกัน ฉบันหนึ่งเก็บไว้ที่ส่วนราชการผู้จ่ายเงินเบี้ยยังชีพ และฉบับที่สองเก็บไว้ที่สถาบัน<br>
        การเงินชุมชนเทศบาลเมืองยโสธร
        </td>  
    </tr>
    <tr>
        <td colspan="2" style="text-align: center;">
            <br><br>ลงชื่อ...................................... ผู้ให้คำยินยอม<br><br>
        (............................................)<br><br>
        
        </td>
    </tr>
       <tr>
        <td colspan="1" style="text-align: left;"><br>
       ลงชื่อ...................................... พยาน<br><br>
        &emsp;(............................................)<br><br>
        </td> 
          <td colspan="1"style="text-align: right;"><br>
     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ลงชื่อ......................................พยาน<br><br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;(............................................)<br><br>
        </td> 
    </tr>
	</table>
<?Php
$html = ob_get_contents();
ob_end_clean();
$pdf = new mPDF('th', 'A4', '0', 'THSaraban'); //การตั้งค่ากระดาษถ้าต้องการแนวตั้ง ก็ A4 เฉยๆครับ ถ้าต้องการแนวนอนเท่ากับ A4-L
$pdf->SetAutoFont();
$pdf->SetDisplayMode('fullpage');
$pdf->WriteHTML($html, 2);
$pdf->Output();
?>