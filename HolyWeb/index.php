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





    <!-- Front Page -->
<section style="position: relative; width: 100%; height:100vh; background-color: #006400; color: white; display: flex; align-items: center; justify-content: flex-start;">

  <!-- Background Image as <img> -->
  <img src="pics/holy.jpg" alt="Holy Cross College" style="
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top;
    opacity: 0.7;
    z-index: 0;
  ">

  <!-- Content inside the section -->
  <div style="position: relative; z-index: 1; max-width: 600px; padding-left: 40px;">
    <h1 style="font-size: 24px; font-weight: bold; text-transform: uppercase; margin: 0;">Welcome to,</h1>
    <h2 style="font-size: 50px; font-weight: bold; margin: 10px 0 0; text-transform: uppercase;">Concepcion</h2>
    <h2 style="font-size: 50px; font-weight: bold; margin: 10px 0; text-transform: uppercase;">Holy Cross College</h2>
    <a href="enroll.php" style="text-decoration: none;">
      <button style="
        font-size: 18px;
        padding: 14px 28px;
        background: linear-gradient(135deg, #4a90e2, #007bff);
        color: #fff;
        border: none;
        border-radius: 12px;
        cursor: pointer;
        margin-top: 20px;
        box-shadow: 0 4px 12px rgba(0, 123, 255, 0.3);
        transition: all 0.3s ease;
      "
      onmouseover="this.style.background='linear-gradient(135deg, #0056b3, #0069d9)'; this.style.transform='translateY(-2px)'"
      onmouseout="this.style.background='linear-gradient(135deg, #4a90e2, #007bff)'; this.style.transform='translateY(0)'"
      onmousedown="this.style.boxShadow='0 2px 6px rgba(0, 123, 255, 0.2)'; this.style.transform='translateY(0)'"
      onmouseup="this.style.boxShadow='0 4px 12px rgba(0, 123, 255, 0.3)'; this.style.transform='translateY(-2px)'">
        Enroll Now
      </button>
    </a>
  </div>

</section>




<section style="width: 100%; text-align: center; padding: 40px 20px; background-color: #f0f0f0;">
  <img src="pics/crossian.jpg" alt="Descriptive Alt Text" style="max-width: 70%; height: auto; border-radius: 12px; margin-top: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
</section>


  


  

  <!-- Programs Section -->
<section style="display: flex; justify-content: space-between; padding: 60px 10%; font-family: sans-serif; background: #fff; gap: 40px; flex-wrap: wrap;">

  <!-- Left Program List -->
  <div style="flex: 1; min-width: 250px;">
    <h4 style="font-size: 14px; color: #888; letter-spacing: 2px;">PROGRAMS</h4>
    <h2 style="font-size: 36px; color: #0b1736; margin: 10px 0 30px;">Student programs<br>CHCC Offered</h2>
    <ul id="programList" style="list-style: none; padding: 0; font-size: 22px; line-height: 2; cursor: pointer;">
      <li data-image="pics/high.jpg" data-text="Our Elementary Program nurtures young minds with a strong foundation in academics, creativity, and character development." style="font-weight: bold; color: #000;">Elementary</li>
      <li data-image="pics/high.jpg" data-text="Our Junior High School Program empowers students with critical thinking, independence, and strong academic skills to prepare them for high school success." style="color: #aaa;">Junior High School</li>
      <li data-image="pics/senior.jpg" data-text="Our Senior High School Program equips students with advanced knowledge, leadership skills, and career or college readiness for a successful future." style="color: #aaa;">Senior High School</li>
      <li data-image="pics/1.jpg" data-text="Our College Program offers specialized courses and hands-on learning to prepare students for professional careers and lifelong success." style="color: #aaa;">College</li>
    </ul>
  </div>

  <!-- Right Display Area with Elementary as Default -->
  <div style="flex: 1; min-width: 320px;">
    <img id="programImage" src="pics/crossian.jpg" alt="Elementary Image" style="width: 100%; border-radius: 10px; margin-bottom: 20px;">
    <div id="programText" style="background-color: #0f2346; color: white; padding: 20px; border-radius: 8px; font-size: 16px; line-height: 1.6;">
    Be a Crossian!
Join Concepcion Holy Cross College, Inc.—where excellence is nurtured from Preschool to College. With strong values, academic rigor, and a supportive community, we empower every learner to grow in character and competence.
    </div>
  </div>
</section>

<!-- Script for Hover Interaction -->
<script>
const programItems = document.querySelectorAll("#programList li");
const image = document.getElementById("programImage");
const text = document.getElementById("programText");

programItems.forEach(item => {
  item.addEventListener("mouseenter", () => {
    // Highlight active
    programItems.forEach(i => {
      i.style.color = "#aaa";
      i.style.fontWeight = "normal";
    });
    item.style.color = "#000";
    item.style.fontWeight = "bold";

    // Update image and text
    image.src = item.getAttribute("data-image");
    text.textContent = item.getAttribute("data-text");
  });
});
</script>







<!-- college logo -->
<section style="background-color: #f9f9f9; padding: 30px 15px; text-align: center;">
  <h2 style="font-size: 2.3rem; font-weight: 800; color: #0d1b2a; margin-bottom: 35px;">
    Undergraduate Programs
  </h2>
  <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 25px;">

    <!-- Program Card Template -->
    <div onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.2)'" 
         onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'"
         style="background-color: #1e2e44; padding: 15px; border-radius: 10px; width: 160px; color: #fff; transition: all 0.3s ease;">
      <img src="pics/comlogo.png" alt="Computer Science" style="width: 85px; height: auto; margin-bottom: 15px;">
      <p style="margin: 0; font-size: 0.95rem;">Computer<br>Science</p>
    </div>

    <div onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.2)'" 
         onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'"
         style="background-color: #1e2e44; padding: 15px; border-radius: 10px; width: 160px; color: #fff; transition: all 0.3s ease;">
      <img src="pics/nursinglogo.png" alt="College of Nursing" style="width: 85px; height: auto; margin-bottom: 15px;">
      <p style="margin: 0; font-size: 0.95rem;">College of<br>Nursing</p>
    </div>

    <div onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.2)'" 
         onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'"
         style="background-color: #1e2e44; padding: 15px; border-radius: 10px; width: 160px; color: #fff; transition: all 0.3s ease;">
      <img src="pics/hmlogo.png" alt="Hospitality Management" style="width: 85px; height: auto; margin-bottom: 15px;">
      <p style="margin: 0; font-size: 0.95rem;">Hospitality<br>Management</p>
    </div>

    <div onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.2)'" 
         onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'"
         style="background-color: #1e2e44; padding: 15px; border-radius: 10px; width: 160px; color: #fff; transition: all 0.3s ease;">
      <img src="pics/educlogo.png" alt="College of Education" style="width: 85px; height: auto; margin-bottom: 15px;">
      <p style="margin: 0; font-size: 0.95rem;">College of<br>Education</p>
    </div>

    <div onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.2)'" 
         onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'"
         style="background-color: #1e2e44; padding: 15px; border-radius: 10px; width: 160px; color: #fff; transition: all 0.3s ease;">
      <img src="pics/crimlogo.png" alt="College of Criminology" style="width: 85px; height: auto; margin-bottom: 15px;">
      <p style="margin: 0; font-size: 0.95rem;">College of<br>Criminology</p>
    </div>

    <div onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.2)'" 
         onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'"
         style="background-color: #1e2e44; padding: 15px; border-radius: 10px; width: 160px; color: #fff; transition: all 0.3s ease;">
      <img src="pics/bsalogo.png" alt="Business Administration & Accountancy" style="width: 85px; height: auto; margin-bottom: 15px;">
      <p style="margin: 0; font-size: 0.95rem;">Business Administration &<br>Accountancy</p>
    </div>

    <!-- Learn More Button Section -->
    <div style="text-align: center; margin-top: 40px; width: 100%;">
      <a href="college.php" 
         style="display: inline-block; padding: 14px 28px; font-size: 16px; font-weight: bold; color: white; background-color: #0f2346; text-decoration: none; border-radius: 6px; box-shadow: 0 4px 10px rgba(0,0,0,0.15); transition: background-color 0.3s, transform 0.3s;"
         onmouseover="this.style.backgroundColor='#122d5a'; this.style.transform='scale(1.05)'"
         onmouseout="this.style.backgroundColor='#0f2346'; this.style.transform='scale(1)'">
        Learn More
      </a>
    </div>

  </div>
