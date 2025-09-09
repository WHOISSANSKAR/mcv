{{-- resources/views/mcv_admin/purchase.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>My ComplianceView Dashboard</title>

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/mcv_user/style.css') }}">
  <style>
  .tos {
    width: 80%;
    margin: 10px 0 10px 20px;
    font-family: 'Inter', sans-serif;
    font-size: 12px;      /* reduced font */
    line-height: 1.4;
    color: #111;
    text-align: left;
  }

  .tos h1 {
    font-size: 16px;      /* smaller main heading */
    margin-bottom: 6px;
    font-weight: 700;
  }

  .tos h2 {
    font-size: 13px;      /* smaller section heading */
    margin-top: 10px;
    margin-bottom: 4px;
    font-weight: 600;
  }

  .tos ul {
    padding-left: 16px;
    margin-bottom: 6px;
  }

  .tos p {
    margin-bottom: 4px;
  }
</style>


</head>
<body>
  <div class="content-wrapper">
    
    {{-- Navbar --}}
    @include('mcv_user.partials.navbar')

    <div class="tos">
  <h1>Terms of Service</h1>
  <p><strong>IMPORTANT:</strong> You may not use this service prior to reading and agreeing to these terms of service.</p>

  <h2>Definitions and Interpretations</h2>
  <ul>
    <li><strong>Confidential Information</strong> – Includes, but not limited to, login credentials, passwords, files, databases, configuration, or financial information of the Customer.</li>
    <li><strong>Content</strong> – Includes copyright-able material, confidential ideas, creatives, information, data, media or any other such content.</li>
    <li><strong>Customer</strong> – Any individual person, company, or organization that has subscribed and is using the Service.</li>
    <li><strong>Service</strong> – A cloud-based software solution named MyComplianceView, pursuant to these Terms of Service.</li>
    <li><strong>Site</strong> – MyComplianceView website, application, and any subdomains made available to User.</li>
    <li><strong>Terms of Service</strong> – All the terms and conditions contained or referenced in this document.</li>
    <li><strong>User</strong> – Any person that accesses or uses this Service.</li>
  </ul>

  <h2>Eligibility</h2>
  <ul>
    <li>By using or accessing the Site or the Service, Customer acknowledges and agrees to these terms of service. Any such usage will be treated as acceptance of these terms by the User on behalf of Customer, and warrants that the User is authorized to accept these terms on behalf of Customer.</li>
    <li>F1 InfoTech Private Limited reserves the right to modify these Terms of Service at any time without prior notice or intimation.</li>
    <li>If any provision of these Terms of Service is held invalid or unenforceable, the remaining provisions shall continue to be valid and enforceable.</li>
  </ul>

  <h2>Title and Proprietary Rights</h2>
  <ul>
    <li>The title “MyComplianceView”, software, and Service are trade-related content of F1 InfoTech Pvt. Ltd.</li>
    <li>Customer is entitled to use the Service. Application, source code, system design, concepts, and documents are proprietary content of F1 InfoTech Pvt. Ltd. Customer shall not attempt any activity involving<br/> hacking of source code, reverse engineering, or reproduction/distribution of documents related to the Service.</li>
  </ul>

  <h2>Technical Support and Services Availability</h2>
  <ul>
    <li>Service availability depends on factors beyond the control of F1 InfoTech Pvt. Ltd. and the Service. These include backend cloud provider failures, DNS issues, or bugs.</li>
    <li>Availability and recovery may be affected by Acts of God, wars, or other force majeure events beyond the control of F1 InfoTech Pvt. Ltd. or the Service.</li>
    <li>Service will be available, except as mentioned above, subject to advance payment by the Customer. F1 InfoTech may discontinue or terminate (temporarily or permanently) the Service in case of irregularities in payment. If a Customer discontinues a subscribed Service, a written communication must be sent to F1 InfoTech Pvt. Ltd. No refunds will be provided.</li>
  </ul>

  <h2>Data, Data Privacy and Protection</h2>
  <ul>
    <li>Data administration responsibility lies with the Customer. F1 InfoTech Pvt. Ltd. shall not be responsible for damage occurring due to unforeseen events at any level.</li>
    <li>Customer is responsible for timely backup of data provided to and stored on the Service. In case of data loss, corruption, or incidents, F1 InfoTech Pvt. Ltd. shall not be responsible.</li>
    <li>Confidential Information provided to the Service will be kept confidential and not disclosed to any third party. However, it may be used by the Service or F1 InfoTech Pvt. Ltd. for development and enhancement of the Service.</li>
    <li>Neither the Service nor F1 InfoTech Pvt. Ltd. is liable for direct, indirect, incidental, or consequential damages caused by the usage of this Service.</li>
  </ul>

  <h2>Unauthorized Activities and Liabilities</h2>
  <ul>
    <li>Service prohibits Customers or any third party from infringing its security or network. Violations may result in civil or criminal liability and prosecution under applicable laws.</li>
    <li>Service grants legitimate usage rights to Customers. If the Service is used for illicit or illegal purposes, it will be reported to authorities. F1 InfoTech Pvt. Ltd. shall not be liable for any repercussions.</li>
    <li>By accepting these Terms of Service, Customers indemnify F1 InfoTech Pvt. Ltd. from all liabilities, damages, claims, costs, and expenses arising from any reason.</li>
    <li>Governing laws of India apply. Any disputes shall be subject to the jurisdiction of Delhi courts only.</li>
  </ul>
</div>


  </div>

  {{-- Footer --}}
  @include('mcv_user.partials.footer')
</body>
</html>
