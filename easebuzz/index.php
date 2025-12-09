<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Step 1: Check if POST data received
if (!isset($_POST['data'])) {
    echo "<h3>Invalid access — No data received.</h3>";
    exit;
}

// Step 2: Decode JSON
$data = json_decode($_POST['data'], true);

if (!$data) {
    echo "<h3>Invalid data format received.</h3>";
    exit;
}

// Step 3: Extract variables
$order_id   = $data['order_id'] ?? '';
$amount     = $data['amount'] ?? '';
$name       = $data['firstname'] ?? '';
$email      = $data['email'] ?? '';
$phone      = $data['phone'] ?? '';
$productinfo= $data['productinfo'] ?? 'vaciet';

// Step 4: Display confirmation or send to Easebuzz API
// URLs
$surl = "https://sageuniversity.in/sage_events/vac_iet_applied_science/response.php";
$furl = "https://sageuniversity.in/sage_events/vac_iet_applied_science/";


// Step 5: Redirect to Easebuzz actual payment (example)
?>

<form id="easebuzzForm" method="POST" action="https://sageuniversity.in/sage_events/vac_iet_applied_science/easebuzz/easebuzz.php?api_name=initiate_payment" style="display:none;">
    <input type="hidden" name="txnid" value="<?php echo htmlspecialchars($order_id); ?>">
    <input type="hidden" name="amount" value="<?php echo htmlspecialchars($amount); ?>">
    <input type="hidden" name="firstname" value="<?php echo htmlspecialchars($name); ?>">
    <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
    <input type="hidden" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
    <input type="hidden" name="productinfo" value="<?php echo htmlspecialchars($productinfo); ?>">
    <!-- Add key, hash, and other required Easebuzz parameters here -->
    <input type="hidden" name="surl" value="<?php echo $surl; ?>">
    <input type="hidden" name="furl" value="<?php echo $furl; ?>">
</form>

<script>
    // Automatically redirect to Easebuzz payment page
    document.getElementById('easebuzzForm').submit();
</script>
