gdjs.SplashScreenCode = {};
gdjs.SplashScreenCode.GDcompanyLogoObjects1= [];
gdjs.SplashScreenCode.GDcompanyLogoObjects2= [];

gdjs.SplashScreenCode.conditionTrue_0 = {val:false};
gdjs.SplashScreenCode.condition0IsTrue_0 = {val:false};
gdjs.SplashScreenCode.condition1IsTrue_0 = {val:false};


gdjs.SplashScreenCode.eventsList0xb0b28 = function(runtimeScene) {

{


gdjs.SplashScreenCode.condition0IsTrue_0.val = false;
{
gdjs.SplashScreenCode.condition0IsTrue_0.val = gdjs.evtTools.runtimeScene.sceneJustBegins(runtimeScene);
}if (gdjs.SplashScreenCode.condition0IsTrue_0.val) {
gdjs.SplashScreenCode.GDcompanyLogoObjects1.createFrom(runtimeScene.getObjects("companyLogo"));
{for(var i = 0, len = gdjs.SplashScreenCode.GDcompanyLogoObjects1.length ;i < len;++i) {
    gdjs.SplashScreenCode.GDcompanyLogoObjects1[i].setPosition(gdjs.evtTools.window.getCanvasWidth(runtimeScene)/2 - (gdjs.SplashScreenCode.GDcompanyLogoObjects1[i].getWidth())/2,gdjs.evtTools.window.getCanvasHeight(runtimeScene)/2 - (gdjs.SplashScreenCode.GDcompanyLogoObjects1[i].getHeight())/2);
}
}{for(var i = 0, len = gdjs.SplashScreenCode.GDcompanyLogoObjects1.length ;i < len;++i) {
    gdjs.SplashScreenCode.GDcompanyLogoObjects1[i].setOpacity(0);
}
}}

}


{


{
gdjs.SplashScreenCode.GDcompanyLogoObjects1.createFrom(runtimeScene.getObjects("companyLogo"));
{for(var i = 0, len = gdjs.SplashScreenCode.GDcompanyLogoObjects1.length ;i < len;++i) {
    gdjs.SplashScreenCode.GDcompanyLogoObjects1[i].setOpacity(gdjs.SplashScreenCode.GDcompanyLogoObjects1[i].getOpacity() + (gdjs.evtTools.runtimeScene.getElapsedTimeInSeconds(runtimeScene)*50));
}
}}

}


{

gdjs.SplashScreenCode.GDcompanyLogoObjects1.createFrom(runtimeScene.getObjects("companyLogo"));

gdjs.SplashScreenCode.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.SplashScreenCode.GDcompanyLogoObjects1.length;i<l;++i) {
    if ( gdjs.SplashScreenCode.GDcompanyLogoObjects1[i].getOpacity() >= 255 ) {
        gdjs.SplashScreenCode.condition0IsTrue_0.val = true;
        gdjs.SplashScreenCode.GDcompanyLogoObjects1[k] = gdjs.SplashScreenCode.GDcompanyLogoObjects1[i];
        ++k;
    }
}
gdjs.SplashScreenCode.GDcompanyLogoObjects1.length = k;}if (gdjs.SplashScreenCode.condition0IsTrue_0.val) {
{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "MainMenu", false);
}}

}


}; //End of gdjs.SplashScreenCode.eventsList0xb0b28


gdjs.SplashScreenCode.func = function(runtimeScene) {
runtimeScene.getOnceTriggers().startNewFrame();
gdjs.SplashScreenCode.GDcompanyLogoObjects1.length = 0;
gdjs.SplashScreenCode.GDcompanyLogoObjects2.length = 0;

gdjs.SplashScreenCode.eventsList0xb0b28(runtimeScene);
return;
}
gdjs['SplashScreenCode'] = gdjs.SplashScreenCode;