</section>




<!-- Optional Hover Script -->
<script>
  const btn = document.querySelector('a[href="#more-info"]');
  btn.addEventListener('mouseover', () => {
    btn.style.backgroundColor = '#1a3b6d';
    btn.style.transform = 'scale(1.05)';
  });
  btn.addEventListener('mouseout', () => {
    btn.style.backgroundColor = '#0f2346';
    btn.style.transform = 'scale(1)';
  });
</script>



<!-- Enhanced Features Section -->
<div style="display: flex; background-color: #0f2346; color: white; font-family: sans-serif; padding: 40px 0;">
  
  <!-- Academic Excellence -->
  <div style="flex: 1; padding: 30px; display: flex; flex-direction: column; align-items: center; text-align: left;">
    <div style="background-color: white; border-radius: 50%; width: 120px; height: 120px; display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
      <img src="pics/toga.jpg" alt="Academic Icon" style="width: 60px;">
    </div>
    <h2 style="font-size: 24px; font-weight: bold; margin: 0 0 10px;">Academic Excellence</h2>
    <p style="font-size: 15px; line-height: 1.55; max-width: 340px;">
      Our rigorous curriculum ensures students are well-prepared for college and life beyond.
    </p>
    
  </div>

  <!-- Experienced Faculty -->
  <div style="flex: 1; padding: 30px; display: flex; flex-direction: column; align-items: center; text-align: left;">
    <div style="background-color: white; border-radius: 50%; width: 120px; height: 120px; display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
      <img src="pics/fac.jpg" alt="Faculty Icon" style="width: 60px;">
    </div>
    <h2 style="font-size: 24px; font-weight: bold; margin: 0 0 10px;">Experienced Faculty</h2>
    <p style="font-size: 15px; line-height: 1.55; max-width: 340px;">
      Our dedicated teachers are passionate about education and student success.
    </p>

  </div>

  <!-- Supportive Community -->
  <div style="flex: 1; padding: 30px; display: flex; flex-direction: column; align-items: center; text-align: left;">
    <div style="background-color: white; border-radius: 50%; width: 120px; height: 120px; display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
      <img src="pics/sup.jpg" alt="Community Icon" style="width: 60px;">
    </div>
    <h2 style="font-size: 24px; font-weight: bold; margin: 0 0 10px;">Supportive Community</h2>
    <p style="font-size: 15px; line-height: 1.55; max-width: 340px;">
      We foster a strong sense of community and belonging for all students on board.
    </p>
  
  </div>

