/* validation personnalisée de formulaire */ 
var email = document.getElementById("mail");

(function() {
    
    'use strict';
    window.addEventListener('load', function() {
        
        
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
          
        form.addEventListener('submit', function(event) {
            
          if (form.checkValidity() === false) {
              
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);

    $('.btn.btn-primary').on('click', function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 750; // Durée de l'animation (en ms)
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
			return false;
		});

  });

 


/* fin de validation personnalisée de formulaire*/ 