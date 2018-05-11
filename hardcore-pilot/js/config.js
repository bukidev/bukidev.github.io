var config = {
    width: 1280,
    height: 800,
    render: Phaser.AUTO,
    id: 'game',
    system: {
        preload: preload,
        create: create,
        update: update
    },
    scale: Phaser.SHOW_ALL
};