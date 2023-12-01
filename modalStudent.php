<?php
include("connect.inc.php");
$idStudent = $_POST['studentCode'];
?>

<h3 class="d-flex justify-content-center fw-semibold mt-5">วิทยาลัยอาชีวศึกษานครปฐม</h3>
<p class="d-flex justify-content-center mt-3">90 ต. พระปฐมเจดีย์ อ.เมืองนครปฐม จ.นครปฐม 73000</p>

<h5 class="d-flex justify-content-center fw-semibold mt-5">รายงานผลการศึกษา</h5>
<div class="justify-content-center ">
    <div class="d-flex justify-content-around mt-2">
        <p>รหัสนักศึกษา :<span> <?php echo $idStudent ?></span></p>
        <p>ชื่อ - สกุล : <span>นายกฤษณชัย อุบลทิพย์</span></p>
    </div>
</div>


    <table class="table table-hover" style="width: 1100px;">
        <thead class="table-secondary">
            <tr>
                <th scope="col">รหัสวิชา</th>
                <th scope="col">ชื่อวิชา</th>
                <th scope="col">หน่วยกิต</th>
                <th scope="col">คะแนนที่ได้</th>
                <th scope="col">เกรด</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stu = $conn->query("SELECT * FROM subject");
            while ($row = $stu->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row['numSubject']; ?>
                    </td>
                    <td>
                        <?php echo $row['nameSubject']; ?>
                    </td>
                    <td>
                        <?php echo $row['credit']; ?>
                    </td>
                    <td>80</td>
                    <td>4.00</td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot class="table-active">
            <tr>
                <td colspan="4" class="text-center">เกรดเฉลี่ยประจำภาค</td>
                <td>4.00</td>
            </tr>
        </tfoot>
    </table>

