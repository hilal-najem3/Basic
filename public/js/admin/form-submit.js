var formSubmit = {

  // Global variables
  btnSubmit: document.getElementById('btnSubmit'),
  formToSubmit: document.getElementById('form-submit'),
  inputs: document.querySelectorAll('input[type=text]'),
  btnCancel: document.getElementById('btnCancel'),

  init: function () {
    document.addEventListener('keypress', formSubmit.keyPressed);
    btnSubmit.addEventListener('click', formSubmit.btnSubmitFunction);
    btnCancel.addEventListener('click', formSubmit.btnCancelFunction);
  },

  btnSubmitFunction: function() {
    for(i = 0; i < formSubmit.inputs.length; i++) {
      if (formSubmit.inputs[i].disabled) {
        formSubmit.inputs[i].disabled = false;
      }
    }

    if (btnSubmit.innerHTML == "Enable Form") {
      btnSubmit.innerHTML = "Update";
    } else {
      formSubmit.formToSubmit.submit();
    }
  },

  btnCancelFunction: function() {
    location.reload();
  },

  keyPressed: function(e) {
    if(e.key == "Enter") {
      //
    }
  },

}

formSubmit.init();
