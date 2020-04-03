gdjs.MainMenuCode = {};
gdjs.MainMenuCode.GDmainMenuBgObjects1= [];
gdjs.MainMenuCode.GDmainMenuBgObjects2= [];
gdjs.MainMenuCode.GDgameLogoObjects1= [];
gdjs.MainMenuCode.GDgameLogoObjects2= [];
gdjs.MainMenuCode.GDstartBtnObjects1= [];
gdjs.MainMenuCode.GDstartBtnObjects2= [];
gdjs.MainMenuCode.GDloadBtnObjects1= [];
gdjs.MainMenuCode.GDloadBtnObjects2= [];
gdjs.MainMenuCode.GDsettingBtnObjects1= [];
gdjs.MainMenuCode.GDsettingBtnObjects2= [];
gdjs.MainMenuCode.GDcreditBtnObjects1= [];
gdjs.MainMenuCode.GDcreditBtnObjects2= [];
gdjs.MainMenuCode.GDexitBtnObjects1= [];
gdjs.MainMenuCode.GDexitBtnObjects2= [];
gdjs.MainMenuCode.GDexitBgObjects1= [];
gdjs.MainMenuCode.GDexitBgObjects2= [];
gdjs.MainMenuCode.GDexitNoObjects1= [];
gdjs.MainMenuCode.GDexitNoObjects2= [];
gdjs.MainMenuCode.GDexitYesObjects1= [];
gdjs.MainMenuCode.GDexitYesObjects2= [];

gdjs.MainMenuCode.conditionTrue_0 = {val:false};
gdjs.MainMenuCode.condition0IsTrue_0 = {val:false};
gdjs.MainMenuCode.condition1IsTrue_0 = {val:false};


