gdjs.Level01Code = {};
gdjs.Level01Code.forEachIndex3 = 0;

gdjs.Level01Code.forEachObjects3 = [];

gdjs.Level01Code.forEachTemporary3 = null;

gdjs.Level01Code.forEachTotalCount3 = 0;

gdjs.Level01Code.GDgroundObjects1= [];
gdjs.Level01Code.GDgroundObjects2= [];
gdjs.Level01Code.GDgroundObjects3= [];
gdjs.Level01Code.GDgroundObjects4= [];
gdjs.Level01Code.GDplayerCollisObjects1= [];
gdjs.Level01Code.GDplayerCollisObjects2= [];
gdjs.Level01Code.GDplayerCollisObjects3= [];
gdjs.Level01Code.GDplayerCollisObjects4= [];
gdjs.Level01Code.GDthroughObjects1= [];
gdjs.Level01Code.GDthroughObjects2= [];
gdjs.Level01Code.GDthroughObjects3= [];
gdjs.Level01Code.GDthroughObjects4= [];
gdjs.Level01Code.GDladderObjects1= [];
gdjs.Level01Code.GDladderObjects2= [];
gdjs.Level01Code.GDladderObjects3= [];
gdjs.Level01Code.GDladderObjects4= [];
gdjs.Level01Code.GDnextLevelObjects1= [];
gdjs.Level01Code.GDnextLevelObjects2= [];
gdjs.Level01Code.GDnextLevelObjects3= [];
gdjs.Level01Code.GDnextLevelObjects4= [];
gdjs.Level01Code.GDplayerObjects1= [];
gdjs.Level01Code.GDplayerObjects2= [];
gdjs.Level01Code.GDplayerObjects3= [];
gdjs.Level01Code.GDplayerObjects4= [];
gdjs.Level01Code.GDstarObjects1= [];
gdjs.Level01Code.GDstarObjects2= [];
gdjs.Level01Code.GDstarObjects3= [];
gdjs.Level01Code.GDstarObjects4= [];
gdjs.Level01Code.GDstarPointObjects1= [];
gdjs.Level01Code.GDstarPointObjects2= [];
gdjs.Level01Code.GDstarPointObjects3= [];
gdjs.Level01Code.GDstarPointObjects4= [];
gdjs.Level01Code.GDholeCollisObjects1= [];
gdjs.Level01Code.GDholeCollisObjects2= [];
gdjs.Level01Code.GDholeCollisObjects3= [];
gdjs.Level01Code.GDholeCollisObjects4= [];
gdjs.Level01Code.GDleftButtonObjects1= [];
gdjs.Level01Code.GDleftButtonObjects2= [];
gdjs.Level01Code.GDleftButtonObjects3= [];
gdjs.Level01Code.GDleftButtonObjects4= [];
gdjs.Level01Code.GDrightButtonObjects1= [];
gdjs.Level01Code.GDrightButtonObjects2= [];
gdjs.Level01Code.GDrightButtonObjects3= [];
gdjs.Level01Code.GDrightButtonObjects4= [];
gdjs.Level01Code.GDjumpButtonObjects1= [];
gdjs.Level01Code.GDjumpButtonObjects2= [];
gdjs.Level01Code.GDjumpButtonObjects3= [];
gdjs.Level01Code.GDjumpButtonObjects4= [];
gdjs.Level01Code.GDupButtonObjects1= [];
gdjs.Level01Code.GDupButtonObjects2= [];
gdjs.Level01Code.GDupButtonObjects3= [];
gdjs.Level01Code.GDupButtonObjects4= [];
gdjs.Level01Code.GDbgObjects1= [];
gdjs.Level01Code.GDbgObjects2= [];
gdjs.Level01Code.GDbgObjects3= [];
gdjs.Level01Code.GDbgObjects4= [];
gdjs.Level01Code.GDmgObjects1= [];
gdjs.Level01Code.GDmgObjects2= [];
gdjs.Level01Code.GDmgObjects3= [];
gdjs.Level01Code.GDmgObjects4= [];
gdjs.Level01Code.GDgoUpObjects1= [];
gdjs.Level01Code.GDgoUpObjects2= [];
gdjs.Level01Code.GDgoUpObjects3= [];
gdjs.Level01Code.GDgoUpObjects4= [];
gdjs.Level01Code.GDgoDownObjects1= [];
gdjs.Level01Code.GDgoDownObjects2= [];
gdjs.Level01Code.GDgoDownObjects3= [];
gdjs.Level01Code.GDgoDownObjects4= [];
gdjs.Level01Code.GDgoLeftObjects1= [];
gdjs.Level01Code.GDgoLeftObjects2= [];
gdjs.Level01Code.GDgoLeftObjects3= [];
gdjs.Level01Code.GDgoLeftObjects4= [];
gdjs.Level01Code.GDgoRightObjects1= [];
gdjs.Level01Code.GDgoRightObjects2= [];
gdjs.Level01Code.GDgoRightObjects3= [];
gdjs.Level01Code.GDgoRightObjects4= [];
gdjs.Level01Code.GDenemy1Objects1= [];
gdjs.Level01Code.GDenemy1Objects2= [];
gdjs.Level01Code.GDenemy1Objects3= [];
gdjs.Level01Code.GDenemy1Objects4= [];
gdjs.Level01Code.GDmap01Objects1= [];
gdjs.Level01Code.GDmap01Objects2= [];
gdjs.Level01Code.GDmap01Objects3= [];
gdjs.Level01Code.GDmap01Objects4= [];
gdjs.Level01Code.GDhealthBarObjects1= [];
gdjs.Level01Code.GDhealthBarObjects2= [];
gdjs.Level01Code.GDhealthBarObjects3= [];
gdjs.Level01Code.GDhealthBarObjects4= [];

gdjs.Level01Code.conditionTrue_0 = {val:false};
gdjs.Level01Code.condition0IsTrue_0 = {val:false};
gdjs.Level01Code.condition1IsTrue_0 = {val:false};
gdjs.Level01Code.condition2IsTrue_0 = {val:false};
gdjs.Level01Code.condition3IsTrue_0 = {val:false};


