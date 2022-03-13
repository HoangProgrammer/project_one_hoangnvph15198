<div id="main">

    <div class="head">
        <div class="col-div-6">
            <p class="nav"> Thống kê </p>
        </div>
        <?php require_once("nav_login.php") ?>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>

                    <th>mã khóa học </th>
                    <th>Tên khóa học</th>
                    <th>Tổng số bài học</th>
                    <th>Tổng số người học</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $data = GetData_Thong_ke();
                foreach ($data as $values) {
                    extract($values)
                ?>
                    <tr>
                        <td><?= $id_caurse ?></td>
                        <td><?= $NameCourse ?></td>
                        <td><?= $lesson ?></td>
                        <td><?= $user ?></td>
                    </tr>
                <?php } ?>

            </tbody>



        </table>

    </div>
</div>