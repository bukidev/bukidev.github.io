var game = new Phaser.Game(config.width, config.height, config.render, config.id, config.system);

game.state.add('boot', state1);
game.state.add('intro', state2);

game.state.start('boot');