gdjs.Level01Code.eventsList0x75db7c = function(runtimeScene) {

{


gdjs.Level01Code.condition0IsTrue_0.val = false;
{
gdjs.Level01Code.condition0IsTrue_0.val = gdjs.evtTools.input.isKeyPressed(runtimeScene, "Right");
}if (gdjs.Level01Code.condition0IsTrue_0.val) {
gdjs.Level01Code.GDplayerObjects3.createFrom(runtimeScene.getObjects("player"));
{for(var i = 0, len = gdjs.Level01Code.GDplayerObjects3.length ;i < len;++i) {
    gdjs.Level01Code.GDplayerObjects3[i].setAnimationName("run");
}
}{for(var i = 0, len = gdjs.Level01Code.GDplayerObjects3.length ;i < len;++i) {
    gdjs.Level01Code.GDplayerObjects3[i].flipX(false);
}
}}

}


{


gdjs.Level01Code.condition0IsTrue_0.val = false;
{
gdjs.Level01Code.condition0IsTrue_0.val = gdjs.evtTools.input.isKeyPressed(runtimeScene, "Left");
}if (gdjs.Level01Code.condition0IsTrue_0.val) {
gdjs.Level01Code.GDplayerObjects2.createFrom(runtimeScene.getObjects("player"));
{for(var i = 0, len = gdjs.Level01Code.GDplayerObjects2.length ;i < len;++i) {
    gdjs.Level01Code.GDplayerObjects2[i].setAnimationName("run");
}
}{for(var i = 0, len = gdjs.Level01Code.GDplayerObjects2.length ;i < len;++i) {
    gdjs.Level01Code.GDplayerObjects2[i].flipX(true);
}
}}

}


}; //End of gdjs.Level01Code.eventsList0x75db7c
gdjs.Level01Code.eventsList0x75da0c = function(runtimeScene) {

{

gdjs.Level01Code.GDplayerCollisObjects2.createFrom(gdjs.Level01Code.GDplayerCollisObjects1);


gdjs.Level01Code.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.Level01Code.GDplayerCollisObjects2.length;i<l;++i) {
    if ( gdjs.Level01Code.GDplayerCollisObjects2[i].getBehavior("PlatformerObject").isMoving() ) {
        gdjs.Level01Code.condition0IsTrue_0.val = true;
        gdjs.Level01Code.GDplayerCollisObjects2[k] = gdjs.Level01Code.GDplayerCollisObjects2[i];
        ++k;
    }
}
gdjs.Level01Code.GDplayerCollisObjects2.length = k;}if (gdjs.Level01Code.condition0IsTrue_0.val) {

{ //Subevents
gdjs.Level01Code.eventsList0x75db7c(runtimeScene);} //End of subevents
}

}


{

gdjs.Level01Code.GDplayerCollisObjects2.createFrom(gdjs.Level01Code.GDplayerCollisObjects1);


gdjs.Level01Code.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.Level01Code.GDplayerCollisObjects2.length;i<l;++i) {
    if ( !(gdjs.Level01Code.GDplayerCollisObjects2[i].getBehavior("PlatformerObject").isMoving()) ) {
        gdjs.Level01Code.condition0IsTrue_0.val = true;
        gdjs.Level01Code.GDplayerCollisObjects2[k] = gdjs.Level01Code.GDplayerCollisObjects2[i];
        ++k;
    }
}
gdjs.Level01Code.GDplayerCollisObjects2.length = k;}if (gdjs.Level01Code.condition0IsTrue_0.val) {
gdjs.Level01Code.GDplayerObjects2.createFrom(runtimeScene.getObjects("player"));
{for(var i = 0, len = gdjs.Level01Code.GDplayerObjects2.length ;i < len;++i) {
    gdjs.Level01Code.GDplayerObjects2[i].setAnimationName("idle");
}
}}

}


