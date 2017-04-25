var state = 1;

function setup() {
	if (state == 1) {
		createCanvas(640, 480);
		rect(200, 10, 90, 30);
		text('switch to back', 208, 30);
		if (mouseIsPressed && mouseX > 200 && mouseX < 290 && mouseY > 10 && mouseY < 40) {
			state = 2;
		}
		image(head, 90, 0, 400, 400);
		image(shoulders, 42, 59, 380, 430);
		image(abdomines, 63, 107, 400, 400);
		image(biceps, 40, 82, 370, 400);
		image(calves, 76, 276, 380, 400);
		image(chests, 63, 66, 400, 400);
		image(forearms, 8, 117, 375	, 400);
		image(neck, 65, 47, 400, 400);
		image(quads, 59, 162, 400, 400);
	}
	if (state == 2) {
		createCanvas(640, 480);
		image(backhead, 90, 0, 400, 400);
		image(traps, 72, 33, 400, 400);
		image(lats, 70, 100, 400, 400);
		image(backShoulders, 44, 60, 400, 400);
		image(triceps, 43, 78, 400, 400);
		image(lowerback, 96, 133, 400, 400);
		image(glutes, 72, 160, 400, 400);
		image(hamstrings, 68, 194, 400, 400);
		image(backlegs, 68, 274, 400, 400);
	}
}

function mousePressed() {
	if (mouseX >= 200 && mouseX <= 290 && mouseY <= 10 && mouseY >= 40) {
		if (state == 1) {
			state = 2;
		}
		else state = 1;
	}
}

function preload() {
	head = loadImage("HEAD.png");
	shoulders = loadImage("SHOULDERS.png");
	abdomines = loadImage("ABS.png");
	biceps = loadImage("Biceps.png");
	calves = loadImage("Calves.png");
	chests = loadImage("CHEST.png");
	forearms = loadImage("Forearms.png");
	neck = loadImage("NECK.png");
	quads = loadImage("QUADS.png")
	backhead = loadImage("head2.png");
	traps = loadImage("trap.png");
	hamstrings = loadImage("hamstrings.png");
	glutes = loadImage("glutes.png");
	lowerback = loadImage("lowerback.png");
	lats = loadImage("lats.png");
	triceps = loadImage("triceps.png");
	backShoulders = loadImage("backshoulders.png");
	backlegs = loadImage("backlegs.png");
}

