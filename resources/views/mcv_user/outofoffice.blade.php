<!-- resources/views/mcv_user/outofoffice.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>My ComplianceView Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/mcv_user/style.css') }}" />
</head>
<body>
  <div class="page-container">
    <div class="content-wrapper">
      @include('mcv_user.partials.navbar')

      <main>
        <h1>Out of Office</h1>
        <div class="form-grid">
          <div class="form-group full-width">
            <p>
              This feature allows you to add an alternate email to receive notifications from MyComplianceView.
            </p>
            <p>
              All the mails will also be sent to the Alternate Email when added and will be removed once you click 'Back in Office' button.
            </p>
          </div>

          <form >
         

            <div class="form-group full-width">
              <label for="alternate-email">Alternate email</label>
              <input type="email" id="alternate-email" name="alternate_email" placeholder="Alternate email" required />
            </div>

            <div class="form-group">
              <button type="submit" name="action" value="add" class="confirm-btn">Add Alternate Email</button>
            </div>

            <div class="form-group">
              <button type="submit" name="action" value="back" class="confirm-btn">Back in Office</button>
            </div>
          </form>
        </div>
      </main>
    </div>
  </div>

  @include('mcv_user.partials.footer')
</body>
</html>