{

/* Reuse gdjs.Level01Code.GDplayerCollisObjects1 */

gdjs.Level01Code.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.Level01Code.GDplayerCollisObjects1.length;i<l;++i) {
    if ( gdjs.Level01Code.GDplayerCollisObjects1[i].getBehavior("PlatformerObject").isJumping() ) {
        gdjs.Level01Code.condition0IsTrue_0.val = true;
        gdjs.Level01Code.GDplayerCollisObjects1[k] = gdjs.Level01Code.GDplayerCollisObjects1[i];
        ++k;
    }
}
gdjs.Level01Code.GDplayerCollisObjects1.length = k;}if (gdjs.Level01Code.condition0IsTrue_0.val) {
gdjs.Level01Code.GDplayerObjects1.createFrom(runtimeScene.getObjects("player"));
{for(var i = 0, len = gdjs.Level01Code.GDplayerObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDplayerObjects1[i].setAnimationName("jump");
}
}}

}


}; //End of gdjs.Level01Code.eventsList0x75da0c
gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDplayerCollisObjects1Objects = Hashtable.newFrom({"playerCollis": gdjs.Level01Code.GDplayerCollisObjects1});gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDstarObjects1Objects = Hashtable.newFrom({"star": gdjs.Level01Code.GDstarObjects1});gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDplayerCollisObjects1Objects = Hashtable.newFrom({"playerCollis": gdjs.Level01Code.GDplayerCollisObjects1});gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDholeCollisObjects1Objects = Hashtable.newFrom({"holeCollis": gdjs.Level01Code.GDholeCollisObjects1});gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDgoLeftObjects1Objects = Hashtable.newFrom({"goLeft": gdjs.Level01Code.GDgoLeftObjects1});gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDenemy1Objects1Objects = Hashtable.newFrom({"enemy1": gdjs.Level01Code.GDenemy1Objects1});gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDgoRightObjects1Objects = Hashtable.newFrom({"goRight": gdjs.Level01Code.GDgoRightObjects1});gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDenemy1Objects1Objects = Hashtable.newFrom({"enemy1": gdjs.Level01Code.GDenemy1Objects1});gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDplayerCollisObjects1Objects = Hashtable.newFrom({"playerCollis": gdjs.Level01Code.GDplayerCollisObjects1});gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDenemy1Objects1Objects = Hashtable.newFrom({"enemy1": gdjs.Level01Code.GDenemy1Objects1});gdjs.Level01Code.eventsList0x7604b4 = function(runtimeScene) {

}; //End of gdjs.Level01Code.eventsList0x7604b4
gdjs.Level01Code.eventsList0x75feac = function(runtimeScene) {

{

gdjs.Level01Code.GDenemy1Objects2.createFrom(gdjs.Level01Code.GDenemy1Objects1);


for(gdjs.Level01Code.forEachIndex3 = 0;gdjs.Level01Code.forEachIndex3 < gdjs.Level01Code.GDenemy1Objects2.length;++gdjs.Level01Code.forEachIndex3) {
gdjs.Level01Code.GDenemy1Objects3.length = 0;


gdjs.Level01Code.forEachTemporary3 = gdjs.Level01Code.GDenemy1Objects2[gdjs.Level01Code.forEachIndex3];
gdjs.Level01Code.GDenemy1Objects3.push(gdjs.Level01Code.forEachTemporary3);
if (true) {
{runtimeScene.getGame().getVariables().getFromIndex(0).add(50);
}}
}

}


{


{
}

}


}; //End of gdjs.Level01Code.eventsList0x75feac
gdjs.Level01Code.eventsList0x75fd54 = function(runtimeScene) {

{

/* Reuse gdjs.Level01Code.GDplayerCollisObjects1 */

gdjs.Level01Code.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.Level01Code.GDplayerCollisObjects1.length;i<l;++i) {
    if ( gdjs.Level01Code.GDplayerCollisObjects1[i].getBehavior("PlatformerObject").isFalling() ) {
        gdjs.Level01Code.condition0IsTrue_0.val = true;
        gdjs.Level01Code.GDplayerCollisObjects1[k] = gdjs.Level01Code.GDplayerCollisObjects1[i];
        ++k;
    }
}
gdjs.Level01Code.GDplayerCollisObjects1.length = k;}if (gdjs.Level01Code.condition0IsTrue_0.val) {
/* Reuse gdjs.Level01Code.GDenemy1Objects1 */
/* Reuse gdjs.Level01Code.GDplayerCollisObjects1 */
{for(var i = 0, len = gdjs.Level01Code.GDenemy1Objects1.length ;i < len;++i) {
    gdjs.Level01Code.GDenemy1Objects1[i].setAnimationName("death");
}
}{for(var i = 0, len = gdjs.Level01Code.GDplayerCollisObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDplayerCollisObjects1[i].getBehavior("PlatformerObject").setCanJump();
}
}{for(var i = 0, len = gdjs.Level01Code.GDplayerCollisObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDplayerCollisObjects1[i].getBehavior("PlatformerObject").simulateJumpKey();
}
}{for(var i = 0, len = gdjs.Level01Code.GDenemy1Objects1.length ;i < len;++i) {
    gdjs.Level01Code.GDenemy1Objects1[i].activateBehavior("PlatformerObject", true);
}
}{for(var i = 0, len = gdjs.Level01Code.GDenemy1Objects1.length ;i < len;++i) {
    gdjs.Level01Code.GDenemy1Objects1[i].getBehavior("PlatformerObject").setGravity(1500);
}
}
{ //Subevents
gdjs.Level01Code.eventsList0x75feac(runtimeScene);} //End of subevents
}

}


}; //End of gdjs.Level01Code.eventsList0x75fd54
gdjs.Level01Code.eventsList0x76094c = function(runtimeScene) {

{

/* Reuse gdjs.Level01Code.GDenemy1Objects1 */

gdjs.Level01Code.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.Level01Code.GDenemy1Objects1.length;i<l;++i) {
    if ( gdjs.Level01Code.GDenemy1Objects1[i].getOpacity() <= 0 ) {
        gdjs.Level01Code.condition0IsTrue_0.val = true;
        gdjs.Level01Code.GDenemy1Objects1[k] = gdjs.Level01Code.GDenemy1Objects1[i];
        ++k;
    }
}
gdjs.Level01Code.GDenemy1Objects1.length = k;}if (gdjs.Level01Code.condition0IsTrue_0.val) {
/* Reuse gdjs.Level01Code.GDenemy1Objects1 */
{for(var i = 0, len = gdjs.Level01Code.GDenemy1Objects1.length ;i < len;++i) {
    gdjs.Level01Code.GDenemy1Objects1[i].deleteFromScene(runtimeScene);
}
}}

}


}; //End of gdjs.Level01Code.eventsList0x76094c
gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDjumpButtonObjects1Objects = Hashtable.newFrom({"jumpButton": gdjs.Level01Code.GDjumpButtonObjects1});gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDrightButtonObjects1Objects = Hashtable.newFrom({"rightButton": gdjs.Level01Code.GDrightButtonObjects1});gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDleftButtonObjects1Objects = Hashtable.newFrom({"leftButton": gdjs.Level01Code.GDleftButtonObjects1});gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDupButtonObjects1Objects = Hashtable.newFrom({"upButton": gdjs.Level01Code.GDupButtonObjects1});gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDgoUpObjects1Objects = Hashtable.newFrom({"goUp": gdjs.Level01Code.GDgoUpObjects1});gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDthroughObjects1Objects = Hashtable.newFrom({"through": gdjs.Level01Code.GDthroughObjects1});gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDgoDownObjects1Objects = Hashtable.newFrom({"goDown": gdjs.Level01Code.GDgoDownObjects1});gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDthroughObjects1Objects = Hashtable.newFrom({"through": gdjs.Level01Code.GDthroughObjects1});gdjs.Level01Code.eventsList0xb43b0 = function(runtimeScene) {

{


gdjs.Level01Code.condition0IsTrue_0.val = false;
{
gdjs.Level01Code.condition0IsTrue_0.val = gdjs.evtTools.runtimeScene.sceneJustBegins(runtimeScene);
}if (gdjs.Level01Code.condition0IsTrue_0.val) {
{gdjs.evtTools.sound.playSound(runtimeScene, "assets\\sound\\Patriotic_March.ogg", true, 25, 1);
}}

}


{



}


{


{
gdjs.Level01Code.GDplayerCollisObjects1.createFrom(runtimeScene.getObjects("playerCollis"));
{gdjs.evtTools.camera.setCameraX(runtimeScene, (( gdjs.Level01Code.GDplayerCollisObjects1.length === 0 ) ? 0 :gdjs.Level01Code.GDplayerCollisObjects1[0].getPointX("")), "", 0);
}}

}


{


{
gdjs.Level01Code.GDplayerCollisObjects1.createFrom(runtimeScene.getObjects("playerCollis"));
{gdjs.evtTools.camera.setCameraX(runtimeScene, (( gdjs.Level01Code.GDplayerCollisObjects1.length === 0 ) ? 0 :gdjs.Level01Code.GDplayerCollisObjects1[0].getPointX("")) * 0.1, "bg1", 0);
}}

}


{


{
}

}


{


{
gdjs.Level01Code.GDplayerCollisObjects1.createFrom(runtimeScene.getObjects("playerCollis"));
{gdjs.evtTools.camera.setCameraX(runtimeScene, (( gdjs.Level01Code.GDplayerCollisObjects1.length === 0 ) ? 0 :gdjs.Level01Code.GDplayerCollisObjects1[0].getPointX("")) * 0.3, "bg2", 0);
}}

}


{


{
}

}


{


{
}

}


{



}


{


{
gdjs.Level01Code.GDplayerObjects1.createFrom(runtimeScene.getObjects("player"));
gdjs.Level01Code.GDplayerCollisObjects1.createFrom(runtimeScene.getObjects("playerCollis"));
{for(var i = 0, len = gdjs.Level01Code.GDplayerObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDplayerObjects1[i].setPosition((( gdjs.Level01Code.GDplayerCollisObjects1.length === 0 ) ? 0 :gdjs.Level01Code.GDplayerCollisObjects1[0].getPointX("")) - 10,(( gdjs.Level01Code.GDplayerCollisObjects1.length === 0 ) ? 0 :gdjs.Level01Code.GDplayerCollisObjects1[0].getPointY("")) - 8);
}
}{for(var i = 0, len = gdjs.Level01Code.GDplayerCollisObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDplayerCollisObjects1[i].setOpacity(0);
}
}}

}


{

gdjs.Level01Code.GDplayerCollisObjects1.createFrom(runtimeScene.getObjects("playerCollis"));

gdjs.Level01Code.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.Level01Code.GDplayerCollisObjects1.length;i<l;++i) {
    if ( gdjs.Level01Code.GDplayerCollisObjects1[i].getBehavior("PlatformerObject").isOnFloor() ) {
        gdjs.Level01Code.condition0IsTrue_0.val = true;
        gdjs.Level01Code.GDplayerCollisObjects1[k] = gdjs.Level01Code.GDplayerCollisObjects1[i];
        ++k;
    }
}
gdjs.Level01Code.GDplayerCollisObjects1.length = k;}if (gdjs.Level01Code.condition0IsTrue_0.val) {

{ //Subevents
gdjs.Level01Code.eventsList0x75da0c(runtimeScene);} //End of subevents
}

}


