# Lab 08 : jQuery

## Lab Tasks
## Task 1
Using jQuery, you have to change the behavior of the list items ```<li>``` as explained below:
1. When you click on any list item ```<li>```, it should display current date and time in the format shown in the image below.
	+ Hint: A ```<span>``` class ‘date’ is already defined in CSS. You can use it to style date and time.
2. Change the behavior of the list items (using jQuery) as explained below:
    1. Add a new paragraph after last list item.
    2. When you click or mouse over on any list item ```<li>```, it should display following information:
        + Item: Name of list item which is clicked or on which mouse over event occurred
        + Status: Important (for honey and pine nuts), Available (for all other items)
        + Event: Name of event (click, mouseover)
3. Extend the file but adding new list items and a footer.
	+ When scroll the page down to bottom, a new div appears at the bottom-right side, showing latest promotions
	+ The promotion div must disappear as soon as the user scrolls the page up to 500px from the bottom.
### Hints:
* Use ```$window.scrollTop()``` to get  the current vertical position of the scroll bar.
* Use following formula to find if the user is within bottom 500px of the page.
	+ ```$('#footer').offset().top - $window.height() – 500```
* Use ```$window.on (‘scroll’, function(){...}``` to handle onScroll() event of the window.
* jQuery’s animate() function will help you achieving this task.

## Task 2
1. Add functionality for ‘add row’ button which should add a new row with the data entered by the user in Name and Email Address text fields. The table should be extended dynamically and new row should be appended at the end.
2. Add functionality for ‘delete row’ button which should delete all selected rows.