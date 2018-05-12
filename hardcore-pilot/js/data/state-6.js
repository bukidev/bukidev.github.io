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
        /*if (cursors.left.isDown)
        {
            player.body.velocity.x -= 8;
        }
        else if (cursors.right.isDown)
        {
            player.velocity.x += 8;
        }

        if (cursors.up.isDown)
        {
            player.y -= 8;
        }
        else if (cursors.down.isDown)
        {
            player.y += 8;
        }*/

        /*if (fireButton.isDown)
        {
            fireBullet();
        }*/

        //lazers.forEachAlive(updateBullets, this);
    }
};