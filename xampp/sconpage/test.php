<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<body>
<input value="+1" id="country_code" />
<input placeholder="phone number" id="phone_number"/>
<button onclick="smsLogin();">Login via SMS</button>
<div>OR</div>
<input placeholder="email" id="email"/>
<button onclick="emailLogin();">Login via Email</button>
</body>

<script>
  // initialize Account Kit with CSRF protection
  AccountKit_OnInteractive = function(){
    AccountKit.init(
      {
        appId:"{{FACEBOOK_APP_ID}}",
        state:"{{csrf}}",
        version:"{{ACCOUNT_KIT_API_VERSION}}",
        fbAppEventsEnabled:true,
        redirect:"{{REDIRECT_URL}}"
      }
    );
  };

  // login callback
  function loginCallback(response) {
    if (response.status === "PARTIALLY_AUTHENTICATED") {
      var code = response.code;
      var csrf = response.state;
      // Send code to server to exchange for access token
    }
    else if (response.status === "NOT_AUTHENTICATED") {
      // handle authentication failure
    }
    else if (response.status === "BAD_PARAMS") {
      // handle bad parameters
    }
  }

  // phone form submission handler
  function smsLogin() {
    var countryCode = document.getElementById("country_code").value;
    var phoneNumber = document.getElementById("phone_number").value;
    AccountKit.login(
      'PHONE',
      {countryCode: countryCode, phoneNumber: phoneNumber}, // will use default values if not specified
      loginCallback
    );
  }


  // email form submission handler
  function emailLogin() {
    var emailAddress = document.getElementById("email").value;
    AccountKit.login(
      'EMAIL',
      {emailAddress: emailAddress},
      loginCallback
    );
  }
</script>
