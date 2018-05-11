var state2 = {
    create: function() {
        game.stage.backgroundColor = "#000";
        
        var bukidev = game.add.image(game.world.centerX, game.world.centerY, 'bukidev').anchor.set(0.5);

        
        setTimeout(function() {
            
            game.state.start('load'); // change state
        
        }, 3000);
        
        
    }
};