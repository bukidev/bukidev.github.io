'use strict'
var introCredit;

var bootState = {
    preload : function () {
        
        game.load.image('introCredit', 'assets/img/intro-credit.jpg');
        game.load.image('splashImage', 'assets/img/splash.jpg');
    },

    create : function () {
        game.stage.backgroundColor = '#000';
        introCredit = game.add.sprite(game.world.centerX, game.world.centerY, 'introCredit').anchor.setTo(0.5, 0.5);
        
        introCredit.alpha = 0;
        
        game.add.tween(introCredit).to({ alpha: 1 }, 2000, Phaser.Easing.Linear.None, true, 0, 1000, true);
        
        setTimeout(function() {
            game.state.start('splashState');
        }, 3000);
    },

    update : function () {
        
    }
};
