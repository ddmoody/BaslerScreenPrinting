// Boostrap Scrollspy
$('body').scrollspy({
  target: '#navbarNav'
});

// Animations
var $cardDeck = $('.card-deck');
var $mailingList = $('.mailing-list');
var $socialLinks = $('.social-icons');

$cardDeck.waypoint(function(direction) {
  if (direction == 'down') {
    $cardDeck.addClass('animated fadeInUp');
  }
}, {
  offset: '50%'
});

$socialLinks.mouseover(function(){
  $(this).addClass('animated pulse');
});

$socialLinks.mouseleave(function(){
  $(this).removeClass('animated pulse');
});

// File Select
// $(".custom-file-input").on("change", function() {
//   var fileName = $(this).val().split("\\").pop();
//   $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
// });

// Google Map

function initMap() {
  var baslerScreenPrinting = {lat: 38.586810, lng: -90.227110};
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: baslerScreenPrinting});
  var marker = new google.maps.Marker({position: baslerScreenPrinting, map: map});
}
