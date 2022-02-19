var scrollSpy = new bootstrap.ScrollSpy(document.body, {
  target: '#pagescroll'
})


var prevScrollpos = window.pageYOffset;
var myDiv = document.querySelector('body')
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  if (currentScrollPos > 80) {
    myDiv.classList.add("scrollDown");
  } else {
    myDiv.classList.remove("scrollDown");
  }

  if (prevScrollpos > currentScrollPos) {
    myDiv.classList.remove("scrollUp");
  } else {
    myDiv.classList.add("scrollUp");
  }

  if (currentScrollPos + window.innerHeight >= myDiv.scrollHeight) {
    myDiv.classList.remove("scrollUp");

  }

  prevScrollpos = currentScrollPos;
}