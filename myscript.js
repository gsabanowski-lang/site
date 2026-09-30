  (function() {
    var o = document.getElementById('protect-overlay');
    o.getElementsByTagName('form')[0].onsubmit = function() {
      
 
      if (this.answer.value === atob('aWdueQ==')) {
        o.style.display = "none";
		window.open('personal.html')
      } else {
        alert('Wrong password!');
      }
      return false;
    };
  })();