gdjs.MainMenuCode.mapOfGDgdjs_46MainMenuCode_46GDstartBtnObjects1Objects = Hashtable.newFrom({"startBtn": gdjs.MainMenuCode.GDstartBtnObjects1});gdjs.MainMenuCode.eventsList0x755ae4 = function(runtimeScene) {

{


gdjs.MainMenuCode.condition0IsTrue_0.val = false;
{
gdjs.MainMenuCode.condition0IsTrue_0.val = gdjs.evtTools.input.isMouseButtonPressed(runtimeScene, "Left");
}if (gdjs.MainMenuCode.condition0IsTrue_0.val) {
{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "Level01", false);
}}

}


}; //End of gdjs.MainMenuCode.eventsList0x755ae4
gdjs.MainMenuCode.mapOfGDgdjs_46MainMenuCode_46GDstartBtnObjects1Objects = Hashtable.newFrom({"startBtn": gdjs.MainMenuCode.GDstartBtnObjects1});gdjs.MainMenuCode.mapOfGDgdjs_46MainMenuCode_46GDloadBtnObjects1Objects = Hashtable.newFrom({"loadBtn": gdjs.MainMenuCode.GDloadBtnObjects1});gdjs.MainMenuCode.eventsList0x7561c4 = function(runtimeScene) {

{


gdjs.MainMenuCode.condition0IsTrue_0.val = false;
{
gdjs.MainMenuCode.condition0IsTrue_0.val = gdjs.evtTools.input.isMouseButtonPressed(runtimeScene, "Left");
}if (gdjs.MainMenuCode.condition0IsTrue_0.val) {
}

}


}; //End of gdjs.MainMenuCode.eventsList0x7561c4
gdjs.MainMenuCode.mapOfGDgdjs_46MainMenuCode_46GDloadBtnObjects1Objects = Hashtable.newFrom({"loadBtn": gdjs.MainMenuCode.GDloadBtnObjects1});gdjs.MainMenuCode.mapOfGDgdjs_46MainMenuCode_46GDsettingBtnObjects1Objects = Hashtable.newFrom({"settingBtn": gdjs.MainMenuCode.GDsettingBtnObjects1});gdjs.MainMenuCode.eventsList0x756884 = function(runtimeScene) {

{


gdjs.MainMenuCode.condition0IsTrue_0.val = false;
{
gdjs.MainMenuCode.condition0IsTrue_0.val = gdjs.evtTools.input.isMouseButtonPressed(runtimeScene, "Left");
}if (gdjs.MainMenuCode.condition0IsTrue_0.val) {
{gdjs.evtTools.camera.showLayer(runtimeScene, "settingLayer");
}}

}


}; //End of gdjs.MainMenuCode.eventsList0x756884
gdjs.MainMenuCode.mapOfGDgdjs_46MainMenuCode_46GDsettingBtnObjects1Objects = Hashtable.newFrom({"settingBtn": gdjs.MainMenuCode.GDsettingBtnObjects1});gdjs.MainMenuCode.mapOfGDgdjs_46MainMenuCode_46GDcreditBtnObjects1Objects = Hashtable.newFrom({"creditBtn": gdjs.MainMenuCode.GDcreditBtnObjects1});gdjs.MainMenuCode.eventsList0x756f0c = function(runtimeScene) {

{


gdjs.MainMenuCode.condition0IsTrue_0.val = false;
{
gdjs.MainMenuCode.condition0IsTrue_0.val = gdjs.evtTools.input.isMouseButtonPressed(runtimeScene, "Left");
}if (gdjs.MainMenuCode.condition0IsTrue_0.val) {
{gdjs.evtTools.camera.showLayer(runtimeScene, "creditLayer");
}}

}


}; //End of gdjs.MainMenuCode.eventsList0x756f0c
gdjs.MainMenuCode.mapOfGDgdjs_46MainMenuCode_46GDcreditBtnObjects1Objects = Hashtable.newFrom({"creditBtn": gdjs.MainMenuCode.GDcreditBtnObjects1});gdjs.MainMenuCode.mapOfGDgdjs_46MainMenuCode_46GDexitBtnObjects1Objects = Hashtable.newFrom({"exitBtn": gdjs.MainMenuCode.GDexitBtnObjects1});gdjs.MainMenuCode.eventsList0x7575d4 = function(runtimeScene) {

{


gdjs.MainMenuCode.condition0IsTrue_0.val = false;
{
gdjs.MainMenuCode.condition0IsTrue_0.val = gdjs.evtTools.input.isMouseButtonPressed(runtimeScene, "Left");
}if (gdjs.MainMenuCode.condition0IsTrue_0.val) {
gdjs.MainMenuCode.GDexitBgObjects1.createFrom(runtimeScene.getObjects("exitBg"));
gdjs.MainMenuCode.GDexitNoObjects1.createFrom(runtimeScene.getObjects("exitNo"));
gdjs.MainMenuCode.GDexitYesObjects1.createFrom(runtimeScene.getObjects("exitYes"));
{gdjs.evtTools.linkedObjects.linkObjects(runtimeScene, (gdjs.MainMenuCode.GDexitYesObjects1.length !== 0 ? gdjs.MainMenuCode.GDexitYesObjects1[0] : null), (gdjs.MainMenuCode.GDexitBgObjects1.length !== 0 ? gdjs.MainMenuCode.GDexitBgObjects1[0] : null));
}{gdjs.evtTools.linkedObjects.linkObjects(runtimeScene, (gdjs.MainMenuCode.GDexitNoObjects1.length !== 0 ? gdjs.MainMenuCode.GDexitNoObjects1[0] : null), (gdjs.MainMenuCode.GDexitBgObjects1.length !== 0 ? gdjs.MainMenuCode.GDexitBgObjects1[0] : null));
}{for(var i = 0, len = gdjs.MainMenuCode.GDexitBgObjects1.length ;i < len;++i) {
    gdjs.MainMenuCode.GDexitBgObjects1[i].setX(gdjs.evtTools.window.getCanvasWidth(runtimeScene) / 2 - (gdjs.MainMenuCode.GDexitBgObjects1[i].getWidth()) / 2);
}
}{gdjs.evtTools.camera.hideLayer(runtimeScene, "menu");
}{gdjs.evtTools.camera.showLayer(runtimeScene, "exitLayer");
}{gdjs.evtTools.runtimeScene.stopGame(runtimeScene);
}}

}


}; //End of gdjs.MainMenuCode.eventsList0x7575d4
gdjs.MainMenuCode.mapOfGDgdjs_46MainMenuCode_46GDexitBtnObjects1Objects = Hashtable.newFrom({"exitBtn": gdjs.MainMenuCode.GDexitBtnObjects1});gdjs.MainMenuCode.mapOfGDgdjs_46MainMenuCode_46GDexitYesObjects1Objects = Hashtable.newFrom({"exitYes": gdjs.MainMenuCode.GDexitYesObjects1});gdjs.MainMenuCode.eventsList0x757fe4 = function(runtimeScene) {

{


gdjs.MainMenuCode.condition0IsTrue_0.val = false;
{
gdjs.MainMenuCode.condition0IsTrue_0.val = gdjs.evtTools.input.isMouseButtonPressed(runtimeScene, "Left");
}if (gdjs.MainMenuCode.condition0IsTrue_0.val) {
{gdjs.evtTools.runtimeScene.stopGame(runtimeScene);
}}

}


}; //End of gdjs.MainMenuCode.eventsList0x757fe4
gdjs.MainMenuCode.mapOfGDgdjs_46MainMenuCode_46GDexitNoObjects1Objects = Hashtable.newFrom({"exitNo": gdjs.MainMenuCode.GDexitNoObjects1});gdjs.MainMenuCode.eventsList0x75830c = function(runtimeScene) {

{


gdjs.MainMenuCode.condition0IsTrue_0.val = false;
{
gdjs.MainMenuCode.condition0IsTrue_0.val = gdjs.evtTools.input.isMouseButtonPressed(runtimeScene, "Left");
}if (gdjs.MainMenuCode.condition0IsTrue_0.val) {
{gdjs.evtTools.camera.hideLayer(runtimeScene, "exitLayer");
}{gdjs.evtTools.camera.showLayer(runtimeScene, "menu");
}}

}


}; //End of gdjs.MainMenuCode.eventsList0x75830c
gdjs.MainMenuCode.eventsList0xb43b0 = function(runtimeScene) {

{


gdjs.MainMenuCode.condition0IsTrue_0.val = false;
{
gdjs.MainMenuCode.condition0IsTrue_0.val = gdjs.evtTools.runtimeScene.sceneJustBegins(runtimeScene);
}if (gdjs.MainMenuCode.condition0IsTrue_0.val) {
gdjs.MainMenuCode.GDcreditBtnObjects1.createFrom(runtimeScene.getObjects("creditBtn"));
gdjs.MainMenuCode.GDexitBtnObjects1.createFrom(runtimeScene.getObjects("exitBtn"));
gdjs.MainMenuCode.GDgameLogoObjects1.createFrom(runtimeScene.getObjects("gameLogo"));
gdjs.MainMenuCode.GDloadBtnObjects1.createFrom(runtimeScene.getObjects("loadBtn"));
gdjs.MainMenuCode.GDmainMenuBgObjects1.createFrom(runtimeScene.getObjects("mainMenuBg"));
gdjs.MainMenuCode.GDsettingBtnObjects1.createFrom(runtimeScene.getObjects("settingBtn"));
gdjs.MainMenuCode.GDstartBtnObjects1.createFrom(runtimeScene.getObjects("startBtn"));
{gdjs.evtTools.sound.playSoundOnChannel(runtimeScene, "assets\\sound\\Patriotic_March.ogg", 1, true, 100, 1);
}{gdjs.evtTools.camera.hideLayer(runtimeScene, "menu");
}{for(var i = 0, len = gdjs.MainMenuCode.GDmainMenuBgObjects1.length ;i < len;++i) {
    gdjs.MainMenuCode.GDmainMenuBgObjects1[i].setPosition(gdjs.evtTools.window.getCanvasWidth(runtimeScene) / 2 - (gdjs.MainMenuCode.GDmainMenuBgObjects1[i].getWidth()) / 2,gdjs.evtTools.window.getCanvasHeight(runtimeScene) / 2 - (gdjs.MainMenuCode.GDmainMenuBgObjects1[i].getHeight()) / 2);
}
}{for(var i = 0, len = gdjs.MainMenuCode.GDgameLogoObjects1.length ;i < len;++i) {
    gdjs.MainMenuCode.GDgameLogoObjects1[i].setX(gdjs.evtTools.window.getCanvasWidth(runtimeScene) / 2 - (gdjs.MainMenuCode.GDgameLogoObjects1[i].getWidth()) / 2);
}
}{for(var i = 0, len = gdjs.MainMenuCode.GDstartBtnObjects1.length ;i < len;++i) {
    gdjs.MainMenuCode.GDstartBtnObjects1[i].setX(gdjs.evtTools.window.getCanvasWidth(runtimeScene) / 2 - (gdjs.MainMenuCode.GDstartBtnObjects1[i].getWidth()) / 2);
}
}{for(var i = 0, len = gdjs.MainMenuCode.GDloadBtnObjects1.length ;i < len;++i) {
    gdjs.MainMenuCode.GDloadBtnObjects1[i].setX(gdjs.evtTools.window.getCanvasWidth(runtimeScene) / 2 - (gdjs.MainMenuCode.GDloadBtnObjects1[i].getWidth()) / 2);
}
}{for(var i = 0, len = gdjs.MainMenuCode.GDsettingBtnObjects1.length ;i < len;++i) {
    gdjs.MainMenuCode.GDsettingBtnObjects1[i].setX(gdjs.evtTools.window.getCanvasWidth(runtimeScene) / 2 - (gdjs.MainMenuCode.GDsettingBtnObjects1[i].getWidth()) / 2);
}
}{for(var i = 0, len = gdjs.MainMenuCode.GDcreditBtnObjects1.length ;i < len;++i) {
    gdjs.MainMenuCode.GDcreditBtnObjects1[i].setX(gdjs.evtTools.window.getCanvasWidth(runtimeScene) / 2 - (gdjs.MainMenuCode.GDcreditBtnObjects1[i].getWidth()) / 2);
}
}{for(var i = 0, len = gdjs.MainMenuCode.GDexitBtnObjects1.length ;i < len;++i) {
    gdjs.MainMenuCode.GDexitBtnObjects1[i].setX(gdjs.evtTools.window.getCanvasWidth(runtimeScene) / 2 - (gdjs.MainMenuCode.GDexitBtnObjects1[i].getWidth()) / 2);
}
}{for(var i = 0, len = gdjs.MainMenuCode.GDgameLogoObjects1.length ;i < len;++i) {
    gdjs.MainMenuCode.GDgameLogoObjects1[i].setOpacity(0);
}
}}

}


{


{
gdjs.MainMenuCode.GDgameLogoObjects1.createFrom(runtimeScene.getObjects("gameLogo"));
{for(var i = 0, len = gdjs.MainMenuCode.GDgameLogoObjects1.length ;i < len;++i) {
    gdjs.MainMenuCode.GDgameLogoObjects1[i].setOpacity(gdjs.evtTools.runtimeScene.getTimeFromStartInSeconds(runtimeScene) * 100);
}
}}

}


{

gdjs.MainMenuCode.GDgameLogoObjects1.createFrom(runtimeScene.getObjects("gameLogo"));

gdjs.MainMenuCode.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.MainMenuCode.GDgameLogoObjects1.length;i<l;++i) {
    if ( gdjs.MainMenuCode.GDgameLogoObjects1[i].getOpacity() >= 255 ) {
        gdjs.MainMenuCode.condition0IsTrue_0.val = true;
        gdjs.MainMenuCode.GDgameLogoObjects1[k] = gdjs.MainMenuCode.GDgameLogoObjects1[i];
        ++k;
    }
}
gdjs.MainMenuCode.GDgameLogoObjects1.length = k;}if (gdjs.MainMenuCode.condition0IsTrue_0.val) {
{gdjs.evtTools.camera.showLayer(runtimeScene, "menu");
}}

}


