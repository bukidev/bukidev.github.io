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
	},
    
    "robert": {
        "Name": "โรเบิร์ต ฟีเธอร์",
		"Color": "#5bcaff",
        "Directory": "robert", // Optional*
        "Images":{ // Images Identifier for the "Show" statement.
            "badSurprise": "bad-surprise.png"//,
            //"Mad": "hmph!.png",
            //"Doubt": "uhh.png",
            //"Disappointed":"ngggg....png",
            //"Happy": "hehehehe.png"
        }
    },
    "who": {
        "Name": "????",
        "Color": "#5bcaff"
    }
};


let script = {
	// The game starts here.
    "Thai": {
	   "Start": [
		  "show robert badSurprise left with fadeInLeft",
           "robert เอมีเลีย",
           
           "who ชายหนุ่มร้องอุทานขึ้นเสียงดังลั่น พลางหายใจอย่างหืดหอบ ก่อนจะหันมองดูรอบๆอย่างสงสัย",
           "who ร่างกายที่ทรุดโทรมนี้เต็มไปด้วยผ้าพันแผล ผมเพ่าหยุ่งเหยิงไม่เป็นทรง ใบหน้าอิดโรยและสะบักสะบอม ในใจยังไม่หายตื่นตระหนกกับเรื่องราวในความฝัน",
           "who เขาพยายามใช้แขนทั้งสองพยุงร่างที่บอบช้ำเพื่อลุกขึ้นจากเตียงพักฟื้นที่อดีตเคยสวยงามแต่บัดนี้กลับดูเก่าและทรุดโทรมเป็นอย่างมาก",
           "clear",
           "jump sceneOne"
           ],
        "sceneOne": [
            "show h Normal right with fadeInRight",
           "h อย่าพึ่งขยับตัวเลยท่าน โรเบิร์ต ฟีเธอร์",
           ]
	},
    
    "English": {
        "Start": [
		
	]}
};