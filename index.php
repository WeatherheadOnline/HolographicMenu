<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta name="revised" content="Friday, September 26th, 2025, 7:00 pm">
    <meta name="author" content="Eddie Weatherhead">
    <meta name="language" content="english">
    <meta name="description" content="Holographic Menu: UI generator for form inputs on mobile. Easily improve your mobile users' experience when filling in forms.">
    <meta name="robots" content="follow, index">
    <meta property="og:title" content="Holographic Menu">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.weatherheadonline.com/holographic-menu/">
    <meta name="image" property="og:image" content="http://www.weatherheadonline.com/holographic-menu/img/ogimage.jpg">
    <meta property="og:description" content="Holographic Menu: UI generator for form inputs on mobile. Easily improve your mobile users' experience when filling in forms.">
    <link href="https://fonts.cdnfonts.com/css/cooper-black" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:wght@400;700&family=Roboto+Mono:wght@100..700&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <title>Holographic Menu</title>
</head>
<body>
    <img style="display: none" src="img/ogimage.jpg">
    
    <div id="holograph-menu">
        <div id="pointer" class="center-text">   <!-- A one-time hint to show users the way -->
            <div id="pointer-text">
                <p>Use this menu</p><p>to reach form fields</p><p>more easily</p><p>with your thumb</p>
            </div>
            <div id="pointer-symbols">
                    <p id="pointer-dismiss" class="bigger">&times;</p>
                    <p id="pointer-arrow" class="bigger">&#8681</p>
            </div>
        </div> 
        <div id="holograph-icon">
            <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path style="stroke-width:5.85" d="m 5.860226,3.5 v 13" />
                <path style="stroke-width:1.85" d="m 10,15.58 h 7" />
            </svg>
        </div>
        <div id="holograph-buttons"></div>  <!-- This container gets autofilled with buttons for each input element -->
    </div>
    
    <div id="home-link">
        <a href="#intro" class="center-text"><p>Back to top</p></a>
    </div>

    <main>
        <aside>
            <section>
                <h2 class="center-text">Installation instructions</h2>            
            </section>
            <section>
                <p>Just add the included class and property to each of your form inputs. The input menu automatically populates with a button for each form input.</p>
            </section>
            <section>
                <ol>
                    <strong><li>Open <a href="instructions/RequiredDiv.txt" target="_blank">RequiredDiv.txt</a>.</li></strong>
                    <ol>
                        <li>Add the included div to your page, as a direct child of the body.</li>
                        <p>For each input element (including textarea elements):</p>
                        <li>Add the class name "holograph-menu".</li>
                        <li>Add the custom property "data-holomenu".</li>
                        <li>Add a value to the custom property. This determines the text the user sees on the matching button in the input menu, so shorter is better.</li>
                    </ol>
                    <strong><li>Open <a href="instructions/HolographicMenu.css" target="_blank">HolographicMenu.css</a>.</li></strong>
                    <ol>
                        <li>Save it to your project.</li>
                        <li>Remove the optional styling at the bottom of the file if you don't want it.</li>
                        <li>Replace the colors and length values with your preferred values.</li>
                        <li>Link to the CSS file in the head of your HTML file.</li>
                        <p><strong>Optional</strong>: If your form contains multiple fieldsets, color-coordinate their buttons' borders:</p>
                        <li>In the HTML file, give each fieldset a unique name attribute. For each fieldset, add this rule to the CSS file: 
                .holomenu-btn.[your fieldset's name]-border {border-color: ___}</li>
                    </ol>
                    <strong><li>Open <a href="instructions/HolographicMenu.js" target="_blank">HolographicMenu.js</a>.</li></strong>
                    <ol>
                        <li>Save this file to your project.</li>
                        <li>Add a script tag in the body of your HTML file, listing the JS file as the value for the src attribute.</li>
                    </ol>
                </ol>
            </section>
            <section>
                <p class="footnote">The input menu is designed for mobile, and it's turned off by default for desktop devices. If you've installed it and would like to test it out on desktop, comment out line 39 in HolographicMenu.css ("display: none;").</p>
            </section>
            <section>
                <p>Looking for a copy of the input-menu icon? The SVG files can be found here: <a href="./img/holomenu-icon_with-border.svg" target="_blank">with the border</a>, and <a href="./img/holomenu-icon_no-border.svg" target="_blank">without the border</a>. (On this page, the SVG is in-line in the HTML.)</p>
            </section>
        </aside>

        <div class="main-contents-wrapper">
            <div class="bkgd"><div class="bkgd-shape tilt-left" id="bkgd-shape-1"></div><div class="bkgd-shape tilt-right" id="bkgd-shape-2"></div><div class="bkgd-shape tilt-right" id="bkgd-shape-3"></div></div>
            <div class="main-contents">

                <header class="center-text" id="intro">
                    <p id="tool-title">Holographic menu</p>
                    <h1>UI generator for form inputs</h1>
                    <h2>Easily improve your mobile users' experience when filling in forms</h2>    
                </header>

                <section>
                    <p>Form input fields can be difficult to reach when you're using your mobile device one-handed. If you could just... reach... a bit higher... with your thumb...</p>
                    <p>This easily-installed input menu brings online form inputs within reach of your users' thumbs.</p>
                    <p>User experience is enhanced by color-coded input buttons to distinguish between checkboxes, radio buttons and text fields. When a button is tapped, focus is placed on the matching input, checkboxes are toggled, and radio buttons are checked.</p>
                </section>

                <section>
                    <form>
                        <fieldset name="fieldset-1">
                            <legend class="gap-below">The two fieldsets' buttons have <span class="text-featured">different colored borders</span></legend>
                            
                            <label for="userName" class="labelText gap-below">Here's a required field<span class="asterisk">*</span>
                                <input type="text" id="userName" class="inputText holograph-menu" name="userName" data-holomenu="Required field" required >
                            </label>

                            <label for="returnAddress" class="labelText gap-below">An email address
                                <span class="asterisk">*</span>
                                <input type="email" id="returnAddress" class="inputText holograph-menu" name="userEmail" data-holomenu="Email" required >
                            </label>
                            
                            <label for="messageSubject" class="labelText gap-below">This field is optional
                                <input type="text" id="messageSubject" class="inputText holograph-menu" name="subject" data-holomenu="Optional field" >
                            </label>

                            <div class="side-by-side gap-below">
                                <div id="checkboxes" class="multi-select">

                                    <label for="chk1">
                                        <input type="checkbox" id="chk1" name="chk1" value="red" class="holograph-menu" data-holomenu="Red" /> 
                                        Select <span style="color:#FF5555">"red"</span>
                                    </label>

                                    <label for="chk2">
                                        <input type="checkbox" id="chk2" name="chk2" value="green" class="holograph-menu" data-holomenu="Green" /> 
                                        Select <span style="color:#55FF55">"green"</span>
                                    </label>

                                    <label for="chk3">
                                        <input type="checkbox" id="chk3" name="chk3" value="blue" class="holograph-menu" data-holomenu="Blue" /> 
                                        Select <span style="color:#5577FF">"blue"</span>
                                    </label>
                                </div>
                                <div id="radio-buttons" class="multi-select">
                                    <label for="opt1">
                                        <input type="radio" id="opt1" value="opt1" name="radios" class="holograph-menu" data-holomenu="Opt 1" />
                                        Option 1
                                    </label>            
                                    <label for="opt2">
                                        <input type="radio" id="opt2" value="opt2" name="radios" class="holograph-menu" data-holomenu="Opt 2" />
                                        Option 2
                                    </label>            
                                    <label for="opt3">
                                        <input type="radio" id="opt3" value="opt3" name="radios" class="holograph-menu" data-holomenu="Opt 3" />
                                        Option 3
                                    </label>            
                                </div>
                            </div>
                        
                            <label for="body" class="labelText gap-below">Textarea elements hold more text
                                <span class="asterisk">*</span>
                                <textarea id="messageBody" class="inputText holograph-menu" name="message" data-holomenu="A text area" rows="4" cols="60" required ></textarea>
                            </label>
                        </fieldset>

                        <p class="footnote">The input menu would typically be hidden on desktop devices, but it's shown here for demonstration purposes. See the sidebar for installation instructions and more info.</p>

                        <fieldset name="fieldset-2">
                            <legend>Part two of the form</legend>
                            <p>Its matching input-menu buttons have a <span class="text-featured">different colored border</span>.</p>

                            <div class="side-by-side">
                                <label for="userName2" class="labelText">A required field<span class="asterisk">*</span>
                                    <input type="text" id="userName2" class="inputText holograph-menu" name="userName2" data-holomenu="Required field 2" required >
                                </label>
                                <label for="messageSubject2" class="labelText gap-below">Optional text
                                    <input type="text" id="messageSubject2" class="inputText holograph-menu" name="subject2" data-holomenu="Optional field 2" >
                                </label>
                            </div>

                            <div>
                                <label for="returnAddress2" class="labelText gap-below">Another email address
                                    <input type="email" id="returnAddress2" class="inputText holograph-menu" name="userEmail2" data-holomenu="Email 2" required >
                                </label>
                            </div>

                            <div class="buttonsWrapper side-by-side">
                                <button type="reset" id="clearForm">Clear the form</button>
                                <button id="submitEmail" disabled >Send message</button>
                            </div>
                        </fieldset>
                    </form>
                </section>
                
                <section>
                    <p class="footnote">The name "holographic menu" refers to the phenomenon in <a href="https://en.wikipedia.org/wiki/Holography" target="_blank">holographics</a> where a small part is representative of the whole. Here, a small part of the screen is representative of the larger page.</p>
                    <p>If you have any questions, or suggestions for improvement, please let me know. My email address is listed in the <a href="../#Contact" target="_blank">contact section</a> of my portfolio site.</p>
                </section>
            </div>
        </div>

    </main>
    
    <footer class="center-text">
        <a href="../" target="_blank">
            <p>Made by &copy; www.WeatherheadOnline.com</p>
        </a> 
    </footer>

    <script src="js/clearForm.js"></script>
    <script src="js/holograph-menu.js"></script>
</body>
</html>
