# Lab 05 : Responsive Web

## Lab Tasks
Use HTML & CSS to develop a website which uses responsive web Rules and is supported on every size of device.

### Responsive Web Design Rules
1. Set Width of page equal to width of Device
```html
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
```
2. Use Border Box Property on every HTML Element
```css
* {
	box-sizing: border-box;
}
```
3. Set width for Mobile devices equal to width of the page
```css
[class*="col-"] {
	/* For Mobile Phones */
	width: 100%;
}
```
4. Add media Queries for Desktop (Laptop) & Tablet mode
```css
@media only screen and (min-width: 768px) {
	/* For desktop */
	.col-1 {width: 8.33%;}
	.col-2 {width: 16.66%;}
	.col-3 {width: 25%;}
	.col-4 {width: 33.33%;}
	.col-5 {width: 41.66%;}
	.col-6 {width: 50%;}
	.col-7 {width: 58.33%;}
	.col-8 {width: 66.66%;}
	.col-9 {width: 75%;}
	.col-10 {width: 83.33%;}
	.col-11 {width: 91.66%;}
	.col-12 {width: 100%;}
}
```
```css
@media only screen and (min-width: 600px) {
	/* For tablets */
	.col-m-1 {width: 8.33%;}
	.col-m-2 {width: 16.66%;}
	.col-m-3 {width: 25%;}
	.col-m-4 {width: 33.33%;}
	.col-m-5 {width: 41.66%;}
	.col-m-6 {width: 50%;}
	.col-m-7 {width: 58.33%;}
	.col-m-8 {width: 66.66%;}
	.col-m-9 {width: 75%;}
	.col-m-10 {width: 83.33%;}
	.col-m-11 {width: 91.66%;}
	.col-m-12 {width: 100%;}
}
```
5. Float every column to left
```css
[class*="col-"] {
	float: left;
	padding: 5px;
}
```
6. Clear after row
```css
.row::after {
	content: "";
	clear: both;
	display: block;
}
```