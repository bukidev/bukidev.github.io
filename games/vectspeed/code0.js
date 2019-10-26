gdjs.NewSceneCode = {};
gdjs.NewSceneCode.GDScoreObjects1= [];
gdjs.NewSceneCode.GDScoreObjects2= [];
gdjs.NewSceneCode.GDScoreObjects3= [];
gdjs.NewSceneCode.GDbg01Objects1= [];
gdjs.NewSceneCode.GDbg01Objects2= [];
gdjs.NewSceneCode.GDbg01Objects3= [];
gdjs.NewSceneCode.GDPlayerObjects1= [];
gdjs.NewSceneCode.GDPlayerObjects2= [];
gdjs.NewSceneCode.GDPlayerObjects3= [];
gdjs.NewSceneCode.GDlaneObjects1= [];
gdjs.NewSceneCode.GDlaneObjects2= [];
gdjs.NewSceneCode.GDlaneObjects3= [];
gdjs.NewSceneCode.GDdestroyEnemyObjects1= [];
gdjs.NewSceneCode.GDdestroyEnemyObjects2= [];
gdjs.NewSceneCode.GDdestroyEnemyObjects3= [];
gdjs.NewSceneCode.GDenemyObjects1= [];
gdjs.NewSceneCode.GDenemyObjects2= [];
gdjs.NewSceneCode.GDenemyObjects3= [];
gdjs.NewSceneCode.GDLgrassObjects1= [];
gdjs.NewSceneCode.GDLgrassObjects2= [];
gdjs.NewSceneCode.GDLgrassObjects3= [];
gdjs.NewSceneCode.GDRgrassObjects1= [];
gdjs.NewSceneCode.GDRgrassObjects2= [];
gdjs.NewSceneCode.GDRgrassObjects3= [];
gdjs.NewSceneCode.GDtwinEnemyObjects1= [];
gdjs.NewSceneCode.GDtwinEnemyObjects2= [];
gdjs.NewSceneCode.GDtwinEnemyObjects3= [];
gdjs.NewSceneCode.GDLeftCtrlObjects1= [];
gdjs.NewSceneCode.GDLeftCtrlObjects2= [];
gdjs.NewSceneCode.GDLeftCtrlObjects3= [];
gdjs.NewSceneCode.GDRightCtrlObjects1= [];
gdjs.NewSceneCode.GDRightCtrlObjects2= [];
gdjs.NewSceneCode.GDRightCtrlObjects3= [];

gdjs.NewSceneCode.conditionTrue_0 = {val:false};
gdjs.NewSceneCode.condition0IsTrue_0 = {val:false};
gdjs.NewSceneCode.condition1IsTrue_0 = {val:false};
gdjs.NewSceneCode.condition2IsTrue_0 = {val:false};


gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDtwinEnemyObjects2Objects = Hashtable.newFrom({"twinEnemy": gdjs.NewSceneCode.GDtwinEnemyObjects2});gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDenemyObjects1Objects = Hashtable.newFrom({"enemy": gdjs.NewSceneCode.GDenemyObjects1});gdjs.NewSceneCode.eventsList0x6b433c = function(runtimeScene) {

{


gdjs.NewSceneCode.condition0IsTrue_0.val = false;
{
gdjs.NewSceneCode.condition0IsTrue_0.val = gdjs.evtTools.common.getVariableNumber(runtimeScene.getGame().getVariables().getFromIndex(5)) == 1;
}if (gdjs.NewSceneCode.condition0IsTrue_0.val) {
gdjs.NewSceneCode.GDtwinEnemyObjects2.length = 0;

{gdjs.evtTools.object.createObjectOnScene((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : runtimeScene), gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDtwinEnemyObjects2Objects, gdjs.randomWithStep(135, 405, 270), -(200), "enemy");
}{gdjs.evtTools.runtimeScene.resetTimer(runtimeScene, "CreateEnemyTimer");
}}

}


{


gdjs.NewSceneCode.condition0IsTrue_0.val = false;
{
gdjs.NewSceneCode.condition0IsTrue_0.val = !(gdjs.evtTools.common.getVariableNumber(runtimeScene.getGame().getVariables().getFromIndex(5)) == 1);
}if (gdjs.NewSceneCode.condition0IsTrue_0.val) {
gdjs.NewSceneCode.GDenemyObjects1.length = 0;

{gdjs.evtTools.object.createObjectOnScene((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : runtimeScene), gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDenemyObjects1Objects, gdjs.randomWithStep(270, 810, 270), -(200), "enemy");
}{gdjs.evtTools.runtimeScene.resetTimer(runtimeScene, "CreateEnemyTimer");
}}

}


}; //End of gdjs.NewSceneCode.eventsList0x6b433c
gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDtwinEnemyObjects1Objects = Hashtable.newFrom({"twinEnemy": gdjs.NewSceneCode.GDtwinEnemyObjects1});gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDdestroyEnemyObjects1Objects = Hashtable.newFrom({"destroyEnemy": gdjs.NewSceneCode.GDdestroyEnemyObjects1});gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDenemyObjects1Objects = Hashtable.newFrom({"enemy": gdjs.NewSceneCode.GDenemyObjects1});gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDdestroyEnemyObjects1Objects = Hashtable.newFrom({"destroyEnemy": gdjs.NewSceneCode.GDdestroyEnemyObjects1});gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDenemyObjects1Objects = Hashtable.newFrom({"enemy": gdjs.NewSceneCode.GDenemyObjects1});gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDPlayerObjects1Objects = Hashtable.newFrom({"Player": gdjs.NewSceneCode.GDPlayerObjects1});gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDtwinEnemyObjects1Objects = Hashtable.newFrom({"twinEnemy": gdjs.NewSceneCode.GDtwinEnemyObjects1});gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDPlayerObjects1Objects = Hashtable.newFrom({"Player": gdjs.NewSceneCode.GDPlayerObjects1});gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDPlayerObjects1Objects = Hashtable.newFrom({"Player": gdjs.NewSceneCode.GDPlayerObjects1});gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDLgrassObjects1Objects = Hashtable.newFrom({"Lgrass": gdjs.NewSceneCode.GDLgrassObjects1});gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDPlayerObjects1Objects = Hashtable.newFrom({"Player": gdjs.NewSceneCode.GDPlayerObjects1});gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDRgrassObjects1Objects = Hashtable.newFrom({"Rgrass": gdjs.NewSceneCode.GDRgrassObjects1});gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDLeftCtrlObjects1Objects = Hashtable.newFrom({"LeftCtrl": gdjs.NewSceneCode.GDLeftCtrlObjects1});gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDRightCtrlObjects1Objects = Hashtable.newFrom({"RightCtrl": gdjs.NewSceneCode.GDRightCtrlObjects1});gdjs.NewSceneCode.eventsList0xb43b0 = function(runtimeScene) {

{



}


{


gdjs.NewSceneCode.condition0IsTrue_0.val = false;
{
gdjs.NewSceneCode.condition0IsTrue_0.val = gdjs.evtTools.runtimeScene.sceneJustBegins(runtimeScene);
}if (gdjs.NewSceneCode.condition0IsTrue_0.val) {
gdjs.NewSceneCode.GDLeftCtrlObjects1.createFrom(runtimeScene.getObjects("LeftCtrl"));
gdjs.NewSceneCode.GDPlayerObjects1.createFrom(runtimeScene.getObjects("Player"));
gdjs.NewSceneCode.GDRightCtrlObjects1.createFrom(runtimeScene.getObjects("RightCtrl"));
{for(var i = 0, len = gdjs.NewSceneCode.GDPlayerObjects1.length ;i < len;++i) {
    gdjs.NewSceneCode.GDPlayerObjects1[i].setX(gdjs.evtTools.window.getCanvasWidth(runtimeScene) / 2);
}
}{for(var i = 0, len = gdjs.NewSceneCode.GDLeftCtrlObjects1.length ;i < len;++i) {
    gdjs.NewSceneCode.GDLeftCtrlObjects1[i].hide();
}
}{for(var i = 0, len = gdjs.NewSceneCode.GDRightCtrlObjects1.length ;i < len;++i) {
    gdjs.NewSceneCode.GDRightCtrlObjects1[i].hide();
}
}}

}


{



}


{


gdjs.NewSceneCode.condition0IsTrue_0.val = false;
{
gdjs.NewSceneCode.condition0IsTrue_0.val = gdjs.evtTools.common.getVariableNumber(runtimeScene.getGame().getVariables().getFromIndex(1)) < 1000;
}if (gdjs.NewSceneCode.condition0IsTrue_0.val) {
{runtimeScene.getGame().getVariables().getFromIndex(3).setNumber(2.5);
}}

}


{


gdjs.NewSceneCode.condition0IsTrue_0.val = false;
gdjs.NewSceneCode.condition1IsTrue_0.val = false;
{
gdjs.NewSceneCode.condition0IsTrue_0.val = gdjs.evtTools.common.getVariableNumber(runtimeScene.getGame().getVariables().getFromIndex(1)) >= 1000;
}if ( gdjs.NewSceneCode.condition0IsTrue_0.val ) {
{
gdjs.NewSceneCode.condition1IsTrue_0.val = gdjs.evtTools.common.getVariableNumber(runtimeScene.getGame().getVariables().getFromIndex(1)) < 2000;
}}
if (gdjs.NewSceneCode.condition1IsTrue_0.val) {
{runtimeScene.getGame().getVariables().getFromIndex(3).setNumber(2);
}}

}


{


gdjs.NewSceneCode.condition0IsTrue_0.val = false;
gdjs.NewSceneCode.condition1IsTrue_0.val = false;
{
gdjs.NewSceneCode.condition0IsTrue_0.val = gdjs.evtTools.common.getVariableNumber(runtimeScene.getGame().getVariables().getFromIndex(1)) >= 2000;
}if ( gdjs.NewSceneCode.condition0IsTrue_0.val ) {
{
gdjs.NewSceneCode.condition1IsTrue_0.val = gdjs.evtTools.common.getVariableNumber(runtimeScene.getGame().getVariables().getFromIndex(1)) < 5000;
}}
if (gdjs.NewSceneCode.condition1IsTrue_0.val) {
{runtimeScene.getGame().getVariables().getFromIndex(4).setNumber(1500);
}{runtimeScene.getGame().getVariables().getFromIndex(3).setNumber(0.75);
}}

}


{


{
}

}


{



}


{


gdjs.NewSceneCode.condition0IsTrue_0.val = false;
{
gdjs.NewSceneCode.condition0IsTrue_0.val = gdjs.evtTools.runtimeScene.timerElapsedTime(runtimeScene, gdjs.evtTools.common.getVariableNumber(runtimeScene.getGame().getVariables().getFromIndex(3)), "CreateEnemyTimer");
}if (gdjs.NewSceneCode.condition0IsTrue_0.val) {
{runtimeScene.getGame().getVariables().getFromIndex(5).setNumber(gdjs.randomWithStep(1, 2, 1));
}
{ //Subevents
gdjs.NewSceneCode.eventsList0x6b433c(runtimeScene);} //End of subevents
}

}


{



}


{


{
gdjs.NewSceneCode.GDenemyObjects1.createFrom(runtimeScene.getObjects("enemy"));
gdjs.NewSceneCode.GDtwinEnemyObjects1.createFrom(runtimeScene.getObjects("twinEnemy"));
{for(var i = 0, len = gdjs.NewSceneCode.GDenemyObjects1.length ;i < len;++i) {
    gdjs.NewSceneCode.GDenemyObjects1[i].addForce(0, gdjs.evtTools.common.getVariableNumber(runtimeScene.getGame().getVariables().getFromIndex(4)), 0);
}
for(var i = 0, len = gdjs.NewSceneCode.GDtwinEnemyObjects1.length ;i < len;++i) {
    gdjs.NewSceneCode.GDtwinEnemyObjects1[i].addForce(0, gdjs.evtTools.common.getVariableNumber(runtimeScene.getGame().getVariables().getFromIndex(4)), 0);
}
}}

}


{



}


{

gdjs.NewSceneCode.GDdestroyEnemyObjects1.createFrom(runtimeScene.getObjects("destroyEnemy"));
gdjs.NewSceneCode.GDtwinEnemyObjects1.createFrom(runtimeScene.getObjects("twinEnemy"));

gdjs.NewSceneCode.condition0IsTrue_0.val = false;
{
gdjs.NewSceneCode.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDtwinEnemyObjects1Objects, gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDdestroyEnemyObjects1Objects, false, runtimeScene, false);
}if (gdjs.NewSceneCode.condition0IsTrue_0.val) {
/* Reuse gdjs.NewSceneCode.GDtwinEnemyObjects1 */
{for(var i = 0, len = gdjs.NewSceneCode.GDtwinEnemyObjects1.length ;i < len;++i) {
    gdjs.NewSceneCode.GDtwinEnemyObjects1[i].deleteFromScene(runtimeScene);
}
}}

}


