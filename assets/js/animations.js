const animationSequence = anime.timeline({
    easing: 'easeOutExpo',
    duration: 800,
});

animationSequence
    .add({
        targets: '.animated-element',
        opacity: [0, 1],
        translateY: [20, 0],
    })
    .add({
        targets: '.animated-element',
        rotate: 360,
        scale: 2,
    });

document.addEventListener('DOMContentLoaded', () => {
    animationSequence.play();
});
