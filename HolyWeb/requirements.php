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
  <h1 style="position: relative; z-index: 1; font-size: 48px; margin: 0; font-weight: 700; font-family: 'Georgia', serif;">Admission Requirements</h1>

</section>



<!-- Admission Requirements Section -->
<section style="font-family: 'Segoe UI', sans-serif; background: #f9fafb; padding: 40px; color: #2c3e50;">
  <div style="max-width: 800px; margin: auto; background: #ffffff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
    
    <h2 style="font-size: 28px; font-weight: 700; color: #0d1b2a; margin-bottom: 10px;">General Admission Requirements</h2>
    <p style="font-size: 16px; margin-bottom: 25px; color: #555;">List of requirements needed for enrollment</p>

    <h3 style="font-size: 20px; font-weight: 600; color: #007bff; margin-top: 25px;">For Regular Applicants</h3>
    <ul style="padding-left: 20px; font-size: 15px; line-height: 1.8; margin-bottom: 20px;">
      <li>Completely filled-out Application form. You may click <a href="#" style="color: #007bff; text-decoration: underline;">here</a> to apply online.</li>
      <li>Current school identification card (ID)</li>
      <li>Application fee (if applicable)</li>
    </ul>

    <hr style="border: none; height: 1px; background-color: #e1e1e1; margin: 30px 0;">

    <h3 style="font-size: 20px; font-weight: 600; color: #007bff;">Nursery Department (Age 4 and above)</h3>
    <ul style="padding-left: 20px; font-size: 15px; line-height: 1.8;">
      <li>PSA issued Birth Certificate</li>
    </ul>

    <h3 style="font-size: 20px; font-weight: 600; color: #007bff; margin-top: 30px;">Elementary Department (Kindergarten – Grade 6)</h3>
    <ul style="padding-left: 20px; font-size: 15px; line-height: 1.8;">
      <li>Original Form 138 (Learner’s Progress Report Card)</li>
      <li>Original Form 137 (Learner’s Permanent Academic Record)</li>
      <li>PSA issued Birth Certificate</li>
    </ul>
    <div style="background: #fffbe6; border-left: 5px solid #ffc107; padding: 10px 15px; margin-top: 10px; font-size: 14px; color: #6b4f00;">
      <strong>Note for Transferees:</strong> Certificate of Good Moral Character, Honorable Dismissal, and Transfer of Credentials.
    </div>

    <h3 style="font-size: 20px; font-weight: 600; color: #007bff; margin-top: 30px;">Junior High School Department (Grade 7 – Grade 10)</h3>
    <ul style="padding-left: 20px; font-size: 15px; line-height: 1.8;">
      <li>Original Form 138 / SF9-JHS (Learner’s Progress Report Card)</li>
      <li>Original Form 137 / SF10-JHS (Learner’s Permanent Academic Record)</li>
      <li>PSA issued Birth Certificate</li>
    </ul>
    <div style="background: #fffbe6; border-left: 5px solid #ffc107; padding: 10px 15px; margin-top: 10px; font-size: 14px; color: #6b4f00;">
      <strong>Note for Transferees:</strong> Certificate of Good Moral Character, Honorable Dismissal, and Transfer of Credentials.
    </div>
    
    <!-- Senior High School -->
    <h3 style="font-size: 22px; font-weight: 600; color: #007bff; margin-top: 30px;">Senior High School Department (Grade 11 & Grade 12)</h3>
    <ul style="padding-left: 20px; font-size: 15px; line-height: 1.8;">
      <li>Original Form 138 / SF9-JHS (Learner’s Progress Report Card)</li>
      <li>Original Form 137 / SF10-JHS (Learner’s Permanent Academic Record)</li>
      <li>PSA issued Birth Certificate</li>
    </ul>
    <div style="background: #fffbe6; border-left: 5px solid #ffc107; padding: 10px 15px; margin-top: 10px; font-size: 14px; color: #6b4f00;">
      <strong>Note:</strong> ESC Certificate shall be submitted if you have previously attended a DepEd-recognized private school/institution. <em>(If Applicable)</em>
    </div>

    <!-- Undergraduate Studies -->
    <h3 style="font-size: 22px; font-weight: 600; color: #007bff; margin-top: 40px;">Undergraduate Studies (College Department)</h3>

    <!-- Freshmen -->
    <h4 style="font-size: 18px; font-weight: 600; color: #333; margin-top: 20px;">Freshmen</h4>
    <ul style="padding-left: 20px; font-size: 15px; line-height: 1.8;">
      <li>Grade 12 Report Card</li>
      <li>Certificate of Good Moral Character</li>
      <li>Photocopy of the NSO Birth Certificate</li>
    </ul>

    <!-- PEPT & ALS A&E -->
    <div style="background: #fffbe6; border-left: 5px solid #ffc107; padding: 10px 15px; margin: 20px 0 10px; font-size: 14px; color: #6b4f00;">
      For Passers of Philippine Educational Placement Test (PEPT) and Alternative Learning System Accreditation and Equivalency (ALS A&E)
    </div>
    <ul style="padding-left: 20px; font-size: 15px; line-height: 1.8;">
      <li>Certificate of Passing</li>
      <li>Certificate of Rating</li>
      <li>Photocopy of Diploma (For ALS A&E passers)</li>
      <li>Recent two (2) pieces 2×2 colored ID Pictures</li>
    </ul>

    <!-- For Graduates of 2015 and below -->
    <div style="background: #fffbe6; border-left: 5px solid #ffc107; padding: 10px 15px; margin-top: 20px; font-size: 14px; color: #6b4f00;">
      For graduates of 2015 and below – Original Form 138 (Report Card)
    </div>

 <!-- Transferees -->
    <h3 style="font-size: 22px; font-weight: 600; color: #007bff; margin-top: 30px;">Transferees</h3>
    <ul style="padding-left: 20px; font-size: 15px; line-height: 1.8;">
      <li>Honorable Dismissal / Transfer of Credentials</li>
      <li>Official Transcript of Records (TOR) / Scholastic Records</li>
      <li>Certificate of Good Moral Character</li>
      <li>Course Description of courses taken and passed</li>
      <li>Photocopy of the NSO Birth Certificate</li>
      <li>Recent two (2) pieces 2×2 colored ID Pictures</li>
    </ul>

    <!-- International Students -->
    <h3 style="font-size: 22px; font-weight: 600; color: #007bff; margin-top: 40px;">International Students</h3>
    <ul style="padding-left: 20px; font-size: 15px; line-height: 1.8;">
      <li>Authenticated High School credentials / Form 138 / Transcript of Records</li>
      <li>Authenticated Certificate of Good Moral Character from the School / Police</li>
      <li>Clearance from the country of origin/departure</li>
      <li>Authenticated Certificate of Graduation / Copy of Diploma</li>
      <li>Authenticated Birth Certificate</li>
      <li>Honorable Dismissal / Transfer Credentials (for Transferees)</li>
      <li>Photocopy of Passport, updated Student Visa and Alien Certificate of Registration (ACR)</li>
      <li>Recent two (2) pieces 2×2 colored ID Pictures</li>
    </ul>
    
    <!-- Second Course Takers -->
    <h3 style="font-size: 22px; font-weight: 600; color: #007bff; margin-top: 30px;">📘 Second Course Takers</h3>
    <ul style="padding-left: 20px; font-size: 15px; line-height: 1.8;">
      <li>Official Transcript of Records (TOR) / Scholastic Records</li>
      <li>Honorable Dismissal / Transfer Credentials</li>
      <li>Photocopy of Diplomae</li>
      <li>Course Description of courses taken and passed</li>
      <li>Photocopy of the NSO Birth Certificate</li>
      <li>Photocopy of the Marriage Certificate</li>
      <li>Recent two (2) pieces 2×2 colored ID Pictures</li>
    </ul>

    <!-- Cross-Enrolee -->
    <h3 style="font-size: 22px; font-weight: 600; color: #007bff; margin-top: 40px;">Cross-enrolee</h3>
    <div style="background: #fffbe6; border-left: 5px solid #ffc107; padding: 10px 15px; font-size: 14px; color: #6b4f00;">
      Not open for cross-enrollment
    </div>

    <!-- Previously Graduated Applicants -->
    <h3 style="font-size: 20px; font-weight: 600; color: #0d1b2a; margin-top: 40px;">
      Additional requirements for previously graduated applicants (graduation year is prior to the current school year):
    </h3>
    <p style="font-size: 15px; color: #555; margin-bottom: 15px;">
      For applicants from schools in the Philippines or schools abroad under DepEd and did not enroll in any college/university after graduation:
    </p>
    <ul style="padding-left: 20px; font-size: 15px; line-height: 1.8;">
      <li>Original and photocopy of Grade 12 Report Card</li>
      <li>Certification from the high school principal regarding the student’s F137-A</li>
    </ul>
    <p style="font-size: 15px; margin-top: 10px; font-weight: 500;">Contents of the certification are as follows:</p>
    <ul style="padding-left: 30px; font-size: 15px; line-height: 1.8;">
      <li>The student’s Form 137-A is still in the school file</li>
      <li>The student’s F137-A has not been forwarded to another college/university</li>
    </ul>

     <!-- Foreign Nationals -->
    <h3 style="font-size: 22px; font-weight: 600; color: #007bff; margin-top: 30px;">Additional Requirements for Foreign Nationals</h3>
    <ul style="padding-left: 20px; font-size: 15px; line-height: 1.8;">
      <li>Scholastic Records, duly authenticated by the Philippine Foreign Service Post located in the student applicant’s country of origin or legal residence</li>
      <li>Alien Certificate of Registration (ACR) or Special Study Permit (SSP)</li>
      <li>Photocopy of applicant’s passport bio-page, latest admission and authorized to stay</li>
      <li>If the applicant is not a native speaker of English, he has to submit his TOEFL/IELTS exam results with the following cut-off scores:
        <ul style="margin-top: 10px; padding-left: 20px; font-style: italic; color: #555;">
          <li>TOEFL: Internet-based test, score at least 75</li>
          <li>Paper and pencil-based test, score at least 500</li>
          <li>Computer-based test, score at least 173</li>
          <li>IELTS: Overall band of 6.0, no single test score below 5.5</li>
        </ul>
      </li>
    </ul>
    <div style="background: #fffbe6; border-left: 5px solid #ffc107; padding: 10px 15px; font-size: 14px; color: #6b4f00;">
      <strong>Note:</strong> If the applicant has not taken either TOEFL or IELTS upon application, he/she must pass the HCC English Language Test (HELT) to be given by the English Language Core Group (ELCD).
    </div>

    <!-- Non-Formal / ALS Graduates -->
    <h3 style="font-size: 22px; font-weight: 600; color: #007bff; margin-top: 40px;">
      Additional Requirements for Graduates of Non-Formal Education Accreditation and Equivalency or Alternative Learning System (ALS)
    </h3>
    <ul style="padding-left: 20px; font-size: 15px; line-height: 1.8;">
      <li>Certificate of Rating (with passing marks in all subjects)</li>
      <li>Learner’s Permanent Record (AF-5) with eligibility to college</li>
    </ul>

    
    <!-- Associate Degree Programs -->
    <h3 style="font-size: 22px; font-weight: 600; color: #007bff; margin-top: 30px;">Additional Requirements for Graduates of Associate Degree Programs</h3>
    <ul style="padding-left: 20px; font-size: 15px; line-height: 1.8;">
      <li>Transcript of Records</li>
      <li>No failing grade</li>
      <li>Weighted average of at least 2.00 or its equivalent, excluding Religion, PE and NSTP</li>
      <li>Honorable Dismissal / Certificate of Transfer Credential</li>
      <li>Photocopy of Philippine Statistics Authority (PSA) paper</li>
      <li>Photocopy of the Certificate of Good Moral Character</li>
      <li>Certified true copy of F137-A</li>
    </ul>

    <!-- Schools Abroad -->
    <h3 style="font-size: 22px; font-weight: 600; color: #007bff; margin-top: 40px;">Additional Requirements for Applicants from Schools Abroad (except for Filipino schools under DepEd)</h3>
    <ul style="padding-left: 20px; font-size: 15px; line-height: 1.8;">
      <li>Scholastic Records, duly authenticated by the Philippine Foreign Service Post located in the student applicant’s country of origin or legal residence</li>
      <li>Certificate of completion of secondary education (senior high school / grade 12 or its equivalent)</li>
      <li>Certificate of Good Moral Character or Recommendation from the School Guidance Counselor or Principal</li>
    </ul>

    <!-- Filipino applicants -->
    <div style="background: #fffbe6; border-left: 5px solid #ffc107; padding: 10px 15px; margin-top: 15px; font-size: 14px; color: #6b4f00;">
      For Filipino applicants:
    </div>
    <ul style="padding-left: 30px; font-size: 15px; line-height: 1.8;">
      <li>Birth certificate printed on Philippine Statistics Authority (PSA) paper</li>
      <li>Original and photocopy of Filipino passport</li>
    </ul>

    <!-- Foreign nationals -->
    <div style="background: #fffbe6; border-left: 5px solid #ffc107; padding: 10px 15px; margin-top: 15px; font-size: 14px; color: #6b4f00;">
      For foreign nationals:
    </div>
    <ul style="padding-left: 30px; font-size: 15px; line-height: 1.8;">
      <li>Alien Certificate of Registration (ACR) or Special Study Permit (SSP)</li>
      <li>Original and photocopy of data page of the applicant’s passport showing date and place of birth, and birth certificate or its equivalent duly authenticated by the Philippine Foreign Service Post</li>
      <li>Five (5) copies of the Student’s Personal History (PHS) duly signed by the applicant, both in English and in his/her national alphabet, with 2×2 inch photo taken not more than six months prior</li>
      <li>A notarized affidavit of support including bank statements or notice of grant for institution-funded support for the student’s accommodation, subsistence, and other expenses</li>
    </ul>

  </div>
</section>






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
