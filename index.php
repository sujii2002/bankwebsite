<!DOCTYPE html>
<html>
<head>
<title>How to Implement OTP SMS Mobile Verification in PHP with TextLocal</title>
<link href="style.css" type="text/css" rel="stylesheet" />

<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyA6ytWG9zYMnyBwyT8BfYJ-1osBo8fWQGY",
    authDomain: "bank-bbe1e.firebaseapp.com",
    projectId: "bank-bbe1e",
    storageBucket: "bank-bbe1e.appspot.com",
    messagingSenderId: "573436030424",
    appId: "1:573436030424:web:a6e3a161acb6abba17d6ad",
    measurementId: "G-W5ZSEDY3NF"
  };

  // Initialize Firebase
 

</script><script>
 
function sendOTP(){
	const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
	var number = "+919360486602"
    console.log("entering...")
	var recaptcha = new app.auth.RecaptchaVerifier('recaptcha')
	
	
	
	app.auth().signInWithPhoneNumber(number,recaptcha).then(function (e){
     var code =  window.prompt("Enter a number")

	 if(code ==null) return;

	 e.confrim(code).then(function(result){
		 console.log(result)
	 })

	})













}

</script></head>
<body>

	<div class="container">
		<div class="error"></div>
		<form id="frm-mobile-verification">
			<div class="form-heading">Mobile Number Verification</div>

			<div class="form-row">
				<input type="number" id="mobile" class="form-input"
					placeholder="Enter the 10 digit mobile">
			</div>

			<input type="button" class="btnSubmit" value="Send OTP"
				onclick="sendOTP()">
		</form>
	</div>

	<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
	
</body>
</html>