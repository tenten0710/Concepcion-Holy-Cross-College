<!DOCTYPE html>
<html>
<head>
    <title>Holy Cross College</title>
</head>
<body style="margin:0;font-family:sans-serif;background:#f4f4f4;">

 <!-- Navigation Bar -->
<div style="position: fixed; top: 0; left: 0; width: 100%; display: flex; align-items: center; background: #fff; padding: 10px 30px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); z-index: 1000; font-family: sans-serif;">


   <!-- Logo + School Name -->
<a href="index.php" style="text-decoration: none;">
  <div style="display: flex; align-items: center; gap: 15px;">
    <img src="pics/holylogo.png" alt="HCC Logo" style="height: 45px; vertical-align: middle;">
    <span style="font-size: 20px; font-weight: bold; color: navyblue; font-family: 'Georgia', serif;">Concepcion Holy Cross College</span>
  </div>
</a>


  <!-- Navigation -->
  <div style="display:flex;align-items:center;gap:30px;margin-left:auto;margin-right:100px;">

    <!-- About Dropdown -->
    <div style="position:relative;">
      <a href="#" 
         style="text-decoration:none;color:#000;font-weight:bold;font-size:17px;padding:10px;display:inline-block;transition:0.3s;"
         onmouseover="this.style.color='#007BFF';this.style.backgroundColor='#f2f2f2';"
         onmouseout="this.style.color='#000';this.style.backgroundColor='transparent';">
         About ▼
      </a>
      <div class="dropdown-about" 
      style="position:absolute;top:100%;left:0;background:white;border:1px solid #ddd;box-shadow:0 4px 6px rgba(0,0,0,0.1);border-radius:8px;display:none;flex-direction:column;min-width:200px;z-index:1000;transform-origin:top;transform:scaleY(0);transition:transform 0.3s ease;"
      >
        <a href="board.php" style="padding:12px 16px;text-decoration:none;color:#000;font-size:16px;border-left:4px solid transparent;transition:all 0.3s ease;"
           onmouseover="this.style.color='#007BFF';this.style.borderLeft='4px solid #007BFF';this.style.paddingLeft='12px';"
           onmouseout="this.style.color='#000';this.style.borderLeft='4px solid transparent';this.style.paddingLeft='16px';">Board of Trustees</a>
        <a href="story.php" style="padding:12px 16px;text-decoration:none;color:#000;font-size:16px;border-left:4px solid transparent;transition:all 0.3s ease;"
           onmouseover="this.style.color='#007BFF';this.style.borderLeft='4px solid #007BFF';this.style.paddingLeft='12px';"
           onmouseout="this.style.color='#000';this.style.borderLeft='4px solid transparent';this.style.paddingLeft='16px';">The Story of CHCCI</a>
        <a href="hymn.php" style="padding:12px 16px;text-decoration:none;color:#000;font-size:16px;border-left:4px solid transparent;transition:all 0.3s ease;"
           onmouseover="this.style.color='#007BFF';this.style.borderLeft='4px solid #007BFF';this.style.paddingLeft='12px';"
           onmouseout="this.style.color='#000';this.style.borderLeft='4px solid transparent';this.style.paddingLeft='16px';">School Hymn</a>
        <a href="vision.php" style="padding:12px 16px;text-decoration:none;color:#000;font-size:16px;border-left:4px solid transparent;transition:all 0.3s ease;"
           onmouseover="this.style.color='#007BFF';this.style.borderLeft='4px solid #007BFF';this.style.paddingLeft='12px';"
           onmouseout="this.style.color='#000';this.style.borderLeft='4px solid transparent';this.style.paddingLeft='16px';">Vision</a>
        <a href="mission.php" style="padding:12px 16px;text-decoration:none;color:#000;font-size:16px;border-left:4px solid transparent;transition:all 0.3s ease;"
           onmouseover="this.style.color='#007BFF';this.style.borderLeft='4px solid #007BFF';this.style.paddingLeft='12px';"
           onmouseout="this.style.color='#000';this.style.borderLeft='4px solid transparent';this.style.paddingLeft='16px';">Mission</a>
        <a href="philosophy.php" style="padding:12px 16px;text-decoration:none;color:#000;font-size:16px;border-left:4px solid transparent;transition:all 0.3s ease;"
           onmouseover="this.style.color='#007BFF';this.style.borderLeft='4px solid #007BFF';this.style.paddingLeft='12px';"
           onmouseout="this.style.color='#000';this.style.borderLeft='4px solid transparent';this.style.paddingLeft='16px';">Philosophy</a>
        <a href="objectives.php" style="padding:12px 16px;text-decoration:none;color:#000;font-size:16px;border-left:4px solid transparent;transition:all 0.3s ease;"
           onmouseover="this.style.color='#007BFF';this.style.borderLeft='4px solid #007BFF';this.style.paddingLeft='12px';"
           onmouseout="this.style.color='#000';this.style.borderLeft='4px solid transparent';this.style.paddingLeft='16px';">Objectives</a>
        <a href="values.php" style="padding:12px 16px;text-decoration:none;color:#000;font-size:16px;border-left:4px solid transparent;transition:all 0.3s ease;"
           onmouseover="this.style.color='#007BFF';this.style.borderLeft='4px solid #007BFF';this.style.paddingLeft='12px';"
           onmouseout="this.style.color='#000';this.style.borderLeft='4px solid transparent';this.style.paddingLeft='16px';">Core Values</a>
        <a href="symbol.php" style="padding:12px 16px;text-decoration:none;color:#000;font-size:16px;border-left:4px solid transparent;transition:all 0.3s ease;"
           onmouseover="this.style.color='#007BFF';this.style.borderLeft='4px solid #007BFF';this.style.paddingLeft='12px';"
           onmouseout="this.style.color='#000';this.style.borderLeft='4px solid transparent';this.style.paddingLeft='16px';">CROSSIAN Symbols</a>
      </div>
    </div>

    <!-- Programs Dropdown -->
    <div style="position:relative;">
      <a href="#" 
         style="text-decoration:none;color:#000;font-weight:bold;font-size:17px;padding:10px;display:inline-block;transition:0.3s;"
         onmouseover="this.style.color='#007BFF';this.style.backgroundColor='#f2f2f2';"
         onmouseout="this.style.color='#000';this.style.backgroundColor='transparent';">
         Programs ▼
      </a>
      <div class="dropdown-programs" 
      style="position:absolute;top:100%;left:0;background:white;border:1px solid #ddd;box-shadow:0 4px 6px rgba(0,0,0,0.1);border-radius:8px;display:none;flex-direction:column;min-width:200px;z-index:1000;transform-origin:top;transform:scaleY(0);transition:transform 0.3s ease;"
      >
        <a href="elem.php" style="padding:12px 16px;text-decoration:none;color:#000;font-size:16px;border-left:4px solid transparent;transition:all 0.3s ease;"
           onmouseover="this.style.color='#007BFF';this.style.borderLeft='4px solid #007BFF';this.style.paddingLeft='12px';"
           onmouseout="this.style.color='#000';this.style.borderLeft='4px solid transparent';this.style.paddingLeft='16px';">Elementary</a>
        <a href="high.php" style="padding:12px 16px;text-decoration:none;color:#000;font-size:16px;border-left:4px solid transparent;transition:all 0.3s ease;"
           onmouseover="this.style.color='#007BFF';this.style.borderLeft='4px solid #007BFF';this.style.paddingLeft='12px';"
           onmouseout="this.style.color='#000';this.style.borderLeft='4px solid transparent';this.style.paddingLeft='16px';">Junior High School</a>
        <a href="senior.php" style="padding:12px 16px;text-decoration:none;color:#000;font-size:16px;border-left:4px solid transparent;transition:all 0.3s ease;"
           onmouseover="this.style.color='#007BFF';this.style.borderLeft='4px solid #007BFF';this.style.paddingLeft='12px';"
           onmouseout="this.style.color='#000';this.style.borderLeft='4px solid transparent';this.style.paddingLeft='16px';">Senior High School</a>
        <a href="college.php" style="padding:12px 16px;text-decoration:none;color:#000;font-size:16px;border-left:4px solid transparent;transition:all 0.3s ease;"
           onmouseover="this.style.color='#007BFF';this.style.borderLeft='4px solid #007BFF';this.style.paddingLeft='12px';"
           onmouseout="this.style.color='#000';this.style.borderLeft='4px solid transparent';this.style.paddingLeft='16px';">College Courses</a>
      </div>
    </div>

    <!-- Admissions Dropdown -->
    <div style="position:relative;">
      <a href="#"
         style="text-decoration:none;color:#000;font-weight:bold;font-size:17px;padding:10px;transition:0.3s;"
         onmouseover="this.style.color='#007BFF';this.style.backgroundColor='#f2f2f2';"
         onmouseout="this.style.color='#000';this.style.backgroundColor='transparent';">
         Admissions ▼
      </a>
      <div class="dropdown-admissions" 
      style="position:absolute;top:100%;left:0;background:white;border:1px solid #ddd;box-shadow:0 4px 6px rgba(0,0,0,0.1);border-radius:8px;display:none;flex-direction:column;min-width:200px;z-index:1000;transform-origin:top;transform:scaleY(0);transition:transform 0.3s ease;"
      >
        <a href="enroll.php" style="padding:12px 16px;text-decoration:none;color:#000;font-size:16px;border-left:4px solid transparent;transition:all 0.3s ease;"
           onmouseover="this.style.color='#007BFF';this.style.borderLeft='4px solid #007BFF';this.style.paddingLeft='12px';"
           onmouseout="this.style.color='#000';this.style.borderLeft='4px solid transparent';this.style.paddingLeft='16px';">Enroll Online</a>
        <a href="requirements.php" style="padding:12px 16px;text-decoration:none;color:#000;font-size:16px;border-left:4px solid transparent;transition:all 0.3s ease;"
           onmouseover="this.style.color='#007BFF';this.style.borderLeft='4px solid #007BFF';this.style.paddingLeft='12px';"
           onmouseout="this.style.color='#000';this.style.borderLeft='4px solid transparent';this.style.paddingLeft='16px';">Requirements</a>
        <a href="procedure.php" style="padding:12px 16px;text-decoration:none;color:#000;font-size:16px;border-left:4px solid transparent;transition:all 0.3s ease;"
           onmouseover="this.style.color='#007BFF';this.style.borderLeft='4px solid #007BFF';this.style.paddingLeft='12px';"
           onmouseout="this.style.color='#000';this.style.borderLeft='4px solid transparent';this.style.paddingLeft='16px';">Procedures</a>
        <a href="forms.php" style="padding:12px 16px;text-decoration:none;color:#000;font-size:16px;border-left:4px solid transparent;transition:all 0.3s ease;"
           onmouseover="this.style.color='#007BFF';this.style.borderLeft='4px solid #007BFF';this.style.paddingLeft='12px';"
           onmouseout="this.style.color='#000';this.style.borderLeft='4px solid transparent';this.style.paddingLeft='16px';">Download Forms</a>
        <a href="payment.php" style="padding:12px 16px;text-decoration:none;color:#000;font-size:16px;border-left:4px solid transparent;transition:all 0.3s ease;"
           onmouseover="this.style.color='#007BFF';this.style.borderLeft='4px solid #007BFF';this.style.paddingLeft='12px';"
           onmouseout="this.style.color='#000';this.style.borderLeft='4px solid transparent';this.style.paddingLeft='16px';">Payment Guide</a>
      </div>
    </div>

    <!-- Contact -->
    <a href="contact.php" style="text-decoration:none;color:#000;font-weight:bold;font-size:17px;padding:10px;transition:0.3s;"
       onmouseover="this.style.color='#007BFF';this.style.backgroundColor='#f2f2f2';"
       onmouseout="this.style.color='#000';this.style.backgroundColor='transparent';">Contact Us</a>
  </div>