{



}


{

gdjs.MainMenuCode.GDstartBtnObjects1.createFrom(runtimeScene.getObjects("startBtn"));

gdjs.MainMenuCode.condition0IsTrue_0.val = false;
{
gdjs.MainMenuCode.condition0IsTrue_0.val = gdjs.evtTools.input.cursorOnObject(gdjs.MainMenuCode.mapOfGDgdjs_46MainMenuCode_46GDstartBtnObjects1Objects, runtimeScene, true, false);
}if (gdjs.MainMenuCode.condition0IsTrue_0.val) {
/* Reuse gdjs.MainMenuCode.GDstartBtnObjects1 */
{for(var i = 0, len = gdjs.MainMenuCode.GDstartBtnObjects1.length ;i < len;++i) {
    gdjs.MainMenuCode.GDstartBtnObjects1[i].setAnimationName("hover");
}
}
{ //Subevents
gdjs.MainMenuCode.eventsList0x755ae4(runtimeScene);} //End of subevents
}

}


{

gdjs.MainMenuCode.GDstartBtnObjects1.createFrom(runtimeScene.getObjects("startBtn"));

gdjs.MainMenuCode.condition0IsTrue_0.val = false;
{
gdjs.MainMenuCode.condition0IsTrue_0.val = gdjs.evtTools.input.cursorOnObject(gdjs.MainMenuCode.mapOfGDgdjs_46MainMenuCode_46GDstartBtnObjects1Objects, runtimeScene, true, true);
}if (gdjs.MainMenuCode.condition0IsTrue_0.val) {
/* Reuse gdjs.MainMenuCode.GDstartBtnObjects1 */
{for(var i = 0, len = gdjs.MainMenuCode.GDstartBtnObjects1.length ;i < len;++i) {
    gdjs.MainMenuCode.GDstartBtnObjects1[i].setAnimationName("idle");
}
}}

}