{

gdjs.Level01Code.GDplayerCollisObjects1.createFrom(runtimeScene.getObjects("playerCollis"));

gdjs.Level01Code.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.Level01Code.GDplayerCollisObjects1.length;i<l;++i) {
    if ( gdjs.Level01Code.GDplayerCollisObjects1[i].getBehavior("PlatformerObject").isFalling() ) {
        gdjs.Level01Code.condition0IsTrue_0.val = true;
        gdjs.Level01Code.GDplayerCollisObjects1[k] = gdjs.Level01Code.GDplayerCollisObjects1[i];
        ++k;
    }
}
gdjs.Level01Code.GDplayerCollisObjects1.length = k;}if (gdjs.Level01Code.condition0IsTrue_0.val) {
gdjs.Level01Code.GDplayerObjects1.createFrom(runtimeScene.getObjects("player"));
{for(var i = 0, len = gdjs.Level01Code.GDplayerObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDplayerObjects1[i].setAnimationName("falling");
}
}}

}


{

gdjs.Level01Code.GDplayerCollisObjects1.createFrom(runtimeScene.getObjects("playerCollis"));

gdjs.Level01Code.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.Level01Code.GDplayerCollisObjects1.length;i<l;++i) {
    if ( gdjs.Level01Code.GDplayerCollisObjects1[i].getBehavior("PlatformerObject").isOnLadder() ) {
        gdjs.Level01Code.condition0IsTrue_0.val = true;
        gdjs.Level01Code.GDplayerCollisObjects1[k] = gdjs.Level01Code.GDplayerCollisObjects1[i];
        ++k;
    }
}
gdjs.Level01Code.GDplayerCollisObjects1.length = k;}if (gdjs.Level01Code.condition0IsTrue_0.val) {
gdjs.Level01Code.GDplayerObjects1.createFrom(runtimeScene.getObjects("player"));
{for(var i = 0, len = gdjs.Level01Code.GDplayerObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDplayerObjects1[i].setAnimationName("climbing");
}
}}

}


{


{
}

}


{


{
}

}


{



}


{

gdjs.Level01Code.GDplayerCollisObjects1.createFrom(runtimeScene.getObjects("playerCollis"));
gdjs.Level01Code.GDstarObjects1.createFrom(runtimeScene.getObjects("star"));

gdjs.Level01Code.condition0IsTrue_0.val = false;
{
gdjs.Level01Code.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDplayerCollisObjects1Objects, gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDstarObjects1Objects, false, runtimeScene, false);
}if (gdjs.Level01Code.condition0IsTrue_0.val) {
/* Reuse gdjs.Level01Code.GDstarObjects1 */
gdjs.Level01Code.GDstarPointObjects1.createFrom(runtimeScene.getObjects("starPoint"));
{runtimeScene.getGame().getVariables().getFromIndex(0).add(10);
}{for(var i = 0, len = gdjs.Level01Code.GDstarPointObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDstarPointObjects1[i].setString(gdjs.evtTools.common.getVariableString(runtimeScene.getGame().getVariables().getFromIndex(0)));
}
}{for(var i = 0, len = gdjs.Level01Code.GDstarObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDstarObjects1[i].deleteFromScene(runtimeScene);
}
}}

}


{



}


{

gdjs.Level01Code.GDholeCollisObjects1.createFrom(runtimeScene.getObjects("holeCollis"));
gdjs.Level01Code.GDplayerCollisObjects1.createFrom(runtimeScene.getObjects("playerCollis"));

gdjs.Level01Code.condition0IsTrue_0.val = false;
{
gdjs.Level01Code.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDplayerCollisObjects1Objects, gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDholeCollisObjects1Objects, false, runtimeScene, false);
}if (gdjs.Level01Code.condition0IsTrue_0.val) {
gdjs.Level01Code.GDplayerObjects1.createFrom(runtimeScene.getObjects("player"));
{for(var i = 0, len = gdjs.Level01Code.GDplayerObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDplayerObjects1[i].setAnimationName("hurt");
}
}{runtimeScene.getGame().getVariables().getFromIndex(0).setNumber(0);
}{gdjs.evtTools.runtimeScene.pushScene(runtimeScene, "Level01");
}}

}


{

gdjs.Level01Code.GDenemy1Objects1.createFrom(runtimeScene.getObjects("enemy1"));
gdjs.Level01Code.GDgoLeftObjects1.createFrom(runtimeScene.getObjects("goLeft"));

gdjs.Level01Code.condition0IsTrue_0.val = false;
{
gdjs.Level01Code.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDgoLeftObjects1Objects, gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDenemy1Objects1Objects, false, runtimeScene, false);
}if (gdjs.Level01Code.condition0IsTrue_0.val) {
/* Reuse gdjs.Level01Code.GDenemy1Objects1 */
{for(var i = 0, len = gdjs.Level01Code.GDenemy1Objects1.length ;i < len;++i) {
    gdjs.Level01Code.GDenemy1Objects1[i].returnVariable(gdjs.Level01Code.GDenemy1Objects1[i].getVariables().getFromIndex(0)).setNumber(1);
}
}}

}


