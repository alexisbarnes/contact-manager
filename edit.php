<?php

  include 'header.php';
  $id = $_GET['id'];

  $stmt = $db->prepare('SELECT * from contacts WHERE id = :id LIMIT 1');
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  $contact = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<?php if (array_key_exists('updated', $_GET)) : ?>
<div class="alert alert-success">
  <p><strong>Update successful!</strong>. Your contact was updated.</p>
</div>
<?php endif; ?>

<a href="/delete.php?id=<?= $contact['id']; ?>" class="btn btn-danger btn-xs pull-right btn-delete">Delete Contact</a>

<h1>Edit Contact</h1>

<form method="POST" action="/update.php">
  <input type="hidden" name="id" id="contact_id" value="<?= $contact['id']; ?>" />

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
    <div class="form-group">
      <label for="contact_first">First Name</label>
      <input class="form-control" type="text" name="first" id="contact_first" value="<?= $contact['first']; ?>" />
    </div>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
    <div class="form-group">
      <label for="contact_last">Last Name</label>
      <input class="form-control" type="text" name="last" id="contact_last" value="<?= $contact['last']; ?>" />
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="form-group">
      <label for="contact_title">Title</label>
      <input class="form-control" type="text" name="title" id="contact_title" value="<?= $contact['title']; ?>" />
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="form-group">
      <label for="contact_address">Address</label>
      <input class="form-control" type="text" name="address" id="contact_address" value="<?= $contact['address']; ?>" />
    </div>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
    <div class="form-group">
      <label for="contact_city">City</label>
      <input class="form-control" type="text" name="city" id="contact_city" value="<?= $contact['city']; ?>" />
    </div>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
    <div class="form-group">
      <label for="contact_state">State</label>
      <select name="state" id="contact_state" value="<?= $contact['state']; ?>" class="form-control">
        <option value="AL"<?= ($contact['state'] == 'AL') ? ' selected' : '' ?>>Alabama</option>
        <option value="AK"<?= ($contact['state'] == 'AK') ? ' selected' : '' ?>>Alaska</option>
        <option value="AZ"<?= ($contact['state'] == 'AZ') ? ' selected' : '' ?>>Arizona</option>
        <option value="AR"<?= ($contact['state'] == 'AR') ? ' selected' : '' ?>>Arkansas</option>
        <option value="CA"<?= ($contact['state'] == 'CA') ? ' selected' : '' ?>>California</option>
        <option value="CO"<?= ($contact['state'] == 'CO') ? ' selected' : '' ?>>Colorado</option>
        <option value="CT"<?= ($contact['state'] == 'CT') ? ' selected' : '' ?>>Connecticut</option>
        <option value="DE"<?= ($contact['state'] == 'DE') ? ' selected' : '' ?>>Delaware</option>
        <option value="FL"<?= ($contact['state'] == 'FL') ? ' selected' : '' ?>>Florida</option>
        <option value="GA"<?= ($contact['state'] == 'GA') ? ' selected' : '' ?>>Georgia</option>
        <option value="HI"<?= ($contact['state'] == 'HI') ? ' selected' : '' ?>>Hawaii</option>
        <option value="ID"<?= ($contact['state'] == 'ID') ? ' selected' : '' ?>>Idaho</option>
        <option value="IL"<?= ($contact['state'] == 'IL') ? ' selected' : '' ?>>Illinois</option>
        <option value="IN"<?= ($contact['state'] == 'IN') ? ' selected' : '' ?>>Indiana</option>
        <option value="IA"<?= ($contact['state'] == 'IA') ? ' selected' : '' ?>>Iowa</option>
        <option value="KS"<?= ($contact['state'] == 'KS') ? ' selected' : '' ?>>Kansas</option>
        <option value="KY"<?= ($contact['state'] == 'KY') ? ' selected' : '' ?>>Kentucky</option>
        <option value="LA"<?= ($contact['state'] == 'LA') ? ' selected' : '' ?>>Louisiana</option>
        <option value="ME"<?= ($contact['state'] == 'ME') ? ' selected' : '' ?>>Maine</option>
        <option value="MD"<?= ($contact['state'] == 'MD') ? ' selected' : '' ?>>Maryland</option>
        <option value="MA"<?= ($contact['state'] == 'MA') ? ' selected' : '' ?>>Massachusetts</option>
        <option value="MI"<?= ($contact['state'] == 'MI') ? ' selected' : '' ?>>Michigan</option>
        <option value="MN"<?= ($contact['state'] == 'MN') ? ' selected' : '' ?>>Minnesota</option>
        <option value="MS"<?= ($contact['state'] == 'MS') ? ' selected' : '' ?>>Mississippi</option>
        <option value="MO"<?= ($contact['state'] == 'MO') ? ' selected' : '' ?>>Missouri</option>
        <option value="MT"<?= ($contact['state'] == 'MT') ? ' selected' : '' ?>>Montana</option>
        <option value="NE"<?= ($contact['state'] == 'NE') ? ' selected' : '' ?>>Nebraska</option>
        <option value="NV"<?= ($contact['state'] == 'NV') ? ' selected' : '' ?>>Nevada</option>
        <option value="NH"<?= ($contact['state'] == 'NH') ? ' selected' : '' ?>>New Hampshire</option>
        <option value="NJ"<?= ($contact['state'] == 'NJ') ? ' selected' : '' ?>>New Jersey</option>
        <option value="NM"<?= ($contact['state'] == 'NM') ? ' selected' : '' ?>>New Mexico</option>
        <option value="NY"<?= ($contact['state'] == 'NY') ? ' selected' : '' ?>>New York</option>
        <option value="NC"<?= ($contact['state'] == 'NC') ? ' selected' : '' ?>>North Carolina</option>
        <option value="ND"<?= ($contact['state'] == 'ND') ? ' selected' : '' ?>>North Dakota</option>
        <option value="OH"<?= ($contact['state'] == 'OH') ? ' selected' : '' ?>>Ohio</option>
        <option value="OK"<?= ($contact['state'] == 'OK') ? ' selected' : '' ?>>Oklahoma</option>
        <option value="OR"<?= ($contact['state'] == 'OR') ? ' selected' : '' ?>>Oregon</option>
        <option value="PA"<?= ($contact['state'] == 'PA') ? ' selected' : '' ?>>Pennsylvania</option>
        <option value="RI"<?= ($contact['state'] == 'RI') ? ' selected' : '' ?>>Rhode Island</option>
        <option value="SC"<?= ($contact['state'] == 'SC') ? ' selected' : '' ?>>South Carolina</option>
        <option value="SD"<?= ($contact['state'] == 'SD') ? ' selected' : '' ?>>South Dakota</option>
        <option value="TN"<?= ($contact['state'] == 'TN') ? ' selected' : '' ?>>Tennessee</option>
        <option value="TX"<?= ($contact['state'] == 'TX') ? ' selected' : '' ?>>Texas</option>
        <option value="UT"<?= ($contact['state'] == 'UT') ? ' selected' : '' ?>>Utah</option>
        <option value="VT"<?= ($contact['state'] == 'VT') ? ' selected' : '' ?>>Vermont</option>
        <option value="VA"<?= ($contact['state'] == 'VA') ? ' selected' : '' ?>>Virginia</option>
        <option value="WA"<?= ($contact['state'] == 'WA') ? ' selected' : '' ?>>Washington</option>
        <option value="WV"<?= ($contact['state'] == 'WV') ? ' selected' : '' ?>>West Virginia</option>
        <option value="WI"<?= ($contact['state'] == 'WI') ? ' selected' : '' ?>>Wisconsin</option>
        <option value="WY"<?= ($contact['state'] == 'WY') ? ' selected' : '' ?>>Wyoming</option>
      </select>
    </div>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
    <div class="form-group">
      <label for="contact_zip">Zip Code</label>
      <input class="form-control" type="text" name="zip" id="contact_zip" value="<?= $contact['zip']; ?>" />
    </div>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
    <div class="form-group">
      <label for="contact_phone">Phone Number</label>
      <input class="form-control" type="text" name="phone" id="contact_phone" value="<?= $contact['phone']; ?>" />
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="form-group">
      <label for="contact_notes">Notes</label>
      <textarea class="form-control" name="notes" id="contact_notes"><?= $contact['notes']; ?></textarea>
    </div>
  </div>


  <button class="btn btn-primary">Save Task</button>
</form>

<?php include 'footer.php'; ?>
