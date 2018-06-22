# jPop - v.01
### Popups when visitor scrolls downs
jPop is Popup jQuery plugin that helps you to make awesome popup. jPop renders when a visitor scrolls down.
<br>
After visitor scrolls down to 200px (As a default but you can change it). You can change its title,paragraph,Button text and class and input through initializing plugin.
#### [Demo](https://rawgit.com/iksdatoo/jpop/master/index.html)
#### Usage
#### Link Css file:

    <link rel="stylesheet" type="text/css" href="dist/css/plugin.css">
<br>
#### Template:

    
	<div class="popup gee-popup">
		<div class="popup-inner">
			<a class="close-button popup-close-button">
				&times;
			</a>
			<div class="popup-header">
				<h3 class="popup-title"></h3>
			</div>
			<p class="paragraph" ></p>
			<div class="user-content"></div>
			<button class="btn btn-info btn-block btn-lg" ></button>
		</div>
	</div>
#### Link js files:

    
		<script type="text/javascript" src="dist/js/plugin.js" ></script>
		

#### Call the plugin:
 

    
		<script type="text/javascript">
			$("html").jPopup({
				paragraph: "This is dummy paragraph for jPop plugin ",
				buttonText : "Click Me",
				buttonClass : "btn btn-info",
			});
		</script>
#### The default options:
| Option | Value  | 
|  ---   |  ---   |
|Popup Parent | gee-popup |
|Scroll Top Px | 200 |
|Popup Close Button | .popup-close-button |
|Heading | heading - You can change |
|Paragraph | You can paragraph it from options. You can also change the input into your own template |
|User Content | &lt;div class="input"&gt; &lt;input class="form-control" type="text" placeholder="Your Email" &gt; &lt;/div&gt; |
|Button Text | Click me |
|Button Class | btn btn-info btn-block btn-lg |
## Version 0.2 Released
I've released 0.2 version for jPop plugin. I've added one more feature. Now you can call the plugin by your own code so i've changed the slogan to 'The Awesome jQuery Popup plugin'. You can call plugin by following code:

	    $("html").jPopup({
		    paragraph: "This is dummy paragraph for jPop",
			buttonText : "Click Me",
			buttonClass : "btn btn-info",
			initThrough : function () {
				$(".click-me").click(function(e) {
					e.preventDefault();
					$.fn.jPopup.openPopup();
				});
			}
	    });

#### [Click Demo](https://rawgit.com/iksdatoo/jpop/master/index-click.html)
### Contributors
Ilyas Karim 
<br>
http://www.twitter.com/iksdatoo
<br>
http://www.facebook.com/iksdatu

