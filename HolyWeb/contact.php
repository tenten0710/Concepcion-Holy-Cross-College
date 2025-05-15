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
           onmouseout="this.style.color='#000';this.style.borderLeft='4px solid transparent';this.style.paddingLeft='16px';">CROSSian Symbols</a>
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
        <a href="#" style="padding:12px 16px;text-decoration:none;color:#000;font-size:16px;border-left:4px solid transparent;transition:all 0.3s ease;"
           onmouseover="this.style.color='#007BFF';this.style.borderLeft='4px solid #007BFF';this.style.paddingLeft='12px';"
           onmouseout="this.style.color='#000';this.style.borderLeft='4px solid transparent';this.style.paddingLeft='16px';">Procedures</a>
        <a href="#" style="padding:12px 16px;text-decoration:none;color:#000;font-size:16px;border-left:4px solid transparent;transition:all 0.3s ease;"
           onmouseover="this.style.color='#007BFF';this.style.borderLeft='4px solid #007BFF';this.style.paddingLeft='12px';"
           onmouseout="this.style.color='#000';this.style.borderLeft='4px solid transparent';this.style.paddingLeft='16px';">Download Forms</a>
        <a href="#" style="padding:12px 16px;text-decoration:none;color:#000;font-size:16px;border-left:4px solid transparent;transition:all 0.3s ease;"
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
  <h1 style="position: relative; z-index: 1; font-size: 48px; margin: 0; font-weight: 700; font-family: 'Georgia', serif;">We'd love to hear from you...</h1>

</section>






<section style="padding: 60px 20px; font-family: Arial, sans-serif;">
  <h1 style="text-align: center; font-size: 45px; margin-bottom: 40px;">GET IN TOUCH</h1>
  <div style="display: flex; flex-wrap: wrap; justify-content: center; max-width: 1200px; margin: auto;">

    <!-- Contact Form -->
    <div style="flex: 1; min-width: 320px; max-width: 600px; padding: 20px;">
      <h2 style="font-size: 20px; font-weight: bold;">GOT QUESTIONS AND INQUIRIES?</h2>
      <p>Communicate with us by filling out the form below:</p>

    <form action="submitform.php" method="POST" onsubmit="return confirmSubmission();">
        <div style="display: flex; gap: 10px;">
          <input type="text" name="First Name" placeholder="First Name" required style="flex: 1; padding: 10px; margin-bottom: 15px; width: 100%;">
          <input type="text" name="Last Name" placeholder="Last Name" required style="flex: 1; padding: 10px; margin-bottom: 15px; width: 100%;">
        </div>

        <div style="display: flex; gap: 10px;">
          <input type="text" name="Contact Number" placeholder="Contact Number" required style="flex: 1; padding: 10px; margin-bottom: 15px; width: 100%;">
          <input type="email" name="Email" placeholder="Email Address" required style="flex: 1; padding: 10px; margin-bottom: 15px; width: 100%;">
        </div>

        <textarea name="Message" placeholder="Message" required style="width: 100%; padding: 10px; height: 120px; margin-bottom: 20px;"></textarea>

        <button type="submit" style="background-color: #007bff; color: white; padding: 15px 30px; border: none; font-weight: bold; cursor: pointer;">
          SUBMIT FORM
        </button>
      </form>
    </div>

    <!-- Map -->
    <div style="flex: 1; min-width: 300px; padding: 20px;">
      <h2 style="font-size: 20px; font-weight: bold;">HOW TO GET HERE?</h2>
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3856.9493602820677!2d120.64741717503595!3d15.321056585345899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c27154c6ac4b%3A0x2ce52352730810ef!2sHoly%20Cross%20College!5e0!3m2!1sen!2sph!4v1715331550336!5m2!1sen!2sph" 
        width="100%" 
        height="350" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</section>

<script>
  function confirmSubmission() {
    const confirmed = confirm("Are you sure you want to submit the message?");
    if (confirmed) {
      setTimeout(() => {
        document.querySelector("form").reset();
      }, 100); // Small delay after submit
    }
    return confirmed;
  }
</script>





    
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