{

gdjs.NewSceneCode.GDdestroyEnemyObjects1.createFrom(runtimeScene.getObjects("destroyEnemy"));
gdjs.NewSceneCode.GDenemyObjects1.createFrom(runtimeScene.getObjects("enemy"));

gdjs.NewSceneCode.condition0IsTrue_0.val = false;
{
gdjs.NewSceneCode.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDenemyObjects1Objects, gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDdestroyEnemyObjects1Objects, false, runtimeScene, false);
}if (gdjs.NewSceneCode.condition0IsTrue_0.val) {
/* Reuse gdjs.NewSceneCode.GDenemyObjects1 */
{for(var i = 0, len = gdjs.NewSceneCode.GDenemyObjects1.length ;i < len;++i) {
    gdjs.NewSceneCode.GDenemyObjects1[i].deleteFromScene(runtimeScene);
}
}}

}


{



}


{

gdjs.NewSceneCode.GDPlayerObjects1.createFrom(runtimeScene.getObjects("Player"));
gdjs.NewSceneCode.GDenemyObjects1.createFrom(runtimeScene.getObjects("enemy"));

gdjs.NewSceneCode.condition0IsTrue_0.val = false;
{
gdjs.NewSceneCode.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDenemyObjects1Objects, gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDPlayerObjects1Objects, false, runtimeScene, false);
}if (gdjs.NewSceneCode.condition0IsTrue_0.val) {
/* Reuse gdjs.NewSceneCode.GDPlayerObjects1 */
gdjs.NewSceneCode.GDScoreObjects1.createFrom(runtimeScene.getObjects("Score"));
{for(var i = 0, len = gdjs.NewSceneCode.GDPlayerObjects1.length ;i < len;++i) {
    gdjs.NewSceneCode.GDPlayerObjects1[i].deleteFromScene(runtimeScene);
}
}{for(var i = 0, len = gdjs.NewSceneCode.GDScoreObjects1.length ;i < len;++i) {
    gdjs.NewSceneCode.GDScoreObjects1[i].pauseTimer("ScoreTimer");
}
}{gdjs.evtTools.runtimeScene.pushScene(runtimeScene, "LooseScene");
}}

}


