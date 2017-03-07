<?php

  include 'header.php';

?>

<h1>Create Contact</h1>

<form method="POST" action="/create.php">

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
    <div class="form-group">
      <label for="contact_first">First Name</label>
      <input class="form-control" type="text" name="first" id="contact_first" value="" placeholder="First Name" />
    </div>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
    <div class="form-group">
      <label for="contact_last">Last Name</label>
      <input class="form-control" type="text" name="last" id="contact_last" value="" placeholder="Last Name" />
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="form-group">
      <label for="contact_title">Title</label>
      <input class="form-control" type="text" name="title" id="contact_title" value="" placeholder="Title" />
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="form-group">
      <label for="contact_address">Address</label>
      <input class="form-control" type="text" name="address" id="contact_address" value="" placeholder="Address" />
    </div>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
    <div class="form-group">
      <label for="contact_city">City</label>
      <input class="form-control" type="text" name="city" id="contact_city" value="" placeholder="City" />
    </div>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
    <div class="form-group">
      <label for="contact_state">State</label>
      <select name="state" id="contact_state" value="AL" class="form-control">
        <option value="AL" selected>Alabama</option>
        <option value="AK">Alaska</option>
        <option value="AZ">Arizona</option>
        <option value="AR">Arkansas</option>
        <option value="CA">California</option>
        <option value="CO">Colorado</option>
        <option value="CT">Connecticut</option>
        <option value="DE">Delaware</option>
        <option value="FL">Florida</option>
        <option value="GA">Georgia</option>
        <option value="HI">Hawaii</option>
        <option value="ID">Idaho</option>
        <option value="IL">Illinois</option>
        <option value="IN">Indiana</option>
        <option value="IA">Iowa</option>
        <option value="KS">Kansas</option>
        <option value="KY">Kentucky</option>
        <option value="LA">Louisiana</option>
        <option value="ME">Maine</option>
        <option value="MD">Maryland</option>
        <option value="MA">Massachusetts</option>
        <option value="MI">Michigan</option>
        <option value="MN">Minnesota</option>
        <option value="MS">Mississippi</option>
        <option value="MO">Missouri</option>
        <option value="MT">Montana</option>
        <option value="NE">Nebraska</option>
        <option value="NV">Nevada</option>
        <option value="NH">New Hampshire</option>
        <option value="NJ">New Jersey</option>
        <option value="NM">New Mexico</option>
        <option value="NY">New York</option>
        <option value="NC">North Carolina</option>
        <option value="ND">North Dakota</option>
        <option value="OH">Ohio</option>
        <option value="OK">Oklahoma</option>
        <option value="OR">Oregon</option>
        <option value="PA">Pennsylvania</option>
        <option value="RI">Rhode Island</option>
        <option value="SC">South Carolina</option>
        <option value="SD">South Dakota</option>
        <option value="TN">Tennessee</option>
        <option value="TX">Texas</option>
        <option value="UT">Utah</option>
        <option value="VT">Vermont</option>
        <option value="VA">Virginia</option>
        <option value="WA">Washington</option>
        <option value="WV">West Virginia</option>
        <option value="WI">Wisconsin</option>
        <option value="WY">Wyoming</option>
      </select>
    </div>
  </div>


  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
    <div class="form-group">
      <label for="contact_zip">Zip Code</label>
      <input class="form-control" type="text" name="zip" id="contact_zip" value="" placeholder="Zip Code" />
    </div>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
    <div class="form-group">
      <label for="contact_phone">Phone Number</label>
      <input class="form-control" type="text" name="phone" id="contact_phone" value="" placeholder="Phone Number" />
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="form-group">
      <label for="contact_notes">Notes</label>
      <input class="form-control" type="text" name="notes" id="contact_notes" value="" placeholder="Notes" />
    </div>
  </div>

  <button class="btn btn-primary">Create New Contact</button>
</form>

<?php include 'footer.php'; ?>