</div>

<!-- Dropdown JS -->
<script>
function setupDropdown(selector) {
  const dropdown = document.querySelector(selector);
  const parent = dropdown.parentElement;

  let isInside = false;

  function showDropdown() {
    dropdown.style.display = 'flex';
    requestAnimationFrame(() => {
      dropdown.style.transform = 'scaleY(1)';
    });
  }

  function hideDropdown() {
    dropdown.style.transform = 'scaleY(0)';
    dropdown.addEventListener('transitionend', () => {
      if (!isInside) dropdown.style.display = 'none';
    }, { once: true });
  }

  parent.addEventListener('mouseenter', () => {
    isInside = true;
    showDropdown();
  });

  parent.addEventListener('mouseleave', () => {
    isInside = false;
    hideDropdown();
  });

  dropdown.addEventListener('mouseenter', () => {
    isInside = true;
    showDropdown();
  });

  dropdown.addEventListener('mouseleave', () => {
    isInside = false;
    hideDropdown();
  });
}

setupDropdown('.dropdown-about');
setupDropdown('.dropdown-programs');
setupDropdown('.dropdown-admissions');
</script>



<!-- Header Section -->
<section style="position: relative; background-image: url('pics/holy.jpg'); background-size: 100% 100%; background-repeat: no-repeat; background-position: center; color: white; text-align: center; padding: 130px 20px; background-color: #1e2d40; overflow: hidden; margin-top: 66px;">

  <!-- Overlay -->
  <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.3); z-index: 0;"></div>

  <!-- Text Content -->
  <h1 style="position: relative; z-index: 1; font-size: 48px; margin: 0; font-weight: 700; font-family: 'Georgia', serif;">Payment Guide</h1>

