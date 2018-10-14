
BubbleSort Simulation
---------------------

* PROBLEM: Write a simulation of bubble sort algorithm using PHP.


GOALS
------------

1. Develop a one‐page php‐based web application in functionality similar to the java applet
    on the screenshot. This application does not have to be the exact copy of the applet, only
    the elements described below are required.
2. The application should show every step of the bubble‐sort algorithm for a vector
    containing 10 integer numbers.
3. There should be two buttons on the page: Shuffle and Step.
    a. Shuffle button should initialize the array with 10 random integers between 0 and100.
    b. Step button performs a single step of the sorting algorithm and displays it on the web page.
4. The array should be presented as a table with 10 rows (not columns like in the applet
    above). Each row would include a rectangle colored with a color of your choice. The
    width of the rectangle would be proportional to the number stored in the corresponding
    array cell.
5. Every time the Step button is pressed, two numbers are compared and possibly
    swapped. The rectangles representing these two numbers should be highlighted using
    colors different from the color of all the other rectangles.
6. Consecutive clicking on the step button should eventually sort the array so that the
    largest number (the widest rectangle) will be at the top of the page (the first row in the
    table) and the smallest number (the narrowest rectangle) will be in the last row of the
    table.
7. Once the array is sorted, the Step button should either be disabled or hidden or from the
    user. When the Shuffle button is clicked again, the Step button will be reenabled.
8. All the processing needs to be done on the server side.
9. Make it as presentable and user‐friendly as possible.
10. The deliverable will be a single php file (unless there are images or javascript files
    required by the page).
11. Bonus features:
    a. Add a Play button that would simulate consecutive clicks on the Step button and
    use Ajax calls to reload the table
    b. if you really want to impress us, complete this assignment as a Drupal module.
    Feel free to be as creative as you want. Some ideas of implementation:
        i. Show the Bubble Sort demo as a separate page with a dedicated path,
        let’s say http://www.example.com/bubblesort.
        ii. Make the module configurable – the admin may want to change the
        number of integers that need to be sorted, range of integers etc.
        iii. Whatever else you think would be cool and would make sense for this
        application.



CONFIGURATION AND FEATURES
--------------------------
