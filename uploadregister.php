<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'db_config.php';

// Generate unique order ID
$order_id = rand(100000, 999999);

// Collect POST data safely
$name = trim($_POST["name"] ?? '');
$email = trim($_POST["email"] ?? '');
$mobile_no = trim($_POST["mobile_no"] ?? '');
$regno = trim($_POST["regno"] ?? '');
$institution = trim($_POST["institution"] ?? '');
$year = trim($_POST["year"] ?? '');

// Amount
$amount = 500;

// Validation
if (empty($name) || !preg_match("/^[a-zA-Z-' ]*$/", $name)) {
    echo "<script>alert('Please enter a valid name'); window.location.href='https://sageuniversity.in/sage_events/vac_molecular_tools';</script>";
    exit;
}
if (empty($mobile_no) || !preg_match("/^[0-9]{10}$/", $mobile_no)) {
    echo "<script>alert('Please enter a valid mobile number'); window.location.href='https://sageuniversity.in/sage_events/vac_molecular_tools';</script>";
    exit;
}
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('Please enter a valid email'); window.location.href='https://sageuniversity.in/sage_events/vac_molecular_tools';</script>";
    exit;
}

// Insert query
$stmt = $conn->prepare("
    INSERT INTO vacmoleculartools
    (name, mobile_no, email, regno, institution, year, order_id, amount)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)
");

$stmt->bind_param("ssssssii", 
    $name, $mobile_no, $email, $regno, $institution, $year, $order_id, $amount
);

if ($stmt->execute()) {
    $data = [
        'order_id' => $order_id,
        'amount' => $amount . '.00',
        'firstname' => $name,
        'email' => $email,
        'phone' => $mobile_no,
        'productinfo' => 'vacmoleculartools'
    ];
    ?>

    <!-- Secure POST Redirect -->
    <form id="redirectForm" method="POST" action="https://sageuniversity.in/sage_events/vac_molecular_tools/easebuzz/index.php">
        <input type="hidden" name="data" value='<?php echo json_encode($data, JSON_HEX_APOS | JSON_HEX_QUOT); ?>'>
    </form>
    <script>
        document.getElementById('redirectForm').submit();
    </script>

    <?php
} else {
    echo "<script>alert('Something went wrong: {$stmt->error}'); window.location.href='https://sageuniversity.in/sage_events/vac_molecular_tools';</script>";
}
?>
