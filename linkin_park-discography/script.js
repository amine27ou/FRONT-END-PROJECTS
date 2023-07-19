document.querySelector("form").addEventListener("submit", function (event) {
  if (
    document.querySelector("#fname").value === "" ||
    document.querySelector("#lname").value === "" ||
    document.querySelector("#email").value === "" ||
    document.querySelector("#password").value === ""
  ) {
    document.getElementById("status").textContent =
      "Please fill in all fields.";
    event.preventDefault(); 
  }
});
document.querySelector("#login").addEventListener("submit", function (event) {
  if (
    
    document.querySelector("#email").value === "" ||
    document.querySelector("#password").value === ""
  ) {
    document.getElementById("status").textContent =
      "Please fill in all fields.";
    event.preventDefault(); 
  }
});
