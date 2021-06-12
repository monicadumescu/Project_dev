var a = 1;
var a = 2;

var nume = 'andrei'

switch (nume) {
    case 'adi':
        console.log('preinta cursul')
        break
    case 'andrei':
        console.log('Organizer')
        break
    default:
        console.log('Other')
}

let colors = ['green', 'red', 'blue']
var i
for (i in colors) {
    console.log(colors[i])
}


var sumNumbers = function(a, b) {
    return a+b
}

let sumNumbersArrow = (a, b) => {
    return a+b
}
