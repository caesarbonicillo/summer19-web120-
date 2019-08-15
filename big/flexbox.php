<?php include "includes/header.php";?>    
<!-- START LEFT COL -->
<section>
 <h2 class="pageID"><?=$PageID?></h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->

<p class="para"> 
When web pages were in their infancy the layout were very much like the design of magazines. Magazines were the only reference point at the time and it was intuitive for the users to navigate through the pages. Floats and positioning were how web developers structured their layouts but it could only copy what magazines looked like and not fully realize the potential of the web browser window. Thus the Flexible box was born.
</p>
<p class="para"> 
	In the past decade, floats and positioning was the sole option for web layouts. But it could only position items horizontally. Flexbox has is not only capable of controlling positioning horizontally but also, alignment, direction, order, and size. When browsers fully adopt the flex property, floats only use may be to have words flow around an image and to support older browsers. 
</p>
<p class="para"> 
	The Flexible Box setup is very simple. It uses Flex Containers and Flex Items. Flex Containers hold Flex Items. To put it into a more tangible state, Flex Containers are bento boxes, and Flex Items are the actual boxes contained in the Bento. The Container is in charge of arranging the Items that it contains, while the Items let the container know how many of them need to be positioned. 
</p>
<p class="para"> 
	To begin this process you would need to turn one of your elements from your HTML into a container, and then manipulate the display property. Here is one such example:
</p>
<p> 
Main-container {
	Display: flex;
}
</p>
<p class="para"> 
	By doing this it has turned one of your elements into a Flexbox which can make manipulating your website a lot easier to manipulate. This opens a larger range of possibilities that Float and Position could not do. With Flexbox, you can now create a container, horizontally align items within the property, create not only rows but columns, change the order of the items, and stretch and shrink items within the container.
</p>
    
<p> 
Oliver, James. “Flexbox Tutorial” , 2017
https://internetingishard.com/html-and-css/flexbox/#summary
</p>
<p>
Vandehey, Scott. “What is FLexbox”, 24 August, 2015
https://spaceninja.com/2015/08/24/what-is-flexbox/
</p>

 
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
   
</aside>
<!-- END RIGHT COL -->
 
<?php include "includes/footer.php";?>