{

gdjs.Level01Code.GDenemy1Objects1.createFrom(runtimeScene.getObjects("enemy1"));
gdjs.Level01Code.GDgoRightObjects1.createFrom(runtimeScene.getObjects("goRight"));

gdjs.Level01Code.condition0IsTrue_0.val = false;
{
gdjs.Level01Code.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDgoRightObjects1Objects, gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDenemy1Objects1Objects, false, runtimeScene, false);
}if (gdjs.Level01Code.condition0IsTrue_0.val) {
/* Reuse gdjs.Level01Code.GDenemy1Objects1 */
{for(var i = 0, len = gdjs.Level01Code.GDenemy1Objects1.length ;i < len;++i) {
    gdjs.Level01Code.GDenemy1Objects1[i].returnVariable(gdjs.Level01Code.GDenemy1Objects1[i].getVariables().getFromIndex(0)).setNumber(0);
}
}}

}


{

gdjs.Level01Code.GDenemy1Objects1.createFrom(runtimeScene.getObjects("enemy1"));

gdjs.Level01Code.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.Level01Code.GDenemy1Objects1.length;i<l;++i) {
    if ( gdjs.Level01Code.GDenemy1Objects1[i].getVariableNumber(gdjs.Level01Code.GDenemy1Objects1[i].getVariables().getFromIndex(0)) == 1 ) {
        gdjs.Level01Code.condition0IsTrue_0.val = true;
        gdjs.Level01Code.GDenemy1Objects1[k] = gdjs.Level01Code.GDenemy1Objects1[i];
        ++k;
    }
}
gdjs.Level01Code.GDenemy1Objects1.length = k;}if (gdjs.Level01Code.condition0IsTrue_0.val) {
/* Reuse gdjs.Level01Code.GDenemy1Objects1 */
{for(var i = 0, len = gdjs.Level01Code.GDenemy1Objects1.length ;i < len;++i) {
    gdjs.Level01Code.GDenemy1Objects1[i].getBehavior("PlatformerObject").simulateLeftKey();
}
}{for(var i = 0, len = gdjs.Level01Code.GDenemy1Objects1.length ;i < len;++i) {
    gdjs.Level01Code.GDenemy1Objects1[i].flipX(false);
}
}}

}


{

gdjs.Level01Code.GDenemy1Objects1.createFrom(runtimeScene.getObjects("enemy1"));

gdjs.Level01Code.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.Level01Code.GDenemy1Objects1.length;i<l;++i) {
    if ( gdjs.Level01Code.GDenemy1Objects1[i].getVariableNumber(gdjs.Level01Code.GDenemy1Objects1[i].getVariables().getFromIndex(0)) == 0 ) {
        gdjs.Level01Code.condition0IsTrue_0.val = true;
        gdjs.Level01Code.GDenemy1Objects1[k] = gdjs.Level01Code.GDenemy1Objects1[i];
        ++k;
    }
}
gdjs.Level01Code.GDenemy1Objects1.length = k;}if (gdjs.Level01Code.condition0IsTrue_0.val) {
/* Reuse gdjs.Level01Code.GDenemy1Objects1 */
{for(var i = 0, len = gdjs.Level01Code.GDenemy1Objects1.length ;i < len;++i) {
    gdjs.Level01Code.GDenemy1Objects1[i].getBehavior("PlatformerObject").simulateRightKey();
}
}{for(var i = 0, len = gdjs.Level01Code.GDenemy1Objects1.length ;i < len;++i) {
    gdjs.Level01Code.GDenemy1Objects1[i].flipX(true);
}
}}

}


{



}


{

gdjs.Level01Code.GDenemy1Objects1.createFrom(runtimeScene.getObjects("enemy1"));
gdjs.Level01Code.GDplayerCollisObjects1.createFrom(runtimeScene.getObjects("playerCollis"));

gdjs.Level01Code.condition0IsTrue_0.val = false;
{
gdjs.Level01Code.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDplayerCollisObjects1Objects, gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDenemy1Objects1Objects, false, runtimeScene, false);
}if (gdjs.Level01Code.condition0IsTrue_0.val) {

{ //Subevents
gdjs.Level01Code.eventsList0x75fd54(runtimeScene);} //End of subevents
}

}


{

gdjs.Level01Code.GDenemy1Objects1.createFrom(runtimeScene.getObjects("enemy1"));
gdjs.Level01Code.GDplayerCollisObjects1.createFrom(runtimeScene.getObjects("playerCollis"));

gdjs.Level01Code.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.Level01Code.GDplayerCollisObjects1.length;i<l;++i) {
    if ( gdjs.Level01Code.GDplayerCollisObjects1[i].getY() >= (( gdjs.Level01Code.GDenemy1Objects1.length === 0 ) ? 0 :gdjs.Level01Code.GDenemy1Objects1[0].getPointY("")) - (gdjs.Level01Code.GDplayerCollisObjects1[i].getHeight()) + (( gdjs.Level01Code.GDenemy1Objects1.length === 0 ) ? 0 :gdjs.Level01Code.GDenemy1Objects1[0].getHeight()) / 2 ) {
        gdjs.Level01Code.condition0IsTrue_0.val = true;
        gdjs.Level01Code.GDplayerCollisObjects1[k] = gdjs.Level01Code.GDplayerCollisObjects1[i];
        ++k;
    }
}
gdjs.Level01Code.GDplayerCollisObjects1.length = k;}if (gdjs.Level01Code.condition0IsTrue_0.val) {
}

}


{



}


