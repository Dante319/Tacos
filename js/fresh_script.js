
$(document).ready(function(){

  $('#briefcase').each(function() {
          animationHover(this, 'flipInX');
      });

      $('#comment').each(function() {
              animationHover(this, 'flipInX');
          });

          $('#cloud').each(function() {
                  animationHover(this, 'flipInX');
              });

              $('#desktop').each(function() {
                      animationHover(this, 'flipInX');
                  });

                  $('#calendar').each(function() {
                          animationHover(this, 'flipInX');
                      });

                      $('#creditCard').each(function() {
                              animationHover(this, 'flipInX');
                          });

    function animationHover(element, animation){
        element = $(element);
        element.hover(
            function() {
                element.addClass('animated ' + animation);
            },
            function(){
                //wait for animation to finish before removing classes
                window.setTimeout( function(){
                    element.removeClass('animated ' + animation);
                }, 2000);
            });
    }


    function animationClick(element, animation){
        element = $(element);
        element.click(
            function() {
                element.addClass('animated ' + animation);
                //wait for animation to finish before removing classes
                window.setTimeout( function(){
                    element.removeClass('animated ' + animation);
                }, 2000);

            });
    }


    var modal = document.getElementById("myModal1");

    // Get the image and insert it inside the modal - use its "alt" text as a caption

    var img = document.getElementById("myImg1");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption1");

    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    var modal = document.getElementById("myModal2");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg2");
    var modalImg = document.getElementById("img02");
    var captionText = document.getElementById("caption2");

    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }


    var modal = document.getElementById("myModal3");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg3");
    var modalImg = document.getElementById("img03");
    var captionText = document.getElementById("caption3");

    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }




    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal = document.getElementById('myModal2');

var modal = document.getElementById('myModal3');

var modal = document.getElementById("myModal4");

// Get the image and insert it inside the modal - use its "alt" text as a caption

var img = document.getElementById("myImg4");
var modalImg = document.getElementById("img04");
var captionText = document.getElementById("caption4");

img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

var modal = document.getElementById("myModal5");

// Get the image and insert it inside the modal - use its "alt" text as a caption

var img = document.getElementById("myImg5");
var modalImg = document.getElementById("img05");
var captionText = document.getElementById("caption5");

img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

var modal = document.getElementById("myModal6");

// Get the image and insert it inside the modal - use its "alt" text as a caption

var img = document.getElementById("myImg6");
var modalImg = document.getElementById("img06");
var captionText = document.getElementById("caption6");

img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

var modal = document.getElementById("myModal7");

// Get the image and insert it inside the modal - use its "alt" text as a caption

var img = document.getElementById("myImg7");
var modalImg = document.getElementById("img07");
var captionText = document.getElementById("caption7");

img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

var modal = document.getElementById("myModal8");

// Get the image and insert it inside the modal - use its "alt" text as a caption

var img = document.getElementById("myImg8");
var modalImg = document.getElementById("img08");
var captionText = document.getElementById("caption8");

img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
var modal = document.getElementById("myModal9");

// Get the image and insert it inside the modal - use its "alt" text as a caption

var img = document.getElementById("myImg9");
var modalImg = document.getElementById("img09");
var captionText = document.getElementById("caption9");

img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}



});