{

gdjs.NewSceneCode.GDPlayerObjects1.createFrom(runtimeScene.getObjects("Player"));
gdjs.NewSceneCode.GDtwinEnemyObjects1.createFrom(runtimeScene.getObjects("twinEnemy"));

gdjs.NewSceneCode.condition0IsTrue_0.val = false;
{
gdjs.NewSceneCode.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDtwinEnemyObjects1Objects, gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDPlayerObjects1Objects, false, runtimeScene, false);
}if (gdjs.NewSceneCode.condition0IsTrue_0.val) {
/* Reuse gdjs.NewSceneCode.GDPlayerObjects1 */
gdjs.NewSceneCode.GDScoreObjects1.createFrom(runtimeScene.getObjects("Score"));
{for(var i = 0, len = gdjs.NewSceneCode.GDPlayerObjects1.length ;i < len;++i) {
    gdjs.NewSceneCode.GDPlayerObjects1[i].deleteFromScene(runtimeScene);
}
}{for(var i = 0, len = gdjs.NewSceneCode.GDScoreObjects1.length ;i < len;++i) {
    gdjs.NewSceneCode.GDScoreObjects1[i].pauseTimer("ScoreTimer");
}
}{gdjs.evtTools.runtimeScene.pushScene(runtimeScene, "LooseScene");
}}

}


{



}


{


gdjs.NewSceneCode.condition0IsTrue_0.val = false;
{
gdjs.NewSceneCode.condition0IsTrue_0.val = gdjs.evtTools.input.wasKeyReleased(runtimeScene, "Left");
}if (gdjs.NewSceneCode.condition0IsTrue_0.val) {
gdjs.NewSceneCode.GDPlayerObjects1.createFrom(runtimeScene.getObjects("Player"));
{for(var i = 0, len = gdjs.NewSceneCode.GDPlayerObjects1.length ;i < len;++i) {
    gdjs.NewSceneCode.GDPlayerObjects1[i].setX(gdjs.NewSceneCode.GDPlayerObjects1[i].getX() - (gdjs.evtTools.common.getVariableNumber(runtimeScene.getGame().getVariables().getFromIndex(0))));
}
}}

}


