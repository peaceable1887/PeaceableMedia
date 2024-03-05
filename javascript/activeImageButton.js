// Get the container element
let btnContainer = document.getElementById("clickable-slider-images");

// Get all buttons with class="btn" inside the container
let btns = btnContainer.getElementsByClassName("clickable-image");

// Loop through the buttons and add the active class to the current/clicked button
for (var x = 0; x < btns.length; x++) 
{
    btns[x].addEventListener("click", function() 
    {
      let current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }