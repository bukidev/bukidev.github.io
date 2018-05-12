var state1 = {
    preload: function() {
        game.load.image('bukidev', 'img/bukidev-02.png');
        game.load.image('loadImg', 'img/load.jpg');
        //game.load.audio('splashTheme', 'sound/')
        
    },
    create: function() {
        // Stretch to fill
        //game.scale.fullScreenScaleMode = Phaser.ScaleManager.EXACT_FIT;

        // Keep original size
        // game.scale.fullScreenScaleMode = Phaser.ScaleManager.NO_SCALE;

        // Maintain aspect ratio
        game.scale.fullScreenScaleMode = Phaser.ScaleManager.SHOW_ALL;
        
        
        game.state.start('intro');
    }
}