{


gdjs.NewSceneCode.condition0IsTrue_0.val = false;
{
gdjs.NewSceneCode.condition0IsTrue_0.val = gdjs.evtTools.input.wasKeyReleased(runtimeScene, "Right");
}if (gdjs.NewSceneCode.condition0IsTrue_0.val) {
gdjs.NewSceneCode.GDPlayerObjects1.createFrom(runtimeScene.getObjects("Player"));
{for(var i = 0, len = gdjs.NewSceneCode.GDPlayerObjects1.length ;i < len;++i) {
    gdjs.NewSceneCode.GDPlayerObjects1[i].setX(gdjs.NewSceneCode.GDPlayerObjects1[i].getX() + (gdjs.evtTools.common.getVariableNumber(runtimeScene.getGame().getVariables().getFromIndex(0))));
}
}}

}


{

gdjs.NewSceneCode.GDLgrassObjects1.createFrom(runtimeScene.getObjects("Lgrass"));
gdjs.NewSceneCode.GDPlayerObjects1.createFrom(runtimeScene.getObjects("Player"));

gdjs.NewSceneCode.condition0IsTrue_0.val = false;
{
gdjs.NewSceneCode.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDPlayerObjects1Objects, gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDLgrassObjects1Objects, false, runtimeScene, false);
}if (gdjs.NewSceneCode.condition0IsTrue_0.val) {
/* Reuse gdjs.NewSceneCode.GDPlayerObjects1 */
{for(var i = 0, len = gdjs.NewSceneCode.GDPlayerObjects1.length ;i < len;++i) {
    gdjs.NewSceneCode.GDPlayerObjects1[i].setX(gdjs.evtTools.common.getVariableNumber(runtimeScene.getGame().getVariables().getFromIndex(0)));
}
}}

}


{

gdjs.NewSceneCode.GDPlayerObjects1.createFrom(runtimeScene.getObjects("Player"));
gdjs.NewSceneCode.GDRgrassObjects1.createFrom(runtimeScene.getObjects("Rgrass"));

gdjs.NewSceneCode.condition0IsTrue_0.val = false;
{
gdjs.NewSceneCode.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDPlayerObjects1Objects, gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDRgrassObjects1Objects, false, runtimeScene, false);
}if (gdjs.NewSceneCode.condition0IsTrue_0.val) {
/* Reuse gdjs.NewSceneCode.GDPlayerObjects1 */
{for(var i = 0, len = gdjs.NewSceneCode.GDPlayerObjects1.length ;i < len;++i) {
    gdjs.NewSceneCode.GDPlayerObjects1[i].setX(gdjs.evtTools.common.getVariableNumber(runtimeScene.getGame().getVariables().getFromIndex(0)) * 3);
}
}}

}


{

gdjs.NewSceneCode.GDLeftCtrlObjects1.createFrom(runtimeScene.getObjects("LeftCtrl"));

gdjs.NewSceneCode.condition0IsTrue_0.val = false;
gdjs.NewSceneCode.condition1IsTrue_0.val = false;
{
gdjs.NewSceneCode.condition0IsTrue_0.val = gdjs.evtTools.input.cursorOnObject(gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDLeftCtrlObjects1Objects, runtimeScene, true, false);
}if ( gdjs.NewSceneCode.condition0IsTrue_0.val ) {
{
gdjs.NewSceneCode.condition1IsTrue_0.val = gdjs.evtTools.input.isMouseButtonReleased(runtimeScene, "Left");
}}
if (gdjs.NewSceneCode.condition1IsTrue_0.val) {
gdjs.NewSceneCode.GDPlayerObjects1.createFrom(runtimeScene.getObjects("Player"));
{for(var i = 0, len = gdjs.NewSceneCode.GDPlayerObjects1.length ;i < len;++i) {
    gdjs.NewSceneCode.GDPlayerObjects1[i].setX(gdjs.NewSceneCode.GDPlayerObjects1[i].getX() - (gdjs.evtTools.common.getVariableNumber(runtimeScene.getGame().getVariables().getFromIndex(0))));
}
}}

}


{

gdjs.NewSceneCode.GDRightCtrlObjects1.createFrom(runtimeScene.getObjects("RightCtrl"));

gdjs.NewSceneCode.condition0IsTrue_0.val = false;
gdjs.NewSceneCode.condition1IsTrue_0.val = false;
{
gdjs.NewSceneCode.condition0IsTrue_0.val = gdjs.evtTools.input.cursorOnObject(gdjs.NewSceneCode.mapOfGDgdjs_46NewSceneCode_46GDRightCtrlObjects1Objects, runtimeScene, true, false);
}if ( gdjs.NewSceneCode.condition0IsTrue_0.val ) {
{
gdjs.NewSceneCode.condition1IsTrue_0.val = gdjs.evtTools.input.isMouseButtonReleased(runtimeScene, "Left");
}}
if (gdjs.NewSceneCode.condition1IsTrue_0.val) {
gdjs.NewSceneCode.GDPlayerObjects1.createFrom(runtimeScene.getObjects("Player"));
{for(var i = 0, len = gdjs.NewSceneCode.GDPlayerObjects1.length ;i < len;++i) {
    gdjs.NewSceneCode.GDPlayerObjects1[i].setX(gdjs.NewSceneCode.GDPlayerObjects1[i].getX() + (gdjs.evtTools.common.getVariableNumber(runtimeScene.getGame().getVariables().getFromIndex(0))));
}
}}

}


