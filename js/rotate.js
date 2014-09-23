function rotate(e:Event):void {
	e.currentTarget.rotationY += 5;
}

img.addEventListener(Event.ENTER_FRAME, rotate);