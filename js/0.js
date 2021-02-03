function drawing() {
  createCanvas(windowWidth, windowHeight);
  console.log("Trykk på skjermen for å tegne!")
}

function draw() {
  if (mouseIsPressed) {
    fill(161, 11, 4);
    rect(mouseX, mouseY, 50, 50);
  }
}
