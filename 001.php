<!DOCTYPE html>
<html>
<head>
    <title>Student Grades</title>
</head>
<body>
    <h1>Nhập Điểm Của Học Sinh</h1>
    <form method="post" action="">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <p>
                <label for="name<?php echo $i; ?>">Học sinh <?php echo $i; ?> Tên:</label>
                <input type="text" name="name<?php echo $i; ?>" id="name<?php echo $i; ?>" required>
                <label for="score<?php echo $i; ?>">Điểm:</label>
                <input type="number" name="score<?php echo $i; ?>" id="score<?php echo $i; ?>" min="0" max="10" step="0.1" required>
            </p>
        <?php endfor; ?>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $students = [];
        for ($i = 1; $i <= 5; $i++) {
            $name = $_POST["name$i"];
            $score = $_POST["score$i"];
            $students[] = ["name" => $name, "score" => (float)$score];
        }

        // Sắp xếp học sinh theo điểm số giảm dần
        usort($students, function($a, $b) {
            return $b['score'] <=> $a['score'];
        });

        // Tính điểm trung bình
        $totalScore = 0;
        foreach ($students as $student) {
            $totalScore += $student['score'];
        }
        $averageScore = $totalScore / count($students);

        // Phân loại
        function getGrade($score) {
            if ($score >= 8) {
                return 'Xuất sắc';
            } elseif ($score >= 6.5) {
                return 'Khá';
            } elseif ($score >= 5) {
                return 'Trung bình';
            } else {
                return 'Yếu';
            }
        }

        // Hiển thị kết quả
        echo "<h2>Điểm Của Học Sinh</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Tên</th><th>Điểm</th><th>Xếp loại</th></tr>";
        foreach ($students as $student) {
            echo "<tr>";
            echo "<td>{$student['name']}</td>";
            echo "<td>{$student['score']}</td>";
            echo "<td>" . getGrade($student['score']) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<p>Điểm Trung Bình: $averageScore</p>";
    }
    ?>
</body>
</html>
