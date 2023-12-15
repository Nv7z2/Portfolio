const homePageTimeline = anime.timeline({
    easing: 'easeOutQuart',
    duration: 650,
});

homePageTimeline
.add({
    targets: '.main-heading',
    opacity: [0, 1],
    translateX: [-100, 0],
}).add({
    targets: '.hero-description',
    opacity: [0, 1],
    translateX: [-100, 0],
});

const homeAnimationText = anime({
    targets: '.hero-animated-text path',
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: 'easeInOutSine',
    duration: 2000,
    delay: function(el, i) { return i * 550 },
    direction: 'alternate',
    loop: true,
  });

document.addEventListener('DOMContentLoaded', () => {
    homePageTimeline.play();
    homeAnimationText.play();
});
