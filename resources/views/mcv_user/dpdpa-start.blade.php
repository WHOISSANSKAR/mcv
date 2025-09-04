<!-- resources/views/mcv_user/dpdpa-start.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>DPDPA Assessment</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/mcv_user/style.css') }}" />
</head>
<body>
<div class="content-wrapper">

  @include('mcv_user.partials.navbar')

  <main>
    <h1>DPDPA Assessment</h1>
    <form class="form-grid">

      <!-- Legal Scope -->
      <div class="assessment-section">
        <h3 class="section-title">Legal Scope</h3>
        <table class="assessment-table data-table">
          <thead>
            <tr>
              <th>Aspect</th>
              <th>Yes</th>
              <th>No</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-label="Aspect">Identification of personal data which is processed</td>
              <td data-label="Yes"><input type="radio" name="ls1" value="Yes"></td>
              <td data-label="No"><input type="radio" name="ls1" value="No"></td>
            </tr>
            <tr>
              <td data-label="Aspect">Identification of data processing activities exempted under the law.</td>
              <td data-label="Yes"><input type="radio" name="ls2" value="Yes"></td>
              <td data-label="No"><input type="radio" name="ls2" value="No"></td>
            </tr>
            <tr>
              <td data-label="Aspect">Identification of data processing activity which takes place in India</td>
              <td data-label="Yes"><input type="radio" name="ls3" value="Yes"></td>
              <td data-label="No"><input type="radio" name="ls3" value="No"></td>
            </tr>
            <tr>
              <td data-label="Aspect">Identification of Data Processing outside India where Indian citizen are involved.</td>
              <td data-label="Yes"><input type="radio" name="ls4" value="Yes"></td>
              <td data-label="No"><input type="radio" name="ls4" value="No"></td>
            </tr>
            <tr>
              <td data-label="Aspect">Identification of personal data which departments are processing</td>
              <td data-label="Yes"><input type="radio" name="ls5" value="Yes"></td>
              <td data-label="No"><input type="radio" name="ls5" value="No"></td>
            </tr>
            <tr>
              <td data-label="Aspect">Identification of Data Types such as ‘personal data’, ‘sensitive personal data’, ‘critical personal data’ and ‘non-personal data’.</td>
              <td data-label="Yes"><input type="radio" name="ls6" value="Yes"></td>
              <td data-label="No"><input type="radio" name="ls6" value="No"></td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Governance -->
      <div class="assessment-section">
        <h3 class="section-title">Governance</h3>
        <table class="assessment-table data-table">
          <thead>
            <tr>
              <th>Aspect</th>
              <th>Yes</th>
              <th>No</th>
            </tr>
          </thead>
          <tbody>
            @php
              $governance_aspects = [
                "Readiness of privacy by design policy",
                "Readiness of Risk Identification and Mitigation strategies",
                "Readiness of awareness process for employees (Wrt. Compliance Requirement)",
                "Readiness of embedded Privacy in Data Life Cycle",
                "Readiness of Process to conduct Data Protection Impact Assessment",
                "Readiness of Reporting and Analysis of DPIA",
                "Readiness of Process of Risk Mitigation using Technology and Safeguards",
                "Readiness of Process to Review Security Safeguards",
                "Readiness of process of Audit by Data Auditors",
                "Readiness of Grievance Redressal Mechanism",
                "Readiness of Breach Response Procedure",
                "Readiness and review of Insurance coverage of Data Breach, if any",
                "Readiness to Update Board Members for Impact Analysis",
                "Appointment of Data Protection Officer (According the Legal Requirement)"
              ];
            @endphp

            @foreach($governance_aspects as $index => $aspect)
              <tr>
                <td data-label="Aspect">{{ $aspect }}</td>
                <td data-label="Yes"><input type="radio" name="g{{ $index+1 }}" value="Yes"></td>
                <td data-label="No"><input type="radio" name="g{{ $index+1 }}" value="No"></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <!-- Processing -->
      <div class="assessment-section">
        <h3 class="section-title">Processing</h3>
        <table class="assessment-table data-table">
          <thead>
            <tr>
              <th>Aspect</th>
              <th>Yes</th>
              <th>No</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-label="Aspect">Readiness of the Process to get Consent (According to the Act)</td>
              <td data-label="Yes"><input type="radio" name="p1" value="Yes"></td>
              <td data-label="No"><input type="radio" name="p1" value="No"></td>
            </tr>
            <tr>
              <td data-label="Aspect">Identification of Process Notices</td>
              <td data-label="Yes"><input type="radio" name="p2" value="Yes"></td>
              <td data-label="No"><input type="radio" name="p2" value="No"></td>
            </tr>
            <tr>
              <td data-label="Aspect">Readiness of the Notices according to the PDPA Compliance</td>
              <td data-label="Yes"><input type="radio" name="p3" value="Yes"></td>
              <td data-label="No"><input type="radio" name="p3" value="No"></td>
            </tr>
            <tr>
              <td data-label="Aspect">Readiness of the data collection processes</td>
              <td data-label="Yes"><input type="radio" name="p4" value="Yes"></td>
              <td data-label="No"><input type="radio" name="p4" value="No"></td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Data Location -->
      <div class="assessment-section">
        <h3 class="section-title">Data Location</h3>
        <table class="assessment-table data-table">
          <thead>
            <tr>
              <th>Aspect</th>
              <th>Yes</th>
              <th>No</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-label="Aspect">Identification of data Store locations</td>
              <td data-label="Yes"><input type="radio" name="d1" value="Yes"></td>
              <td data-label="No"><input type="radio" name="d1" value="No"></td>
            </tr>
            <tr>
              <td data-label="Aspect">Identification of local store location of sensitive personal data.</td>
              <td data-label="Yes"><input type="radio" name="d2" value="Yes"></td>
              <td data-label="No"><input type="radio" name="d2" value="No"></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="form-group full-width">
        <button type="submit" class="confirm-btn">Submit</button>
      </div>

    </form>
  </main>
</div>

@include('mcv_user.partials.footer')
<script src="{{ asset('js/mcv_user/script.js') }}"></script>
</body>
</html>