{



}


{

gdjs.MainMenuCode.GDloadBtnObjects1.createFrom(runtimeScene.getObjects("loadBtn"));

gdjs.MainMenuCode.condition0IsTrue_0.val = false;
{
gdjs.MainMenuCode.condition0IsTrue_0.val = gdjs.evtTools.input.cursorOnObject(gdjs.MainMenuCode.mapOfGDgdjs_46MainMenuCode_46GDloadBtnObjects1Objects, runtimeScene, true, false);
}if (gdjs.MainMenuCode.condition0IsTrue_0.val) {
/* Reuse gdjs.MainMenuCode.GDloadBtnObjects1 */
{for(var i = 0, len = gdjs.MainMenuCode.GDloadBtnObjects1.length ;i < len;++i) {
    gdjs.MainMenuCode.GDloadBtnObjects1[i].setAnimationName("hover");
}
}
{ //Subevents
gdjs.MainMenuCode.eventsList0x7561c4(runtimeScene);} //End of subevents
}

}


{

gdjs.MainMenuCode.GDloadBtnObjects1.createFrom(runtimeScene.getObjects("loadBtn"));

gdjs.MainMenuCode.condition0IsTrue_0.val = false;
{
gdjs.MainMenuCode.condition0IsTrue_0.val = gdjs.evtTools.input.cursorOnObject(gdjs.MainMenuCode.mapOfGDgdjs_46MainMenuCode_46GDloadBtnObjects1Objects, runtimeScene, true, true);
}if (gdjs.MainMenuCode.condition0IsTrue_0.val) {
/* Reuse gdjs.MainMenuCode.GDloadBtnObjects1 */
{for(var i = 0, len = gdjs.MainMenuCode.GDloadBtnObjects1.length ;i < len;++i) {
    gdjs.MainMenuCode.GDloadBtnObjects1[i].setAnimationName("idle");
}
}}

}