{

gdjs.Level01Code.GDenemy1Objects1.createFrom(runtimeScene.getObjects("enemy1"));

gdjs.Level01Code.condition0IsTrue_0.val = false;
gdjs.Level01Code.condition1IsTrue_0.val = false;
gdjs.Level01Code.condition2IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.Level01Code.GDenemy1Objects1.length;i<l;++i) {
    if ( gdjs.Level01Code.GDenemy1Objects1[i].isCurrentAnimationName("death") ) {
        gdjs.Level01Code.condition0IsTrue_0.val = true;
        gdjs.Level01Code.GDenemy1Objects1[k] = gdjs.Level01Code.GDenemy1Objects1[i];
        ++k;
    }
}
gdjs.Level01Code.GDenemy1Objects1.length = k;}if ( gdjs.Level01Code.condition0IsTrue_0.val ) {
{
for(var i = 0, k = 0, l = gdjs.Level01Code.GDenemy1Objects1.length;i<l;++i) {
    if ( gdjs.Level01Code.GDenemy1Objects1[i].getBehavior("PlatformerObject").isOnFloor() ) {
        gdjs.Level01Code.condition1IsTrue_0.val = true;
        gdjs.Level01Code.GDenemy1Objects1[k] = gdjs.Level01Code.GDenemy1Objects1[i];
        ++k;
    }
}
gdjs.Level01Code.GDenemy1Objects1.length = k;}if ( gdjs.Level01Code.condition1IsTrue_0.val ) {
{
for(var i = 0, k = 0, l = gdjs.Level01Code.GDenemy1Objects1.length;i<l;++i) {
    if ( !(gdjs.Level01Code.GDenemy1Objects1[i].getBehavior("PlatformerObject").isMoving()) ) {
        gdjs.Level01Code.condition2IsTrue_0.val = true;
        gdjs.Level01Code.GDenemy1Objects1[k] = gdjs.Level01Code.GDenemy1Objects1[i];
        ++k;
    }
}
gdjs.Level01Code.GDenemy1Objects1.length = k;}}
}
if (gdjs.Level01Code.condition2IsTrue_0.val) {
/* Reuse gdjs.Level01Code.GDenemy1Objects1 */
{for(var i = 0, len = gdjs.Level01Code.GDenemy1Objects1.length ;i < len;++i) {
    gdjs.Level01Code.GDenemy1Objects1[i].activateBehavior("PlatformerObject", false);
}
}{for(var i = 0, len = gdjs.Level01Code.GDenemy1Objects1.length ;i < len;++i) {
    gdjs.Level01Code.GDenemy1Objects1[i].setOpacity(gdjs.Level01Code.GDenemy1Objects1[i].getOpacity() - (250 * gdjs.evtTools.runtimeScene.getElapsedTimeInSeconds(runtimeScene)));
}
}
{ //Subevents
gdjs.Level01Code.eventsList0x76094c(runtimeScene);} //End of subevents
}

}


{



}


{


gdjs.Level01Code.condition0IsTrue_0.val = false;
{
gdjs.Level01Code.condition0IsTrue_0.val = gdjs.evtTools.runtimeScene.sceneJustBegins(runtimeScene);
}if (gdjs.Level01Code.condition0IsTrue_0.val) {
{gdjs.evtTools.input.touchSimulateMouse(runtimeScene, false);
}}

}


{


gdjs.Level01Code.condition0IsTrue_0.val = false;
{
gdjs.Level01Code.condition0IsTrue_0.val = !(gdjs.evtTools.systemInfo.isMobile());
}if (gdjs.Level01Code.condition0IsTrue_0.val) {
{gdjs.evtTools.camera.hideLayer(runtimeScene, "VisualController");
}}

}


{

gdjs.Level01Code.GDjumpButtonObjects1.createFrom(runtimeScene.getObjects("jumpButton"));

gdjs.Level01Code.condition0IsTrue_0.val = false;
{
gdjs.Level01Code.condition0IsTrue_0.val = gdjs.evtTools.input.cursorOnObject(gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDjumpButtonObjects1Objects, runtimeScene, true, false);
}if (gdjs.Level01Code.condition0IsTrue_0.val) {
gdjs.Level01Code.GDplayerObjects1.createFrom(runtimeScene.getObjects("player"));
gdjs.Level01Code.GDplayerCollisObjects1.createFrom(runtimeScene.getObjects("playerCollis"));
{for(var i = 0, len = gdjs.Level01Code.GDplayerCollisObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDplayerCollisObjects1[i].getBehavior("PlatformerObject").simulateJumpKey();
}
}{for(var i = 0, len = gdjs.Level01Code.GDplayerObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDplayerObjects1[i].setAnimationName("jump");
}
}}

}


{

gdjs.Level01Code.GDrightButtonObjects1.createFrom(runtimeScene.getObjects("rightButton"));

gdjs.Level01Code.condition0IsTrue_0.val = false;
{
gdjs.Level01Code.condition0IsTrue_0.val = gdjs.evtTools.input.cursorOnObject(gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDrightButtonObjects1Objects, runtimeScene, true, false);
}if (gdjs.Level01Code.condition0IsTrue_0.val) {
gdjs.Level01Code.GDplayerObjects1.createFrom(runtimeScene.getObjects("player"));
gdjs.Level01Code.GDplayerCollisObjects1.createFrom(runtimeScene.getObjects("playerCollis"));
{for(var i = 0, len = gdjs.Level01Code.GDplayerCollisObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDplayerCollisObjects1[i].getBehavior("PlatformerObject").simulateRightKey();
}
}{for(var i = 0, len = gdjs.Level01Code.GDplayerObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDplayerObjects1[i].flipX(false);
}
}{for(var i = 0, len = gdjs.Level01Code.GDplayerObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDplayerObjects1[i].setAnimationName("run");
}
}}

}


{

gdjs.Level01Code.GDleftButtonObjects1.createFrom(runtimeScene.getObjects("leftButton"));

gdjs.Level01Code.condition0IsTrue_0.val = false;
{
gdjs.Level01Code.condition0IsTrue_0.val = gdjs.evtTools.input.cursorOnObject(gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDleftButtonObjects1Objects, runtimeScene, true, false);
}if (gdjs.Level01Code.condition0IsTrue_0.val) {
gdjs.Level01Code.GDplayerObjects1.createFrom(runtimeScene.getObjects("player"));
gdjs.Level01Code.GDplayerCollisObjects1.createFrom(runtimeScene.getObjects("playerCollis"));
{for(var i = 0, len = gdjs.Level01Code.GDplayerCollisObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDplayerCollisObjects1[i].getBehavior("PlatformerObject").simulateLeftKey();
}
}{for(var i = 0, len = gdjs.Level01Code.GDplayerObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDplayerObjects1[i].flipX(true);
}
}{for(var i = 0, len = gdjs.Level01Code.GDplayerObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDplayerObjects1[i].setAnimationName("run");
}
}}

}


{

gdjs.Level01Code.GDupButtonObjects1.createFrom(runtimeScene.getObjects("upButton"));

gdjs.Level01Code.condition0IsTrue_0.val = false;
{
gdjs.Level01Code.condition0IsTrue_0.val = gdjs.evtTools.input.cursorOnObject(gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDupButtonObjects1Objects, runtimeScene, true, false);
}if (gdjs.Level01Code.condition0IsTrue_0.val) {
gdjs.Level01Code.GDplayerCollisObjects1.createFrom(runtimeScene.getObjects("playerCollis"));
{for(var i = 0, len = gdjs.Level01Code.GDplayerCollisObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDplayerCollisObjects1[i].getBehavior("PlatformerObject").simulateLadderKey();
}
}{for(var i = 0, len = gdjs.Level01Code.GDplayerCollisObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDplayerCollisObjects1[i].getBehavior("PlatformerObject").simulateUpKey();
}
}}

}


