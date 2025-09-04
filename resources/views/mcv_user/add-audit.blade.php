<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Add Audit Compliance</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/mcv_user/style.css') }}" />
</head>
<body>
<div class="content-wrapper">
  @include('mcv_user.partials.navbar')

  <main>
    <h1>Add Audit Compliance</h1>
    <form class="form-grid" method="post" action="process_audit_compliance.php">
      
      <div class="form-group full-width">
        <label>Select Your Compliance</label>
        <select name="compliance_select">
          <option value="" selected>Select</option>
          <option value="compliance1">Compliance 1</option>
          <option value="compliance2">Compliance 2</option>
        </select>
      </div>

      <div class="form-group">
        <label>Compliance ID</label>
        <input type="text" name="compliance_id" value="com20250813030215" readonly />
      </div>

      <div class="form-group">
        <label>Compliance Name</label>
        <input type="text" name="compliance_name" readonly />
      </div>

      <div class="form-group">
        <label>Start Date</label>
        <input type="date" name="start_date" />
      </div>

      <div class="form-group">
        <label>End Date</label>
        <input type="date" name="end_date" />
      </div>

      <div class="form-group full-width">
        <label>Comply By</label>
        <input type="date" name="comply_by" />
      </div>

      <div class="form-group full-width">
        <label>Description</label>
        <textarea name="description"></textarea>
      </div>

      <div class="form-group full-width">
        <label>Repeat Comply for every:</label>
        <div>
          <input type="radio" name="repeat_type" value="months" checked />
          <input type="number" name="repeat_months" value="1" min="1" style="width: 60px;" /> Months
        </div>
        <div>
          <input type="radio" name="repeat_type" value="days" />
          <input type="number" name="repeat_days" style="width: 60px;" /> Days
        </div>
        <div>
          <input type="radio" name="repeat_type" value="none" /> Do Not Repeat
        </div>
      </div>

      <div class="form-group full-width">
        <label>Reminder:</label>
        <input type="number" name="reminder_days" value="1" min="1" style="width: 60px;" /> Days Prior to Action Dates
      </div>

      <div class="form-group full-width">
        <label><input type="checkbox" name="add_escalation" /> Add Escalation</label>
      </div>

      <div class="form-group">
        <label>Escalation Email</label>
        <input type="email" name="escalation_email" readonly />
      </div>

      <div class="form-group">
        <label>Reminder of Escalation Email</label>
        <input type="number" name="escalation_reminder_days" style="width: 60px;" /> Days Prior to Action Dates
      </div>

      <div class="form-group full-width">
        <button type="submit" class="confirm-btn">Create</button>
      </div>

    </form>
  </main>
</div>

@include('mcv_user.partials.footer')
<script src="{{ asset('js/mcv_user/script.js') }}"></script>
</body>
</html>
