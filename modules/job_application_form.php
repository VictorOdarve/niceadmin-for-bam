<h5 class="card-title">Job Application Form</h5>

<form class="row g-3">
  <div class="col-md-12">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingApplicantName" placeholder="Full Name">
      <label for="floatingApplicantName">Full Name</label>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingApplicantEmail" placeholder="Email Address">
      <label for="floatingApplicantEmail">Email Address</label>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-floating">
      <input type="tel" class="form-control" id="floatingPhone" placeholder="Phone Number">
      <label for="floatingPhone">Phone Number</label>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingPosition" placeholder="Position Applied For">
      <label for="floatingPosition">Position Applied For</label>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingExperience" placeholder="Years of Experience">
      <label for="floatingExperience">Years of Experience</label>
    </div>
  </div>

  <div class="col-12">
    <div class="form-floating">
      <textarea class="form-control" placeholder="Address" id="floatingAddress" style="height: 100px;"></textarea>
      <label for="floatingAddress">Address</label>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-floating">
      <input type="date" class="form-control" id="floatingDOB" placeholder="Date of Birth">
      <label for="floatingDOB">Date of Birth</label>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-floating mb-3">
      <select class="form-select" id="floatingEducation" aria-label="Education Level">
        <option selected disabled>Select</option>
        <option value="1">High School</option>
        <option value="2">College Graduate</option>
        <option value="3">Post-Graduate</option>
      </select>
      <label for="floatingEducation">Education Level</label>
    </div>
  </div>

  <div class="col-12">
    <div class="form-floating">
      <textarea class="form-control" placeholder="Short Description" id="floatingAbout" style="height: 120px;"></textarea>
      <label for="floatingAbout">Tell Us About Yourself</label>
    </div>
  </div>

  <div class="text-center">
    <button type="submit" class="btn btn-primary">Submit Application</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
  </div>
</form>
