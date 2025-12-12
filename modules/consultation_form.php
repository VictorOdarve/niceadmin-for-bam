<?php
 include "./includes/connection.php";

if(isset($_POST["btn_sendconsultation"])){
  
  $fullname = $_POST ['fullname_consultation'];
  $age = $_POST ['age_consultation'];
  $gender = $_POST ['gender_consultation'];
  $barangay = $_POST ['barangay'];
  $address = $_POST ['address_consultation'];
  $reason = $_POST ['reason_consultation'];
  $concern = $_POST ['concern_consultation'];
  $intensity = $_POST ['intensity_consultation'];
  $date = $_POST ['date_consultation'];

  $sql = "INSERT INTO tbl_consultation (full_name, age, gender, barangay, complete_address, reason_for_consultation, main_reason, intensity, date_consultation)
VALUES ('$fullname', '$age', '$gender', '$barangay', '$address', '$reason', '$concern', '$intensity', '$date')";

if ($conn->query($sql) === TRUE) {
  echo '<script>alert("New Consultation Added!");</script>';
} 
  else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

if(isset($_POST["btn_clear"])){
 echo '<script>alert("Clear button is click");</script>';
}
$conn->close();
?>


<h5 class="card-title">CONSULTATION FORM</h5>

<form class="row g-3" method="POST" action="index_admin.php?page=feedback_form" onsubmit="return validateForm()">
  <div class="col-md-9">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingFullName" placeholder="Full Name" name="fullname_consultation">
      <label for="floatingFullName">Full Name</label>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingAge" placeholder="Age" name="age_consultation">
      <label for="floatingSubject">Age</label>
    </div>
  </div>

  <div class="col-3">
    <div class="form-floating">
      <select class="form-select" id="floatingCategory" aria-label="Gender" name="gender_consultation">
        <option selected disabled></option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Others">Others</option>
      </select>
      <label for="floatingCategory">Gender</label>
    </div>
  </div>

  <div class="col-9">
  <div class="form-floating">
    <select class="form-select" id="floatingBarangay" aria-label="Barangay" name="barangay">
      <option selected disabled></option>

      <!-- List of Barangays in Cagayan de Oro -->
      <option value="agusan">Agusan</option>
      <option value="baikingon">Baikingon</option>
      <option value="balulang">Balulang</option>
      <option value="balubal">Balubal</option>
      <option value="bayabas">Bayabas</option>
      <option value="bayanga">Bayanga</option>
      <option value="besigan">Besigan</option>
      <option value="bonbon">Bonbon</option>
      <option value="bulua">Bulua</option>
      <option value="bugo">Bugo</option>
      <option value="camaman-an">Camaman-an</option>
      <option value="canito-an">Canito-an</option>
      <option value="carmen">Carmen</option>
      <option value="consolacion">Consolacion</option>
      <option value="cugman">Cugman</option>
      <option value="gusa">Gusa</option>
      <option value="indahag">Indahag</option>
      <option value="lapasan">Lapasan</option>
      <option value="lumbia">Lumbia</option>
      <option value="macabalan">Macabalan</option>
      <option value="macasandig">Macasandig</option>
      <option value="nazareth">Nazareth</option>
      <option value="patag">Patag</option>
      <option value="puerto">Puerto</option>
      <option value="puntod">Puntod</option>
      <option value="tablon">Tablon</option>
    </select>
    <label for="floatingBarangay">Barangay</label>
  </div>
</div>

  <div class="col-md-9">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingAddress" placeholder="Complete Address" name="address_consultation">
      <label for="floatingAddress">Complete Address</label>
    </div>
  </div>

  <div class="col-6">
    <div class="form-floating">
      <select class="form-select" id="floatingCategory" aria-label="Reason for Consultation" name="reason_consultation">
        <option selected disabled></option>
        <option value="checkup">checkup</option>
        <option value="followup">followup</option>
        <option value="medication">medication</option>
        <option value="pain">pain</option>
        <option value="fever">fever</option>
        <option value="cough_cold">cough_cold</option>
        <option value="wound">wound</option>
        <option value="skin">skin</option>
        <option value="bp_check">bp_check</option>
        <option value="other">other</option>
      </select>
      <label for="floatingCategory">Reason for Consultation</label>
    </div>
  </div>

  <div class="col-9">
    <div class="form-floating">
      <textarea class="form-control" placeholder="Main Concern/Problem" id="floatingMessage" style="height: 120px;" name="concern_consultation"></textarea>
      <label for="floatingMessage">Main Concern/Problem</label>
    </div>
  </div>

  <div class="col-6">
    <div class="form-floating">
      <select class="form-select" id="floatingCategory" aria-label="Intensity" name="intensity_consultation">
        <option selected disabled></option>
        <option value="mild">mild</option>
        <option value="moderate">moderate</option>
        <option value="severe">severe</option>
        <option value="others">others</option>
      </select>
      
      <label for="floatingCategory">Intensity</label>
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-floating">
      <input type="date" class="form-control" id="floatingDate" placeholder="Date of Consultation" name="date_consultation">
      <label for="floatingDate">Date of Consultation</label>
    </div>
  </div>

  <div class="text-center">
    <button type="submit" class="btn btn-primary" name="btn_sendconsultation">Send Consultation</button>
    <button type="submit" class="btn btn-secondary" name="btn_clear">Clear</button>
  </div>
</form>

<style>
.error {
    border: 2px solid red !important;
}
</style>

<script>
function validateForm() {
    var fields = [
        'fullname_consultation',
        'age_consultation',
        'gender_consultation',
        'barangay',
        'address_consultation',
        'reason_consultation',
        'concern_consultation',
        'intensity_consultation',
        'date_consultation'
    ];

    var hasError = false;
    for (var i = 0; i < fields.length; i++) {
        var field = document.getElementsByName(fields[i])[0];
        if (field.value.trim() === '') {
            field.classList.add('error');
            if (!hasError) {
                field.focus();
                hasError = true;
            }
        } else {
            field.classList.remove('error');
        }
    }

    if (hasError) {
        alert('You need to fill up all the form for you to submit');
        return false;
    }
    return true;
}

// Attach validation to form submit
document.querySelector('form').onsubmit = function() {
    return validateForm();
};
</script>
