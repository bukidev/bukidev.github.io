gdjs.LooseSceneCode = {};
gdjs.LooseSceneCode.GDScoreObjects1= [];
gdjs.LooseSceneCode.GDScoreObjects2= [];
gdjs.LooseSceneCode.GDNewObjectObjects1= [];
gdjs.LooseSceneCode.GDNewObjectObjects2= [];

gdjs.LooseSceneCode.conditionTrue_0 = {val:false};
gdjs.LooseSceneCode.condition0IsTrue_0 = {val:false};
gdjs.LooseSceneCode.condition1IsTrue_0 = {val:false};


gdjs.LooseSceneCode.eventsList0xb43b0 = function(runtimeScene) {

{


gdjs.LooseSceneCode.condition0IsTrue_0.val = false;
{
gdjs.LooseSceneCode.condition0IsTrue_0.val = gdjs.evtTools.runtimeScene.sceneJustBegins(runtimeScene);
}if (gdjs.LooseSceneCode.condition0IsTrue_0.val) {
gdjs.LooseSceneCode.GDScoreObjects1.createFrom(runtimeScene.getObjects("Score"));
{for(var i = 0, len = gdjs.LooseSceneCode.GDScoreObjects1.length ;i < len;++i) {
    gdjs.LooseSceneCode.GDScoreObjects1[i].setString(gdjs.evtTools.common.getVariableString(runtimeScene.getGame().getVariables().getFromIndex(1)));
}
}{for(var i = 0, len = gdjs.LooseSceneCode.GDScoreObjects1.length ;i < len;++i) {
    gdjs.LooseSceneCode.GDScoreObjects1[i].setCharacterSize(150);
}
}{for(var i = 0, len = gdjs.LooseSceneCode.GDScoreObjects1.length ;i < len;++i) {
    gdjs.LooseSceneCode.GDScoreObjects1[i].setColor("248;231;28");
}
}}

}


}; //End of gdjs.LooseSceneCode.eventsList0xb43b0


gdjs.LooseSceneCode.func = function(runtimeScene) {
runtimeScene.getOnceTriggers().startNewFrame();

gdjs.LooseSceneCode.GDScoreObjects1.length = 0;
gdjs.LooseSceneCode.GDScoreObjects2.length = 0;
gdjs.LooseSceneCode.GDNewObjectObjects1.length = 0;
gdjs.LooseSceneCode.GDNewObjectObjects2.length = 0;

gdjs.LooseSceneCode.eventsList0xb43b0(runtimeScene);
return;

}
gdjs['LooseSceneCode'] = gdjs.LooseSceneCode;
