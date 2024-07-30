<!DOCTYPE html>
<html>
<head>
    <title>Exam 1</title>
</head>
<body>
<?php

// Tạo mảng liên hợp chứa thông tin về 5 ngôn ngữ lập trình
$languages = [
    "Java" => [
        "name" => "Java",
        "year" => 1995,
        "frameworks" => ["Spring", "Hibernate", "Struts"]
    ],
    "C#" => [
        "name" => "C#",
        "year" => 2000,
        "frameworks" => [".NET", "Xamarin", "Unity"]
    ],
    "PHP" => [
        "name" => "PHP",
        "year" => 1995,
        "frameworks" => ["Laravel", "Symfony", "CodeIgniter"]
    ],
    "Javascript" => [
        "name" => "Javascript",
        "year" => 1995,
        "frameworks" => ["React", "Angular", "Vue"]
    ],
    "Python" => [
        "name" => "Python",
        "year" => 1991,
        "frameworks" => ["Django", "Flask", "Pyramid"]
    ]
];

// In thông tin của các ngôn ngữ ra màn hình
function print_languages($languages) {
    echo "<ul>";
    foreach ($languages as $language) {
        echo "<li>";
        echo "<strong>{$language['name']}</strong> (Năm: {$language['year']})";
        echo "<ul><li>Frameworks: " . implode(", ", $language['frameworks']) . "</li></ul>";
        echo "</li>";
    }
    echo "</ul>";
}

echo "<h2>Danh sách các ngôn ngữ lập trình:</h2>";
print_languages($languages);

// Sắp xếp các ngôn ngữ dựa trên tên của chúng
ksort($languages);

echo "<h2>Danh sách các ngôn ngữ lập trình (sắp xếp theo tên):</h2>";
print_languages($languages);

// Thêm 2 ngôn ngữ mới Golang và Ruby
$languages["Golang"] = [
    "name" => "Golang",
    "year" => 2009,
    "frameworks" => ["Gin", "Beego", "Echo"]
];

$languages["Ruby"] = [
    "name" => "Ruby",
    "year" => 1995,
    "frameworks" => ["Ruby on Rails", "Sinatra", "Hanami"]
];

echo "<h2>Danh sách các ngôn ngữ lập trình (sau khi thêm Golang và Ruby):</h2>";
print_languages($languages);

// Xoá ngôn ngữ Javascript
unset($languages["Javascript"]);

echo "<h2>Danh sách các ngôn ngữ lập trình (sau khi xoá Javascript):</h2>";
print_languages($languages);

?>
</body>
</html>

