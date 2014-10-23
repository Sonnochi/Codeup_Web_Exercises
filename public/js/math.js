// create a circle object
var circle = {
    radius: 3,
    getArea: function () {
        // todo: finish this method
        var area = Math.PI * Math.pow(this.radius, 2);
        return area;
    },
    logInfo: function (round) {
        // todo: complete this method. if round is true, round the result to the nearest integer.
        var area = this.getArea();
        if (round) {
            area = Math.round(area);
        }
        console.log('Area of a circle with radius: ' + this.radius + ', is: ' + area);
    }
};

// log info about the circle
circle.logInfo(false);
circle.logInfo(true);


// todo:
// Change the radius of the circle to 5.
// create a circle object
var circle = {
    radius: 5,
    getArea: function () {
        // todo: finish this method
        var area = Math.PI * Math.pow(this.radius, 2);
        return area;
    },
    logInfo: function (round) {
        // todo: complete this method. if round is true, round the result to the nearest integer.
        var area = this.getArea();
        if (round) {
            area = Math.round(area);
        }
        console.log('Area of a circle with radius: ' + this.radius + ', is: ' + area);
    }
};

// log info about the circle
circle.logInfo(false);
circle.logInfo(true);