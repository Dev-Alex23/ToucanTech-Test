let email = document.getElementById("email");
let named = document.getElementById("name");
let form = document.getElementById("form");
let error = document.getElementById("message");
let school = document.getElementById("mySchool");

let regex = new RegExp(
  "([!#-'*+/-9=?A-Z^-~-]+(.[!#-'*+/-9=?A-Z^-~-]+)*|\"([]!#-[^-~ \t]|(\\[\t -~]))+\")@([!#-'*+/-9=?A-Z^-~-]+(.[!#-'*+/-9=?A-Z^-~-]+)*|[[\t -Z^-~]*])"
);

let testEmails = ["a@a", "workingexample@stackabuse.com", "example@yale.edu.com"];

testEmails.forEach((address) => {
  console.log(regex.test(address));
});

form.addEventListener("submit", (e) => {
  let message = [];

  let emailFormat =
    "([!#-'*+/-9=?A-Z^-~-]+(.[!#-'*+/-9=?A-Z^-~-]+)*|\"([]!#-[^-~ \t]|(\\[\t -~]))+\")@([!#-'*+/-9=?A-Z^-~-]+(.[!#-'*+/-9=?A-Z^-~-]+)*|[[\t -Z^-~]*])";

  if (named.value === "" || named.value === null) {
    message.push("a name is required");
  }
  // if (email.value === "" || email.value === null || email.value.match(emailFormat)) {
  //   message.push("Please Enter a valid email");
  // }
  if (school.value === "" || school.value === null) {
    message.push("select a school");
  }
  if (message.length > 0) {
    e.preventDefault();
    error.innerText = message.join(", ");
    error.style.color = "red";
    error.style.textTransform = "uppercase";
  }
});
