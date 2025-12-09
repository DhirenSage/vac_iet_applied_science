<?php
// ---------------------------
// Debug + Database Connection
// ---------------------------
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once 'db_config.php'; // ensure correct credentials & path

// helper to safely print values (avoids PHP 8.1 null warnings)
function safe($value) {
  return htmlspecialchars($value ?? '');
}

// fetch data
$query  = "SELECT * FROM vacietappliedscience ORDER BY id DESC";
$result = mysqli_query($conn, $query);

if (!$result) {
  die("Database query failed: " . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Value Added Course 2025 on Molecular Tools: Pioneering Innovations for Human Welfare : SAGE University Indore</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link rel="icon" href="https://sageuniversity.in/assets/images/logo/suifavicon.png">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- DataTables CSS -->
  <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #e3f2fd, #bbdefb);
      font-family: 'Poppins', sans-serif;
      color: #333;
      margin: 0;
      padding: 0;
    }

    h2 {
      text-align: center;
      text-transform: uppercase;
      font-weight: 700;
      background: linear-gradient(90deg, #004aad, #00b4d8);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-top: 15px;
    }

    table.dataTable {
      border-radius: 12px;
      overflow: hidden;
      background-color: white;
    }

    thead {
      background: linear-gradient(90deg, #004aad, #0077b6);
      color: #fff;
    }

    table.dataTable tbody tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    table.dataTable tbody tr:hover {
      background-color: #e3f2fd;
      transition: 0.3s;
    }

    .dt-buttons button {
      background-color: #0077b6 !important;
      border: none !important;
      color: #fff !important;
      border-radius: 6px;
      margin-right: 8px;
      padding: 6px 14px;
      font-weight: 500;
      transition: 0.3s;
    }

    .dt-buttons button:hover {
      background-color: #023e8a !important;
    }

    footer {
      background: #004aad;
      color: white;
      text-align: center;
      padding: 10px;
      font-size: 14px;
    }

    .full-page-table {
      width: 100vw;
      padding: 20px;
    }

    .table-responsive {
      overflow-x: auto;
    }

    .no-data {
      text-align: center;
      color: #777;
      font-style: italic;
      padding: 20px;
    }
  </style>
</head>
<body>

  <div class="text-center mt-3">
    <img src="https://sageuniversity.in/sage_events/suilogo.png" alt="SAGE Logo" width="400" class="mb-2">
    <h2>Value Added Course 2025 on Molecular Tools: Pioneering Innovations for Human Welfare Registered List</h2>
  </div>

  <div class="full-page-table">
    <div class="table-responsive mt-4">
      <table id="example" class="display nowrap table table-striped table-bordered w-100">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Mobile No.</th>
            <th>Email</th>
            <th>Enrollment / Scholar id</th>
            <th>Institution / Department</th>
            <th>Year / Semester</th>
            <th>Amount</th>
            <th>Transaction ID</th>
            <th>Bank Ref No.</th>
            <th>Mode</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $cnt = 1;
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>{$cnt}</td>";
              echo "<td>" . safe($row['name']) . "</td>";
              echo "<td>" . safe($row['mobile_no']) . "</td>";
              echo "<td>" . safe($row['email']) . "</td>";
              echo "<td>" . safe($row['regno']) . "</td>";
              echo "<td>" . safe($row['institution']) . "</td>";
              echo "<td>" . safe($row['year']) . "</td>";
              echo "<td>" . safe($row['amount']) . "</td>";
              echo "<td>" . safe($row['order_id']) . "</td>";
              echo "<td>" . safe($row['bank_ref_num']) . "</td>";
              echo "<td>" . safe($row['mode']) . "</td>";
              echo "<td>" . safe($row['created_date']) . "</td>";
              echo "</tr>";
              $cnt++;
            }
          } else {
            echo '<tr><td colspan="14" class="no-data">No records found in the database.</td></tr>';
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <footer>
    © 2025 SAGE University Indore | Value Added Course 2025 on Molecular Tools: Pioneering Innovations for Human Welfare
  </footer>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

  <script>
  $(document).ready(function() {
    $('#example').DataTable({
      dom: 'Bfrtip',
      scrollX: true,
      buttons: [
        { extend: 'copy', text: 'Copy' },
        { extend: 'csv',  text: 'CSV' },
        { extend: 'excel', text: 'Excel' },
        { extend: 'print', text: 'Print' }
      ]
    });
  });
  </script>
</body>
</html>
