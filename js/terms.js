<script>

  window.addEventListener("DOMContentLoaded", function(e) {

    var myForm = document.getElementById("contact_form");
    var checkForm = function(e) {
      if(!this.terms.checked) {
        alert("Please indicate that you accept the Terms and Conditions");
        this.terms.focus();
        e.preventDefault(); // equivalent to return false
        return;
      }
    };

    // attach the form submit handler
    myForm.addEventListener("submit", checkForm, false);

    var myCheckbox = document.getElementById("field_terms");
    var myCheckboxMsg = "Please indicate that you accept the Terms and Conditions";

    // set the starting error message
    myCheckbox.setCustomValidity(myCheckboxMsg);

    // attach checkbox handler to toggle error message
    myCheckbox.addEventListener("change", function(e) {
      this.setCustomValidity(this.validity.valueMissing ? myCheckboxMsg : "");
    }, false);

  }, false);

</script>