{

gdjs.Level01Code.GDplayerCollisObjects1.createFrom(runtimeScene.getObjects("playerCollis"));

gdjs.Level01Code.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.Level01Code.GDplayerCollisObjects1.length;i<l;++i) {
    if ( gdjs.Level01Code.GDplayerCollisObjects1[i].getBehavior("PlatformerObject").isOnLadder() ) {
        gdjs.Level01Code.condition0IsTrue_0.val = true;
        gdjs.Level01Code.GDplayerCollisObjects1[k] = gdjs.Level01Code.GDplayerCollisObjects1[i];
        ++k;
    }
}
gdjs.Level01Code.GDplayerCollisObjects1.length = k;}if (gdjs.Level01Code.condition0IsTrue_0.val) {
gdjs.Level01Code.GDplayerObjects1.createFrom(runtimeScene.getObjects("player"));
{for(var i = 0, len = gdjs.Level01Code.GDplayerObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDplayerObjects1[i].setAnimationName("climbing");
}
}}

}


{

gdjs.Level01Code.GDplayerCollisObjects1.createFrom(runtimeScene.getObjects("playerCollis"));

gdjs.Level01Code.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.Level01Code.GDplayerCollisObjects1.length;i<l;++i) {
    if ( gdjs.Level01Code.GDplayerCollisObjects1[i].getBehavior("PlatformerObject").isFalling() ) {
        gdjs.Level01Code.condition0IsTrue_0.val = true;
        gdjs.Level01Code.GDplayerCollisObjects1[k] = gdjs.Level01Code.GDplayerCollisObjects1[i];
        ++k;
    }
}
gdjs.Level01Code.GDplayerCollisObjects1.length = k;}if (gdjs.Level01Code.condition0IsTrue_0.val) {
gdjs.Level01Code.GDplayerObjects1.createFrom(runtimeScene.getObjects("player"));
{for(var i = 0, len = gdjs.Level01Code.GDplayerObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDplayerObjects1[i].setAnimationName("falling");
}
}}

}


{



}


{


gdjs.Level01Code.condition0IsTrue_0.val = false;
{
gdjs.Level01Code.condition0IsTrue_0.val = gdjs.evtTools.runtimeScene.sceneJustBegins(runtimeScene);
}if (gdjs.Level01Code.condition0IsTrue_0.val) {
gdjs.Level01Code.GDthroughObjects1.createFrom(runtimeScene.getObjects("through"));
{for(var i = 0, len = gdjs.Level01Code.GDthroughObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDthroughObjects1[i].activateBehavior("", false);
}
}}

}


{

gdjs.Level01Code.GDgoUpObjects1.createFrom(runtimeScene.getObjects("goUp"));
gdjs.Level01Code.GDthroughObjects1.createFrom(runtimeScene.getObjects("through"));

gdjs.Level01Code.condition0IsTrue_0.val = false;
{
gdjs.Level01Code.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDgoUpObjects1Objects, gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDthroughObjects1Objects, false, runtimeScene, false);
}if (gdjs.Level01Code.condition0IsTrue_0.val) {
/* Reuse gdjs.Level01Code.GDthroughObjects1 */
{for(var i = 0, len = gdjs.Level01Code.GDthroughObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDthroughObjects1[i].returnVariable(gdjs.Level01Code.GDthroughObjects1[i].getVariables().getFromIndex(0)).setNumber(1);
}
}}

}


{

gdjs.Level01Code.GDgoDownObjects1.createFrom(runtimeScene.getObjects("goDown"));
gdjs.Level01Code.GDthroughObjects1.createFrom(runtimeScene.getObjects("through"));

gdjs.Level01Code.condition0IsTrue_0.val = false;
{
gdjs.Level01Code.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDgoDownObjects1Objects, gdjs.Level01Code.mapOfGDgdjs_46Level01Code_46GDthroughObjects1Objects, false, runtimeScene, false);
}if (gdjs.Level01Code.condition0IsTrue_0.val) {
/* Reuse gdjs.Level01Code.GDthroughObjects1 */
{for(var i = 0, len = gdjs.Level01Code.GDthroughObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDthroughObjects1[i].returnVariable(gdjs.Level01Code.GDthroughObjects1[i].getVariables().getFromIndex(0)).setNumber(0);
}
}}

}


{

gdjs.Level01Code.GDthroughObjects1.createFrom(runtimeScene.getObjects("through"));

gdjs.Level01Code.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.Level01Code.GDthroughObjects1.length;i<l;++i) {
    if ( gdjs.Level01Code.GDthroughObjects1[i].getVariableNumber(gdjs.Level01Code.GDthroughObjects1[i].getVariables().getFromIndex(0)) == 1 ) {
        gdjs.Level01Code.condition0IsTrue_0.val = true;
        gdjs.Level01Code.GDthroughObjects1[k] = gdjs.Level01Code.GDthroughObjects1[i];
        ++k;
    }
}
gdjs.Level01Code.GDthroughObjects1.length = k;}if (gdjs.Level01Code.condition0IsTrue_0.val) {
/* Reuse gdjs.Level01Code.GDthroughObjects1 */
{for(var i = 0, len = gdjs.Level01Code.GDthroughObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDthroughObjects1[i].addForce(0, -(30), 0);
}
}}

}


{

gdjs.Level01Code.GDthroughObjects1.createFrom(runtimeScene.getObjects("through"));

gdjs.Level01Code.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.Level01Code.GDthroughObjects1.length;i<l;++i) {
    if ( gdjs.Level01Code.GDthroughObjects1[i].getVariableNumber(gdjs.Level01Code.GDthroughObjects1[i].getVariables().getFromIndex(0)) == 0 ) {
        gdjs.Level01Code.condition0IsTrue_0.val = true;
        gdjs.Level01Code.GDthroughObjects1[k] = gdjs.Level01Code.GDthroughObjects1[i];
        ++k;
    }
}
gdjs.Level01Code.GDthroughObjects1.length = k;}if (gdjs.Level01Code.condition0IsTrue_0.val) {
/* Reuse gdjs.Level01Code.GDthroughObjects1 */
{for(var i = 0, len = gdjs.Level01Code.GDthroughObjects1.length ;i < len;++i) {
    gdjs.Level01Code.GDthroughObjects1[i].addForce(0, 30, 0);
}
}}

}


}; //End of gdjs.Level01Code.eventsList0xb43b0


