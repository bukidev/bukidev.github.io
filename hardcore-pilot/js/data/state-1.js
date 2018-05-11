var state1 = {
    preload: function() {
        game.load.image('bukidev', 'img/bukidev-02.png');
        game.load.image('loadImg', 'img/load.jpg');
        
    },
    create: function() {
        game.state.start('intro');
    }
}