</section>



  <!-- PAYMENT -->

<div style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; padding: 30px; background-color: #ffffff; max-width: 720px; margin: 40px auto; border-radius: 12px; box-shadow: 0 8px 30px rgba(0,0,0,0.1); line-height: 1.6; color: #333;">
  
  <h2 style="color: #1c3d5c; font-size: 26px; border-bottom: 1px solid #ccc; padding-bottom: 10px;">Payment Guide</h2>
  <p>List of available payment channels wherein you may settle your accounts.</p>

  <h3 style="color: #1c3d5c; font-size: 22px; margin-top: 30px;">For in-campus payment</h3>
  <p>Our finance office is open to accept payments every Mondays to Fridays, from 7:00am until 5:00pm <em>(except on weekends and holidays)</em>.</p>

  <h4 style="margin-top: 20px;">Reminders:</h4>
  <ul style="padding-left: 20px;">
    <li>Strictly follow health protocols in-place for your safety and security. Please wear mask, faceshield and always sanitize.</li>
    <li>If you have a copy of your billing statement bring it.</li>
    <li>We'll appreciate if you can give only the exact amount. Thank you.</li>
  </ul>

  <h3 style="color: #1c3d5c; font-size: 22px; margin-top: 30px;">For payment thru Banks</h3>

  <!-- BDO -->
