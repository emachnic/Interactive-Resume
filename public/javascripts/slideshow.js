$document.ready(function(){
  var currentPosition = 0;
  var slideWidth = 560;
  var slides = $('.slide');
  var numberOfSlides = slides.length;

  //Remove scrollbar in JS
  $('#slidesContainer').css('overflow', 'hidden');

  //Wrap all .slides with #slideInner div
  slides
    .wrapAll('<div id="slideInner"></div>')
    .css({
      'float': 'left',
      'width': slideWidth
    });

  //Set #slideInner width equal to total width of all slides
  $('#slideInner').css('width', slideWidth * numberOfSlides);

  //Insert left and right arrow controls in the DOM
  $('#slideshow')
    .prepend('<span class="control" id="leftControl">Move Left</span>')
    .append('<span class="control" id="rightControl">Move Right</span>');

  //Hide left arrow control on first load
  manageControls(currentPosition);

  //Creat event listener for .controls clicks
  $('.control')
    .bind('click', function(){
      //Determine new position
      currentPosition = ($(this).attr('id')=='rightControl')
      ? currentPosition+1 : currentPosition-1;
      //Hide / show controls
      manageControls(currentPosition);
      //Move slideInner using margin-left
      $('#slideInner').animate({
        'margin-left': slideWidth*(-currentPosition)
      });
    });

  //manageControls: Hides and shows controls depending on current position
  function manageControls(position){
    //Hide left arrow if position is first slide
    if(position==0){$('#leftControl').hide()}
    else{$('#leftControl').show()}
    //Hide right arrow if position is last slide
    if(position==numberOfSlides-1){$('#rightControl').hide()}
    else{$('#rightControl').show()}
  }
});