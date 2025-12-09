<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VAC on Molecular Tools: Pioneering Innovations for Human Welfare - Institute of Sciences</title>
  <link rel="icon" type="image/x-icon" href="https://sageuniversity.in/assets/images/logo/suifavicon.png">
  <style>
 :root {
  --bg-color: #d4c5f5;          /* soft lavender background */
  --primary-color: #460869;      /* your main purple */
  --accent-color: #a259ff;       /* vibrant accent for buttons & highlights */
  --text-color: #2b1b3d;         /* dark readable purple text */
  --border-color: #e5d9ff;       /* subtle border shade */
  --button-hover: #5c0a8f;       /* brighter hover tone */
}


    body {
      font-family: 'Poppins', sans-serif;
      background: var(--bg-color);
      margin: 0;
      padding: 0;
      color: var(--text-color);
    }

    header {
      background: #ffffff;
      border-bottom: 4px solid var(--primary-color);
      padding: 15px 30px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      box-shadow: 0 2px 10px rgba(179, 139, 250, 0.2);
      flex-wrap: wrap;
    }

    header img {
      height: auto;
      max-width: 100%;
    }

    .go-btn {
      background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
      color: #fff;
      border: none;
      padding: 10px 25px;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      text-decoration: none;
      box-shadow: 0 3px 10px rgba(179, 139, 250, 0.3);
    }

    .go-btn:hover {
      background: linear-gradient(45deg, var(--button-hover), #ff99df);
      transform: translateY(-2px);
      box-shadow: 0 5px 14px rgba(155, 110, 252, 0.4);
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        text-align: center;
      }

      header img {
        width: 280px;
        margin-bottom: 10px;
      }
    }

    .container {
      max-width: 1100px;
      margin: 40px auto;
      padding: 25px;
      background: #ffffff;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(155, 110, 252, 0.1);
    }

    .main-heading {
      text-align: center;
      font-size: 36px;
      font-weight: 800;
      background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-transform: uppercase;
      letter-spacing: 2px;
      margin-bottom: 40px;
      position: relative;
      animation: fadeInDown 1s ease;
    }

    .main-heading::after {
      content: "";
      position: absolute;
      bottom: -8px;
      left: 50%;
      transform: translateX(-50%);
      width: 100px;
      height: 4px;
      background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
      border-radius: 2px;
      animation: slideIn 1.5s ease;
    }

    @keyframes fadeInDown {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes slideIn {
      from { width: 0; }
      to { width: 100px; }
    }

    .card {
      background: #fff;
      border-radius: 12px;
      border: 1px solid var(--border-color);
      box-shadow: 0 4px 12px rgba(179, 139, 250, 0.1);
      padding: 30px;
      margin-bottom: 40px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 16px rgba(179, 139, 250, 0.2);
    }

    .card h2 {
      color: var(--primary-color);
      border-bottom: 3px solid var(--accent-color);
      display: inline-block;
      padding-bottom: 5px;
      margin-bottom: 20px;
      font-size: 22px;
    }

    .overview-content {
      display: flex;
      align-items: flex-start;
      flex-wrap: wrap;
      gap: 30px;
    }

    .overview-content img {
      width: 500px;
      height: 500px;
      object-fit: cover;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(179, 139, 250, 0.2);
      transition: transform 0.3s ease;
    }

    .overview-content img:hover {
      transform: scale(1.02);
    }

    .overview-text {
      flex: 1;
      min-width: 300px;
    }

    .overview-text p {
      line-height: 1.6;
      margin: 10px 0;
    }

    .overview-text h4 {
      color: var(--primary-color);
    }

    .overview-text ul li {
      margin-bottom: 8px;
    }

    .form-section {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .form-group {
      flex: 1 1 calc(50% - 20px);
      display: flex;
      flex-direction: column;
    }

    .form-group label {
      font-weight: 600;
      margin-bottom: 5px;
      color: var(--primary-color);
    }

    .form-group input {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 15px;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-group input:focus {
      border-color: var(--primary-color);
      box-shadow: 0 0 5px rgba(179, 139, 250, 0.4);
      outline: none;
    }

    .btn-submit {
      background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
      color: white;
      border: none;
      padding: 12px 25px;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      margin-top: 20px;
      transition: all 0.3s ease;
    }

    .btn-submit:hover {
      background: linear-gradient(45deg, var(--button-hover), #ff99df);
      transform: translateY(-2px);
    }

    footer {
      background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
      color: white;
      text-align: center;
      padding: 15px;
      margin-top: 40px;
      border-top-left-radius: 20px;
      border-top-right-radius: 20px;
      box-shadow: 0 -2px 10px rgba(155, 110, 252, 0.3);
    }

    @media (max-width: 768px) {
      .overview-content {
        flex-direction: column;
        align-items: center;
      }

      .overview-content img {
        width: 100%;
        height: auto;
      }

      .form-group {
        flex: 1 1 100%;
      }

      .main-heading {
        font-size: 28px;
      }
    }
  </style>
</head>
<body>

  <header>
    <img src="https://sageuniversity.in/sage_events/suilogo.png" alt="Logo">
    <a href="https://sageuniversity.in" class="go-btn" target="_blank">Go to Main Website</a>
  </header>

  <div class="container">
    <h1 class="main-heading">Value Added Course 2025 on Molecular Tools: Pioneering Innovations for Human Welfare</h1>

    <div class="card overview">
      <h2>Organized by the Institute of Sciences, SAGE University Indore</h2>

      <div class="overview-content">
        <img src="VAC_img.jpg" alt="Molecular Tools Workshop" loading="lazy">
        <div class="overview-text">
          <p><strong>Description:</strong> <em>This Value Added Course aims to introduce students about the fundamental molecular techniques used in Biotechnology, genetic engineering, and biomedical research. It emphasizes hands-on learning and applications for human welfare.</em></p>
          <p><strong>Theme:</strong> <em>Exploring the Power of Molecular Tools in Advancing Science and Society</em></p>
          <p><strong>Organized by:</strong> Institute of Sciences, SAGE University Indore</p>
          <p><strong>Duration:</strong> 17th – 21st November 2025</p>
          <p><strong>Mode / Venue:</strong> Offline / Institute of Sciences Laboratory & Seminar Hall</p>
          <p><strong>Target Participants:</strong> Students of Life Sciences, Biotechnology, Microbiology, and related fields</p>
          <p><strong>Registration Fees:</strong> ₹500 (Including Study Material & Certificate)</p>
          <p style="color:#9a1750; font-weight:700; font-size:17px;">
            ⚠️ Limited Seats Available — Register Soon!
          </p>
        </div>
      </div>
    </div>

    <div class="card">
      <h2>Registration Form</h2>
      <form action="uploadregister.php" enctype="multipart/form-data" method="POST">
        <div class="form-section">
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your full name" required>
          </div>
          <div class="form-group">
            <label for="regno">Enrollment / Scholar ID</label>
            <input type="text" name="regno" id="regno" placeholder="Enter your Enrollment / Scholar ID" required>
          </div>
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>
          </div>
          <div class="form-group">
            <label for="mobile">Mobile No.</label>
            <input type="text" name="mobile_no" id="mobile" placeholder="Enter your mobile number" required>
          </div>
          <div class="form-group">
            <label for="department">Institution / Department</label>
            <input type="text" name="institution" id="department" placeholder="Enter your department name" required>
          </div>
          <div class="form-group">
            <label for="year">Year / Semester</label>
            <input type="text" name="year" id="year" placeholder="Enter your year or semester" required>
          </div>
        </div>

        <button class="btn-submit" type="submit">Submit Registration</button>
      </form>
    </div>
  </div>

  <footer>
    © 2025 | Designed & Developed by Website Technical Team | SAGE University, Indore
  </footer>
</body>
</html>
