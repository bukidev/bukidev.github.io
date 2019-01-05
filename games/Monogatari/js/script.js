"use strict";

/* exported messages */
/* exported notifications */
/* exported particles */
/* exported music */
/* exported voice */
/* exported sound */
/* exported videos */
/* exported images */
/* exported scenes */
/* exported characters */
/* exported script */

/* global storage */

// Define the messages used in the game.
let messages = {
	"Help": {
		"Title": "Help",
		"Subtitle": "Some useful Links",
		"Message": "<p><a href='https://monogatari.io/documentation/'>Documentation</a> - Everything you need to know.</p><p><a href='https://monogatari.io/demo/'>Demo</a> - A simple Demo.</p>"
	}
};

// Define the notifications used in the game
let notifications = {
	"Welcome": {
		title: "Welcome",
		body: "This is the Monogatari VN Engine",
		icon: ""
	}
};

// Define the Particles JS Configurations used in the game
let particles = {

};

// Define the music used in the game.
const music = {

};

// Define the voice files used in the game.
const voice = {

};

// Define the sounds used in the game.
const sound = {

};

// Define the videos used in the game.
const videos = {

};

// Define the images used in the game.
const images = {

};

// Define the backgrounds for each scene.
const scenes = {
    "school_front" : "school_front.png"
};

// Define the Characters
const characters = {
	"h": {
		"Name": "ไอรีน",
		"Color": "#5bcaff",
        "Directory": "ireen", // Optional*
        "Images":{ // Images Identifier for the "Show" statement.
            "Normal": "normal.png"//,
            //"Mad": "hmph!.png",
            //"Doubt": "uhh.png",
            //"Disappointed":"ngggg....png",
            //"Happy": "hehehehe.png"
        }//,
        //"Face": "face.png", // Optional, side image to show every time the character speaks.
        //"Side": { // Side images identifiers to show on dialogs
             //"Smiling": "smiling.png"
        //}
	}
};


let script = {
	// The game starts here.
	"Start": [
		"notify Welcome",
		{
			"Input": {
				"Text": "คุณชื่ออะไร",
				"Validation": function (input) {
					return input.trim().length > 0;
				},
				"Save": function (input) {
					storage.player.Name = input;
					return true;
				},
				"Warning": "You must enter a name!"
			}
		},
        
        "scene school_front",
        "show h Normal center with fadeIn",
		"h สวัสดี {{player.Name}} ยินดีต้อนรับสู่โรงเรียนจอมเวท!",

		{
			"Choice": {
				"Dialog": "h Have you already read some documentation?",
				"Yes": {
					"Text": "Yes",
					"Do": "jump Yes"
				},
				"No": {
					"Text": "No",
					"Do": "jump No"
				}
			}
		}
	],

	"Yes": [

		"h That's awesome!",
		"h Then you are ready to go ahead and create an amazing Game!",
		"h I can't wait to see what story you'll tell!",
		"end"
	],

	"No": [

		"h You can do it now.",

		"display message Help",

		"h Go ahead and create an amazing Game!",
		"h I can't wait to see what story you'll tell!",
		"end"
	]
};