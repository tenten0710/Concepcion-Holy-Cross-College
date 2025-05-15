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
  <h1 style="position: relative; z-index: 1; font-size: 48px; margin: 0; font-weight: 700; font-family: 'Georgia', serif;">Admission Form</h1>

</section>




<div style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; padding: 30px; background-color: #ffffff; width: 100%; max-width: 720px; margin: 40px auto; border-radius: 12px; box-shadow: 0 8px 30px rgba(0,0,0,0.1);">
    <h2 style="text-align: center; color: #1c3d5c; font-size: 28px; margin-bottom: 10px;">Student Registration Form</h2>
    <p style="text-align: center; color: #6c757d; margin-bottom: 30px;">Start your CROSSIAN journey by completing the form below.</p>

    <form action="enrollform.php" method="POST" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to proceed with enrollment and submit this form?');">


        <!-- Name Details -->
        <div style="display: flex; gap: 15px; margin-bottom: 15px;">
            <div style="flex: 1;">
                <label for="firstName" style="font-weight: bold;">First Name*</label>
                <input type="text" id="firstName" name="firstName" placeholder="First Name" required
                       style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ccc;">
            </div>
            <div style="flex: 1;">
                <label for="middleName" style="font-weight: bold;">Middle Name</label>
                <input type="text" id="middleName" name="middleName" placeholder="Middle Name"
                       style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ccc;">
            </div>
            <div style="flex: 1;">
                <label for="lastName" style="font-weight: bold;">Last Name*</label>
                <input type="text" id="lastName" name="lastName" placeholder="Last Name" required
                       style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ccc;">
            </div>
        </div>

        <!-- Gender and Birthdate -->
        <div style="display: flex; gap: 15px; margin-bottom: 15px;">
            <div style="flex: 1;">
                <label for="gender" style="font-weight: bold;">Gender*</label>
                <select id="gender" name="gender" required
                        style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ccc;">
                    <option value="">Select gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div style="flex: 1;">
                <label for="birthdate" style="font-weight: bold;">Birthdate*</label>
                <input type="date" id="birthdate" name="birthdate" required
                       style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ccc;">
            </div>
        </div>

        <!-- Address: Province, City, Barangay -->
        <label style="font-weight: bold;">Address*</label>
        <div style="display: flex; gap: 15px; margin-bottom: 15px;">
            <div style="flex: 1;">
                <select id="province" name="province" required
                        style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ccc;">
                    <option value="">Select Province</option>
                </select>
            </div>
            <div style="flex: 1;">
                <select id="city" name="city" required
                        style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ccc;">
                    <option value="">Select City/Municipality</option>
                </select>
            </div>
            <div style="flex: 1;">
                <select id="barangay" name="barangay" required
                        style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ccc;">
                    <option value="">Select Barangay</option>
                </select>
            </div>
        </div>

        <div style="display: flex; gap: 15px; margin-bottom: 15px;">
    <!-- House Number -->
    <div style="flex: 1;">
        <input type="text" id="houseNumber" name="houseNumber" placeholder="House Number"
               style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ccc;">
    </div>

    <!-- Street -->
    <div style="flex: 2;">
        <input type="text" id="street" name="street" placeholder="Street"
               style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ccc;">
    </div>
</div>


        <!-- Program Applying For -->
        <div style="margin-bottom: 15px;">
            <label for="program" style="font-weight: bold;">Grade/Course/Program*</label>
            <select id="program" name="program" required
                    style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ccc;">
                <option value="">Select Grade/Course/Program</option>
                <optgroup label="PreSchool">
                    <option value="nursery">Nursery</option>
                    <option value="kinder">Kindergarten</option>
                </optgroup>
                <optgroup label="Elementary (Grade 1–6)">
                    <option value="grade1">Grade 1</option>
                    <option value="grade2">Grade 2</option>
                    <option value="grade3">Grade 3</option>
                    <option value="grade4">Grade 4</option>
                    <option value="grade5">Grade 5</option>
                    <option value="grade6">Grade 6</option>
                </optgroup>
                <optgroup label="Junior High School (Grade 7–10)">
                    <option value="grade7">Grade 7</option>
                    <option value="grade8">Grade 8</option>
                    <option value="grade9">Grade 9</option>
                    <option value="grade10">Grade 10</option>
                </optgroup>
                <optgroup label="Senior High School (Grade 11–12)">
                    <option value="grade11">Grade 11</option>
                    <option value="grade12">Grade 12</option>
                </optgroup>
                <optgroup label="College Degree Programs">
                    <option value="bscs">Bachelor of Science in Computer Science</option>
                    <option value="bscrim">Bachelor of Science in Criminology</option>
                    <option value="bshm">Bachelor of Science in Hospitality Management</option>
                    <option value="bsa">Bachelor of Science in Accountancy</option>
                    <option value="bsba_mm">Bachelor of Science in Business Administration (MM)</option>
                    <option value="bsn">Bachelor of Science in Nursing</option>
                    <option value="bste">Bachelor of Elementary Education</option>
                    <option value="bste">Bachelor of Secondary Education</option>
                </optgroup>
            </select>
        </div>

        <!-- Student Contact -->
        <div style="margin-bottom: 15px;">
            <label for="mobileNumber" style="font-weight: bold;">Student Mobile Number*</label>
            <input type="text" id="mobileNumber" name="mobileNumber" placeholder="Phone Number" required
                   style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ccc;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="emailAddress" style="font-weight: bold;">Student Email Address*</label>
            <input type="email" id="emailAddress" name="emailAddress" placeholder="your@gmail.com" required
                   style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ccc;">
        </div>

        <!-- Parent Info -->
        <div style="margin-bottom: 15px;">
            <label style="font-weight: bold;">Father's Name</label>
            <input type="text" name="fatherName" placeholder="Firstname Lastname"
                   style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ccc;">
        </div>
        <div style="margin-bottom: 15px;">
            <label style="font-weight: bold;">Father's Contact Number</label>
            <input type="text" name="fatherContact" placeholder="Contact Number"
                   style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ccc;">
        </div>
        <div style="margin-bottom: 15px;">
            <label style="font-weight: bold;">Mother's Name</label>
            <input type="text" name="motherName" placeholder="Firstname Lastname"
                   style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ccc;">
        </div>
        <div style="margin-bottom: 15px;">
            <label style="font-weight: bold;">Mother's Contact Number</label>
            <input type="text" name="motherContact" placeholder="Contact Number"
                   style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ccc;">
        </div>

