var cursor, fireButton, player;

var state6 = {
    preload: function() {
    },
    
    create: function() {
        game.stage.backgroundColor = "#000";
        
        player = game.add.sprite(200, game.world.centerY, 'playerCollision').anchor.set(0.5);
        //game.add.sprite();
        
        cursors = game.input.keyboard.createCursorKeys();
        fireButton = game.input.keyboard.addKey(Phaser.Keyboard.SPACEBAR);
        
    },
    
    update: function() {
        
        player.x = game.input.mousePointer.x;
        player.y = game.input.mousePointer.y;
        
        /*if (cursors.left.isDown)
        {
            player.x -= player.speed;
        }
        else if (cursors.right.isDown)
        {
            player.x += player.speed;
        }

        if (cursors.up.isDown)
        {
            player.y -= player.speed;
        }
        else if (cursors.down.isDown)
        {
            player.y += player.speed;
        }*/

        /*if (fireButton.isDown)
        {
            fireBullet();
        }*/

        //lazers.forEachAlive(updateBullets, this);
    }
};