<div style="margin: 20px 0;">
  <img src="pics/bdo.jpg" alt="BDO Logo" style="height: 100px; max-width: 100%; display: block;">
  <p style="margin: 10px 0;"><strong>Account Name:</strong> CONCEPCION HOLY CROSS COLLEGE</p>
  <p><strong>Account Number:</strong> 0000-1111-2222</p>
  <p>Visit Banco de Oro's website to learn more about deposit and bank transfer 
    <a href="https://www.bdo.com.ph/" target="_blank" style="color: #f9a825; text-decoration: none;">https://www.bdo.com.ph/</a>
  </p>
</div>

<!-- LANDBANK -->
<div style="margin: 30px 0;">
  <img src="pics/landbank.jpg" alt="LANDBANK Logo" style="height: 100px; max-width: 100%; display: block;">
  <p style="font-weight: bold; margin: 5px 0;">Land Bank of the Philippines</p>
  <p><strong>Account Name:</strong> CONCEPCION HOLY CROSS COLLEGE</p>
  <p><strong>Account Number:</strong> 0000-1111-22</p>
  <p>Visit Land Bank of the Philippines' website to learn more about deposit and bank transfer 
    <a href="https://www.landbank.com/" target="_blank" style="color: #f9a825; text-decoration: none;">https://www.landbank.com/</a>
  </p>
</div>