{



}


{

gdjs.MainMenuCode.GDsettingBtnObjects1.createFrom(runtimeScene.getObjects("settingBtn"));

gdjs.MainMenuCode.condition0IsTrue_0.val = false;
{
gdjs.MainMenuCode.condition0IsTrue_0.val = gdjs.evtTools.input.cursorOnObject(gdjs.MainMenuCode.mapOfGDgdjs_46MainMenuCode_46GDsettingBtnObjects1Objects, runtimeScene, true, false);
}if (gdjs.MainMenuCode.condition0IsTrue_0.val) {
/* Reuse gdjs.MainMenuCode.GDsettingBtnObjects1 */
{for(var i = 0, len = gdjs.MainMenuCode.GDsettingBtnObjects1.length ;i < len;++i) {
    gdjs.MainMenuCode.GDsettingBtnObjects1[i].setAnimationName("hover");
}
}
{ //Subevents
gdjs.MainMenuCode.eventsList0x756884(runtimeScene);} //End of subevents
}

}


{

gdjs.MainMenuCode.GDsettingBtnObjects1.createFrom(runtimeScene.getObjects("settingBtn"));

gdjs.MainMenuCode.condition0IsTrue_0.val = false;
{
gdjs.MainMenuCode.condition0IsTrue_0.val = gdjs.evtTools.input.cursorOnObject(gdjs.MainMenuCode.mapOfGDgdjs_46MainMenuCode_46GDsettingBtnObjects1Objects, runtimeScene, true, true);
}if (gdjs.MainMenuCode.condition0IsTrue_0.val) {
/* Reuse gdjs.MainMenuCode.GDsettingBtnObjects1 */
{for(var i = 0, len = gdjs.MainMenuCode.GDsettingBtnObjects1.length ;i < len;++i) {
    gdjs.MainMenuCode.GDsettingBtnObjects1[i].setAnimationName("idle");
}
}}

}