<!-- Upload Payment Receipt -->
<div style="margin-bottom: 20px;">
    <label for="paymentReceipt" style="font-weight: bold;">Upload Payment Receipt*</label>
    <input type="file" id="paymentReceipt" name="paymentReceipt" accept=".jpg,.jpeg,.png,.pdf" required
           style="width: 100%; padding: 10px; border-radius: 6px; border: 1px solid #ccc;">
    <small style="color: #6c757d;">Accepted formats: JPG, PNG, PDF</small>
</div>


        <!-- Enroll Button and Note -->
<div style="text-align: center; margin-top: 30px;">
    <button type="submit"
        style="background-color: #1c3d5c; color: white; padding: 14px 30px; font-size: 16px; font-weight: bold; border: none; border-radius: 8px; cursor: pointer;">
        Enroll Now!
    </button>
    <p style="margin-top: 10px; color: #6c757d; font-style: italic; font-size: 14px;">
        To verify your enrollment click the <strong>"Enroll Now!"</strong> button and pay an initial payment of
        <strong>₱2,000</strong>. To learn more about <a href="#payment.php" style="color: #f89b29; text-decoration: none;">payments click here.</a>
    </p>
</div>

    </form>
</div>


<script>
  document.addEventListener('DOMContentLoaded', function () {
    const provinceSelect = document.getElementById('province');
    const citySelect = document.getElementById('city');
    const barangaySelect = document.getElementById('barangay');

    // Fetch and populate provinces alphabetically
    fetch('https://psgc.gitlab.io/api/provinces/')
      .then(response => response.json())
      .then(provinces => {
        provinces
          .sort((a, b) => a.name.localeCompare(b.name)) // sort by name
          .forEach(province => {
            const option = document.createElement('option');
            option.value = province.code;
            option.textContent = province.name;
            provinceSelect.appendChild(option);
          });
      });

    // When a province is selected
    provinceSelect.addEventListener('change', function () {
      const provinceCode = this.value;
      citySelect.innerHTML = '<option value="">Select City/Municipality</option>';
      barangaySelect.innerHTML = '<option value="">Select Barangay</option>';

      if (provinceCode) {
        fetch(`https://psgc.gitlab.io/api/provinces/${provinceCode}/cities-municipalities/`)
          .then(response => response.json())
          .then(cities => {
            cities
              .sort((a, b) => a.name.localeCompare(b.name)) // sort cities
              .forEach(city => {
                const option = document.createElement('option');
                option.value = city.code;
                option.textContent = city.name;
                citySelect.appendChild(option);
              });
          });
      }
    });

    // When a city is selected
    citySelect.addEventListener('change', function () {
      const cityCode = this.value;
      barangaySelect.innerHTML = '<option value="">Select Barangay</option>';

      if (cityCode) {
        fetch(`https://psgc.gitlab.io/api/cities-municipalities/${cityCode}/barangays/`)
          .then(response => response.json())
          .then(barangays => {
            barangays
              .sort((a, b) => a.name.localeCompare(b.name)) // sort barangays
              .forEach(barangay => {
                const option = document.createElement('option');
                option.value = barangay.code;
                option.textContent = barangay.name;
                barangaySelect.appendChild(option);
              });
          });
      }
    });
  });
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
