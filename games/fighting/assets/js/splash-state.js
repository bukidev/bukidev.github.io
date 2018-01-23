'use strict'
var loadingTxt;
var splashState = {
    preload : function () {
        
    },

    create : function () {
        game.add.sprite(game.world.centerX + 400, game.world.centerY, 'splashImage').anchor.setTo(0.5, 0.5);
        loadingTxt = game.add.text(20, 768 - 15, 'Loading').anchor.setTo(0, 1);;
        loadingTxt.fill = '#000';
    },

    update : function () {

    }
};
