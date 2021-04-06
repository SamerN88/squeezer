var hotboxBorderWrapper = document.getElementById("hotbox-border-wrapper")

var deg = 0
function rotate_hotboxBorderWrapper_gradient() {
    deg = (deg + 1) % 360
    hotboxBorderWrapper.style.backgroundImage = `linear-gradient(${deg}deg, #ffd000, orange 41.07%, red 76.05%)`
}

// function getAngleFromGradient(gradientString, mode='deg') {
//     return Number(gradientString.slice(gradientString.indexOf('(') + 1, gradientString.indexOf(mode + ',')))
// }

// function changeGradientAngle(gradientString, newAngle) {
//     var startSegment = gradientString.slice(0, gradientString.indexOf('(') + 1)
//     var endSegment = gradientString.slice(gradientString.indexOf(','))
//     return startSegment + newAngle + endSegment
// }

setInterval(rotate_hotboxBorderWrapper_gradient, 8)