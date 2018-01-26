var game = new Phaser.Game(/*screenSize.getWidth()*/1280, /*screenSize.getHeight()*/768, Phaser.AUTO, 'gameCanvas');


game.state.add('bootState', bootState);
game.state.add('splashState', splashState);
game.state.start('bootState');