function draw() {
	textSize(18);
	if (state == 1) {
		if (mouseX >= 90 && mouseX <= 130 && mouseY >= 0 && mouseY < 56) {
			setup();
			image(head, 90, 0, 400, 400); 
			image(head, 90, 0, 400, 400); 
			tint(255, 150);
			text("head", 0, 15);
		}
		else if (mouseX >= 80 && mouseX <= 160 && mouseY >= 56 && mouseY < 75) {
			setup();
			image(neck, 65, 47, 400, 400);
			image(neck, 65, 47, 400, 400);
			tint(255, 150);
			text("neck", 0, 15);
		}
		else if (mouseX >= 70 && mouseX <= 150 && mouseY >= 75 && mouseY < 110) {
			setup();
			image(chests, 63, 66, 400, 400);
			image(chests, 63, 66, 400, 400);
			tint(255, 150);
			text("pectorials", 0, 15);
		}
		else if (mouseX >= 70 && mouseX <= 150 && mouseY >= 110 && mouseY < 180) {
			setup();
			image(abdomines, 63, 107, 400, 400);
			image(abdomines, 63, 107, 400, 400);
			tint(255, 150);
			text("abs", 0, 15);
		}
		else if (mouseX >= 60 && mouseX <= 170 && mouseY >= 180 && mouseY < 280) {
			setup();
			image(quads, 59, 162, 400, 400);
			image(quads, 59, 162, 400, 400);
			tint(255, 150);
			text("quads", 0, 15);
		}
		else if (mouseX >= 45 && mouseX <= 170 && mouseY >= 280 && mouseY < 360) {
			setup();
			image(calves, 76, 276, 380, 400);
			image(calves, 76, 276, 380, 400);
			tint(255, 150);
			text("calves", 0, 15);
		}
		else if (mouseX >= 40 && mouseX <= 80 && mouseY >= 56 && mouseY < 90) {
			setup();
			image(shoulders, 42, 59, 380, 430);
			image(shoulders, 42, 59, 380, 430);
			tint(255, 150);
			text("shoulders", 0, 15);
		}
		else if (mouseX >= 160 && mouseX <= 190 && mouseY >= 56 && mouseY < 90) {
			setup();
			image(shoulders, 42, 59, 380, 430);
			image(shoulders, 42, 59, 380, 430);
			tint(255, 150);
			text("shoulders", 0, 15);
		}
		else if (mouseX >= 40 && mouseX <= 80 && mouseY >= 90 && mouseY < 130) {
			setup();
			image(biceps, 40, 82, 370, 400);
			image(biceps, 40, 82, 370, 400);
			tint(255, 150);
			text("biceps", 0, 15);
		}
		else if (mouseX >= 160 && mouseX <= 190 && mouseY >= 90 && mouseY < 130) {
			setup();
			image(biceps, 40, 82, 370, 400);
			image(biceps, 40, 82, 370, 400);
			tint(255, 150);
			text("biceps", 0, 15);
		}
		else if (mouseX >= 0 && mouseX <= 80 && mouseY >= 130 && mouseY < 220) {
			setup();
			image(forearms, 8, 117, 375	, 400);
			image(forearms, 8, 117, 375	, 400);
			tint(255, 150);
			text("forearms", 0, 15);
		}
		else if (mouseX >= 180 && mouseX <= 210 && mouseY >= 130 && mouseY < 220) {
			setup();
			image(forearms, 8, 117, 375	, 400);
			image(forearms, 8, 117, 375	, 400);
			tint(255, 150);
			text("forearms", 0, 15);
		}
		else {
			setup();
			noTint();
		}
	}
	if (state == 2) {
		if (mouseX >= 90 && mouseX <= 130 && mouseY >= 0 && mouseY < 46) {
			setup();
			image(backhead, 90, 0, 400, 400);
			image(backhead, 90, 0, 400, 400);
			tint(255, 150);
			text("head", 0, 15);
		}
		else if (mouseX >= 84 && mouseX <= 150 && mouseY >= 46 && mouseY < 90) {
			setup();
			image(traps, 72, 33, 400, 400);
			image(traps, 72, 33, 400, 400);
			tint(255, 150);
			text("traps", 0, 15);
		}
		else if (mouseX >= 70 && mouseX <= 100 && mouseY >= 100 && mouseY < 170) {
			setup();
			image(lats, 70, 100, 400, 400);
			image(lats, 70, 100, 400, 400);
			tint(255, 150);
			text("lats", 0, 15);
		}
		else if (mouseX >= 140 && mouseX <= 170 && mouseY >= 100 && mouseY < 170) {
			setup();
			image(lats, 70, 100, 400, 400);
			image(lats, 70, 100, 400, 400);
			tint(255, 150);
			text("lats", 0, 15);
		}
		else if (mouseX >= 100 && mouseX <= 140 && mouseY >= 140 && mouseY < 170) {
			setup();
			image(lowerback, 96, 133, 400, 400);
			image(lowerback, 96, 133, 400, 400);
			tint(255, 150);
			text("lowerback", 0, 15);
		}
		else if (mouseX >= 72 && mouseX <= 160 && mouseY >= 170 && mouseY < 200) {
			setup();
			image(glutes, 72, 160, 400, 400);
			image(glutes, 72, 160, 400, 400);
			tint(255, 150);
			text("glutes", 0, 15);
		}
		else if (mouseX >= 68 && mouseX <= 164 && mouseY >= 200 && mouseY < 280) {
			setup();
			image(hamstrings, 68, 194, 400, 400);
			image(hamstrings, 68, 194, 400, 400);
			tint(255, 150);
			text("hamstrings", 0, 15);
		}

		else {
			setup();
			noTint();
		}
	}
}