gdjs.Level01Code.func = function(runtimeScene) {
runtimeScene.getOnceTriggers().startNewFrame();

gdjs.Level01Code.GDgroundObjects1.length = 0;
gdjs.Level01Code.GDgroundObjects2.length = 0;
gdjs.Level01Code.GDgroundObjects3.length = 0;
gdjs.Level01Code.GDgroundObjects4.length = 0;
gdjs.Level01Code.GDplayerCollisObjects1.length = 0;
gdjs.Level01Code.GDplayerCollisObjects2.length = 0;
gdjs.Level01Code.GDplayerCollisObjects3.length = 0;
gdjs.Level01Code.GDplayerCollisObjects4.length = 0;
gdjs.Level01Code.GDthroughObjects1.length = 0;
gdjs.Level01Code.GDthroughObjects2.length = 0;
gdjs.Level01Code.GDthroughObjects3.length = 0;
gdjs.Level01Code.GDthroughObjects4.length = 0;
gdjs.Level01Code.GDladderObjects1.length = 0;
gdjs.Level01Code.GDladderObjects2.length = 0;
gdjs.Level01Code.GDladderObjects3.length = 0;
gdjs.Level01Code.GDladderObjects4.length = 0;
gdjs.Level01Code.GDnextLevelObjects1.length = 0;
gdjs.Level01Code.GDnextLevelObjects2.length = 0;
gdjs.Level01Code.GDnextLevelObjects3.length = 0;
gdjs.Level01Code.GDnextLevelObjects4.length = 0;
gdjs.Level01Code.GDplayerObjects1.length = 0;
gdjs.Level01Code.GDplayerObjects2.length = 0;
gdjs.Level01Code.GDplayerObjects3.length = 0;
gdjs.Level01Code.GDplayerObjects4.length = 0;
gdjs.Level01Code.GDstarObjects1.length = 0;
gdjs.Level01Code.GDstarObjects2.length = 0;
gdjs.Level01Code.GDstarObjects3.length = 0;
gdjs.Level01Code.GDstarObjects4.length = 0;
gdjs.Level01Code.GDstarPointObjects1.length = 0;
gdjs.Level01Code.GDstarPointObjects2.length = 0;
gdjs.Level01Code.GDstarPointObjects3.length = 0;
gdjs.Level01Code.GDstarPointObjects4.length = 0;
gdjs.Level01Code.GDholeCollisObjects1.length = 0;
gdjs.Level01Code.GDholeCollisObjects2.length = 0;
gdjs.Level01Code.GDholeCollisObjects3.length = 0;
gdjs.Level01Code.GDholeCollisObjects4.length = 0;
gdjs.Level01Code.GDleftButtonObjects1.length = 0;
gdjs.Level01Code.GDleftButtonObjects2.length = 0;
gdjs.Level01Code.GDleftButtonObjects3.length = 0;
gdjs.Level01Code.GDleftButtonObjects4.length = 0;
gdjs.Level01Code.GDrightButtonObjects1.length = 0;
gdjs.Level01Code.GDrightButtonObjects2.length = 0;
gdjs.Level01Code.GDrightButtonObjects3.length = 0;
gdjs.Level01Code.GDrightButtonObjects4.length = 0;
gdjs.Level01Code.GDjumpButtonObjects1.length = 0;
gdjs.Level01Code.GDjumpButtonObjects2.length = 0;
gdjs.Level01Code.GDjumpButtonObjects3.length = 0;
gdjs.Level01Code.GDjumpButtonObjects4.length = 0;
gdjs.Level01Code.GDupButtonObjects1.length = 0;
gdjs.Level01Code.GDupButtonObjects2.length = 0;
gdjs.Level01Code.GDupButtonObjects3.length = 0;
gdjs.Level01Code.GDupButtonObjects4.length = 0;
gdjs.Level01Code.GDbgObjects1.length = 0;
gdjs.Level01Code.GDbgObjects2.length = 0;
gdjs.Level01Code.GDbgObjects3.length = 0;
gdjs.Level01Code.GDbgObjects4.length = 0;
gdjs.Level01Code.GDmgObjects1.length = 0;
gdjs.Level01Code.GDmgObjects2.length = 0;
gdjs.Level01Code.GDmgObjects3.length = 0;
gdjs.Level01Code.GDmgObjects4.length = 0;
gdjs.Level01Code.GDgoUpObjects1.length = 0;
gdjs.Level01Code.GDgoUpObjects2.length = 0;
gdjs.Level01Code.GDgoUpObjects3.length = 0;
gdjs.Level01Code.GDgoUpObjects4.length = 0;
gdjs.Level01Code.GDgoDownObjects1.length = 0;
gdjs.Level01Code.GDgoDownObjects2.length = 0;
gdjs.Level01Code.GDgoDownObjects3.length = 0;
gdjs.Level01Code.GDgoDownObjects4.length = 0;
gdjs.Level01Code.GDgoLeftObjects1.length = 0;
gdjs.Level01Code.GDgoLeftObjects2.length = 0;
gdjs.Level01Code.GDgoLeftObjects3.length = 0;
gdjs.Level01Code.GDgoLeftObjects4.length = 0;
gdjs.Level01Code.GDgoRightObjects1.length = 0;
gdjs.Level01Code.GDgoRightObjects2.length = 0;
gdjs.Level01Code.GDgoRightObjects3.length = 0;
gdjs.Level01Code.GDgoRightObjects4.length = 0;
gdjs.Level01Code.GDenemy1Objects1.length = 0;
gdjs.Level01Code.GDenemy1Objects2.length = 0;
gdjs.Level01Code.GDenemy1Objects3.length = 0;
gdjs.Level01Code.GDenemy1Objects4.length = 0;
gdjs.Level01Code.GDmap01Objects1.length = 0;
gdjs.Level01Code.GDmap01Objects2.length = 0;
gdjs.Level01Code.GDmap01Objects3.length = 0;
gdjs.Level01Code.GDmap01Objects4.length = 0;
gdjs.Level01Code.GDhealthBarObjects1.length = 0;
gdjs.Level01Code.GDhealthBarObjects2.length = 0;
gdjs.Level01Code.GDhealthBarObjects3.length = 0;
gdjs.Level01Code.GDhealthBarObjects4.length = 0;

gdjs.Level01Code.eventsList0xb43b0(runtimeScene);
return;

}
gdjs['Level01Code'] = gdjs.Level01Code;
