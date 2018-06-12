# Lab 07 : JavaScript

## Lab Task
Make a Calculator in JavaScript

### Functionalities
1. Whenever a user presses any number (0-9) or operations (+,-,x,/,±, .), it must be shown in the input text field.
2. In case of ‘.’ button pressed, a ‘0’ must be added at the end of the string as shown in above image.
3. When ‘=’ button is pressed result is shown in the text field.
4. ‘C’ button must clear and reset everything (text field, any storage variables).
5. For a given input N, ‘1/x’ should give the results of 1/N (e.g. input =5, result = 0.20) of the given input.
6. For a given input N, ‘x2’ should square the input (e.g. input =5, result = 25).
7. The square root button, ,should calculate the square root of the input.
8. The ‘±’ button should add/remove a ‘–’ sign to the input value.
9. MS button must store the numeric input value written in the text field in a variable. In case of an equation as shown in the image above, it should not store anything.
10. MC button should clear stored numeric value.
11. MR button should recall the stored value and display it in the input text field.
12. M+ button should add the input value given in the text field in to the stored value in memory and save it as stored value.

### Hints
1. JS ‘OnClick’ event will be attached to all buttons in the calculator.
2. To handle value storage (MS, MC, MR, M+), create a global variable, M, and change its value according to the button pressed.
3. To display inputs as a sequence of numbers and arithmetic operation (e.g. 2+3-5+7/2.5), use string concatenation.
4. You can use JS eval() function to directly execute a string as a JS statement. See example below:
```javascript
	var input= “2+3-5+2.5/2.5”;
	eval(input);   // output: 1.0
```
5. Keep in mind point 4 on eval(), when “=” button is pressed just call var result = eval(document.getElementByID(“inputTextField”).value);
6. In case of any questions, take help from your lab engineer.