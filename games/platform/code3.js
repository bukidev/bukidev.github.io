gdjs.MainMenuCode = {};
gdjs.MainMenuCode.GDladderObjects1= [];
gdjs.MainMenuCode.GDladderObjects2= [];
gdjs.MainMenuCode.GDbg2Objects1= [];
gdjs.MainMenuCode.GDbg2Objects2= [];
gdjs.MainMenuCode.GDbg1Objects1= [];
gdjs.MainMenuCode.GDbg1Objects2= [];
gdjs.MainMenuCode.GDtreeObjects1= [];
gdjs.MainMenuCode.GDtreeObjects2= [];
gdjs.MainMenuCode.GDNewObjectObjects1= [];
gdjs.MainMenuCode.GDNewObjectObjects2= [];
gdjs.MainMenuCode.GDNewObject2Objects1= [];
gdjs.MainMenuCode.GDNewObject2Objects2= [];
gdjs.MainMenuCode.GDGameLogoObjects1= [];
gdjs.MainMenuCode.GDGameLogoObjects2= [];
gdjs.MainMenuCode.GDNewObject3Objects1= [];
gdjs.MainMenuCode.GDNewObject3Objects2= [];

gdjs.MainMenuCode.conditionTrue_0 = {val:false};
gdjs.MainMenuCode.condition0IsTrue_0 = {val:false};
gdjs.MainMenuCode.condition1IsTrue_0 = {val:false};


gdjs.MainMenuCode.eventsList0xb0b28 = function(runtimeScene) {

{


gdjs.MainMenuCode.condition0IsTrue_0.val = false;
{
gdjs.MainMenuCode.condition0IsTrue_0.val = gdjs.evtTools.runtimeScene.sceneJustBegins(runtimeScene);
}if (gdjs.MainMenuCode.condition0IsTrue_0.val) {
{gdjs.evtTools.sound.playMusicOnChannel(runtimeScene, "assets\\sound\\Patriotic_March.ogg", 1, true, 100, 1);
}}

}


{


gdjs.MainMenuCode.condition0IsTrue_0.val = false;
{
gdjs.MainMenuCode.condition0IsTrue_0.val = gdjs.evtTools.input.isKeyPressed(runtimeScene, "Return");
}if (gdjs.MainMenuCode.condition0IsTrue_0.val) {
{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "Level01", false);
}}

}


}; //End of gdjs.MainMenuCode.eventsList0xb0b28


gdjs.MainMenuCode.func = function(runtimeScene) {
runtimeScene.getOnceTriggers().startNewFrame();
gdjs.MainMenuCode.GDladderObjects1.length = 0;
gdjs.MainMenuCode.GDladderObjects2.length = 0;
gdjs.MainMenuCode.GDbg2Objects1.length = 0;
gdjs.MainMenuCode.GDbg2Objects2.length = 0;
gdjs.MainMenuCode.GDbg1Objects1.length = 0;
gdjs.MainMenuCode.GDbg1Objects2.length = 0;
gdjs.MainMenuCode.GDtreeObjects1.length = 0;
gdjs.MainMenuCode.GDtreeObjects2.length = 0;
gdjs.MainMenuCode.GDNewObjectObjects1.length = 0;
gdjs.MainMenuCode.GDNewObjectObjects2.length = 0;
gdjs.MainMenuCode.GDNewObject2Objects1.length = 0;
gdjs.MainMenuCode.GDNewObject2Objects2.length = 0;
gdjs.MainMenuCode.GDGameLogoObjects1.length = 0;
gdjs.MainMenuCode.GDGameLogoObjects2.length = 0;
gdjs.MainMenuCode.GDNewObject3Objects1.length = 0;
gdjs.MainMenuCode.GDNewObject3Objects2.length = 0;

gdjs.MainMenuCode.eventsList0xb0b28(runtimeScene);
return;
}
gdjs['MainMenuCode'] = gdjs.MainMenuCode;