{



}


{

gdjs.MainMenuCode.GDcreditBtnObjects1.createFrom(runtimeScene.getObjects("creditBtn"));

gdjs.MainMenuCode.condition0IsTrue_0.val = false;
{
gdjs.MainMenuCode.condition0IsTrue_0.val = gdjs.evtTools.input.cursorOnObject(gdjs.MainMenuCode.mapOfGDgdjs_46MainMenuCode_46GDcreditBtnObjects1Objects, runtimeScene, true, false);
}if (gdjs.MainMenuCode.condition0IsTrue_0.val) {
/* Reuse gdjs.MainMenuCode.GDcreditBtnObjects1 */
{for(var i = 0, len = gdjs.MainMenuCode.GDcreditBtnObjects1.length ;i < len;++i) {
    gdjs.MainMenuCode.GDcreditBtnObjects1[i].setAnimationName("hover");
}
}
{ //Subevents
gdjs.MainMenuCode.eventsList0x756f0c(runtimeScene);} //End of subevents
}

}


{

gdjs.MainMenuCode.GDcreditBtnObjects1.createFrom(runtimeScene.getObjects("creditBtn"));

gdjs.MainMenuCode.condition0IsTrue_0.val = false;
{
gdjs.MainMenuCode.condition0IsTrue_0.val = gdjs.evtTools.input.cursorOnObject(gdjs.MainMenuCode.mapOfGDgdjs_46MainMenuCode_46GDcreditBtnObjects1Objects, runtimeScene, true, true);
}if (gdjs.MainMenuCode.condition0IsTrue_0.val) {
/* Reuse gdjs.MainMenuCode.GDcreditBtnObjects1 */
{for(var i = 0, len = gdjs.MainMenuCode.GDcreditBtnObjects1.length ;i < len;++i) {
    gdjs.MainMenuCode.GDcreditBtnObjects1[i].setAnimationName("idle");
}
}}

}


{



}


{

gdjs.MainMenuCode.GDexitBtnObjects1.createFrom(runtimeScene.getObjects("exitBtn"));

gdjs.MainMenuCode.condition0IsTrue_0.val = false;
{
gdjs.MainMenuCode.condition0IsTrue_0.val = gdjs.evtTools.input.cursorOnObject(gdjs.MainMenuCode.mapOfGDgdjs_46MainMenuCode_46GDexitBtnObjects1Objects, runtimeScene, true, false);
}if (gdjs.MainMenuCode.condition0IsTrue_0.val) {
/* Reuse gdjs.MainMenuCode.GDexitBtnObjects1 */
{for(var i = 0, len = gdjs.MainMenuCode.GDexitBtnObjects1.length ;i < len;++i) {
    gdjs.MainMenuCode.GDexitBtnObjects1[i].setAnimationName("hover");
}
}
{ //Subevents
gdjs.MainMenuCode.eventsList0x7575d4(runtimeScene);} //End of subevents
}

}


