var bugs = []; // array of Jitter objects

function setup() {
  createCanvas(windowWidth, windowHeight);
  // Create objects
  for (var i=0; i<50; i++) {
    bugs.push(new Jitter());
  }
}

function draw() {
  
  offset=map(mouseX,0,windowWidth,-1 ,1);
  background(255, 255, 255);
  for (var i=0; i<bugs.length; i++) {
    fill(0,128,0);

    bugs[i].move();
    bugs[i].display();
    if(bugs[i].x>20 && bugs[i].x<windowWidth-20 )
    bugs[i].x+=offset;

  }
  fill(0,230,0);
  rect(windowWidth/2-400, windowHeight/3.5, 800, 300);
  fill(0,0,0);

  textSize(32);
  text('Insert sensor values:', windowWidth/2-380, windowHeight/3.5+32);

}

// Jitter class
function Jitter() {
  this.x = random(width);
  this.y = random(height);
  this.diameter = random(10, 30);
  this.speed = 1;

  this.move = function() {
    this.x += random(-this.speed, this.speed);
    this.y += random(-this.speed, this.speed);
  };

  this.display = function() {
    ellipse(this.x, this.y, this.diameter, this.diameter);
  };
}