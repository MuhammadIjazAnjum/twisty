
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {twistyscroll()};

function twistyscroll() {
  // var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
  // if (width >900){
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
      document.getElementById("nav").style.padding = "30px 10px";
      // document.getElementById("logo").style.fontSize = "15px";
      document.getElementById("twisty-title").style.fontSize = "35px";
      document.getElementById("twisty-description").style.fontSize = "15px";
    } else {
      document.getElementById("nav").style.padding = "100px 20px";
      // document.getElementById("logo").style.fontSize = "55px";
      document.getElementById("twisty-title").style.fontSize = "55px";
      document.getElementById("twisty-description").style.fontSize = "30px";
    }
  // }
}
