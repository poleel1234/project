<?php
@session_start();
include "connect_db.php";
ob_start();
require_once('mpdf/mpdf.php');
?>
<table align="right" style="border:2px solid #000000">
     <tr>
          <td colspan="2" style="text-align: right;">
              หนังสือกู้ที่ <b>................./.................  
                      </tr>
    <tr>
          <td colspan="2" style="text-align: right;">
              ชื่อผู้กู้ <b>..................................  
                      </tr>
</table>
<table width="100%" border="0" align="center" cellspacing="0">
    <tr>
   <td colspan="2" style="text-align: center;"><br><br><h3>สัญญาค้ำประกันเงินกู้เพื่อพัฒนาคุณภาพชีวิต</h3></td><br><br>
    </tr>
       <tr>
          <td colspan="2" style="text-align: right;">
              เขียนที่ <b>..................................  
                      </tr>
     <tr>
   <td colspan="2" style="text-align: center;">ชื่อผู้ค้ำประกัน..........................................</td><br><br>
    </tr>
        <tr>
          <td colspan="2" style="text-align: right;">
              วันที่ <b>.................................................  
                      </tr>
 <tr>
        <td colspan="2" style="text-align: left;"><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;ข้าพเจ้า.......................................................สมาชิกแห่ง สถาบันการเงินชุมชนเทศบาลเมืองยโสธร หมายเลขทะเบียน<br>
        เลขที่..................ที่อยุ่ปัจจุบันบ้านเลขที่.................ถนน............................ตำบล............................... <br>
        อำเภอ......................จังหวัด..........................โทรศัพท์...............................ขอทำหนังสือค้ำประกันให้ไว้ต่อสถาบันการเงิน<br>
        ชุมชนเทศบาลเมืองยโสธร ซึ่งต่อไปนี้ในสัญญาหนังสือค้ำประกันนี้จะใช้คำว่า สถาบันการเงิน เพื่อเป็นหลักฐานดังต่อไปนี้<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;ข้อ ๑. ตามที่.....................................ได้กู้เงินจากสถาบันการเงินชุมชนเทศบาลเมืองยโสธร ตามสัญญาเงินกู้<br>
        เพื่อพัฒนาคุณภาพชีวิตเลขที่............................./.....................ลงวันที่...............................นั้น ข้าพเจ้ายินยอมค้ำประกันอย่างไม่จำกัด<br>
        เพื่อหนี้สินเกี่ยวกับเงินกู้รายนี้ <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;ข้อ ๒. ข้าพเจ้าได้ทราบข้อผูกพ้นของผู้กู้ในเรื่องการส่งงวดชำระหนี้ อัตราดอกเบี้ย และการเรียกคืนเงินกู้ก่อนถึงกำหนด<br>
        ตามที่กล่าวไว้ในหนังสือกู้นั้นโดยตลอดแล้วข้าพเจ้ายอมค้ำประกันการปฏิบัติตามข้อผูกพันนั้นๆ ทุกประการ<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;ข้อ ๓. ในกรณีที่สถาบันการเงินยอมผ่อนเวลาส่งเงินงวดชำระหนี้ ตามที่กำหนดไว้นั้นให้แก่ผู้กู้ ข้าพเจ้าถือว่าการผ่อนเวลา<br>
        เช่นนั้นเป็นความประสงค์ของข้าพเจ้าด้วย จึงให้ถือว่าข้าพเจ้าตกลงในการผ่อนเวลานั้นๆ ด้วยทุกครั้ง<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;ข้อ ๔. เมื่อปรากฏว่าผู้กู้ไม่ชำระหนี้สินซึ่งข้าพเจ้าค้ำประกันไว้นี้แก่สถาบันการเงิน ตามข้อผูกพันไม่ว่าเพราะเหตุใดๆ ไม่ว่า<br>
        ผู้กู้ยังมีตัวตนอยู่หรือไม่ และสถาบันการเงินได้แจ้งความนั้นให้ข้าพเจ้าทราบ ข้าพเจ้ายอมรับผิดชอบชำระหนี้ดังกล่าว ให้แก่สถาบัน<br>
        การเงินแทนผู้กู้ทันทีโดยมิพักใช้สิทธิ์ของผู้ค้ำประกัน ตามมาตรา ๖๘๘ , ๖๘๙ , ๖๙๐ แห่งประมวลกฏหมายแพ่งและพาณิชย์นั้นแต่<br>
        ประการใดเลย<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;ข้อ ๕. ข้าพเจ้ายอมรับผูกพันว่า การที่ข้าพเจ้าออกจากการเป็นสมาชิกสถาบันการเงินนี้ไม่ว่าเพราะเหตุใดๆ ไม่เป็นเหตุให้<br>
        ข้าพเจ้าหลุดพ้นจากากรค้ำประกันรายนี้ จนกว่าผู้ที่ข้าพเจ้าค้ำประกันนี้จะได้ให้สมาชิกรายอื่น ซึ่งคณะกรรมการดำเนินการของสถาบัน<br>
        การเงินเห็นสมควรเข้าเป็นผู้ค้ำประกันแทนข้าพเจ้า<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;ข้อ ๖. ในกรณีที่ข้าพเจ้าต้องชำระหนี้สินให้แก่สถาบันการเงินแทนผู้กู้ ข้าพเจ้ายินยอมให้เจ้าหน้าที่ผู้จ่ายเงินได้รายเดือนของ<br>
        ข้าพเจ้าเมื่อได้รับมอบหมายจากสถาบันการเงิน  หักจำนวนเงินงวดชำระหนี้ซึ่งข้าพเจ้าต้องส่งต่อสถาบันการเงิน จากเงินได้รายเดือน<br>
        ของข้าพเจ้าเพื่อส่งต่อสถาบันการเงิน ความยินยอมนี้ให้มีอยุ่ตลอดไป ทั้งนี้จนกว่าจะได้ชำระหนี้ที่ค้ำประกันนี้โดยสิ้นเชิงแล้ว<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;ข้อ ๗. หากข้าพเจ้าได้ย้ายที่อยุ่จากที่ได้แจ้งไว้ในหนังสือนี้ ข้าพเจ้าจะแจ้งให้สถาบันการเงินทราบเป็นหนังสือโดยทันที ถ้า<br>
        ข้าพเจ้ามิได้แจ้งให้สถาบันการเงินทราบ และหากมีการดำเนินคดีเกี่ยวกับหนี้สินตามสัญญานี้ ให้ถือว่าข้าพเจ้ายังคงภูมิลำเนาอยู่ตามที่<br>
        ระบุไว้ในหนังสิอนี้ทุกประการ<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;ข้อ ๘. ผู้ค้ำประกันได้รับสำเนาคู่ฉบับหนังสือค้ำประกันนี้ไว้แล้วตั้งแต่วันที่ลงนามในหนังสือค้ำประกันนี้<br>
        ผู้ค้ำประกันได้อ่านข้อความในหนังสือค้ำประกันนี้โดยตลอดแล้วเห็นว่าถูกต้อง จึงได้ลงลายมือชื่อไว้เป็นสำคัญต่อหน้าพยาน<br><br>
        </td>  
    </tr>
    
     <tr>
         <td colspan="2" style="text-align: center;"><br>ลงชื่อ...................................ผู้ค้ำประกัน<br>(.....................................)</td><br><br>
    </tr>
      <tr>
         <td colspan="1" style="text-align: left;"><br>ลงชื่อ...................................พยาน<br>(.....................................)</td>
      <td colspan="1" style="text-align: right;"><br>ลงชื่อ...................................พยาน<br>(.....................................)</td>
    </tr>
       <tr>
        
      <td colspan="2" style="text-align: right;"><br>.............../คำยินยอม.................</td>
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