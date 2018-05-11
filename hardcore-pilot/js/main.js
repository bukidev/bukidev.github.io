var game = new Phaser.Game(config.screenWidth, config.screenHeight, config.renderSystem, '', {preload: preload, create: create, update: update});

game.state.add('boot', state1);
game.state.add('intro', state2);
game.state.add('load', state3);

game.state.start('boot');
console.log('work');

function preload() {
    
}
function create() {
    
}
function update() {}


