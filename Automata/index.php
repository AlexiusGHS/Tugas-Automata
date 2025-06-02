<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Simulasi DFA</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Simulasi Deterministic Finite Automata (DFA)</h2>
    
    <form action="" method="POST">
      <label>Masukkan String Biner (0 dan 1):</label>
      <input type="text" name="input_string" pattern="[01]+" required>

      <button type="submit">Proses</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      require 'dfa.php';
      $input = $_POST['input_string'];
      $result = simulateDFA($input);
      echo "<div class='result'>";
      echo "<p>Input: <strong>$input</strong></p>";
      echo "<p>Hasil: <strong style='color:" . ($result ? 'green' : 'red') . "'>" . ($result ? 'DITERIMA' : 'DITOLAK') . "</strong></p>";
      echo "</div>";
    }
    ?>

    <div class="tuple">
      <h3>Tuple DFA:</h3>
      <p><strong>Q</strong> = {q0, q1, q2, q3}</p>
      <p><strong>∑</strong> = {0, 1}</p>
      <p><strong>δ</strong> = Fungsi transisi (lihat di bawah)</p>
      <ul>
        <li>δ(q0,0) = q0</li>
        <li>δ(q0,1) = q1</li>
        <li>δ(q1,0) = q1</li>
        <li>δ(q1,1) = q3</li>
        <li>δ(q2,0) = q1</li>
        <li>δ(q2,1) = q3</li>
        <li>δ(q3,0) = q2</li>
        <li>δ(q3,1) = q3</li>
      </ul>
      <p><strong>S</strong> = q0</p>
      <p><strong>F</strong> = q1</p>
    </div>
  </div>
</body>
</html>