<!-- GCash -->
<div style="margin: 40px 0;">
  <img src="pics/gcash.jpg" alt="GCash Logo" style="height: 100px; max-width: 100%; display: block; margin-bottom: 10px;">
  <h4 style="font-weight: bold;">G Cash</h4>
  <ul style="padding-left: 20px;">
    <li>Open and log on to your GCash mobile App</li>
    <li>From the icon menu tap on "bank transfer"</li>
    <li>From the options on the next screen select the "BDO" logo</li>
    <li>Complete the form with the info. below:</li>
  </ul>
  <p>
    <strong>Amount in PHP</strong><br>
    Account Name: CONCEPCION HOLY CROSS COLLEGE<br>
    Destination Account: 0000-1111-2222<br>
    Receipt to: Your email
  </p>
  <p>Tap on the "send money" button then confirm</p>
  
  <p style="background-color: #fff6d1; padding: 10px; border-left: 4px solid #f9a825; margin-top: 20px;">
    <strong>Remember:</strong> Take a screenshot of your transaction summary page for reference. If you choose to enroll online, an initial fee of 
    <strong style="color:#000;">₱ 2,000</strong> shall be paid/deposited to either of the accounts above.
  </p>
  <p style="background-color: #fff6d1; padding: 10px; border-left: 4px solid #f9a825;">
    Always securely keep a copy of your transaction details for reference.
  </p>
</div>


</div>






  <!-- FOOTER -->

    <footer style="background-color:rgb(2, 57, 112); color: white; padding: 100px 20px 20px; font-family: 'Segoe UI', sans-serif; position: relative; overflow: hidden;">

  <!-- Center Logo -->
  <div style="position:absolute; top:12px; left:50%; transform:translateX(-50%); background:rgb(2, 57, 112); border-radius:50%; padding:10px;">
    <img src="pics/holylogo.png" alt="University Logo" style="height:115px;">
  </div>

  <div style="max-width:1200px; margin:auto; display:flex; flex-wrap:wrap; justify-content:center; gap:60px; text-align:center;">

    <!-- School Info -->
    <div style="flex:1; min-width:300px; max-width:400px;">
      <h1 style="font-size:45px; font-family:'Georgia', serif; margin:0;">CONCEPCION</h1>
     
      <h2 style="font-size:32px; font-family:'Georgia', serif; margin:10px 0;">HOLY CROSS COLLEGE</h2>
      <p style="font-size:16px; font-style:italic; margin-top:20px;">
        Hail to the Cross, Our only Hope!
      </p>
    </div>

    <!-- Quick Links -->
    <div style="flex:1; min-width:200px; text-align:left;">
      <h3 style="margin-bottom:15px;">QUICK LINKS</h3>
      <ul style="list-style:none; padding:0; font-size:14px; line-height:2;">
        <li><a href="enroll.php" style="color:gray; text-decoration:none;" onmouseover="this.style.color='black'" onmouseout="this.style.color='gray'">Online Application</a></li>
        <li><a href="privacy.php" style="color:gray; text-decoration:none;" onmouseover="this.style.color='black'" onmouseout="this.style.color='gray'">Privacy Policy</a></li>
        <li><a href="terms.php" style="color:gray; text-decoration:none;" onmouseover="this.style.color='black'" onmouseout="this.style.color='gray'">Terms & Condition</a></li>
      </ul>
    </div>


    
    <!-- Contact Section -->
    <div style="flex:1; min-width:250px; text-align:left;">
      <h3 style="margin-bottom:15px;">CONNECT WITH US!</h3>
     <p style="font-size:14px; line-height:2;">
  <img src="pics/addlogo.png" alt="Address" style="height:16px; vertical-align:middle; margin-right:5px;">
  Juan Luna St. Minane Concepcion, Tarlac<br>

  <img src="pics/conlogo.png" alt="Phone" style="height:16px; vertical-align:middle; margin-right:5px;">
  (63) 012-345-6789<br>

  <img src="pics/maillogo.png" alt="Email" style="height:16px; vertical-align:middle; margin-right:5px;">
  info@chcc.edu.ph
</p>


   <!-- Media Section -->

      <h4 style="margin-top:20px;">SOCIAL MEDIA</h4>
      <div style="font-size:0; display:flex; gap:10px; align-items:center;">
        <a href="https://www.facebook.com/ConcepcionHolyCrossCollege" target="_blank">
          <img src="pics/fblogo.png" alt="Facebook" style="height:36px;">
        </a>
      </div>
    </div>

    
  </div>

  <!-- Bottom Line -->
  <div style="text-align:center; margin-top:20px; font-size:14px; border-top:1px solid rgba(255,255,255,0.2); padding-top:20px;">
    Copyright © 2025 Holy Cross College • All Rights Reserved
  </div>
</footer>



</body>
</html>
