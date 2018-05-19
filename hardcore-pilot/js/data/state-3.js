var state3 = {
    preload: function() {
    },
    create: function() {
        game.stage.backgroundColor = "#000";
        
        game.add.image(game.world.centerX, game.world.centerY, 'loadImg').anchor.set(0.5);
        
        game.state.start('loadassets');
    } 
};