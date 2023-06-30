
  jQuery(document).ready(function(){
    
  // Preloader ne fillim te faqes
  var preloaderLetters = document.querySelector(".preloader__letters");
  var preloaderEl = document.getElementById("preloader");
  var Preloader = /** @class */ (function () {
    function Preloader(words, preloaderDuration, letterAnimationDelay) {
      this.words = words;
      this.preloaderDuration = preloaderDuration;
      this.letterAnimationDelay = letterAnimationDelay;
      this.letters = this.words.join("").split("");
      this.startAnimation();
    }
    Preloader.prototype.startAnimation = function () {
      var _this = this;
      preloaderLetters.innerHTML = this.words
        .map(function (word) {
          return '<div class="preloader__word">'.concat(
            word
              .split("")
              .map(function (letter, index) {
                return '<div class="preloader__letter" style="animation-delay:'
                  .concat(_this.letterAnimationDelay, ".")
                  .concat(index, 's;">')
                  .concat(letter, "</div>");
              })
              .join(""),
            "</div>"
          );
        })
        .join("");
    };
    Preloader.prototype.destroyPreloader = function () {
      $("#preloader").remove();
    };
    return Preloader;
  })();
  var preloader = new Preloader(["think", "big for", "business"], 11, 5);
  setTimeout(function () {
    preloader.destroyPreloader();
  }, 8500);


})