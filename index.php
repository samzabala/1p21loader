<html>
    <head>
        <title>Loading Screen Demonstration</title>
        <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    </head>
    <body>
        <div id="loader">
            <div id="loader-wrapper">
            <div class="icon iconEnter">


                    <!-- SVG illustration + markup has been modified for better manipulation -->
                    <svg version="1.1" id="loader-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="600px" height="240" viewBox="0 0 600 240"
                        style="enable-background:new 0 0 600 240;" xml:space="preserve">
                        
                        <g class="car">
                            <g class="body">
                                <!-- other dtails: behind body -->
                                <polygon class="stroke-normal stroke-filled" points="330.4,99.2 372.9,74.9 380.1,95.3 379,113.3 375.9,116.8 377.6,129.2 382.8,134.5 381,145.9 376.4,146.1 366.6,151.7"/>

                                <line class="stroke-bold" x1="317.5" y1="95" x2="321.4" y2="79.1"/>
                                
                                <!-- body outline-->
                                <path class="stroke-normal stroke-filled" d="M124.6,166h9.9l-2.4, 7.3h143.1l-5-9.5H282h51.4l32.3-9.2c2.9-8.7,5-30.5-1.1-47.5l-89.3-20.7h-69.8 l-55.2,22.3l-81,10.8l-30.9,11.3l-3.2,9.7l-6,6.7l0.8,6.2h7.7l11.3,6.2h24.5L124.6,166z"/>
                                <!-- door -->
                                <polyline class="stroke-normal" points="150.3,108.7 162.8,163.2 229.1,163.2 264.6,121.9 264.6,86.4"/>

                                <!-- back windshield -->
                                <polyline class="stroke-normal"  points="275.4,86.4 275.4,114.5 346.6,114.5 343.1,102.1" />
                                <polyline class="stroke-light" points="290.1,89.8 290.1,105.1 296.3,114.5"/>
                                <polyline class="stroke-light" points="301.7,92.5 301.7,105.1 307.9,114.5"/>
                                <polyline class="stroke-light" points="312.4,95 312.4,105.1 318.6,114.5"/>

                                <!-- top part -->
                                <line class="stroke-lighter" x1="258.3" y1="82.7" x2="271" y2="82.7"/>
                                <line class="stroke-lighter" x1="265.6" y1="76.6" x2="265.6" y2="82.7"/>
                                <line class="stroke-lighter" x1="256.2" y1="75.9" x2="272.4" y2="77.3"/>

                                <!-- window -->
                                <polygon class="stroke-normal" points="255.3,96.1 255.3,118.1 165.2,120.7 209.8,96.1"/>
                                <polyline class="stroke-normal" points="190.5,120 212.8,106.3 236.7,106.3 243.6,118.4"/>

                                <!-- body stroke -->
                                <line class="stroke-lighter" x1="157.6" y1="140.5" x2="35.2" y2="140.5"/>
                                <line class="stroke-lighter" x1="157.1" y1="138.5" x2="250.3" y2="138.5"/>
                                <line class="stroke-lighter" x1="368.3" y1="140.5" x2="248.5" y2="140.5"/>
                                
                                <!-- other details: on body -->
                                <line class="stroke-lighter" x1="247.6" y1="126.5" x2="247.6" y2="126.5"/>
                                <line class="stroke-normal" x1="226.8" y1="144.5" x2="235.1" y2="144.5"/>
                                <line class="stroke-normal" x1="57.5" y1="147.6" x2="64.1" y2="147.6"/>
                                <line class="stroke-normal" x1="51.1" y1="146.8" x2="51.1" y2="150.7"/>

                                <g class="pole">
                                    <line class="stroke-normal" x1="280.9" y1="87.7" x2="338.3" y2="30.3"/>
                                    <path class="stroke-lighter" d="M338.3,30.3l4.9-4.9c0.9-0.9,2.4-1,3.4-0.2l1.3,1c1.5,1.3,3.8,1.1,5.1-0.3l6.1-6.5c2.1-2.2,1.9-5.7-0.4-7.7 l-1.7-1.4c-2.5-2.1-6.2-2-8.5,0.2l-0.2,0.2"/>
                                </g>
                            </g>


                            <g class="wheels">
                                <g class="wheel">
                                    <circle class="stroke-normal stroke-filled" cx="99.3" cy="160.7" r="25.9"/>
                                    <circle class="stroke-normal" cx="99.3" cy="160.5" r="16"/>
                                </g>
                                <g class="wheel">
                                    <circle class="stroke-normal stroke-filled" cx="307.8" cy="160.7" r="25.9"/>
                                    <circle class="stroke-normal" cx="307.8" cy="160.5" r="16"/>
                                </g>
                            </g>
                        </g>
                        <g class="stripes">
                            <!-- <line class="stripe" x1="461.4" y1="72.4" x2="378" y2="72.4"/> -->
                            <!-- <line class="stripe" x1="570.8" y1="82.7" x2="404.3" y2="82.7"/> -->
                            <!-- <line class="stripe" x1="503.9" y1="106.3" x2="386.6" y2="106.3"/> -->
                            <!-- <line class="stripe" x1="509.5" y1="92.5" x2="412.6" y2="92.5"/> -->
                            <!-- <line class="stripe" x1="523.6" y1="124.8" x2="393.7" y2="124.8"/> -->
                            <line class="stripe" x1="560.6" y1="168.6" x2="343.7" y2="168.6"/>
                            <line class="stripe" x1="506.3" y1="151.7" x2="416.2" y2="151.7"/>
                            <line class="stripe" x1="423" y1="176.5" x2="332.9" y2="176.5"/>
                            <line class="stripe" x1="445.3" y1="138.5" x2="398" y2="138.5"/>
                        </g>


                        <g class="glows">
                            <!-- alt -->
                            <!-- <path class="glow accent" d="M222.7,61.1c26.6-11.5,47.4-9.6,51.6,7.2c5.6,23-22.4,65.3-62.6,94.4c-37.1,26.8-71.6,33.1-81.2,16"/>
                            <path class="glow accent" d="M136.7,103.3c-7.3-13.4-10.4-25.8-8.2-35c5.6-23,42.9-18.1,83.1,11s68.3,71.4,62.6,94.4 c-4.1,16.8-25,18.7-51.6,7.2"/>
                            <path class="glow accent" d="M146.8,85.4c-4.8-17.4-5.8-32.8-2-43.3c9.5-26.1,45.3-12.5,79.9,30.5s54.8,99.1,45.3,125.2 c-7,19.1-27.8,17-52.1-2.2"/>
                            <path class="glow accent" d="M218,44.4c24.2-19.2,45-21.3,52.1-2.2c9.5,26.1-10.7,82.2-45.3,125.2s-70.4,56.6-79.9,30.5"/> -->
                            
                            <path class="glow accent" d="M15.7,131.4L15.7,131.4L15.7,131.4c0,26.6,21.6,48.2,48.2,48.2h94.6"/>
                            <path class="glow accent" d="M15.7,131.4L15.7,131.4L15.7,131.4c0-40,32.4-72.4,72.4-72.4h62.4"/>
                            <path class="glow accent" d="M15.7,131.4L15.7,131.4L15.7,131.4c0,40,32.4,72.4,72.4,72.4h82.4"/>
                            <path class="glow accent" d="M15.6,131.4L15.6,131.4L15.6,131.4c0,11.1,9,20.1,20.1,20.1h82.7"/>
                            <path class="glow accent" d="M15.7,131.4L15.7,131.4L15.7,131.4c0-26.6,21.6-48.2,48.2-48.2h14.6"/>
                            <path class="glow accent" d="M15.6,131.5L15.6,131.5L15.6,131.5c0-11.1,9-20.1,20.1-20.1h92.7"/>
                            <line class="glow accent" x1="147.5" y1="166.4" x2="270" y2="166.4"/>
                            <line class="glow accent" x1="148.9" y1="194.8" x2="305.8" y2="194.8"/>
                            <line class="glow accent" x1="87.7" y1="67.4" x2="265.5" y2="67.4"/>
                            <line class="glow accent" x1="157.3" y1="120" x2="352.9" y2="120"/>
                        </g>
                    </svg>

                <!-- END SVG CODE -->




                </div>
                <div class="number">

                </div>
            </div>
            
        </div>
        
        <main>
            <h1>Hi this is the content</h1>

            <h2>H2 &#8211; Fusce eu sollicitudin nibh, at convallis nisl. Sed in sapien eu risus tincidunt suscipit sit amet sed metus. Sed in erat sed ligula</h2>
            <p>Sed quam mi, luctus vulputate magna nec, sagittis accumsan lectus. Sed in erat sed ligula efficitur fermentum. Cras vestibulum metus a lorem elementum, eget consectetur eros pellentesque. <a href="#">Hyperlink style, hyperlink hover style</a>. Praesent vel porta purus. Mauris volutpat lectus id nibh aliquet pulvinar. Praesent vitae lectus dolor. Phasellus facilisis sollicitudin turpis ut tincidunt. Proin fringilla libero a libero pulvinar, id posuere ligula ullamcorper. Sed sit amet arcu eget leo commodo accumsan. In porta mauris in tristique sagittis. Pellentesque massa tortor, condimentum eu ornare sed, dapibus ac nulla.</p>
            <ul>
            <li><strong>Praesent vel porta purus.</strong> Sed in sapien eu risus tincidunt suscipit sit amet sed metus. Nam a ex sit amet felis aliquam luctus  quis ac ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hac habitasse platea dictumst. Maecenas convallis  mauris non leo vulputate, vel suscipit odio semper.</li>
            <li><strong>Praesent vel porta purus.</strong> Sed in sapien eu risus tincidunt suscipit sit amet sed metus. Nam a ex sit amet felis aliquam luctus  quis ac ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hac habitasse platea dictumst. Maecenas convallis  mauris non leo vulputate, vel suscipit odio semper.</li>
            <li><strong>Praesent vel porta purus</strong>. Sed in sapien eu risus tincidunt suscipit sit amet sed metus. Nam a ex sit amet felis aliquam luctus  quis ac ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hac habitasse platea dictumst. Maecenas convallis  mauris non leo vulputate, vel suscipit odio semper.</li>
            </ul>
            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse convallis egestas est et euismod. Praesent scelerisque suscipit massa eu egestas. Nullam quis blandit risus. Suspendisse efficitur lorem ac lectus fringilla consequat. Aenean fermentum nisi sit amet urna suscipit viverra. Pellentesque massa tortor, condimentum eu ornare sed, dapibus ac nulla.</p>
            <h3>H3 rem ipsum dolor sit amet, consectetur adipisicing elit</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <blockquote><p>“Nunc fermentum justo vitae malesuada ornare. Fusce vel orci ac nulla varius ultricies ac non tellus. Sed ut nisl quis tortor posuere condimentum.”</p></blockquote>
            <p class="lead">“Nunc fermentum justo vitae malesuada ornare. Fusce vel orci ac nulla varius ultricies ac non tellus. Sed ut nisl quis tortor posuere condimentum.”</p>
            <h4>H4 rem ipsum dolor sit amet, consectetur adipisicing elit</h4>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>

        </main>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                setTimeout(function(){
                    document.querySelector('body').classList.add('loaded');
                },5000);
            });
        </script>
    </body>
</html>