{

gdjs.MainMenuCode.GDexitBtnObjects1.createFrom(runtimeScene.getObjects("exitBtn"));

gdjs.MainMenuCode.condition0IsTrue_0.val = false;
{
gdjs.MainMenuCode.condition0IsTrue_0.val = gdjs.evtTools.input.cursorOnObject(gdjs.MainMenuCode.mapOfGDgdjs_46MainMenuCode_46GDexitBtnObjects1Objects, runtimeScene, true, true);
}if (gdjs.MainMenuCode.condition0IsTrue_0.val) {
/* Reuse gdjs.MainMenuCode.GDexitBtnObjects1 */
{for(var i = 0, len = gdjs.MainMenuCode.GDexitBtnObjects1.length ;i < len;++i) {
    gdjs.MainMenuCode.GDexitBtnObjects1[i].setAnimationName("idle");
}
}}

}


{



}


{

gdjs.MainMenuCode.GDexitYesObjects1.createFrom(runtimeScene.getObjects("exitYes"));

gdjs.MainMenuCode.condition0IsTrue_0.val = false;
{
gdjs.MainMenuCode.condition0IsTrue_0.val = gdjs.evtTools.input.cursorOnObject(gdjs.MainMenuCode.mapOfGDgdjs_46MainMenuCode_46GDexitYesObjects1Objects, runtimeScene, true, false);
}if (gdjs.MainMenuCode.condition0IsTrue_0.val) {

{ //Subevents
gdjs.MainMenuCode.eventsList0x757fe4(runtimeScene);} //End of subevents
}

}


{

gdjs.MainMenuCode.GDexitNoObjects1.createFrom(runtimeScene.getObjects("exitNo"));

gdjs.MainMenuCode.condition0IsTrue_0.val = false;
{
gdjs.MainMenuCode.condition0IsTrue_0.val = gdjs.evtTools.input.cursorOnObject(gdjs.MainMenuCode.mapOfGDgdjs_46MainMenuCode_46GDexitNoObjects1Objects, runtimeScene, true, false);
}if (gdjs.MainMenuCode.condition0IsTrue_0.val) {

{ //Subevents
gdjs.MainMenuCode.eventsList0x75830c(runtimeScene);} //End of subevents
}

}


}; //End of gdjs.MainMenuCode.eventsList0xb43b0


gdjs.MainMenuCode.func = function(runtimeScene) {
runtimeScene.getOnceTriggers().startNewFrame();

gdjs.MainMenuCode.GDmainMenuBgObjects1.length = 0;
gdjs.MainMenuCode.GDmainMenuBgObjects2.length = 0;
gdjs.MainMenuCode.GDgameLogoObjects1.length = 0;
gdjs.MainMenuCode.GDgameLogoObjects2.length = 0;
gdjs.MainMenuCode.GDstartBtnObjects1.length = 0;
gdjs.MainMenuCode.GDstartBtnObjects2.length = 0;
gdjs.MainMenuCode.GDloadBtnObjects1.length = 0;
gdjs.MainMenuCode.GDloadBtnObjects2.length = 0;
gdjs.MainMenuCode.GDsettingBtnObjects1.length = 0;
gdjs.MainMenuCode.GDsettingBtnObjects2.length = 0;
gdjs.MainMenuCode.GDcreditBtnObjects1.length = 0;
gdjs.MainMenuCode.GDcreditBtnObjects2.length = 0;
gdjs.MainMenuCode.GDexitBtnObjects1.length = 0;
gdjs.MainMenuCode.GDexitBtnObjects2.length = 0;
gdjs.MainMenuCode.GDexitBgObjects1.length = 0;
gdjs.MainMenuCode.GDexitBgObjects2.length = 0;
gdjs.MainMenuCode.GDexitNoObjects1.length = 0;
gdjs.MainMenuCode.GDexitNoObjects2.length = 0;
gdjs.MainMenuCode.GDexitYesObjects1.length = 0;
gdjs.MainMenuCode.GDexitYesObjects2.length = 0;

gdjs.MainMenuCode.eventsList0xb43b0(runtimeScene);
return;

}
gdjs['MainMenuCode'] = gdjs.MainMenuCode;