</div>







<!-- Campus Section -->
<section style="padding: 60px 20px; background-color: #f4f4f4; font-family: sans-serif; text-align: center;">
  <h2 style="font-size: 36px; margin-bottom: 30px; color: #0f2346;">Explore Our Campus</h2>

  <!-- Image Gallery Grid -->
  <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 25px; max-width: 1100px; margin: auto;">

    <!-- Image Card -->
    <div style="flex: 0 1 calc(33.333% - 25px); box-sizing: border-box; transition: transform 0.3s, box-shadow 0.3s;">
      <img src="pics/a.jpg" alt="Main Building" 
           style="width: 100%; height: 200px; object-fit: cover; border-radius: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: transform 0.3s, box-shadow 0.3s;"
           onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 8px 16px rgba(0,0,0,0.2)';"
           onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.1)';">
    </div>

    <div style="flex: 0 1 calc(33.333% - 25px); box-sizing: border-box;">
      <img src="pics/c.jpg" alt="Library"
           style="width: 100%; height: 200px; object-fit: cover; border-radius: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: transform 0.3s, box-shadow 0.3s;"
           onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 8px 16px rgba(0,0,0,0.2)';"
           onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.1)';">
    </div>

    <div style="flex: 0 1 calc(33.333% - 25px); box-sizing: border-box;">
      <img src="pics/d.jpg" alt="Student Lounge"
           style="width: 100%; height: 200px; object-fit: cover; border-radius: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: transform 0.3s, box-shadow 0.3s;"
           onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 8px 16px rgba(0,0,0,0.2)';"
           onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.1)';">
    </div>

    <div style="flex: 0 1 calc(33.333% - 25px); box-sizing: border-box;">
      <img src="pics/e.jpg" alt="Sports Area"
           style="width: 100%; height: 200px; object-fit: cover; border-radius: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: transform 0.3s, box-shadow 0.3s;"
           onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 8px 16px rgba(0,0,0,0.2)';"
           onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.1)';">
    </div>

    <div style="flex: 0 1 calc(33.333% - 25px); box-sizing: border-box;">
      <img src="pics/f.jpg" alt="Student Lounge"
           style="width: 100%; height: 200px; object-fit: cover; border-radius: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: transform 0.3s, box-shadow 0.3s;"
           onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 8px 16px rgba(0,0,0,0.2)';"
           onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.1)';">
    </div>

    <div style="flex: 0 1 calc(33.333% - 25px); box-sizing: border-box;">
      <img src="pics/g.jpg" alt="Sports Area"
           style="width: 100%; height: 200px; object-fit: cover; border-radius: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: transform 0.3s, box-shadow 0.3s;"
           onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 8px 16px rgba(0,0,0,0.2)';"
           onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.1)';">
    </div>

    <div style="flex: 0 1 calc(33.333% - 25px); box-sizing: border-box;">
      <img src="pics/h.jpg" alt="Sports Area"
           style="width: 100%; height: 200px; object-fit: cover; border-radius: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: transform 0.3s, box-shadow 0.3s;"
           onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 8px 16px rgba(0,0,0,0.2)';"
           onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.1)';">
    </div>

    <div style="flex: 0 1 calc(33.333% - 25px); box-sizing: border-box;">
      <img src="pics/i.jpg" alt="Student Lounge"
           style="width: 100%; height: 200px; object-fit: cover; border-radius: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: transform 0.3s, box-shadow 0.3s;"
           onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 8px 16px rgba(0,0,0,0.2)';"
           onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.1)';">
    </div>

    <div style="flex: 0 1 calc(33.333% - 25px); box-sizing: border-box;">
      <img src="pics/j.jpg" alt="Sports Area"
           style="width: 100%; height: 200px; object-fit: cover; border-radius: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: transform 0.3s, box-shadow 0.3s;"
           onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 8px 16px rgba(0,0,0,0.2)';"
           onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.1)';">
    </div>

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