{



}


{


gdjs.NewSceneCode.condition0IsTrue_0.val = false;
{
gdjs.NewSceneCode.condition0IsTrue_0.val = gdjs.evtTools.runtimeScene.timerElapsedTime(runtimeScene, 0.05, "ScoreTimer");
}if (gdjs.NewSceneCode.condition0IsTrue_0.val) {
gdjs.NewSceneCode.GDScoreObjects1.createFrom(runtimeScene.getObjects("Score"));
{runtimeScene.getGame().getVariables().getFromIndex(1).add(10);
}{gdjs.evtTools.runtimeScene.resetTimer(runtimeScene, "ScoreTimer");
}{for(var i = 0, len = gdjs.NewSceneCode.GDScoreObjects1.length ;i < len;++i) {
    gdjs.NewSceneCode.GDScoreObjects1[i].setString(gdjs.evtTools.common.getVariableString(runtimeScene.getGame().getVariables().getFromIndex(1)));
}
}}

}


}; //End of gdjs.NewSceneCode.eventsList0xb43b0


gdjs.NewSceneCode.func = function(runtimeScene) {
runtimeScene.getOnceTriggers().startNewFrame();

gdjs.NewSceneCode.GDScoreObjects1.length = 0;
gdjs.NewSceneCode.GDScoreObjects2.length = 0;
gdjs.NewSceneCode.GDScoreObjects3.length = 0;
gdjs.NewSceneCode.GDbg01Objects1.length = 0;
gdjs.NewSceneCode.GDbg01Objects2.length = 0;
gdjs.NewSceneCode.GDbg01Objects3.length = 0;
gdjs.NewSceneCode.GDPlayerObjects1.length = 0;
gdjs.NewSceneCode.GDPlayerObjects2.length = 0;
gdjs.NewSceneCode.GDPlayerObjects3.length = 0;
gdjs.NewSceneCode.GDlaneObjects1.length = 0;
gdjs.NewSceneCode.GDlaneObjects2.length = 0;
gdjs.NewSceneCode.GDlaneObjects3.length = 0;
gdjs.NewSceneCode.GDdestroyEnemyObjects1.length = 0;
gdjs.NewSceneCode.GDdestroyEnemyObjects2.length = 0;
gdjs.NewSceneCode.GDdestroyEnemyObjects3.length = 0;
gdjs.NewSceneCode.GDenemyObjects1.length = 0;
gdjs.NewSceneCode.GDenemyObjects2.length = 0;
gdjs.NewSceneCode.GDenemyObjects3.length = 0;
gdjs.NewSceneCode.GDLgrassObjects1.length = 0;
gdjs.NewSceneCode.GDLgrassObjects2.length = 0;
gdjs.NewSceneCode.GDLgrassObjects3.length = 0;
gdjs.NewSceneCode.GDRgrassObjects1.length = 0;
gdjs.NewSceneCode.GDRgrassObjects2.length = 0;
gdjs.NewSceneCode.GDRgrassObjects3.length = 0;
gdjs.NewSceneCode.GDtwinEnemyObjects1.length = 0;
gdjs.NewSceneCode.GDtwinEnemyObjects2.length = 0;
gdjs.NewSceneCode.GDtwinEnemyObjects3.length = 0;
gdjs.NewSceneCode.GDLeftCtrlObjects1.length = 0;
gdjs.NewSceneCode.GDLeftCtrlObjects2.length = 0;
gdjs.NewSceneCode.GDLeftCtrlObjects3.length = 0;
gdjs.NewSceneCode.GDRightCtrlObjects1.length = 0;
gdjs.NewSceneCode.GDRightCtrlObjects2.length = 0;
gdjs.NewSceneCode.GDRightCtrlObjects3.length = 0;

gdjs.NewSceneCode.eventsList0xb43b0(runtimeScene);
return;

}
gdjs['NewSceneCode'] = gdjs.NewSceneCode;
