function checkFormSign() {
  var name = document.getElementById('name').value;
  var mail = document.getElementById('floatingInput').value;
  var pass = document.getElementById('floatingPassword').value;
  var repass = document.getElementById('repeatThePass').value;

  if (name =="" || mail == "" || pass =="")
    alert('Complete all fields');
  else if(name.length <= 10 || name.length > 25)
    alert('Enter a correct name');
  else if(pass != repass)
    alert('Passwords must be the same!');
  else if(pass != "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}")
    alert('Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters!');
  else
      // value2 = "" + document.form1.fullname.value;
      // self.location = "anotherPage.html?=" + value2;
      window.location = "index";
  return false;
}

function onlyEng(obj) {
   obj.value = obj.value.replace(/[^a-zA-Z0-9 -]/ig,'');
}

function checkFormLog() {
  var myMail = 'e99xxx@gmail.com';
  var name = document.getElementById('name').value;
  var mail = document.getElementById('floatingInput').value;
  var pass = document.getElementById('floatingPassword').value;

  if (name =="" || mail == "" || pass =="")
    alert('Complete all fields');
  else if(name.length <= 10 || name.length > 25)
    alert('Enter a correct name');
  else if (mail == myMail)
    window.location = "index";
  else
      value2 = "" + document.form1.fullname.value;
      self.location = "anotherPage.html?=" + value2;
  return false;
}

function pushUpMessage() {
    document.getElementById('sound').play();
}
