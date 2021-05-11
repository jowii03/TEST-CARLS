function formvalidation(){

	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	var pass2 = document.getElementById('pass2').value;
	var fname = document.getElementById('fname').value;
	var mname = document.getElementById('mname').value;
	var lname = document.getElementById('lname').value;
	var pnum = document.getElementById('pnum').value;
	var email = document.getElementById('email').value;
	var bdate = document.getElementById('bdate').value;
	
	if (username == "" || password == || pass2 == "" || fname == "" ||
	 mname == "" || lname == "" || pnum == "" || email == "" || bdate == "") {

	 	Swal.fire("DONT LEAVE BLANKS")
	}
	else if (password != pass2){
		  Swal.fire('Log in failed...', 'Password Does Not Match', 'error');
	}
}


function agechecker(){
	var bdate = New Date(document.getElementById("bdate").value);
	var bdate = New Date.now();
	


}