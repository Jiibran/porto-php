<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<section class="webprog-hero">
    <div class="container">
        <div class="webprog-header">
            <h1>Pemrograman Web</h1>
            <p class="webprog-subtitle">Materi dasar untuk memulai di dunia pengembangan web</p>
        </div>
    </div>
</section>

<section class="webprog-content">
    <div class="container">
        <p class="section-desc">Berikut adalah materi dari pertemuan 1 sampai 6 tentang pemrograman web.</p>
        
        <div class="accordion">
            <!-- HTML Section -->
            <div class="accordion-item">
                <div class="accordion-header">
                    <div class="accordion-title">
                        <div class="accordion-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3>Pertemuan 1: HTML</h3>
                    </div>
                    <div class="accordion-toggle">
                        <i class="fas fa-plus"></i>
                    </div>
                </div>
                <div class="accordion-content">
                    <div class="code-example">
                        <h4>Struktur Dasar HTML</h4>
                        <pre><code>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Judul Halaman&lt;/title&gt;
    &lt;meta charset="UTF-8"&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Ini adalah heading&lt;/h1&gt;
    &lt;p&gt;Ini adalah paragraf.&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
                        </code></pre>
                    </div>
                    <div class="code-example">
                        <h4>Tag HTML Penting</h4>
                        <ul>
                            <li>&lt;h1&gt; sampai &lt;h6&gt; - Heading</li>
                            <li>&lt;p&gt; - Paragraf</li>
                            <li>&lt;a&gt; - Link</li>
                            <li>&lt;img&gt; - Gambar</li>
                            <li>&lt;div&gt; - Divisi/Section</li>
                            <li>&lt;span&gt; - Inline container</li>
                            <li>&lt;ul&gt;, &lt;ol&gt;, &lt;li&gt; - List</li>
                            <li>&lt;table&gt;, &lt;tr&gt;, &lt;td&gt; - Tabel</li>
                            <li>&lt;form&gt;, &lt;input&gt;, &lt;button&gt; - Form</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- CSS Section -->
            <div class="accordion-item">
                <div class="accordion-header">
                    <h3>Pertemuan 2: CSS</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="accordion-content">
                    <div class="code-example">
                        <h4>CSS Syntax</h4>
                        <pre><code>
selector {
    property: value;
}

/* Contoh */
body {
    background-color: #f0f0f0;
    font-family: Arial, sans-serif;
}

h1 {
    color: blue;
    text-align: center;
}
                        </code></pre>
                    </div>
                    <div class="code-example">
                        <h4>CSS Selectors</h4>
                        <ul>
                            <li><code>element</code> - memilih elemen HTML</li>
                            <li><code>#id</code> - memilih elemen dengan id tertentu</li>
                            <li><code>.class</code> - memilih elemen dengan class tertentu</li>
                            <li><code>element.class</code> - memilih elemen dengan class tertentu</li>
                            <li><code>element, element</code> - memilih multiple elemen</li>
                            <li><code>element > element</code> - memilih child langsung</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- JavaScript Section -->
            <div class="accordion-item">
                <div class="accordion-header">
                    <h3>Pertemuan 3: JavaScript</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="accordion-content">
                    <div class="code-example">
                        <h4>Dasar JavaScript</h4>
                        <pre><code>
// Variabel
let name = "John";
const age = 25;
var isStudent = true;

// Function
function greet(name) {
    return "Hello, " + name + "!";
}

// Output
console.log(greet(name));

// Event handling
document.getElementById("myButton").addEventListener("click", function() {
    alert("Button clicked!");
});
                        </code></pre>
                    </div>
                    <div class="code-example">
                        <h4>DOM Manipulation</h4>
                        <pre><code>
// Mengakses elemen
const element = document.getElementById("demo");

// Mengubah konten
element.innerHTML = "New content";

// Mengubah style
element.style.color = "red";

// Menambah/menghapus class
element.classList.add("highlight");
element.classList.remove("old-class");
                        </code></pre>
                    </div>
                </div>
            </div>
            
            <!-- PHP Introduction Section -->
            <div class="accordion-item">
                <div class="accordion-header">
                    <h3>Pertemuan 4: Pengenalan PHP</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="accordion-content">
                    <div class="code-example">
                        <h4>Syntax Dasar PHP</h4>
                        <pre><code>
&lt;?php
// Komentar satu baris
/* 
   Komentar 
   multi baris
*/

// Variabel
$name = "John";
$age = 25;
$isStudent = true;

// Output
echo "Hello, $name!";
echo "&lt;br&gt;";
echo "Umur: " . $age;

// Fungsi
function calculateSum($a, $b) {
    return $a + $b;
}

$result = calculateSum(5, 10);
echo "&lt;br&gt;Result: $result";
?&gt;
                        </code></pre>
                    </div>
                </div>
            </div>
            
            <!-- PHP Control Flow Section -->
            <div class="accordion-item">
                <div class="accordion-header">
                    <h3>Pertemuan 5: Mengontrol Alur Program PHP</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="accordion-content">
                    <div class="code-example">
                        <h4>Percabangan (If-Else)</h4>
                        <pre><code>
&lt;?php
$score = 85;

if ($score >= 90) {
    echo "Grade: A";
} elseif ($score >= 80) {
    echo "Grade: B";
} elseif ($score >= 70) {
    echo "Grade: C";
} elseif ($score >= 60) {
    echo "Grade: D";
} else {
    echo "Grade: F";
}

// Switch statement
$day = "Monday";

switch ($day) {
    case "Monday":
        echo "Hari pertama minggu ini";
        break;
    case "Friday":
        echo "Akhir minggu kerja";
        break;
    case "Saturday":
    case "Sunday":
        echo "Weekend";
        break;
    default:
        echo "Hari kerja biasa";
}
?&gt;
                        </code></pre>
                    </div>
                </div>
            </div>
            
            <!-- PHP Loop and Array Section -->
            <div class="accordion-item">
                <div class="accordion-header">
                    <h3>Pertemuan 6: Perulangan dan Array di PHP</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="accordion-content">
                    <div class="code-example">
                        <h4>Perulangan di PHP</h4>
                        <pre><code>
&lt;?php
// For loop
for ($i = 1; $i <= 5; $i++) {
    echo "$i &lt;br&gt;";
}

// While loop
$j = 1;
while ($j <= 5) {
    echo "Number: $j &lt;br&gt;";
    $j++;
}

// Do-while loop
$k = 1;
do {
    echo "Count: $k &lt;br&gt;";
    $k++;
} while ($k <= 5);

// Foreach loop (untuk array)
$colors = ["Red", "Green", "Blue"];
foreach ($colors as $color) {
    echo "$color &lt;br&gt;";
}
?&gt;
                        </code></pre>
                    </div>
                    <div class="code-example">
                        <h4>Array di PHP</h4>
                        <pre><code>
&lt;?php
// Indexed array
$fruits = ["Apple", "Banana", "Orange"];
echo $fruits[0]; // Output: Apple

// Associative array
$person = [
    "name" => "John",
    "age" => 30,
    "city" => "New York"
];
echo $person["name"]; // Output: John

// Multidimensional array
$students = [
    ["John", 85, "Science"],
    ["Mary", 90, "Math"],
    ["Bob", 78, "English"]
];
echo $students[1][0]; // Output: Mary

// Fungsi array
$numbers = [5, 2, 8, 1, 9];
sort($numbers); // Mengurutkan array
print_r($numbers);

$total = count($numbers); // Menghitung jumlah elemen
echo "&lt;br&gt;Total: $total";
?&gt;
                        </code></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
