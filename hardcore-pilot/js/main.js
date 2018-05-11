var game = new Phaser.Game(config.screenWidth, config.screenHeight, config.render, 'game', {preload: preload, create: create, update: update});

function preload() {};
function create() {};
function update() {};

game.state.add('boot', state1);
game.state.add('intro', state2);

game.state.start('boot');
