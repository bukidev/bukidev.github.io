var state5 = {
    preload: function() {
        game.load.spritesheet('playerCollision', 'img/playerCollision.png');
        game.load.spritesheet('playerCollision', 'img/enemiesCollision.png');
    },
    create: function() {
        
        game.state.start('play');
    } 
};